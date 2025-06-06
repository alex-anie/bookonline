<?php 
  use Core\Database;

  // Load config files and class
  require_once('../Core/Database.php');
  $config = require('../config.php');
  require '../Core/functions.php';


  // Instantiate Database
    $db = new Database($config['database']);

  // Query data
    $books = $db->query('SELECT * from books')->fetchAll();
?>