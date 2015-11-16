<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class order_model extends CI_Model {
	public function __construct()
    {
        $this->load->database();
    }

    public function get_activatedorder(){
        $this->db->from('order');
        $this->db->where('status', 1);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_oldorder(){
        $this->db->from('order');
        $this->db->where('status', 2);
        $query = $this->db->get();
        return $query->result_array();
    }    

    public function get_singleorder($id){

    }

}

?>