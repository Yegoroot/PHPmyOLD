<?php

/* Router будет принимать запросы, анализировать их и вызывать нужные методы в нужных классах - (ноэтонеточно) */

class Router
{
      private $routes;

      public function __construct()
      {
            $routesPath = ROOT.'/config/routes.php';
            $this->routes = include($routesPath); /* этим мы присваиваем массив - который находится в отдельном файле */
      }

      public function run()
      {
          // получить строку запроса
          if (!empty($_SERVER['REQUEST_URI'])) {
            $uri = trim($_SERVER['REQUEST_URI'], '/');
          };
          echo $uri;

          // проверить наличие такого запроса в routes.phpinfo
          // если есть совпадения определить, определить какой контроллер и action обрабатывает запрос
          // подключить файл класса контроллера
          // создать объект, вызвать метод (т.е action)
      }

}



 ?>
