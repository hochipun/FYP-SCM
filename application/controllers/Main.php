<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
    {
    	//Load the model when construct
        parent::__construct();
        $this->load->model('order_model');
        $this->load->model('material_model');
        $this->load->model('materialorder_model');
        $this->load->model('product_model');
        $this->load->model('staff_model');
        $this->load->model('client_model');
        $this->load->model('supplier_model');
        $this->load->model('productrecord_model');
        $this->load->model('materialrecord_model');
        $this->load->helper('url');
    }

	public function index(){
		$this->load->library('session');
		$this->session;
		if(isset($_SESSION['userid'])==FALSE){
			redirect('/login/warning');

		}
		$this->load->helper('url');
		$this->load->view('dashboard_header.php');
		$data['count'] = $this->order_model->count_neworder();
		$data['type']='overview';
		$this->load->view('dashboard_nav.php',$data);
		$dashboarddata['product']= $this->productrecord_model->get_latestp();
		$dashboarddata['material'] = $this->materialrecord_model->get_latestm();
		$this->load->view('dashboard.php',$dashboarddata);	
	}

	public function order($pageno=FALSE){
		$this->load->library('session');
		$this->session;
		if(isset($_SESSION['userid'])==FALSE){
			redirect('/login/warning');

		}
		$this->load->helper('url');
		$this->load->view('dashboard_header.php');
		$data['count'] = $this->order_model->count_neworder();
		$data['type']='order';
		$this->load->view('dashboard_nav.php',$data);
		$orderdata['order1'] = $this->order_model->get_neworder();
		$orderdata['order2'] = $this->order_model->get_confirmedorder();
		$orderdata['order3'] = $this->order_model->get_sentorder();
		$orderdata['order4'] = $this->order_model->get_oldorder();

		$this->load->view('ordermanage.php',$orderdata);
		$this->load->view('footer.php');
		
	}

	public function material($pageno=FALSE){
		$this->load->library('session');
		$this->session;
		if(isset($_SESSION['userid'])==FALSE){
			redirect('/login/warning');

		}
		$this->load->helper('url');
		$this->load->view('dashboard_header.php');
		$data['count'] = $this->order_model->count_neworder();
		$data['type']='material';
		$this->load->view('dashboard_nav.php',$data);
		$materialdata['material'] = $this->material_model->get_material();
		$this->load->view('materialmanagement.php',$materialdata);
		$this->load->view('footer.php');
	}

	public function materialorder($pageno=FALSE){
		$this->load->library('session');
		$this->session;
		if(isset($_SESSION['userid'])==FALSE){
			redirect('/login/warning');

		}
		$this->load->helper('url');
		$this->load->view('dashboard_header.php');
		$data['count'] = $this->order_model->count_neworder();
		$data['type']='materialorder';
		$this->load->view('dashboard_nav.php',$data);
		$orderdata['order1'] = $this->materialorder_model->get_materialorder();
		$orderdata['order2'] = $this->materialorder_model->get_finishedmaterialorder();
		$this->load->view('materialordermanage.php',$orderdata);
		$this->load->view('footer.php');
		



	}

	public function product($pageno=FALSE){
		$this->load->library('session');
		$this->session;
		if(isset($_SESSION['userid'])==FALSE){
			redirect('/login/warning');

		}
		$this->load->helper('url');
		$this->load->view('dashboard_header.php');
		$data['count'] = $this->order_model->count_neworder();
		$data['type']='product';
		$this->load->view('dashboard_nav.php',$data);
		if($pageno===FALSE){
			$productdata = $this->product_model->get_product();
		}else{
			$productdata = $this->product_model->get_product($pageno);

		}
		$page=$productdata['list'];
		$page=$page/10+1;
		$productdata['page']=$page;
		$productdata['index']=$pageno;
		$this->load->view('productmanage.php',$productdata);
		$this->load->view('footer.php');
	}

	public function staff($pageno=FALSE){
		$this->load->library('session');
		$this->session;
		if(isset($_SESSION['userid'])==FALSE){
			redirect('/login/warning');

		}
		$this->load->helper('url');
		$this->load->view('dashboard_header.php');
		$data['count'] = $this->order_model->count_neworder();

		$data['type']='staff';
		$this->load->view('dashboard_nav.php',$data);
		if($pageno===FALSE){
			$staffdata['staff'] = $this->staff_model->get_staff();
		}else{
			$staffdata['staff'] = $this->staff_model->get_staff($pageno);

		}
		$this->load->view('staffmanage.php',$staffdata);
		$this->load->view('footer.php');
	}

	public function client($pageno=FALSE){
		$this->load->library('session');
		$this->session;
		if(isset($_SESSION['userid'])==FALSE){
			redirect('/login/warning');

		}
		$this->load->helper('url');
		$this->load->view('dashboard_header.php');
		$data['count'] = $this->order_model->count_neworder();

		$data['type']='client';
		$this->load->view('dashboard_nav.php',$data);
		if($pageno===FALSE){
			$clientdata = $this->client_model->get_clientlist(1);
		}else{
			$clientdata=$this->client_model->get_clientlist($pageno);
		}
		$page=$clientdata['list'];
		$page=$page/10+1;
		$clientdata['page']=$page;
		$clientdata['index']=$pageno;
		$this->load->view('clientmanage.php',$clientdata);
		$this->load->view('footer.php');
	}

	public function supplier($pageno=FALSE){
		$this->load->library('session');
		$this->session;
		if(isset($_SESSION['userid'])==FALSE){
			redirect('/login/warning');

		}
		$this->load->helper('url');
		$this->load->view('dashboard_header.php');
		$data['count'] = $this->order_model->count_neworder();

		$data['type']='supplier';
		$this->load->view('dashboard_nav.php',$data);
		if($pageno===FALSE){
			$supplierdata = $this->supplier_model->get_supplierlist(1);
		}else{
			$supplierdata=$this->supplier_model->get_supplierlist($pageno);
		}
		$page=$supplierdata['list'];
		$page=$page/10+1;
		$supplierdata['page']=$page;
		$supplierdata['index']=$pageno;
		$this->load->view('suppliermanage.php',$supplierdata);
		$this->load->view('footer.php');

	}

	public function logout(){
		$this->load->library('session');
		$this->session;
		session_destroy();
		redirect('/');
	}



}