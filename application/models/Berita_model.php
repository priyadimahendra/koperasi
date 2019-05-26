<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita_model extends CI_Model
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
    $this->db->from('berita');

    $this->db->order_by('id_berita','DESC');
    $query = $this->db->get();
    return $query->result();
  }

  public function home()
  {
    $this->db->select('*');
    $this->db->from('berita');

    $this->db->order_by('id_berita','DESC');
    $this->db->limit(3);
    $query = $this->db->get();
    return $query->result();
  }

  public function detail($id_berita)
  {
    $this->db->select('*');
    $this->db->from('berita');
    $this->db->where('id_berita',$id_berita);
    $this->db->order_by('id_berita','DESC');
    $query  = $this->db->get();
    return $query->row();
  }

  // Tambah/Insert data
  public function tambah($data)
  {
    $this->db->insert('berita',$data);
  }

}
