<?php
error_reporting(E_ALL & ~E_NOTICE);
ini_set('display_errors','On');

define ("ROOT", dirname(__DIR__));
require_once(ROOT . '/component/Router.php');

$router = new Router();
$router->run();

