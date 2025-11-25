<?php

namespace src\handlers;

use \src\models\Reclamacoe;
use ClanCats\Hydrahon\Query\Expression as Ex;
use \PDO;

class RelatorioHandler
{
    /**
     * Gera um array com a contagem de reclamações por categoria.
     * Usado para o Ranking de Problemas Mais Comuns.
     */
    public static function getRankingCategorias()
    {
        // 1. Consulta: Conta as reclamações por categoria e ordena
        $ranking = Reclamacoe::select([
            'categorias.nome as categoria_nome',
            new Ex('COUNT(reclamacoes.reclamacao_id) as total_reclamacoes')
        ])
        ->join('categorias', 'categorias.categoria_id', '=', 'reclamacoes.categoria_id')
        ->groupBy('categorias.categoria_id')
        ->orderBy('total_reclamacoes', 'DESC')
        ->get();

        // 2. Formatação para a View de Relatório
        $labels = [];
        $data = [];
        $max_reclamacoes = 0;

        foreach ($ranking as $item) {
            $count = intval($item['total_reclamacoes']);
            $labels[] = $item['categoria_nome'];
            $data[] = $count;
            if ($count > $max_reclamacoes) {
                $max_reclamacoes = $count;
            }
        }

        // Retorna a estrutura necessária para a View
        return [
            'labels' => $labels,
            'data' => $data,
            'max_reclamacoes' => $max_reclamacoes
        ];
    }

    /**
     * Gera a contagem de reclamações agrupadas por mês nos últimos 6 meses.
     * Usado para o gráfico de Evolução Temporal.
     * * NOTA: Este método está sujeito ao problema de Timezone/configuração do MySQL.
     * Se falhar, use a solução do SQL Bruto que resolvemos (com SET time_zone)
     * se você conseguir acessar a conexão.
     */
    public static function getEvolucaoMensal($meses = 6)
    {
        // 1. Geração do range de meses esperado (6 meses anteriores até o mês atual)
        $periodos_esperados = [];
        $hoje = new \DateTime();
        
        // Loop para gerar todos os rótulos de mês (Jan/2025, Fev/2025, etc.)
        for ($i = $meses - 1; $i >= 0; $i--) {
            $data = clone $hoje;
            $data->modify("-$i months");
            // Formato para o rótulo: 'MM/YYYY'
            $periodos_esperados[$data->format('m/Y')] = 0; 
        }

        // 2. Definição do limite de data para o SQL
        // Busca 6 meses exatos atrás
        $data_limite = date('Y-m-d H:i:s', strtotime("-$meses months")); 

        // 3. SQL direto: Filtra por data e agrupa por mês/ano.
        $sql = "
            SELECT 
                DATE_FORMAT(criado_em, '%m/%Y') AS periodo, 
                COUNT(*) AS total
            FROM 
                reclamacoes
            WHERE 
                criado_em >= :data_limite
            GROUP BY 
                periodo
            ORDER BY 
                criado_em ASC
        ";

        // 4. Execução do PDO
        try {
            // Assumindo que \core\Database::getInstance() retorna o objeto PDO
            $pdo = \core\Database::getInstance();
            $stmt = $pdo->prepare($sql);
            
            // Binding seguro do parâmetro
            $stmt->bindValue(':data_limite', $data_limite, \PDO::PARAM_STR); 
            $stmt->execute();
            $resultados_db = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        } catch (\Exception $e) {
            error_log("Erro de execução SQL (getEvolucaoMensal): " . $e->getMessage());
            // Retorna o range de meses com zero se houver erro
            return ['labels' => array_keys($periodos_esperados), 'data' => array_values($periodos_esperados)];
        }

        // 5. Combinação dos resultados com os períodos esperados (preenchendo os zeros)
        $contagens_finais = $periodos_esperados;
        
        foreach ($resultados_db as $row) {
            $periodo = $row['periodo'];
            $total = intval($row['total']);
            
            // Só atualiza se o período estiver no range que geramos (evita dados muito antigos)
            if (isset($contagens_finais[$periodo])) {
                $contagens_finais[$periodo] = $total;
            }
        }
        
        // 6. Retorno no formato final (arrays simples de labels e dados)
        return [
            'labels' => array_keys($contagens_finais),
            'data' => array_values($contagens_finais)
        ];
    }
    
    /**
     * Método principal para juntar todos os dados e passar para o Controller.
     */
    public static function getDadosRelatorioCompleto()
    {
        return [
            'rankingCategorias' => self::getRankingCategorias(),
            'evolucaoMensal' => self::getEvolucaoMensal(6) // Últimos 6 meses
        ];
    }

    public static function getDadosDesempenhoSecretaria()
    {
        // Reutiliza o método do Dashboard que já conta tudo (sem ir ao banco 2x)
        // Se DashboardHandler não estiver acessível aqui, use o código da query original.
        $stats = DashboardHandler::getStatsResumo(); 
        
        $total = intval($stats['total_reclamacoes']);
        
        // Cálculo de Porcentagens (Evitando divisão por zero)
        $pct_resolvidas = $total > 0 ? round(($stats['total_resolvidas'] / $total) * 100, 1) : 0;
        $pct_andamento = $total > 0 ? round(($stats['total_em_andamento'] / $total) * 100, 1) : 0;
        $pct_pendentes = $total > 0 ? round(($stats['total_pendentes'] / $total) * 100, 1) : 0;

        return [
            'totais' => $stats,
            'porcentagens' => [
                'resolvidas' => $pct_resolvidas,
                'em_andamento' => $pct_andamento,
                'pendentes' => $pct_pendentes
            ]
        ];
    }
}
