<?php
//Require the libraries from the folders
require_once 'libraries/Core.php';
require_once 'libraries/Controller.php';
require_once 'libraries/Database.php';
require_once 'helpers/session_helper.php';
require_once 'config/config.php';

// Load Classes
spl_autoload_register(function ($classname) {
    require_once 'classes/' . $classname . '.php';
});

//Instantiate core class
$init = new Core();
