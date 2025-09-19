<?php
namespace src\controllers;

use core\Controller;
use src\handlers\UpvoteHandler;
use src\handlers\UsuarioHandler;

class UpvoteController extends Controller {

    private $loggedUser;

    public function __construct()
    {
        $this->loggedUser = UsuarioHandler::checkLogin();

        if ($this->loggedUser === false) {
            $this->redirect('/login');
        }
    }

    public function alternar($args) {
        if (!$this->loggedUser) {
            header("Content-Type: application/json");
            echo json_encode(['error' => 'not_logged']);
            exit;
        }

        $reclamacao_id = intval($args['id']);

        $status = UpvoteHandler::alternarUpvote($this->loggedUser->usuario_id, $reclamacao_id);
        $count = UpvoteHandler::contarUpvotes($reclamacao_id);

        header("Content-Type: application/json");
        echo json_encode([
            'status' => $status ? 'upvoted' : 'removed',
            'total' => $count
        ]);
        exit;
    }
}
