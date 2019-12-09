
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_register extends CI_Controller {

	public function index()
	{
		$this->load->view('register');

	}

	public function buat_akun()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama','nama','required');
		$this->form_validation->set_rules('cp','cp','required');
		if (!$this->form_validation->run()==false) {
			$this->M_register->user();
			$this->M_register->umkm();
			$this->session->set_flashdata('berhasil','<a class="card bg-success text-white shadow">Yee... Berhasil membuat akun!</a>');
			redirect('c_login');
		}else {
			$this->session->set_flashdata('gagal','<a class="card bg-warning text-white shadow">gagal buat akun!</a>');
			redirect('c_register/');
		}
	}

}
