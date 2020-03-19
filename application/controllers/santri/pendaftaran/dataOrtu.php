<?php

class DataOrtu extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_pendaftaranSantri');
		$this->load->library('form_validation');
		$this->load->helper('url', 'html');
	}

	public function index()
	{
		$data['judul'] = "Data Orang Tua";
		$this->load->view('santri/daftarTemplates/head', $data);
		$this->load->view('santri/daftarTemplates/header');
		$this->load->view('santri/pendaftaran/dataOrtu');
		$this->load->view('santri/daftarTemplates/footer');
		$data = $this->m_pendaftaranSantri->dataDiri();
	}
	public function insertdataOrtu()
	{
		$this->form_validation->set_rules('nama_ayah', 'Nama Ayah', 'required');
		$this->form_validation->set_rules('pekerjaan_ayah', 'Pekerjaan Ayah', 'required');
		$this->form_validation->set_rules('hp_ayah', 'Nomor HP', 'required');
		$this->form_validation->set_rules('alamat_ayah', 'Alamat', 'required');
		$this->form_validation->set_rules('nama_ibu', 'Nama Ibu', 'required');
		$this->form_validation->set_rules('pekerjaan_ibu', 'Pekerjaan Ibu', 'required');
		$this->form_validation->set_rules('hp_ibu', 'Nomor HP', 'required');
		$this->form_validation->set_rules('alamat_ibu', 'Alamat', 'required');


		if ($this->form_validation->run()) {
			$nama_ayah 							= $this->input->post('nama_ayah');
			$pekerjaan_ayah 				= $this->input->post('pekerjaan_ayah');
			$hp_ayah 								= $this->input->post('hp_ayah');
			$alamat_ayah 						= $this->input->post('alamat_ayah');
			$nama_ibu 							= $this->input->post('nama_ibu');
			$pekerjaan_ibu 					= $this->input->post('pekerjaan_ibu');
			$hp_ibu 								= $this->input->post('hp_ibu');
			$alamat_ibu 						= $this->input->post('alamat_ibu');
			$nama_wali 							= $this->input->post('nama_wali');
			$pekerjaan_wali 				= $this->input->post('pekerjaan_wali');
			$hp_wali 								= $this->input->post('hp_wali');
			$alamat_wali 						= $this->input->post('alamat_wali');

			$santri = ([
				'nama_ayah' 					=> $nama_ayah,
				'pekerjaan_ayah' 			=> $pekerjaan_ayah,
				'hp_ayah' 						=> $hp_ayah,
				'alamat_ayah' 				=> $alamat_ayah,
				'nama_ibu' 						=> $nama_ibu,
				'pekerjaan_ibu' 			=> $pekerjaan_ibu,
				'hp_ibu' 							=> $hp_ibu,
				'alamat_ibu' 					=> $alamat_ibu,
				'nama_wali' 					=> $nama_wali,
				'pekerjaan_wali' 			=> $pekerjaan_wali,
				'hp_wali' 						=> $hp_wali,
				'alamat_wali' 				=> $alamat_wali,
			]);
			$data = array_merge($santri); //gabungkan datanya ok
			if ($this->m_pendaftaranSantri->pendaftaran($data) == false) {
				$this->session->set_flashdata('pesan', 'Data berhasil ditambah');
				redirect('santri/pendaftaran/dataOrtu', 'refresh');
			} else {
				$this->index();
			}
		} else {
			$this->index();
		}
	}
	public function insertDataWali()
	{
		$this->form_validation->set_rules('nama_wali', 'Nama Wali', 'required');
		$this->form_validation->set_rules('pekerjaan_wali', 'Pekerjaan', 'required');
		$this->form_validation->set_rules('hp_wali', 'Nomor HP', 'required');
		$this->form_validation->set_rules('alamat_wali', 'Alamat', 'required');

		if ($this->form_validation->run()) {
			$nama_wali 							= $this->input->post('nama_wali');
			$pekerjaan_wali 				= $this->input->post('pekerjaan_wali');
			$hp_wali 								= $this->input->post('hp_wali');
			$alamat_wali 						= $this->input->post('alamat_wali');

			$santri = ([
				'nama_wali' 					=> $nama_wali,
				'pekerjaan_wali' 			=> $pekerjaan_wali,
				'hp_wali' 						=> $hp_wali,
				'alamat_wali' 				=> $alamat_wali,
			]);
			$data = array_merge($santri); //gabungkan datanya ok
			if ($this->m_pendaftaranSantri->pendaftaran($data) == false) {
				$this->session->set_flashdata('pesan', 'Data berhasil ditambah');
				redirect('santri/pendaftaran/dataOrtu', 'refresh');
			} else {
				$this->index();
			}
		} else {
			$this->index();
		}
	}
}
