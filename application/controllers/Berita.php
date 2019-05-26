<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller{
  //load model
  public function __construct(){
    parent::__construct();
    $this->load->model('berita_model');
  }

  //Main page Tentang Kita
  public function index(){
    $berita     =  $this->berita_model->listing();
    $berita2     =  $this->berita_model->home();

    $data = array(  'title'   =>    'Berita',
                    'berita'  =>    $berita,
                    'berita2'  =>    $berita2,
                  );
    $this->load->view('berita/list',$data,FALSE);
  }

  public function read($id_berita){
    $berita     =  $this->berita_model->detail($id_berita);

    $data = array(  'title'   =>    'Berita',
                    'berita'  =>    $berita
                  );
    $this->load->view('berita/read',$data,FALSE);
  }
}
