<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class C_cetak extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // is_login();
        $this->load->model('M_cetak');
        $this->load->library('form_validation');        
	// $this->load->library('datatables');
    }

    public function index()
    {
        $this->template->load('template','umkm/umkm_list');
    } 
 
    public function excel($p)
    {
        $this->load->helper('exportexcel');
        $namaFile = "umkm.xls";
        $judul = "umkm";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
	// xlsWriteLabel($tablehead, $kolomhead++, "Id");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Umkm");
	xlsWriteLabel($tablehead, $kolomhead++, "Jenis Umkm");
	// xlsWriteLabel($tablehead, $kolomhead++, "Profil");
	// xlsWriteLabel($tablehead, $kolomhead++, "Cp");

	foreach ($this->M_cetak->get_all($p) as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    // xlsWriteNumber($tablebody, $kolombody++, $data->id);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_umkm);
	    xlsWriteLabel($tablebody, $kolombody++, $data->jenis_umkm);
	    // xlsWriteLabel($tablebody, $kolombody++, $data->profil);
	    // xlsWriteLabel($tablebody, $kolombody++, $data->cp);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word($p)
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=umkm.doc");
      
        $data = array(
            'umkm_data' => $this->M_cetak->get_all($p),
            'start' => 0
        );
        
        $this->load->view('admin/v_cetak_doc',$data);
    }

}
