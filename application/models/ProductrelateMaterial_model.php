<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class productrelateMaterial_model extends CI_Model {
	public function __construct()
    {
        $this->load->database();
        $this->load->model('productrecord_model');
        
    }

    public function queryproduct($productid){
        $sql="SELECT * FROM product_material,material where idmaterial = material AND product=?";
        $query = $this->db->query($sql,$productid);
        $result=$query->result_array();
        return $result;

    }

}

?>