<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Store extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->library('nomor_telpon');
		$this->load->model('Mod_cart');
	}

	public function index()
	{
		ob_start();
		system('ipconfig/all');
		$mycom = ob_get_contents();
		ob_clean();
		$findme = "Physical";
		$pmac = strpos($mycom, $findme);
		$mac = substr($mycom, ($pmac+36), 17);

		$sess = $this->session->userdata('data');
		$id = $sess['id'];

		if(!empty($sess)){
	
			$data = array(
				'session' => $this->session->userdata('data'),
				'cart' => $this->Mod_cart->jumlah_cart_by_user($id),
				'mac' => $mac,
				'store' => 'true',
			);

		}else{
			
			$id = 0;
			$data = array(
				'session' => $this->session->userdata('data'),
				'cart' => $this->Mod_cart->jumlah_cart_id($mac, $id),
				'mac' => $mac,
				'store' => 'true',
			);

		}
		
		$this->load->view('Store', $data);
	}

}

/* End of file Store.php */
/* Location: ./application/controllers/Store.php */