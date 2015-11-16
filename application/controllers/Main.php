<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
    {
    	//Load the model when construct
        parent::__construct();
        $this->load->model('staff_model');
        $this->load->model('material_model');
        $this->load->model('order_model');
        $this->load->model('product_model');

        $this->load->helper('url');
    }

	public function index(){
		$this->load->library('session');
		$this->session;
		$this->load->helper('url');
		$this->load->view('dashboard_header.php');
		$data['type']='overview';
		$this->load->view('dashboard_nav.php',$data);
		$this->load->view('dashboard.php');	
	}

	public function order(){
		$this->load->library('session');
		$this->session;
		$this->load->helper('url');
		$this->load->view('dashboard_header.php');
		$data['type']='order';
		$this->load->view('dashboard_nav.php',$data);
		$orderdata['order1'] = $this->order_model->get_activatedorder();
		$orderdata['order2'] = $this->order_model->get_oldorder();
		$this->load->view('ordermanage.php',$orderdata);
		$this->load->view('footer.php');
		
	}

	public function material(){
		$this->load->library('session');
		$this->session;
		$this->load->helper('url');
		$this->load->view('dashboard_header.php');
		$data['type']='material';
		$this->load->view('dashboard_nav.php',$data);
		$materialdata['material'] = $this->material_model->get_material();
		$this->load->view('materialmanagement.php',$materialdata);
		$this->load->view('footer.php');
	}

	public function product(){
		$this->load->library('session');
		$this->session;
		$this->load->helper('url');
		$this->load->view('dashboard_header.php');
		$data['type']='product';
		$this->load->view('dashboard_nav.php',$data);
		$productdata['product'] = $this->product_model->get_product();
		$this->load->view('productmanage.php',$productdata);
		$this->load->view('footer.php');
	}

	public function staff(){
		$this->load->library('session');
		$this->session;
		$this->load->helper('url');
		$this->load->view('dashboard_header.php');
		$data['type']='staff';
		$this->load->view('dashboard_nav.php',$data);
		$staffdata['staff'] = $this->staff_model->get_staff();
		$this->load->view('staffmanage.php',$staffdata);
		$this->load->view('footer.php');
	}

}