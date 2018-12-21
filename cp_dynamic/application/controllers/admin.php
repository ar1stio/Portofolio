<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Admin extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
        $this->load->model('admin_mdl');
    }

    //Menampilkan data user
    function index_get() {
        $batas = $this->get('batas');
        $cari = $this->get('cari');
        $user = $this->admin_mdl->admin_data($batas,$cari);
        $this->response($user, 200);
    }

    public function getIdref($tablename){
        list($date,$time) = explode(" ",$this->getdatetimenow());
        $ymd = explode("-",$date);
        $code = $ymd[2].$ymd[1];
        $row  = $this->db->query("select kodeadmin from ".$tablename." where kodeadmin like '".$code."%' order by kodeadmin desc")->result();
        if(count($row)==0){
            $code .= "0001";
        } else {
            $code = $code.substr("000".(str_replace($code,"",$row[0]->kodeadmin)+1),-4);
        }
        return $code;
    }

    public function getdatetimenow(){
        return date("d-m-Y h:i:sa");
    }

    //Masukan function selanjutnya disini
    function index_post() {
        $target_dir = "upload/admin/";
        $img = $_FILES["file"]["name"];
        $tmp = $_FILES["file"]["tmp_name"];
        $kodeadmin = $this->getIdref('admin');        
        $target_file = $target_dir . basename($kodeadmin . "_" . substr($img,-5));
        $isian = json_decode($_POST['isian']);     
        $nama = $isian->nama; 
        $password = $isian->password; 
        $status = $isian->status;
        $email = $isian->email;
        
        $data = array(
                    'kodeadmin'               => $kodeadmin,
                    'nama'                    => $nama,
                    'password'                => $password,
                    'email'                   => $email,
                    'foto'                    => $target_file,
                    'status'                  => $status,                    
                );
        if (!file_exists($target_dir)){
            mkdir($target_dir, 0755, true) ; 
        }
        if (move_uploaded_file($tmp, $target_file)) {
            $insert = $this->db->insert('admin', $data);
            if ($insert) {            
                $message = array('status' => 'sukses', 'kode' => '1', 'pesan'=>'Berhasil menyimpan data' );
                $this->response($message, 200);
            } else {
                if (file_exists($target_file)) {
                    unlink($target_file);                  
                }
                $this->response(array('status' => 'gagal', 'pesan'=>'Gagal menyimpan data', 'kode' => '0', 502));
            }
        } else {
            $this->response(array('status' => 'Gagal Menyimpan Foto', 502));
        }      
    }

    //edit
    function index_put() {
        parse_str(file_get_contents("php://input"),$put_vars);   

        $kodeadmin = $put_vars["kodeadmin"];
        $titleadmin = $put_vars['titleadmin']; 
        $status = $put_vars['status'];
        
        $detailadmin = $put_vars['detailadmin'];

        $id = $kodeadmin;
        $data = array(
                    'kodeadmin'              => $kodeadmin,
                    'titleadmin'             => $titleadmin,
                    'status'                  => $status,                
                );
        $this->db->where('kodeadmin', $id);
        $update = $this->db->update('admin', $data);
        if ($update) {
            $message = array('status' => 'sukses', 'kode' => '1' );            
            $this->response($message, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function editfotoadmin_post(){
        $target_dir = "upload/admin/";
        $isian = json_decode($_POST['isian']);     
        $kodeadmin = $isian->kodeadmin;
        $judul = $isian->judul; 
        $status = $isian->statusadmin;
        $isi = $isian->isi;         
        $foto = $isian->ubahfoto;        
        $img = '';
        $tmp = '';
        if (isset($_FILES["file"]["name"])){
            $img = $_FILES["file"]["name"];
            $tmp = $_FILES["file"]["tmp_name"];                   
        }
        $this->db->where('kodeadmin', $kodeadmin);
        $this->db->select('foto');
        $user = $this->db->get('admin')->result();
        $image = explode('/',$user[0]->foto);
        $imageold = $image[2];    
        $target_file = $target_dir . basename($imageold);        
        $update_file = $target_dir . basename($kodeadmin . "_" . substr($img,-5));        
        $data = array(
            'kodeadmin'              => $kodeadmin,
            'judul'                   => $judul,
            'isi'                     => $isi,
            'foto'                    => $update_file,
            'status'                  => $status,                    
        );

        if ($foto==$user[0]->foto){
            $data['foto'] = $foto;
            $message = array('status' => 'sukses', 'kode' => '1', 'data' => $data );
            $this->db->where('kodeadmin', $kodeadmin);
            $update = $this->db->update('admin', $data);
            $this->response($message, 200);
            return false;
        }

        if (file_exists($target_file)) {
            if (!unlink($target_file)){
                $this->response(array('status' => 'gagal hapus foto lama', 502));                
            }else{
                if (move_uploaded_file($tmp, $update_file)) {            
                    $message = array('status' => 'sukses', 'kode' => '1', 'data' => $data );
                    $this->db->where('kodeadmin', $kodeadmin);
                    $update = $this->db->update('admin', $data);
                    $this->response($message, 200);
                }else{
                    $this->response(array('status' => 'gagal ganti foto', 502));                
                }
            }                  
        }else {
            if (move_uploaded_file($tmp, $update_file)) {            
                $message = array('status' => 'sukses', 'kode' => '1', 'data' => $data );
                $this->db->where('kodeadmin', $kodeadmin);
                $update = $this->db->update('admin', $data);
                $this->response($message, 200);
            }else{
                $this->response(array('status' => 'gagal ganti foto baru', 502));                
            }
        }   
    }

    function hapusfotoadmin_post(){
        $target_dir = "upload/admin";
        $kodeadmin = json_decode($_POST['kodeadmin']); 

        $this->db->where('kodeadmin', $kodeadmin);
        $this->db->select('foto');
        $user = $this->db->get('admin')->result(); 
        $image = explode('/',$user[0]->foto);
        $totimage = count($image);
        if ($totimage==1){
            $imageold = $image[0];            
        }elseif ($totimage==2){
            $imageold = $image[1];            
        }elseif ($totimage==3){
            $imageold = $image[2];            
        }
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
        $id = $delete_vars['kodeadmin'];        
        $this->db->where('kodeadmin', $id);
        $delete = $this->db->delete('admin');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function admindetail_post(){        
        $kodedetail = $this->getIdref('admindetail');        
        $isian = json_decode($_POST['isian']);     
        $kodeadmin = $isian->kodeadmin; 
        $tombol = $isian->tombol; 
        $tautantombol = $isian->ling;
        $status = $isian->status;
        
        $data = array(
            'kodeadmindetail'              => $kodedetail,
            'kodeadmin'                    => $kodeadmin,
            'tombol'                        => $tombol,
            'tautantombol'                  => $tautantombol,
            'status'                        => $status,                    
        );

        $insert = $this->db->insert('admindetail', $data);
        if ($insert) {            
            $message = array('status' => 'sukses', 'kode' => '1', 'pesan'=>'Berhasil menyimpan data' );
            $this->response($message, 200);
        } else {
            if (file_exists($target_file)) {
                unlink($target_file);                  
            }
            $this->response(array('status' => 'gagal', 'pesan'=>'Gagal menyimpan data', 'kode' => '0', 502));
        }
    }

    function editfotodetail_post(){
        $target_dir = "upload/admin";
        $kodeadmin = $_POST['kodeadmin'];
        $img = $_FILES["file"]["name"];
        $tmp = $_FILES["file"]["tmp_name"];       
        $this->db->where('kodeadmin', $kodeadmin);
        $this->db->select('foto');
        $user = $this->db->get('admin')->result();
        $image = explode('/',$user[0]->image);
        $imageold = $image[1];
        $target_file = $target_dir . basename($imageold);        
        $update_file = $target_dir . basename($kodeadmin . "_" . substr($img,-5));        
        $data = array('foto' => $target_file);
        if (file_exists($target_file)) {
            if (!unlink($target_file)){
                $this->response(array('status' => 'gagal hapus image', 502));                
            }else{
                if (move_uploaded_file($tmp, $update_file)) {            
                    $message = array('status' => 'sukses', 'kode' => '1' );
                    $this->db->where('kodeadmin', $kodeadmin);
                    $update = $this->db->update('admin', $data);
                    $this->response($message, 200);
                }else{
                    $this->response(array('status' => 'gagal hapus image', 502));                
                }
            }                  
        }else {
            if (move_uploaded_file($tmp, $update_file)) {            
                $message = array('status' => 'sukses', 'kode' => '1' );
                $this->db->where('kodeadmin', $kodeadmin);
                $update = $this->db->update('admin', $data);
                $this->response($message, 200);
            }else{
                $this->response(array('status' => 'gagal hapus image', 502));                
            }
        }   
    }

}
?>