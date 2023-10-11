<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		
		$this->load->view('login');
	}

    public function login()	{
		$this->db->from('user');
		$this->db->where('username',$this->input->post('username'));
		$validasi = $this->db->get()->result_array();

		if ($validasi==NULL) {
			$this->session->set_flashdata('alert','
			<div class="alert alert-danger" role="alert">
			Username tidak ada!
			</div>
			');
			redirect('auth');
		}
		
	}

}
