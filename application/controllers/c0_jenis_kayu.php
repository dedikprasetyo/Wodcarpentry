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
		if (empty($jenisKayu)) {
			echo "Harap Isi Jenis Kayu.";
		} else {
			if (empty($deskJenisKayu)) {
				$deskJenisKayu = "-";
			} else {
				$deskJenisKayu = $this->input->post('deskJenisKayu');
			}
			// echo "Jenis Kayu = ".$jenisKayu."<br>"."Deskripsi Jenis Kayu = ".$deskJenisKayu."<br>"; 
			// no required
			$this->m0_jenis_kayu->tambah_jenis_kayu($jenisKayu, $deskJenisKayu);  //required
			redirect(base_url('c0_jenis_kayu'));  //required
		}
	}

	public function hapus_jenis_kayu($idJenisKayu){
		$this->load->model("m0_jenis_kayu");
		// echo $idJenisKayu;
		$this->m0_jenis_kayu->hapus_jenis_kayu($idJenisKayu);
		redirect(base_url('c0_jenis_kayu'));  //required
	}
}