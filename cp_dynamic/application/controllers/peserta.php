<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Peserta extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data user
    function index_get() {
        $id = $this->get('id');
        if ($id == '') {
            $user = $this->db->get('peserta')->result();
        } else {
            $this->db->where('kodepeserta', $id);
            $user = $this->db->get('peserta')->result();
        }
        $this->response($user, 200);
    }

    function limit_get() {
        $id = $this->get('id');
        if ($id == '') {
            $user = $this->db->get('peserta')->result();
        } else {
            $this->db->select('count(*) as jumlah, *');
            $this->db->where('kodepeserta', $id);
            $user = $this->db->get('peserta')->result();
        }
        $this->response($user, 200);
    }

    public function getIdref($tablename){
        list($date,$time) = explode(" ",$this->getdatetimenow());
        $ymd = explode("-",$date);
        $code = $ymd[2].$ymd[1];
        /*var_dump("select kodepeserta from ".$tablename." where kodepeserta like '".$code."%'");
        exit;*/
        $row  = $this->db->query("select kodepeserta from ".$tablename." where kodepeserta like '".$code."%' order by kodepeserta desc")->result();
       /* var_dump($row[0]->kodepeserta);
        exit;*/
        //$row   = $this->db->get("kodepeserta like '".$code."%'")->select('kodepeserta')->order('kodepeserta desc')->fetch();
        if(count($row)==0){
            $code .= "0001";
        } else {
            $code = $code.substr("000".(str_replace($code,"",$row[0]->kodepeserta)+1),-4);
        }
        return $code;
    }

    public function getdatetimenow(){
        return date("d-m-Y h:i:sa");
    }

    //Masukan function selanjutnya disini
    function index_post() {
        $target_dir = "upload/";
        $img = $_FILES["file"]["name"];
        $tmp = $_FILES["file"]["tmp_name"];
        $kodepeserta = $this->getIdref('peserta');        
        $target_file = $target_dir . basename($kodepeserta . "_" . substr($img,-5));
        $isian = json_decode($_POST['isian']);     
        $namapeserta = $isian->first_name . " " . $isian->last_name; 
        $pendidikan = $isian->pendidikan;
        $email = $isian->email;
        $nohp = $isian->nohp;
        $jk = $isian->jk;
        $alamat = $isian->alamat;
        
        $data = array(
                    'kodepeserta'             => $kodepeserta,
                    'namapeserta'             => $namapeserta,
                    'pendidikan'              => $pendidikan,
                    'email'                   => $email,
                    'nohp'                    => $nohp,
                    'jk'                      => $jk,
                    'alamat'                  => $alamat,
                    'image'                   => $target_file
                );
        if (move_uploaded_file($tmp, $target_file)) {
            $insert = $this->db->insert('peserta', $data);
            if ($insert) {
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

        $kodepeserta = $put_vars["kodepeserta"];
        $namapeserta = $put_vars['first_name'] . " " . $put_vars['last_name']; 
        $pendidikan = $put_vars['pendidikan'];
        $email = $put_vars['email'];
        $nohp = $put_vars['nohp'];
        $jk = $put_vars['jk'];
        $alamat = $put_vars['alamat'];

        $id = $kodepeserta;
        $data = array(
                    'kodepeserta'             => $kodepeserta,
                    'namapeserta'             => $namapeserta,
                    'pendidikan'              => $pendidikan,
                    'email'                   => $email,
                    'nohp'                    => $nohp,
                    'jk'                      => $jk,           
                    'alamat'                  => $alamat, 
                );
        $this->db->where('kodepeserta', $id);
        $update = $this->db->update('peserta', $data);
        if ($update) {
            $message = array('status' => 'sukses', 'kode' => '1' );            
            $this->response($message, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function editfoto_post(){
        $target_dir = "upload/";
        $kodepeserta = $_POST['kodepeserta'];
        $img = $_FILES["file"]["name"];
        $tmp = $_FILES["file"]["tmp_name"];       
        $this->db->where('kodepeserta', $kodepeserta);
        $this->db->select('image');
        $user = $this->db->get('peserta')->result();
        $image = explode('/',$user[0]->image);
        $imageold = $image[1];
        $target_file = $target_dir . basename($imageold);        
        $update_file = $target_dir . basename($kodepeserta . "_" . substr($img,-5));        
        $data = array('image' => $target_file);
        if (file_exists($target_file)) {
            if (!unlink($target_file)){
                $this->response(array('status' => 'gagal hapus image', 502));                
            }else{
                if (move_uploaded_file($tmp, $update_file)) {            
                    $message = array('status' => 'sukses', 'kode' => '1' );
                    $this->db->where('kodepeserta', $kodepeserta);
                    $update = $this->db->update('peserta', $data);
                    $this->response($message, 200);
                }else{
                    $this->response(array('status' => 'gagal hapus image', 502));                
                }
            }                  
        }else {
            if (move_uploaded_file($tmp, $update_file)) {            
                $message = array('status' => 'sukses', 'kode' => '1' );
                $this->db->where('kodepeserta', $kodepeserta);
                $update = $this->db->update('peserta', $data);
                $this->response($message, 200);
            }else{
                $this->response(array('status' => 'gagal hapus image', 502));                
            }
        }   
    }

    function hapusfoto_post(){
        $target_dir = "upload/";
        $kodepeserta = $_POST['kodepeserta'];          
        $this->db->where('kodepeserta', $kodepeserta);
        $this->db->select('image');
        $user = $this->db->get('peserta')->result();       
        $image = explode('/',$user[0]->image);
        $imageold = $image[1];
        $target_file = $target_dir . basename($imageold);        
        $data = array('image' => $target_file);
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
        $id = $delete_vars['kodepeserta'];
        /*var_dump($id);
        exit;*/
        //$id = $this->delete('id');
        $this->db->where('kodepeserta', $id);
        $delete = $this->db->delete('peserta');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
        //$this->response(array('status' => 'success'), 201);

    }
}
?>