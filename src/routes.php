<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/sobre/{nome}', 'HomeController@sobreP');
$router->get('/sobre', 'HomeController@sobre');
$router->get('/perfil', 'HomeController@perfil');
$router->get('/prefeito', 'HomeController@prefeito');
$router->get('/notificacoes', 'HomeController@notificacoes');
$router->get('/comunidade', 'HomeController@comunidade');