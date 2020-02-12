<?php

class M_purchase extends CI_model
{

	public function getPurchase()
	{
		return $this->db->get('purchase')->result_array();
	}

	public function jmlStok()
	{
		$sql = "SELECT SUM(stok_awal) AS stok_awal FROM barang";
		$result = $this->db->query($sql);
		return $result->row()->stok_awal;
	}

	public function jmlBarang()
	{
		$sql = "SELECT COUNT(nama_barang) AS nama_barang FROM barang";
		$result = $this->db->query($sql);
		return $result->row()->nama_barang;
	}
	public function jmlAmount()
	{
		$sql = "SELECT SUM(cogs) AS cogs FROM barang";
		$result = $this->db->query($sql);
		return $result->row()->cogs;
	}

	public function tambah_barang()
	{
		$data = [
			"no_sku" => $this->input->post('sku', true),
			"nama_barang" => $this->input->post('nm_barang', true),
			"stok_awal" => $this->input->post('stok_awal', true),
			"cogs" => $this->input->post('cogs', true),
			"status" => "active"
		];

		$this->db->insert('barang', $data);
	}
}
