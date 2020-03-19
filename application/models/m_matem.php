<?php

class M_Matem extends CI_model
{
	public function dataMatem()
	{
		$this->db->select(['*']);
		$this->db->join('santri', 'matem.fk_id_santri = santri.id_santri');
		$this->db->from('matem');
		$return = $this->db->get();
		return $return->result();
	}
	public function tambahMatem($data)
	{
		$this->db->insert('matem', $data);
	}

	public function AmbilDataMatem($id_matem)
	{
		$this->db->join('santri', 'matem.fk_id_santri = santri.id_santri');
		$data = $this->db->where(['id_matem' => $id_matem])->get("matem");
		if ($data->num_rows() > 0) {
			return $data->row(); //ambil data berdasarkan id dan angkanya
		}
	}
	function get_santri()
	{
		return $this->db->get("santri")->result();
	}
	public function editMatem($data, $id_matem)
	{
		$this->db->where('id_matem', $id_matem);
		$this->db->update('matem', $data);
	}
	public function deletePembayaran($id_matem)
	{
		$this->db->where('id_matem', $id_matem);
		$this->db->delete('matem');
	}
}
