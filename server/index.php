<?php
require __DIR__ . '/vendor/autoload.php';

use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__); 
$dotenv->load();

require __DIR__ . '/src/config/database.php';

use App\Routes\Router;
$router = new Router();

require __DIR__ . '/src/routes/api.php';
$router->dispatch($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
