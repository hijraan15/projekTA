<?php

class Konfirmasi extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$data['judul'] = "Konfirmasi";
		$this->load->view('santri/daftarTemplates/head', $data);
		$this->load->view('santri/daftarTemplates/header');
		$this->load->view('santri/pendaftaran/konfirmasi');
		$this->load->view('santri/daftarTemplates/footer');
	}
}
