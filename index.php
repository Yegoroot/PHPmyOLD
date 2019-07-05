<?php

// Front controller

  // 1. Общие настройки
    ini_set('display_errors', 1); /* вывод ошибок */
    error_reporting(E_ALL);

  // 2. Подключение файлов системы

  // 3. Установка соединения с БД

  // 4. Вызов Router
    define('ROOT', dirname(__FILE__));
    require_once(ROOT.'/component/Router.php'); // require_once($_SERVER['DOCUMENT_ROOT'].''.$_SERVER['REQUEST_URI'].'component/Router.php');


  $router = new Router();
  $router->run();


 ?>
