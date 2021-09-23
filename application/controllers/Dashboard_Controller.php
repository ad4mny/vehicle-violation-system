<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
        $this->authentication->verify_login();
		$this->load->view('users/templates/Header');
		$this->load->view('users/templates/Navigation');
		$this->load->view('users/Dashboard_View');
		$this->load->view('users/templates/Footer');
	}
}
