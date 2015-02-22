<?php
/**
 * @Author: satyr
 * @Date:   2015-02-21 19:29:01
 * @Last Modified by:   satyr
 * @Last Modified time: 2015-02-22 12:14:17
 */

class App{

	function __construct()
	{

		$cont = new Illuminate\Container\Container;
		Illuminate\Support\Facades\Facade::setFacadeApplication($cont);

		$cont['app'] = $cont;
		$cont['env'] = 'production';

		with(new Illuminate\Events\EventServiceProvider($cont))->register();
		with(new Illuminate\Routing\RoutingServiceProvider($cont))->register();

		require_once (ROOT . DS . 'App' . DS . 'routes.php');

		$request = Illuminate\Http\Request::createFromGlobals();
		$response = $cont['router']->dispatch($request);

		$response->send();
	}

}