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

      $valid->set_rules('nama', 'Nama', 'required',
              array('required'    =>    'Nama harus diisi'));

      $valid->set_rules('tempat_lahir', 'Tempat Lahiri', 'required',
              array('required'    =>    'Tempat Lahir harus diisi'));

      $valid->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required',
              array('required'    =>    'Tanggal Lahir harus diisi'));

      $valid->set_rules('bulan_lahir', 'Bulan Lahir', 'required',
              array('required'    =>    'Bulan Lahir harus diisi'));

      $valid->set_rules('tahun_lahir', 'Tahun Lahir', 'required',
              array('required'    =>    'Tahun Lahir harus diisi'));

      $valid->set_rules('no_ktp', 'No KTP', 'required|is_unique[pendaftar.no_ktp]',
              array(  'required'    =>    'No KTP harus diisi',
                      'is_unique'   =>    'No KTP <strong>'.$this->input->post('no_ktp').
                                          '</strong> sudah pernah terdaftar.'));

      $valid->set_rules('alamat', 'Alamat', 'required',
              array('required'    =>    'Alamat harus diisi'));

      $valid->set_rules('kelurahan_desa', 'Kelurahan/Desa', 'required',
              array('required'    =>    'Kelurahan/Desa harus diisi'));

      $valid->set_rules('kecamatan', 'Kecamatan', 'required',
              array('required'    =>    'Kecamatan harus diisi'));

      $valid->set_rules('kabupaten_kota', 'Kabupatan/Kota', 'required',
              array('required'    =>    'Kabupatan/Kota harus diisi'));

      $valid->set_rules('pekerjaan', 'Pekerjaan', 'required',
              array('required'    =>    'Pekerjaan harus diisi'));

      $valid->set_rules('pendidikan_terakhir', 'Pendidikan Terakhir', 'required',
              array('required'    =>    'Pendidikan Terakhir harus diisi'));

      $valid->set_rules('no_hp', 'No HP', 'required',
              array('required'    =>    'No HP harus diisi'));

      $valid->set_rules('no_wa', 'No WhatsApp', 'required',
              array('required'    =>    'No WhatsApp harus diisi'));

      $valid->set_rules('email', 'E-mail', 'required',
              array('required'    =>    'E-mail harus diisi'));

      if($valid->run()===FALSE){
        $data = array( 'title' => 'Tambah Pendaftar',
                       'isi'   => 'admin/pendaftar/tambah');
        $this->load->view('admin/layout/wrapper', $data, FALSE);
      }else {
        $i = $this->input;
        $data = array(  'nama'                   =>    $i->post('nama'),
                        'tempat_lahir'           =>    $i->post('tempat_lahir'),
                        'tanggal_lahir'          =>    $i->post('tanggal_lahir'),
                        'bulan_lahir'            =>    $i->post('bulan_lahir'),
                        'tahun_lahir'            =>    $i->post('tahun_lahir'),
                        'no_ktp'                 =>    $i->post('no_ktp'),
                        'alamat'                 =>    $i->post('alamat'),
                        'kelurahan_desa'         =>    $i->post('kelurahan_desa'),
                        'kecamatan'              =>    $i->post('kecamatan'),
                        'kabupaten_kota'         =>    $i->post('kabupaten_kota'),
                        'pekerjaan'              =>    $i->post('pekerjaan'),
                        'pendidikan_terakhir'    =>    $i->post('pendidikan_terakhir'),
                        'no_hp'                  =>    $i->post('no_hp'),
                        'no_wa'                  =>    $i->post('no_hp'),
                        'email'                 =>    $i->post('email')
        );
        $this->user_model->index($data);
        $this->session->set_flashdata( 'sukses', 'Data telah ditambahkan');
        redirect(base_url('admin/dasbor'),'refresh');
      }
    }

    public function edit($id_pendaftar)
    {
        $pendaftar = $this->pendaftar_model->detail_pendaftar($id_pendaftar);

      //validasi
        $valid = $this->form_validation;

        $valid->set_rules('nama', 'Nama', 'required',
                array('required'    =>    'Nama harus diisi'));

        $valid->set_rules('tempat_lahir', 'Tempat Lahiri', 'required',
                array('required'    =>    'Tempat Lahir harus diisi'));

        $valid->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required',
                array('required'    =>    'Tanggal Lahir harus diisi'));

        $valid->set_rules('bulan_lahir', 'Bulan Lahir', 'required',
                array('required'    =>    'Bulan Lahir harus diisi'));

        $valid->set_rules('tahun_lahir', 'Tahun Lahir', 'required',
                array('required'    =>    'Tahun Lahir harus diisi'));


        $valid->set_rules('alamat', 'Alamat', 'required',
                array('required'    =>    'Alamat harus diisi'));

        $valid->set_rules('kelurahan_desa', 'Kelurahan/Desa', 'required',
                array('required'    =>    'Kelurahan/Desa harus diisi'));

        $valid->set_rules('kecamatan', 'Kecamatan', 'required',
                array('required'    =>    'Kecamatan harus diisi'));

        $valid->set_rules('kabupaten_kota', 'Kabupatan/Kota', 'required',
                array('required'    =>    'Kabupatan/Kota harus diisi'));

        $valid->set_rules('pekerjaan', 'Pekerjaan', 'required',
                array('required'    =>    'Pekerjaan harus diisi'));

        $valid->set_rules('pendidikan_terakhir', 'Pendidikan Terakhir', 'required',
                array('required'    =>    'Pendidikan Terakhir harus diisi'));

        $valid->set_rules('no_hp', 'No HP', 'required',
                array('required'    =>    'No HP harus diisi'));

        $valid->set_rules('no_wa', 'No WhatsApp', 'required',
                array('required'    =>    'No WhatsApp harus diisi'));

        $valid->set_rules('email', 'E-mail', 'required',
                array('required'    =>    'E-mail harus diisi'));

        if($valid->run()===FALSE){
          $data = array( 'title'      => 'Edit Pendaftar: '.$pendaftar->nama,
                         'pendaftar'  => $pendaftar,
                         'isi'        => 'admin/pendaftar/edit');
          $this->load->view('admin/layout/wrapper', $data, FALSE);
        }else {
          $i = $this->input;
          $data = array(  'id_pendaftar'           =>    $id_pendaftar,
                          'nama'                   =>    $i->post('nama'),
                          'tempat_lahir'           =>    $i->post('tempat_lahir'),
                          'tanggal_lahir'          =>    $i->post('tanggal_lahir'),
                          'bulan_lahir'            =>    $i->post('bulan_lahir'),
                          'tahun_lahir'            =>    $i->post('tahun_lahir'),
                          'alamat'                 =>    $i->post('alamat'),
                          'kelurahan_desa'         =>    $i->post('kelurahan_desa'),
                          'kecamatan'              =>    $i->post('kecamatan'),
                          'kabupaten_kota'         =>    $i->post('kabupaten_kota'),
                          'pekerjaan'              =>    $i->post('pekerjaan'),
                          'pendidikan_terakhir'    =>    $i->post('pendidikan_terakhir'),
                          'no_hp'                  =>    $i->post('no_hp'),
                          'no_wa'                  =>    $i->post('no_hp'),
                          'email'                  =>    $i->post('email')
          );
          $this->user_model->edit($data);
          $this->session->set_flashdata( 'sukses', 'Data telah diupdate');
          redirect(base_url('admin/dasbor'),'refresh');
        }
      }
}
