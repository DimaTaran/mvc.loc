<?php
session_start();
require_once(__DIR__. '/vendor/autoload.php');
    // Include Config and other classes
require('config.php');
require('classes/Bootstrap.php');
require('classes/Controller.php');
require('classes/Model.php');
require('controllers/home.php');
require('controllers/user.php');
require('models/home.php');
require('models/user.php');

$request = $_GET;
//var_dump($request);
$bootstrap = new Bootstrap($request);

$controller = $bootstrap->createController();
//var_dump($bootstrap, $controller);
if ($controller) {
    $controller->executeAction();
}



