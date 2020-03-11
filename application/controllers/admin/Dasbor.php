<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dasbor extends CI_Controller {

    //load model
  public function __construct()
  {
      parent::__construct();
      $this->load->model('dasbor_model');
      $this->load->model('pendaftar_model');
      $this->load->model('berita_model');
  }

  public function index(){
    $pendaftar = $this->pendaftar_model->listing();
    $berita = $this->berita_model->listing();

    $data = array(  'title'   => 'Halaman Dasbor',
                    'pendaftar'  =>    $pendaftar,
                    'berita'  =>    $berita,
                    'isi'     => 'admin/dasbor/list');
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }

  public function delete($id_pendaftar){
    $data = array('id_pendaftar'   =>    $id_pendaftar);
    $this->dasbor_model->delete($data);
    $this->session->set_flashdata( 'sukses', 'Data telah dihapus');
    redirect(base_url('admin/dasbor'),'refresh');
  }
}
