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
    //validasi
      $valid = $this->form_validation;

      $valid->set_rules('nama', 'Nama', 'required|is_unique[users.username]',
              array(  'required'    =>    'Username harus diisi',
                      'is_unique'   =>    'Username <strong>'.$this->input->post('nama').
                                          '</strong> sudah ada. Buat Username baru!!'));

      $valid->set_rules('password', 'Password', 'required|min_length[5]',
              array(  'required'    =>    'Password harus diisi',
                      'min_length'  =>    'Password minimal 5 karakter'));



      if($valid->run()===FALSE){
        $data = array( 'title' => 'Tambah Pendaftar',
                       'isi'   => 'admin/pendaftar/tambah');
        $this->load->view('admin/layout/wrapper', $data, FALSE);
      }else {
        $i = $this->input;
        $data = array(  'username'       =>    $i->post('username'),
                        'password'       =>    md5($i->post('password'))
        );
        $this->user_model->tambah_admin($data);
        $this->session->set_flashdata( 'sukses', 'Data telah ditambahkan');
        redirect(base_url('admin/dasbor'),'refresh');
      }
  }
}
