<?php

namespace src\controllers;

use \core\Controller;
use \src\handlers\UsuarioHandler;
use \src\handlers\DashboardHandler;
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
        // Definir os anos (Você pode ajustar isso dinamicamente)
        $anoAtual = date('Y'); // Ex: 2025
        $anoAnterior = date('Y') - 1; // Ex: 2024

        // 1. Busca os dados de comparação anual
        $seriesAnual = DashboardHandler::getComparacaoAnualReclamacoes($anoAtual, $anoAnterior);
        $seriesResolvidas = DashboardHandler::getComparacaoAnualResolvidas($anoAtual, $anoAnterior);
        $statsResumo = DashboardHandler::getStatsResumo();
        $listaReclamacoes = DashboardHandler::getListaReclamacoesDashboard();
        $seriesTotal = DashboardHandler::getComparacaoAnualTotal($anoAtual, $anoAnterior);


        $dadosDonut = [
            // Os valores brutos (contagem) para as séries
            'series' => [
                $statsResumo['total_pendentes'] ?? 0,
                $statsResumo['total_em_andamento'] ?? 0
            ],
            // Os rótulos para a legenda
            'labels' => ['Pendentes', 'Em Andamento']
        ];

        $this->render('dashboard/reclamacoes', [
            'loggedUser' => $this->loggedUser,
            'seriesAnual' => $seriesAnual,
            'seriesResolvidas' => $seriesResolvidas,
            'statsResumo' => $statsResumo,
            'dadosDonut' => $dadosDonut,
            'listaReclamacoes' => $listaReclamacoes,
            'seriesTotalAnual' => $seriesTotal
        ]);
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

    public function gestaoInterna()
    {
        $this->render('dashboard/gestao-interna', ['loggedUser' => $this->loggedUser]);
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
        $this->render('dashboard/responder-cidadao', ['loggedUser' => $this->loggedUser]);
    }
    public function canalDireto()
    {
        $this->render('dashboard/canal-direto', ['loggedUser' => $this->loggedUser]);
    }
}
