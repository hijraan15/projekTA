<?php

class M_Pembayaran extends CI_model
{
	public function dataPembayaran()
	{
		$this->db->select(['*']);
		$this->db->join('santri', 'transaksi.fk_id_santri = santri.id_santri');
		$this->db->from('transaksi');
		$return = $this->db->get();
		return $return->result();
	}
	public function tambahPembayaran($data)
	{
		$this->db->join('santri', 'transaksi.fk_id_santri = santri.id_santri');
		$this->db->insert('transaksi', $data);
	}
	public function AmbilDataPembayaran($id_transaksi)
	{
		$this->db->join('santri', 'transaksi.fk_id_santri = santri.id_santri');
		$data = $this->db->where(['id_transaksi' => $id_transaksi])->get("transaksi");
		if ($data->num_rows() > 0) {
			return $data->row(); //ambil data berdasarkan id dan angkanya
		}
	}
	function get_pembayaran()
	{
		return $this->db->get("santri")->result();
	}

	public function editPembayaran($data, $id_transaksi)
	{
		$this->db->where('id_transaksi', $id_transaksi);
		$this->db->update('transaksi', $data);
	}
	public function deletePembayaran($id_transaksi)
	{
		$this->db->where('id_transaksi', $id_transaksi);
		$this->db->delete('transaksi');
	}
}
