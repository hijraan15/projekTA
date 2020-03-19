<?php

class M_Iqro extends CI_model
{
	public function dataIqro()
	{
		$this->db->select(['*']);
		$this->db->join('santri', 'iqro.fk_id_santri = santri.id_santri');
		$this->db->from('iqro');
		$return = $this->db->get();
		return $return->result();
	}
	public function tambahIqro($data)
	{
		$this->db->insert('iqro', $data);
	}
	public function AmbilDataIqro($id_iqro)
	{
		$this->db->join('santri', 'iqro.fk_id_santri = santri.id_santri');
		$data = $this->db->where(['id_iqro' => $id_iqro])->get("iqro");
		if ($data->num_rows() > 0) {
			return $data->row(); //ambil data berdasarkan id dan angkanya
		}
	}
	function get_santri()
	{
		return $this->db->get("santri")->result();
	}
	public function editIqro($data, $id_iqro)
	{
		$this->db->where('id_iqro', $id_iqro);
		$this->db->update('iqro', $data);
	}
	public function deleteIqro($id_iqro)
	{
		$this->db->where('id_iqro', $id_iqro);
		$this->db->delete('iqro');
	}
}
