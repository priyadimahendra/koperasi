<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dasbor_model extends CI_Model {

	// Load database
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

  public function delete($data){
  $this->db->where('id_pendaftar',$data['id_pendaftar']);
  $this->db->delete('pendaftar',$data);
  }
}
