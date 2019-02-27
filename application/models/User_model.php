<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{

  public function __construct(){
    parent::__construct();
    $this->load->database();
  }

  //Login
  public function login($username , $password){
    $this->db->select('*');
    $this->db->from('user');
    $this->db->where(array( 'username'   =>    $username,
                            'password'   =>    md5($password)));
    $this->db->order_by('id_user','DESC');
    $query = $this->db->get();
    return $query->row();
  }
}
