<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_Controller extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_Model');
	}

	public function index($page = 'login')
	{
		$this->load->view('users/templates/Header');

		if ($page === 'register') {
			$this->load->view('users/Register_View');
		} else {
			$this->load->view('users/Login_View');
		}

		$this->load->view('users/templates/Footer');
	}

	public function login()
	{
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));

		$return = $this->Login_Model->login_model($username, $password);

		if ($return !== false) {

			$this->session->set_userdata('userid', $return['userID']);
			$this->session->set_userdata('name', $return['fullName']);
			$this->session->set_userdata('status', $return['role']);

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
		$username = $this->input->post('username');
		$name = $this->input->post('name');
		$status = $this->input->post('status');
		$address = $this->input->post('address');
		$phone = $this->input->post('phone');
		$password = $this->input->post('password');
		$confirm_password = $this->input->post('confirm_password');

		if ($this->check_username_availability($username) !== NULL) {

			$this->session->set_tempdata('error', 'Choosen card ID has been registered, if this was an error please contact UMP Helpdesk.', 1);
			redirect(base_url() . 'register');
		} else if ($confirm_password !== $password) {

			$this->session->set_tempdata('error', 'Password entered is unmatch.', 1);
			redirect(base_url() . 'register');
		} else {

			$password = md5($confirm_password);

			if ($this->Login_Model->registration_model($username, $name, $status, $address, $phone, $password) !== false) {
				$this->session->set_tempdata('notice', 'Registration success, pleaase login using your registered details.', 1);
				redirect(base_url());
			} else {
				$this->session->set_tempdata('error', 'Wrong username or password entered.', 1);
				redirect(base_url());
			}
		}
	}

	public function check_username_availability($username)
	{
		return $this->Login_Model->check_username_availability_model($username);
	}

	public function logout()
	{
		$session_data = array(
			'userid',
			'name',
			'status'
		);

		$this->session->set_tempdata('notice', 'You have logout successfully.', 1);
		$this->session->unset_userdata($session_data);

		redirect(base_url());
	}
}
