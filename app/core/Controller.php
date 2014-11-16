<?php namespace App\Core;

class Controller{


/**
 * Grabs the model from the folder defined in config
 * @param [type] $model
 */
	public function Model($model)
	{
		require_once( DB_PATH_MODEL . $model . '.php' );
		return new $model();
	}


/**
 * Grabs the View from the folder defined in config + $view var
 * @param  [type] $view
 * @param  [type] $data
 * @return [type]
 */
	public function view($view, $data = [])
	{
		require_once( DB_PATH_VIEWS .$view. '.php' );
	}

}