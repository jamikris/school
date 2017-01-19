<?php
//Front Controller

//Общие настройки
ini_set('display_errors', 1);
//error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(E_ALL);


// Подключение файлов системы
define("ROOT",dirname(__FILE__));
require_once(ROOT."/components/Router.php");
require_once(ROOT."/components/DBHelper.php");
// Установка соединения с БД

// Вызов маршрутизатора

$router = new Router();
$router->run();

?>