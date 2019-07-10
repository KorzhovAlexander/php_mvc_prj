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

        $url = $this->getURL();

        foreach ($this->routes as $uriPattern=>$path){
            if (preg_match("~\b$uriPattern\b~", $url)){
                $segments = explode('/',$path);
                $controllerName = array_shift($segments)."Controller";
                $actionName = "action".ucfirst(array_shift($segments));


                $controllersFileName = ROOT."/controller/$controllerName.php";
                if (file_exists($controllersFileName)){include_once($controllersFileName);}


                $objectController = new $controllerName;
                $result = $objectController->$actionName();
                if ($result!=null) break;


                echo "<p> $controllerName $actionName </p>";

            }
        }
    }

}