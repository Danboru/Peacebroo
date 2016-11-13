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
defined('BASEPATH') OR exit('No direct script access allowed');

class Input extends CI_Controller {

	public function index()
	{
		$this->load->view('profil');
	}

	public function __construct(){

		parent::__construct();
		$this->load->helper(array('url', 'html', 'form'));

	}

	function upload(){

		$config = array(
      'upload_path' => './assets/images/upload/',
			'allowed_types' => 'jpg|jpeg|png|gif',
			'max_size' => '10000',
			'max_width' => '2000',
			'max_height' => '2000',
			'file_name' => url_title($this->input->post('inputgambar'))
			);

		$this->load->library('upload', $config);
		if( !$this->upload->do_upload()){
			$error = $this->upload->display_errors();
			$pesan = "Gagal Upload File";

			echo "<script type='text/javascript'>
								alert('$pesan');
						</script>";

						redirect(base_url('server_down'));

		}else{
			$file = $this->upload->file_name;
			$ket = $this->input->post('keterangan');
			$tgl = date('Y-m-d H:i:s');
			$data = array('file' => $file,
				'ket' => $keterangan,
				'tgl' => $tgl);
			$sukses = "Successfully Uploloaded";
			echo $sukses;
      echo $ket;

		}

	}

}
