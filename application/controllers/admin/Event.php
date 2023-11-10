<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('level')==NULL) {
			redirect('auth');
		}
	}
	public function index(){
        $this->db->from('event');
		$this->db->order_by('tanggal','ASC');
		$event = $this->db->get()->result_array();

		$data = array(
			'judul' => 'Daftar Event',
			'event'	=> $event,
		);
		$this->template->load('template_admin','admin/upcoming_event', $data);
	}

	public function simpan(){
        $namafoto = date('YmdHis').'.jpg';
        $config['upload_path']      = 'assets/upload/event/';
        $config['max_size']         = 3*1024*1024;
        $config['file_name']        = $namafoto;
        $config['allowed_types']    = '*';
        $this->load->library('upload',$config);
        if ($_FILES['poster']['size']>=3*1024*1024) {
            $this->session->set_flashdata('alert','
			<div class="alert alert-danger" role="alert">
			Ukuran foto terlalu besar!
			</div>
			');
			redirect('admin/event');
        } elseif (!$this->upload->do_upload('poster')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $data = array('upload_data' => $this->upload->data());
        }

		$this->db->from('event');
		$this->db->where('nama_event',$this->input->post('nama'));
		$validasi = $this->db->get()->result_array();

		if ($validasi!=NULL) {
			$this->session->set_flashdata('alert','
			<div class="alert alert-danger" role="alert">
			Event sudah pernah ada!
			</div>
			');
			redirect('admin/event');
		}

		$data = array(
			'nama_event' => $this->input->post('nama'),
			'konten_event' => $this->input->post('konten'),
			'lokasi' => $this->input->post('lokasi'),
			'gmaps' => $this->input->post('gmaps'),
			'poster' => $namafoto,
            'tanggal' => $this->input->post('tanggal')
            
		);

		$this->db->insert('event',$data);
		$this->session->set_flashdata('alert','
		<div class="alert alert-success" role="alert">
		Berhasil menambahkan event
		</div>
		');
		redirect('admin/event');
	}

	public function delete_data($id){
		$filename=FCPATH.'/assets/upload/event/'.$id;
		if (file_exists($filename)) {
			unlink("./assets/upload/event/".$id);
		}
		$where = array(
			'poster' => $id
		);

		$this->db->delete('event',$where);
		$this->session->set_flashdata('alert','
		<div class="alert alert-success" role="alert">
		Berhasil menghapus event
		</div>
		');
		redirect('admin/event');
	}

	public function update(){
		$namafoto = $this->input->post('nama_lama');
        $config['upload_path']      = 'assets/upload/event/';
        $config['max_size']         = 3*1024*1024;
        $config['file_name']        = $namafoto;
        $config['overwrite']        = TRUE;
        $config['allowed_types']    = '*';
        $this->load->library('upload',$config);
        if ($_FILES['poster']['size']>=3*1024*1024) {
            $this->session->set_flashdata('alert','
			<div class="alert alert-danger" role="alert">
			Ukuran foto terlalu besar!
			</div>
			');
			redirect('admin/event');
        } elseif (!$this->upload->do_upload('poster')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $data = array('upload_data' => $this->upload->data());
        }
		
		$data = array(
			'nama_event' => $this->input->post('nama'),
			'konten_event' => $this->input->post('konten'),
			'lokasi' => $this->input->post('lokasi'),
			'gmaps' => $this->input->post('gmaps'),
            'tanggal' => $this->input->post('tanggal')
            
		);

		$where = array(
			'poster' => $this->input->post('nama_lama')
		);
		$this->db->update('event',$data,$where);
		$this->session->set_flashdata('alert','
		<div class="alert alert-success" role="alert">
		Berhasil mengedit Event
		</div>
		');
		redirect('admin/event');

	}
}
