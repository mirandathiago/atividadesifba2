<?php
declare(strict_types=1);

use Ifba\Core\Router;

require_once "./vendor/autoload.php";
require_once "./app/config.php";


$url = $_GET['url'] ?? '/';


Router::add('/','HomeController','index');
Router::add('__erro','ErroController','erro404');

Router::execute($url);



