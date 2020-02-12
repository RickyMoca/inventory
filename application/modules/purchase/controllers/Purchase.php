<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Purchase extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('purchase/M_purchase');
	}

	public function data()
	{

		$data['title'] = 'App Inventory'; // Judul Web
		$data['content'] = 'Data Barang'; // jika ada
		$data['breadcum'] = 'Purchase '; // breadcumb
		$data['dashboard'] = 'active '; // breadcumb
		$data['sum_stok'] = $this->M_purchase->jmlStok();
		$data['sum_barang'] = $this->M_purchase->jmlBarang();
		$data['sum_amount'] = $this->M_purchase->jmlAmount();
		$data['getpurchase'] = $this->M_purchase->getPurchase();
		$page = 'purchase/v_purchase'; // page yang mau ditampilin
		echo modules::run('template/loadview', $data, $page);
	}

	public function addBarang()
	{
		$this->M_barang->tambah_barang();
		redirect('barang/data');
	}
}
