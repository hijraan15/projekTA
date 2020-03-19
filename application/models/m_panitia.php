<?php

class M_Panitia extends CI_model
{
	public function dataPanitia()
	{
		$this->db->select(['*']);
		$this->db->join('role', 'panitia.fk_id_role = role.id_role');
		$this->db->from('panitia');
		$return = $this->db->get();
		return $return->result();
	}
	public function tambahPanitia($data)
	{
		$this->db->insert('panitia', $data);
	}

	public function AmbilDataPanitia($id_panitia)
	{
		$this->db->join("role as r", "r.id_role = panitia.fk_id_role");
		$data = $this->db->where(['id_panitia' => $id_panitia])->get("panitia");
		if ($data->num_rows() > 0) {
			return $data->row(); //ambil data berdasarkan id dan angkanya
		}
	}

	function get_role()
	{
		return $this->db->get("role")->result();
	}

	public function editPanitia($data, $id_panitia)
	{
		$this->db->where('id_panitia', $id_panitia);
		$this->db->update('panitia', $data);
	}

	public function deletePanitia($id_panitia)
	{
		$this->db->where('id_panitia', $id_panitia);
		$this->db->delete('panitia');
	}
}
