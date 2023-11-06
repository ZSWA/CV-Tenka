<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('level')==NULL) {
			redirect('auth');
		}
	}
	public function index(){
        $this->db->from('divisi');
		$this->db->order_by('nama_divisi','ASC');
		$divisi = $this->db->get()->result_array();

		$this->db->from('galeri a');
		$this->db->join('divisi b','a.id_divisi=b.id_divisi','left');
		$this->db->join('user c','a.username=c.username','left');
		$this->db->order_by('id_galeri','DESC');
		$galeri = $this->db->get()->result_array();

		$data = array(
			'judul' => 'Daftar Galeri',
			'divisi'	=> $divisi,
            'galeri' => $galeri
		);
		$this->template->load('template_admin','admin/galeri_index', $data);
	}

	public function simpan(){
        $namafoto = date('YmdHis').'.jpg';
        $config['upload_path']      = 'assets/upload/galeri/';
        $config['max_size']         = 500 * 2048;
        $config['file_name']        = $namafoto;
        $config['allowed_types']    = '*';
        $this->load->library('upload',$config);
        if ($_FILES['foto']['size']>=1024*2048) {
            $this->session->set_flashdata('alert','
			<div class="alert alert-danger" role="alert">
			Ukuran foto terlalu besar!
			</div>
			');
			redirect('admin/galeri');
        } elseif (!$this->upload->do_upload('foto')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $data = array('upload_data' => $this->upload->data());
        }

		$this->db->from('galeri');
		$this->db->where('judul',$this->input->post('judul'));
		$validasi = $this->db->get()->result_array();

		if ($validasi!=NULL) {
			$this->session->set_flashdata('alert','
			<div class="alert alert-danger" role="alert">
			Galeri sudah ada!
			</div>
			');
			redirect('admin/galeri');
		}

		$data = array(
			'judul' => $this->input->post('judul'),
			'id_divisi' => $this->input->post('id_divisi'),
			'foto_galeri' => $namafoto,
            'username' => $this->session->userdata('username'),
            
		);

		$this->db->insert('galeri',$data);
		$this->session->set_flashdata('alert','
		<div class="alert alert-success" role="alert">
		Berhasil menambahkan galeri
		</div>
		');
		redirect('admin/galeri');
	}

	public function delete_data($id){
		$filename=FCPATH.'/assets/upload/galeri/'.$id;
		if (file_exists($filename)) {
			unlink("./assets/upload/galeri/".$id);
		}
		$where = array(
			'foto_galeri' => $id
		);

		$this->db->delete('galeri',$where);
		$this->session->set_flashdata('alert','
		<div class="alert alert-success" role="alert">
		Berhasil menghapus galeri
		</div>
		');
		redirect('admin/galeri');
	}

	public function update(){
		$namafoto = $this->input->post('nama_baru');
        $config['upload_path']      = 'assets/upload/galeri/';
        $config['max_size']         = 500 * 2048;
        $config['file_name']        = $namafoto;
        $config['overwrite']        = TRUE;
        $config['allowed_types']    = '*';
        $this->load->library('upload',$config);
        if ($_FILES['foto']['size']>=500*2048) {
            $this->session->set_flashdata('alert','
			<div class="alert alert-danger" role="alert">
			Ukuran foto terlalu besar!
			</div>
			');
			redirect('admin/galeri');
        } elseif (!$this->upload->do_upload('foto')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $data = array('upload_data' => $this->upload->data());
        }
		
		$data = array(
			'judul' => $this->input->post('judul'),
			'id_divisi' => $this->input->post('id_divisi'),     
		);

		$where = array(
			'foto_galeri' => $this->input->post('nama_baru')
		);
		$this->db->update('galeri',$data,$where);
		$this->session->set_flashdata('alert','
		<div class="alert alert-success" role="alert">
		Berhasil mengedit galeri
		</div>
		');
		redirect('admin/galeri');

	}
}
