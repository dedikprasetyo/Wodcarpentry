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
	public function tambah_jenis_produk(){
		$this->load->model("m0_jenis_produk");
		$jenisProduk = $this->input->post('jjenisProduk');
		$deskJenisProduk = $this->input->post('deskJenisProduk');
		if (empty($deskJenisProduk)) {
			$deskJenisProduk = "-";
		} else {
			$deskJenisProduk = $this->input->post('deskJenisProduk');
		}
		// echo "Jenis Produk = ".$jenisProduk."<br>"."Deskripsi Jenis Produk = ".$deskJenisProduk."<br>"; 
		// no required
		$this->m0_jenis_produk->tambah_jenis_produk($jenisProduk, $deskJenisProduk); 
		redirect(base_url('c0_jenis_produk'));  //required
	}
	public function edit_jenis_produk(){
		$this->load->model("m0_jenis_produk");
		$idJenisProduk = $this->input->post('idJenisProdukEdit');
		$jenisProduk = $this->input->post('jenisProdukEdit');		
		$deskJenisProduk = $this->input->post('deskJenisProdukEdit');		
		// echo "ID Jenis Produk = ".$idJenisProduk."<br>"
		// 	."Jenis Produk = ".$jenisProduk."<br>"
		// 	."Deskripsi Jenis Produk = ".$deskJenisProduk."<br>";
		$this->m0_jenis_produk->edit_jenis_produk($idJenisProduk, $jenisProduk, $deskJenisProduk);	
		redirect(base_url('c0_jenis_produk'));  //required
	}
	public function hapus_jenis_produk($idJenisProduk){
		$this->load->model("m0_jenis_produk");
		// echo $idJenisProduk;
		$this->m0_jenis_produk->hapus_jenis_produk($idJenisProduk);
		redirect(base_url('c0_jenis_produk'));  //required
	}
}