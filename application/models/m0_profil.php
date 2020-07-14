<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	Class m0_profil extends CI_Model{

		public function load_profil(){
			$sql = $this->db->query("SELECT * FROM `tb_profil` WHERE `id_profil` = \"Z00001\"");
			return $sql->result_array();
		}

		public function get_profil_byId($idProfil){ 
			$sql = $this->db->query("SELECT * FROM `tb_profil` WHERE `id_profil` = \"$idProfil\"");
			return $sql->result(); //untuk data banyak
			// return $sql->result_array(); //untuk data 1 (spesifik)
		}

		public function edit_profil_noimg($idProfil,$namaUsaha, $sejarah, $moto, $alamat){ //with no image
			$sql = $this->db->query("UPDATE `tb_profil` SET `nama_usaha`=\"$namaUsaha\",`sejarah`=\"$sejarah\",`moto`=\"$moto\",`alamat`=\"$alamat\" WHERE `id_profil`=\"$idProfil\"");		
		}

		public function edit_profil_withimg($idProfil,$namaUsaha, $sejarah, $moto, $alamat, $logo){ //with image
			$sql = $this->db->query("UPDATE `tb_profil` SET `nama_usaha`=\"$namaUsaha\",`sejarah`=\"$sejarah\",`moto`=\"$moto\",`alamat`=\"$alamat\",`logo`=\"$logo\" WHERE `id_profil`=\"$idProfil\"");		
		}

	}
?>