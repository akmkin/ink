<?php

class HTTP
{
	function redirect($route, $code = false)
	{		
		header('Location: http://'.$_SERVER['SERVER_NAME'].$route, true, $code);
	}
}