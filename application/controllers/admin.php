<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class admin extends CI_Controller {

	public function index()
	{
		// $this->load->model("m0_login");
		$this->load->view('v0_login');
	}
}
