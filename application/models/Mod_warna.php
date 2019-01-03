<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_warna extends CI_Model {

	var $table = 'warna';

	public function get_all_data()
	{
		return $this->db->get($this->table)->result();
	}
	

}

/* End of file Mod_warna.php */
/* Location: ./application/models/Mod_warna.php */