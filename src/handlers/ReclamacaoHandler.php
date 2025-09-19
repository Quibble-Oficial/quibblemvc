<?php

namespace src\handlers;

use \src\models\Reclamacoe;
use \src\models\Upvote;

use PDO;

class ReclamacaoHandler
{

    // Adiciona reclamação com foto
    public static function adicionarReclamacao($usuario_id, $categoria_id, $localizacao_id, $titulo, $descricao, $arquivo)
    {
        $midia = null;

        // Se houver arquivo enviado
        if ($arquivo && $arquivo['tmp_name'] != '') {
            // Cria pasta se não existir
            $uploadDir = __DIR__ . '/../../public/assets/uploads/reclamacoes/';
            if (!file_exists($uploadDir)) {
                mkdir($uploadDir, 0755, true);
            }

            // Gera nome único
            $extensao = pathinfo($arquivo['name'], PATHINFO_EXTENSION);
            $nomeArquivo = md5(time() . rand(0, 9999)) . '.' . $extensao;
            $caminhoServidor = $uploadDir . $nomeArquivo;
            $caminhoPublic = 'assets/uploads/reclamacoes/' . $nomeArquivo;

            if (move_uploaded_file($arquivo['tmp_name'], $caminhoServidor)) {
                $midia = $caminhoPublic;
            }
        }

        // Insere no banco
        Reclamacoe::insert([
            'usuario_id' => $usuario_id,
            'categoria_id' => $categoria_id,
            'localizacao_id' => $localizacao_id,
            'titulo' => $titulo,
            'descricao' => $descricao,
            'midia' => $midia
        ])->execute();

        // Retorna o ID da nova reclamação
        $ultima = Reclamacoe::select()
            ->orderBy('reclamacao_id', 'DESC')
            ->one();

        return $ultima ? $ultima['reclamacao_id'] : false;
    }

    public static function getAll($usuario = null)
    {
        $userId = $usuario ? $usuario->usuario_id : 0;

        $sql = "
        SELECT 
            r.reclamacao_id,
            r.usuario_id,
            r.titulo,
            r.descricao,
            r.midia,
            r.status,
            r.criado_em,
            u.nome AS usuario_nome,
            u.foto_perfil AS usuario_foto,
            c.nome AS categoria_nome,
            i.nome AS instituicao_nome,
            com.nome AS comunidade_nome,
            l.logradouro,
            l.numero,
            l.cep,
            COUNT(up.reclamacao_id) AS total_upvotes,
            SUM(CASE WHEN up.usuario_id = :userId THEN 1 ELSE 0 END) AS usuario_upvotou
        FROM reclamacoes r
        JOIN usuarios u ON u.usuario_id = r.usuario_id
        JOIN categorias c ON c.categoria_id = r.categoria_id
        LEFT JOIN instituicoes i ON i.instituicao_id = r.instituicao_id
        LEFT JOIN comunidades com ON com.comunidade_id = r.comunidade_id
        LEFT JOIN localizacoes l ON l.localizacao_id = r.localizacao_id
        LEFT JOIN upvotes up ON up.reclamacao_id = r.reclamacao_id
        GROUP BY r.reclamacao_id
        ORDER BY r.reclamacao_id DESC
    ";

        $stmt = self::getPDO()->prepare($sql);
        $stmt->execute(['userId' => $userId]);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Método para pegar a instância PDO
    private static function getPDO()
    {
        static $pdo = null;
        if (!$pdo) {
            $pdo = new PDO('mysql:host=localhost;dbname=quibble;charset=utf8mb4', 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return $pdo;
    }
}
