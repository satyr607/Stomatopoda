<?php
/**
 * @Author: satyr
 * @Date:   2015-02-21 19:29:01
 * @Last Modified by:   satyr
 * @Last Modified time: 2015-02-22 12:12:55
 */

/**
 * Save the file as Config.php
 */

define('DEVELOPMENT_ENVIRONMENT',true);

/**
 * Database
 */

define('DB_DRIVER'    , 'mysql');
define('DB_HOST'      , 'localhost');
define('DB_USER'      , 'userName');
define('DB_PASS'      , 'userPass');
define('DB_DB'        , 'dbName');
define('DB_CHAR'      , 'utf8');
define('DB_COLL'      , 'utf8_unicode_ci');
define('DB_PRE'       , '');

/**
 * Paths
 * These will likely not need to be changed
 */

define('DB_PATH_MODEL', ROOT . DS . 'App' . DS . 'Models' . DS );
define('DB_PATH_VIEWS', ROOT . DS . 'App' . DS . 'Views' . DS );
define('DB_PATH_CONT' , ROOT . DS . 'App' . DS . 'Controllers' . DS );