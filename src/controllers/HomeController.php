<?php
namespace src\controllers;

use \core\Controller;

class HomeController extends Controller {

    public function index() {
        $this->render('feed');
    }

    public function sobre() {
        $this->render('sobre');
    }

    public function sobreP($args) {
        print_r($args);
    }

    public function perfil() {
        $this->render('perfil');
    }

    public function prefeito() {
        $this->render('prefeito');
    }

}