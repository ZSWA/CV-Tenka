<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
	}
	public function index(){
		$this->db->from('user');
		$this->db->order_by('nama','ASC');
		$user = $this->db->get()->result_array();

		$data = array(
			'judul' => 'Data User',
			'user'	=> $user
		);
		$this->template->load('template_admin','admin/user_index', $data);
	}

	public function simpan(){
		$data = array(
			'nama' => $this->input->post('nama'),
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'level' => $this->input->post('level'),
		);

		$this->db->insert('user',$data);
		$this->session->set_flashdata('alert','
		<div class="alert alert-success" role="alert">
		Berhasil menambahkan user
		</div>
		');
		redirect('admin/user');
	}

}
