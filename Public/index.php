<?php
// Виводимо усі помилки на стадії розробки додатку
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Змінюємо каталог, щоб працювати з кереню додатку
chdir(dirname(__DIR__));

require_once 'vendor/autoload.php';
new Core\Router();