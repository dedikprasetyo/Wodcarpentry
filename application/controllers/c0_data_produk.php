<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class c0_data_produk extends CI_Controller {
	public function index()
	{
		$this->load->model("m0_data_produk");
		$data['profil'] = $this->m0_data_produk->load_profil();
		$data['dataProduk'] = $this->m0_data_produk->load_data_produk();
		$data['listJenisProduk'] = $this->m0_data_produk->get_jenisProduk();
		$data['listJenisKayu'] = $this->m0_data_produk->get_jenisKayu();
		$this->load->view('v0_data_produk', $data);
	}
	public function tambah_data_produk(){
		$this->load->model("m0_data_produk");
		$namaProduk = $this->input->post('namaProduk');
		$deskProduk = $this->input->post('deskProduk');
		$hargaAwal = $this->input->post('hargaAwal');
		$hargaAkhir = $this->input->post('hargaAkhir');
		$idJenisProduk = $this->input->post('jjenisProduk');
		$idJenisKayu = $this->input->post('jjenisKayu');
		if (empty($deskProduk)) {
			$deskProduk = "-";
		} else {
			$deskProduk = $this->input->post('deskProduk');
		}
		// echo 
		//  "Nama Produk = ".$namaProduk."<br>"
		// ."Deskripsi Produk = ".$deskProduk."<br>"
		// ."Harga Awal = ".$hargaAwal."<br>"
		// ."Harga Akhir = ".$hargaAkhir."<br>"
		// ."id Jenis Produk = ".$idJenisProduk."<br>"
		// ."id Jenis Kayu = ".$idJenisKayu."<br>"; 
		// no required
		$targetpathDProduk = "images/DataProduk/";	
		if (empty($_FILES['gambarProdukTambah']['name'])) {
			$gambarProduk = "no_image.jpg";
			$this->m0_data_produk->tambah_data_produk($namaProduk, $deskProduk, $hargaAwal, $hargaAkhir, $gambarProduk, $idJenisProduk, $idJenisKayu); 
		}else{
			$targetpathDProdukGambar = $targetpathDProduk.basename($_FILES['gambarProdukTambah']['name']);
			move_uploaded_file($_FILES['gambarProdukTambah']['tmp_name'],$targetpathDProdukGambar);
			$this->m0_data_produk->tambah_data_produk($namaProduk, $deskProduk, $hargaAwal, $hargaAkhir, $_FILES['gambarProdukTambah']['name'], $idJenisProduk, $idJenisKayu); 	
		}
		redirect(base_url('c0_data_produk'));  //required
	}
	public function edit_data_produk(){
		$this->load->model("m0_data_produk");
		$idProduk = $this->input->post('idProdukEdit');
		$namaProduk = $this->input->post('namaProdukEdit');
		$deskProduk = $this->input->post('deskProdukEdit');
		$hargaAwal = $this->input->post('hargaAwalEdit');
		$hargaAkhir = $this->input->post('hargaAkhirEdit');
		$idJenisProduk = $this->input->post('idJenisProdukEdit');
		$idJenisKayu = $this->input->post('idJenisKayuEdit');
		if (empty($deskProduk)) {
			$deskProduk = "-";
		} else {
			$deskProduk = $this->input->post('deskProdukEdit');
		}
		// echo 
		//  "ID Produk = ".$idProduk."<br>"
		// ."Nama Produk = ".$namaProduk."<br>"
		// ."Deskripsi Produk = ".$deskProduk."<br>"
		// ."Harga Awal = ".$hargaAwal."<br>"
		// ."Harga Akhir = ".$hargaAkhir."<br>"
		// ."id Jenis Produk = ".$idJenisProduk."<br>"
		// ."id Jenis Kayu = ".$idJenisKayu."<br>"; 
		// no required
		$targetpathDProduk = "images/DataProduk/";	
		$dataProduk = $this->m0_data_produk->get_data_produk_byId($idProduk);
		if (!empty($_FILES['gambarProdukEdit']['name'])) {	
			if ($dataProduk[0]->gambar_produk != "no_image.jpg") {
				unlink($targetpathDProduk.$dataProduk[0]->gambar_produk);
				$targetpathDProdukGambar = $targetpathDProduk.basename($_FILES['gambarProdukEdit']['name']);
				move_uploaded_file($_FILES['gambarProdukEdit']['tmp_name'],$targetpathDProdukGambar);
				$this->m0_data_produk->ubah_data_produk_withimg($idProduk, $namaProduk, $deskProduk, $hargaAwal, $hargaAkhir, $_FILES['gambarProdukEdit']['name'], $idJenisProduk, $idJenisKayu);
			} else { //apabila gambarnya bernama no_image.jpg
				//gambar tidak di unlink (dihapus) melainkan hnya ditambah
				$targetpathDProdukGambar = $targetpathDProduk.basename($_FILES['gambarProdukEdit']['name']);
				move_uploaded_file($_FILES['gambarProdukEdit']['tmp_name'],$targetpathDProdukGambar);
				$this->m0_data_produk->ubah_data_produk_withimg($idProduk, $namaProduk, $deskProduk, $hargaAwal, $hargaAkhir, $_FILES['gambarProdukEdit']['name'], $idJenisProduk, $idJenisKayu);
			}
		} else { 
			$this->m0_data_produk->ubah_data_produk_noimg($idProduk, $namaProduk, $deskProduk, $hargaAwal, $hargaAkhir,$idJenisProduk, $idJenisKayu);	
		}	
		redirect(base_url('c0_data_produk'));  //required
	}
	public function hapus_data_produk($idProduk){
		$this->load->model("m0_data_produk");
		$targetpathDProduk = "images/DataProduk/";
		$dataProduk = $this->m0_data_produk->get_data_produk_byId($idProduk);
		if ($dataProduk[0]->gambar_produk != "no_image.jpg") {
			unlink($targetpathDProduk.$dataProduk[0]->gambar_produk);
		}
		$this->m0_data_produk->hapusjenis_kayu($idProduk);
		redirect(base_url('c0_data_produk'));  //required
	}
}