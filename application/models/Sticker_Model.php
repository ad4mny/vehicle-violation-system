<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sticker_Model extends CI_Model
{
    public function apply_sticker_model($type, $brand, $reg, $colour, $tax_date, $licence_date, $licence_no, $licence_class, $grant)
    {
        $data = array(
            'userID' => $_SESSION['userid'],
            'vehicleRegistrationNo' => $reg,
            'vehicleType' => $type,
            'vehicleBrand' => $brand,
            'vehicleColour' => $colour
        );

        if ($this->db->insert('vehicles', $data)) {

            $data = array(
                'vehicleID' => $this->db->insert_id(),
                'roadTaxDate' => $tax_date,
                'licenceDate' => $licence_date,
                'licenceNo' => $licence_no,
                'licenceClass' => $licence_class,
                'vehicleGrant' => $grant,
                'date' => date('H:i:s Y-m-d'),
                'status' => 'Pending'
            );

            return $this->db->insert('applications', $data);
        } else {
            return false;
        }
    }

    public function delete_sticker_model()
    {
        return 0;
    }

    public function update_sticker_model($vehicle_id, $type, $brand, $reg, $colour, $tax_date, $licence_date, $licence_no, $licence_class, $grant)
    {
        $data = array(
            'userID' => $_SESSION['userid'],
            'vehicleRegistrationNo' => $reg,
            'vehicleType' => $type,
            'vehicleBrand' => $brand,
            'vehicleColour' => $colour
        );

        $this->db->where('vehicleID', $vehicle_id);
        if ($this->db->update('vehicles', $data)) {

            $data = array(
                'roadTaxDate' => $tax_date,
                'licenceDate' => $licence_date,
                'licenceNo' => $licence_no,
                'licenceClass' => $licence_class,
                'vehicleGrant' => $grant,
                'date' => date('H:i:s Y-m-d'),
                'status' => 'Pending'
            );

            $this->db->where('vehicleID', $vehicle_id);
            return $this->db->update('applications', $data);
        } else {
            return false;
        }
    }

    public function view_sticker_model($id)
    {
        $this->db->select('*');
        $this->db->from('vehicles');
        $this->db->join('applications', 'applications.vehicleID = vehicles.vehicleID');
        $this->db->where('userID', $_SESSION['userid']);
        $this->db->where('vehicles.vehicleID', $id);
        return $this->db->get()->row_array();
    }

    public function view_sticker_list_model()
    {
        $this->db->select('*');
        $this->db->from('vehicles');
        $this->db->join('applications', 'applications.vehicleID = vehicles.vehicleID');
        $this->db->where('userID', $_SESSION['userid']);
        return $this->db->get()->result_array();
    }

    public function fetch_profile_model()
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('userID', $_SESSION['userid']);
        return $this->db->get()->row_array();
    }
}
