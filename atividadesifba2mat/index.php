<?php
declare(strict_types=1);

use Ifba\Core\Router;

require_once "./vendor/autoload.php";
require_once "./app/config.php";

function css(string $arquivo)
{
    return "http://localhost/atividadesifba2mat/public/css/{$arquivo}.css";
}



$url = $_GET['url'] ?? '/';


Router::add('/','HomeController','index');
Router::add('login','HomeController','login');
Router::add('criarconta','HomeController','criarconta');
Router::add('__erro','ErroController','erro404');

Router::execute($url);



