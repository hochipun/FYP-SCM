<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff_model extends CI_Model {
	public function __construct()
    {
        $this->load->database();
    }

    public function get_staff($username = FALSE)
	{
	    if ($username === FALSE)
	    {
	        $query = $this->db->get('users');
	        return $query->result_array();
	    }

	    $query = $this->db->get_where('username', array('username' => $username));
	    return $query->row_array();
	}

	public function add_staff(){

	}
}
?>