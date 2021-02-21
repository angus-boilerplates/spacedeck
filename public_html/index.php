<?php
/**
 * Index.php for Spacedeck
 * where the routing class will
 * be used to dispatch a URL to the correct
 * controller
 */

//Import the global functions
include_once dirname($_SERVER["DOCUMENT_ROOT"])."/Core/global-functions.php";



//Create a routing class
$router = new Core\Base\Router();
//Add error page
$router->addErrorAction(["controller"=>"Error","action"=>"notFound","namespace"=>"Pub"]);


// Add the general routes rules
$router->add('', ['controller' => 'Home', 'action' => 'index','namespace' => 'Pub']); //No url
$router->add('{controller}',['namespace' => 'Pub','action' => 'index']); //Just controller
$router->add('{controller}/{action:\b(?!index\b)\w+}',['namespace' => 'Pub']); //Controller and an action (no index action) 


//Dispatch this url
$router->dispatch($_SERVER['QUERY_STRING']);
