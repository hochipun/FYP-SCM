<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class order_model extends CI_Model {
	public function __construct()
    {
        $this->load->database();
    }

    public function get_neworder($client=FALSE){
        $query=NULL;
        if($client!=NULL){
            $sql="SELECT * FROM `scm-fyp`.order,product WHERE order.product=product.idproduct and status = 1 and client_id=?";
            $query=$this->db->query($sql,$client);
        }else{
            $sql="SELECT * FROM `scm-fyp`.order,product WHERE order.product=product.idproduct and status = 1";
            $query=$this->db->query($sql);

        }

        return $query->result_array();
    }

    public function get_oldorder($client=FALSE){
        $query=NULL;
        if($client!=NULL){
            $sql="SELECT * FROM `scm-fyp`.order,product WHERE order.product=product.idproduct and status = 4 and client_id=?";
            $query=$this->db->query($sql,$client);
        }else{
            $sql="SELECT * FROM `scm-fyp`.order,product WHERE order.product=product.idproduct and status = 4";
            $query=$this->db->query($sql);

        }
        //if($client===FALSE){
        //    $this->db->where('client', $client);            
        //}
        return $query->result_array();
    }

    public function get_confirmedorder($client=FALSE){
        $query=NULL;
        if($client!=NULL){
            $sql="SELECT * FROM `scm-fyp`.order,product WHERE order.product=product.idproduct and status = 2 and client_id=?";
            $query=$this->db->query($sql,$client);
        }else{
            $sql="SELECT * FROM `scm-fyp`.order,product WHERE order.product=product.idproduct and status = 2";
            $query=$this->db->query($sql);

        }

        return $query->result_array();   
    }

    public function get_sentorder($client=FALSE){
        $query=NULL;
        if($client!=NULL){
            $sql="SELECT * FROM `scm-fyp`.order,product WHERE order.product=product.idproduct and status = 3 and client_id=?";
            $query=$this->db->query($sql,$client);
        }else{
            $sql="SELECT * FROM `scm-fyp`.order,product WHERE order.product=product.idproduct and status = 3";
            $query=$this->db->query($sql);

        }
        return $query->result_array();
    }

    public function count_neworder($client=FALSE){
        if($client!=NULL){
            $sql="SELECT count(*) as result FROM `scm-fyp`.order where status=1 or status=2 or status=3 and client_id=?";
            $query=$this->db->query($sql,$client);    
        }else{
            $sql="SELECT count(*) as result FROM `scm-fyp`.order where status=1";
            $query=$this->db->query($sql);    
        }       
        $row=$query->row();
        $result=$row->result;
        return $result;
    }

    public function addorderbyclient($product,$quantity,$due,$client){
        $this->load->helper('date');
        date_default_timezone_set('Asia/Chongqing');
        $currentdate=date('Y-m-d');        
        $data = array(
            'client_id' => $client,
            'status'=>1,
            'product' => $product,
            'orderdate'=>$currentdate,
            'deadline' => $due,
            'quantity' => $quantity
        );
        $result=$this->db->insert('order', $data);
        return $result;

    }



    public function get_singleorder($id){
        $id=(int)$id;
        $sql="SELECT * FROM `scm-fyp`.order,product WHERE order.product=product.idproduct and idorder=?";
        $query=$this->db->query($sql,$id);
        $row=$query->row();
        $result=array(
            'name'=>$row->name,
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