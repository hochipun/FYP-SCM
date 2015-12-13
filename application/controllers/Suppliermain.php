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
        $this->load->model('materialtosupplier_model');
        $this->load->model('materialorder_model');
        $this->load->helper('url');
    }

	public function index(){
        $this->load->library('session');
        $this->session;
        if(isset($_SESSION['idsupplier'])==FALSE){
            redirect('/');

        }
        $this->load->helper('url');
        $this->load->view('dashboard_header_supplier.php');
        $data['type']='profile';
        $this->load->view('dashboard_nav_supplier.php',$data);
        $this->load->view('dashboard_supplier.php');

    }

    public function supplyitem(){
        $this->load->library('session');
        $this->session;
        if(isset($_SESSION['idsupplier'])==FALSE){
            redirect('/');

        }
        $this->load->helper('url');
        $this->load->view('dashboard_header_supplier.php');
        $data['type']='supplyitem';
        $this->load->view('dashboard_nav_supplier.php',$data);
        $data['myitem']=$this->materialtosupplier_model->querymysupply($_SESSION['idsupplier']);
        $data['availablelist']=$this->material_model->get_material();
        $this->load->view('mysupplyitemmanage.php',$data);
        $this->load->view('footer.php');
    
    }

    public function supplyrequest(){
        $this->load->library('session');
        $this->session;
        if(isset($_SESSION['idsupplier'])==FALSE){
            redirect('/');

        }
        $this->load->helper('url');
        $this->load->view('dashboard_header_supplier.php');
        $data['type']='supplyrequest';
        $this->materialorder_model->countnew($_SESSION['idsupplier']);
        $this->load->view('dashboard_nav_supplier.php',$data);
        $data['newtask']=$this->materialorder_model->mynewtask($_SESSION['idsupplier']);
        $data['oldorder']=$this->materialorder_model->myfinishedorder($_SESSION['idsupplier']);
        $this->load->view('supplier_supplyorder.php',$data);
        $this->load->view('footer.php');

    }

}