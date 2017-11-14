<?php
class C_Users extends Controller
{
	public function action_index()
	{
		if($_SESSION['login'] == '')
			HTTP::redirect('/');

		$users = new Model_Users;
		$list = $users->list_users();
		$this->view->factory('users/list', $list);
	}

	public function action_edit()
	{
		if($_SESSION['login'] == '')
			HTTP::redirect('/');

		$users = new Model_Users;
		$id = (int)$_GET['id'];
		if($_POST['login'] != '' && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)!==false && ($_SESSION['is_admin'] == 1 || $_SESSION['id'] == $id))
		{
			if($_POST['pass'] != '')
				$users->set_pass($id, $_POST['pass']);
			$users->set_user($id, $_POST);
		}
		$data = $users->get_user($id);
		$this->view->factory('users/edit', $data);
	}

	public function action_add()
	{
		if($_SESSION['login'] == '')
			HTTP::redirect('/');

		if($_POST['login'] != '' && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)!==false && $_SESSION['is_admin'] == 1)
		{
			$users = new Model_Users;
			$users->new_user($_POST);
			HTTP::redirect("/users");
		}
		$this->view->factory('users/add');
	}

	public function action_delete()
	{
		if($_SESSION['login'] == '')
			HTTP::redirect('/');
		
		$id = (int)$_GET['id'];

		if($_SESSION['is_admin'] == 1 && $_SESSION['id'] != $id) //Чтобы самого себя не удалить
		{
			if($id != '')
			{
				$users = new Model_Users;
				$users->delete_user($id);
			}
		}
		HTTP::redirect('/users');
	}
}