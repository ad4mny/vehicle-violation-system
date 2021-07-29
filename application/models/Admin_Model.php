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

    public function view_application_by_id_model($id)
    {
        $this->db->select('*');
        $this->db->from('applications');
        $this->db->join('vehicles', 'vehicles.vehicleID = applications.vehicleID');
        $this->db->join('users', 'vehicles.userID = users.userID');
        $this->db->where('applicationID', $id);
        return $this->db->get()->row_array();
    }

    public function view_violation_list_model()
    {
        $this->db->select('*');
        $this->db->from('violations');
        $this->db->join('vehicles', 'vehicles.vehicleID = violations.vehicleID');
        return $this->db->get()->result_array();
    }

    public function delete_user_model($id)
    {
        $this->db->where('userID', $id);
        return $this->db->delete('users');
    }

    public function search_application_model($query)
    {
        $this->db->select('*');
        $this->db->from('applications');
        $this->db->join('vehicles', 'vehicles.vehicleID = applications.vehicleID');
        $this->db->like('vehicles.vehicleRegistrationNo', $query, 'after');  
        return $this->db->get()->result_array();
    }

    public function approve_application_model($id)
    {
        $data = array(
            'status' => 'Approve'
        );

        $this->db->where('applicationID', $id);
        return $this->db->update('applications', $data);
    }

    public function reject_application_model($id)
    {
        $data = array(
            'status' => 'Reject'
        );

        $this->db->where('applicationID', $id);
        return $this->db->update('applications', $data);
    }

    public function search_violation_model($query)
    {
        $this->db->select('*');
        $this->db->from('violations');
        $this->db->join('vehicles', 'vehicles.vehicleID = violations.vehicleID');
        $this->db->like('vehicles.vehicleRegistrationNo', $query, 'after');  
        return $this->db->get()->result_array();
    }

    public function pay_violation_model($id)
    {
        $data = array(
            'status' => 'Paid'
        );

        $this->db->where('violationID', $id);
        return $this->db->update('violations', $data);
    }

    public function remove_violation_model($id)
    {
        $this->db->where('violationID', $id);
        return $this->db->delete('violations');
    }
}
