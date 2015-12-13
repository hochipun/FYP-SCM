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

    public function add_materialamount($material,$amount){
        $this->db->where('idmaterial', $material);
        $query=$this->db->get('material');
        $result=$query->row();
        $current=$result->current_no;
        $data['current_no']=(int)$current+(int)$amount;
        $this->db->where('idmaterial', $material);
        $import=$this->db->update('material',$data);
        return $import;
        
    }



}

?>