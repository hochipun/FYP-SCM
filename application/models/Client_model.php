<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client_model extends CI_Model {
	public function __construct()
    {
        $this->load->database();
    }

    public function get_clientlist($page=FALSE)
	{
	    if ($page === FALSE)
	    {
			$clientlist['list']=$this->getclientrowno();
	    	$query = $this->db->get('client', 10, 0);
	    	$clientlist['clientinfo']= $query->result_array();
	        return $clientlist;
	    }else{
			$clientlist['list']=$this->getclientrowno();
	    	$startingrow=($page-1)*10;
	    	$query =  $this->db->get('client', 10, $startingrow);
	    	$clientlist['clientinfo']= $query->result_array(); 
	        return $clientlist;
	    }
	}

	private function getclientrowno(){
		$sql="SELECT count(idclient) as result FROM client";
		$count = $this->db->query($sql);
		$row = $count->row();
		return $row->result;
		
	}

	public function clientlog($forminfo){
		$this->db->where('username', $forminfo['username']);
    	$query = $this->db->get('client');
        if ($query->num_rows() == 1){
        	$row = $query->row();
        	if ($row->password == $forminfo['pwd']){
        		$userinfo = array(
					'idclient'  => $row->iduser,				
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
	

	public function add_client($name,$phone,$email,$address){
		//INSERT Start there

	}
}
?>