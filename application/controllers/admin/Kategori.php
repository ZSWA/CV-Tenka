<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('level')==NULL) {
			redirect('auth');
		}
	}
	public function index(){
		$this->db->from('kategori');
		$this->db->order_by('kategori','ASC');
		$kategori = $this->db->get()->result_array();

		$data = array(
			'judul' => 'Kategori Konten',
			'kategori'	=> $kategori
		);
		$this->template->load('template_admin','admin/kategori_index', $data);
	}

	public function simpan(){
		$this->db->from('kategori');
		$this->db->where('kategori',$this->input->post('kategori'));
		$validasi = $this->db->get()->result_array();

		if ($validasi!=NULL) {
			$this->session->set_flashdata('alert','
			<div class="alert alert-danger" role="alert">
			Kategori sudah ada!
			</div>
			');
			redirect('admin/kategori');
		}

		$data = array(
			'kategori' => $this->input->post('kategori'),
		);

		$this->db->insert('kategori',$data);
		$this->session->set_flashdata('alert','
		<div class="alert alert-success" role="alert">
		Berhasil menambahkan kategori
		</div>
		');
		redirect('admin/kategori');
	}

	public function delete_data($id){
		$where = array(
			'id_kategori' => $id
		);

		$this->db->delete('kategori',$where);
		$this->session->set_flashdata('alert','
		<div class="alert alert-success" role="alert">
		Berhasil menghapus user
		</div>
		');
		redirect('admin/kategori');
	}

	public function update(){
		$where = array(
			'id_kategori' => $this->input->post('id_kategori')
		);

		$data = array(
			'kategori' => $this->input->post('kategori')
		);

		$this->db->update('kategori',$data,$where);
		$this->session->set_flashdata('alert','
		<div class="alert alert-success" role="alert">
		Berhasil update kategori
		</div>
		');
		redirect('admin/kategori');
	}

}
