<?php

class M_Login extends CI_Model
{
	function cek_login($table, $where)
	{
		return $this->db->get_where($table, $where);
	}
	// private $_table = "users_ab";

	public function doLogin()
	{
		$post = $this->input->post();

		// cari user berdasarkan email dan username
		$this->db->where('email', $post["email"])
			->or_where('username', $post["email"]);
		$user = $this->db->get($this->_table)->row();

		// jika user terdaftar
		if ($user) {
			// periksa password-nya
			$isPasswordTrue = password_verify($post["password"], $user->password);
			// periksa role-nya
			$isAdmin = $user->role == "admin";

			// jika password benar dan dia admin
			if ($isPasswordTrue && $isAdmin) {
				// login sukses yay!
				$this->session->set_userdata(['user_logged' => $user]);
				$this->_updateLastLogin($user->user_id);
				return true;
			}
		}

		// login gagal
		return false;
	}
	// untuk cek status
	public function isNotLogin()
	{
		return $this->session->userdata('user_logged') === null;
	}
	// update tanggal dan waktu login
	private function _updateLastLogin($user_id)
	{
		$sql = "UPDATE {$this->_table} SET last_login=now() WHERE user_id={$user_id}";
		$this->db->query($sql);
	}
}
