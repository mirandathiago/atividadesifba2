<?php
declare(strict_types=1);



require_once "./vendor/autoload.php";
require_once "./app/config.php";


$url = $_GET['url'] ?? '/';

use Ifba\Core\Router;



Router::add('/','HomeController','index');
Router::add('teste','HomeController','teste');
Router::add('__erro','ErroController','erro404');

Router::execute($url);



