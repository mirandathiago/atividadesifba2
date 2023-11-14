<?php
declare(strict_types=1);

use Ifba\Core\Router;

require_once "./vendor/autoload.php";
require_once "./app/config.php";


$url = $_GET['url'] ?? '/';

function css($arquivo)
{
    return URL_BASE."public/css/{$arquivo}.css";
}

function url_base($url)
{
    return URL_BASE . $url;
}

Router::add('/','HomeController','index');
Router::add('__erro','ErroController','erro404');
Router::add('login','HomeController','login');
Router::add('criarconta','HomeController','criarconta');
Router::execute($url);



