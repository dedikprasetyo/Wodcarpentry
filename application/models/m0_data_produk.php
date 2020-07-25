<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	Class m0_data_produk extends CI_Model{
		//Daftar Kebutuhan
		public function load_profil(){
			$sql = $this->db->query("SELECT * FROM `tb_profil` WHERE `id_profil` = \"Z00001\"");
			return $sql->result_array();
		}
		public function load_data_produk(){
			$sql = $this->db->query("
				SELECT * FROM `tb_data_produk` DP 
				JOIN `tb_jenis_kayu` JK ON DP.`id_jenis_kayu` = JK.`id_jenis_kayu` 
				JOIN `tb_jenis_produk` JP ON DP.`id_jenis_produk` = JP.`id_jenis_produk`
				ORDER BY DP.`id_produk`");
			return $sql->result_array();
		}
		public function get_jenisProduk(){
			$sql = $this->db ->query("SELECT `id_jenis_produk`, `jenis_produk` FROM `tb_jenis_produk`");
			return $sql->result();
		}
		public function get_jenisKayu(){
			$sql = $this->db ->query("SELECT `id_jenis_kayu`, `jenis_kayu` FROM `tb_jenis_kayu`");
			return $sql->result();
		}
		public function tambah_data_produk($namaProduk, $deskDataProduk, $hargaAwal, $hargaAkhir, $gambarProduk, $idJenisProduk, $idJenisKayu){
			$sql = $this->db->query("
				INSERT INTO `tb_data_produk`(`id_produk`, `id_jenis_produk`, `id_jenis_kayu`, `nama_produk`, `deskripsi_data_produk`, `harga_awal`, `harga_akhir`, `gambar_produk`) 
				VALUES (\"\",\"$idJenisProduk\",\"$idJenisKayu\",\"$namaProduk\",\"$deskDataProduk\",\"$hargaAwal\",\"$hargaAkhir\",\"$gambarProduk\")");
		}
		public function get_data_produk_byId($idProduk){ 
			$sql = $this->db->query("SELECT * FROM `tb_data_produk` WHERE `id_produk` = \"$idProduk\"");
			return $sql->result(); 
		}
		public function ubah_data_produk_noimg($idProduk, $namaProduk, $deskDataProduk, $hargaAwal, $hargaAkhir,$idJenisProduk, $idJenisKayu){ 
			//with no image
			$sql = $this->db->query("UPDATE `tb_data_produk` SET `id_jenis_produk`=\"$idJenisProduk\",`id_jenis_kayu`=\"$idJenisKayu\",`nama_produk`=\"$namaProduk\",`deskripsi_data_produk`=\"$deskDataProduk\",`harga_awal`=\"$hargaAwal\",`harga_akhir`=\"$hargaAkhir\" WHERE `id_produk` =\"$idProduk\"");
		}
		public function ubah_data_produk_withimg($idProduk, $namaProduk, $deskDataProduk, $hargaAwal, $hargaAkhir, $gambarProduk, $idJenisProduk, $idJenisKayu){ 
			//with image
			$sql = $this->db->query("UPDATE `tb_data_produk` SET `id_jenis_produk`=\"$idJenisProduk\",`id_jenis_kayu`=\"$idJenisKayu\",`nama_produk`=\"$namaProduk\",`deskripsi_data_produk`=\"$deskDataProduk\",`harga_awal`=\"$hargaAwal\",`harga_akhir`=\"$hargaAkhir\",`gambar_produk`=\"$gambarProduk\" WHERE `id_produk` =\"$idProduk\"");
		}
		public function hapusjenis_kayu($idProduk){
			$sql = $this->db->query("DELETE FROM `tb_data_produk` WHERE `id_produk` = \"$idProduk\"");
		}
	}
?>