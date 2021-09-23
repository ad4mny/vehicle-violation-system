<?php
header("Access-Control-Allow-Origin: *");
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_Controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->authentication->verify_login();
        $this->load->model('Admin_Model');
        $this->load->library('sticker');
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

    public function delete_user($id)
    {
        if ($this->Admin_Model->delete_user_model($id) !== false) {
            $this->session->set_tempdata('notice', 'User has been deleted.', 1);
            redirect(base_url() . 'admin/users');
        } else {
            $this->session->set_tempdata('error', 'Failed to delete the user.', 1);
            redirect(base_url() . 'admin/users');
        }
    }

    public function search_application()
    {
        $query = $this->input->post('search');
        $data['application_list'] = $this->Admin_Model->search_application_model($query);

        $this->load->view('admin/templates/Header');
        $this->load->view('admin/templates/Navigation');
        $this->load->view('admin/Application_List_View', $data);
        $this->load->view('admin/templates/Footer');
    }

    public function approve_application($id)
    {
        $this->sticker->generate($id);

        echo '<img src="' . base_url() . 'tes.png" />';

        if ($this->Admin_Model->approve_application_model($id) !== false) {
            $this->session->set_tempdata('notice', 'Application request has been approved.', 1);
            redirect(base_url() . 'admin/applications');
        } else {
            $this->session->set_tempdata('error', 'Failed to approve application request.', 1);
            redirect(base_url() . 'admin/applications');
        }
    }

    public function reject_application($id)
    {
        if ($this->Admin_Model->reject_application_model($id) !== false) {
            $this->session->set_tempdata('notice', 'Application request has been rejected.', 1);
            redirect(base_url() . 'admin/applications');
        } else {
            $this->session->set_tempdata('error', 'Failed to reject application request.', 1);
            redirect(base_url() . 'admin/applications');
        }
    }

    public function search_violation()
    {
        $query = $this->input->post('search');
        $data['violation_list'] = $this->Admin_Model->search_violation_model($query);

        $this->load->view('admin/templates/Header');
        $this->load->view('admin/templates/Navigation');
        $this->load->view('admin/Violation_List_View', $data);
        $this->load->view('admin/templates/Footer');
    }

    public function pay_violation($id)
    {
        if ($this->Admin_Model->pay_violation_model($id) !== false) {
            $this->session->set_tempdata('notice', 'Violation has been paid.', 1);
            redirect(base_url() . 'admin/violations');
        } else {
            $this->session->set_tempdata('error', 'Failed to mark violation as paid.', 1);
            redirect(base_url() . 'admin/violations');
        }
    }

    public function remove_violation($id)
    {
        if ($this->Admin_Model->remove_violation_model($id) !== false) {
            $this->session->set_tempdata('notice', 'Violation has been remove and canceled.', 1);
            redirect(base_url() . 'admin/violations');
        } else {
            $this->session->set_tempdata('error', 'Failed to remove violation.', 1);
            redirect(base_url() . 'admin/violations');
        }
    }

    // API 
    public function view_violation_list_api()
    {
        echo json_encode($this->Admin_Model->view_violation_list_model());
        exit;
    }

    public function view_user_list_api()
    {
        echo json_encode($this->Admin_Model->view_user_list_model());
        exit;
    }

    public function view_application_list_api()
    {
        echo json_encode($this->Admin_Model->view_application_list_model());
        exit;
    }

    public function view_application_by_id_api()
    {
        $id = $this->input->post('sticker_id');
        echo json_encode($this->Admin_Model->view_application_by_id_model($id));
        exit;
    }

    public function set_summon_api()
    {
        $user_id = $this->input->post('user_id');
        $vehicle_id = $this->input->post('vehicle_id');
        $staff_id = $this->input->post('staff_id');
        $violation = $this->input->post('violation');
        $location = $this->input->post('location');

        switch ($violation) {
            case 'Cause accident':
                $demerit = 500;
                break;
            case 'Parking violation':
                $demerit = 400;
                break;
            case 'No sticker displayed':
                $demerit = 300;
                break;
            case 'Not wearing seatbelt/helmet':
                $demerit = 200;
                break;
            default:
                $demerit = 0;
                break;
        }

        echo json_encode($this->Admin_Model->set_summon_model($vehicle_id, $user_id, $staff_id, $violation, $demerit, $location));
        exit;
    }
}
