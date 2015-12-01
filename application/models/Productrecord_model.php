<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productrecord_model extends CI_Model {
	public function __construct()
    {
        $this->load->database();
    }
    
    public function get_latestp(){
        $sql="SELECT * FROM `scm-fyp`.product_record, `scm-fyp`.users
            where  operator=iduser LIMIT 5";
    	$query = $this->db->query($sql);
       	return $query->result_array();
    }

    public function addproduct($recorddata){
    	return $recorddata['comment'];
    }

    public function getquantity($productid){
        $sql="SELECT SUM(amount) as quantity FROM product_record where productid = ?";
        $query=$this->db->query($sql, $productid);
        $row=$query->row();
        return $row->quantity;
    }
}
?>