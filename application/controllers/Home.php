<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();

		$this->load->library('nomor_telpon');
		$this->load->model('Mod_barang');
		$this->load->model('Mod_cart');
		$this->load->model('Mod_slider');


	}

	public function index(){

		/*select COUNT(*) as jumlah_barang, sum_barang  from (select COUNT(id_barang) as jumlah_barang, SUM(id_barang) as sum_barang from cart WHERE mac="52-10-B3-3C-D4-55" GROUP by id_barang) as asu*/

		ob_start();
		system('ipconfig/all');
		$mycom = ob_get_contents();
		ob_clean();
		$findme = "Physical";
		$pmac = strpos($mycom, $findme);
		$mac = substr($mycom, ($pmac+36), 17);

		$sess = $this->session->userdata('data');
		$id = $sess['id'];

		$barang = $this->Mod_barang->get_newarrival();
		$slider = $this->Mod_slider->get_all_data();

		foreach ($barang as $key_barang => $value_barang) {
			
			$gambar[] = $this->Mod_barang->get_gambar_by_sku($value_barang->sku);

		}

		$gambar = !empty($gambar) ? $gambar : null;

		if(!empty($sess)){
				$data = array(
					'mac' => $mac,
					'barang' => $barang,
					'gambar' => $gambar,
					'cart' => $this->Mod_cart->jumlah_cart_by_user($id),
					'session' => $this->session->userdata('data'),
					'stt' => 'log',
					'home' => 'home',
					'slider' => $slider,
				);	
		}else{
			$id = 0;
			$data = array(
				'mac' => $mac,
				'barang' => $barang,
				'gambar' => $gambar,
				'cart' => $this->Mod_cart->jumlah_cart_id($mac, $id),
				'session' => $this->session->userdata('data'),
				'stt' => 'unlog',
				'home' => 'home',
				'slider' => $slider,
			);
		}
		
		/*$this->pre($data);
		die;*/
		
		$this->load->view('Header', $data);
		$this->load->view('Home4');
		$this->load->view('Footer');
	}

	public function Beranda()
	{
		//$session = $this->session->userdata('data');

			$data = array(
				'session' => $this->session->userdata('data'),
			);
			/*$this->pre($data);
			die;*/
			$this->load->view('Home2', $data);
	}

	public function storepolicy()
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
					'mac' => $mac,
					'barang' => $this->Mod_barang->get_newarrival(),
					'cart' => $this->Mod_cart->jumlah_cart_id($mac, $id),
					'session' => $this->session->userdata('data'),
					'stt' => 'log',
				);	
		}else{
			$id = 0;
			$data = array(
				'mac' => $mac,
				'barang' => $this->Mod_barang->get_newarrival(),
				'cart' => $this->Mod_cart->jumlah_cart_id($mac, $id),
				'session' => $this->session->userdata('data'),
				'stt' => 'unlog',
			);
		}

		/*$this->pre($data);
		die;*/

		$this->load->view('policy', $data);
	}

	public function payment()
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
					'mac' => $mac,
					'barang' => $this->Mod_barang->get_newarrival(),
					'cart' => $this->Mod_cart->jumlah_cart_id($mac, $id),
					'session' => $this->session->userdata('data'),
					'stt' => 'log',
				);	
		}else{

			$id = 0;
			$data = array(
				'mac' => $mac,
				'barang' => $this->Mod_barang->get_newarrival(),
				'cart' => $this->Mod_cart->jumlah_cart_id($mac, $id),
				'session' => $this->session->userdata('data'),
				'stt' => 'unlog',
			);
		}

		$this->load->view('Payment', $data);

	}

	public function Faq()
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
					'mac' => $mac,
					'barang' => $this->Mod_barang->get_newarrival(),
					'cart' => $this->Mod_cart->jumlah_cart_id($mac, $id),
					'session' => $this->session->userdata('data'),
					'stt' => 'log',
				);	
		}else{
			$id = 0;
			$data = array(
				'mac' => $mac,
				'barang' => $this->Mod_barang->get_newarrival(),
				'cart' => $this->Mod_cart->jumlah_cart_id($mac, $id),
				'session' => $this->session->userdata('data'),
				'stt' => 'unlog',
			);
		}

		$this->load->view('Faq', $data);
	}

	public function shippingandreturn()
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
					'mac' => $mac,
					'barang' => $this->Mod_barang->get_newarrival(),
					'cart' => $this->Mod_cart->jumlah_cart_id($mac, $id),
					'session' => $this->session->userdata('data'),
					'stt' => 'log',
				);	
		}else{
			$id = 0;
			$data = array(
				'mac' => $mac,
				'barang' => $this->Mod_barang->get_newarrival(),
				'cart' => $this->Mod_cart->jumlah_cart_id($mac, $id),
				'session' => $this->session->userdata('data'),
				'stt' => 'unlog',
			);
		}

		$this->load->view('Shipping', $data);
	}

	function pre($var){
		echo '<pre>';
		print_r($var);
		echo '</pre>';
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */