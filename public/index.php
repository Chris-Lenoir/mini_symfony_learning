<?php 

require_once '../core/router.php'; 
require_once '../app/Controllers/HomeController.php';
require_once '../app/Controllers/ContactController.php';

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$url = str_replace('/public/index.php', '/', $url);
$url = str_replace('/public', '', $url);

$router = new Router();

// echo '<pre>';
// var_dump($url);
// echo '</pre>';

$router->dispatch($url);