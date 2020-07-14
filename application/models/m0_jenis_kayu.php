<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	Class m0_jenis_kayu extends CI_Model{

		public function load_profil(){
			$sql = $this->db->query("SELECT * FROM `tb_profil` WHERE `id_profil` = \"Z00001\"");
			return $sql->result_array();
		}
		public function load_jenis_kayu(){
			$sql = $this->db->query("SELECT * FROM `tb_jenis_kayu`");
			return $sql->result_array();
		}
		public function tambah_jenis_kayu($jenisKayu, $deskJenisKayu){
			$sql = $this->db->query("INSERT INTO `tb_jenis_kayu`(`id_jenis_kayu`, `jenis_kayu`, `deskripsi_kayu`) VALUES (\"\",\"$jenisKayu\",\"$deskJenisKayu\")");
		}
		public function ubah_jenis_kayu(){ // next
			$sql = $this->db->query("");
		}
		public function hapus_jenis_kayu($idJenisKayu){
			$sql = $this->db->query("DELETE FROM `tb_jenis_kayu` WHERE `id_jenis_kayu` = \"$idJenisKayu\"");
			// echo "Data dengan ID Jenis Kayu = ".$idJenisKayu." telah terhapus.";
			// die;
		}
	}
?>