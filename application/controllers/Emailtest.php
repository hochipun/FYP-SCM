<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Emailtest extends CI_Controller {

	public function index(){
		
		$this->load->library('email');
		date_default_timezone_set('Asia/Chongqing'); 

		$this->email->from('inexus.hero@gmail.com', 'admin');
		$this->email->to('353309155@qq.com');

		$this->email->subject('Email Test');
		$this->email->message('Testing the email class.');

		$this->email->send();
	}

}