<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class material_model extends CI_Model {
	public function __construct()
    {
        $this->load->database();
    }

    public function get_material(){
    	$query = $this->db->get('material');
        return $query->result_array();
    }

    public function get_singlematerial($id){

    }

    public function add_material(){
        
    }

}

?>