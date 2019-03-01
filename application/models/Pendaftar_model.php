<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftar_model extends CI_Model
{
  //load database
  public function __contruct(){
    parent::__construct();
    $this->load->database();
  }

  //listing berita
  public function listing()
  {
    $this->db->select('*');
    $this->db->from('pendaftar');
    $this->db->order_by('id_pendaftar');
    $query = $this->db->get();
    return $query->result();
  }

}
