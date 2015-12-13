<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplycontrol extends CI_Controller {

	public function __construct()
    {
    	//Load the model when construct
        parent::__construct();
        $this->load->model('product_model');
        $this->load->model('material_model');
        $this->load->model('materialorder_model');
        $this->load->model('materialrecord_model');
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

    public function sendrequest($supplier){
        $this->load->helper('url');
        $material=$this->input->post('material');
        $amount=$this->input->post('quantity');
        $result=$this->materialtosupplier_model->addrequest($supplier,$material,$amount);
        if($result==TRUE){
            $this->load->view('confirmordersuccess.php');
        }
    }

    public function sendsupply($materialorder){
        $this->load->library('session');
        $this->session;
        $this->load->helper('url');
        //update the materialorder state
        $result1=$this->materialorder_model->finishorder($materialorder);
        //add materialrecord
        $materialinfo=$this->materialorder_model->getmaterialinfo($materialorder);

        $result2=$this->materialrecord_model->importmaterial($materialinfo->material,$materialinfo->amount,$_SESSION['idsupplier']);
        //update material current_no
        $result3=$this->material_model->add_materialamount($materialinfo->material,$materialinfo->amount);
        if($result1==TRUE&&$result2==TRUE&&$result3==TRUE){
            redirect('suppliermain/supplyrequest');
        }
    }
                    
}

?>