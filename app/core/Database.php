<?php

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