<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client_model extends CI_Model {
	public function __construct()
    {
        $this->load->database();
    }

    public function get_client($username = FALSE)
	{
	    if ($username === FALSE)
	    {
	        $query = $this->db->get('client');
	        return $query->result_array();
	    }

	    $query = $this->db->get_where('idclient', array('idclient' => $clientid));
	    return $query->row_array();
	}

	public function add_client(){

	}
}
?>