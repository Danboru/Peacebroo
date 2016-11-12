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


  public function index()
	{

  		$this->load->view("profil");
	}


public function view($pagenya = 'login'){

  if(!file_exists(APPPATH."views/pages/".$pagenya.'.php')){

			show_404();

		}

		$this->load->view("pages/".$pagenya);

}



}
