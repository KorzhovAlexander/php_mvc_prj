<?php


class Router
{
    private $routes;
    private $controllerName;
    private $actionName;
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
                $this->controllerName = array_shift($segments)."Controller";
                $this->actionName = "action".ucfirst(array_shift($segments));
            }
        }
        echo "<p> $this->controllerName $this->actionName </p>";
    }

}