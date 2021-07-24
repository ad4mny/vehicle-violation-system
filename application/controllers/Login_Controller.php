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
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));

		$return = $this->Login_Model->login_model($username, $password);

		if ($return !== false) {

			$this->session->set_userdata('userid', $return['userID']);
			$this->session->set_userdata('name', $return['fullName']);
			$this->session->set_userdata('status', $return['status']);

			switch ($this->session->userdata('status')) {
				case 'Admin':
					redirect(base_url() . 'admin/dashboard');
					break;
				default:
					redirect(base_url() . 'dashboard');
					break;
			}

		} else {
			$this->session->set_tempdata('error', 'Wrong username or password entered.', 1);
			redirect(base_url());
		}
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
