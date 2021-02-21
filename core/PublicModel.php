<?php
/**
 * The database class for your
 * public database
 * @author Angus Goody
 * 14/02/21
 */

namespace Core;
use \App\Config\Config;

class PublicModel extends \Core\Base\Model{

  //Constructor
  function __construct(){
    $this->dbName=Config::PUBLIC_DB_NAME;
  }
  
  /*
  * Overrides default method
  * and provides error handling
  */
  function connect(){
    try{
      return parent::connect();
    }catch (\PDOException $e) {
      //TODO ADD broken DB screen here
      echo "Database seems to be broken m8";
      die();
    }
  }

}

