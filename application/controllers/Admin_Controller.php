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
        $this->load->view('admin/templates/Navigation');

        switch ($page) {
            case 'dashboard':
                $this->load->view('admin/Dashboard_View');
                break;
            case 'users':
                $data['user_list'] = $this->view_user_list();
                $this->load->view('admin/User_List_View', $data);
                break;
            case 'applications':
                $data['application_list'] = $this->view_application_list();
                $this->load->view('admin/Application_List_View', $data);
                break;
            case 'violations':
                $data['violation_list'] = $this->view_violation_list();
                $this->load->view('admin/Violation_List_View', $data);
                break;
            default:
                $this->load->view('users/Login_View');
                break;
        }

        $this->load->view('admin/templates/Footer');
    }

    public function view_user_list()
    {
        return $this->Admin_Model->view_user_list_model();
    }

    public function view_application_list()
    {
        return $this->Admin_Model->view_application_list_model();
    }

    public function view_application_by_id($id)
    {
        $data['application_data'] = $this->Admin_Model->view_application_by_id_model($id);

        $this->load->view('admin/templates/Header');
        $this->load->view('admin/templates/Navigation');
        $this->load->view('admin/Application_View', $data);
        $this->load->view('admin/templates/Footer');
    }

    public function view_violation_list()
    {
        return $this->Admin_Model->view_violation_list_model();
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
