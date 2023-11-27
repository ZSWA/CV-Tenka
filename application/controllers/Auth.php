<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('level')=='Admin') {
			redirect('admin/home');
		} elseif ($this->session->userdata('level')=='Kontributor') {
			redirect('admin/home');
		}
	}

	public function index()
	{
		
		$this->load->view('login');
	}

    public function login()	{
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$this->db->from('user');
		$this->db->where('username',$username);
		$validasi = $this->db->get()->row();

		if ($validasi==NULL) {
			$this->session->set_flashdata('alert','
			<div class="alert alert-danger" role="alert">
			Username tidak ada!
			</div>
			');
			redirect('auth');
		} elseif ($password==$validasi->password) {
			$data = array(
				'id_user' => $validasi->id_user,
				'nama' => $validasi->nama,
				'username' => $validasi->username,
				'level' => $validasi->level
			);
			$this->session->set_userdata($data);
			redirect('admin/home');
		} else {
			$this->session->set_flashdata('alert','
			<div class="alert alert-danger" role="alert">
			Password Salah!
			</div>
			');
			redirect('auth');
		}
		
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('home');
	}

}
