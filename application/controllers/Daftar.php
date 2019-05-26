<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller{
  //load model
  public function __construct(){
    parent::__construct();
  }

  //Main page Tentang Kita
  public function index(){
    $data = array(  'title'   =>    'Pendaftaran');
    $this->load->view('daftar/list',$data,FALSE);
  }

  public function lakukan_download(){
		force_download('assets/file/Formulir',NULL);
	}
}
