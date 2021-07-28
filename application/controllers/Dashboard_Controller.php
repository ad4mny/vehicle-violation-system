<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->authentication->verify_login();
	}

	public function index()
	{
		$this->load->view('templates/Header');
		$this->load->view('templates/Navigation');
		$this->load->view('users/Dashboard_View');
		$this->load->view('templates/Footer');
	}
}
