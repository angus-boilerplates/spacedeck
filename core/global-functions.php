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


