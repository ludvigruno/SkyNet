<?php

//echo $_SERVER['REQUEST_URI'];


ini_set('display_errors', 1);
error_reporting(E_ALL);


define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Autoload.php');

 $router = new Router();
 $router->anReqRun();

?>