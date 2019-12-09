<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_page extends CI_Controller {

	public function __construct()
 	{
 		parent::__construct();
 		$cek = $this->session->userdata('nama_umkm','ket');
 		if (empty($cek)) {
 			redirect ('c_login','refresh');
 		}
 	}

	
	// public function login()
	// {
	// 	$this->load->view('login');
	// }

	public function admin()
	{
		$data = array(
			"title"	=> "Log Data Mahasiswa",
			"home"	=> "class='nav-item'",
			"vmhs"	=> "class='nav-item'",
			"vlog"	=> "class='nav-item active'",
			"pa"		=> $this->M_umkm->ambilproduk_admin(),
			);
		$this->load->view('admin/t_sidebar',$data);
		$this->load->view('admin/t_header');
		$this->load->view('admin/home');
		$this->load->view('admin/t_footer');
	}

	public function uadmin()
	{
		$jenis=$this->uri->segment('3');
		$data = array(
			"title"	=> "Log Data Mahasiswa",
			"home"	=> "class='nav-item'",
			"vmhs"	=> "class='nav-item'",
			"vlog"	=> "class='nav-item active'",
			"p"	=> "$jenis",
			"pa"		=> $this->M_umkm->ambilproduk_admin($jenis),
			);
		$this->load->view('admin/t_sidebar',$data);
		$this->load->view('admin/t_header');
		$this->load->view('admin/v_umkm_admin',$data);
		$this->load->view('admin/t_footer');
	}

	public function user()
	{
		if($this->session->userdata('level')=='2' || $this->session->userdata('level')=='3'){
		$this->load->view('admin/t_sidebar');
		$this->load->view('admin/t_header');
		$this->load->view('admin/home');
		$this->load->view('admin/t_footer');
		}else{
	      echo "Anda tidak berhak mengakses halaman ini";
	    }
	}

	public function umkm_user()
	{
		$data = array(
			"title"	=> "Log Data Mahasiswa",
			"home"	=> "class='nav-item'",
			"vmhs"	=> "class='nav-item'",
			"vlog"	=> "class='nav-item active'",
			"produk"		=> $this->M_umkm->ambilproduk(),
			);
		$this->load->view('admin/t_sidebar');
		$this->load->view('admin/t_header');
		$this->load->view('admin/v_umkm_user',$data);
		$this->load->view('admin/t_footer');
	}

	public function profil()
	{
		$data = array(
			"title"	=> "Log Data Mahasiswa",
			"home"	=> "class='nav-item'",
			"vmhs"	=> "class='nav-item'",
			"vlog"	=> "class='nav-item active'",
			"profil" 	=> $this->M_umkm->ambilprofil(), 
			);
		$this->load->view('admin/t_sidebar');
		$this->load->view('admin/t_header');
		$this->load->view('admin/profil',$data);
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
		$data['produk'] = $this->M_umkm->ambilproduk();
		$data['profil'] = $this->M_umkm->ambilprofil();
		$this->load->view('admin/t_sidebar');
		$this->load->view('admin/t_header');
		$this->load->view('admin/v_umkm_kuliner',$data);
		$this->load->view('admin/t_footer');
	}
	public function umkm_fashion()
	{
		$data['f'] = $this->M_umkm->ambilproduk();
		if($this->session->userdata('level')=='1' || $this->session->userdata('level')=='2'){
		$this->load->view('admin/t_sidebar');
		$this->load->view('admin/t_header');
		$this->load->view('admin/v_umkm_fashion',$data);
		$this->load->view('admin/t_footer');
		}else{
	      echo "Anda tidak berhak mengakses halaman ini";
	    }
	}
	public function umkm_kerajinan()
	{
		$data['f'] = $this->M_umkm->ambilproduk();
		$this->load->view('admin/t_sidebar');
		$this->load->view('admin/t_header');
		$this->load->view('admin/v_umkm_kerajinan',$data);
		$this->load->view('admin/t_footer');
	}
	public function web()
	{
		$this->load->view('web/template');
	}
}
