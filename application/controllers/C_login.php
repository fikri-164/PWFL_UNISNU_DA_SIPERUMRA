<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

 	public function __construct()
 	{
 		parent::__construct();
 		$this->load->model('M_login');
 		
 	}

	public function index()
	{
		$cek = $this->session->userdata('username');
 		if (!empty($cek)) {
 			redirect ('home','refresh');
 		}else {
    		$this->load->view('login');
    	}
  
	}


	public function login()
	{
		$this->load->model('M_login');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama_umkm','nama_umkm','required');
		$this->form_validation->set_rules('password','password','required');
		if ($this->form_validation->run()==false) {
				redirect('c_login','refresh');
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
						redirect('c_page/admin','refresh');
				}else if ($validasi_login_db->level == 2) {
						redirect('c_page/user','refresh');
				}else {
					$this->session->set_flashdata('gagal','login gagal! silahkan cek username dan password anda');
					redirect('c_login');
				}
			}
		}

	}

	public function logout(){
		session_destroy();
		redirect('c_login','refresh');
	}
}
