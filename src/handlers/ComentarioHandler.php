<?php

namespace src\handlers;

use \src\models\Comentario;
use ClanCats\Hydrahon\Query\Expression as Ex;

class ComentarioHandler
{
    // Função para adicionar um novo comentário
    public static function adicionarComentario($reclamacao_id, $usuario_id, $comentario)
    {
        // Limpeza básica do comentário (Atenção: A sanitização completa deve ser feita na View!)
        $comentario = trim($comentario);
        
        if (empty($comentario)) {
            return false;
        }

        Comentario::insert([
            'reclamacao_id' => $reclamacao_id,
            'usuario_id' => $usuario_id,
            'comentario' => $comentario
        ])->execute();

        return true;
    }

    // Função para buscar comentários de uma reclamação
    public static function getComentariosByReclamacaoId($reclamacaoId)
    {
        // Busca os comentários, fazendo JOIN com usuários para ter o nome e a foto de quem comentou.
        $comentarios = Comentario::select([
            'comentarios.comentario',
            'comentarios.criado_em',
            'usuarios.usuario_id',
            'usuarios.nome as usuario_nome',
            'usuarios.foto_perfil as usuario_avatar' // Certifique-se de que o nome da coluna está correto
        ])
        ->join('usuarios', 'usuarios.usuario_id', '=', 'comentarios.usuario_id')
        ->where('comentarios.reclamacao_id', $reclamacaoId)
        ->orderBy('comentarios.criado_em', 'ASC') // Ordem cronológica
        ->get();

        return $comentarios;
    }
    
    // Função para contar o número de comentários em uma reclamação
    public static function contarComentarios($reclamacaoId)
    {
        $count = Comentario::select(new Ex('COUNT(*) as total'))
            ->where('reclamacao_id', $reclamacaoId)
            ->one();
            
        return intval($count['total'] ?? 0);
    }
}