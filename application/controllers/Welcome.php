<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('login');
	}
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_users');
	}
	public function cek_login()
	{
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		$cek_login = $this->m_users->login($username, $password);

		if (empty($cek_login)) {
			redirect('/');
		} else {
			$this->session->set_userdata('users', $cek_login);
			if ($this->session->userdata('users')->level == '1') {
				$this->session->set_userdata('users', $cek_login);
				redirect('admin/home/index');
			} else if ($this->session->userdata('users')->level == '2') {
				$this->session->set_userdata('users', $cek_login);
				redirect('bendahara/home/index');
			} else if ($this->session->userdata('users')->level == '3') {
				$this->session->set_userdata('users', $cek_login);
				redirect('santri/akun/home');
			} else {
				echo "Anda tidak berhak mengakses Website ini";
			}
		}
	}
	// public function register()
	// {
	// 	$this->load->view('register');
	// }
	// public function register_action()
	// {
	// 	$nama_user = $this->input->post("nama_user");
	// 	$level = ("2");
	// 	$nomor_hp = $this->input->post("nomor_hp");
	// 	$alamat = $this->input->post("alamat");
	// 	$email = $this->input->post("email");
	// 	$password = $this->input->post("password");
	// 	$confirm = $this->input->post("confirm");
	// 	$data = array('nama_user' => $nama_user, 'level' => $level, 'nomor_hp' => $nomor_hp, 'alamat' => $alamat, 'email' => $email, 'password' => $password);
	// 	if ($password != $confirm) {
	// 		redirect('Welcome/register');
	// 	} else {
	// 		$this->User_model->insert_user($data);
	// 		redirect('/');
	// 	}
	// }
	function logout()
	{
		$this->session->sess_destroy();
		$this->load->view('login');
	}
}
