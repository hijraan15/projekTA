<?php
class Panitia extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('m_panitia'));
		$this->load->library('form_validation');
		$this->load->helper('url', 'html');
	}

	public function index()
	{
		$data['dataPanitia'] = $this->m_panitia->dataPanitia();
		$data['role'] = $this->m_panitia->get_role();
		$this->load->view('admin/datapanitia/panitia',  $data);
	}

	public function insertPanitia()
	{
		$this->form_validation->set_rules('nama_panitia', 'Nama Panitia', 'required');
		$this->form_validation->set_rules('nama_role', 'Nama Role', 'required');
		$this->form_validation->set_rules('ruangan', 'Ruangan', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		// $this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_error_delimiters('<span class="text-error">', '</span>');

		if ($this->form_validation->run()) {
			$nama_panitia = $this->input->post('nama_panitia');
			$nama_role 		= $this->input->post('nama_role');
			$ruangan 			= $this->input->post('ruangan');
			$username 		= $this->input->post('username');
			// $password = $this->input->post('password');

			$panitia = array(
				'nama_panitia' => $nama_panitia,
				'fk_id_role' => $nama_role,
				'ruangan' => $ruangan,
				'username' => $username,
				// 'password' => $password,
			);
			$data = array_merge($panitia); //gabungkan datanya
			if ($this->m_panitia->tambahPanitia($data) == false) {
				$this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan');
				redirect('admin/panitia');
			} else {
				$this->index();
			}
		} else {
			// echo json_encode($this->input->post());
			// echo "belump di post";
			$this->index();
		}
	}
	public function editPanitia($id_panitia)
	{
		$data = $this->m_panitia->AmbilDataPanitia($id_panitia);
		$role = $this->m_panitia->get_role();
		$this->load->view('admin/datapanitia/editPanitia', ['data' => $data, 'role' => $role]);
	}
	public function UpdatePanitia()
	{
		$this->form_validation->set_rules('nama_panitia', 'Nama Panitia', 'required');
		$this->form_validation->set_rules('nama_role', 'Jenis Panitia', 'required');
		$this->form_validation->set_rules('ruangan', 'Ruangan', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		// $this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_error_delimiters('<span class="text-error">', '</span>');

		if ($this->form_validation->run()) {
			$nama_panitia = $this->input->post('nama_panitia');
			$id_role 			= $this->input->post('nama_role');
			$ruangan 			= $this->input->post('ruangan');
			$username 		= $this->input->post('username');

			$panitia = ([
				'nama_panitia' => $nama_panitia,
				'fk_id_role' => $id_role,
				'ruangan' => $ruangan,
				'username' => $username,
			]);
			$data = array_merge($panitia); //gabungkan datanya ok
			if ($this->m_panitia->editPanitia($data, $this->input->post('id_panitia')) == false) {
				$this->session->set_flashdata('edit_panitia', 'Data berhasil diubah');
			} else {
				$this->index();
			}
			redirect('admin/panitia', 'refresh');
		} else {
			$this->index();
			// echo "Gak POST";
		}
	}
	public function deletePanitia($id_panitia)
	{
		if ($this->m_panitia->deletePanitia($id_panitia) == false) {
			$this->session->set_flashdata('hapus_panitia', 'Data berhasil dihapus');
		}

		redirect('admin/panitia', 'refresh');
	}
}
