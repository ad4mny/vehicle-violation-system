<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_Controller extends CI_Controller {

	public function index()
	{
		$this->load->view('fragments/Header');
		$this->load->view('users/Login_View');
		$this->load->view('fragments/Footer');
	}


	
}
