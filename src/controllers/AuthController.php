<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\UsuarioHandler;

class AuthController extends Controller {
    public function login() {
        $flash = $_SESSION['flash'] ?? '';
        $_SESSION['flash'] = '';
        $this->render('autenticacao/login', ['flash' => $flash]);
    }

    public function loginAction() {
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $senha = filter_input(INPUT_POST, 'senha');

        if ($email && $senha) {
            $token = UsuarioHandler::verifyLogin($email, $senha);
            if ($token) {
                session_regenerate_id(true);
                $_SESSION['token'] = $token;
                $this->redirect('/');   
            } else {
                $_SESSION['flash'] = 'E-mail e/ou senha inválidos.';
                $this->redirect('/login');
            }
        } else {
            $_SESSION['flash'] = 'Preencha todos os campos.';
            $this->redirect('/login');
        }
    }

    public function cadastro() {
        $flash = $_SESSION['flash'] ?? '';
        $_SESSION['flash'] = '';
        $this->render('autenticacao/cadastro', ['flash' => $flash]);
    }

    public function cadastroAction() {
        $nome = filter_input(INPUT_POST, 'nome');
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $senha = filter_input(INPUT_POST, 'senha');
        $tipo_usuario = filter_input(INPUT_POST, 'tipo_usuario') ?? 'cidadao';

        if ($nome && $email && $senha) {
            if (!UsuarioHandler::emailExists($email)) {
                $token = UsuarioHandler::addUser($nome, $email, $senha, $tipo_usuario);
                session_regenerate_id(true);
                $_SESSION['token'] = $token;
                $this->redirect('/');   
            } else {
                $_SESSION['flash'] = 'E-mail já cadastrado.';
                $this->redirect('/cadastro');
            }
        } else {
            $_SESSION['flash'] = 'Preencha todos os campos.';
            $this->redirect('/cadastro');
        }
    }

    public function logout() {
        $_SESSION['token'] = '';
        $this->redirect('/login');
    }
}
