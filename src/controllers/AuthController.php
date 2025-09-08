<?php
namespace src\controllers;

use \core\Controller;

class AuthController extends Controller {

    public function login() {
        $this->render('login');
    }

    public function cadastro() {
        $this->render('cadastro');
    }

}