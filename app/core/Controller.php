<?php namespace App\Core;
/**
 * @Author: satyr
 * @Date:   2015-02-21 19:29:01
 * @Last Modified by:   satyr
 * @Last Modified time: 2015-02-22 12:15:24
 */

class Controller{

/**
 * Grabs the model from the folder defined in config
 */
	public function Model($model)
	{
		require_once( DB_PATH_MODEL . $model . '.php' );
		return new $model();
	}

/**
 * Grabs the View from the folder defined in config + $view var
 */
	public function view($view, $data = [])
	{
		require_once( DB_PATH_VIEWS .$view. '.php' );
	}

}