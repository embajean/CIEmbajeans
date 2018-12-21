<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Review extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mod_review');

	}

	public function get_review($id_barang, $id_user)
	{	
		$data['data'] = $this->Mod_review->get_rev($id_barang);
		$data['id_user'] = $id_user;
		$data['id_barang'] = $id_barang;
		/*$this->pre($data);
		die;*/
		$this->load->view('Shop/Review', $data);
	}

	// Add a new item
	public function add()
	{
		$komen = $this->input->post('komen');
		$id_user = $this->input->post('user');
		$date = $this->Mod_review->get_now();
		$id_barang = $this->input->post('barang');
		$data = array(
			'id_user' => $id_user,
			'id_barang' => $id_barang,
			'tgl_input' => $date->now,
			'komen' => $komen,
		);
		
		$query = $this->Mod_review->insert($data);
		if($query == true){

			$this->get_review($id_barang, $id_user);

		}else{
			echo 'galat';
		}

		//$this->pre($data);
	}

	//Update one item
	public function update( $id = NULL )
	{

	}

	//Delete one item
	public function delete( $id = NULL )
	{

	}

	function pre($var){
		echo '<pre>';
		print_r($var);
		echo '</pre>';
	}
}

/* End of file Review.php */
/* Location: ./application/controllers/Review.php */
