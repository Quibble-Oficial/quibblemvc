<?php

namespace src\controllers;

use \core\Controller;
use \src\handlers\UsuarioHandler;
use \src\handlers\CategoriaHandler;
use \src\handlers\ReclamacaoHandler;

class HomeController extends Controller
{

    private $loggedUser;

    public function __construct()
    {
        $this->loggedUser = UsuarioHandler::checkLogin();

        if ($this->loggedUser === false) {
            $this->redirect('/login');
        }
    }

    public function index()
    {
        $reclamacoes = ReclamacaoHandler::getAll(); // pega todas as reclamações
        $categorias = CategoriaHandler::getAll();

        $this->render('feed', [
            'loggedUser' => $this->loggedUser,
            'categorias' => $categorias,
            'reclamacoes' => $reclamacoes
        ]);
    }

    public function sobre()
    {
        $this->render('sobre', ['loggedUser' => $this->loggedUser]);
    }

    public function sobreP($args)
    {
        print_r($args);
    }

    public function perfil()
    {
        $this->render('perfil', ['loggedUser' => $this->loggedUser]);
    }

    public function prefeito()
    {
        $this->render('prefeito', ['loggedUser' => $this->loggedUser]);
    }

    public function notificacoes()
    {
        $this->render('notificacoes', ['loggedUser' => $this->loggedUser]);
    }

    public function comunidade()
    {
        $this->render('comunidade', ['loggedUser' => $this->loggedUser]);
    }
}
