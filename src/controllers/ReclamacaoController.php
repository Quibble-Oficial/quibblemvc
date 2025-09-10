<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\ReclamacaoHandler;
use \src\handlers\UsuarioHandler;

class ReclamacaoController extends Controller {

    private $loggedUser;

    public function __construct() {
        $this->loggedUser = UsuarioHandler::checkLogin();

        if ($this->loggedUser === false) {
            $this->redirect('/login');
        }
    }

    public function criarReclamacao() {
        $titulo = filter_input(INPUT_POST, 'titulo');
        $descricao = filter_input(INPUT_POST, 'descricao');
        $categoria_id = filter_input(INPUT_POST, 'categoria_id', FILTER_VALIDATE_INT);
        $localizacao_id = filter_input(INPUT_POST, 'localizacao_id', FILTER_VALIDATE_INT);
        $arquivo = $_FILES['midia'] ?? null;

        if ($titulo && $descricao && $categoria_id) {
            $reclamacao_id = ReclamacaoHandler::adicionarReclamacao(
                $this->loggedUser->usuario_id,
                $categoria_id,
                $localizacao_id,
                $titulo,
                $descricao,
                $arquivo
            );

            if ($reclamacao_id) {
                $_SESSION['flash'] = 'Reclamação criada com sucesso!';
                $this->redirect('/');
            } else {
                $_SESSION['flash'] = 'Erro ao criar a reclamação.';
                $this->redirect('/');
            }
        } else {
            $_SESSION['flash'] = 'Preencha todos os campos obrigatórios.';
            $this->redirect('/');
        }
    }

}