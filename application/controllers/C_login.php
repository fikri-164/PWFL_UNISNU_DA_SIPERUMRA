<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends CI_Controller {

	public function login()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('password','password','required');
		if ($this->form_validation->run()==false) {
			redirect('page/');
		}else {
			$username = set_value('username');
			$password = md5(set_value('password'));
			$validasi_login_db = $this->Authentication_model->login($username,$password);
			if ($validasi_login_db != false) {
				$this->session->set_userdata('username',$validasi_login_db->username);
				$this->session->set_userdata('level',$validasi_login_db->level);
				if ($validasi_login_db->level == 9) {
					redirect('c_admin/dashboard_admin');
				}else if ($validasi_login_db->level == 1) {
					redirect('page/dashboard_tu');
				}else if ($validasi_login_db->level == 2) {
					redirect('page/sosial');
				}else if ($validasi_login_db->level == 3) {
					redirect('page/');
				}else if ($validasi_login_db->level == 4) {
					redirect('page/');
				}else if ($validasi_login_db->level == 5) {
					redirect('page/');
				}else if ($validasi_login_db->level == 6) {
					redirect('page/');
				}else if ($validasi_login_db->level == 7) {
					redirect('c_ketua/dashboard_ketua');
				}
			}else {
				redirect('page/');
			}
		}
	}

	public function logout(){
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		redirect('page/');
	}
}
