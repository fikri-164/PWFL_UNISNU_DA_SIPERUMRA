<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class C_umkm extends CI_Controller {

 	public function __construct()
 	{
 		parent::__construct();
 		$cek = $this->session->userdata('nama_umkm','ket');
 		if (empty($cek)) {
 			redirect ('c_login','refresh');
 		}
 	}

	public function tambahproduk()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama_produk','nama_produk','required');
		// $this->form_validation->set_rules('cp','cp','required');
		if (!$this->form_validation->run()==false) {
			$this->M_umkm->tambah_produk();
			$this->session->set_flashdata('berhasil','<a class="card bg-success text-white shadow">data berhasil ditambahkan!</a>');
			redirect('c_page/umkm_user');
		}else {
			$this->session->set_flashdata('gagal','<a class="card bg-warning text-white shadow">data gagal ditambahkan!</a>');
			redirect('page/umkm_user');
		}
	}

	public function view()
	{
		$id= $this->uri->segment(3);
		$data = $this->M_umkm->get_foto($id);
		echo '<img src='.base_url('uploads').'/'.$data['foto'].' width="30%" >';

	}

	public function editproduk(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('deskripsi_produk','deskripsi_produk','required');
		// $this->form_validation->set_rules('nip','nip','required');
		// $this->form_validation->set_rules('tujuan_tugas','tujuan_tugas','required');
		if ($this->form_validation->run()!=false) {
			$this->M_umkm->edit_produk();
			$this->session->set_flashdata('berhasil','<a class="card bg-success text-white shadow">data berhasil diedit!</a>');
			redirect('c_page/umkm_user');
			
		}else{
			$this->session->set_flashdata('gagal','<a class="card bg-warning text-white shadow">data gagal diedit!</a>');
			redirect('c_page/umkm_user');

		}
	}

	public function editprofil(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('cp','cp','required');
		// $this->form_validation->set_rules('nip','nip','required');
		// $this->form_validation->set_rules('tujuan_tugas','tujuan_tugas','required');
		if ($this->form_validation->run()!=false) {
			$this->M_umkm->edit_profil();
			$this->session->set_flashdata('berhasil','<a class="card bg-success text-white shadow">data berhasil diedit!</a>');
			redirect('c_page/profil');
			
		}else{
			$this->session->set_flashdata('gagal','<a class="card bg-warning text-white shadow">data gagal diedit!</a>');
			redirect('c_page/profil');

		}
	}
		
	public function hapusproduk($id){
		if ($id != "") {
			$this->M_umkm->hapus_produk($id);
			$this->session->set_flashdata('berhasil','<a class="card bg-success text-white shadow">data berhasil dihapus!</a>');
			redirect('c_page/umkm_user');
		}else{
			$this->session->set_flashdata('gagal','<a class="card bg-warning text-white shadow">data gagal diedit!</a>');
			redirect('c_page/umkm_user');
		}
	}

}