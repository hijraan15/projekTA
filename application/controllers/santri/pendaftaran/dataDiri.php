<?php

class DataDiri extends CI_Controller
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
		$data['judul'] = "Data Diri";
		$this->load->view('santri/daftarTemplates/head', $data);
		$this->load->view('santri/daftarTemplates/header');
		$this->load->view('santri/pendaftaran/dataDiri');
		$this->load->view('santri/daftarTemplates/footer');
		$data = $this->m_pendaftaranSantri->dataDiri();
	}
	public function insertdataDiri()
	{
		$this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required');
		$this->form_validation->set_rules('nama_panggilan', 'Nama Panggilan', 'required');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('agama', 'Agama', 'required');
		$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
		$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('anak_ke', 'Anak ke', 'required');
		$this->form_validation->set_rules('status_santri', 'Status Santri', 'required');
		$this->form_validation->set_rules('alamat_rumah', 'Alamat Rumah', 'required');
		$this->form_validation->set_rules('asal_sekolah', 'Asal Sekolah', 'required');
		$this->form_validation->set_rules('alamat_asal_sekolah', 'Alamat Asal Sekolah', 'required');
		$this->form_validation->set_rules('pengalaman_belajar', 'Pengalaman Belajar', 'required');
		$this->form_validation->set_rules('program_yang_dituju', 'Program Yang Dituju', 'required');
		$this->form_validation->set_error_delimiters('<span class="text-error">', '</span>');

		if ($this->form_validation->run()) {
			$nama_lengkap 					= $this->input->post('nama_lengkap');
			$nama_panggilan 				= $this->input->post('nama_panggilan');
			$jenis_kelamin 					= $this->input->post('jenis_kelamin');
			$agama 									= $this->input->post('agama');
			$tempat_lahir 					= $this->input->post('tempat_lahir');
			$tanggal_lahir 					= $this->input->post('tanggal_lahir');
			$anak_ke 								= $this->input->post('anak_ke');
			$status_santri 					= $this->input->post('status_santri');
			$alamat_rumah 					= $this->input->post('alamat_rumah');
			$asal_sekolah 					= $this->input->post('asal_sekolah');
			$alamat_asal_sekolah 		= $this->input->post('alamat_asal_sekolah');
			$pengalaman_belajar 		= $this->input->post('pengalaman_belajar');
			$program_yang_dituju 		= $this->input->post('program_yang_dituju');

			$santri = ([
				'nama_lengkap' 				=> $nama_lengkap,
				'nama_panggilan' 			=> $nama_panggilan,
				'jenis_kelamin' 			=> $jenis_kelamin,
				'agama' 							=> $agama,
				'tempat_lahir' 				=> $tempat_lahir,
				'tanggal_lahir' 			=> $tanggal_lahir,
				'anak_ke' 						=> $anak_ke,
				'status_santri' 			=> $status_santri,
				'alamat_rumah' 				=> $alamat_rumah,
				'asal_sekolah' 				=> $asal_sekolah,
				'alamat_asal_sekolah' => $alamat_asal_sekolah,
				'pengalaman_belajar' 	=> $pengalaman_belajar,
				'program_yang_dituju' => $program_yang_dituju,
			]);
			$data = array_merge($santri); //gabungkan datanya ok
			if ($this->m_pendaftaranSantri->pendaftaran($data) == false) {
				$this->session->set_flashdata('pesan', 'Data berhasil ditambah');
				redirect('santri/pendaftaran/dataDiri', 'refresh');
			} else {
				$this->index();
			}
		} else {
			$this->index();
		}
	}
}
