<?php
class Route
{
	static function start()
	{
		$controller = 'main';
		$action = 'index';
		$route = explode('/', $_SERVER['REQUEST_URI']);
		if ( !empty($route[1]) )
		{	
			$controller = $route[1];
		}
		if ( !empty($route[2]) )
		{
			$action = $route[2];
		}

		if(file_exists(DOCROOT."applications".DIRECTORY_SEPARATOR."controller".DIRECTORY_SEPARATOR."C_".$controller.EXT))
		{
			include DOCROOT."applications".DIRECTORY_SEPARATOR."controller".DIRECTORY_SEPARATOR."C_".$controller.EXT;
		}
		else
		{
			echo '<h1>404</h1>';
			die();
		}
		include DOCROOT."applications".DIRECTORY_SEPARATOR."model".DIRECTORY_SEPARATOR."Model_".$controller.EXT;

		$controller = 'C_'.$controller;

		$controller = $controller;
		$controller = new $controller;
		$action = 'action_'.$action;
		
		if(method_exists($controller, $action))
		{
			$controller->$action();
		}
		else
		{
			echo '<h1>404</h1>';
			die();
		}
	}
}