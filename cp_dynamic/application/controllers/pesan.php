<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Pesan extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    function index_post() {
        $kodepesan = $this->getIdref('pesan');        
        
        /*$email = $isian->email; 
        $nama = $isian->nama;
        $subjek = $isian->subjek;
        $pesan = $isian->pesan;*/

        $email = $this->input->post('email'); 
        $nama = $this->input->post('name');
        $subjek = $this->input->post('subject');
        $pesan = $this->input->post('message');
        
        $data = array(
                    'kodepesan'              => $kodepesan,
                    'email'                  => $email,
                    'nama'                   => $nama,
                    'subjek'                 => $subjek,                    
                    'pesan'                  => $pesan,                    
                );
        $insert = $this->db->insert('pesan', $data);
        if ($insert) {
            $message = array('status' => 'sukses', 'kode' => '1', 'msg' => 'Berhasil kirim pesan' );
            $this->response($message, 200);
        } else {
            $this->response(array('status' => 'fail insert', 'msg' => 'gagal kirim pesan',502));
        }            
    }

    public function getdatetimenow(){
        return date("d-m-Y h:i:sa");
    }

    public function getIdref($tablename){
        list($date,$time) = explode(" ",$this->getdatetimenow());
        $ymd = explode("-",$date);
        $code = $ymd[2].$ymd[1];
        $row  = $this->db->query("select kodepesan from ".$tablename." where kodepesan like '".$code."%' order by kodepesan desc")->result();
        if(count($row)==0){
            $code .= "0001";
        } else {
            $code = $code.substr("000".(str_replace($code,"",$row[0]->kodepesan)+1),-4);
        }
        return $code;
    }
}