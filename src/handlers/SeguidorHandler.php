<?php

namespace src\handlers;

use \src\models\Seguidore;
use src\models\Usuario;

class SeguidorHandler
{
    // Seguir um usuário
    public static function seguirUsuario($usuarioId, $seguirId)
    {
        // Verifica se já está seguindo
        $existe = Seguidore::select()
            ->where('seguidor_id', $usuarioId)
            ->where('seguido_id', $seguirId)
            ->one();

        if (!$existe) {
            Seguidore::insert([
                'seguidor_id' => $usuarioId,
                'seguido_id' => $seguirId
            ])->execute();
            return true;
        }

        return false; // já segue
    }

    // Deixar de seguir
    public static function deixarSeguir($usuarioId, $seguirId)
    {
        Seguidore::delete()
            ->where('seguidor_id', $usuarioId)
            ->where('seguido_id', $seguirId)
            ->execute();
    }

    // Verifica se usuário A segue B
    public static function estáSeguindo($usuarioId, $seguirId)
    {
        $existe = Seguidore::select()
            ->where('seguidor_id', $usuarioId)
            ->where('seguido_id', $seguirId)
            ->one();

        return $existe ? true : false;
    }

    // Contar seguidores de um usuário
    public static function contarSeguidores($usuarioId)
    {
        $count = Seguidore::select(['COUNT(*) as total'])
            ->where('seguido_id', $usuarioId)
            ->one();

        return $count ? intval($count['total']) : 0;
    }

    // Contar quantos o usuário segue
    public static function contandoSeguindo($usuarioId)
    {
        $count = Seguidore::select(['COUNT(*) as total'])
            ->where('seguidor_id', $usuarioId)
            ->one();

        return $count ? intval($count['total']) : 0;
    }
}
