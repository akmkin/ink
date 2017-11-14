<?php
class Model_Users extends Model
{	
	public function list_users()
	{
		// if($_SESSION['is_admin'] == 0 && $_SESSION['login'] != '')
		// 	$list = $this->db->query("SELECT * FROM users WHERE id = '".$_SESSION['id']."'");
		// else if($_SESSION['is_admin'] == 1)
		// 	$list = $this->db->query("SELECT * FROM users WHERE 1");
		$list = $this->db->query("SELECT * FROM users WHERE 1");
		return $list;
	}
	
	public function get_user($id)
	{
		return $this->db->query("SELECT * FROM users WHERE id = '".$id."'");
	}
	public function set_user($id, $data)
	{
		if($_SESSION['is_admin'] == '1')
			$this->db->query("UPDATE users SET role='".$data['role']."' WHERE id='".$id."'");
		$this->db->query("UPDATE users SET login='".$data['login']."', fio='".$data['fio']."', email='".$data['email']."' WHERE id='".$id."'");
	}
	public function set_pass($id, $pass)
	{
		$this->db->query("UPDATE users SET pass='".md5($pass)."' WHERE id='".$id."'");
	}
	public function delete_user($id)
	{
		$this->db->query("DELETE FROM users WHERE id='".$id."'");
	}
	public function new_user($data)
	{
		return $this->db->query("INSERT INTO users (login, pass, fio, email, role) 
		                        VALUES (
		                        '".$data['login']."',
		                        '".md5($data['pass'])."',
		                        '".$data['fio']."',
		                        '".$data['email']."',
		                        '".$data['role']."'
		                    )");
	}

}