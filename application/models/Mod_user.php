<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_user extends CI_Model {

	var $table = 'user';

	public function Update($id, $data)
	{
			$this->db->where('id', $id);
		
			$query = $this->db->update('user', $data);
			return $query;
	}	

	public function get_user($id)
	{
		$query = $this->db->get_where($this->table, array('id' => $id))->row();
		return $query;

	}

}

/* End of file Mod_user.php */
/* Location: ./application/models/Mod_user.php */