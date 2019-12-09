<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class C_dt_serverside extends CI_Controller {
 
    function __construct(){
        parent::__construct();
        $this->load->model('M_dt_serverside');
    }
 
    // function index(){
    //     $this->load->view('user_view');
    // }
 
    function get_data_user()
    {
        $list = $this->M_dt_serverside->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $field->nama_produk;
            $row[] = $field->deskripsi_produk;
            $row[] = $field->harga_produk;
            $row[] = '<a href="$field->id;" class="btn btn-flat btn-primary btn-sm" data-toggle="modal" data-target="#edit"><span class="fa fa-edit"></span></a>';
            $row[] = '<a href="C_umkm/hapusproduk/$field->id;" class="btn btn-flat btn-danger btn-sm"><span class="fa fa-trash"></span></a>';
            $data[] = $row;
        }
 
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->M_dt_serverside->count_all(),
            "recordsFiltered" => $this->M_dt_serverside->count_filtered(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
    }
 
}