<?php

class View
{
	public function factory($content, $data = null)
	{		
		include 'templates/views/main.php';
	}
	public function factory_content($content, $data = null)
	{		
		include 'templates/views/'.$content.EXT;
	}
}