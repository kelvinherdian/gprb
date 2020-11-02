<?php
defined('BASEPATH') or exit('No direct script access allowed');

class sukses extends CI_Controller
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

		$data = array(
			'title'		=> ' ' . $site->namaweb . ' | ' . $site->tagline,
			'deskripsi'	=> 'form ' . $site->namaweb . ' | ' . $site->tagline . ' ' . $site->tentang,
			'keywords'	=> 'form ' . $site->namaweb . ' | ' . $site->tagline . ' ' . $site->keywords,
			'site'		=> $site,
			'isi'		=> 'sukses'
		);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

}

/* End of file Contact.php */
/* Location: ./application/controllers/form.php */