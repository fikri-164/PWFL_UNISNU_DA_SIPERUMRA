<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

	public function login()
	{
		$this->load->model('M_login');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama_umkm','nama_umkm','required');
		$this->form_validation->set_rules('password','password','required');
		if ($this->form_validation->run()==false) {
				redirect('c_page/');
		}else {
			$nama_umkm = set_value('nama_umkm');
			$password = md5(set_value('password'));
			$validasi_login_db = $this->M_login->login($nama_umkm,$password);
			if ($validasi_login_db != false) {
				$this->session->set_userdata('nama_umkm',$validasi_login_db->nama_umkm);
				$this->session->set_userdata('level',$validasi_login_db->level);
				$this->session->set_userdata('ket',$validasi_login_db->ket);
				$this->session->set_userdata('nama',$validasi_login_db->nama);
				if ($validasi_login_db->level == 1) {
						redirect('c_page/admin');
				}else if ($validasi_login_db->level == 2) {
						redirect('c_page/user');
				}else if ($validasi_login_db->level == 3) {
						redirect('c_page/user');
				}else {
					redirect('c_page/');
				}
			}
		}

	}

	public function logout(){
		$this->session->unset_userdata('nama_umkm');
		$this->session->unset_userdata('level');
		$this->session->unset_userdata('ket');
		redirect('c_page/');
	}
}
