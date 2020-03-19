<?php

class Persyaratan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_filePersyaratan');
	}
	public function index()
	{
		$data['judul'] = "Persyaratan";
		$data['persyaratan'] = $this->m_filePersyaratan->get();
		$this->load->view('santri/daftarTemplates/head', $data);
		$this->load->view('santri/daftarTemplates/header');
		$this->load->view('santri/pendaftaran/persyaratan');
		$this->load->view('santri/daftarTemplates/footer');

		// $data = array();
		// //get files from database
		// $data['files'] = $this->m_filePersyaratan->get_id();
		// //load the view
		// $this->load->view('santri/pendaftaran/persyaratan', $data);
	}
	public function download($id)
	{

		if (!empty($id)) {
			$this->load->helper('file');
			$this->load->helper('download');
			$file = $this->m_filePersyaratan->get_id($id);
			$data = base_url() . 'uploads/files/' . $file->file_name;
			force_download($data, NULL);
		}
	}
}
