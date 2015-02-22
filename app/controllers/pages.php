<?php
/**
 * @Author: satyr
 * @Date:   2015-02-21 19:29:01
 * @Last Modified by:   satyr
 * @Last Modified time: 2015-02-22 12:01:06
 */

use App\Core\Controller;

class Pages extends Controller{

	public function index()
	{
		$this->view('index');
	}

}