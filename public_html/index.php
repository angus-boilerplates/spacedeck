<?php
//Import the global functions
include_once dirname($_SERVER["DOCUMENT_ROOT"])."/core/global-functions.php";

$error_file_location="/views/util/invalid404.php";

$path = ltrim($_SERVER['REQUEST_URI'], '/');    // Trim leading slash(es)
$path=explode("?", $path)[0]; //Remove GET parameters
$elements = preg_split('@/@', $path, NULL, PREG_SPLIT_NO_EMPTY);

//If nothing specified go home
if(empty($elements)){
  include_once include_private_file("/views/public/home.php");
}
else 
switch(array_shift($elements))// Pop off first item and switch
{

  //About page
  case 'about':
    if (count($elements) > 0){include_once include_private_file($error_file_location);}else{include_once include_private_file("/views/public/about.php");}
    break;

  //Default - Go to error page
  default:
      include_once include_private_file($error_file_location);
}

?>