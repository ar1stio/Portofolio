<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utama extends CI_Controller {
	function __construct(){
		parent::__construct();
	
		/*if($this->session->userdata('status') != "login"){
			redirect("/login");
		}*/
	}
	//home
	public function index()
	{
		$this->load->view('index');		
	}
	
	//ubah tampilan
	public function admin()
	{
		$data = array('halaman' => 'Admin','submenu'=>'Tampilan');
		$this->load->view('header', $data);
		$this->load->view('tampilan/admin/index',$data);
		$this->load->view('footer');
		$this->load->view('tampilan/admin/script');
	}

	public function header()
	{
		$data = array('halaman' => 'Header','submenu'=>'Tampilan');
		$this->load->view('header', $data);
		$this->load->view('tampilan/header/index',$data);
		$this->load->view('footer');
		$this->load->view('tampilan/header/script');
	}

	public function footer()
	{
		$data = array('halaman' => 'Footer','submenu'=>'Tampilan');
		$this->load->view('header', $data);
		$this->load->view('tampilan/footer/index',$data);
		$this->load->view('footer');
		$this->load->view('tampilan/footer/script');
	}
	
	public function harga()
	{
		$data = array('halaman' => 'Harga','submenu'=>'Tampilan');
		$this->load->view('header', $data);
		$this->load->view('harga/harga/index',$data);
		$this->load->view('footer');
		$this->load->view('harga/harga/script');
	}

	public function karir()
	{
		$data = array('halaman' => 'Karir','submenu'=>'Tampilan');
		$this->load->view('header', $data);
		$this->load->view('tampilan/Karir/index',$data);
		$this->load->view('footer');
		$this->load->view('tampilan/Karir/script');
	}

	public function karyawan()
	{
		$data = array('halaman' => 'Karyawan','submenu'=>'Tampilan');
		$this->load->view('header', $data);
		$this->load->view('tampilan/karyawan/index',$data);
		$this->load->view('footer');
		$this->load->view('tampilan/karyawan/script');
	}

	public function katamutiara()
	{
		$data = array('halaman' => 'Katamutiara','submenu'=>'Tampilan');
		$this->load->view('header', $data);
		$this->load->view('tampilan/katamutiara/index',$data);
		$this->load->view('footer');
		$this->load->view('tampilan/katamutiara/script');
	}

	public function keahlian()
	{
		$data = array('halaman' => 'Keahlian','submenu'=>'Tampilan');
		$this->load->view('header', $data);
		$this->load->view('tampilan/keahlian/index',$data);
		$this->load->view('footer');
		$this->load->view('tampilan/keahlian/script');
	}

	public function kontak()
	{
		$data = array('halaman' => 'Kontak','submenu'=>'Tampilan');
		$this->load->view('header', $data);
		$this->load->view('tampilan/kontak/index',$data);
		$this->load->view('footer');
		$this->load->view('tampilan/kontak/script');
	}

	public function pesan()
	{
		$data = array('halaman' => 'pesan','submenu'=>'Tampilan');
		$this->load->view('header', $data);
		$this->load->view('tampilan/pesan/index',$data);
		$this->load->view('footer');
		$this->load->view('tampilan/pesan/script');
	}

	public function produk()
	{
		$data = array('halaman' => 'Produk','submenu'=>'Tampilan');
		$this->load->view('header', $data);
		$this->load->view('tampilan/produk/index',$data);
		$this->load->view('footer');
		$this->load->view('tampilan/produk/script');
	}

	public function profil()
	{
		$data = array('halaman' => 'Profil','submenu'=>'Tampilan');
		$this->load->view('header', $data);
		$this->load->view('tampilan/profil/index',$data);
		$this->load->view('footer');
		$this->load->view('tampilan/profil/script');
	}

	public function teknologi()
	{
		$data = array('halaman' => 'Teknologi','submenu'=>'Tampilan');
		$this->load->view('header', $data);
		$this->load->view('tampilan/teknologi/index',$data);
		$this->load->view('footer');
		$this->load->view('tampilan/teknologi/script');
	}

	//tester
	public function tampilheader()
	{
		$this->load->view('header');
	}
	public function tampilfooter()
	{
		$this->load->view('footer');
	}
}
