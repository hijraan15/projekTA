<?php

class Ketentuan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$data['judul'] = "Ketentuan";
		$this->load->view('santri/daftarTemplates/head', $data);
		$this->load->view('santri/daftarTemplates/header');
		$this->load->view('santri/pendaftaran/ketentuan');
		$this->load->view('santri/daftarTemplates/footer');
	}
}
