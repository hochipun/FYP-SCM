<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

	public function index(){
		$this->load->library('session');
		$this->session->sess_destroy();
		$this->load->view('index.php');
		$this->load->helper('url');
	}

}