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



    public function run(){
        echo "hi body";
    }

}