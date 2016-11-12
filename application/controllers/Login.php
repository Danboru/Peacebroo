<?php

class Login extends CI_Controller{

	function __construct(){

		parent::__construct();
		$this->load->model('login_model');

	}

	function index(){
		$this->load->view('pages/login');
	}

	function aksi_login(){
		$username = $this->input->post('email');
		$password = $this->input->post('pass');

		$where = array(
			'email' => $username,
			'password' => md5($password)
			);

		$cek = $this->login_model->cek_login("user",$where)->num_rows();

		if($cek > 0){
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			redirect(base_url("profil"));

		}else{
			echo "Username dan password salah !";
		}
	}


	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
?>
