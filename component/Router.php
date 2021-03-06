<?php


class Router
{
    private $routes;

    public function __construct()
    {
        $routesPath = ROOT.'/config/route.php';
        $this->routes = include($routesPath);
    }

    /**
     * Return request string
     * @return string
     */
    private function getURI()
    {
        if(!empty($_SERVER['REQUEST_URI'])){
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }
    public function run()
    {
        // get URI of query
        $uri = $this->getURI();

        foreach ($this->routes as $uriPattern => $path) {
            if (preg_match("~$uriPattern~", $uri)){
                $segments = explode('/', $path);

                $controllerName = ucfirst(array_shift($segments)).'Controller';

                $actionName = 'action'.ucfirst(array_shift($segments));

                $controllerFile = ROOT . '/controller/' . $controllerName . '.php';

                if(file_exists($controllerFile)){
                    include_once ($controllerFile);
                }

                $controllerObject = new $controllerName;
                $result = $controllerObject->$actionName();
                if ($result != null) {
                    break;
                }
            }
        }
    }

}