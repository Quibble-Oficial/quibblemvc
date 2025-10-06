<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/sobre/{nome}', 'HomeController@sobreP');
$router->get('/sobre', 'HomeController@sobre');
$router->get('/prefeito', 'HomeController@prefeito');
$router->get('/notificacoes', 'HomeController@notificacoes');
$router->get('/comunidade', 'HomeController@comunidade');
$router->get('/visao-geral', 'HomeController@visaoGeral');

$router->get('/reclamacoes', 'DashboardController@reclamacoes');
$router->get('/api-keys', 'DashboardController@apiKeys');
$router->get('/billing', 'DashboardController@billing');
$router->get('/calendar', 'DashboardController@calendar');
$router->get('/chat', 'DashboardController@chat');
$router->get('/empty-state', 'DashboardController@emptyState');
$router->get('/festive', 'DashboardController@festive');
$router->get('/file-manager', 'DashboardController@fileManager');
$router->get('/help-center', 'DashboardController@helpCenter');
$router->get('/invoice', 'DashboardController@invoice');
$router->get('/new-project', 'DashboardController@newProject');
$router->get('/gastosdetalhados', 'DashboardController@gastosDetalhados');
$router->get('/relatoriosdown', 'DashboardController@relatoriosDown');
$router->get('/duvidasfiscalizacao', 'DashboardController@duvidasFiscalizacao');


$router->get('/login', 'AuthController@login');
$router->post('/login', 'AuthController@loginAction');

$router->get('/cadastro', 'AuthController@cadastro');
$router->post('/cadastro', 'AuthController@cadastroAction');

$router->get('/sair', 'AuthController@logout');

$router->post('/reclamacao/nova', 'ReclamacaoController@criarReclamacao');

$router->get('/usuario/{id}', 'HomeController@usuario');
$router->get('/usuario/prefeito/{id}', 'HomeController@usuarioPrefeito');

$router->post('/reclamacao/{id}/upvote', 'UpvoteController@alternar');

$router->post('/usuario/seguir', 'SeguidorController@seguir');
$router->post('/usuario/deixar-seguir', 'SeguidorController@deixarSeguir');

$router->post('/comentario/novo', 'ComentarioController@novo');

$router->get('/comentario/{id}', 'ComentarioController@buscar');