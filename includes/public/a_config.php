<?php
/*
 * This is the config file, this is the first script loaded for every web page
 * on your site, it will setup any global variables needed etc.
 *
 * -------- GLOBAL VARIABLES ---------
 *
 * NAV_PAGE: The global variable indicating the currently selected navigation link
 * CURRENT_PAGE: The currently loaded page (for use in code; not displayed)
 * PAGE_TITLE: The title which is displayed in the Browser tab
 * PAGE_DESCRIPTION: The description of the page (appears in search results)
 * PAGE_CANONICAL: The canonical tag that is used for page directs and SEO
 * 
 * -----------------------------------
 * 
 * The comment below will appear at the top of every page on your site
 */
?>
<!--Spacedeck, created by Angus Goody 09/2020-->

<?php

//Setup Global defaults to avoid undefined errors (These will get overwritten)
$NAV_PAGE="index";
$CURRENT_PAGE="index";
$PAGE_TITLE="Home";
$PAGE_DESCRIPTION="Welcome to Spacedeck";


//Find the path of the current page
$request_url = $_SERVER['REQUEST_URI'];
$first_parent = dirname($request_url);
$file_base = basename($request_url);

//Calculate Canonical
$trimmed = trim($request_url, ".php");
$PAGE_CANONICAL = "space.local".rtrim($trimmed, '/') . '/'; //TODO update me when publish to your URL

//Switch statement for pages
switch ($request_url) {

	//Home page
	case '/index.php':
		$NAV_PAGE="index";
		$CURRENT_PAGE="index";
		$PAGE_TITLE="Home | Spacedeck";
		$PAGE_DESCRIPTION="Welcome to Spacedeck";
		break;

	//About Page
	case '/about.php':
		$NAV_PAGE="about";
		$CURRENT_PAGE="about";
		$PAGE_TITLE="About | Spacedeck";
		$PAGE_DESCRIPTION="Find out about Spacedeck";
		break;

	//If undefined
	default:
		$NAV_PAGE="undefined";
		$CURRENT_PAGE="undefined";
		$PAGE_TITLE="Spacedeck";
		$PAGE_DESCRIPTION="Welcome to Spacedeck";
		break;
}

?>
