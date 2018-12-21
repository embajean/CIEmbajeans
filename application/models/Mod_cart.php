<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_cart extends CI_Model {

	var $table = 'cart';

	public function ins_cart($data)
	{
		$query = $this->db->insert($this->table, $data);
		return $query;
	}

	public function jumlah_cart($mac)
	{
		$this->db->select('id_barang,mac,qty,count(qty) as sum, barang.*, kategori.berat');
		$this->db->from($this->table);
		$this->db->join('barang', 'barang.id = cart.id_barang');
		$this->db->join('kategori', 'barang.id_kategori = kategori.id');
		$this->db->where(array('mac' => $mac));
		$this->db->group_by('id_barang', 'desc');
		$query = $this->db->get()->result();
		$count = count($query);
		$arr = array(
			'jumlah' => $count,
			'result' => $query,
		);

		return $arr;
	}

	public function jumlah_cart_id($mac, $id)
	{
		$this->db->select('id_barang,mac,qty,count(qty) as sum, barang.*, kategori.berat');
		$this->db->from($this->table);
		$this->db->join('barang', 'barang.id = cart.id_barang');
		$this->db->join('kategori','kategori.id = barang.id_kategori');
		$this->db->where(array('cart.mac' => $mac, 'cart.id_user' => $id));
		$this->db->group_by('cart.id_barang', 'desc');
		/*$query = $this->db->query('SELECT * FROM cart, barang, kategori where cart.id_barang = barang.id and kategori.id = barang.id_kategori and cart.mac = "'.$mac.'" and cart.id_user= "'.$id.'" GROUP by cart.id_barang')->result();*/
		$query = $this->db->get()->result();
		$count = count($query);
		$arr = array(
			'jumlah' => $count,
			'result' => $query,
		);
		$arr2 = array(
			'id' => $id,
			'mac' => $mac,
			'query' => $query,
		);
		
		return $arr;
	}

	public function jumlah_cart_by_user($id)
	{
		$this->db->select('id_barang,mac,qty,count(qty) as sum, barang.*, kategori.berat');
		$this->db->from($this->table);
		$this->db->join('barang', 'barang.id = cart.id_barang');
		$this->db->join('kategori','kategori.id = barang.id_kategori');
		$this->db->where(array('cart.id_user' => $id));
		$this->db->group_by('cart.id_barang', 'desc');
		/*$query = $this->db->query('SELECT * FROM cart, barang, kategori where cart.id_barang = barang.id and kategori.id = barang.id_kategori and cart.mac = "'.$mac.'" and cart.id_user= "'.$id.'" GROUP by cart.id_barang')->result();*/
		$query = $this->db->get()->result();
		$count = count($query);
		$arr = array(
			'jumlah' => $count,
			'result' => $query,
		);
		return $arr;
	}

	public function delete_cart($id_barang, $mac, $user)
	{
		$this->db->where(array('id_barang' => $id_barang, 'mac' => $mac, 'id_user' => $user));
		return $this->db->delete($this->table);
	}

	public function update_cart($id, $mac, $id_barang, $data)
	{
		$this->db->where(array('id_user' => $id, 'mac' => $mac, 'id_barang' => $id_barang));
		return $this->db->update('cart', $data);
	}

}

/* End of file Mod_cart.php */
/* Location: ./application/models/Mod_cart.php */