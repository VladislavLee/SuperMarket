<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 27/11/2018
 * Time: 20:39
 */



class Router
{

    private $routes;


    private function getUri(){
        if(!empty($_SERVER['REQUEST_URI'])){
            return trim($_SERVER['REQUEST_URI'],'/');
        }
    }


    public function __construct()
    {
        $routesPath = ROOT.'/config/routes.php';
        $this->routes = include($routesPath);
    }


    public function run()
    {
        $uri = $this->getUri();

        foreach ($this->routes as $uriPattern=> $path){
            if(preg_match("~$uriPattern~",$uri)){

                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);

                $segments= explode('/',$path);

                $controllerName = array_shift($segments).'Controller';
                $controllerName = ucfirst($controllerName);

                $actionName = 'action'.ucfirst(array_shift($segments));



                $parameters = $segments;


                $controllerFile = ROOT.'/controllers/'.$controllerName.'.php';
                if(file_exists($controllerFile)){
                    include_once($controllerFile);
                }
                $controllerObject = new $controllerName;
                $result = call_user_func_array(array($controllerObject,$actionName),$parameters);

                if($result!=null) {
                    break;
                }
            }
        }
    }
}



