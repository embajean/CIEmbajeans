<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_barang extends CI_Model {

	var $table = 'barang';

	public function ins($data)
	{
		$query = $this->db->insert($this->table, $data);
		return $query;

	}

	public function get_new_item()
	{
		$this->db->order_by('tgl_buat', 'desc');
		$query = $this->db->get($this->table)->row();
		return $query;
	}

	public function cek_sku($sku)
	{
		return $this->db->get_where($this->table, array('SKU' => $sku))->num_rows();
	}

	public function get_gambar_by_sku($sku)
	{
		$this->db->where('sku', $sku);
		return $this->db->get('gambar')->row();
		/*return $sku;*/
	}

	public function get_gambar_by_sku2($sku)
	{
		$this->db->where('sku', $sku);
		return $this->db->get('gambar')->result();
		/*return $sku;*/
	}

	public function get_size_by_sku($sku)
	{
		$this->db->where('sku', $sku);
		return $this->db->get('stok_by_size')->result();
		/*return $sku;*/
	}

	public function get_stok_by_sku_size($sku, $size)
	{
		$this->db->where(array('sku' => $sku, 'ukuran' => $size));
		return $this->db->get('stok_by_size')->row();
	}

	public function get_barang()
	{
		/*barang.id as id, barang.sku as sku, barang.id_kategori as id_kategori, barang.gambar_depan as gambar_depan, barang.gambar_belakang as gambar_belakang, barang.gambar_samping as gambar_samping, barang.stok as stok, barang.harga as harga, barang.size as size, barang.deskripsi as dekripsi */
		$this->db->select('barang.*, kategori.kategorinama, barang.id as idbarang');
		$this->db->from('barang');
		$this->db->join('kategori','barang.id_kategori = kategori.id');
		$query = $this->db->get()->result();
		return $query;
	}

	public function get_barangby($id)
	{
		$this->db->select('barang.*, kategori.kategorinama');
		$this->db->from('barang');
		$this->db->join('kategori', 'barang.id_kategori = kategori.id');
		$this->db->where('barang.id', $id);
		$query = $this->db->get()->row();
		#$query = $this->db->get_where($this->table, array('id' => $id))->row();
		return $query;
	}

	public function delete($id)
	{
		$query = $this->db->delete($this->table, array('id' => $id));
		return $query;
		//return $this->db->delete($this->table, $id);
	}

	public function edit($id, $data)
	{
		$this->db->where('id', $id);
		$query = $this->db->update($this->table, $data);
		return $query;

	}

	public function edit_stok($sku, $ukuran, $data)
	{
		$this->db->where(array('sku' => $sku, 'ukuran' => $ukuran));
		$query = $this->db->update('stok_by_size', $data);
		return $query;
	}

	public function edit_gambar($sku, $id, $data)
	{
		$this->db->where(array('sku' => $sku, 'id' => $id));
		$query = $this->db->update('gambar', $data);
		return $query;
	}

	public function Hapus_gambar($id)
	{
		return $this->db->delete('gambar', array('id' => $id));
	}

	public function get_newarrival()
	{
		$this->db->select('*');
		$this->db->from('barang');
		$this->db->limit(4);
		$this->db->order_by('tgl_buat', 'desc');
		$query_barang = $this->db->get()->result();

		return $query_barang;

	}

	public function banyak_data()
	{
		$query = $this->db->get('barang')->num_rows();
		/*$query = $this->db->get('provinsi')->num_rows();*/
		return $query;
	}

	public function get_shop($limit, $start)
	{
		$this->db->select('barang.*, kategori.kategorinama');
		$this->db->from('barang');
		$this->db->join('kategori','barang.id_kategori = kategori.id');
		$this->db->limit($limit, $start);
		$this->db->order_by('barang.tgl_buat', 'desc');
		$query = $this->db->get()->result();
		/*$query = $this->db->get('provinsi', $limit, $start)->result();*/
		return $query;
	}

	public function get_minmax()
	{
		$this->db->select('min(harga) as min, max(harga) as max, avg(harga) as avg');
		$this->db->from('barang');
		return $this->db->get()->row();
	}

	public function ins_stok_by_size($data)
	{
		$query = $this->db->insert('stok_by_size', $data);
		return $query;
	}

	public function ins_gambar($data)
	{
		$query = $this->db->insert('gambar', $data);
		return $query;
	}

	public function get_barang_stok($id, $ukuran){
		$this->db->select('barang.sku as sku, stok_by_size.stok as stok');
		$this->db->from('barang');
		$this->db->join('stok_by_size','barang.sku = stok_by_size.sku');
		$this->db->where(array('barang.id' => $id, 'ukuran' => $ukuran));
		$query = $this->db->get()->row();
		return $query;
	}

	public function update_stok_by_size($sku, $size, $update)
	{
		$this->db->where(array('sku' => $sku, 'ukuran' => $size));
		$query = $this->db->update('stok_by_size', $update);
		return $query;
	}

}

/* End of file Mod_barang.php */
/* Location: ./application/models/Mod_barang.php */