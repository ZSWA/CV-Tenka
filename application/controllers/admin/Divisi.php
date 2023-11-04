<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Divisi extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('level')==NULL) {
			redirect('auth');
		}
	}
	public function index(){
        $this->db->from('divisi');
		$this->db->order_by('nama','ASC');
		$divisi = $this->db->get()->result_array();

		$data = array(
			'judul' => 'Divisi Tenka',
			'divisi'	=> $divisi
		);
		$this->template->load('template_admin','admin/divisi_index', $data);
	}

	public function simpan(){
        $namafoto = date('YmdHis').'.jpg';
        $config['upload_path']      = 'assets/upload/divisi/';
        $config['max_size']         = 500 * 2048;
        $config['file_name']        = $namafoto;
        $config['allowed_types']    = '*';
        $this->load->library('upload',$config);
        if ($_FILES['logo']['size']>=1024*2048) {
            $this->session->set_flashdata('alert','
			<div class="alert alert-danger" role="alert">
			Ukuran foto terlalu besar!
			</div>
			');
			redirect('admin/konten');
        } elseif (!$this->upload->do_upload('logo')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $data = array('upload_data' => $this->upload->data());
        }

		$this->db->from('divisi');
		$this->db->where('nama',$this->input->post('nama'));
		$validasi = $this->db->get()->result_array();

		if ($validasi!=NULL) {
			$this->session->set_flashdata('alert','
			<div class="alert alert-danger" role="alert">
			Divisi sudah ada!
			</div>
			');
			redirect('admin/divisi');
		}

		$data = array(
			'nama' => $this->input->post('nama'),
			'profil' => $this->input->post('profil'),
			'foto' => $namafoto,
            'instagram' => $this->input->post('instagram'),
            
		);

		$this->db->insert('divisi',$data);
		$this->session->set_flashdata('alert','
		<div class="alert alert-success" role="alert">
		Berhasil menambahkan divisi
		</div>
		');
		redirect('admin/divisi');
	}

	public function delete_data($id){
		$filename=FCPATH.'/assets/upload/konten/'.$id;
		if (file_exists($filename)) {
			unlink("./assets/upload/konten/".$id);
		}
		$where = array(
			'foto' => $id
		);

		$this->db->delete('divisi',$where);
		$this->session->set_flashdata('alert','
		<div class="alert alert-success" role="alert">
		Berhasil menghapus divisi
		</div>
		');
		redirect('admin/divisi');
	}

	public function update(){
		$namafoto = $this->input->post('nama_baru');
        $config['upload_path']      = 'assets/upload/divisi/';
        $config['max_size']         = 500 * 2048;
        $config['file_name']        = $namafoto;
        $config['overwrite']        = TRUE;
        $config['allowed_types']    = '*';
        $this->load->library('upload',$config);
        if ($_FILES['logo']['size']>=500*2048) {
            $this->session->set_flashdata('alert','
			<div class="alert alert-danger" role="alert">
			Ukuran foto terlalu besar!
			</div>
			');
			redirect('admin/konten');
        } elseif (!$this->upload->do_upload('logo')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $data = array('upload_data' => $this->upload->data());
        }
		
		$data = array(
			'nama' => $this->input->post('nama'),
			'profil' => $this->input->post('profil'),
            'instagram' => $this->input->post('instagram')
			
            
		);

		$where = array(
			'foto' => $this->input->post('nama_baru')
		);
		$this->db->update('divisi',$data,$where);
		$this->session->set_flashdata('alert','
		<div class="alert alert-success" role="alert">
		Berhasil mengubah divisi
		</div>
		');
		redirect('admin/divisi');

	}
}
