<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_Controller extends CI_Controller
{

	public function __construct()
	{
        parent::__construct();
		$this->load->model('Login_Model');
	}

	public function index()
	{
		$this->load->view('templates/Header');
		$this->load->view('users/Login_View');
		$this->load->view('templates/Footer');
	}

	public function login()
	{
		return 0;
	}

	public function registration()
	{
		return 0;
	}

	public function logout()
	{
		return 0;
	}

}
