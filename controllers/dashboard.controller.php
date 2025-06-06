<?php

use Core\Database;

    // Load config files and database
    require_once("../Core/Database.php");
    require_once("../Core/functions.php");
    
    $config = require("../config.php");
    // Initiate the db query
    $db = new Database($config['database']);

    $bookId = $_GET['id'] ?? null;

    if(!$bookId){
        die("Book ID not specified");
    }

    $book = $db->query('SELECT * from books where id = :id', [
        'id' => $bookId
    ])->find();
    

// dd($book);

