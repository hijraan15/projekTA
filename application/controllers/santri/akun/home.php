<?php

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// $this->load->model("m_usersAdmin");
		// if ($this->m_usersAdmin->isNotLogin()) redirect(site_url('admin/loginAdmin'));
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('santri/akun/home');
	}
}
