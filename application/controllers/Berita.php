<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller{
  //load model
  public function __construct(){
    parent::__construct();
  }

  //Main page Tentang Kita
  public function index(){
    $data = array(  'title'   =>    'Berita');
    $this->load->view('berita/list',$data,FALSE);
  }
}
