<?php

class M_PembayaranBendahara extends CI_model
{
	public function dataPembayaranBendahara()
	{
		$this->db->select(['*']);
		$this->db->join('santri', 'transaksi.fk_id_santri = santri.id_santri');
		$this->db->from('transaksi');
		$return = $this->db->get();
		return $return->result();
	}
}
