<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class c0_jenis_kayu extends CI_Controller {
	public function index()
	{
		$this->load->model("m0_jenis_kayu");
		$data['profil'] = $this->m0_jenis_kayu->load_profil();
		$data['jenisKayu'] = $this->m0_jenis_kayu->load_jenis_kayu();
		$this->load->view('v0_jenis_kayu', $data);
	}
	public function tambah_jenis_kayu(){
		$this->load->model("m0_jenis_kayu");
		$jenisKayu = $this->input->post('jjenisKayu');
		$deskJenisKayu = $this->input->post('deskJenisKayu');
		if (empty($deskJenisKayu)) {
			$deskJenisKayu = "-";
		} else {
			$deskJenisKayu = $this->input->post('deskJenisKayu');
		}
		// echo "Jenis Kayu = ".$jenisKayu."<br>"."Deskripsi Jenis Kayu = ".$deskJenisKayu."<br>"; 
		// no required
		$targetpathJKayu = "images/JenisKayu/";	
		if (empty($_FILES['gambarJenisKayuTambah']['name'])) {
			$gambarJenisKayu = "no_image.jpg";
			$this->m0_jenis_kayu->tambah_jenis_kayu($jenisKayu, $deskJenisKayu, $gambarJenisKayu); 
		}else{
			$targetpathJKayuGambar = $targetpathJKayu.basename($_FILES['gambarJenisKayuTambah']['name']);
			move_uploaded_file($_FILES['gambarJenisKayuTambah']['tmp_name'],$targetpathJKayuGambar);
			$this->m0_jenis_kayu->tambah_jenis_kayu($jenisKayu, $deskJenisKayu, $_FILES['gambarJenisKayuTambah']['name']);	
		}
		redirect(base_url('c0_jenis_kayu'));  //required
	}
	public function edit_jenis_kayu(){
		$this->load->model("m0_jenis_kayu");
		$idJenisKayu = $this->input->post('idJenisKayuEdit');
		$jenisKayu = $this->input->post('jenisKayuEdit');		
		$deskJenisKayu = $this->input->post('deskripsiKayuEdit');	
		if (empty($deskJenisKayu)) {
			$deskJenisKayu = "-";
		} else {
			$deskJenisKayu = $this->input->post('deskripsiKayuEdit');
		}	
		// echo "ID Jenis Kayu = ".$idJenisKayu."<br>"
		// 	."Jenis Kayu = ".$jenisKayu."<br>"
		// 	."Deskripsi Jenis Kayu = ".$deskJenisKayu."<br>";
		$targetpathJKayu = "images/JenisKayu/";	
		$dataJKayu = $this->m0_jenis_kayu->get_jenis_kayu_byId($idJenisKayu);
		if (!empty($_FILES['gambarJenisKayuEdit']['name'])) {	
			if ($dataJKayu[0]->gambar_jkayu != "no_image.jpg") {
				unlink($targetpathJKayu.$dataJKayu[0]->gambar_jkayu);
				$targetpathJKayuGambar = $targetpathJKayu.basename($_FILES['gambarJenisKayuEdit']['name']);
				move_uploaded_file($_FILES['gambarJenisKayuEdit']['tmp_name'],$targetpathJKayuGambar);
				$this->m0_jenis_kayu->edit_jenis_kayu_withimg($idJenisKayu, $jenisKayu, $deskJenisKayu, $_FILES['gambarJenisKayuEdit']['name']);
			} else { //apabila gambarnya bernama no_image.jpg
				//gambar tidak di unlink (dihapus) melainkan hnya ditambah
				$targetpathJKayuGambar = $targetpathJKayu.basename($_FILES['gambarJenisKayuEdit']['name']);
				move_uploaded_file($_FILES['gambarJenisKayuEdit']['tmp_name'],$targetpathJKayuGambar);
				$this->m0_jenis_kayu->edit_jenis_kayu_withimg($idJenisKayu, $jenisKayu, $deskJenisKayu, $_FILES['gambarJenisKayuEdit']['name']);
			}
		} else { 
			$this->m0_jenis_kayu->edit_jenis_kayu_noimg($idJenisKayu, $jenisKayu, $deskJenisKayu);	
		}	
		redirect(base_url('c0_jenis_kayu'));  //required
	}
	public function hapus_jenis_kayu($idJenisKayu){
		$this->load->model("m0_jenis_kayu");
		// echo $idJenisKayu;
		$targetpathJKayu = "images/JenisKayu/";
		$dataJKayu = $this->m0_jenis_kayu->get_jenis_kayu_byId($idJenisKayu);
		if ($dataJKayu[0]->gambar_jkayu != "no_image.jpg") {
			unlink($targetpathJKayu.$dataJKayu[0]->gambar_jkayu);
		}
		$this->m0_jenis_kayu->hapus_jenis_kayu($idJenisKayu);
		redirect(base_url('c0_jenis_kayu'));  //required
	}
}