<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('staff_model');
	}
	public function index()
	{
		$warningon['tf']=FALSE;
		$warningon['pwderr']=FALSE;
		$this->load->view('login.php',$warningon);
		$this->load->helper('url');
	}

	public function warning(){
		$warningon['tf']=TRUE;
		$warningon['pwderr']=FALSE;
		$this->load->view('login.php',$warningon);
		$this->load->helper('url');
	}

	public function wrong(){
		$warningon['tf']=FALSE;
		$warningon['pwderr']=TRUE;
		$this->load->view('login.php',$warningon);
		$this->load->helper('url');	
	}

	public function log()
	{
		$this->load->helper('url');
		$this->load->database();
		$user=$this->input->post('user');
		$pwd=$this->input->post('pwd');
		if($user==null && $pwd==null){
			redirect('/login/wrong');
		}
		$data['username'] = $user;
		$data['pwd']=$pwd;
		$result=$this->staff_model->logvalidateion($data);
		if($result==TRUE){
			redirect('main');
		}else if($result==FALSE){
			redirect('/login/wrong');
		}


	}

	public function logfail(){
		
	}

}
