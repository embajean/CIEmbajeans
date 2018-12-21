<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mod_kategori');

	}

	// List all your items
	public function index()
	{	
		$query = $this->Mod_kategori->get_all_data();
		$data = array(
			'data' => $query,
		);
		$this->load->view('Admin/_LoadKategori', $data);
	}

	// Add a new item
	public function add()
	{	
		$kategori = $this->input->post('kategorinama');
		if(!empty($kategori)){

			$data = $this->input->post();
			$query = $this->Mod_kategori->insert_data($data);
			$this->index();

		}else{
			echo 'Silahkan isi Kategori';
			$this->index();
		}
		//$this->index;
	}

	//Update one item
	public function update($id)
	{
		$data = $this->input->post();
		$query = $this->Mod_kategori->edit($id,$data);
		$this->index();
	}

	//Delete one item
	public function delete($id)
	{
		$this->Mod_kategori->delete($id);
		$this->index();
	}

	public function modal_edit_get_stok()
	{
		$data = $this->input->post();
		$sku = $this->input->post('sku');
		$kategori = $this->input->post('id');
		$result = $this->Mod_kategori->modal_edit_kategori($sku, $kategori);
		$this->pre(array($data, $result));
		die;
	}

	function pre($var){
		echo '<pre>';
		print_r($var);
		echo '</pre>';
	}
}

/* End of file Kategori.php */
/* Location: ./application/controllers/Kategori.php */
