<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_Model extends CI_Model
{
	public function login_model($username, $password)
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('cardID', $username);
		$this->db->where('password', $password);
		return $this->db->get()->row_array();
	}

	public function registration_model()
	{
		return 0;
	}
}
