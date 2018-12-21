<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('nomor_telpon');
		$this->load->model('Mod_barang');
		$this->load->model('Mod_cart');
		$this->load->helper(array('url'));
		$this->load->library('cart');
		$this->load->model('Mod_kategori');
	}

	public function index()
	{
		#$data = array();

		ob_start();
		system('ipconfig/all');
		$mycom = ob_get_contents();
		ob_clean();
		$findme = "Physical";
		$pmac = strpos($mycom, $findme);
		$mac = substr($mycom, ($pmac+36), 17);

		$sess = $this->session->userdata('data');
		$id = $sess['id'];

		$banyak_data = $this->Mod_barang->banyak_data();

		/*$this->pre($banyak_data);
		die;*/

		$this->load->library('pagination');
		
		$config['base_url'] = site_url('shop/index');
		$config['total_rows'] = $banyak_data;
		$config['per_page'] = 20;
		$config['uri_segment'] = 3;
		$config['num_links'] = 3;
		$config['full_tag_open'] = '<p>';
		$config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $from = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $start = $config['per_page'];
		
		$this->pagination->initialize($config);

		$_listBarang = $this->Mod_barang->get_shop($start, $from);

		$tanggal = date('Y-m-d');

		foreach ($_listBarang as $key_barang => $value_barang) {
			
			$_listGambar[] = $this->Mod_barang->get_gambar_by_sku2($value_barang->sku);

		}

		$_listGambar = !empty($_listGambar) ? $_listGambar : null;



		if(!empty($sess)){

			$data = array(
				'barang' => $_listBarang,
				'gambar' => $_listGambar,
				'session' => $this->session->userdata('data'),
				'cart' => $this->Mod_cart->jumlah_cart_by_user($id),
				'mac' => $mac,
				'minmax' => $this->Mod_barang->get_minmax(),
				'home' => 'shop',
				'kategori' => $this->Mod_kategori->get_all_data(),
			);

		}else{
			$id = 0;
			$data = array(
				'barang' => $_listBarang,
#				'diskon' => $diskon,
				'gambar' => $_listGambar,
				'session' => $this->session->userdata('data'),
				'cart' => $this->Mod_cart->jumlah_cart_id($mac, $id),
				'mac' => $mac,
				'minmax' => $this->Mod_barang->get_minmax(),
				'home' => 'shop',
				'kategori' => $this->Mod_kategori->get_all_data(),
			);

		}

		
		/*$this->pre($data);
		die;*/
		
		/*$this->load->view('Shop', $data);*/
		$this->load->view('Header', $data);
		$this->load->view('Shop2');
		$this->load->view('Footer');

		/*$data = array(
			'nomor' => $this->nomor_telpon->nomor(),
			'barang' => $this->Mod_barang->
		);
		$this->load->view('Shop', $data);*/
	}

	function single($id){
		//get mac address
		ob_start();
		system('ipconfig/all');
		$mycom = ob_get_contents();
		ob_clean();
		$findme = "Physical";
		$pmac = strpos($mycom, $findme);
		$mac = substr($mycom, ($pmac+36), 17);

		//get session
		$sess = $this->session->userdata('data');
		
		$_Qbarang = $this->Mod_barang->get_barangby($id);

		$gambar_sku = $this->Mod_barang->get_gambar_by_sku2($_Qbarang->sku);
		$stok_sku = $this->Mod_barang->get_size_by_sku($_Qbarang->sku);


		if(!empty($sess)){

			$data = array(
				'mac' => $mac,
				'barangby' => $_Qbarang,
				'gambar' => $gambar_sku,
				'stok' => $stok_sku,
				'cart' => $this->Mod_cart->jumlah_cart_by_user($id),
				'session' => $this->session->userdata('data'),
				'home' => 'shop',
				'id_barang' => $id,
			);	

		}else{
			$id_user = 0;
			$data = array(

				'mac' => $mac,
				'barangby' => $this->Mod_barang->get_barangby($id),
				'gambar' => $gambar_sku,
				'stok' => $stok_sku,
				'cart' => $this->Mod_cart->jumlah_cart_id($mac, $id_user),
				'session' => $this->session->userdata('data'),
				'home' => 'shop',
				'id_barang' => $id,
			);
		}

		/*$this->pre($data);
		die;*/
		
		$this->load->view('Shop/Single2', $data);
	}

	public function get_stok_single(){
		$sku = $this->input->post('sku');
		$size = $this->input->post('size');
		
		$data['stok'] = $this->Mod_barang->get_stok_by_sku_size($sku, $size);

		$this->load->view('Shop/Get_stok', $data);

	}


	public function checkout() //$user, $id_shop
	{
		$this->load->view('Shop/cart2');
	}

	function pre($var){
		echo '<pre>';
		print_r($var);
		echo '</pre>';
	}

}

/* End of file Shop.php */
/* Location: ./application/controllers/Shop.php */