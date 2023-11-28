<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		
	}

	public function index()
	{
		$this->db->from('konfigurasi');
		$konfigurasi = $this->db->get()->row();

		$this->db->from('event');
		$this->db->order_by('tanggal','ASC');
		$this->db->where('tanggal >=',date("Y-m-d h:i:s"));
		$event = $this->db->get()->result_array();

		$this->db->from('galeri');
		$this->db->order_by('id_galeri','DESC');
		$this->db->limit(12);
		$galeri = $this->db->get()->result_array();

		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();

		$this->db->from('caraousel');
		$carosel = $this->db->get()->result_array();

		$this->db->from('divisi');
		$this->db->order_by('nama_divisi','ASC');
		$divisi = $this->db->get()->result_array();

		$this->db->from('konten a');
		$this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
		$this->db->join('user c','a.username=c.username','left');
		$this->db->order_by('tanggal','DESC');
		$this->db->limit(3);
		$konten = $this->db->get()->result_array();

		$data = array(
			'judul' => 'Tenka ID',
			'konfig' => $konfigurasi,
			'kategori' => $kategori,
			'carosel' => $carosel,
			'divisi' => $divisi,
			'galeri' => $galeri,
			'event' => $event,
			'konten' => $konten

		);
		$this->template->load('template_beranda','beranda', $data);
	}

	public function kategori($id)
	{
		$this->db->from('konfigurasi');
		$konfigurasi = $this->db->get()->row();

		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();

		$this->db->from('caraousel');
		$carosel = $this->db->get()->result_array();

		$this->db->from('konten a');
		$this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
		$this->db->join('user c','a.username=c.username','left');
		$this->db->order_by('tanggal','DESC');
		$this->db->where('a.id_kategori',$id);
		$konten = $this->db->get()->result_array();

		$data = array(
			'judul' => 'Tenka ID',
			'konfig' => $konfigurasi,
			'kategori' => $kategori,
			'carosel' => $carosel,
			'konten' => $konten

		);
		$this->template->load('template_beranda','konten', $data);
	}

	public function artikel($id){
		$this->db->from('konfigurasi');
		$konfigurasi = $this->db->get()->row();

		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();
		

		$this->db->from('konten a');
		$this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
		$this->db->join('user c','a.username=c.username','left');
		$this->db->order_by('tanggal','DESC');
		$this->db->where('slug',$id);
		$konten = $this->db->get()->row();

		$data = array(
			'judulkonten' => 'Tenka ID | '.$konten->judul,
			'judul' => 'Tenka ID',
			'konfig' => $konfigurasi,
			'kategori' => $kategori,
			'konten' => $konten

		);
		$this->template->load('template_beranda','detail', $data);
	}

	public function konten(){
		$this->db->from('konfigurasi');
		$konfigurasi = $this->db->get()->row();

		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();

		

		$this->db->from('konten a');
		$this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
		$this->db->join('user c','a.username=c.username','left');
		$this->db->order_by('tanggal','DESC');
		$hitung =$this->db->get();

		$config['base_url']='http://localhost/belajar/home/konten';
		$config['total_rows']= $hitung->num_rows();
		$config['per_page'] = 3;
		$config['full_tag_open'] = '<div class="pagination flex-l-m flex-w m-l--6 p-t-25">';
		$config['full_tag_close'] = '</div>';
		$config['next_link'] = '&raquo';
		$config['prev_link'] = '&laquo';
		$config['attributes'] = array('class' => 'item-pagination flex-c-m trans-0-4');
		$this->pagination->initialize($config);

		$this->db->from('konten a');
		$this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
		$this->db->join('user c','a.username=c.username','left');
		$this->db->order_by('tanggal','DESC');
		$this->db->limit($config['per_page'],$this->uri->segment(3));
		$konten = $this->db->get()->result_array();

		$data = array(
			'judul' => 'Tenka ID',
			'konfig' => $konfigurasi,
			'kategori' => $kategori,
			'konten' => $konten

		);
		

		$this->template->load('template_beranda','konten', $data);
	}

	public function galeri(){
		$this->db->from('konfigurasi');
		$konfigurasi = $this->db->get()->row();

		$this->db->from('divisi');
		$divisi = $this->db->get()->result_array();

		$this->db->from('galeri a');
		$this->db->join('divisi b','a.id_divisi=b.id_divisi','left');
		$this->db->join('user c','a.username=c.username','left');
		$this->db->order_by('id_galeri','DESC');
		$hitung = $this->db->get();

		$config['base_url']='http://localhost/belajar/home/galeri';
		$config['total_rows']= $hitung->num_rows();
		$config['per_page'] = 9;
		$config['full_tag_open'] = '<div class="pagination flex-c-m flex-w p-l-15 p-r-15 m-t-24 m-b-50">';
		$config['full_tag_close'] = '</div>';
		$config['next_link'] = '&raquo';
		$config['prev_link'] = '&laquo';
		$config['attributes'] = array('class' => 'item-pagination flex-c-m trans-0-4');
		$this->pagination->initialize($config);
		

		$this->db->from('galeri a');
		$this->db->join('divisi b','a.id_divisi=b.id_divisi','left');
		$this->db->join('user c','a.username=c.username','left');
		$this->db->order_by('id_galeri','DESC');
		$this->db->limit($config['per_page'],$this->uri->segment(3));
		$galeri = $this->db->get()->result_array();

		$data = array(
			'judul' => 'Tenka ID',
			'konfig' => $konfigurasi,
			'divisi'	=> $divisi,
            'galeri' => $galeri
		);
		$this->template->load('template_beranda','galeri', $data);
	}
}
