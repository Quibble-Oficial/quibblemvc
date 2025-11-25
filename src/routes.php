<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/sobre/{nome}', 'HomeController@sobreP');
$router->get('/sobre', 'HomeController@sobre');
$router->get('/prefeito', 'HomeController@prefeito');
$router->get('/notificacoes', 'HomeController@notificacoes');
$router->get('/comunidade', 'HomeController@comunidade');

$router->get('/visao-geral', 'DashboardController@visaoGeral');

$router->get('/reclamacoes', 'DashboardController@reclamacoes');
$router->post('/reclamacoes/resolver', 'DashboardController@resolverReclamacao');

$router->get('/mapa', 'DashboardController@mapa');
$router->get('/comunidades', 'DashboardController@comunidades');
$router->get('/relatorios', 'DashboardController@relatorios');
$router->get('/chat', 'DashboardController@chat');
$router->get('/gestao-interna', 'DashboardController@gestaoInterna');
$router->get('/transparencia', 'DashboardController@transparencia');
$router->get('/gastos-detalhados', 'DashboardController@gastosDetalhados');
$router->get('/relatorios-para-download', 'DashboardController@relatoriosDown');
$router->get('/canal-duvidas-fiscalizacao', 'DashboardController@duvidasFiscalizacao');
$router->get('/comunicacao', 'DashboardController@comunicacao');
$router->get('/responder-cidadao', 'DashboardController@responderCidadao');
$router->get('/canal-direto', 'DashboardController@canalDireto');


$router->get('/login', 'AuthController@login');
$router->post('/login', 'AuthController@loginAction');

$router->get('/cadastro', 'AuthController@cadastro');
$router->post('/cadastro', 'AuthController@cadastroAction');

$router->get('/sair', 'AuthController@logout');

$router->post('/reclamacao/nova', 'ReclamacaoController@criarReclamacao');

$router->get('/usuario/{id}', 'HomeController@usuario');
$router->get('/usuario/prefeito/{id}', 'HomeController@usuarioPrefeito');
$router->get('/alterar-usuario', 'HomeController@alterarUsuario');
$router->post('/alterar-usuario', 'HomeController@alterarUsuarioAction');

$router->post('/reclamacao/{id}/upvote', 'UpvoteController@alternar');

$router->post('/usuario/seguir', 'SeguidorController@seguir');
$router->post('/usuario/deixar-seguir', 'SeguidorController@deixarSeguir');

$router->post('/comentario/novo', 'ComentarioController@novo');

$router->get('/comentario/{id}', 'ComentarioController@buscar');


$router->get('/relatorio/gerarTipoProblema', 'RelatorioController@gerarTipoProblema');
$router->get('/relatorio/gerarDesempenho', 'RelatorioController@gerarDesempenho');