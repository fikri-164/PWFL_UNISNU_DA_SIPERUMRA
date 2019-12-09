<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	public function login($nama_umkm,$password)
	{
		$hasil = $this->db->where('nama_umkm',$nama_umkm)
			->where('password',$password)
			->limit(1)
			->get('user');
		if ($hasil->num_rows() > 0) {
			return $hasil->row();
		}else {
			$this->session->set_flashdata('gagal','<a class="card bg-danger text-white shadow">login gagal! silahkan cek username dan password anda!</a>');
					redirect('c_login','refresh');
			// return false;
		}
	}
}
