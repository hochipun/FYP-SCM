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

    public function clientviewproduct($page=FALSE){
        if($page === FALSE)
        {
            $productlist['list']=$this->getproductrow();
            $query = $this->db->get('product', 20, 0);
            $productlist['productinfo']= $query->result_array();
            return $productlist;
        }else{
            $productlist['list']=$this->getproductrow();
            $staringrow=($page-1)*20;
            $query = $this->db->get('product', 20, $staringrow);
            $productlist['productinfo']= $query->result_array();
            return $productlist;
        }
 
    }

    public function get_addproduct(){
        //use add productrecord to call this function

    }

    public function singleproductdetail($productid){
        $sql="SELECT * FROM product where idproduct=?";
        $query=$this->db->query($sql,$productid);
        $row=$query->row();
        $result=array(
            'idproduct'=>$row->idproduct,
            'name'=>$row->name,
            'specification'=>$row->specification,
            'comment'=>$row->comment,
            'uplimit'=>$row->uplimit,
            'downlimit'=>$row->downlimit,
            'current'=>$row->current_no,
            'unit'=>$row->unit
        );
        return $result;
    }

    private function getproductrow(){
        $sql="SELECT count(idproduct) as result FROM product";
        $count = $this->db->query($sql);
        $row = $count->row();
        return $row->result;

    }

}

?>