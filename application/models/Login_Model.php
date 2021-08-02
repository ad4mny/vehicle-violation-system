<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_Model extends CI_Model
{
	public function log_in_model($username, $password)
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('cardID', $username);
		$this->db->where('password', $password);
		return $this->db->get()->row_array();
	}

	public function registration_model($username, $name, $status, $address, $phone, $password)
	{
		$data = array(
			'cardID' => $username,
			'fullName' => $name,
			'role' => $status,
			'address' => $address,
			'phone' => $phone,
			'password' => $password
		);

		return $this->db->insert('users', $data);
	}

	public function check_username_availability_model($username)
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('cardID', $username);
		return $this->db->get()->row_array();
	}
}
