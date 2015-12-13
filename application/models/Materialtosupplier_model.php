<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class materialtosupplier_model extends CI_Model {
	public function __construct()
    {
        $this->load->database();
    }

    public function checkmaterialsupplier($material){
    	$sql="SELECT material.name as mname, supplier.name as sname, idmaterial, idsupplier FROM supply_match,`scm-fyp`.supplier,material WHERE idmaterial=material AND supplier=idsupplier AND material = ?";
    	$query=$this->db->query($sql,$material);
    	return $query;
    }

    public function addrequest($supplier,$material,$amount){
    	$data=array(
			'supplier'=>$supplier,
			'material'=>$material,
			'amount'=>$amount,
			'status'=>0
		);
		$result=$this->db->insert('materialorder', $data);
		return $result;
    }

    public function querymysupply($supplier){
        $sql="SELECT material.name as mname,supplier.name as sname, idmaterial,idsupplier,specification FROM `scm-fyp`.supply_match,supplier,material where  material=idmaterial and supply_match.supplier=supplier.idsupplier and supply_match.supplier=?";
        $query=$this->db->query($sql,$supplier);
        $result=$query->result_array();
        return $result;
    }

}