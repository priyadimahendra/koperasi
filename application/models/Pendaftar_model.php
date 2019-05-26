<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftar_model extends CI_Model
{
  //load database
  public function __contruct(){
    parent::__construct();
    $this->load->model('dasbor_model');
  }


  public function detail_pendaftar($id_pendaftar)
  {
    $this->db->select('*');
    $this->db->from('pendaftar');
    $this->db->where('id_pendaftar',$id_pendaftar);
    $this->db->order_by('id_pendaftar','DESC');
    $query  = $this->db->get();
    return $query->row();
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
