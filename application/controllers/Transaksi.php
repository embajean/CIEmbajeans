<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!empty($this->session->userdata('data'))){

			$qty = $this->input->post('qty');
			$qty = count($qty);
			$jumlah = $this->input->post('jumlahbarang_beli');
			/*$this->pre(array($qty, $jumlah));
			die;*/

			if($qty < $jumlah){

				$this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4>HARAP ISI UKURAN DAN JUMLAH PEMESANAN !! JIKA STOK KOSONG SILAHKAN HAPUS DARI CART</h4></div>');
				redirect('cart/mycart','refresh');

			}else{

				$this->load->model('Mod_cart');

				$harga = count($qty);
				$harga = $harga;
				/*$this->pre($this->input->post());
				die;*/
				/*$jumlahbarang = count($harga);*/

				for($i = 0; $i < $harga; $i++){

					$databarang = array(
						'harga' => $this->input->post('harga'),
						'id_barang' => $this->input->post('id_barang'),
						'sku' => $this->input->post('sku'),
						'namabarang'=> $this->input->post('namabarang'),
						'qty' => $this->input->post('qty'),
						'subtotalbarang' => $this->input->post('subtotalbarang'),
						'size' => $this->input->post('size'),
					);
				}

				

				$datatransaksi = array(
					'id_user' => $this->input->post('id_user'),
					'berat' => $this->input->post('berat'),
					'promo' => $this->input->post('promo'),
					'catatan' => $this->input->post('catatan'),
					'subtotalall' => $this->input->post('subtotalall'),
					'alamattujuan' => $this->input->post('alamattujuan'),
					'province_id' => $this->input->post('province_id'),
					'city_id' => $this->input->post('city_id'),
					'kurir' => $this->input->post('kurir'),
					'cost' => $this->input->post('cost'),
					'kodepromo' => $this->input->post('kodepromo'),
				);
				
				$_Sesdatabarang = $this->session->set_userdata('datatransaksi', $datatransaksi);
				$_Sesdatatransaksi = $this->session->set_userdata('databarang', $databarang);
			}


		}else{

			echo "<script>alert('Silahkan login Dahulu')</script>";
			$qty = !empty($this->input->post('qty')) ? $this->input->post('qty') : array();
			$harga = count($qty);
			$harga = $harga;
			/*$jumlahbarang = count($harga);*/

			if(!empty($qty)){

				for($i = 0; $i < $harga; $i++){
					$databarang = array(
						'harga' => $this->input->post('harga'),
						'id_barang' => $this->input->post('id_barang'),
						'sku' => $this->input->post('sku'),
						'namabarang'=> $this->input->post('namabarang'),
						'qty' => $this->input->post('qty'),
						'subtotalbarang' => $this->input->post('subtotalbarang'),
						'size' => $this->input->post('size'),
					);

				}

				/*$batasbayar = $this->db->query('SELECT now() + INTERVAL  1 day as batasbayar')->row();*/

				$datatransaksi = array(
					'id_user' => $this->input->post('id_user'),
					'berat' => $this->input->post('berat'),
					'promo' => $this->input->post('promo'),
					'catatan' => $this->input->post('catatan'),
					'alamattujuan' => $this->input->post('alamattujuan'),
					'subtotalall' => $this->input->post('subtotalall'),
					'province_id' => $this->input->post('province_id'),
					'city_id' => $this->input->post('city_id'),
					'kurir' => $this->input->post('kurir'),
					'cost' => $this->input->post('cost'),
					'kodepromo' => $this->input->post('kodepromo'),
					

				);
				
				$this->session->set_userdata('datatransaksi', $datatransaksi);
				$this->session->set_userdata('databarang', $databarang);

				/*$this->pre(array(
					'barang' => $databarang,
					'transaksi' => $datatransaksi,
				));*/
				redirect('login/logintransaksi','refresh');

			}else{

				$this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4>HARAP ISI UKURAN DAN JUMLAH PEMESANAN !!</h4></div>');
				redirect('cart/mycart','refresh');
			}

			

		}
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

		$session = $this->session->userdata('data');
		$id = $session['id'];

		$data = array(
			'databarang' => $this->session->userdata('databarang'),
			'datatransaksi' => $this->session->userdata('datatransaksi'),
			'log' => $this->session->userdata('data'),
			'cart' => $this->Mod_cart->jumlah_cart_id($mac, $id),
			'session' => $session,
		);


		//proses update cart
		$count = count($data['databarang']['harga']);

		for ($i= 0; $i < $count; $i++) {

			$update = array(
				'id_user' => $id,
				'mac' => $mac,
				'id_barang' => $data['databarang']['id_barang'][$i],
				'qty' => $data['databarang']['harga'][$i],
				//'harga' => $data['databarang']['harga'][$i],

			);

			$id_user = 0;
			//$id_barang = $data['databarang'][$i]['id_barang'][$i];
			$id_barang = $data['databarang']['id_barang'][$i];
			$query = $this->Mod_cart->update_cart($id_user, $mac, $id_barang, $update);

		}
		/*$this->pre($data);
		die;*/

		if(!empty($data['databarang']['harga'])){

			$this->load->view('Transaksi/Header', $data);
			$this->load->view('Transaksi/Checkout');
			$this->load->view('Transaksi/Footer');

		}else{
			$this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<h4>Tidak ada barang yang ditransaksi</h4>
						</div>');
			redirect('cart/mycart','refresh');
		}

		
		
	}

	public function pre($var)
	{
		echo "<pre>";
		print_r($var);
		echo "</pre>";
	}

}

/* End of file Transaksi.php */
/* Location: ./application/controllers/Transaksi.php */