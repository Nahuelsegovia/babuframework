<?php
namespace Libs;
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class View{
    public function render($routeView){
        include_once('views/'.$routeView.'');
    }
}
?>