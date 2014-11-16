<?php

class App{

	//set defaults
	protected $controller = DEFAULT_CONTROLLER;
	protected $method = DEFAULT_METHOD;
	protected $params = [];


/**
 * pulls the Controller and Method from the URL. Sends the rest as vars
 */

	function __construct()
	{
		$url = $this->parseUrl();

		if(file_exists(DB_PATH_CONT .$url[0]. '.php'))
		{
			$this->controller = $url[0];
			unset($url[0]);
		}

		require_once(DB_PATH_CONT .$this->controller. '.php');
		$this->controller = new $this->controller;

		if(isset($url[1]))
		{
			if(method_exists($this->controller, $url[1]))
			{
				$this->method = $url[1];
				unset($url[1]);
			}
		}

		$this->params = $url ? array_values($url) : [];
		call_user_func_array([$this->controller, $this->method], $this->params);
	}

/**
 * Grabs the current URL and breaks it down into an array that can be used in __construct
 */

	public function parseUrl()
	{
		if(isset($_GET['url']))
		{
			return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
		}
	}

}