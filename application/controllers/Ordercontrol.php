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
        $orderdetail=$this->order_model->get_singleorder($order);
        $result=$this->order_model->confirm($order,$_SESSION['userid']);
        $quantity=$orderdetail['quantity'];
        $product=$orderdetail['product'];
        //lockdown
        $this->product_model->lockamount($product,$quantity);
        if($result==TRUE){
            $this->load->view('confirmordersuccess.php');
        }else{
            $this->load->view('index.php');
        }

    }

    public function preview_sendorder($order){
        $this->load->library('session');
        $this->session;
        $orderinfo['detail']=$this->order_model->get_singleorder($order);
        $this->load->view('previewsendorder.php',$orderinfo);
    }


    public function sendproduct($order){
        $this->load->library('session');
        $this->load->helper('date');
        date_default_timezone_set('Asia/Chongqing');
        $currentdate=date('Y-m-d');
        $this->session;
        $orderinfo=$this->order_model->get_singleorder($order);
        $productid=$orderinfo['product'];
        $amount=$orderinfo['quantity'];
        $resulto=$this->order_model->sent($order,$_SESSION['userid']);
        $resultp=$this->product_model->cutdowncurrent($productid,$amount);
        $resultr=$this->productrecord_model->addcutrecord($productid,$amount,$currentdate,$_SESSION['userid']);
        if($resulto==TRUE&&$resultp==TRUE&&$resultr==TRUE){
            $this->load->view('confirmordersuccess.php');
        }else{
            $this->load->view('index.php');
        }

    }
}