<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_cetak extends CI_Model
{

    public $table = 'produk';
    public $id = '';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    // function get_all($jenis=null)
    // {
        // $this->db->order_by($this->id, $this->order);
    //     $this->db->where('jenis_umkm',$jenis);
    //     return $this->db->get('produk')->result();
    // }
    function get_all($p)
    {
        // $this->db->order_by($this->id, $this->order);
        $this->db->where('jenis_umkm',$p);
        return $this->db->get('produk')->result();
    }


    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }

}

