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
    $valid = $this->form_validation;

    $valid->set_rules('judul_berita','Judul berita','required',
            array('required'    =>    '% harus diisi'));

    $valid->set_rules('isi_berita','Isi berita','required',
            array('required'    =>    '% harus diisi'));

    if($valid->run())
    {
      $config['upload_path']          = '.assets/upload/image/';
      $config['allowed_types']        = 'gif|jpg|png|jpeg';
      $config['max_size']             = 5000; //dalam kilobyte
      $config['max_width']            = 5000; //dalam piksel
      $config['max_height']           = 5000; //dalam piksel

      $this->load->library('upload', $config);

      if ( ! $this->upload->do_upload('gambar'))
      {
        $data = array(    'title'         =>    'Tambah Berita',
                          '$error_upload' =>    $this->upload->display_errors(),
                          'isi'           =>    'admin/berita/tambah');
        $this->load->view('admin/layout/wrapper', $data, FALSE);
      }else{
        // Proses manipulasi Data
        $upload_data            = array('uploads'   =>$this->upload->data());
        //gambar asli disimpan di assets/upload/image
        //lalu gambar asli itu di copy untuk versi mini size ke folder assets/upload/image/thumbs
        $config['image_library']  = 'gd2';
        $config['source_image']   = './assets/upload/image/'.$upload_data['uploads']['file_name'];
        //gambar versi kecil dipindahkan
        $config['new_image']   = './assets/upload/image/thumbs'.$upload_data['uploads']['file_name'];
        $config['create_thumb']   = TRUE;
        $config['maintain_ratio'] = TRUE;
        $config['width']          = 200;
        $config['height']         = 200;

        $this->load->library('image_lib', $config);

        $this->image_lib->resize();

        $i = $this->input;
        $data = array(  'id_user'       =>  $this->session->userdata('id_user'),
                        'judul_berita'  =>  $i->post('judul_berita'),
                        'isi_berita'    =>  $i->post('isi_berita'),
                        'gambar'        =>  $upload_data['uploads']['file_name'],
                        'tanggal_post'  =>  date('Y-m-d H:i:s')
                );
        $this->berita_model->tambah($data);
        $this->session->set_flashdata('sukses','Data telah ditambah');
        redirect(base_url('admin/berita'),'refresh');
      }
    }
    $data = array(    'title'         =>    'Tambah Berita',
                      'isi'           =>    'admin/berita/tambah');
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }
}
