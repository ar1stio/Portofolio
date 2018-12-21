<?php
class Login extends CI_Controller{

	function index(){
		$this->load->view('login');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$data_session = array(
			'nama' => $username,
			'status' => "login"
			);

		$this->session->set_userdata($data_session);

		redirect(base_url());
		
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
