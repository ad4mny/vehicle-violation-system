<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sticker_Controller extends CI_Controller
{
    public function __construct()
    {
        $this->model->load('Sticker_Model');
    }

    public function index($page = null, $id = null)
	{
		$this->load->view('templates/Header');
		$this->load->view('templates/Navigation');
		$this->load->view('users/Sticker_List_View');
		$this->load->view('templates/Footer');
	}

    public function apply_sticker()
    {
        return 0;
    }

    public function delete_sticker()
    {
        return 0;
    }

    public function update_sticker()
    {
        return 0;
    }

    public function view_sticker()
    {
        return 0;
    }

    public function view_sticker_list()
    {
        return 0;
    }
}
