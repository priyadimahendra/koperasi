<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
  //load database
  public function __contruct(){
    parent::__construct();
    $this->load->database();
  }

  //tambah pendaftaar
  public function index ($data) {
		$this->db->insert('pendaftar',$data);
	}

  //edit pendaftar
  public function edit($data){
    $this->db->where('id_pendaftar',$data['id_pendaftar']);
    $this->db->update('pendaftar',$data);
  }

  public function detail($id_user)
  {
    $this->db->select('*');
    $this->db->from('user');
    $this->db->where('id_user',$id_user);
    $this->db->order_by('id_user','DESC');
    $query  = $this->db->get();
    return $query->row();
  }

  //Login
  public function login($username , $password){
    $this->db->select('*');
    $this->db->from('user');
    $this->db->where(array( 'username'   =>    $username,
                            'password'   =>    sha1($password)));
    $this->db->order_by('id_user','DESC');
    $query = $this->db->get();
    return $query->row();
  }
}
