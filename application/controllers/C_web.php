<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_web extends CI_Controller {

	public function index()
	{
		$this->load->view('web/header');
		$this->load->view('admin/home');
		$this->load->view('web/footer');
	}
}
