<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productrecord extends CI_Controller {

	public function __construct()
    {
    	//Load the model when construct
        parent::__construct();
        $this->load->model('product_model');
        $this->load->model('material_model');
        $this->load->model('productrecord_model');
        $this->load->model('productrelateMaterial_model');
        $this->load->helper('url');
    }

    public function add()
    {
        $productrecorddata['productid']=$this->input->post('productname');
        $productrecorddata['amount']=$this->input->post('newamount');
        $productrecorddata['ut']=$this->input->post('unit');
        $productrecorddata['sp']=$this->input->post('specification');
        $productrecorddata['comment']=$this->input->post('commeent');
        $productrecorddata['produce']=$this->input->post('md');
        $productrecorddata['expire']=$this->input->post('ed');

        $getresult=$this->productrecord_model->add($productrecorddata);
        
    }

    public function checkrecord($productid=FALSE)
    {
        $product['detail']=$this->product_model->singleproductdetail($productid);
        $product['recorddetail']=$this->productrecord_model->singleproductrecord($productid);
        $product['type']='productrecord';
        $this->load->view('single_product_view.php',$product);   
        //加载一个视图 用 fancybox 看
    }

    public function relatematerial($productid=FALSE){
        $product['detail']=$this->product_model->singleproductdetail($productid);
        $product['materialrelate']=$this->productrelateMaterial_model->queryproduct($productid);
        $product['type']='relatematerial';
        $this->load->view('single_product_relate_view',$product);

    }
}

?>