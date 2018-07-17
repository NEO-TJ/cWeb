<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class login extends CI_Model{
    
    
    function __construct() {
        parent::__construct();
        
        $this->db =  $this->load->database('default',TRUE);
                
    }
    function Loginweb($id,$password){
        
        $this->db->select('*');
        $this->db->from('user_web_test');
        $this->db->where('login_email',$id);
        $this->db->where('login_pass',  md5($password));
        $this->db->where('(login_status =1 or login_status = 2)');
      
        
        $result=  $this->db->get();
        echo $this->db->last_query();
        $data=$result->result_array();
        return $data;
    }
    
    function log($id,$password){
        
         $this->db->select('*');
        $this->db->from('user_web_test');
        $this->db->where('login_email',$id);
        $this->db->where('login_pass',$password);
        $this->db->where('(login_status =1 or login_status = 2)');
      
        
        $result=  $this->db->get();
        echo $this->db->last_query();
        $data=$result->result_array();
        return $data;
    }
    
}