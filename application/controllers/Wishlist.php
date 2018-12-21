<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wishlist extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		/*if(!empty($this->session->userdata('data'))){*/
			$this->load->library('cart');
			$this->load->model('Mod_wishlist');	
		/*}else{

			redirect('login','refresh');

		}*/
		
	}

	public function insert()
	{
		$data = $this->input->post();
		$id = $this->input->post('id_user');
		$barang = $this->input->post('id_barang');

		$cek = $this->Mod_wishlist->cek_id($id, $barang);

		if($cek == true){
			echo "<script>alert('Sudah Mempunyai Wishlist')</script>";
		}else{

			$this->Mod_wishlist->ins($data);

		}

	}

	public function love()
	{
		$data = $this->input->post();
		$id = $this->input->post('id_user');
		$barang = $this->input->post('id_barang');

		$cek = $this->Mod_wishlist->cek_love($id, $barang);
		/*$this->pre($data);
		die;*/

		if($cek == true){
			
			$this->Mod_wishlist->del_love($id, $barang);

		}else{

			$this->Mod_wishlist->ins_love($data);

		}
	}

	function pre($var){
		echo "<pre>";
		print_r($var);
		echo '</pre>';
	}

}

/* End of file Wishlist.php */
/* Location: ./application/controllers/Wishlist.php */