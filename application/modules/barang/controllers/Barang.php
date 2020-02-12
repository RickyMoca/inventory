<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('barang/M_barang');
	}

	public function data()
	{

		$data['title'] = 'App Inventory'; // Judul Web
		$data['content'] = 'Data Barang'; // jika ada
		$data['breadcum'] = 'Barang '; // breadcumb
		$data['dashboard'] = 'active '; // breadcumb
		$data['sum_stok'] = $this->M_barang->jmlStok();
		$data['sum_barang'] = $this->M_barang->jmlBarang();
		$data['sum_amount'] = $this->M_barang->jmlAmount();
		$data['getbarang'] = $this->M_barang->getBarang();
		$page = 'barang/v_barang'; // page yang mau ditampilin
		echo modules::run('template/loadview', $data, $page);
	}

	public function addBarang()
	{
		$this->M_barang->tambah_barang();
		redirect('barang/data');
	}
}
