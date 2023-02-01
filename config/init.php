<?php
// Conf File
require_once 'config.php';


//Autoloader
spl_autoload_register(function ($class) {
    require_once 'lib/' . $class . '.php';
});