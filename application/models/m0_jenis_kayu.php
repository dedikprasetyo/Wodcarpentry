<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	Class m0_jenis_kayu extends CI_Model{
		public function load_profil(){
			$sql = $this->db->query("SELECT * FROM `tb_profil` WHERE `id_profil` = \"Z00001\"");
			return $sql->result_array();
		}
		public function load_jenis_kayu(){
			$sql = $this->db->query("SELECT * FROM `tb_jenis_kayu` WHERE `id_jenis_kayu` NOT IN (\"A00000\")");
			return $sql->result_array();
		}
		public function tambah_jenis_kayu($jenisKayu, $deskJenisKayu, $gambarJenisKayu){
			$sql = $this->db->query("INSERT INTO `tb_jenis_kayu`(`id_jenis_kayu`,`jenis_kayu`,`deskripsi_kayu`, `gambar_jkayu`) VALUES (\"\",\"$jenisKayu\",\"$deskJenisKayu\", \"$gambarJenisKayu\")");
		}
		public function get_jenis_kayu_byId($idJenisKayu){ 
			$sql = $this->db->query("SELECT * FROM `tb_jenis_kayu` WHERE `id_jenis_kayu` = \"$idJenisKayu\"");
			return $sql->result(); //untuk data banyak
			// return $sql->result_array(); //untuk data 1 (spesifik)
		}
		public function edit_jenis_kayu_noimg($idJenisKayu, $jenisKayu, $deskripsiKayu){ //with no image
			$sql = $this->db->query("UPDATE `tb_jenis_kayu` SET `jenis_kayu`=\"$jenisKayu\", `deskripsi_kayu`=\"$deskripsiKayu\" WHERE `id_jenis_kayu`=\"$idJenisKayu\"");		
		}
		public function edit_jenis_kayu_withimg($idJenisKayu, $jenisKayu, $deskripsiKayu, $gambarJKayu){ 
			//with image
			$sql = $this->db->query("UPDATE `tb_jenis_kayu` SET `jenis_kayu`=\"$jenisKayu\", `deskripsi_kayu`=\"$deskripsiKayu\", `gambar_jkayu`=\"$gambarJKayu\" WHERE `id_jenis_kayu`=\"$idJenisKayu\"");		
		}
		public function hapus_jenis_kayu($idJenisKayu){
			$sql = $this->db->query("DELETE FROM `tb_jenis_kayu` WHERE `id_jenis_kayu` = \"$idJenisKayu\"");
			// echo "Data dengan ID Jenis Kayu = ".$idJenisKayu." telah terhapus.";
			// die;
		}
	}
?>