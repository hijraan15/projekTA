<?php

class CetakBukti extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$data['judul'] = "Ketentuan";
		$this->load->view('santri/akunTemplates/head', $data);
		$this->load->view('santri/akunTemplates/header');
		$this->load->view('santri/akun/cetakBukti');
		$this->load->view('santri/akunTemplates/footer');
	}
}
