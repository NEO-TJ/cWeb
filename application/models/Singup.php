<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class singup extends CI_Model{
    
    
    function __construct() {
        parent::__construct();
        
        $this->db =  $this->load->database('default',TRUE);
                
    }
    function Singupweb($user,$email,$password){
        
        $this->db->select('*');
        $this->db->from('user_web_test');
        $this->db->where('login_email',$email);
        $result=  $this->db->get();
//      echo $this->db->last_query();
        $data=$result->result_array();
        
        if($data){
            print_r($data);
            return 1;
       }
    else {
          
            
                 
                 $data = array(
                      
                      'login_email' => $email,
                      'login_name' => $user,
                      'login_pass'=>  md5($password),
                      'login_permit' => '1',
                      'login_status' => '1',
                 );              
                 $this->db->insert('user_web_test',$data);
                 return 2;
     
        }
       
        
//        return $data;
        
    }
    
    
}