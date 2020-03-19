<?php

class Akun extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$data['judul'] = "Akun";
		$this->load->view('santri/daftarTemplates/head', $data);
		$this->load->view('santri/daftarTemplates/header');
		$this->load->view('santri/pendaftaran/akun');
		$this->load->view('santri/daftarTemplates/footer');
	}
}
