<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class order_model extends CI_Model {
	public function __construct()
    {
        $this->load->database();
    }

    public function get_orders(){
    	$query = $this->db->get('users');
        return $query->result_array();
    }

    public function get_singleorder($id){

    }

}

?>