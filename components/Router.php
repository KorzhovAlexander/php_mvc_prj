<?php


class Router
{
    private $routes;

    /**
     * Router constructor.
     */
    public function __construct()
    {
        $routersPath=ROOT.'/config/routerConfig.php';
        $this->routes = include($routersPath);
    }

    private function getURL()
    {
        if (!empty($_SERVER['REQUEST_URI'])){
            return trim($_SERVER['REQUEST_URI'],'/');
        }
    }

    public function run(){

        /*Получаем строку запроса, куда пришел пользователь*/
        $url = $this->getURL();

        /*разбираем роутер конфиг и проходим по ниму до конца*/
        foreach ($this->routes as $uriPattern=>$path){

            /*Если хотя бы один паттерн из роутера совпал со строкой запроса,
             то создаем контроллер(и вызываем экшин)*/
            if (preg_match("~\b$uriPattern\b~", $url)){

                //разбиваем полученный путь на массив (контроллер и экшин)
                $segments = explode('/',$path);
                $controllerName = array_shift($segments)."Controller"; //название класса для контроллера
                $actionName = "action".ucfirst(array_shift($segments)); //название метода для экшина


                $controllersFileName = ROOT."/controller/$controllerName.php"; //ищем класс контроллера
                if (file_exists($controllersFileName)){include_once($controllersFileName);} //подключаем

                /*Создаем класс контроллера и запускаем экшин*/
                $objectController = new $controllerName;
                $result = $objectController->$actionName();
                if ($result!=null) break;


                echo "<p> $controllerName $actionName </p>";

            }
        }
    }

}