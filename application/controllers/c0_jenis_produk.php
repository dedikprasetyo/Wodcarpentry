<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class c0_jenis_produk extends CI_Controller {

	public function index()
	{
		$this->load->model("m0_jenis_produk");
		$data['profil'] = $this->m0_jenis_produk->load_profil();
		$data['jenisProduk'] = $this->m0_jenis_produk->load_jenis_produk();
		$this->load->view('v0_jenis_produk', $data);
	}
}