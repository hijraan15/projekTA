<?php
class Iqro extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('m_iqro'));
		$this->load->library('form_validation');
		$this->load->helper('url', 'html');
	}

	public function index()
	{
		$data['dataIqro'] = $this->m_iqro->dataIqro();
		$data['santri'] = $this->m_iqro->get_santri();
		$this->load->view('admin/datanilai/iqro/index',  $data);
	}

	public function insertIqro()
	{
		$this->form_validation->set_rules('nama_santri', 'Nama Panitia', 'required');
		$this->form_validation->set_rules('nilai_iqro', 'Nilai Iqro', 'required');
		$this->form_validation->set_rules('ket', 'Keterangan', 'required');
		$this->form_validation->set_error_delimiters('<span class="text-error">', '</span>');

		if ($this->form_validation->run()) {
			$nama_santri 					= $this->input->post('nama_santri');
			$nilai_iqro 					= $this->input->post('nilai_iqro');
			$ket 									= $this->input->post('ket');

			$iqro = array(
				'fk_id_santri' 				=> $nama_santri,
				'nilai_iqro' 					=> $nilai_iqro,
				'ket' 								=> $ket,
			);
			$data = array_merge($iqro); //gabungkan datanya
			if ($this->m_iqro->tambahIqro($data) == false) {
				$this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan');
				redirect('admin/iqro');
			} else {
				$this->index();
			}
		} else {
			$this->index();
		}
	}
	public function editIqro($id_iqro)
	{
		$data = $this->m_iqro->AmbilDataIqro($id_iqro);
		$santri = $this->m_iqro->get_santri();
		$this->load->view('admin/datanilai/iqro/editIqro', ['data' => $data, 'santri' => $santri]);
	}
	public function UpdateIqro()
	{
		$this->form_validation->set_rules('nama_santri', 'Nama Santri', 'required');
		$this->form_validation->set_rules('nilai_iqro', 'Nilai Iqro', 'required');
		$this->form_validation->set_rules('ket', 'Keterangan', 'required');
		$this->form_validation->set_error_delimiters('<span class="text-error">', '</span>');

		if ($this->form_validation->run()) {
			$id_santri 			= $this->input->post('nama_santri');
			$nilai_iqro 			= $this->input->post('nilai_iqro');
			$ket 							= $this->input->post('ket');

			$iqro = ([
				'fk_id_santri' => $id_santri,
				'nilai_iqro' => $nilai_iqro,
				'ket' => $ket,
			]);
			$data = array_merge($iqro); //gabungkan datanya ok
			if ($this->m_iqro->editIqro($data, $this->input->post('id_iqro')) == false) {
				$this->session->set_flashdata('edit_iqro', 'Data berhasil diubah');
			} else {
				$this->index();
			}
			redirect('admin/iqro', 'refresh');
		} else {
			$this->index();
		}
	}
	public function deleteIqro($id_iqro)
	{
		if ($this->m_iqro->deleteIqro($id_iqro) == false) {
			$this->session->set_flashdata('hapus_iqro', 'Data berhasil dihapus');
		}

		redirect('admin/iqro', 'refresh');
	}
}
