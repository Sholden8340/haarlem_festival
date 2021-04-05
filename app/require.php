<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


//Require the libraries from the folders
require_once 'libraries/Core.php';
require_once 'libraries/Controller.php';
require_once 'libraries/Database.php';
require_once 'helpers/Session.php';
require_once 'helpers/helper.php';
require_once 'config/config.php';

// Load Classes
spl_autoload_register(function ($classname) {
    require_once 'classes/' . $classname . '.php';
});

// Require Payment API
require_once '../vendor/autoload.php';

Session::start();
Session::set('userId', 1); // Login doesn't work

//Instantiate core class
$init = new Core();
