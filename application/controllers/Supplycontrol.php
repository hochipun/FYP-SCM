<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplycontrol extends CI_Controller {

	public function __construct()
    {
    	//Load the model when construct
        parent::__construct();
        $this->load->model('product_model');
        $this->load->model('material_model');
        $this->load->model('productrecord_model');
        $this->load->model('productrelateMaterial_model');
        $this->load->model('materialtosupplier_model');
        $this->load->helper('url');
    }

    public function checksupplier($material)
    {
        $queryresult=$this->materialtosupplier_model->checkmaterialsupplier($material);
        $row = $queryresult->row(1);
        $supplyinfo['detail']=$queryresult->result_array();
        $supplyinfo['materialname']=$row->mname;
        $this->load->view('material_supplier.php',$supplyinfo);
    }

    public function sendrequest(){
        $this->load->helper('url');
        $this->load->database();
        $user=$this->input->post('quantity');
        $pwd=$this->input->post('pwd');
    }

}

?>