<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class order_model extends CI_Model {
	public function __construct()
    {
        $this->load->database();
    }

    public function get_activatedorder($client=FALSE){
        $this->db->from('order');
        $this->db->where('status', 1);
        //if($client===FALSE){
        //    $this->db->where('client', $client);            
        //}
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_oldorder($client=FALSE){
        $this->db->from('order');
        $this->db->where('status', 4);
        //if($client===FALSE){
        //    $this->db->where('client', $client);            
        //}
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_confirmedorder(){
        $this->db->from('order');
        $this->db->where('status', 2);
        //if($client===FALSE){
        //    $this->db->where('client', $client);            
        //}
        $query = $this->db->get();
        return $query->result_array();   
    }

    public function get_sentorder(){
        $this->db->from('order');
        $this->db->where('status', 3);
        //if($client===FALSE){
        //    $this->db->where('client', $client);            
        //}
        $query = $this->db->get();
        return $query->result_array();
    }

    public function addorderbyclient($product,$quantity,$due,$client){
        $this->load->helper('date');
        date_default_timezone_set();
        $currentdate=date('Y-m-d');        
        $data = array(
            'client_id' => $client,
            'status'=>1,
            'product' => $product,
            'orderdate'=>$currentdate,
            'deadline' => $due,
            'quantity' => $quantity
        );
        $this->db->insert('order', $data);

    }



    public function get_singleorder($id){

    }

}

?>