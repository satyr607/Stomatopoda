<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));

//Composer autoloader
require_once (ROOT . DS . 'vendor' . DS . 'autoload.php');
require_once (ROOT . DS . 'App' . DS . 'core' . DS . 'Config.php');
require_once (ROOT . DS . 'App' . DS . 'core' . DS . 'Database.php');
require_once (ROOT . DS . 'App' . DS . 'core' . DS . 'App.php');
require_once (ROOT . DS . 'App' . DS . 'core' . DS . 'Controller.php');