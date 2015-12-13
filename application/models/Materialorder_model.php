<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class materialorder_model extends CI_Model {
	public function __construct()
    {
        $this->load->database();
    }

    public function get_materialorder($page=FALSE){
        if($page === FALSE)
        {
            $sql="SELECT idmaterialorder,material.name as mname,material, supplier.name as sname, supplier, status FROM `scm-fyp`.materialorder,material,supplier WHERE materialorder.material=material.idmaterial AND materialorder.supplier=supplier.idsupplier and status = 0";
            $query=$this->db->query($sql);
            $orderlist= $query->result_array();
            return $orderlist;
        }else{
            $productlist['list']=$this->getproductrow();
            $staringrow=($page-1)*10;
            $query = $this->db->get('product', 10, $staringrow);
            $productlist['productinfo']= $query->result_array();
            return $productlist;
        }
   }

    public function get_finishedmaterialorder(){
		$sql="SELECT idmaterialorder,material.name as mname,material, supplier.name as sname, supplier, status,amount FROM `scm-fyp`.materialorder,material,supplier WHERE materialorder.material=material.idmaterial AND materialorder.supplier=supplier.idsupplier and status = 1";
        $query=$this->db->query($sql);
        $orderlist= $query->result_array();
        return $orderlist;
   }

    public function mynewtask($supplier){
		$sql="SELECT * from materialorder,material where idmaterial=materialorder.material and supplier=? and status=0";
    	$query=$this->db->query($sql,$supplier);
    	$result=$query->result_array();
    	return $result;	
    }

    public function myfinishedorder($supplier){
    	$sql="SELECT * from materialorder,material where idmaterial=materialorder.material and supplier=? and status=1";
    	$query=$this->db->query($sql,$supplier);
    	$result=$query->result_array();
    	return $result;

    }

    public function countnew($supplier){
    	$sql="SELECT count(*) as result from materialorder where supplier=?";
    	$query=$this->db->query($sql,$supplier);
    	$result=$query->row();
    	return $result->result;

    }

    public function finishorder($order){
    	$data = array(
		    'status' => 1,
		);

		$this->db->where('idmaterialorder', $order);	
		$result=$this->db->update('materialorder', $data);
		return $result;
    }

    public function getmaterialinfo($order){
    	$sql="SELECT material,amount from materialorder where idmaterialorder=?";
    	$query=$this->db->query($sql,$order);
    	$result=$query->row();
    	return $result;
    }
}