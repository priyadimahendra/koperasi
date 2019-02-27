<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller{
  //load model
  public function __construct(){
    parent::__construct();
  }

  //Main page Tentang Kita
  public function index(){
    $data = array(  'title'   =>    'Kontak');
    $this->load->view('kontak/list',$data,FALSE);
  }
}
