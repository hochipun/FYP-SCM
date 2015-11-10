<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('login.php');
		$this->load->helper('url');
	}

	public function log()
	{
		$this->load->helper('url');
		$this->load->database();
		$user=$this->input->post('user');
		$pwd=$this->input->post('pwd');
		if($user!=null && $pwd!=null){

		}
		$data['username'] = $user;
		$data['pwd']=$pwd;
		$sql = "SELECT * FROM users where username=? AND password=?";
		$query=$this->db->query($sql,array($user, $pwd));
		if($query!=null){
			$this->load->library('session');
			$this->session;
			foreach($query->result() as $row){
				$userinfo = array(
					'userid'  => $row->iduser,
					'username'     => $row->username,
					'userlevel' => $row->userlevel,
					'userfirst' => $row->firstname,
					'userlast' => $row->lastname,				
				);
				$this->session->set_userdata($userinfo);
			} 
			redirect('/main');
			//loading the view
			//$this->load->view('dashboard_header.php');
			//$this->load->view('dashboard.php');
		}else{

			$this->load->view('login.php');
		
		}


	}

	public function logfail(){
		
	}

}
