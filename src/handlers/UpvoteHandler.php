<?php
namespace src\handlers;

use src\models\Upvote;
use src\models\Usuario;
use src\models\Reclamacoe;

class UpvoteHandler {

    // Verifica se já deu upvote
    public static function foiUpvotado($usuario_id, $reclamacao_id) {
        $data = Upvote::select()
            ->where('usuario_id', $usuario_id)
            ->where('reclamacao_id', $reclamacao_id)
            ->one();

        return $data ? true : false;
    }

    // Conta upvotes da reclamação
    public static function contarUpvotes($reclamacao_id) {
        return Upvote::select()
            ->where('reclamacao_id', $reclamacao_id)
            ->count();
    }

    // Alterna upvote (dá ou remove)
    public static function alternarUpvote($usuario_id, $reclamacao_id) {
        if (self::foiUpvotado($usuario_id, $reclamacao_id)) {
            Upvote::delete()
                ->where('usuario_id', $usuario_id)
                ->where('reclamacao_id', $reclamacao_id)
                ->execute();
            return false; // removeu
        } else {
            Upvote::insert([
                'usuario_id' => $usuario_id,
                'reclamacao_id' => $reclamacao_id
            ])->execute();
            return true; // adicionou
        }
    }
}
