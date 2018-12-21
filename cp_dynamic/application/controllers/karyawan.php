<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Karyawan extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data user
    function index_get() {
        $this->db->select('*');
        $this->db->from('Karyawan');
        $this->db->where('status', '1');
        $profil = $this->db->get()->result();        
        $this->response($profil, 200);
    }

    
}
?>