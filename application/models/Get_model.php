<?php

class Get_model extends CI_Model{

	public function __construct(){

    $this->load->database();

  }

  public function get_all(){

    $query = $this->db->get('status');//nama tabel
    return $query->result_array();

  }

	public function get_once(){

    $query = $this->db->get('status');//nama tabel
    return $query->result_row();

  }

	public function get_where($table,$where){

		$query = $this->db->get_where($table, $where);
		return $query->result_row();

  }


	public function get_where_all($table,$where){

		$query = $this->db->get_where($table, $where);
		return $query->result_array();

  }

}
