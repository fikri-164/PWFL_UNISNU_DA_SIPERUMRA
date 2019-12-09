<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class C_umkm extends CI_Controller {

	public function tambahprofil()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('profil','profil','required');
		$this->form_validation->set_rules('cp','cp','required');
		if (!$this->form_validation->run()==false) {
			$this->M_umkm->tambah_profil();
			$this->session->set_flashdata('berhasil','<label class="label label-success">data berhasil ditambahkan!</label>');
			redirect('c_page/user');
		}else {
			$this->session->set_flashdata('gagal','<label class="label label-danger">data gagal ditambahkan!</label>');
			redirect('c_page/profil');
		}
	}
		
	public function hapusmhs($id){
		if ($id != "") {
			$this->M_mhs->hapus_mhs($id);
			$this->session->set_flashdata('berhasil','<label class="label label-success">data berhasil dihapus!</label>');
			redirect('c_page/mhs');
		}else{
			$this->session->set_flashdata('gagal','<label class="label label-danger">data gagal dihapus!</label>');
			redirect('c_page/tambahmhs');
			redirect('c_page/mhs');
		}
	}

}