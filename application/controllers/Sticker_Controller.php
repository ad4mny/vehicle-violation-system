<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sticker_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Sticker_Model');
    }

    public function index($page = 'sticker', $id = null)
    {
        $this->load->view('templates/Header');
        $this->load->view('templates/Navigation');

        if ($page === 'apply') {
            $this->load->view('users/Application_Form');
        } else if ($page === 'view') {
            $data['sticker_data'] = $this->view_sticker($id);
            $this->load->view('users/Sticker_View', $data);
        } else if ($page === 'update') {
            $data['sticker_data'] = $this->view_sticker($id);
            $this->load->view('users/Sticker_View', $data);
        } else {
            $data['sticker_list'] = $this->view_sticker_list();
            $this->load->view('users/Sticker_List_View', $data);
        }

        $this->load->view('templates/Footer');
    }

    public function apply_sticker()
    {
        return 0;
    }

    public function delete_sticker($id)
    {
        return 0;
    }

    public function update_sticker()
    {
        return 0;
    }

    public function view_sticker($id)
    {
        return 0;
    }

    public function view_sticker_list()
    {
        return 0;
    }
}
