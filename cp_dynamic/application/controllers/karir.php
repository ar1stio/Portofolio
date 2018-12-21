<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Karir extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data user
    function index_get() {
        $this->db->select('*');
        $this->db->from('karir');
        $profil = $this->db->get()->result();        
        $this->response($profil, 200);
    }

    function detail_get(){
        $kodekarir =$this->get('kodekarir');
        $this->db->select('*');
        $this->db->from('karir');
        $this->db->join('subkarir', 'karir.kodekarir = subkarir.kodekarir','left');
        $this->db->where('karir.kodekarir', $kodekarir);
        $this->db->where('karir.status', '1');
        $profil = $this->db->get()->result();        
        $this->response($profil, 200);   
    }

}
?>