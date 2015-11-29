<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class product_model extends CI_Model {
	public function __construct()
    {
        $this->load->database();
        $this->load->model('productrecord_model');
    }

    public function get_product($page=FALSE){
        if($page === FALSE)
        {
            $productlist['list']=$this->getproductrow();
            $query = $this->db->get('product', 10, 0);
            $productlist['productinfo']= $query->result_array();
            return $productlist;
        }else{
            $productlist['list']=$this->getproductrow();
            $staringrow=($page-1)*10;
            $query = $this->db->get('product', 10, $staringrow);
            $productlist['productinfo']= $query->result_array();
            return $productlist;
        }
 
    }

    public function get_addproduct(){
        //use add productrecord to call this function

    }

    private function getproductrow(){
        $sql="SELECT count(idproduct) as result FROM product";
        $count = $this->db->query($sql);
        $row = $count->row();
        return $row->result;

    }

}

?>