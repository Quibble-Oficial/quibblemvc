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
$router->get('/mapa', 'DashboardController@mapa');
$router->get('/comunidades', 'DashboardController@comunidades');
$router->get('/relatorios', 'DashboardController@relatorios');
$router->get('/chat', 'DashboardController@chat');
$router->get('/gestao-interna', 'DashboardController@gestao-interna');
$router->get('/transparencia', 'DashboardController@transparencia');
$router->get('/gastosdetalhados', 'DashboardController@gastosDetalhados');
$router->get('/relatoriosdown', 'DashboardController@relatoriosDown');
$router->get('/duvidasfiscalizacao', 'DashboardController@duvidasFiscalizacao');
$router->get('/comunicacao', 'DashboardController@comunicacao');
$router->get('/respondercidadao', 'DashboardController@responderCidadao');
$router->get('/canal-direto', 'DashboardController@canalDireto');


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