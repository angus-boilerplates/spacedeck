<?php

/**
 * The abstract model class
 * provides basic function to connect
 * to a database
 * @author Angus Goody
 * 14/02/21
 * Inital work - https://github.com/daveh/php-mvc
 */

//Namespace and Usage
namespace Core\Base;
use PDO;
use App\Config\Config;

abstract class Model{

  //Private attributes
  private $host = Config::DB_HOST;
  private $user = Config::DB_USER;
  private $pwd = Config::DB_PASSWORD;
  protected $dbName;

  //Constructor
  function __construct($dbName){
    $this->dbName=$dbName;
  }

  //Function to connect
  protected function connect(){
    $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
    $pdo = new PDO($dsn,$this->user,$this->pwd);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    return $pdo;

  }


}

