<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Slidebar extends CI_Model
{
  function __construct()
  {
    parent::__construct();

    $this->db = $this->load->database('default', true);

  }
  function slidebar_data()
  {
    $this->db->select('*');
    $this->db->from('web_slide_bar');
    $this->db->where('slide_status', 1);
    $this->db->order_by("slide_order", "asc");
    $result = $this->db->get();
    //echo $this->db->last_query();
    $data = $result->result_array();
    return $data;
  }
  function slidebar_edit($id)
  {

    $this->db->select('*');
    $this->db->from('web_slide_bar');
    $this->db->where('slide_id', $id);
    $result = $this->db->get();
    //echo $this->db->last_query();
    $data = $result->result_array();
    return $data;
  }

  function slidebar_save()
  {
    $id = $this->input->post('id');
    $toppic = $this->input->post('Topic');
    $Detail = $this->input->post('message');
    $link = $this->input->post('link');
    $Status = $this->input->post('Status');
    $Start = $this->input->post('Start');
    $End = $this->input->post('End');
    $Source = $this->input->post('Source');

    $data = array(
      'slide_topic' => $toppic,
      'slide_detail' => $Detail,
      'slide_link' => $link,
      'slide_status' => $Status,
      'slide_start_date' => $Start,
      'slide_End_date' => $End,
      'slide_order' => $Source,
    );
    $this->db->where('slide_id', $id);
    $this->db->update('web_slide_bar', $data);
    return 2;
    //return $data;
  }

}