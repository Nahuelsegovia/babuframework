<?php
namespace Models;

class Model{
    private static $table;
    private static $connection;
    public function __construct($table){
        $dbname = 'table';
        $dsn = "mysql:host=0.0.0.0:8889;dbname=$dbname";
        self::$connection = new \PDO($dsn, 'root', 'root');
        self::$table = $table;
    }

     public function exampleMethod():void{
        $table = self::$table;
        $query = self::$connection->prepare("SELECT * FROM {$table}");
        $query->execute();
        $data = $query->fetchAll(\PDO::FETCH_OBJ);
        $send = [];
        foreach($data as $key => $row){
            array_push($send, [$key, $row]);
        }

        echo json_encode($data);
    }

}