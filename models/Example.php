<?php
namespace Models;
include_once('Model.php');

class Example extends Model{
    public function __construct()
    {
        parent::__construct('example'); //Table name
    }
}