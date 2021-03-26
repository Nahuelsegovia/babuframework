<?php
namespace Models;
include_once('Model.php');

class Example extends Model{
    public function __construct()
    {
        $model = new Model('example'); //Table name
    }
}