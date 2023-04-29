<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//AUTENTIKASI

class M_Auth extends CI_Model {

	function login($nama,$password)
	{
	$this->db->where('nama', $nama);
	$this->db->where('password', $password);
	return $this->db->get('user');
	}

}
