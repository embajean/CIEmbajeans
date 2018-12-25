<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ordering extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$sess = $this->session->userdata('data');
		if(!empty($sess)){
			$this->load->model('Mod_cart');
			$this->load->model('Mod_ordering');
			$this->load->model('Mod_login');
			$this->load->model('Mod_barang');
			$this->load->library('user_agent');
		}else{
			redirect('Login','refresh');
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

		$sess = $this->session->userdata('data');
		$id = $sess['id'];


		//masuk db transaksi
		$now = $this->db->query('select now() as now')->row();

		$jumlah_barang = $this->input->post('eQty');
		$tgl_beli = $now->now;
		$total_harga = $this->input->post('subtotal');
		$provinsi = $this->input->post('provinsi');
		$city = $this->input->post('kota');
		$kurir = $this->input->post('kurir');
		$estimasi = $this->input->post('estimasi_hari');
		$method = $this->input->post('methodpay');
		$alamat = $this->input->post('alamatujuan');
		$catatan = $this->input->post('catatan');
		$status = 'nonpaid';
		$ongkir = $this->input->post('ongkir');
		$sku = $this->input->post('sku');
		$size = $this->input->post('size');
		$qty = $this->input->post('qty');

		

		$cek_array = array(
			'id_user' => $id,
			'jumlah_barang' => $jumlah_barang,
			'total_harga' => $total_harga,
			'provinsi' => $provinsi,
			'city' => $city,
			'kurir' => $kurir,
			'estimasi' => $estimasi,
			'method' => $method,
			'status' => $status,
			'alamat' => $alamat,
			'catatan' => $catatan,
			'ongkir' => $ongkir,
			'sku' => $sku,
			'size' => $size,
			'qty' => $qty,
		);

		
		$harga = $total_harga + $ongkir; //total harga
		
		if(isset($jumlah_barang) == true){ //jika jumlah barang benar

			$true = 0;
			$countBarang = count($size);
			
			foreach ($size as $key_size => $value_size) { //proses cek jika ada barang yang belum diisi sizenya

				$cek_stok_barang[] = $this->Mod_ordering->cek_stok_barang($sku[$key_size], $size[$key_size]);

				if($qty[$key_size] > 0){



					if($cek_stok_barang[$key_size] >= $qty[$key_size]){
						$true++;
						
					}

				}
				

			}

			/*$this->pre(array($qty, $true, $cek_stok_barang));
			die;*/

			if($true == $countBarang ){ //if true

				$get_trans = $this->Mod_ordering->cek_inse($id, $jumlah_barang, $total_harga, $provinsi, $city, $kurir, $estimasi, $method, $status, $ongkir); //cek id transaksi sudah masuk atau belum
				$get_besok = $this->Mod_ordering->get_besok();	

			}else{ //else

				$this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4>CEK KEMBALI, STOK BARANG ADA YANG KOSONG ATAU PEMBELIAN ANDA MELEBIHI STOK !</h4></div>');
				redirect('cart/mycart','refresh');
			}

			/*$this->pre($true);
			die;*/


			

		}else{
			redirect('Shop','refresh'); //jika tidak diisi
		}

		
	/*	$this->pre($get_besok);
		die;*/

		if(!empty($get_trans)){ //jika cart = transaksi maka tampilkan
			
			/*$this->pre($get_trans);*/	
			$id_transaksi = $get_trans->id;
			$_CountDown = $get_trans->batasbayar;
			
		}else{

			$date = $this->Mod_ordering->sekarang();
			$date = $date->now;
			$exp_date = explode('-', $date);
			$implode = implode('', $exp_date);
			$exp_date = explode(' ', $implode);
			$implode = implode('', $exp_date);
			$exp_time = explode(':', $implode);
			$implode = implode('', $exp_time);
			#$explode = explode('-', string)

			$_CountDown = $get_besok->besok;
			$insert = array(
				
				'id' => 'EMB'.$implode,
				'id_user' => $id,
				'jumlah_barang' => $this->input->post('eQty'),
				'tgl_beli' => $now->now,
				'total_harga' => $this->input->post('subtotal'),
				'provinsi' => $this->input->post('provinsi'),
				'city' => $this->input->post('kota'),
				'kurir' => $this->input->post('kurir'),
				'estimasi' => $this->input->post('estimasi_hari'),
				'method' => $this->input->post('methodpay'),
				'catatan' => $this->input->post('catatan'),
				'alamat' => $this->input->post('alamatujuan'),
				'rekening' => '0113135112, AN : Kasih Karunia Sejati PT',
				'status' => 'nonpaid',
				'ongkir' => $ongkir,
				'batasbayar' => $get_besok->besok,

			);


			$insert = $this->Mod_ordering->insert($insert); //insert to tb transaksi
			$get_id = $this->Mod_ordering->get_transaksi($id); //get id transaksi
			$id_transaksi =  $get_id->id;

						
			$hargabarang = $this->input->post('harga');
			$qty = $this->input->post('qty');
			$id_barang = $this->input->post('id_barang');
			$subtotal = $this->input->post('subtotalbarang');
			$size = $this->input->post('size');
			
			/*$harga = $this->input->post('harga');
			$harga = count($harga);*/


			for ($i=0; $i < $countBarang ; $i++) { 

				$update = array(
					'id_transaksi' => $id_transaksi,
					'id_barang' => $id_barang[$i],
					'qty' => $qty[$i],
					'harga' => $hargabarang[$i],
					'subtotal' => $subtotal[$i],
					'ukuran' => $size[$i],
				);

				$get_idBarang = $this->Mod_barang->get_barang_stok($id_barang[$i], $size[$i]);
				
				$newstok = 0;
				$newstok = $get_idBarang->stok - $qty[$i]; //dapatkan stok  database - pembelian
				$update_stok['stok'] = $newstok;
				$get_SkuBarang = $get_idBarang->sku;

				$insert_detail = $this->Mod_ordering->insert_detail($update); //insert to detail transaksi
				$delete_cart = $this->Mod_cart->delete_cart($id_barang[$i], $mac, $id); //delete cart
				$updatestok = $this->Mod_barang->update_stok_by_size($get_SkuBarang, $size[$i], $update_stok);
			}

		}

		$data = array(				
			'session' => $this->session->userdata('data'),
			'cart' => $this->Mod_cart->jumlah_cart_id($mac, $id),
			'mac' => $mac,
			'data' => $this->input->post(),
			'totalharga' => $harga,
			'id_transaksi' => $id_transaksi,
			'countDown' => $_CountDown,
		);
		
		$this->load->view('Transaksi/Header2', $data);
		$this->load->view('Transaksi/Complete');
		$this->load->view('Transaksi/Footer');
		
	}

	public function upbukti($id)
	{
		$now = $this->db->query('select now() as now')->row();
		$now = $now->now;
		$file = time().$_FILES['gambar']['name'];
		$file = explode(' ', $file);
		$file = implode('_', $file);
		$data = array('id' => $id, 'bukti' => $file, 'status' => 'Diperiksa', 'tgl_tf' => $now);

		$config['file_name'] = $file;
		$config['upload_path'] = './upload_bukti/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']  = '1000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('gambar')){
			$error = array('error' => $this->upload->display_errors());

			$this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<h4>'.$error['error'].', Maks 1MB</h4>
						</div>');
				redirect('Ordering/Transaksiku','refresh');
		}
		else{

			$query = $this->Mod_ordering->upload_bukti($id, $data);
			$data = array('upload_data' => $this->upload->data());
			

			if(!empty($query)){

				$this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<h4>Terima kasih sudah melakukan pembayaran, Silahkan tunggu konfirmasi Admin</h4>
						</div>');
				redirect('Ordering/Transaksiku','refresh');

			}else{

				$this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<h4>Pembayaran Tidak Valid</h4>
						</div>');
				redirect('Ordering/Transaksiku','refresh');

			}

		}

		/*$this->pre($data);
		die;*/
		
	}

	public function Transaksiku()
	{
		$session = $this->session->userdata('data');
		$sess = $session['id'];
		$status = $session['id_stat'];

		if($status == 'guest'){

			$_myTrans = $this->Mod_ordering->_myTransGuest($sess);

		}else{

			$_myTrans = $this->Mod_ordering->_myTrans($sess);

		}
		


		$sekarang = $this->Mod_ordering->sekarang();
		$user = $this->Mod_login->user($sess);
		


		$this->load->library('pagination');
		
		$config['base_url'] 		= site_url('Ordering/Transaksiku');
		$config['total_rows'] 		= $_myTrans['numrows'];
		$config['per_page'] 		= 10;
		$config['uri_segment']		= 3;
		$config['num_links'] 		= 3;
		$config['full_tag_open'] 	= '<p>';
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
		$link =  $this->pagination->create_links();

		if($status == 'guest'){

			$data = array(
				'cart' => $this->Mod_cart->jumlah_cart_by_user($sess),
				'_myTrans' => $_myTrans,
				'sekarang' => $sekarang,
				'link' => $link,
				'session' => $this->session->userdata('data'),
			);

		}else{

			$data = array(
				'cart' => $this->Mod_cart->jumlah_cart_by_user($sess),
				'_myTrans' => $_myTrans,
				'sekarang' => $sekarang,
				'link' => $link,
				'session' => $this->session->userdata('data'),
				'user' => $user
			);
		}


		/*$this->pre($data);
		die;*/

		$this->load->view('Transaksi/Header3', $data);

		if ($this->agent->is_mobile('iphone'))
		{
		    $this->load->view('Transaksi/Mobile/Mytrans');
		}
		elseif ($this->agent->is_mobile())
		{
			$this->load->view('Transaksi/Mobile/Mytrans');
		}
		else
		{
		    $this->load->view('Transaksi/Mytrans');
		}
		


		$this->load->view('Transaksi/Footer');
	}

	function get_data_detail(){
		$id = $this->input->post('rowid');
		$data['query'] = $this->Mod_ordering->get_detail_transaksi_byId($id);
		/*$this->pre($data);
		die;*/

		$this->load->view('Transaksi/_loadDetailBeli', $data);

	}

	public function get_data_transaksi()
	{
		
		$list = $this->Mod_ordering->get_datatables();
		$data = array();

		if(isset($_POST['start'])){
			
			$no = $_POST['start'];

		}else{

			$_POST['start'] = 0;
			$_POST['lenght'] = 10;

		}
		$no = 0;
		foreach ($list as $key_field => $value_field) {
			
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $value_field->user;
			$row[] = $value_field->jumlah_barang;
			$row[] = $value_field->total_harga;
			$row[] = $value_field->tgl_beli;
			$row[] = $value_field->tgl_tf;
			$row[] = $value_field->status;
			$row[] = $value_field->batasbayar;
			$row[] = $value_field->bukti;

			$data[] = $row;

		}



		$draw = (isset($_POST['draw'])) ? $_POST['draw'] : 0;

		$output = array(
			"draw" => $draw,
			"recordsTotal" => $this->Mod_ordering->count_all(),
			"recordsFiltered" => $this->Mod_ordering->count_filtered(),
			"data" => $data,
		);

		/*$this->pre($list);
		die;*/

		echo json_encode($output);
		

	}

	function coba_explode(){
		$date = $this->Mod_ordering->sekarang();

		$date = $date->now;

		$exp_date = explode('-', $date);
		$implode = implode('', $exp_date);
		$exp_date = explode(' ', $implode);
		$implode = implode('', $exp_date);
		$exp_time = explode(':', $implode);
		$implode = implode('', $exp_time);
		//$this->pre('EMB'.$implode);
	}

	public function pre($var)
	{
		echo "<pre>";
		print_r($var);
		echo "</pre>";
	}

}

/* End of file Ordering.php */
/* Location: ./application/controllers/Ordering.php */