<?php
//Import the global functions
include_once dirname($_SERVER["DOCUMENT_ROOT"])."/core/global-functions.php";
//Import Secret keys
include_once include_private_file('/private_data/secret_keys.php');
// Connection Details
$DATABASE_HOST = get_db_host();
$DATABASE_USER = get_db_user();
$DATABASE_PASS = get_local_db_password();
$DATABASE_NAME = get_public_table_name();
$pdo = new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
try {
  $pdo = new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
} catch (PDOException $exception) {
  // If there is an error with the connection, stop the script and display the error.
  die ('Failed to connect to database!');
}