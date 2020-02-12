<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		// $this->load->model('auth/M_login');
	}

	public function login()
	{
		$page = 'auth/v_login'; // page yang mau ditampilin
		echo modules::run('template/loadview_auth', $page);
	}

	public function regist()
	{
		$page = 'auth/v_register'; // page yang mau ditampilin
		echo modules::run('template/loadview_auth', $page);
	}

	public function addBarang()
	{
		$this->M_barang->tambah_barang();
		redirect('barang/data');
	}
}
