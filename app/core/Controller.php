<?php namespace App\Core;

class Controller{

	public function Model($model)
	{
		echo $Config->Paths->models;
		require_once( DB_PATH_MODEL . $model . '.php' );
		return new $model();
	}

	public function view($view, $data = [])
	{
		require_once( DB_PATH_VIEWS .$view. '.php' );
	}

}