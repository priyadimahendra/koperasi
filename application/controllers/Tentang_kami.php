<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang_kami extends CI_Controller{
  //load model
  public function __construct(){
    parent::__construct();
  }

  //Main page Tentang Kita
  public function index(){
    $data = array(  'title'   =>    'Tentang Kami');
    $this->load->view('tentang_kami/list',$data,FALSE);
  }
}
