<?php 
error_reporting(E_ALL & ~E_NOTICE);
ini_set('display_errors', 'On');

session_start();
require_once(__DIR__.'/includes/autoloader.php');
require_once(__DIR__.'/includes/database.php');
$page = isset($_GET['p']) ? $_GET['p'] : "home";

require_once(__DIR__.'/includes/header.php');
require_once(__DIR__.'/pages/'.$page.'.php');
require_once(__DIR__.'/includes/footer.php');

