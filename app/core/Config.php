<?php

define('DEVELOPMENT_ENVIRONMENT',true);


/**
 * Database
 */

define('DB_DRIVER'    , 'mysql');
define('DB_HOST'      , 'localhost');
define('DB_USER'      , 'mvc_root');
define('DB_PASS'      , 'mvc_root');
define('DB_DB'        , 'mvc');
define('DB_CHAR'      , 'utf8');
define('DB_COLL'      , 'utf8_unicode_ci');
define('DB_PRE'       , '');


/**
 * Paths 
 */

define('DB_PATH_MODEL', ROOT . DS . 'App' . DS . 'Models' . DS );
define('DB_PATH_VIEWS', ROOT . DS . 'App' . DS . 'Views' . DS );
define('DB_PATH_CONT' , ROOT . DS . 'App' . DS . 'Controllers' . DS );

/**
 * Default Controller and Method
 */

define('DEFAULT_CONTROLLER', 'pages');
define('DEFAULT_METHOD','index');