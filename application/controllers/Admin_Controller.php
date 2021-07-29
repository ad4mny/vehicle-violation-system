<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_Controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->authentication->verify_login();
        $this->load->model('Admin_Model');
    }

    public function index($page = 'login')
    {
        $this->load->view('admin/templates/Header');

        switch ($page) {
            case 'dashboard':
                $this->load->view('admin/Dashboard_View');
                break;
            case 'users':
                $this->load->view('admin/User_List_View');
                break;
            case 'applications':
                $this->load->view('admin/Application_List_View');
                break;
            case 'violations':
                $this->load->view('admin/Violation_List_View');
                break;
            default:
                $this->load->view('users/Login_View');
                break;
        }

        $this->load->view('admin/templates/Footer');
    }

    public function view_user_list()
    {
    }

    public function view_application_list()
    {
    }

    public function view_application_by_id()
    {
    }

    public function view_violation_list()
    {
    }

    public function delete_user()
    {
    }

    public function search_application()
    {
    }

    public function approve_application()
    {
    }

    public function reject_application()
    {
    }

    public function search_violation()
    {
    }

    public function pay_violation()
    {
    }

    public function remove_violation()
    {
    }
}
