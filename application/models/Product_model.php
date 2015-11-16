<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class product_model extends CI_Model {
	public function __construct()
    {
        $this->load->database();
    }

    public function get_product(){
    	$query = $this->db->get('product');
        return $query->result_array();
    }

    public function get_singleorder($id){

    }

}

?>