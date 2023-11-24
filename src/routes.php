<?php

use core\Router;

$router = new Router();

/*
$router->get : método que será utilizado do router (GET, POST...)
primeiro parâmetro: endpoint que será utilizado
segundo parâmetro: nome da classe do controller @ método a ser acessado
*/
$router->get('/', 'HomeController@index');

// exibição do formulário
$router->get('/novo', 'UsuariosController@add');
// recebimento das informações
$router->post('/novo', 'UsuariosController@addAction');
