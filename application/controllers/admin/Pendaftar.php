<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftar extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('pendaftar_model');
  }

  //listing data pendaftar
  public function index()
  {
    $pendaftar = $this->pendaftar_model->listing();

    $data = array(  'title'   =>    'Data Pendaftar ('.count($pendaftar).')',
                    'pendaftar'  =>    $pendaftar,
                    'isi'     =>    'admin/pendaftar/list');
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }

  //Tambah
  public function tambah()
  {
    $data = array(    'title'   =>    'Tambah Pendaftar',
                      'isi'     =>    'admin/pendaftar/tambah');
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }
}
