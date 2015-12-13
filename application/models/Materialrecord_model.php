<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materialrecord_model extends CI_Model {
	public function __construct()
    {
        $this->load->database();
    }
    
    public function get_latestm(){
    	$query = $this->db->get('material_record');
       	return $query->result_array();
    }

    public function addmaterial($recorddata){
    	return $recorddata['comment'];
    }

    public function importmaterial($material,$amount,$operator){
        $data=array(
            'material_id'=>$material,
            'amount'=>$amount,
            'operator'=>$operator,

        );
        $result=$this->db->insert('material_record', $data);
        return $result;
    }
}
?>