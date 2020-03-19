<?php
class M_Santri extends CI_model
{
	public function dataSantri()
	{
		$this->db->select('*');
		$this->db->from('santri');
		$this->db->order_by('status_santri', 'asc');
		$data = $this->db->get('');
		return $data;
	}
	public function tambahSantri($data)
	{
		$this->db->insert('santri', $data);
	}
	public function AmbilDataSantri($id_santri)
	{
		$data = $this->db->where(['id_santri' => $id_santri])->get("santri");
		if ($data->num_rows() > 0) {
			return $data->row(); //ambil data berdasarkan id dan angkanya
		}
	}
	public function editSantri($data, $id_santri)
	{
		$this->db->where('id_santri', $id_santri);
		$this->db->update('santri', $data);
	}
	public function deleteSantri($id_santri)
	{
		$this->db->where('id_santri', $id_santri);
		$this->db->delete('santri');
	}
}
