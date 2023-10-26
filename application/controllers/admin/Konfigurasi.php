<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfigurasi extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('level')==NULL) {
			redirect('auth');
		}
	}

	public function index()
	{
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();
		
		$data = array(

			'judul' => 'Konfigurasi Website',
			'konfig' => $konfig
		);
		$this->template->load('template_admin','admin/konfigurasi_index', $data);
	}

	public function update(){
		$namafoto = 'konfigurasi.png';
        $config['upload_path']      = 'assets/upload/konfigurasi/';
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

		$where = array(
			'id' => 1
		);

		$data = array(
			'judul_website' => $this->input->post('judul'),
			'profil_website' => $this->input->post('profile'),
			'instagram' => $this->input->post('instagram'),
			'facebook' => $this->input->post('facebook'),
			'email' => $this->input->post('email'),
			'tiktok' => $this->input->post('tiktok'),
			'alamat' => $this->input->post('alamat')
		);

		$this->db->update('konfigurasi',$data,$where);
		$this->session->set_flashdata('alert','
		<div class="alert alert-success" role="alert">
		Berhasil update konfigurasi
		</div>
		');
		redirect('admin/konfigurasi');
	}

}
