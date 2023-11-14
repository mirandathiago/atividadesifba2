<?php
declare(strict_types=1);



require_once "./vendor/autoload.php";
require_once "./app/config.php";

const URL_BASE = "http://localhost/atividadesifba3mat";

function css(string $arquivo) :string
{
    return URL_BASE . "/public/css/{$arquivo}.css";
}

function linkUrl(string $rota = "") :string
{
    return URL_BASE . "/" . $rota;
}



$url = $_GET['url'] ?? '/';

use Ifba\Core\Router;

Router::add('/','HomeController','index');
Router::add('login','HomeController','login');
Router::add('criarconta','HomeController','criarconta');
Router::add('__erro','ErroController','erro404');

Router::execute($url);



