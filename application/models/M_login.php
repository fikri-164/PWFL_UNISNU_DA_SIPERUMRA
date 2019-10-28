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
			return false;
		}
	}
}
