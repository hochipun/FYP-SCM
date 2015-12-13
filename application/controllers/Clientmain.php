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
        $this->load->library('session');
        $this->session;
        if(isset($_SESSION['idclient'])==FALSE){
            redirect('/');

        }
        $this->load->helper('url');
        $this->load->view('dashboard_header_client.php');
        $data['type']='profile';
        $data['count'] = $this->order_model->count_neworder($_SESSION['idclient']);

        $this->load->view('dashboard_nav_client.php',$data);
        $profile = $this->client_model->profile($_SESSION['idclient']);
        $this->load->view('dashboard_client.php',$profile);
        

    }

    public function updateprofile(){

    }

    public function myorder(){
        $this->load->library('session');
        $this->session;
        if(isset($_SESSION['idclient'])==FALSE){
            redirect('/');

        }
        $this->load->helper('url');
        $this->load->view('dashboard_header_client.php');
        $data['type']='myorder';
        $data['count'] = $this->order_model->count_neworder($_SESSION['idclient']);
        $this->load->view('dashboard_nav_client.php',$data);
        $orderdata['order1'] = $this->order_model->get_neworder();
        $orderdata['order2'] = $this->order_model->get_confirmedorder();
        $orderdata['order3'] = $this->order_model->get_sentorder();
        $orderdata['order4'] = $this->order_model->get_oldorder();

        $this->load->view('client_ordermanage.php',$orderdata);
        $this->load->view('footer.php');


    }

    public function neworder($page=FALSE){
        $this->load->library('session');
        $this->session;
        if(isset($_SESSION['idclient'])==FALSE){
            redirect('/');

        }
        $this->load->helper('url');
        $this->load->view('dashboard_header_client.php');
        $data['type']='neworder';
        $data['count'] = $this->order_model->count_neworder($_SESSION['idclient']);

        $this->load->view('dashboard_nav_client.php',$data);
        $product=$this->product_model->clientviewproduct($page);
        $pagetotal=$product['list']/20;
        $product['page']=$pagetotal;
        $this->load->view('client_neworder.php',$product);
        $this->load->view('footer.php');
        

    }

    public function addorder($productid){
        $this->load->library('session');
        $this->session;
        if(isset($_SESSION['idclient'])==FALSE){
            redirect('/');

        }
        $this->load->helper('url');
        $product['detail']=$this->product_model->singleproductdetail($productid);
        $this->load->view('addorderdetail.php',$product);

    }

    public function confirmorder($productid){
        $this->load->library('session');
        $this->session;
        if(isset($_SESSION['idclient'])==FALSE){
            redirect('/');

        }
        $this->load->helper('url');
        $orderquantity=$this->input->post('orderquantity');
        $due=$this->input->post('due');
        $result=$this->order_model->addorderbyclient($productid,$orderquantity,$due,$_SESSION['idclient']);
        if($result==TRUE){
            $this->load->view('confirmordersuccess.php');
        }


    }
}