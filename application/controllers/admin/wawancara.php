<?php
class Wawancara extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('m_wawancara'));
		$this->load->library('form_validation');
		$this->load->helper('url', 'html');
	}

	public function index()
	{
		$data['dataWawancara'] = $this->m_wawancara->dataWawancara();
		$data['santri'] = $this->m_wawancara->get_santri();
		$this->load->view('admin/datanilai/wawancara/index',  $data);
	}

	public function insertWawancara()
	{
		$this->form_validation->set_rules('nama_santri', 'Nama Panitia', 'required');
		$this->form_validation->set_rules('hasil_wawancara', 'Hasil Wawancara', 'required');
		$this->form_validation->set_error_delimiters('<span class="text-error">', '</span>');

		if ($this->form_validation->run()) {
			$nama_santri 					= $this->input->post('nama_santri');
			$hasil_wawancara 					= $this->input->post('hasil_wawancara');

			$wawancara = array(
				'fk_id_santri' 				=> $nama_santri,
				'hasil_wawancara' 					=> $hasil_wawancara,
			);
			$data = array_merge($wawancara); //gabungkan datanya
			if ($this->m_wawancara->tambahWawancara($data) == false) {
				$this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan');
				redirect('admin/wawancara');
			} else {
				$this->index();
			}
		} else {
			$this->index();
		}
	}
	public function editWawancara($id_wawancara)
	{
		$data = $this->m_wawancara->AmbilDataWawancara($id_wawancara);
		$santri = $this->m_wawancara->get_santri();
		$this->load->view('admin/datanilai/wawancara/editWawancara', ['data' => $data, 'santri' => $santri]);
	}
	public function UpdateWawancara()
	{
		$this->form_validation->set_rules('nama_santri', 'Nama Santri', 'required');
		$this->form_validation->set_rules('hasil_wawancara', 'Hasil Wawancara', 'required');
		$this->form_validation->set_error_delimiters('<span class="text-error">', '</span>');

		if ($this->form_validation->run()) {
			$id_santri 			= $this->input->post('nama_santri');
			$hasil_wawancara 			= $this->input->post('hasil_wawancara');

			$wawancara = ([
				'fk_id_santri' => $id_santri,
				'hasil_wawancara' => $hasil_wawancara,
			]);
			$data = array_merge($wawancara); //gabungkan datanya ok
			if ($this->m_wawancara->editWawancara($data, $this->input->post('id_wawancara')) == false) {
				$this->session->set_flashdata('edit_wawancara', 'Data berhasil diubah');
			} else {
				$this->index();
			}
			redirect('admin/wawancara', 'refresh');
		} else {
			$this->index();
		}
	}
	public function deleteWawancara($id_wawancara)
	{
		if ($this->m_wawancara->deleteWawancara($id_wawancara) == false) {
			$this->session->set_flashdata('hapus_wawancara', 'Data berhasil dihapus');
		}

		redirect('admin/wawancara', 'refresh');
	}
}
