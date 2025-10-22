<?php

namespace src\controllers;

use \core\Controller;
use \src\handlers\UsuarioHandler;
use \src\handlers\CategoriaHandler;
use \src\handlers\ReclamacaoHandler;
use \src\handlers\SeguidorHandler;

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

        $filtroCategoria = filter_input(INPUT_GET, 'categoria'); // pega do select enviado no GET

        $reclamacoes = ReclamacaoHandler::getAll($this->loggedUser, $filtroCategoria);
        $categorias = CategoriaHandler::getAll();

        $this->render('feed', [
            'loggedUser' => $this->loggedUser,
            'categorias' => $categorias,
            'reclamacoes' => $reclamacoes,
            'filtroCategoria' => $filtroCategoria
        ]);
    }

    public function sobre()
    {
        $this->render('sobre', ['loggedUser' => $this->loggedUser]);
    }

    public function usuario($args)
    {
        // pega os dados do usuário com o Id passado na URL
        $usuario = UsuarioHandler::getUsuarioById($args['id']);

        if (!$usuario) {
            // se não encontrar, pode redirecionar pra home ou 404
            $this->render('404');
            return;
        }

        $estáSeguindo = SeguidorHandler::estáSeguindo($this->loggedUser->usuario_id, $args['id']);

        // renderiza a view do perfil
        $this->render('usuario', [
            'loggedUser' => $this->loggedUser,
            'usuario' => $usuario,
            'estáSeguindo' => $estáSeguindo
        ]);
    }

    public function usuarioPrefeito($args)
    {
        $usuario = UsuarioHandler::getUsuarioById($args['id']);

        if (!$usuario) {
            // se não encontrar, pode redirecionar pra home ou 404
            $this->render('404');
            return;
        }

        if ($usuario->tipo_usuario !== 'prefeito') {
            $this->render('404');
            return;
        }

        // renderiza a view do perfil
        $this->render('prefeito', [
            'loggedUser' => $this->loggedUser,
            'usuario' => $usuario
        ]);
    }

    public function notificacoes()
    {
        $this->render('notificacoes', ['loggedUser' => $this->loggedUser]);
    }

    public function comunidade()
    {
        $this->render('comunidade', ['loggedUser' => $this->loggedUser]);
    }

    public function visaoGeral()
    {
        $this->render('dashboard/visao-geral', ['loggedUser' => $this->loggedUser]);
    }

    public function alterarUsuario()
    {
        $this->render('alterar-usuario', ['loggedUser' => $this->loggedUser]);
    }
}
