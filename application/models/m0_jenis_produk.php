<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	Class m0_jenis_produk extends CI_Model{

		public function load_profil(){
			$sql = $this->db->query("SELECT * FROM `tb_profil` WHERE `id_profil` = \"Z00001\"");
			return $sql->result_array();
		}
		public function load_jenis_produk(){
			$sql = $this->db->query("SELECT * FROM `tb_jenis_produk`");
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