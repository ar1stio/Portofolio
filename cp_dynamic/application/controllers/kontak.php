<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Kontak extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data user
    function index_get() {
        $this->db->select('*, TIME_FORMAT(jamkerja, "%h %r") as jamkerja, TIME_FORMAT(jampulang, "%h %r") as jampulang');
        $this->db->from('kontak');
        $this->db->where('kontak.status', '1');
        $kontak = $this->db->get()->result();        
        $this->response($kontak, 200);
    }
  
}
?>