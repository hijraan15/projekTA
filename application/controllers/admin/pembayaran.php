<?php
class Pembayaran extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('m_pembayaran'));
		$this->load->library('form_validation');
		$this->load->helper('url', 'html');
	}

	public function index()
	{
		$data['dataPembayaran'] = $this->m_pembayaran->dataPembayaran();
		$data['santri'] = $this->m_pembayaran->get_pembayaran();
		$this->load->view('admin/datapembayaran/pembayaran',  $data);
	}

	public function insertPembayaran()
	{

		$this->form_validation->set_rules('nama_santri', 'Nama Panitia', 'required');
		$this->form_validation->set_rules('alamat_rumah', 'Alamat Rumah', 'required');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('program_yang_dituju', 'Program Yang Dituju', 'required');
		$this->form_validation->set_rules('status_santri', 'Status Santri', 'required');
		$this->form_validation->set_rules('uang_pendaftaran', 'Uang Pendaftaran', 'required');
		$this->form_validation->set_rules('ket', 'Keterangan', 'required');
		$this->form_validation->set_error_delimiters('<span class="text-error">', '</span>');

		if ($this->form_validation->run()) {
			$nama_santri 					= $this->input->post('nama_santri');
			$alamat_rumah 				= $this->input->post('alamat_rumah');
			$jenis_kelamin 				= $this->input->post('jenis_kelamin');
			$program_yang_dituju 	= $this->input->post('program_yang_dituju');
			$status_santri 				= $this->input->post('status_santri');
			$uang_pendaftaran 		= $this->input->post('uang_pendaftaran');
			$ket 									= $this->input->post('ket');

			$pembayaran = array(
				'fk_id_santri' 				=> $nama_santri,
				'fk_id_santri' 				=> $alamat_rumah,
				'fk_id_santri' 				=> $jenis_kelamin,
				'fk_id_santri' 				=> $program_yang_dituju,
				'fk_id_santri' 				=> $status_santri,
				'uang_pendaftaran' 		=> $uang_pendaftaran,
				'ket' 								=> $ket,
			);
			$data = array_merge($pembayaran); //gabungkan datanya
			if ($this->m_pembayaran->tambahPembayaran($data) == false) {
				$this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan');
				redirect('admin/pembayaran');
			} else {
				$this->index();
			}
		} else {
			$this->index();
		}
	}
	public function editPembayaran($id_transaksi)
	{
		$data = $this->m_pembayaran->AmbilDataPembayaran($id_transaksi);
		$santri = $this->m_pembayaran->get_pembayaran();
		$this->load->view('admin/datapembayaran/editPembayaran', ['data' => $data, 'santri' => $santri]);
	}
	public function UpdatePembayaran()
	{
		$this->form_validation->set_rules('nama_santri', 'Nama Santri', 'required');
		$this->form_validation->set_rules('alamat_rumah', 'Daerah', 'required');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('program_yang_dituju', 'Program Yang Dituju', 'required');
		$this->form_validation->set_rules('status_santri', 'Status Santri', 'required');
		$this->form_validation->set_rules('uang_pendaftaran', 'Uang Pendaftaran', 'required');
		$this->form_validation->set_rules('ket', 'Keterangan', 'required');
		$this->form_validation->set_error_delimiters('<span class="text-error">', '</span>');

		if ($this->form_validation->run()) {
			$nama_santri 								= $this->input->post('nama_santri');
			$alamat_rumah 								= $this->input->post('alamat_rumah');
			$jenis_kelamin 								= $this->input->post('jenis_kelamin');
			$program_yang_dituju 								= $this->input->post('program_yang_dituju');
			$status_santri 								= $this->input->post('status_santri');
			$uang_pendaftaran 				= $this->input->post('uang_pendaftaran');
			$ket 											= $this->input->post('ket');

			$pembayaran = ([
				'fk_id_santri' 				=> $nama_santri,
				'fk_id_santri' 				=> $alamat_rumah,
				'fk_id_santri' 				=> $jenis_kelamin,
				'fk_id_santri' 				=> $program_yang_dituju,
				'fk_id_santri' 				=> $status_santri,
				'uang_pendaftaran' 		=> $uang_pendaftaran,
				'ket' 								=> $ket,
			]);
			$data = array_merge($pembayaran); //gabungkan datanya ok
			if ($this->m_pembayaran->editPembayaran($data, $this->input->post('id_transaksi')) == false) {
				$this->session->set_flashdata('edit_pembayaran', 'Data berhasil diubah');
			} else {
				$this->index();
			}
			redirect('admin/pembayaran', 'refresh');
		} else {
			$this->index();
		}
	}
	public function deletePembayaran($id_transaksi)
	{
		if ($this->m_pembayaran->deletePembayaran($id_transaksi) == false) {
			$this->session->set_flashdata('hapus_pembayaran', 'Data berhasil dihapus');
		}

		redirect('admin/pembayaran', 'refresh');
	}
}
