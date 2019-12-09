<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_umkm extends CI_Model {
	public function ambilproduk(){
		$nama_umkm = $this->session->userdata('nama_umkm');
		$jenis_umkm = $this->session->userdata('ket');
		$this->db->where('nama_umkm', $nama_umkm)->where('jenis_umkm', $jenis_umkm);
		$query = $this->db->get('produk');
		return $query->result_array();
	}

	public function ambilprofil(){
		$nama_umkm = $this->session->userdata('nama_umkm');
		$jenis_umkm = $this->session->userdata('ket');
		$this->db->where('nama_umkm', $nama_umkm)->where('jenis_umkm', $jenis_umkm);
		$query = $this->db->get('umkm');
		return $query->result_array();
	}

	public function tambah_profil()
	{
		$nama_umkm = $this->session->userdata('nama_umkm');
		$jenis_umkm = $this->session->userdata('ket');
		$data = array(
			'nama_umkm' => $this->input->post($nama_umkm),
			'jenis_umkm' => $this->input->post($jenis_umkm),
			'profil' => $this->input->post('profil'),
			'cp' => $this->input->post('cp')
		);
		return $this->db->insert('umkm',$data);
	}

	public function edit_profil()
	{
		$nama_umkm = $this->session->userdata('nama_umkm');
		$jenis_umkm = $this->session->userdata('ket');
		$data = array(
			'nama_umkm' => $this->input->post($nama_umkm),
			'jenis_umkm' => $this->input->post($jenis_umkm),
			'profil' => $this->input->post('profil'),
			'cp' => $this->input->post('cp')
		);
		$id_user_lama = $this->input->post('id');
		$this->db->where('id', $id_user_lama);
		return $this->db->update('umkm',$data);
	}

	public function hapus_mhs($id){
		return $this->db->delete('mhs',array('id' =>$id));
	}

}
