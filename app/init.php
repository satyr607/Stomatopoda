<?php
/**
 * @Author: satyr
 * @Date:   2015-02-21 19:29:01
 * @Last Modified by:   satyr
 * @Last Modified time: 2015-02-22 12:01:47
 */

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));

//Composer autoloader
require_once (ROOT . DS . 'vendor' . DS . 'autoload.php');
require_once (ROOT . DS . 'vendor' . DS . 'illuminate' . DS . 'support' . DS . 'helpers.php');
require_once (ROOT . DS . 'App' . DS . 'core' . DS . 'Config.php');
require_once (ROOT . DS . 'App' . DS . 'core' . DS . 'Database.php');
require_once (ROOT . DS . 'App' . DS . 'core' . DS . 'App.php');
require_once (ROOT . DS . 'App' . DS . 'core' . DS . 'Controller.php');

Illuminate\Support\ClassLoader::register();
Illuminate\Support\ClassLoader::addDirectories(array(DB_PATH_CONT, DB_PATH_MODEL));