<?php
class Matem extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('m_matem'));
		$this->load->library('form_validation');
		$this->load->helper('url', 'html');
	}

	public function index()
	{
		$data['dataMatem'] = $this->m_matem->dataMatem();
		$data['santri'] = $this->m_matem->get_santri();
		$this->load->view('admin/datanilai/matem/index',  $data);
	}

	public function insertMatem()
	{
		$this->form_validation->set_rules('nama_santri', 'Nama Panitia', 'required');
		$this->form_validation->set_rules('nilai_matem', 'Nilai Matem', 'required');
		$this->form_validation->set_rules('ket', 'Keterangan', 'required');
		$this->form_validation->set_error_delimiters('<span class="text-error">', '</span>');

		if ($this->form_validation->run()) {
			$nama_santri 					= $this->input->post('nama_santri');
			$nilai_matem 					= $this->input->post('nilai_matem');
			$ket 									= $this->input->post('ket');

			$matem = array(
				'fk_id_santri' 				=> $nama_santri,
				'nilai_matem' 					=> $nilai_matem,
				'ket' 								=> $ket,
			);
			$data = array_merge($matem); //gabungkan datanya
			if ($this->m_matem->tambahMatem($data) == false) {
				$this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan');
				redirect('admin/matem');
			} else {
				$this->index();
			}
		} else {
			$this->index();
		}
	}
	public function editMatem($id_matem)
	{
		$data = $this->m_matem->AmbilDataMatem($id_matem);
		$santri = $this->m_matem->get_santri();
		$this->load->view('admin/datanilai/matem/editMatem', ['data' => $data, 'santri' => $santri]);
	}
	public function UpdateMatem()
	{
		$this->form_validation->set_rules('nama_santri', 'Nama Santri', 'required');
		$this->form_validation->set_rules('nilai_matem', 'Nilai Matem', 'required');
		$this->form_validation->set_rules('ket', 'Keterangan', 'required');
		$this->form_validation->set_error_delimiters('<span class="text-error">', '</span>');

		if ($this->form_validation->run()) {
			$id_santri 			= $this->input->post('nama_santri');
			$nilai_matem 			= $this->input->post('nilai_matem');
			$ket 							= $this->input->post('ket');

			$matem = ([
				'fk_id_santri' => $id_santri,
				'nilai_matem' => $nilai_matem,
				'ket' => $ket,
			]);
			$data = array_merge($matem); //gabungkan datanya ok
			if ($this->m_matem->editMatem($data, $this->input->post('id_matem')) == false) {
				$this->session->set_flashdata('edit_matem', 'Data berhasil diubah');
			} else {
				$this->index();
			}
			redirect('admin/matem', 'refresh');
		} else {
			$this->index();
		}
	}
	public function deleteMatem($id_matem)
	{
		if ($this->m_matem->deleteMatem($id_matem) == false) {
			$this->session->set_flashdata('hapus_matem', 'Data berhasil dihapus');
		}

		redirect('admin/matem', 'refresh');
	}
}
