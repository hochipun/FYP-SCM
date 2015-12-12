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

}