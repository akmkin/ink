<?php
class C_Main extends Controller
{
	public function action_index()
	{
		if($_SESSION['login'] != '')
			HTTP::redirect('/users');
		$this->view->factory('index');
	}
}