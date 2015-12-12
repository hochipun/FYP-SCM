<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ordercontrol extends CI_Controller {

	public function __construct()
    {
    	//Load the model when construct
        parent::__construct();
        $this->load->model('order_model');
        $this->load->model('product_model');
        $this->load->model('client_model');
        $this->load->model('material_model');
        $this->load->model('productrecord_model');
        $this->load->model('productrelateMaterial_model');
        $this->load->model('material_model');
        $this->load->helper('url');
    }

	public function index(){
        $this->load->library('session');
        $this->session;
        if(isset($_SESSION['idclient'])==FALSE){
            redirect('/');

        }

    }

    public function checkmaterial($order){
        $orderinfo['detail']=$this->order_model->get_singleorder($order);
        $orderinfo['existedproduct']=$this->product_model->singleproductdetail($orderinfo['detail']['product']);
        if((int)$orderinfo['existedproduct']['current']>(int)$orderinfo['detail']['quantity']){
            $orderinfo['materialrelate']=$this->productrelateMaterial_model->queryproduct($orderinfo['detail']['product']);    
            $this->load->view('orderconfirm.php',$orderinfo);
        }else{
            //$orderquantity=(int)$orderquantity;
            $orderinfo['materialrelate']=$this->productrelateMaterial_model->queryproduct($orderinfo['detail']['product']);    
            $this->load->view('ordercheckmaterial.php',$orderinfo);
    
        }

        
    }

    public function confirmorder($order){
        $this->load->library('session');
        $this->session;
        if(isset($_SESSION['userid'])==FALSE){
            redirect('/');
        }
        $result=$this->order_model->confirm($order,$_SESSION['userid']);
        if($result==TRUE){
            $this->load->view('confirmordersuccess.php');
        }else{
            $this->load->view('index.php');
        }

    }

    public function preview_sendorder($order){
        $orderinfo['detail']=$this->order_model->get_singleorder($order);


    }

    public function sendproduct(){
        $orderinfo['detail']=$this->order_model->get_singleorder($order);
        
    }
}