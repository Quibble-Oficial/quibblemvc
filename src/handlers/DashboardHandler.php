<?php

namespace src\handlers;

use \src\models\Reclamacoe;
use ClanCats\Hydrahon\Query\Expression as Ex;
use \PDO;

class DashboardHandler
{

    private static function getContagemMensalPorAno($ano)
    {
        // 1. Array com 12 meses, todos zerados
        $contagens = array_fill(1, 12, 0);

        // 2. SQL direto com bind seguro
        $sql = "
        SELECT 
            MONTH(criado_em) AS mes, 
            COUNT(*) AS total
        FROM reclamacoes
        WHERE YEAR(criado_em) = :ano
        GROUP BY MONTH(criado_em)
        ORDER BY MONTH(criado_em)
    ";

        // 3. Obter conexão via tua classe Database
        $pdo = \core\Database::getInstance();
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':ano', $ano, PDO::PARAM_INT);
        $stmt->execute();
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // 4. Preenche contagens por mês
        foreach ($resultados as $row) {
            $mes = intval($row['mes']);
            $contagens[$mes] = intval($row['total']);
        }

        // 5. Retorna em ordem (Janeiro=índice 0, Dezembro=índice 11)
        return array_values($contagens);
    }

    /**
     * Gera os dados de comparação de reclamações anuais no formato ApexCharts.
     */
    public static function getComparacaoAnualReclamacoes($anoAtual, $anoAnterior)
    {
        $dadosAnoAtual = self::getContagemMensalPorAno($anoAtual);
        $dadosAnoAnterior = self::getContagemMensalPorAno($anoAnterior);

        // Formato ApexCharts esperado
        $series = [
            [
                'name' => (string) $anoAtual,
                'data' => $dadosAnoAtual
            ],
            [
                'name' => (string) $anoAnterior,
                'data' => $dadosAnoAnterior
            ]
        ];

        return $series; // Pronto para ser injetado no JavaScript
    }

    public static function getStatsResumo()
    {
        // A consulta para buscar os totais brutos permanece a mesma
        $stats = Reclamacoe::select([
            new Ex('COUNT(*) as total_reclamacoes'),
            new Ex("SUM(CASE WHEN status = 'pendente' THEN 1 ELSE 0 END) as total_pendentes"),
            new Ex("SUM(CASE WHEN status = 'em_andamento' THEN 1 ELSE 0 END) as total_em_andamento"),
            new Ex("SUM(CASE WHEN status = 'resolvido' THEN 1 ELSE 0 END) as total_resolvidas"),
        ])
            ->one();

        if (!$stats) {
            return [
                'total_reclamacoes' => 0,
                'total_pendentes' => 0,
                'total_em_andamento' => 0,
                'total_resolvidas' => 0,
                'pct_em_andamento_vs_pendente' => 0.00
            ];
        }

        // Garante que todos os valores de contagem sejam inteiros para o cálculo
        $stats = array_map('intval', $stats);

        $pendentes = $stats['total_pendentes'];
        $emAndamento = $stats['total_em_andamento'];

        // CÁLCULO DA PORCENTAGEM
        // A lógica é: Em Andamento / (Em Andamento + Pendentes)
        $denominador = $pendentes + $emAndamento;

        if ($denominador > 0) {
            // Calcula a porcentagem, arredonda para 2 casas decimais, e multiplica por 100
            $porcentagem = round(($emAndamento / $denominador) * 100, 2);
        } else {
            $porcentagem = 0.00;
        }

        // Adiciona a nova métrica ao array de retorno
        $stats['pct_em_andamento_vs_pendente'] = $porcentagem;

        return $stats;
    }

    private static function getContagemMensalPorAnoEStatus($ano, $status)
    {
        // Inicializa o array de contagens com zero para 12 meses
        $contagens = array_fill(1, 12, 0);

        // Consulta Hydrahon com filtro WHERE adicional
        $resultados = Reclamacoe::select([
            new Ex('MONTH(criado_em) as mes'),
            new Ex('COUNT(*) as total')
        ])
            ->where(new Ex('YEAR(criado_em)'), $ano)
            ->where('status', $status) // <--- FILTRO CHAVE AQUI!
            ->groupBy(new Ex('MONTH(criado_em)'))
            ->orderBy(new Ex('MONTH(criado_em)'), 'ASC')
            ->get();

        // Mapeia os resultados do banco para o array de 12 meses
        foreach ($resultados as $row) {
            $mes = intval($row['mes']);
            $contagens[$mes] = intval($row['total']);
        }

        // Retorna apenas os valores das contagens (em ordem)
        return array_values($contagens);
    }

    /**
     * Gera os dados de comparação anual de reclamações RESOLVIDAS no formato ApexCharts.
     */
    public static function getComparacaoAnualResolvidas($anoAtual, $anoAnterior)
    {
        // Reutiliza o helper interno, passando o status 'resolvido'
        $dadosAnoAtual = self::getContagemMensalPorAnoEStatus($anoAtual, 'resolvido');
        $dadosAnoAnterior = self::getContagemMensalPorAnoEStatus($anoAnterior, 'resolvido');

        // Formato ApexCharts esperado (Array de objetos)
        $series = [
            [
                'name' => (string) $anoAtual,
                'data' => $dadosAnoAtual
            ],
            [
                'name' => (string) $anoAnterior,
                'data' => $dadosAnoAnterior
            ]
        ];

        return $series;
    }

    public static function getListaReclamacoesDashboard($limit = 10)
    {
        $lista = Reclamacoe::select([
            'reclamacoes.reclamacao_id', // Adicione o ID para o link de detalhes
            'reclamacoes.status',
            'reclamacoes.criado_em',
            'usuarios.nome as cidadao_nome', // Cidadão
            'categorias.nome as categoria_nome', // Categoria
            'localizacoes.logradouro', // Local (pode ser NULL)
            'localizacoes.numero',     // Local (pode ser NULL)
            'bairros.nome as bairro_nome' // Bairro (útil para localização genérica)
        ])
            ->join('usuarios', 'usuarios.usuario_id', '=', 'reclamacoes.usuario_id') // INNER JOIN: sempre há um usuário
            ->join('categorias', 'categorias.categoria_id', '=', 'reclamacoes.categoria_id') // INNER JOIN: sempre há uma categoria

            // LEFT JOINs para lidar com NULLs
            ->leftJoin('localizacoes', 'localizacoes.localizacao_id', '=', 'reclamacoes.localizacao_id')
            ->leftJoin('bairros', 'bairros.bairro_id', '=', 'localizacoes.bairro_id')

            ->orderBy('reclamacoes.criado_em', 'DESC')
            ->limit($limit)
            ->get();

        return $lista;
    }

    public static function getComparacaoAnualTotal($anoAtual, $anoAnterior)
    {
        $dadosAnoAtual = self::getContagemMensalPorAno($anoAtual);
        $dadosAnoAnterior = self::getContagemMensalPorAno($anoAnterior);

        $series = [
            [
                'name' => (string) $anoAnterior,
                'color' => '#A8CBFE',
                'data' => $dadosAnoAnterior
            ],
            [
                'name' => (string) $anoAtual,
                'color' => '#0D6EFD',
                'data' => $dadosAnoAtual
            ]
        ];

        return $series;
    }
}
