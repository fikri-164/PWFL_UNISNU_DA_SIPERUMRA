<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_umkm extends CI_Model {
	public function ambilproduk_admin($jenis=null){
		$this->db->where('jenis_umkm',$jenis);
		$query = $this->db->get('produk');
		return $query->result_array();
	}

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

	public function tambah_produk()
	{
		// $nama_umkm = $this->session->userdata('nama_umkm');
		// $jenis_umkm = $this->session->userdata('ket');
		$config['upload_path']          = './uploads/';
	        $config['allowed_types']        = 'gif|jpg|png';

	        $this->load->Library('upload',$config);

	        if (!$this->upload->do_upload('foto')){
				echo "foto gagal masuk";
			}else{
			$data = array(
				'nama_umkm' => $this->input->post('nama_umkm'),
				'jenis_umkm' => $this->input->post('jenis_umkm'),
				'nama_produk' => $this->input->post('nama_produk'),
				'deskripsi_produk' => $this->input->post('deskripsi_produk'),
				'harga_produk' => $this->input->post('harga_produk'),
				'foto' => $this->upload->data('file_name')
			);
			return $this->db->insert('produk',$data);
		}
	}

	public function get_foto($id)
	{
		$this->db->select('foto');
		$this->db->where('id',$id);
		return $this->db->get('produk')->row_array();
	}

	public function edit_produk()
	{
		// $nama_umkm = $this->session->userdata('nama_umkm');
		// $jenis_umkm = $this->session->userdata('ket');
		$data = array(
			'nama_produk' => $this->input->post('nama_produk'),
			'deskripsi_produk' => $this->input->post('deskripsi_produk'),
			'harga_produk' => $this->input->post('harga_produk'),
		);
		$id_user_lama = $this->input->post('id');
		$umkm = $this->input->post('nama_umkm');
		$jenis = $this->input->post('jenis_umkm');
		$this->db->where('id', $id_user_lama, 'nama_umkm', $umkm, 'jenis_umkm', $jenis);
		return $this->db->update('produk',$data);
	}

	public function edit_profil()
	{
		$nama_umkm = $this->session->userdata('nama_umkm');
		$jenis_umkm = $this->session->userdata('ket');
		$data = array(
			// 'nama_umkm' => $this->input->post($nama_umkm),
			// 'jenis_umkm' => $this->input->post($jenis_umkm),
			'profil' => $this->input->post('profil'),
			'cp' => $this->input->post('cp')
		);
		$id_user_lama = $this->input->post('id');
		$umkm = $this->input->post('nama_umkm');
		$jenis = $this->input->post('jenis_umkm');
		$this->db->where('id', $id_user_lama, 'nama_umkm', $umkm, 'jenis_umkm', $jenis);
		return $this->db->update('umkm',$data);
	}

	public function hapus_produk($id){
		return $this->db->delete('produk',array('id' =>$id));
	}

}
