<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_wishlist extends CI_Model {

	var $table = 'whislist';

	public function ins($data)
	{
			$query = $this->db->insert($this->table, $data);
			return $query;

	}	

	public function cek_id($id, $id_barang)
	{
		return $this->db->get_where($this->table, array('id_user'=> $id, 'id_barang' => $id_barang))->row();
	}




	public function ins_love($data)
	{
		return $query = $this->db->insert('suka', $data);
	}

	public function cek_love($id_user, $id_barang)
	{
		return $this->db->get_where('suka', array('id_user' => $id_user, 'id_barang' => $id_barang))->row();
	}

	public function del_love($id_user, $id_barang)
	{
		return $this->db->delete('suka', array('id_user' => $id_user, 'id_barang' => $id_barang));
	}
	

}

/* End of file Mod_wishlist.php */
/* Location: ./application/models/Mod_wishlist.php */