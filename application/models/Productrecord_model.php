<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productrecord_model extends CI_Model {
	public function __construct()
    {
        $this->load->database();
    }
    
    public function get_latestp(){
    	$query = $this->db->get('product_record');
       	return $query->result_array();
    }

    public function addproduct($recorddata){
    	return $recorddata['comment'];
    }
}
?>