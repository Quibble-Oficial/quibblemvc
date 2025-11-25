<?php

namespace src\handlers;

use \src\models\Notificacoe;
use ClanCats\Hydrahon\Query\Expression as Ex;

class NotificacaoHandler
{
    // Cria uma notificação para um usuário específico
    public static function criarNotificacao($usuario_id, $tipo, $conteudo)
    {
        Notificacoe::insert([
            'usuario_id' => $usuario_id,
            'tipo'       => $tipo, // 'resolucao', 'aviso', 'interacao', etc.
            'conteudo'   => $conteudo,
            'lida'       => 0, // 0 = false
            'criado_em'  => date('Y-m-d H:i:s')
        ])->execute();
    }

    // (Opcional) Pegar notificações não lidas
    public static function getNaoLidas($usuario_id)
    {
        return Notificacoe::select()
            ->where('usuario_id', $usuario_id)
            ->where('lida', 0)
            ->orderBy('criado_em', 'DESC')
            ->get();
    }

    public static function getNotificacoesUsuario($usuarioId)
    {
        $notificacoes = Notificacoe::select()
            ->where('usuario_id', $usuarioId)
            ->orderBy('criado_em', 'DESC')
            ->limit(50) // Limite para não pesar
            ->get();

        return $notificacoes;
    }

    // Método para marcar como lida (usaremos no AJAX depois)
    public static function marcarComoLida($notificacaoId)
    {
        Notificacoe::update(['lida' => 1])
            ->where('notificacao_id', $notificacaoId)
            ->execute();
    }
}
