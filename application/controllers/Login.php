<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}

	// Index login
	public function index() {

			$valid = $this->form_validation;

			$valid->set_rules('username','Username','required',
							array('required'		=>		'Username harus diisi'));

			$valid->set_rules('password','Password','required',
							array('required'		=>		'Password harus diisi'));

			if($valid->run()===FALSE)
			{
				$data = array( 'title' => 'Login Administrator');
				$this->load->view('admin/login_view', $data, FALSE);
			}else {
					$i						=		$this->input;
					$username			=		$i->post('username');
					$password			=		$i->post('password');

					// Check di database
					$check_login		=		$this->user_model->login($username , $password);

					if(count($check_login) == 1)
					{
						$this->session->set_userdata('id_user', $check_login->$id_user);
						$this->session->set_userdata('username',$username);
						$this->session->set_flashdata('sukses', 'Anda berhasil login');
						redirect(base_url('admin/dasbor'),'refresh');
					}else {
						$this->session->set_flashdata('sukses', 'Username atau password tidak cocok');
						redirect(base_url('Login'),'refresh');
					}
			}
	}

	public function logout() {
		$this->session->unset_userdata('id_user');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('password');
		$this->session->set_flashdata('sukses', 'Anda berhasil logout');
		redirect(base_url('Login'));
	}
}
