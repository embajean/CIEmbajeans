<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coba extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//atur session
		$this->load->model('Mod_coba');

	}

	public function index()
	{
		$test = $this->Mod_coba->get_data_row();

		#var_dump($test);
		$this->pre($test);
	}


	public function login(){

		echo '<form action="'.site_url('coba/proses').'" method="post">';
		echo "<input type='text' name='username'><br>";
		echo "<input type='password' name='password'><br>";
		echo "<input type='submit'>";
		echo '</form>';

	}

	public function proses()
	{
		$data = $this->input->post();
		$this->pre($data);

		//isi prosesnya

		$array = array(
			'nama' => $data['username']
		);
		
		$this->session->set_userdata('sess_login',$array);
		redirect('Coba/hak_akses','refresh');

	}

	public function hak_akses()
	{
		$session = $this->session->userdata('sess_login');
		echo '<a href="'.site_url('Coba/logout').'">Logout</a>';

		$this->pre($session);
	}

	public function logout($value='')
	{	
		$this->session->sess_destroy();
		redirect('Coba/login','refresh');

	}


	public function pre($var)
	{
		echo "<pre>";
		print_r($var);
		echo '</pre>';
	}

}

/* End of file Coba.php */
/* Location: ./application/controllers/Coba.php */