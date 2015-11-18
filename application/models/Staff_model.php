<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff_model extends CI_Model {
	public function __construct()
    {
        $this->load->database();
    }

    public function get_staff($userid = FALSE)
	{
	    if ($userid === FALSE)
	    {
	        $query = $this->db->get('users');
	        return $query->result_array();
	    }

	    $query = $this->db->get_where('users', array('iduser' => $userid));
	    return $query->row_array();
	}

	public function add_staff(){

	}
}
?>