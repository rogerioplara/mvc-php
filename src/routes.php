<?php

use core\Router;

$router = new Router();

/*
$router->get : método que será utilizado do router (GET, POST...)
primeiro parâmetro: endpoint que será utilizado
segundo parâmetro: nome da classe do controller @ método a ser executado
*/
$router->get('/', 'HomeController@index');
$router->get('/sobre/{nome}', 'HomeController@sobreP');
$router->get('/sobre', 'HomeController@sobre');
