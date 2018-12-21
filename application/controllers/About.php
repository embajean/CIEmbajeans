<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
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
				'about' => 'true',
			);

		}else{
			$id = 0;
			$data = array(
				'session' => $this->session->userdata('data'),
				'cart' => $this->Mod_cart->jumlah_cart_id($mac, $id),
				'mac' => $mac,
				'about' => 'true',
			);

		}
		/*$this->pre($data);
		die;*/
		$this->load->view('About', $data);
		
	}

	function pre($var){
		echo '<pre>';
		print_r($var);
		echo '</pre>';
	}

}

/* End of file About.php */
/* Location: ./application/controllers/About.php */