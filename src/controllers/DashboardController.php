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

        if ($this->loggedUser->tipo_usuario === 'cidadao') {
            $this->redirect('/');
        }
    }

    public function visaoGeral()
    {
        $dadosPieChart = \src\handlers\DashboardHandler::getDadosPieChart();

        $dadosMesAtual = \src\handlers\DashboardHandler::getEvolucaoDiariaMesAtual();

        $totalReclamacoesMes = array_sum($dadosMesAtual);

        setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'portuguese');
        $nomeMes = ucfirst(strftime('%B'));

        $listaReclamacoes = DashboardHandler::getListaReclamacoesDashboard();

        $this->render('dashboard/visao-geral', [
            'loggedUser' => $this->loggedUser,
            'dadosPieChart' => $dadosPieChart,
            'dadosMesAtual' => $dadosMesAtual,
            'nomeMes' => $nomeMes,
            'totalReclamacoesMes' => $totalReclamacoesMes,
            'listaReclamacoes' => $listaReclamacoes
        ]);
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

    public function resolverReclamacao()
    {
        $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
        
        if ($id) {
            // Chama o Handler passando o nome da secretaria logada como autora
            $sucesso = ReclamacaoHandler::mudarStatus($id, 'resolvido', $this->loggedUser->nome);
            
            if ($sucesso) {
                echo json_encode(['success' => true, 'message' => 'Reclamação resolvida e cidadão notificado!']);
                exit;
            }
        }

        echo json_encode(['success' => false, 'message' => 'Erro ao atualizar status.']);
        exit;
    }

    public function mapa()
    {
        $statsResumo = DashboardHandler::getStatsResumo();

        $this->render('dashboard/mapa', [
            'loggedUser' => $this->loggedUser, 
            'statsResumo' => $statsResumo
        ]);
    }

    public function comunidades()
    {
        $this->render('dashboard/comunidades', ['loggedUser' => $this->loggedUser]);
    }

    public function relatorios()
    {
        $statsResumo = DashboardHandler::getStatsResumo();

        $this->render('dashboard/relatorios', [
            'loggedUser' => $this->loggedUser, 
            'statsResumo' => $statsResumo
        ]);
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
        $this->render('dashboard/gastos-detalhados', ['loggedUser' => $this->loggedUser]);
    }
    public function relatoriosDown()
    {
        $this->render('dashboard/relatorios-para-download', ['loggedUser' => $this->loggedUser]);
    }
    public function duvidasFiscalizacao()
    {
        $this->render('dashboard/canal-duvidas-fiscalizacao', ['loggedUser' => $this->loggedUser]);
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
