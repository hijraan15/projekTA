<?php
class M_PendaftaranSantri extends CI_model
{
	public function dataDiri()
	{
		$this->db->select('*');
		$this->db->from('santri');
		$data = $this->db->get('');
		return $data;
	}
	public function pendaftaran($data)
	{
		$this->db->insert('santri', $data);
	}
}
