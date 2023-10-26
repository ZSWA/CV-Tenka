<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Caraousel extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('level')==NULL) {
			redirect('auth');
		}
	}
	public function index(){
        $this->db->from('caraousel');
		$caraousel = $this->db->get()->result_array();

		$data = array(
			'judul' => 'Daftar Carousel',
			'caraousel'	=> $caraousel
		);
		$this->template->load('template_admin','admin/carousel_index', $data);
	}

	public function simpan(){
        $namafoto = date('YmdHis').'.jpg';
        $config['upload_path']      = 'assets/upload/carousel/';
        $config['max_size']         = 2048 * 1024;
        $config['file_name']        = $namafoto;
        $config['allowed_types']    = '*';
        $this->load->library('upload',$config);
        if ($_FILES['foto']['size']>=2048 * 1024) {
            $this->session->set_flashdata('alert','
			<div class="alert alert-danger" role="alert">
			Ukuran foto terlalu besar!
			</div>
			');
			redirect('admin/caraousel');
        } elseif (!$this->upload->do_upload('foto')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $data = array('upload_data' => $this->upload->data());
        }

		$data = array(
			'judul' => $this->input->post('judul'),	
			'foto' => $namafoto,
		);

		$this->db->insert('caraousel',$data);
		$this->session->set_flashdata('alert','
		<div class="alert alert-success" role="alert">
		Berhasil menambahkan carousel
		</div>
		');
		redirect('admin/caraousel');
	}

	public function delete_data($id){
		$filename=FCPATH.'/assets/upload/carousel/'.$id;
		if (file_exists($filename)) {
			unlink("./assets/upload/carousel/".$id);
		}
		$where = array(
			'foto' => $id
		);

		$this->db->delete('caraousel',$where);
		$this->session->set_flashdata('alert','
		<div class="alert alert-success" role="alert">
		Berhasil menghapus carousel
		</div>
		');
		redirect('admin/caraousel');
	}

	public function update(){
		$namafoto = $this->input->post('nama_baru');
        $config['upload_path']      = 'assets/upload/konten/';
        $config['max_size']         = 500 * 1024;
        $config['file_name']        = $namafoto;
        $config['overwrite']        = TRUE;
        $config['allowed_types']    = '*';
        $this->load->library('upload',$config);
        if ($_FILES['foto']['size']>=500*1024) {
            $this->session->set_flashdata('alert','
			<div class="alert alert-danger" role="alert">
			Ukuran foto terlalu besar!
			</div>
			');
			redirect('admin/konten');
        } elseif (!$this->upload->do_upload('foto')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $data = array('upload_data' => $this->upload->data());
        }
		
		$data = array(
			'judul' => $this->input->post('judul'),
			'id_kategori' => $this->input->post('id_kategori'),
			'isi_konten' => $this->input->post('isi'),
			'slug' => str_replace(' ','-',$this->input->post('judul'))
            
		);

		$where = array(
			'foto' => $this->input->post('nama_baru')
		);
		$this->db->update('konten',$data,$where);
		$this->session->set_flashdata('alert','
		<div class="alert alert-success" role="alert">
		Berhasil mengedit konten
		</div>
		');
		redirect('admin/konten');

	}
}
