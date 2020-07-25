<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class c0_profil extends CI_Controller {

	public function index()
	{
		$this->load->model("m0_profil");
		$data['profil'] = $this->m0_profil->load_profil();
		$this->load->view('v0_profil', $data);
	}
	public function editProfil(){
		$this->load->model("m0_profil");
		$idProfil = $this->input->post('idProfilEdit');
		$namaUsaha = $this->input->post('namaUsahaEdit');		
		$sejarah = $this->input->post('sejarahEdit');		
		$moto = $this->input->post('motoEdit');
		$alamat = $this->input->post('alamatEdit');		

		// echo "ID Profil = ".$idProfil."<br>"
		// 	."Nama Usaha = ".$namaUsaha."<br>"
		// 	."Sejarah = ".$sejarah."<br>"
		// 	."Moto = ".$moto."<br>"
		// 	."Alamat = ".$alamat."<br>";  

		$targetpathLogo = "images/";	
		$dataprofil = $this->m0_profil->get_profil_byId($idProfil);
		if (!empty($_FILES['logoEdit']['name'])) {		
		 	unlink($targetpathLogo.$dataprofil[0]->logo);
			$targetpathLogoGambar = $targetpathLogo.basename($_FILES['logoEdit']['name']);
			move_uploaded_file($_FILES['logoEdit']['tmp_name'],$targetpathLogoGambar);
			$this->m0_profil->edit_profil_withimg($idProfil, $namaUsaha, $sejarah, $moto, $alamat, 
				$_FILES['logoEdit']['name']);

		} else { 
			$this->m0_profil->edit_profil_noimg($idProfil, $namaUsaha, $sejarah, $moto, $alamat);	
		}	
		redirect(base_url('c0_profil'));  //required
	}
}