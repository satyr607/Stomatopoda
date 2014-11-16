<?php

use App\Core\Controller;

class Pages extends Controller{

	public function index()
	{
		$this->view('index');
	}

}