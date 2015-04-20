<?php
/*
	Some of this code came from SharkReader.com
	Permission Granted by owner.
	Joshua Pack
*/

// Get URI
$uri = preg_replace("/[^a-zA-Z0-9-\s\/]/", "", urldecode($_SERVER['REQUEST_URI']));
$uri = explode("/", $REQUEST_URI);

// Check if config exists and install
if(!file_exists($basedir . "/app/config.php")) {
	if (!file_exists($basedir . "/app/install.php")) {
		echo "<h1>Error - install.php missing.</h1>";
		die();
	} else {
		require($basedir . "/app/install.php");
		die();
	}
}

// Get config
require($basedir . "/app/config.php");

// Start MySQL
$mysql = new mysqli($MySQL_IP, $MySQL_User, $MySQL_Pass, $MySQL_DBName);

// Make up Title by URI
$pageTitle = ucwords(strtolower($uri[1]));

// Get php file
$PHPPage = $basedir . "/pages/" . strtolower($uri[1]) . ".php";

// Check to see if a URI exists, if not do something about it.
if ($uri[1] == "") {
	$PHPPage = $basedir . "/pages/home.php";
	$pageTitle = "HomePage";
} elseif(!file_exists($PHPPage)) {
	$PHPPage = $basedir . "/pages/404.php";;
	$pageTitle = "404 Error Page";
}

// get special information based on uri
if ($uri[1] == "vendor") {

// include header, page and footer

include($basedir . "/template/header.php");
include($PHPPage);
include($basedir . "/template/footer.php");

// Close MySQL
$mysql->close;