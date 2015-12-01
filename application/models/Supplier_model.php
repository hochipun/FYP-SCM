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
					'idsupplier'  => $row->iduser,				
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


}