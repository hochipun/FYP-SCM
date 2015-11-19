<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff_model extends CI_Model {
	public function __construct()
    {
        $this->load->database();
		$this->load->library('session');
    }

    public function get_staff($userid = FALSE)
	{
	    if ($userid === FALSE)
	    {
	        $query = $this->db->get('users');
	        return $query->result_array();
	    }

	    $query = $this->db->get_where('users', array('iduser' => $userid));
	    return $query->row_array();
	}

	public function logvalidateion($forminfo){
		$this->db->where('username', $forminfo['username']);
        $query = $this->db->get('users');
        if ($query->num_rows() == 1){
        	$row = $query->row();
        	if ($row->password == $forminfo['pwd']){
        		$userinfo = array(
					'userid'  => $row->iduser,
					'username'     => $row->username,
					'userlevel' => $row->userlevel,
					'userfirst' => $row->firstname,
					'userlast' => $row->lastname,				
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

	public function add_staff(){

	}
}
?>