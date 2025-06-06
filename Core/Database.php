<?php

namespace Core;
use PDO;

$config = require '../config.php';


class Database {
    public $connection;
    public $statement;

    public function __construct($config, $username = 'root', $password = '4444'){
        $dsn = 'mysql:host='. $config['host'] . 
                ';port=' . $config['port'] .
                ';dbname=' . $config['dbname'] .
                ';charset='.$config['charset'];

        $this-> connection = new PDO($dsn, $username, $password);
    }

    public function query($query, $params = []){
        $this -> statement = $this->connection -> prepare($query);
        $this -> statement -> execute($params);

        return $this;
    }

    public function find(){
        return $this -> statement -> fetch();
    }

    public function fetchAll(){
        return $this -> statement -> fetchAll(PDO::FETCH_ASSOC);
    }

    public function fetch(){
        return $this -> statement -> fetch(PDO::FETCH_ASSOC);
    }
}

