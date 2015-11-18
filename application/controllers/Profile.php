<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	public function __construct()
    {
    	//Load the model when construct
        parent::__construct();
        $this->load->model('staff_model');
        $this->load->helper('url');
    }

	public function index()
	{
		
		$this->load->library('session');
		$userid = $_SESSION['userid'];
		$userdata['current']=$this->staff_model->get_staff($userid);
		$this->load->view('profile.php',$userdata);
		$this->load->helper('url');
	}
}
