<?php

    // Include Config and
require('config.php');
require('classes/Bootstrap.php');
require('classes/Controller.php');
require('classes/Model.php');
require('controllers/home.php');
require('models/homel.php');
$request = $_GET;
//var_dump($request);
$bootstrap = new Bootstrap($_GET);

$controller = $bootstrap->createController();
//var_dump($bootstrap, $controller);
if ($controller) {
    $controller->executeAction();
}



