<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Report_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Report_Model');
    }

    public function index($page = null, $id = null)
	{
		$this->load->view('templates/Header');
		$this->load->view('templates/Navigation');
		$this->load->view('users/Report_View');
		$this->load->view('templates/Footer');
	}

    public function view_point_history()
    {
        return 0;
    }

}
