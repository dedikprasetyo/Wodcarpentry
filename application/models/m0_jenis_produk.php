<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	Class m0_jenis_produk extends CI_Model{
		public function load_profil(){
			$sql = $this->db->query("SELECT * FROM `tb_profil` WHERE `id_profil` = \"Z00001\"");
			return $sql->result_array();
		}
		public function load_jenis_produk(){
			$sql = $this->db->query("SELECT * FROM `tb_jenis_produk`
									 WHERE `id_jenis_produk` NOT IN (\"B00000\")");
			return $sql->result_array();
		}
		public function tambah_jenis_produk($jenisProduk, $deskJenisProduk){
			$sql = $this->db->query("INSERT INTO `tb_jenis_produk`(`id_jenis_produk`, `jenis_produk`, `deskripsi_produk`) VALUES (\"\", \"$jenisProduk\", \"$deskJenisProduk\")");
		}
		public function edit_jenis_produk($idJenisProduk, $jenisProduk, $deskJenisProduk){
			$sql = $this->db->query("UPDATE `tb_jenis_produk` 
				SET `jenis_produk`=\"$jenisProduk\",`deskripsi_produk`=\"$deskJenisProduk\" 
				WHERE `id_jenis_produk`=\"$idJenisProduk\"");
		}
		public function hapus_jenis_produk($idJenisProduk){
			$sql = $this->db->query("DELETE FROM `tb_jenis_produk` WHERE `id_jenis_produk`=\"$idJenisProduk\"");
		}
	}
?>