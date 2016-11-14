<!--
    __                       __
   /\ \                     /\ \
  _\_\ \      __     __  ___\ \ \__._     ___
 /, _ . \   /'__`\  /\ \ \  \\ \  __ \   / __`\
/\  \L\  \ /\ \L\.\_\ \  V   \\ \ \_\ \ /\ \L\ \
\ \____,__\\ \__/.\_\\ \  /\  \\ \ ___,\\ \____/
 \/___, _ / \/__/\/_/ \_\_\ \__\\/__,__/ \/___/

-->

<?php

class Login extends CI_Controller{

	function __construct(){

		parent::__construct();
		$this->load->model('login_model');

		date_default_timezone_set("Asia/Bangkok");

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
				'nama' => "Da N Bo",
				'status' => "Online",
				'sekolah' => "Universitas Kristen Satyawacana",
				'alamat' =>  "Salatiga",
				'pekerjaan' => "Mahasiswa",
				'folower' => "12.000.000",
				'post' => "1000"
				);

			$this->session->set_userdata($data_session);

			redirect(base_url("profil"));

		}else{

			redirect(base_url("login_ulang"));

		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
?>
