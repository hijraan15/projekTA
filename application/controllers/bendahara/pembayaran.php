<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembayaran extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_pembayaranBendahara');
		$this->load->library('form_validation');
		$this->load->helper('url', 'html');
	}
	public function index()
	{
		$data['dataPembayaran'] = $this->m_pembayaranBendahara->dataPembayaranBendahara();
		$this->load->view('bendahara/pembayaran',  $data);
	}
}
