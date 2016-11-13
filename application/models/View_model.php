<?php

class View_model extends CI_Model{

	public function __construct(){

    $this->load->database();

  }

  public function view_all(){

    $query = $this->db->get('status');//nama tabel
    return $query->result_array();

  }

	public function view_once(){

    $query = $this->db->get('status');//nama tabel
    return $query->result_row();

  }

	public function view_where(){

    $query = $this->db->get('status');//nama tabel
    return $query->result_array();

  }

}
