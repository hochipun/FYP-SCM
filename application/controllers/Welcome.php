<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$indexinfo['type']='staff';
		$indexinfo['welcomemsg']='This is the portal of SCM system for staff, please use your valid account to login. ';
		$this->load->view('index_header.php');
		$this->load->view('index.php',$indexinfo);
		$this->load->helper('url');
	}

	public function supplier(){
		$indexinfo['type']='supplier';
		$indexinfo['welcomemsg']='supplier XXXXXXXXXXXXXXXXXXXXXXXXXXXXX';
		$this->load->view('index_header.php');
		$this->load->view('index.php',$indexinfo);

	}

	public function client(){
		$indexinfo['type']='client';
		$indexinfo['welcomemsg']='client XXXXXXXXXXXXXXXXXXXXXXXXXXXXX';
		$this->load->view('index_header.php');
		$this->load->view('index.php',$indexinfo);

	}
}
