<?php
// output buffering is turned on
ob_start();

//Path for the functions directory
define("FUNCTIONS_PATH", dirname(__FILE__));

//Path for the whole project
define("ADMINISTRADOR_PATH", dirname(FUNCTIONS_PATH));

//Path for the views
define("PAGES_PATH", FUNCTIONS_PATH . '/pages');

// Dinamycally find everything from view
$administrador_end = strpos($_SERVER['SCRIPT_NAME'], '/view') + 7;
$doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $administrador_end);
define("WWW_ROOT", $doc_root);

//Start of all php functions and variable I may need
require_once('functions.php');
require_once('database.php');
require_once('query_functions.php');

//Connection to my database
$db = db_connect();
