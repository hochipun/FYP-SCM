<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suppliermain extends CI_Controller {

	public function __construct()
    {
    	//Load the model when construct
        parent::__construct();
        $this->load->model('material_model');
        $this->load->model('materialrecord_model');
        $this->load->model('supplier_model');
        $this->load->helper('url');
    }

	public function index(){
        $this->load->view('index.php');

    }
}