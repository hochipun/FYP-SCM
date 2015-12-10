<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('staff_model');
		$this->load->model('client_model');
		$this->load->model('supplier_model');
	}
	public function index($type=FALSE)
	{
		if($type===FALSE){
			$logintype['type']='staff';
		}else if($type=='supplier'){
			$logintype['type']='supplier';
		}else if($type=='client'){
			$logintype['type']='client';
		}else if($type=='staff'){
			$logintype['type']='staff';
		}
		$logintype['tf']=FALSE;
		$logintype['pwderr']=FALSE;
		$this->load->view('login.php',$logintype);
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

	public function log($type=FALSE)
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
		if($type=='staff'){
			$result=$this->staff_model->logvalidateion($data);
			if($result==TRUE){
				redirect('main');
			}else if($result==FALSE){
				redirect('/');
			}
		}else if($type=='supplier'){
			$result=$this->supplier_model->supplierlog($data);
			if($result==TRUE){
				redirect('suppliermain');
			}else if($result==FALSE){
				redirect('/');
			}

		}else if($type=='client'){
			$result=$this->client_model->clientlog($data);
			if($result==TRUE){
				redirect('clientmain');
			}else if($result==FALSE){
				redirect('/');
			}
		}


	}


	public function logfail(){
		
	}

}
