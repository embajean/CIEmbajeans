<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_coba extends CI_Model {

	var $table = 'barang';

	public function get_data_row()
	{
		$row = $this->db->get($this->table)->row();
		$result = $this->db->get('barang')->result();

		$return = array(
			
			'row' => $row,
			'result' => $result,

		);

		return $return;
	}
	

}

/* End of file Mod_coba.php */
/* Location: ./application/models/Mod_coba.php */