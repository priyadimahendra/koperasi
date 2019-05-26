<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
  //load model
  public function __construct(){
    parent::__construct();
    $this->load->model('berita_model');
  }

  //Homepage
  public function index(){
    $berita     =  $this->berita_model->home();

    $data = array(  'title'   =>    'Koperasi Halal Ummat',
                    'berita'  =>    $berita);
    $this->load->view('home/list',$data,FALSE);
  }
}
