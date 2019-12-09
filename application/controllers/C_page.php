<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_page extends CI_Controller {

	public function index()
	{
		// $this->load->view('login');
		$options = array(
        'img_path'=>'./captcha/', #folder captcha yg sudah dibuat tadi
        'img_url'=>base_url('captcha'), #ini arahnya juga ke folder captcha
        'img_width'=>'145', #lebar image captcha
        'img_height'=>'45', #tinggi image captcha
        'expiration'=>7200, #waktu expired
        'font_path' => FCPATH . 'assets/font/coolvetica.ttf', #load font jika mau ganti fontnya
        'pool' => '0123456789', #tipe captcha (angka/huruf, atau kombinasi dari keduanya)
 
        # atur warna captcha-nya di sini ya.. gunakan kode RGB
        'colors' => array(
                'background' => array(242, 242, 242),
                'border' => array(255, 255, 255),
                'text' => array(0, 0, 0),
                'grid' => array(255, 40, 40))
           );
    $cap = create_captcha($options);
    $data['image'] = $cap['image'];
    $this->session->set_userdata('mycaptcha', $cap['word']);
    $data['word'] = $this->session->userdata('mycaptcha');
    $this->load->view('login',$data);
  
	}

	public function cekCaptcha(){
	 $captcha = $this->input->post('captcha_code'); #mengambil value inputan pengguna
	$word = $this->session->userdata('mycaptcha'); #mengambil value captcha
	if (isset($captcha)) { #cek variabel $captcha kosong/tidak
	   if (strtoupper($captcha)==strtoupper($word)) { #proses pencocokan captcha
	        #terserah kalian mau diisi apa di sini
	   }
	 }
	}

	public function admin()
	{
		$this->load->view('admin/t_sidebar');
		$this->load->view('admin/t_header');
		$this->load->view('admin/home');
		$this->load->view('admin/t_footer');
	}

	public function user()
	{
		if($this->session->userdata('ket')=='2' || $this->session->userdata('level')=='3'){
		$this->load->view('admin/t_sidebar');
		$this->load->view('admin/t_header');
		$this->load->view('admin/home');
		$this->load->view('admin/t_footer');
		}else{
	      echo "Anda tidak berhak mengakses halaman ini";
	    }
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
