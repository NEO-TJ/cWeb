<?php

class User extends CI_Model{
    
    
    function __construct() {
        parent::__construct();
        
        $this->db =  $this->load->database('default',TRUE);
                
    }
    function user_data(){
        
        $this->db->select('*');
        $this->db->from('user_web_test');
        $this->db->where('login_status',2);
        $this->db->or_where('login_status',1);
        $result=  $this->db->get();
//        echo $this->db->last_query();
        $data=$result->result_array();
        return $data;
    }
      function user_delete(){
        
        $this->db->select('*');
        $this->db->from('user_web_test');
        $this->db->where('login_status',0);
        $result=  $this->db->get();
//        echo $this->db->last_query();
        $data=$result->result_array();
        return $data;
    }
      function  user_edit($id){
        
        $this->db->select('*');
        $this->db->from('user_web_test');
        $this->db->where('login_id',$id);
        $result=  $this->db->get();
//        echo $this->db->last_query();
        $data=$result->result_array();
        return $data;
    }
     function user_save(){
        $id=$this->input->post('id');      
        $name=$this->input->post('firstname');
        $email=$this->input->post('email');
        $status=$this->input->post('status');
        $Permid=$this->input->post('Permid');
       
                                 
                 $data = array(                      
                      'login_name' => $name,
                      'login_email' => $email,
                      'login_status'=> $status,
                      'login_permit' => $Permid
                     
                 ); 
                 $this->db->where('login_id',$id);
                 $this->db->update('user_web_test',$data);
                 return 2;
     
   
}

}