<?php

class News extends CI_Model{
    
    
    function __construct() {
        parent::__construct();
        
        $this->db =  $this->load->database('default',TRUE);
                
    }
    function news_data(){
        
        $this->db->select('*');
        $this->db->from('web_news');
        $this->db->where('news_status',1);
        $this->db->where('news_type',1);
        $this->db->order_by("news_create_date","desc");
        $result=  $this->db->get();
//        echo $this->db->last_query();
        $data=$result->result_array();
        return $data;
    }
    
        function Press_data(){
        
        $this->db->select('*');
        $this->db->from('web_news');
        $this->db->where('news_status',1);
        $this->db->where('news_type',2);
        $this->db->order_by("news_create_date","desc");
        $result=  $this->db->get();
    //  echo $this->db->last_query();
    
        $data=$result->result_array();
        return $data;
        
    }
    
     function news_data_delete(){
        
        $this->db->select('*');
        $this->db->from('web_news');
        $this->db->where('news_status',2);
        $this->db->where('news_type',1);
        $this->db->order_by("news_create_date","desc");
        $result=  $this->db->get();
//        echo $this->db->last_query();
        $data=$result->result_array();
        return $data;
    }
        function Press_data_delete(){
        
        $this->db->select('*');
        $this->db->from('web_news');
        $this->db->where('news_status',2);
        $this->db->where('news_type',2);
        $this->db->order_by("news_create_date","desc");
        $result=  $this->db->get();
//        echo $this->db->last_query();
        $data=$result->result_array();
        return $data;
    }
      function news_add($Topic, $message,$fullmessage,$Status){
        
        $this->db->select('*');
        $this->db->from('web_news');
       
        $result=  $this->db->get();
//      echo $this->db->last_query();
        $data=$result->result_array();

                 
        $data = array(
                      'news_type' => '1',
                      'news_topic' => $Topic,
                      'news_deatail' => $message,
                      'news_full_deatail'=> $fullmessage,
                      'news_create_date'=>date('Y-m-d'),
                      'news_link' =>'The_news_deatail',
                      'news_status' =>$Status,
                 );    
              
                 $this->db->insert('web_news',$data);
                 return 2;
     
        }
         function Press_add($Topic, $message,$fullmessage,$Status){
        
        $this->db->select('*');
        $this->db->from('web_news');
       
        $result=  $this->db->get();
//      echo $this->db->last_query();
        $data=$result->result_array();

                 
        $data = array(
                      'news_type' => '2',
                      'news_topic' => $Topic,
                      'news_deatail' => $message,
                      'news_full_deatail'=> $fullmessage,
                      'news_create_date'=>date('Y-m-d'),
                      'news_link' =>'The_Press_deatail',
                      'news_status' =>$Status,
                 );    
              
                 $this->db->insert('web_news',$data);
                 return 2;
     
        }
       
         function news_show_edit($id){
        
        $this->db->select('*');
        $this->db->from('web_news');
        $this->db->where('news_id',$id);
        $result=  $this->db->get();
//        echo $this->db->last_query();
        $data=$result->result_array();
        return $data;
    }
     
    
    function news_save(){
        $id = $this->input->post('id');
        $Topic = $this->input->post('Topic');
        $message = $this->input->post('message');
        $fullmessage=$this->input->post('fullmessage');
        $Status = $this->input->post('Status');
       
                                 
                 $data = array( 
               
                      'news_topic' => $Topic,
                      'news_deatail' => $message,
                      'news_full_deatail'=> $fullmessage,
                      'news_create_date'=>date('Y-m-d'),
                      'news_status' =>$Status,
                     
                 ); 
                 $this->db->where('news_id',$id);
                 $this->db->update('web_news',$data);
              return 2;
     
   
}


      function news_show_detail($id){
        
        $this->db->select('*');
        $this->db->from('web_news');
        $this->db->where('news_id',$id);
        $result=  $this->db->get();
//        echo $this->db->last_query();
        $data=$result->result_array();
        return $data;
    }
    
}

