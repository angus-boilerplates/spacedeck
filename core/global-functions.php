<?
/*
 * Angus Goody 02/09/2020
 * Global functions, used between login and public systems

 * This file is used to retrieve php files for all websites in the Spacedeck folder,
 * to use it the file must include ...
 * ----------------------------------
 * include_once dirname($_SERVER["DOCUMENT_ROOT"])."/core/global-functions.php";
 * ----------------------------------
 * Then to include a file ...
 * ----------------------------------
 * <? include_private_file("/private_data/abc.php") ?>
 * ----------------------------------
 */
 


//Will return the full path name for a private file
function include_private_file($path){
	return dirname($_SERVER["DOCUMENT_ROOT"]).$path;
}

//Will return the full path name for a local file
function include_local_file($path){
	return ($_SERVER['DOCUMENT_ROOT'].$path);	
}

//Will return an include file path
function include_includeFile($path){
  return dirname($_SERVER["DOCUMENT_ROOT"])."/includes".$path; 
}

/*
 * Will connect to one of your databases
 * @param: $db_name: name of the database
 * @return: pdo object 
 */
function connect_to_database($db_name){
  //Import Secret keys
  $passwords = include(include_private_file('/private_data/secret_keys.php'));
  // Connection Details
  $DATABASE_HOST = $passwords["db_host"];
  $DATABASE_USER = $passwords["db_username"];
  $DATABASE_PASS = $passwords["db_password"];
  $DATABASE_NAME = $db_name;
  try {
    $pdo = new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
  } catch (PDOException $exception) {
    //Stop script
    die('Error connecting to database');
  }

  return $pdo;
}


