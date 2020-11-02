<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form2 extends CI_Controller
{

	// Database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Idv_model');
		$this->load->model('berita_model');
		$this->load->model('kategori_model');
	}

	// Main page form
	public function index()
	{
		$site 		= $this->konfigurasi_model->listing();
		$populer	= $this->berita_model->populer();
		

		$data = array(
			'title'		=> 'form ' . $site->namaweb . ' | ' . $site->tagline,
			'deskripsi'	=> 'form ' . $site->namaweb . ' | ' . $site->tagline . ' ' . $site->tentang,
			'keywords'	=> 'form ' . $site->namaweb . ' | ' . $site->tagline . ' ' . $site->keywords,
			'site'		=> $site,
			'populer'	=> $populer,
			'isi'		=> 'form2/list'
		);
		$this->load->view('layout/wrapper', $data, FALSE);
		$this->load->library('form_validation');
	}

	public function tambah()
	{
		// Nambah daftar, check validasi
		$this->form_validation->set_rules('nama_idv', 'Nama', 'required');
		$this->form_validation->set_rules('jabatan_idv', 'Jabatan', 'required');
		$this->form_validation->set_rules('email_idv', 'Email', 'required');
		$this->form_validation->set_rules('no_idv', 'Hanphone', 'required');
		$this->form_validation->set_rules('alamat_idv', 'Alamat', 'required');
		if ($this->form_validation->run() === FALSE) {
			$site 			= $this->konfigurasi_model->listing();
		$populer	= $this->berita_model->populer();
			$data	= array(

				'populer'	=> $populer,
				'title'		=> 'Pendaftaran',
				'isi'		=> 'form2/list'
			);
			$this->load->view('layout/wrapper', $data);
		} else {
			$data = array(
				'nama_idv'			=> $this->input->post('nama_idv'),
				'jabatan_idv' 		=> $this->input->post('jabatan_idv'),
				'email_idv'			=> $this->input->post('email_idv'),
				'no_idv'			=> $this->input->post('no_idv'),
				'alamat_idv'		=> $this->input->post('alamat_idv'),
			);
			$this->Idv_model->tambah($data);
			$this->session->set_flashdata('sukses', 'Data daftar berhasil ditambah');
			redirect(base_url() . 'sukses');
		}
	}
}

/* End of file Contact.php */
/* Location: ./application/controllers/form.php */