<?php

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$data['judul'] = "Hello Jauhar";
		$this->load->view('santri/templates/head', $data);
		$this->load->view('santri/templates/navbar');
		$this->load->view('santri/templates/header');
		$this->load->view('santri/templates/beranda');
		$this->load->view('santri/pendaftaran/home');
		$this->load->view('santri/templates/footer');
	}
}
