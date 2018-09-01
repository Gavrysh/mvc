<?php
// Виводимо усі помилки на стадії розробки додатку
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Змінюємо каталог, щоб працювати з кереню додатку
chdir(dirname(__DIR__));

require_once 'vendor/autoload.php';
$router = new Core\Router();
//echo $router->getURL();
echo '<pre>getURL()';
print_r($router->getURL());
echo '</pre>';

echo '<pre>getRoutes()';
print_r($router->getRoutes());
echo '</pre>';

echo '<pre>';
print_r($_SERVER);
echo '</pre>';