<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

define('ROOT', dirname(__FILE__));
require_once ROOT.'/Components/Router.php';
include_once ROOT."/config/db.php";
$router = new Router();
$router->run();