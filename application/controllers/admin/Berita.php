<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('berita_model');
  }

  //listing data berita
  public function index()
  {
    $berita = $this->berita_model->listing();

    $data = array(  'title'   =>    'Data Berita ('.count($berita).')',
                    'berita'  =>    $berita,
                    'isi'     =>    'admin/berita/list');
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }

  //Tambah
  public function tambah()
  {
    $data = array(    'title'   =>    'Tambah Berita',
                      'isi'     =>    'admin/berita/tambah');
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }
}
