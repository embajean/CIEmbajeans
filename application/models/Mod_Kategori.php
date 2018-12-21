<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_Kategori extends CI_Model {

	public function get_all_data(){

		$query = $this->db->get('kategori')->result();
		return $query;
		
	}

	public function modal_edit_kategori($sku, $kategori)
	{
		//$this->db->get_where('stok_by_size', array('sku' => $sku))
		$this->db->select('kategori.*');
		$this->db->from('kategori');
		$this->db->join('barang', 'kategori.id = barang.id_kategori');
		$this->db->join('stok_by_size', 'stok_by_size.sku = barang.sku');
		$this->db->where(array('stok_by_size.sku' => $sku, 'kategori.id' => $kategori));
		$query = $this->db->get()->result();
		if(empty($query)){

			$kategori = $this->get_kategori_by($kategori);
			$kategori = explode(' ', $kategori->kategorinama);
			$kategori = strtolower($kategori[0]);
			$kategori = $this->get_size_by($kategori);
			$query = 0;

		}else{
			$query = $query;	
		}

		$result = array(

			'data' => $query,
			'kategori' => $kategori,
		);

		return $result;
	}

	public function insert_data($data)
	{
		$query = $this->db->insert('kategori',$data);
		return $query;
	}

	public function delete($id)
	{	
		$this->db->where('id', $id);
		$query = $this->db->delete('kategori');
		return $query;
	}

	public function edit($id, $data)
	{
		$this->db->where('id', $id);
		$query = $this->db->update('kategori', $data);
		return $query;
	}


	public function get_kategori_by($id)
	{
		return $query = $this->db->get_where('kategori', array('id' => $id))->row();
	}

	public function get_size_by($status)
	{
		if($status == 'celana'){


			for ($i=27; $i <= 38 ; $i++) { 
				
				$arr[] = $i;

			}

			$rett = array(
				'status' => 'celana',
				'size' => $arr,
			);

			return $rett;
			/*return $query = $this->db->get('ukuran_celana')->result();*/

		}else{
			$size = array('M','L','XL');

			return $arr = array(
				'status' => 'atasan',
				'size' => $size,
			);

			//return $query = $this->db->get('ukuran_baju')->result();

		}
	}

}

/* End of file Mod_Kategori.php */
/* Location: ./application/models/Mod_Kategori.php */