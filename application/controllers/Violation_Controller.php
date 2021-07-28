<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Violation_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->authentication->verify_login();
        $this->load->model('Violation_Model');
    }

    public function index($page = null, $id = null)
	{
        $data['violation_list'] = $this->view_violation_list();

		$this->load->view('users/templates/Header');
		$this->load->view('users/templates/Navigation');
        $this->load->view('users/Violation_List_View', $data);
		$this->load->view('users/templates/Footer');
	}

    public function view_violation_list()
    {
        return  $this->Violation_Model->view_violation_list_model();
    }
}
