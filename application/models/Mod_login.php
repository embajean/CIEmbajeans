<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_login extends CI_Model {

	public function insert($data){

		$query = $this->db->insert('user', $data);
		return $query;

	}

	public function cek_email($email) //validasi register
	{
		$query = $this->db->get_where('user', array('email' => $email))->row();
		return $query;

	}

	public function cek_login($email, $password)
	{
		$query = $this->db->get_where('user', array('email' => $email, 'password' => $password))->row();
		return $query;
	}

	public function repas($password, $repas)
	{
		$query = $this->db->get_where('user', array('password' => $password, 'repassword' => $repas))->row();
		return $query;
	}

	public function valid_login($data)
	{
		$query = $this->db->get_where('user', $data)->row();
		return $query;
	}

	public function user($id)
	{
		$query = $this->db->get_where('user', array('id' => $id));
		return $query->row();

	}

	public function insert_guest($data)
	{
		$query = $this->db->insert('guest', $data);
		return $query;
	}

}

/* End of file Mod_login.php */
/* Location: ./application/models/Mod_login.php */