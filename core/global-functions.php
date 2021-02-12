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
 * Will connect to one of the Citros databases, simply return
 * false if connection failure
 * @param: $db_name: name of the database
 * @return: pdo object 
 */
function connect_to_database_raw($db_name){
  //Import Secret keys
  $passwords = include(include_private_file('/private_data/secret_keys.php'));
  // Connection Details
  $DATABASE_HOST = $passwords["db_host"] ?? "null";
  $DATABASE_USER = $passwords["db_username"] ?? "null";
  $DATABASE_PASS = $passwords["db_password"] ?? "null";
  $DATABASE_NAME = $db_name;
  try {
    $pdo = new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
  } catch (PDOException $exception) {
    return 0;
  }

  return $pdo;
}


function get_public_database_name(){
  $naming = include include_private_file("/private_data/naming.php");
  $dbname = $naming["public-database"] ?? "null"; //Return null if not found
  return $dbname;
}


