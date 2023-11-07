<?php
declare(strict_types=1);

require_once "./vendor/autoload.php";
require_once "./app/config.php";


$url = $_GET['url'] ?? '/';

$rotas = [];
$rotas['/'] = ['HomeController','index'];
$rotas['teste'] = ['HomeController','index'];
$rotas['__erro'] = ['ErroController','erro404'];

if( array_key_exists($url,$rotas) ){
    [$controlador,$metodo] = $rotas[$url];
    carregaController($controlador,$metodo);
}else{
    [$controlador,$metodo] = $rotas['__erro'];
    carregaController($controlador,$metodo);
}


function carregaController($controlador,$metodo)
{
    $namespace = "\\Ifba\\Controller\\";
    $nomecompleto = $namespace.$controlador;
    $c = new $nomecompleto();
    $c->$metodo();
}
