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

class Delete_model extends CI_Model{

	public function __construct(){

    $this->load->database();

  }

	function hapus_data($where,$table){

		$this->db->where($where);
		$this->db->delete($table);
		
	}


}
