<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier_model extends CI_Model {
	public function __construct()
    {
        $this->load->database();
    }

    public function supplierlog($forminfo){
    	$this->db->where('username', $forminfo['username']);
    	$query = $this->db->get('supplier');
        if ($query->num_rows() == 1){
        	$row = $query->row();
        	if ($row->password == $forminfo['pwd']){
        		$userinfo = array(
					'idsupplier'  => $row->idsupplier,
					'name' =>$row->name				
				);
				$this->session->set_userdata($userinfo);
    			return TRUE;
        	}else{
        		return FALSE;
        	}
		}else{
    		return FALSE;
    	}
    }

    public function get_supplierlist($page=FALSE)
	{
	    if ($page === FALSE)
	    {
			$supplierlist['list']=$this->getsupplierrowno();
	    	$query = $this->db->get('supplier', 10, 0);
	    	$supplierlist['supplierinfo']= $query->result_array();
	        return $supplierlist;
	    }else{
			$supplierlist['list']=$this->getsupplierrowno();
	    	$startingrow=($page-1)*10;
	    	$query =  $this->db->get('supplier', 10, $startingrow);
	    	$supplierlist['supplierinfo']= $query->result_array(); 
	        return $supplierlist;
	    }
	}

	private function getsupplierrowno(){
		$sql="SELECT count(idsupplier) as result FROM supplier";
		$count = $this->db->query($sql);
		$row = $count->row();
		return $row->result;
		
	}


}