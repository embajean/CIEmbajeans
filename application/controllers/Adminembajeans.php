<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminembajeans extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$session =  $this->session->userdata('data');
		
		if($session['id_stat'] == 'adminemba' && $session['status'] == 'Login'){

			$this->load->model("Mod_transaksi");

		}else{
			redirect('Login/Admembajeans','refresh');
			
		}
		
	}

	public function index()
	{
		$data = array(
			'sess' => $this->session->userdata('data'),
		);

		$this->load->view('Admin/Index2', $data);
		/*$this->load->view('Admin/Index');*/
	}

	public function beranda()
	{
		$this->pre($this->session->userdata());
	}

	public function invoice()
	{	
		$invoice = $this->Mod_transaksi->get_all_invoice();
		$data = array(
			'sess' => $this->session->userdata('data'),
			//'data' => $
		);
	}

	function pre($var){
		echo '<pre>';
		print_r($var);
		echo '</pre>';
	}

}

/* End of file Adminembajeans.php */
/* Location: ./application/controllers/Adminembajeans.php */