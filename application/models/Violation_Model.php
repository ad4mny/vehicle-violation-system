<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Violation_Model extends CI_Model
{
    public function view_violation_list_model()
    {
        $this->db->select('*');
        $this->db->from('violations');
        $this->db->join('vehicles', 'violations.vehicleID = vehicles.vehicleID');
        $this->db->where('violations.userID', $_SESSION['userid']);
        return $this->db->get()->result_array();
    }
}
