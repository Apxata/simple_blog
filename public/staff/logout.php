<?php 
require_once('../../private/initialize.php');

$session = new Session;
$session->logout();

redirect_to('login.php');

