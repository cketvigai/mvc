<?php
use AHT\Dispatcher;

define('WEBROOT', str_replace("Webroot/index.php", "", $_SERVER["SCRIPT_NAME"])); ///mvc/
define('ROOT', str_replace("Webroot/index.php", "", $_SERVER["SCRIPT_FILENAME"])); //E:/Xampp/htdocs/mvc/

require_once(ROOT.'vendor/autoload.php');

$dispatch = new Dispatcher();
$dispatch->dispatch();

?>