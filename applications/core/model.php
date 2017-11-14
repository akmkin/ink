<?php

class Model
{
	public $db;
	public function __construct()
	{
		$this->db = new DB();
	}
	
	public function get()
	{
	}
}