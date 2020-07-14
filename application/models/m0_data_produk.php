<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	Class m0_data_produk extends CI_Model{
		//Daftar Kebutuhan
		public function load_profil(){
			$sql = $this->db->query("SELECT * FROM `tb_profil` WHERE `id_profil` = \"Z00001\"");
			return $sql->result_array();
		}
		public function load_data_produk(){
			$sql = $this->db->query("SELECT * FROM `tb_data_produk`");
			return $sql->result_array();
		}
		public function tambah_jenis_produk(){
			$sql = $this->db->query("");
			return $sql->result_array();
		}
		public function ubah_jenis_produk(){
			$sql = $this->db->query("");
			return $sql->result_array();
		}
		public function hapus_jenis_produk(){
			$sql = $this->db->query("");
			return $sql->result_array();
		}
	}
?>