<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_mdl extends CI_Model{	
	//tabel
	private $tabel = 'admin';

	function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->database();		
	}
	
	
	//Setting
	public function admin_data($batas,$cari){			
        if ($cari == '') {
            $this->db->limit($batas);
            $user = $this->db->get('admin')->result();
        } else {
            $this->db->limit($batas);
            $this->db->like('kodeadmin', $cari)->or_like('judul',$cari);
            $user = $this->db->get('admin')->result();
        }					
		
		return $user;
	}
}
?>