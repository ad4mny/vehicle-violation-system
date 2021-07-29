<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_Model extends CI_Model
{
    public function view_user_list_model()
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('role !=', 'Admin');
        return $this->db->get()->result_array();
    }

    public function view_application_list_model()
    {
        $this->db->select('*');
        $this->db->from('applications');
        $this->db->join('vehicles', 'vehicles.vehicleID = applications.vehicleID');
        return $this->db->get()->result_array();
    }

    public function view_application_by_id_model()
    {
    }

    public function view_violation_list_model()
    {
        $this->db->select('*');
        $this->db->from('violations');
        $this->db->join('vehicles', 'vehicles.vehicleID = violations.vehicleID');
        return $this->db->get()->result_array();
    }

    public function delete_user_model()
    {
    }

    public function search_application_model()
    {
    }

    public function approve_application_model()
    {
    }

    public function reject_application_model()
    {
    }

    public function search_violation_model()
    {
    }

    public function pay_violation_model()
    {
    }

    public function remove_violation_model()
    {
    }

}
