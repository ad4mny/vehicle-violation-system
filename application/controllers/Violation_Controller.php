<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Violation_Controller extends CI_Controller
{
    public function __construct()
    {
        $this->model->load('Violation_Model');
    }

    public function index($page = null, $id = null)
	{
		$this->load->view('templates/Header');
		$this->load->view('templates/Navigation');
		$this->load->view('users/Violation_List_View');
		$this->load->view('templates/Footer');
	}

    public function pay_violation()
    {
        return 0;
    }

    public function view_violation()
    {
        return 0;
    }

    public function view_violation_list()
    {
        return 0;
    }
}
