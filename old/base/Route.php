<?php


class Route
{
    public function render(){

        $url = substr($_SERVER['REQUEST_URI'], 1);
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        if(!empty($url[0])){
            $fileController = $url[0] . 'Controller' . '.php';
        }else{
            $url[0] = 'main';
            $fileController = $url[0] . 'Controller' . '.php';
        }

        $controller = $url[0] . 'Controller';
        if(is_null($url[1])){
            $action = 'main';
        }else{
            $action = $url[1];
        }
        $access = new Access();
        if($access->checkAccess() or $url[0] == "login"){
            if(file_exists(CONTROLLER . "/$fileController")){
                require_once CONTROLLER . "/$fileController";
                if(method_exists($controller, $action . 'Action')){
                    $controller = new $controller($action);
                }else{
                    return header("location:/error/error404");
                }
            }else{
                return header("location:/error/error404");
            }
        }else{
            return header("location:/login");
        }

    }

}