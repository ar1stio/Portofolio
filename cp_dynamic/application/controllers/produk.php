<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Produk extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data user
    function index_get() {
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->join('kategoriproduk', 'kategoriproduk.kodekategori = produk.kodekategori');        
        $this->db->where('produk.status', '1');
        $profil = $this->db->get()->result();        
        $this->response($profil, 200);
    }

    function kategori_get() {
        $this->db->select('*');
        $this->db->from('kategoriproduk');
        $this->db->where('kategoriproduk.status', '1');
        $profil = $this->db->get()->result();        
        $this->response($profil, 200);
    }

    
}
?>