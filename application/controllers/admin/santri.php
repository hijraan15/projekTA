<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Santri extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_santri');
		$this->load->library('form_validation');
		$this->load->helper('url', 'html');
	}
	public function index()
	{
		$data = $this->m_santri->dataSantri();
		$this->load->view('admin/datasantri/santri', ['data' => $data]);
	}
	public function insertSantri()
	{
		$this->form_validation->set_rules('nama_santri', 'Nama Santri', 'required');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('status_santri', 'Status Santri', 'required');
		$this->form_validation->set_rules('alamat_rumah', 'Alamat Rumah', 'required');
		$this->form_validation->set_rules('program_yang_dituju', 'Program', 'required');
		$this->form_validation->set_error_delimiters('<span class="text-error">', '</span>');

		if ($this->form_validation->run()) {
			$nama_santri = $this->input->post('nama_santri');
			$jenis_kelamin = $this->input->post('jenis_kelamin');
			$status_santri = $this->input->post('status_santri');
			$alamat_rumah = $this->input->post('alamat_rumah');
			$program_yang_dituju = $this->input->post('program_yang_dituju');

			$santri = ([
				'nama_santri' => $nama_santri,
				'jenis_kelamin' => $jenis_kelamin,
				'status_santri' => $status_santri,
				'alamat_rumah' => $alamat_rumah,
				'program_yang_dituju' => $program_yang_dituju
			]);
			$data = array_merge($santri); //gabungkan datanya ok
			if ($this->m_santri->tambahSantri($data) == false) {
				$this->session->set_flashdata('pesan', 'Data berhasil ditambah');
				redirect('admin/santri', 'refresh');
			} else {
				$this->index();
			}
		} else {
			$this->index();
		}
	}
	public function editSantri($id_santri)
	{
		$data = $this->m_santri->AmbilDataSantri($id_santri);
		$this->load->view('admin/datasantri/editSantri', ['data' => $data]);
	}
	public function UpdateSantri()
	{
		$this->form_validation->set_rules('nama_santri', 'Nama Santri', 'required');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('status_santri', 'Status Santri', 'required');
		$this->form_validation->set_rules('alamat_rumah', 'Alamat Rumah', 'required');
		$this->form_validation->set_rules('program_yang_dituju', 'Program', 'required');
		$this->form_validation->set_error_delimiters('<span class="text-error">', '</span>');

		if ($this->form_validation->run()) {
			$nama_santri = $this->input->post('nama_santri');
			$jenis_kelamin = $this->input->post('jenis_kelamin');
			$status_santri = $this->input->post('status_santri');
			$alamat_rumah = $this->input->post('alamat_rumah');
			$program_yang_dituju = $this->input->post('program_yang_dituju');

			$santri = ([
				'nama_santri' => $nama_santri,
				'jenis_kelamin' => $jenis_kelamin,
				'status_santri' => $status_santri,
				'alamat_rumah' => $alamat_rumah,
				'program_yang_dituju' => $program_yang_dituju
			]);
			$data = array_merge($santri); //gabungkan datanya ok
			if ($this->m_santri->editSantri($data, $this->input->post('id_santri')) == false) {
				$this->session->set_flashdata('edit_santri', 'Data berhasil diubah');
			} else {
				$this->index();
			}
			redirect('admin/santri', 'refresh');
		} else {
			$this->index();
		}
	}
	public function deleteSantri($id_santri)
	{
		if ($this->m_santri->deleteSantri($id_santri) == false) {
			$this->session->set_flashdata('hapus_santri', 'Data berhasil dihapus');
		}

		redirect('admin/santri', 'refresh');
	}
}
