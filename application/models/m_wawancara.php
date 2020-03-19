<?php

class M_Wawancara extends CI_model
{
	public function dataWawancara()
	{
		$this->db->select(['*']);
		$this->db->join('santri', 'wawancara.fk_id_santri = santri.id_santri');
		$this->db->from('wawancara');
		$return = $this->db->get();
		return $return->result();
	}
	public function tambahWawancara($data)
	{
		$this->db->insert('wawancara', $data);
	}
	public function AmbilDataWawancara($id_wawancara)
	{
		$this->db->join('santri', 'wawancara.fk_id_santri = santri.id_santri');
		$data = $this->db->where(['id_wawancara' => $id_wawancara])->get("wawancara");
		if ($data->num_rows() > 0) {
			return $data->row(); //ambil data berdasarkan id dan angkanya
		}
	}
	function get_santri()
	{
		return $this->db->get("santri")->result();
	}
	public function editWawancara($data, $id_wawancara)
	{
		$this->db->where('id_wawancara', $id_wawancara);
		$this->db->update('wawancara', $data);
	}
	public function deleteWawancara($id_wawancara)
	{
		$this->db->where('id_wawancara', $id_wawancara);
		$this->db->delete('wawancara');
	}
}
