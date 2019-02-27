<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
  //load model
  public function __construct(){
    parent::__construct();
  }

  //Homepage
  public function index(){
    $data = array(  'title'   =>    'Koperasi Halal Ummat');
    $this->load->view('home/list',$data,FALSE);
  }
}
