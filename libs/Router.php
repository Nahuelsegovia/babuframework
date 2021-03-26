<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once('libs/views.php');

class Router{

    public function __construct(){
    }

    static function GET($routePath, $routeController = null){
        if($_SERVER['REQUEST_METHOD'] == 'GET'){
            $routes  = $_SERVER['REQUEST_URI'];
            $paths = explode('/', $routes);
            array_shift($paths);

            if($paths[1] == $routePath){
                include_once('controllers/'.$routeController.'');
            }

        }

        else {
            http_response_code(405);
        }
    }

    static function POST($routePath, $routeController){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $routes  = $_SERVER['REQUEST_URI'];
            $paths = explode('/', $routes);
            array_shift($paths);
    
            if($paths[1] == $routePath){
                include_once('controllers/'.$routeController.'');
            }
        }

        else {
            http_response_code(405);
        }
    }

    static function PUT($routePath, $routeController){
        if($_SERVER['REQUEST_METHOD'] == 'PUT'){
            $routes  = $_SERVER['REQUEST_URI'];
            $paths = explode('/', $routes);
            array_shift($paths);
    
            if($paths[1] == $routePath){
                include_once('controllers/'.$routeController.'');
            }

        }

        else {
            http_response_code(405);
        }
    }

    static function PATCH($routePath, $routeController){
        if($_SERVER['REQUEST_METHOD'] == 'PATCH'){
            $routes  = $_SERVER['REQUEST_URI'];
            $paths = explode('/', $routes);
            array_shift($paths);
    
            if($paths[1] == $routePath){
                include_once('controllers/'.$routeController.'');
            }

        }

        else {
            http_response_code(405);
        }
    }

    static function DELETE($routePath, $routeController){
        if($_SERVER['REQUEST_METHOD'] == 'DELETE'){
            $routes  = $_SERVER['REQUEST_URI'];
            $paths = explode('/', $routes);
            array_shift($paths);
    
            if($paths[1] == $routePath){
                include_once('controllers/'.$routeController.'');
            }

        }

        else {
            http_response_code(405);
        }
    }

    static function HEAD($routePath, $routeController){
        if($_SERVER['REQUEST_METHOD'] == 'HEAD'){
            $routes  = $_SERVER['REQUEST_URI'];
            $paths = explode('/', $routes);
            array_shift($paths);
            
            if($paths[1] == $routePath){
                include_once('controllers/'.$routeController.'');
            }

        }

        else {
            http_response_code(405);
        }
    }

    static function ALL($routePath, $routeController){
        if($_SERVER['REQUEST_METHOD'] == 'GET' || $_SERVER['REQUEST_METHOD'] == 'POST' 
        || $_SERVER['REQUEST_METHOD'] == 'PUT' || $_SERVER['REQUEST_METHOD'] == 'DELETE' ||
        $_SERVER['REQUEST_METHOD'] == 'HEAD'){
            $routes  = $_SERVER['REQUEST_URI'];
            $paths = explode('/', $routes);
            array_shift($paths);
            
            if($paths[1] == $routePath){
                include_once('controllers/'.$routeController.'');
            }

        }

        else {
            http_response_code(405);
        }

    }

    static function VIEW($routePath, $routeView){
        $routes  = $_SERVER['REQUEST_URI'];
        $paths = explode('/', $routes);
        array_shift($paths);
        
        if($paths[1] == $routePath){
            $view = new View();
            $loadView = $view;
            $loadView->render($routeView);
        } 
    }
}
    
?>