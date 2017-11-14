<?php

class C_Login extends Controller
{
	public function action_index()
	{
		if($_SESSION['login'] != '')
			HTTP::redirect('/users');
		if ($_POST['login'] != '') 
		{
			$auth = new Model_Login;
			if($auth->auth($_POST['login'], $_POST['pass']))
				HTTP::redirect('/users');
		}
		$this->view->factory('login', $user);
	}

	public function action_registration()
	{
		if ($_POST['login'] != '' && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)!==false) 
		{
			$auth = new Model_Login;
			if($auth->registration($_POST))
				HTTP::redirect('/');
		}
		$this->view->factory('registration');
	}

	public function action_logout()
	{
		$auth = new Model_Login;	
		$auth->logout();
		HTTP::redirect('/');
	}
}