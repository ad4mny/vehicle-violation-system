<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sticker_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Sticker_Model');
        $this->load->library('upload');
    }

    public function index($page = 'sticker', $id = null)
    {
        $this->load->view('templates/Header');
        $this->load->view('templates/Navigation');

        if ($page === 'apply') {
            $data['user_data'] = $this->fetch_profile();
            $this->load->view('users/Application_Form', $data);
        } else if ($page === 'view') {
            $data['sticker_data'] = $this->view_sticker($id);
            $this->load->view('users/Sticker_View', $data);
        } else if ($page === 'update') {
            $data['user_data'] = $this->fetch_profile();
            $data['sticker_data'] = $this->view_sticker($id);
            $this->load->view('users/Update_Application_Form', $data);
        } else {
            $data['sticker_list'] = $this->view_sticker_list();
            $this->load->view('users/Sticker_List_View', $data);
        }

        $this->load->view('templates/Footer');
    }

    public function apply_sticker()
    {
        $type = $this->input->post('type');
        $brand = $this->input->post('brand');
        $reg = $this->input->post('reg');
        $colour = $this->input->post('colour');
        $tax_date = $this->input->post('tax_date');
        $licence_date = $this->input->post('licence_date');
        $licence_no = $this->input->post('licence_no');
        $licence_class = $this->input->post('licence_class');

        $config['upload_path'] = './assets/upload/vehicle-grant';
        $config['allowed_types'] = 'jpeg|jpg';
        $config['max_size'] = '0';

        $this->upload->initialize($config);

        if (!$this->upload->do_upload('grant')) {

            $this->session->set_tempdata('error', $this->upload->display_errors('', ''), 1);
        } else {

            $grant = $this->upload->data('file_name');

            if ($this->Sticker_Model->apply_sticker_model($type, $brand, $reg, $colour, $tax_date, $licence_date, $licence_no, $licence_class, $grant) !== false) {

                $this->session->set_tempdata('notice', 'Your sticker application has been submitted succesfully.', 1);
            } else {

                $this->session->set_tempdata('error', 'Failed to submit your sticker applciations.', 1);
            }
        }

        redirect(base_url() . 'sticker/apply');
    }

    public function update_sticker()
    {
        $vehicle_id = $this->input->post('vehicle_id');
        $type = $this->input->post('type');
        $brand = $this->input->post('brand');
        $reg = $this->input->post('reg');
        $colour = $this->input->post('colour');
        $tax_date = $this->input->post('tax_date');
        $licence_date = $this->input->post('licence_date');
        $licence_no = $this->input->post('licence_no');
        $licence_class = $this->input->post('licence_class');

        $config['upload_path'] = './assets/upload/vehicle-grant';
        $config['allowed_types'] = 'jpeg|jpg';
        $config['max_size'] = '0';

        $this->upload->initialize($config);

        if (!$this->upload->do_upload('grant')) {

            $this->session->set_tempdata('error', $this->upload->display_errors('', ''), 1);
        } else {

            $grant = $this->upload->data('file_name');

            if ($this->Sticker_Model->update_sticker_model($vehicle_id, $type, $brand, $reg, $colour, $tax_date, $licence_date, $licence_no, $licence_class, $grant) !== false) {

                $this->session->set_tempdata('notice', 'Your sticker application has been updated succesfully.', 1);
            } else {

                $this->session->set_tempdata('error', 'Failed to update your sticker applciations.', 1);
            }
        }

        redirect(base_url() . 'sticker');
    }

    public function delete_sticker($id)
    {
        if ($this->Sticker_Model->delete_sticker_model($id) !== false) {

            $this->session->set_tempdata('notice', 'Your sticker application has been deleted succesfully.', 1);
        } else {
            $this->session->set_tempdata('error', 'Failed to delete your sticker applciations.', 1);
        }
        redirect(base_url() . 'sticker');
    }

    public function view_sticker($id)
    {
        return $this->Sticker_Model->view_sticker_model($id);
    }

    public function view_sticker_list()
    {
        return $this->Sticker_Model->view_sticker_list_model();
    }

    public function fetch_profile()
    {
        return $this->Sticker_Model->fetch_profile_model();
    }
}
