<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_page extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}

	public function admin()
	{
		$this->load->view('admin/t_sidebar');
		$this->load->view('admin/t_header');
		$this->load->view('admin/home');
		$this->load->view('admin/t_footer');
	}

	public function profil()
	{
		$this->load->view('admin/t_sidebar');
		$this->load->view('admin/t_header');
		$this->load->view('admin/profil');
		$this->load->view('admin/t_footer');
	}
	public function umkm_mebel()
	{
		$this->load->view('admin/t_sidebar');
		$this->load->view('admin/t_header');
		$this->load->view('admin/v_umkm_mebel');
		$this->load->view('admin/t_footer');
	}
	public function umkm_kuliner()
	{
		$this->load->view('admin/t_sidebar');
		$this->load->view('admin/t_header');
		$this->load->view('admin/v_umkm_kuliner');
		$this->load->view('admin/t_footer');
	}
	public function umkm_fashion()
	{
		$this->load->view('admin/t_sidebar');
		$this->load->view('admin/t_header');
		$this->load->view('admin/v_umkm_fashion');
		$this->load->view('admin/t_footer');
	}
	public function umkm_kerajinan()
	{
		$this->load->view('admin/t_sidebar');
		$this->load->view('admin/t_header');
		$this->load->view('admin/v_umkm_kerajinan');
		$this->load->view('admin/t_footer');
	}
	public function web()
	{
		$this->load->view('web/template');
	}
}
