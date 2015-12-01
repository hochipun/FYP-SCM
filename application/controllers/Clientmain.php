<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientmain extends CI_Controller {

	public function __construct()
    {
    	//Load the model when construct
        parent::__construct();
        $this->load->model('order_model');
        $this->load->model('product_model');
        $this->load->model('client_model');
        $this->load->model('productrecord_model');
        $this->load->helper('url');
    }

	public function index(){
        $this->load->view('index.php');
    }
}