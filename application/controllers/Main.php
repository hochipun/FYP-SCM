<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('staff_model');
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
		$this->load->view('orders.php');
	}

	public function material(){
		$this->load->library('session');
		$this->session;
		$this->load->helper('url');
		$this->load->view('dashboard_header.php');
		$data['type']='material';
		$this->load->view('dashboard_nav.php',$data);
		$this->load->view('material.php');
	}

	public function product(){
		$this->load->library('session');
		$this->session;
		$this->load->helper('url');
		$this->load->view('dashboard_header.php');
		$data['type']='product';
		$this->load->view('dashboard_nav.php',$data);
		$this->load->view('product.php');
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