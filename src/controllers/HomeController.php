<?php

namespace src\controllers;

use \core\Controller;

class HomeController extends Controller
{

    public function index()
    {
        $nome = 'Rogerio';
        $idade = 90;

        $posts = [
            ['titulo' => 'Título de teste 1', 'corpo' => 'Corpo de teste 1'],
            ['titulo' => 'Título de teste 2', 'corpo' => 'Corpo de teste 2'],
            ['titulo' => 'Título de teste 3', 'corpo' => 'Corpo de teste 3'],
            ['titulo' => 'Título de teste 4', 'corpo' => 'Corpo de teste 4'],
            ['titulo' => 'Título de teste 5', 'corpo' => 'Corpo de teste 5'],
        ];

        // renderiza a view home
        $this->render('home', [
            'nome' => $nome,
            'idade' => $idade,
            'posts' => $posts,
        ]);
    }

    public function sobre()
    {
        $this->render('sobre');
    }

    public function sobreP($args)
    {
        echo "Olá, " . $args['nome'];
    }

    public function fotos()
    {
        echo 'Acessando o método fotos';
        $this->render('fotos');
    }

    public function foto($param)
    {
        echo "Acessando a foto: {$param['id']}";
    }
}
