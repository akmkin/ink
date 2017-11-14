<?php
class Model_Login extends Model
{
	public function auth($login, $pass)
	{
		$user = $this->db->query("SELECT * FROM users WHERE login = '".$login."' AND pass= '".md5($pass)."'");
		if($user[0]['login'] != '')
		{
			$_SESSION['is_admin'] = $user[0]['role'];
			$_SESSION['login'] = $user[0]['login'];
			$_SESSION['id'] = $user[0]['id'];
			return true;
		}
		else
		{
			$_SESSION['is_admin'] = 0;
			$_SESSION['login'] = '';
			$_SESSION['id'] = '';
			return false;
		}
	}

	public function logout()
	{
		$_SESSION['is_admin'] = 0;
		$_SESSION['login'] = '';
		$_SESSION['id'] = '';
		return false;
	}

	public function registration($data)
	{
		return $this->db->query("INSERT INTO users (login, pass, fio, email, role) 
		                        VALUES (
		                        '".$data['login']."',
		                        '".md5($data['pass'])."',
		                        '".$data['fio']."',
		                        '".$data['email']."',
		                        '0'
		                    )");
	}
}