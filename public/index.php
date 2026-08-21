<?php 
error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

require_once __DIR__ . '/../core/Database.php';

require_once '../core/router.php'; 

/* Chemin vers les controllers */

require_once '../app/Controllers/HomeController.php';
require_once '../app/Controllers/ContactController.php';
require_once '../app/Controllers/ProductController.php';

/* Chemin vers les models */ 

require_once '../app/Models/ProductModel.php';


$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$url = str_replace('/public/index.php', '/', $url);
$url = str_replace('/public', '', $url);

$database = new DataBase();
$pdo = $database->getConnection();
$router = new Router($pdo);

// echo '<pre>';
// var_dump($url);
// echo '</pre>';

$router->dispatch($url);