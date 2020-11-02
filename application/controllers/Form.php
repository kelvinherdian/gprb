<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form extends CI_Controller
{

	// Database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('daftar_model');
		$this->load->model('berita_model');
		$this->load->model('kategori_model');
	}

	// Main page form
	public function index()
	{
		$site 			= $this->konfigurasi_model->listing();
		$populer	= $this->berita_model->populer();
		

		$data = array(
			'title'		=> 'form ' . $site->namaweb . ' | ' . $site->tagline,
			'deskripsi'	=> 'form ' . $site->namaweb . ' | ' . $site->tagline . ' ' . $site->tentang,
			'keywords'	=> 'form ' . $site->namaweb . ' | ' . $site->tagline . ' ' . $site->keywords,
			'site'		=> $site,
			'populer'	=> $populer,
			'isi'		=> 'form/list'
		);
		$this->load->view('layout/wrapper', $data, FALSE);
		$this->load->library('form_validation');
	}

	public function tambah()
	{
		// Nambah daftar, check validasi
		$this->form_validation->set_rules('lembaga', 'Lembaga', 'required');
		$this->form_validation->set_rules('daftar_nama', 'Daftar Nama', 'required');
		$this->form_validation->set_rules('daftar_alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('daftar_telepon', 'Telepon', 'required');
		$this->form_validation->set_rules('daftar_email', 'Email', 'required');
		//narahubung
		$this->form_validation->set_rules('daftar_narahubung_nama', 'Narahubung Nama', 'required');
		$this->form_validation->set_rules('daftar_narahubung_jabatan', 'Narahubung Jabatan', 'required');
		$this->form_validation->set_rules('daftar_narahubung_email', 'Narahubung Email', 'required');
		$this->form_validation->set_rules('daftar_narahubung_handphone', 'Narahubung Handphone', 'required');
		if ($this->form_validation->run() === FALSE) {
			$site 			= $this->konfigurasi_model->listing();
		$populer	= $this->berita_model->populer();
			$data	= array(

				'populer'	=> $populer,
				'title'		=> 'Pendaftaran',
				'isi'		=> 'form/list'
			);
			$this->load->view('layout/wrapper', $data);
		} else {
			$data = array(
				'lembaga'			=> $this->input->post('lembaga'),
				'daftar_nama' 		=> $this->input->post('daftar_nama'),
				'daftar_alamat'		=> $this->input->post('daftar_alamat'),
				'daftar_telepon'	=> $this->input->post('daftar_telepon'),
				'daftar_email'		=> $this->input->post('daftar_email'),
				'daftar_website'	=> $this->input->post('daftar_website'),
				'daftar_twitter'	=> $this->input->post('daftar_twitter'),
				'daftar_instagram'	=> $this->input->post('daftar_instagram'),
				//narahubung
				'daftar_narahubung_nama'		=> $this->input->post('daftar_narahubung_nama'),
				'daftar_narahubung_jabatan'		=> $this->input->post('daftar_narahubung_jabatan'),
				'daftar_narahubung_telepon'		=> $this->input->post('daftar_narahubung_telepon'),
				'daftar_narahubung_email'		=> $this->input->post('daftar_narahubung_email'),
				'daftar_narahubung_handphone'	=> $this->input->post('daftar_narahubung_handphone'),
				//Bersedia / Tidak Bersedia menjadi Kolaborator Penyelenggara
				'daftar_bersedia_kolabolator'	=> $this->input->post('daftar_bersedia_kolabolator'),
				'daftar_Penyelenggara'			=> $this->input->post('daftar_Penyelenggara'),
				//Bersedia / Tidak Bersedia menjadi narasumber 
				'daftar_bersedia_narasumber'	=> $this->input->post('daftar_bersedia_narasumber'),
				'daftar_mataajar'				=> $this->input->post('daftar_mataajar'),
				//Bersedia / Tidak bersedia memobilisasi peserta untuk mengikuti kegiatan
				'daftar_memobilisasi'			=> $this->input->post('daftar_memobilisasi'),
				//Bersedia/Tidak Bersedia menjadi peserta untuk mengikuti kegiatan
				'daftar_peserta'				=> $this->input->post('daftar_peserta')

			);
			$this->daftar_model->tambah($data);
			$this->session->set_flashdata('sukses', 'Data daftar berhasil ditambah');
			redirect(base_url() . 'sukses');
		}
	}
}

/* End of file Contact.php */
/* Location: ./application/controllers/form.php */