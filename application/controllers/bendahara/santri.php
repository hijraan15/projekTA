<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Santri extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_santriBendahara');
		$this->load->library('form_validation');
		$this->load->helper('url', 'html');
	}
	public function index()
	{
		$data = $this->m_santriBendahara->dataSantriBendahara();
		$this->load->view('bendahara/santri', ['data' => $data]);
	}

	public function tambahPembayaran($id_santri)
	{
		$data = $this->m_santriBendahara->AmbilDataSantri($id_santri);
		$this->load->view('bendahara/tambahPembayaran', ['data' => $data]);
	}
	public function UpdatePembayaran()
	{
		$this->form_validation->set_rules('nama_santri', 'Nama Santri', 'required');
		$this->form_validation->set_rules('alamat_rumah', 'Daerah', 'required');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('program_yang_dituju', 'Program', 'required');
		$this->form_validation->set_rules('status_santri', 'Status Santri', 'required');
		$this->form_validation->set_rules('bukti_pembayaran', 'Bukti Pembayaran', 'required');
		$this->form_validation->set_error_delimiters('<span class="text-error">', '</span>');

		if ($this->form_validation->run()) {
			$nama_santri = $this->input->post('nama_santri');
			$alamat_rumah = $this->input->post('alamat_rumah');
			$jenis_kelamin = $this->input->post('jenis_kelamin');
			$program_yang_dituju = $this->input->post('program_yang_dituju');
			$status_santri = $this->input->post('status_santri');
			$bukti_pembayaran = $this->input->post('bukti_pembayaran');

			$santri = ([
				'nama_santri' => $nama_santri,
				'alamat_rumah' => $alamat_rumah,
				'jenis_kelamin' => $jenis_kelamin,
				'program_yang_dituju' => $program_yang_dituju,
				'status_santri' => $status_santri,
			]);
			$data = array_merge($santri); //gabungkan datanya ok
			if ($this->m_santriBendahara->tambahPembayaran($data, $this->input->post('id_santri')) == false) {
				$this->session->set_flashdata('tambah_pembayaran', 'Pembayaran Berhasil Ditambah');
			} else {
				$this->index();
			}
			redirect('bendahara/pembayaran', 'refresh');
		} else {
			$this->index();
		}
	}
}
