<?php
/**
 * @Author: satyr
 * @Date:   2015-02-21 19:29:01
 * @Last Modified by:   satyr
 * @Last Modified time: 2015-02-22 12:01:34
 */

use Illuminate\Database\Capsule\Manager as Capsule;

/**
 * Pass all the configs to Eloquent and boot it up
 */

$capsule =new Capsule();

$capsule->addConnection([
	'driver'    => DB_DRIVER,
	'host'      => DB_HOST,
	'username'  => DB_USER,
	'password'  => DB_PASS,
	'database'  => DB_DB,
	'charset'   => DB_CHAR,
	'collation' => DB_COLL,
	'prefix'    => DB_PRE
]);

$capsule->bootEloquent();