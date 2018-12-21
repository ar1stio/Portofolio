<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Profil extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data user
    function index_get() {
        /*$this->db->select('*');
        $this->db->from('profil');
        $this->db->join('profilisi', 'profil.kodeprofil = profilisi.kodeprofilisi');
        $this->db->join('profilisi', 'profilisidetail.kodeprofilisidetail = profilisi.kodeprofilisi','right');
        $profil = $this->db->get()->result();        */
        $this->response($profil, 200);
    }

    function kanan_get() {
        $this->db->select('*');
        $this->db->from('profil');
        $this->db->join('profilisi', 'profil.kodeprofil = profilisi.kodeprofilisi');
        $this->db->where('profil.posisi', 'kanan');
        $this->db->where('profilisi.status', '1');
        $this->db->order_by('profil.baris', 'ASC');
        $profil = $this->db->get()->result();        
        $this->response($profil, 200);
    }

    function detail_get(){
        $kodeprofilisi =$this->get('kodeprofilisi');
        $this->db->select('*');
        $this->db->from('profilisi');
        $this->db->join('profilisidetail', 'profilisi.kodeprofilisi = profilisidetail.kodeprofilisi');
        $this->db->where('profilisi.kodeprofilisi', $kodeprofilisi);
        $this->db->where('profilisi.status', '1');
        $profil = $this->db->get()->result();        
        $this->response($profil, 200);   
    }

    function kiri_get() {
        $this->db->select('*');
        $this->db->from('profil');
        $this->db->join('profilisi', 'profil.kodeprofil = profilisi.kodeprofilisi');
        $this->db->where('profil.posisi', 'kiri');
        $this->db->where('profilisi.status', '1');
        $this->db->order_by('profil.baris', 'ASC');
        $profil = $this->db->get()->result();        
        $this->response($profil, 200);
    }

    function child_get(){
        $kodeheader =$this->get('kodeheader');
        $row = $this->db->query("select subheader.kodeheader, subheader.kodesubheader, subheader.judultombol, subheader.ling , subheader.status from header inner join subheader on header.kodeheader=subheader.kodeheader")->result();
        if ($row)
        $this->response($row, 200);
        else
        $this->response(array("status"=>"data tidak ada","Kode"=>"0"), 200);
    }

    public function getIdref($tablename){
        list($date,$time) = explode(" ",$this->getdatetimenow());
        $ymd = explode("-",$date);
        $code = $ymd[2].$ymd[1];
        $row  = $this->db->query("select kodeheader from ".$tablename." where kodeheader like '".$code."%' order by kodeheader desc")->result();
        if(count($row)==0){
            $code .= "0001";
        } else {
            $code = $code.substr("000".(str_replace($code,"",$row[0]->kodeheader)+1),-4);
        }
        return $code;
    }

    public function getdatetimenow(){
        return date("d-m-Y h:i:sa");
    }

    //Masukan function selanjutnya disini
    function index_post() {
        $target_dir = "upload/header";
        $img = $_FILES["file"]["name"];
        $tmp = $_FILES["file"]["tmp_name"];
        $kodeheader = $this->getIdref('header');        
        $target_file = $target_dir . basename($kodeheader . "_" . substr($img,-5));
        $isian = json_decode($_POST['isian']);     
        $titleheader = $isian->titleheader; 
        $status = $isian->status;
        $detailheader = $isian->detailheader;
        
        $data = array(
                    'kodeheader'              => $kodeheader,
                    'titleheader'             => $titleheader,
                    'foto'                    => $target_file,
                    'status'                  => $status,                    
                );
        if (move_uploaded_file($tmp, $target_file)) {
            $insert = $this->db->insert('header', $data);
            if ($insert) {
                if ($detailheader){
                    foreach ($detailheader as $value) {
                        $ins = $this->db->insert('headerchild',$value);
                        if (!$ins)
                            return false;                        
                    }
                }
                $message = array('status' => 'sukses', 'kode' => '1' );
                $this->response($message, 200);
            } else {
                if (file_exists($target_file)) {
                    unlink($target_file);                  
                }
                $this->response(array('status' => 'fail insert', 502));
            }
        } else {
            $this->response(array('status' => 'fail image', 502));
        }      
    }

    //edit
    function index_put() {
        parse_str(file_get_contents("php://input"),$put_vars);   

        $kodeheader = $put_vars["kodeheader"];
        $titleheader = $put_vars['titleheader']; 
        $status = $put_vars['status'];
        
        $detailheader = $put_vars['detailheader'];

        $id = $kodeheader;
        $data = array(
                    'kodeheader'              => $kodeheader,
                    'titleheader'             => $titleheader,
                    'status'                  => $status,                
                );
        $this->db->where('kodeheader', $id);
        $update = $this->db->update('header', $data);
        if ($update) {
            $message = array('status' => 'sukses', 'kode' => '1' );            
            $this->response($message, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function editfoto_post(){
        $target_dir = "upload/header";
        $kodeheader = $_POST['kodeheader'];
        $img = $_FILES["file"]["name"];
        $tmp = $_FILES["file"]["tmp_name"];       
        $this->db->where('kodeheader', $kodeheader);
        $this->db->select('foto');
        $user = $this->db->get('header')->result();
        $image = explode('/',$user[0]->image);
        $imageold = $image[1];
        $target_file = $target_dir . basename($imageold);        
        $update_file = $target_dir . basename($kodeheader . "_" . substr($img,-5));        
        $data = array('foto' => $target_file);
        if (file_exists($target_file)) {
            if (!unlink($target_file)){
                $this->response(array('status' => 'gagal hapus image', 502));                
            }else{
                if (move_uploaded_file($tmp, $update_file)) {            
                    $message = array('status' => 'sukses', 'kode' => '1' );
                    $this->db->where('kodeheader', $kodeheader);
                    $update = $this->db->update('header', $data);
                    $this->response($message, 200);
                }else{
                    $this->response(array('status' => 'gagal hapus image', 502));                
                }
            }                  
        }else {
            if (move_uploaded_file($tmp, $update_file)) {            
                $message = array('status' => 'sukses', 'kode' => '1' );
                $this->db->where('kodeheader', $kodeheader);
                $update = $this->db->update('header', $data);
                $this->response($message, 200);
            }else{
                $this->response(array('status' => 'gagal hapus image', 502));                
            }
        }   
    }

    function ambilgambar_get(){
        $user = $this->db->get('header')->result();        
        $this->response($user, 200);
    }

    function hapusfoto_post(){
        $target_dir = "upload/header";
        $kodeheader = $_POST['kodeheader'];          
        $this->db->where('kodeheader', $kodeheader);
        $this->db->select('foto');
        $user = $this->db->get('header')->result();       
        $image = explode('/',$user[0]->image);
        $imageold = $image[1];
        $target_file = $target_dir . basename($imageold);        
        $data = array('foto' => $target_file);
        if (file_exists($target_file)) {
            if (!unlink($target_file)){
                $this->response(array('status' => 'gagal hapus image', 502));                
            }else{
                $this->response(array('status' => 'Berhasil menghapus image', 502));                
            }                  
        }else {
            $this->response(array('status' => 'foto tidak ditemukan', 502));                
        }   
    }

    //Menghapus salah satu data kontak
    function index_delete() {
        parse_str(file_get_contents("php://input"),$delete_vars);
        $id = $delete_vars['kodeheader'];        
        $this->db->where('kodeheader', $id);
        $delete = $this->db->delete('header');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }   
}
?>