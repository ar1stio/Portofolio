<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Harga extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data user
    function index_get() {
        $this->db->select('*');
        $this->db->from('harga');
        $this->db->where('status', '1');
        $kata = $this->db->get()->result();        
        $this->response($kata, 200);
    }

    function detail_get() {
        $this->db->select('*');
        $this->db->from('harga');
        $this->db->join('hargadetail', 'hargadetail.kodeharga = harga.kodeharga');    
        $this->db->where('hargadetail.status', '1');
        $profil = $this->db->get()->result();        
        $this->response($profil, 200);
    }

    
}
?>