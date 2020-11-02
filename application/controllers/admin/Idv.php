<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Idv extends CI_Controller {
	
	// Load database
	public function __construct() 	{
		parent::__construct();
		$this->load->model('Idv_model');
		$this->log_user->add_log();
		// Tambahkan proteksi halaman
		$url_pengalihan = str_replace('index.php/', '', current_url());
		$pengalihan 	= $this->session->set_userdata('pengalihan',$url_pengalihan);
		// Ambil check login dari simple_login
		$this->simple_login->check_login($pengalihan);
	}
	
	// For homepage
	public function index() {
		// $data['news'] = $this->news_model->get_news();
		$data	= array(
						'title'	=> 'Manajemen Pendaftaran',
						'daftar'	=> $this->Idv_model->listing_idv(),
						'isi'	=> 'admin/idv/list'
		);
		$this->load->view('admin/layout/wrapper',$data);
	}

	// Proses
	public function proses()
	{
		$site = $this->konfigurasi_model->listing();
		// PROSES HAPUS MULTIPLE
		if(isset($_POST['hapus'])) {
			$inp 				= $this->input;
			$id_agendanya		= $inp->post('id_agenda');

   			for($i=0; $i < sizeof($id_agendanya);$i++) {
   				$agenda 	= $this->agenda_model->detail($id_agendanya[$i]);
   				if($agenda->gambar !='') {
					unlink('./assets/upload/file/'.$agenda->gambar);
				}
				$data = array(	'id_agenda'	=> $id_agendanya[$i]);
   				$this->agenda_model->delete($data);
   			}

   			$this->session->set_flashdata('sukses', 'Data telah dihapus');
   			redirect(base_url('admin/agenda'),'refresh');
   		// PROSES SETTING DRAFT
   		}
   	}
	
	// For add daftar
	public function tambah() {
		// Nambah daftar, check validasi
		$this->form_validation->set_rules('lembaga', 'Lembaga', 'required');
		$this->form_validation->set_rules('daftar_nama', 'Daftar Nama', 'required');
		$this->form_validation->set_rules('daftar_alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('daftar_telepon', 'Telepon', 'required');
		$this->form_validation->set_rules('daftar_email', 'Email', 'required');
		//narahubung
		$this->form_validation->set_rules('daftar_narahubung_nama', 'Narahubung Nama', 'required');
		$this->form_validation->set_rules('daftar_narahubung_jabatan', 'Narahubung Jabatan', 'required');
		$this->form_validation->set_rules('daftar_narahubung_telepon', 'Narahubung Telephone', 'required');
		$this->form_validation->set_rules('daftar_narahubung_email', 'Narahubung Email', 'required');
		$this->form_validation->set_rules('daftar_narahubung_handphone', 'Narahubung Handphone', 'required');
		//Bersedia / Tidak Bersedia menjadi Kolaborator Penyelenggara
		$this->form_validation->set_rules('daftar_bersedia_kolabolator', 'Bersedia Kolabolator', 'required');
		$this->form_validation->set_rules('daftar_Penyelenggara', 'Penyelenggara', 'required');
		//Bersedia / Tidak Bersedia menjadi narasumber
		$this->form_validation->set_rules('daftar_bersedia_narasumber', 'Bersedia Narasumber', 'required');
		$this->form_validation->set_rules('daftar_mataajar', 'Mata Ajar', 'required');
		//Bersedia / Tidak bersedia memobilisasi peserta untuk mengikuti kegiatan
		$this->form_validation->set_rules('daftar_memobilisasi', 'Daftar Memobilisasi', 'required');
		//Bersedia/Tidak Bersedia menjadi peserta untuk mengikuti kegiatan
		$this->form_validation->set_rules('daftar_peserta', 'peserta', 'required');
		if($this->form_validation->run() === FALSE) {
		$data	= array(
						'title'		=> 'Tambah daftar baru',
						'isi'		=> 'admin/daftar/tambah'
						);
		$this->load->view('admin/layout/wrapper',$data);
		}else{
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
		$this->session->set_flashdata('sukses','Data daftar berhasil ditambah');
		redirect(base_url().'admin/daftar');
	}}
	
	// Edit agenda
	public function edit($id_agenda) {
		$agenda = $this->agenda_model->listing_agenda($id_agenda);
		// Nambah agenda, check validasi
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('jenis_agenda', 'Jenis agenda', 'required');
		$this->form_validation->set_rules('panitia', 'Panitia', 'required');
		$this->form_validation->set_rules('tempat', 'Tempat', 'required');
		$this->form_validation->set_rules('mulai', 'Mulai', 'required');
		$this->form_validation->set_rules('selesai', 'Selesai', 'required');
		$this->form_validation->set_rules('ringkasan', 'Ringkasan', 'required');
		$this->form_validation->set_rules('isi', 'Isi', 'required');
		if($this->form_validation->run() === FALSE) {
		$data	= array(
						'title'		=> 'Edit data agenda',
						'agenda'		=> $agenda,
						'isi'		=> 'admin/agenda/edit'
						);
		$this->load->view('admin/layout/wrapper',$data);
		}else{
			 	$data = array(
						'id_agenda'		=> $this->input->post('id_agenda'),
						'nama'			=> $this->input->post('nama'),
						'jenis_agenda' 	=> $this->input->post('jenis_agenda'),
						'panitia'		=> $this->input->post('panitia'),
						'tempat'		=> $this->input->post('tempat'),									
						'mulai'			=> $this->input->post('mulai'),
						'selesai'		=> $this->input->post('selesai'),
						'ringkasan'		=> $this->input->post('ringkasan'),
						'isi'			=> $this->input->post('isi')
				);
		$this->agenda_model->edit($data);
		$this->session->set_flashdata('sukses','Data agenda berhasil diupdate');
		redirect(base_url().'admin/agenda');
	}}
	
	// daftar delete
	public function delete($id_idv) {
		$data = array('id_idv'	=> $id_idv);
		$this->Idv_model->delete($data);
		$this->session->set_flashdata('sukses','Data daftar berhasil dihapus');
		redirect(base_url().'admin/idv');
	}
	
}