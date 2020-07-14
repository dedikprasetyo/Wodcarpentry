<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class c0_data_produk extends CI_Controller {

	public function index()
	{
		$this->load->model("m0_data_produk");
		$data['profil'] = $this->m0_data_produk->load_profil();
		$data['dataProduk'] = $this->m0_data_produk->load_data_produk();
		$this->load->view('v0_data_produk', $data);
	}
}