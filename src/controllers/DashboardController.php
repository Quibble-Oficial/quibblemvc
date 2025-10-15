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
    

    public function mapa()
    {
        $this->render('dashboard/mapa', ['loggedUser' => $this->loggedUser]);
    }

    public function comunidades()
    {
        $this->render('dashboard/comunidades', ['loggedUser' => $this->loggedUser]);
    }

    public function relatorios()
    {
      $this->render('dashboard/relatorios', ['loggedUser' => $this->loggedUser]);
    }

    public function chat()
    {
        $this->render('dashboard/chat', ['loggedUser' => $this->loggedUser]);
    }

    public function emptyState()
    {
        $this->render('dashboard/empty-state', ['loggedUser' => $this->loggedUser]);
    }

     public function transparencia()
    {
        $this->render('dashboard/transparencia', ['loggedUser' => $this->loggedUser]);
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
        $this->render('dashboard/duvidasfiscalizacao', ['loggedUser' => $this->loggedUser]);
    }

     public function comunicacao()
    {   
        $this->render('dashboard/comunicacao', ['loggedUser' => $this->loggedUser]);
    }

    public function comunicadosOficiais()
    {
        $this->render('dashboard/empty-state', ['loggedUser' => $this->loggedUser]);
    }

    public function responderCidadao()
    {
        $this->render('dashboard/respondercidadao', ['loggedUser' => $this->loggedUser]);
    }

  

    
   
    
}