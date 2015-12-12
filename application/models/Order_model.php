<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class order_model extends CI_Model {
	public function __construct()
    {
        $this->load->database();
    }

    public function get_neworder($client=FALSE){
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

    public function count_neworder(){
        $sql="SELECT count(*) as result FROM `scm-fyp`.order where status=1";
        $query=$this->db->query($sql);
        $row=$query->row();
        $result=$row->result;
        return $result;
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
        $id=(int)$id;
        $sql="SELECT * FROM `scm-fyp`.order WHERE idorder=?";
        $query=$this->db->query($sql,$id);
        $row=$query->row();
        $result=array(
            'idorder'=>$row->idorder,
            'client'=>$row->client_id,
            'product'=>$row->product,
            'quantity'=>$row->quantity,
            'due'=>$row->deadline
        );
        return $result;
    }

    public function confirm($order,$user){
        $data=array(
            'operator'=>$user,
            'status'=>2,
        );
        $this->db->where('idorder', $order);
        $result=$this->db->update('order', $data);
        return $result;
    }

    public function sent($order,$user){
        $data=array(
            'operator'=>$user,
            'status'=>3,
        );
        $this->db->where('idorder',$order);
        $result=$this->db->update('order',$data);
        return $result;
    }

}

?>