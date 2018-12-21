<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_review extends CI_Model {

	public function get_rev($id_barang)
	{
		$this->db->select('user.usernama_depan as nama, user.images as images, review.tgl_input as tgl, review.komen as komen');
		$this->db->from('user');
		$this->db->join('review','user.id = review.id_user');
		$this->db->join('barang', 'barang.id = review.id_barang');
		$this->db->order_by('review.tgl_input', 'desc');
		$this->db->where('review.id_barang', $id_barang);

		$query = $this->db->get()->result();
		$count = count($query);
		$arr = array(
			'count' => $count,
			'query' => $query
		);
		return $arr;

	}

	public function insert($data)
	{
		$query = $this->db->insert('review', $data);
		return $query;
	}

	function get_now(){

		$query = $this->db->query('select now() as now')->row();
		return $query;

	}

}

/* End of file Mod_review.php */
/* Location: ./application/models/Mod_review.php */