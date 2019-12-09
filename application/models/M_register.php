<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_register extends CI_Model {

	public function user()
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'nama_umkm' => $this->input->post('nama_umkm'),
			'password' => md5($this->input->post('password')),
			'level' => $this->input->post('level'),
			'ket' => $this->input->post('ju')
		);
		return $this->db->insert('user',$data);
	}

	public function umkm()
	{
		$data = array(
			'nama_umkm' => $this->input->post('nama_umkm'),
			'jenis_umkm' => $this->input->post('ju'),
			'profil' => $this->input->post('profil'),
			'cp' => $this->input->post('cp')
		);
		return $this->db->insert('umkm',$data);
	}



}
