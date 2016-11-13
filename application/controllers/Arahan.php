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

class Arahan extends CI_Controller{

  public function __construct(){

    parent::__construct();

    //model yang di gunakan
    $this -> load -> model('insert_model');
    $this -> load -> model('update_model');
    $this -> load -> model('delete_model');
    $this -> load -> model('get_model');

    //helper yang di gunakan
    $this -> load -> helper('url_helper');

  }

  public function index()
	{
    $this->load->view("login");

	}

  //function dinamis view lihat di config/Router ----> $router[(:any)] = "view/pages/$1"
  public function view($pagenya = 'login'){

  // parameter $data harus sama dengan nama entitas
  $data['isi_status'] = $this->get_model->get_all();//class->model->function
  $data['judul'] = "Statusnya";

  //melihat apakah dta ada di dalam view
  if(!file_exists(APPPATH."views/pages/".$pagenya.'.php')){

    //fungsi bawaan
			show_404();

		}

    //meload view sesuai dengan url yang di masukkan
		$this -> load -> view("pages/".$pagenya , $data);

}

}
