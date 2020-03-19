<?php
class M_users extends CI_Model
{
	public function login($username, $password)
	{
		return $this->db->query("Select * from users
	 Where username='" . $username . "' AND password='" . $password . "'")->row();
	}
}
