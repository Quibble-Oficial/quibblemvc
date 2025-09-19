<?php
namespace src\controllers;

use src\handlers\SeguidorHandler;

class SeguidorController {

    public function seguir() {
        $usuarioId = $_POST['usuario_id']; // logado
        $seguirId = $_POST['seguir_id'];   // perfil que quer seguir

        $sucesso = SeguidorHandler::seguirUsuario($usuarioId, $seguirId);
        echo json_encode(['success' => $sucesso]);
    }

    public function deixarSeguir() {
        $usuarioId = $_POST['usuario_id'];
        $seguirId = $_POST['seguir_id'];

        SeguidorHandler::deixarSeguir($usuarioId, $seguirId);
        echo json_encode(['success' => true]);
    }
}