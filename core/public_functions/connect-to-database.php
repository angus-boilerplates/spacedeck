<?php
//Import the global functions
include_once dirname($_SERVER["DOCUMENT_ROOT"])."/core/global-functions.php";
$pdo=connect_to_database_raw(get_public_database_name());
if(!$pdo){
  //Stop script
  die('Error connecting to database');
}