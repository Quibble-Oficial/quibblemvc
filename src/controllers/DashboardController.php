<?php

namespace src\controllers;

use \core\Controller;
use \src\handlers\UsuarioHandler;
use \src\handlers\CategoriaHandler;
use \src\handlers\ReclamacaoHandler;
use \src\handlers\SeguidorHandler;

class DashboardController extends Controller
{

    private $loggedUser;

    public function __construct()
    {
        $this->loggedUser = UsuarioHandler::checkLogin();

        if ($this->loggedUser === false) {
            $this->redirect('/login');
        }
    }

    public function visaoGeral()
    {
       $this->render('dashboard/visao-geral', ['loggedUser' => $this->loggedUser]);
    }

    public function reclamacoes()
    {
       $this->render('dashboard/reclamacoes', ['loggedUser' => $this->loggedUser]);
    }
    

    public function apiKeys()
    {
        $this->render('dashboard/api-keys', ['loggedUser' => $this->loggedUser]);
    }

    public function billing()
    {
        $this->render('dashboard/billing', ['loggedUser' => $this->loggedUser]);
    }

    public function calendar()
    {
      $this->render('dashboard/calendar', ['loggedUser' => $this->loggedUser]);
    }

    public function chat()
    {
        $this->render('dashboard/chat', ['loggedUser' => $this->loggedUser]);
    }

    public function emptyState()
    {
        $this->render('dashboard/empty-state', ['loggedUser' => $this->loggedUser]);
    }

     public function festive()
    {
        $this->render('dashboard/festive', ['loggedUser' => $this->loggedUser]);
    }
     public function fileManager()
    {
        $this->render('dashboard/file-manager', ['loggedUser' => $this->loggedUser]);
    }
     public function helpCenter()
    {
        $this->render('dashboard/help-center', ['loggedUser' => $this->loggedUser]);
    }
     public function invoice()
    {
        $this->render('dashboard/invoice', ['loggedUser' => $this->loggedUser]);
    }
     public function newProject()
    {
        $this->render('dashboard/new-project', ['loggedUser' => $this->loggedUser]);
    }
    
     public function gastosDetalhados()
    {   
        $this->render('dashboard/gastosdetalhados', ['loggedUser' => $this->loggedUser]);
    }
     public function relatoriosDown()
    {   
        $this->render('dashboard/relatoriosdown', ['loggedUser' => $this->loggedUser]);
    }
     public function duvidasFiscalizacao()
    {   
        $this->render('dashboard/duvidasficalizacao', ['loggedUser' => $this->loggedUser]);
    }

    
}