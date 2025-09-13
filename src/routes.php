<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/sobre/{nome}', 'HomeController@sobreP');
$router->get('/sobre', 'HomeController@sobre');
$router->get('/prefeito', 'HomeController@prefeito');
$router->get('/notificacoes', 'HomeController@notificacoes');
$router->get('/comunidade', 'HomeController@comunidade');


$router->get('/login', 'AuthController@login');
$router->post('/login', 'AuthController@loginAction');

$router->get('/cadastro', 'AuthController@cadastro');
$router->post('/cadastro', 'AuthController@cadastroAction');

$router->get('/sair', 'AuthController@logout');

$router->post('/reclamacao/nova', 'ReclamacaoController@criarReclamacao');

$router->get('/usuario/{id}', 'HomeController@usuario');