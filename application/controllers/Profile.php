<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function index()
	{
		$this->load->database();
		$this->load->library('session');
		$userid = $_SESSION['userid'];
		$sql = 'SELECT * FROM users WHERE iduser=?';
		$query=$this->db->query($sql,$userid);
		foreach($query->result() as $row){
				$userinfo = array(
					'userid'  => $row->iduser,
					'username'     => $row->username,
					'userlevel' => $row->userlevel,
					'userfirst' => $row->firstname,
					'userlast' => $row->lastname,
					'phone' => $row->phone,
					'email'=> $row->email,				
				);
		}
		$this->load->view('profile.php');
		$this->load->helper('url');
	}
}
