<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

	public function __construct()
    {
    	//Load the model when construct
        parent::__construct();
        $this->load->model('client_model');
        $this->load->helper('url');
    }

    public function add(){
    	$this->load->library('session');
		$this->session;
    	$newclientname=$this->input->post('newclientname');
		$newclientphone=$this->input->post('newclientphone');
		$newclientemail=$this->input->post('newclientemail');
		$newclientaddress=$this->input->post('newclientaddress');
		if($newclientname!=NULL && $newclientphone!=NULL && $newclientemail!=NULL && $newclientaddress!=NULL){
			$addresult = $this->client_model->add_client($newclientname,$newclientphone,$newclientemail,$newclientaddress);
			if($addresult==TRUE){
				//with success mess
				redirect('main/client');
			}else{
				//add fail msg
				redirect('main/client');
			}
		}		
    }
}