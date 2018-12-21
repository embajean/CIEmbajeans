<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mod_cart');
		$this->load->model('Mod_barang');
		$this->load->library('cart');
		$this->load->library('user_agent');
	}

	public function mycart() //$user, $id_shop
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

			$cart = $this->Mod_cart->jumlah_cart_by_user($id);
			$_countCart = $cart['jumlah'];

			foreach ($cart['result'] as $key_cart => $value_cart) {
				
				$gambar[] = $this->Mod_barang->get_gambar_by_sku($value_cart->sku);
			}

			if($_countCart > 0){

				$data = array(				
					'session' => $this->session->userdata('data'),
					'cart' => $cart,
					#'barang' => $gambar,
					'mac' => $mac,
					'keranjang' => 'true',
				);
			}else{

				$this->session->set_flashdata('msg','<div class="alert alert-danger alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<h4>Anda tidak mempunyia Cart</h4>
						</div>');
				redirect('Shop','refresh');

			}

			

		}else{

			$id = 0;
			$cart = $this->Mod_cart->jumlah_cart_id($mac, $id);
			$_countCart = $cart['jumlah'];

			foreach ($cart['result'] as $key_cart => $value_cart) {
				
				$gambar[] = $this->Mod_barang->get_gambar_by_sku($value_cart->sku);
			}

			if($_countCart > 0){

				$data = array(
					'session' => $this->session->userdata('data'),
					'cart' => $cart,
					#'gambar' => $gambar,
					'mac' => $mac,
					'keranjang' => 'true',
				);

			}else{

				$this->session->set_flashdata('msg','<div class="alert alert-danger alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<h4>Anda tidak mempunyia Cart</h4>
						</div>');
				redirect('Shop','refresh');

			}

			
			

		}

		
		/*$data = array(
				'session' => $this->session->userdata('data'),
				'cart' => $this->Mod_cart->jumlah_cart_id($mac, $id),
				'mac' => $mac,
			);*/
/*
			$this->pre($data);
			die;*/

		if ($this->agent->is_mobile('iphone'))
		{
		    $this->load->view('Shop/Mobile/cart', $data);
		}
		elseif ($this->agent->is_mobile())
		{
			$this->load->view('Shop/Mobile/cart', $data);
		}
		else
		{
		    $this->load->view('Shop/cart2', $data);
		}

		/*echo "Di akses dari :<br/>";
		echo "Browser = ". $agent . "<br/>";
		echo "Sistem Operasi = " . $this->agent->platform() ."<br/>"; // Platform info (Windows, Linux, Mac, etc.)
		//ip hanya muncul pada hosting
		echo "IP = " . $this->input->ip_address();*/

	}

	public function load_content()
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

			$cart = $this->Mod_cart->jumlah_cart_by_user($id);
			$_countCart = $cart['jumlah'];

			foreach ($cart['result'] as $key_cart => $value_cart) {
				
				$gambar[] = $this->Mod_barang->get_gambar_by_sku($value_cart->sku);
				$size[] = $this->Mod_barang->get_size_by_sku($value_cart->sku);
			}

			if($_countCart > 0){

				$data = array(
					'provinsi' => $this->Provinsi(),
					'kota' => $this->Kota(),
					'session' => $this->session->userdata('data'),
					'cart' => $cart,
					'gambar' => $gambar,
					'size' => $size,
					'mac' => $mac,
					'keranjang' => 'true',
				);

			}else{

				$this->session->set_flashdata('msg','<div class="alert alert-danger alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<h4>Anda tidak mempunyia Cart</h4>
						</div>');
				redirect('Shop','refresh');
			}

			

		}else{
			$id = 0;
			$cart = $this->Mod_cart->jumlah_cart_id($mac, $id);
			$_countCart = $cart['jumlah'];

			foreach ($cart['result'] as $key_cart => $value_cart) {
				
				$gambar[] = $this->Mod_barang->get_gambar_by_sku($value_cart->sku);
				$size[] = $this->Mod_barang->get_size_by_sku($value_cart->sku);
			}

			if($_countCart > 0){

				$data = array(
					'session' => $this->session->userdata('data'),
					'cart' => $cart,
					'gambar' => $gambar,
					'size' => $size,
					'mac' => $mac,
					'provinsi' => $this->Provinsi(),
					'kota' => $this->Kota(),
					'keranjang' => 'true',
				);

			}else{

				$this->session->set_flashdata('msg','<div class="alert alert-danger alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<h4>Anda tidak mempunyia Cart</h4>
						</div>');
				redirect('Shop','refresh');
			}

			

		}
		/*$data = array(
				'provinsi' => $this->Provinsi(),
				'kota' => $this->Kota(),
				'session' => $this->session->userdata('data'),
				'cart' => $this->Mod_cart->jumlah_cart_id($mac, $id),
				'mac' => $mac,
			);*/

	/*	$this->pre($data);
		die;*/

		if ($this->agent->is_mobile('iphone'))
		{
		    $this->load->view('Shop/Mobile/content_cart',$data);
		}
		elseif ($this->agent->is_mobile())
		{
			$this->load->view('Shop/Mobile/content_cart',$data);
		}
		else
		{
		    $this->load->view('Shop/content_cart',$data);
		    #$this->load->view('Shop/Mobile/content_cart',$data);
		}

		
		#$this->load->view('Shop/Bacup_contentcart',$data);
	}

	public function ins_cart()
	{
		$date = $this->db->query('select now() as now')->row();

		$id = empty($this->input->post('id_user')) ? 0 : $this->input->post('id_user');
		#$data = $this->input->post();
		$data = array(
			'id_barang' => $this->input->post('id_barang'),
			'harga' => $this->input->post('harga'),
			'qty'=> $this->input->post('qty'),
			'mac' => $this->input->post('mac'),
			'id_user' => $id,
			'tanggal' => $date->now,
		);
		
		$this->Mod_cart->ins_cart($data);
		

	}

	public function stok_size()
	{
		$sku =  $this->input->post('sku');
		$size = $this->input->post('ukuran');
		$key = $this->input->post('key');

		ob_start();
		system('ipconfig/all');
		$mycom = ob_get_contents();
		ob_clean();
		$findme = "Physical";
		$pmac = strpos($mycom, $findme);
		$mac = substr($mycom, ($pmac+36), 17);

		$sess = $this->session->userdata('data');
		$id = $sess['id'];

		if(!empty($id)){

			$cart = $this->Mod_cart->jumlah_cart_by_user($id);

		}else{

			$id = 0;
			$cart = $this->Mod_cart->jumlah_cart_id($mac, $id);

		}

		$data['data'] = $this->Mod_barang->get_stok_by_sku_size($sku, $size);
		$data['key'] = $key;
		$data['cart'] = $cart;
		$data['agent'] = $this->agent->is_mobile() or $this->agent->is_mobile('iphone') ? 'mob' : 'pc';
		/*$this->pre($data);
		die;*/
		
		$this->load->view('Shop/Stok',$data);
	}

	function subtotal(){
		$data = $this->input->post();
		$this->pre($data);
	}

	public function count_cart()
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

			$count = $this->Mod_cart->jumlah_cart_by_user($id);

		}else{

			$id = 0;
			$count = $this->Mod_cart->jumlah_cart_id($mac, $id);

		}
	/*	$data = array(
			'user' => $sess,
			'count' => $count,
		); 
		$this->pre($data);
		die;*/
		echo '('.$count['jumlah'].')';

	}


	public function navbarhome()
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

			$count = $this->Mod_cart->jumlah_cart_by_user($id);

		}else{

			$id = 0;
			$count = $this->Mod_cart->jumlah_cart_id($mac, $id);

		}

		/*$this->pre($count);
		die;*/
		echo "<ul>";
		echo '<li class="active"><a href="'.base_url().'">Home</a></li>';
		echo '<li><a href="'.site_url('Shop').'">Shop</a></li>';
		echo '<li><a href="'.site_url('Store').'">Store</a></li>';
		echo '<li><a href="#">Partnership</a></li>';
		echo '<li><a href="'.site_url('About').'">About</a></li>';
		echo '<li><a href="'.site_url('Contact').'">Contact</a></li>';
		if(!empty($sess)){
			echo '<li class="has-dropdown"><a href="#"><span class="icon-user"></span>'.$sess['namadepan'].'</a>
					<ul class="dropdown">
						<li><a href="'.site_url('Login/logout').'"> Logout </a></li>
					</ul>
				</li>';
		}else{
				echo '<li><a href="'.site_url('login').'"><span class="icon-user"></span>Login</a></li>';
										}

		echo '<li><a href="'.site_url('cart/mycart').'"><i class="icon-shopping-cart">('.$count['jumlah'].')</i></a></li>';
		echo '</ul>';
	}

	public function navbarshop()
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

			$count = $this->Mod_cart->jumlah_cart_by_user($id);

		}else{

			$id = 0;
			$count = $this->Mod_cart->jumlah_cart_id($mac, $id);

		}
		echo "<ul>";
		echo '<li><a href="'.base_url().'">Home</a></li>';
		echo '<li class="active"><a href="'.site_url('Shop').'">Shop</a></li>';
		echo '<li><a href="'.site_url('Store').'">Store</a></li>';
		echo '<li><a href="#">Partnership</a></li>';
		echo '<li><a href="'.site_url('About').'">About</a></li>';
		echo '<li><a href="'.site_url('Contact').'">Contact</a></li>';
		if(!empty($sess)){
			echo '<li class="has-dropdown"><a href="#"><span class="icon-user"></span>'.$sess['namadepan'].'</a>
					<ul class="dropdown">
						<li><a href="'.site_url('Login/logout').'"> Logout </a></li>
					</ul>
				</li>';
		}else{
				echo '<li><a href="'.site_url('login').'"><span class="icon-user"></span>Login</a></li>';
										}

		echo '<li><a href="'.site_url('cart/mycart').'"><i class="icon-shopping-cart">('.$count['jumlah'].')</i></a></li>';
		echo '</ul>';
	}

	public function navbarcart()
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

			$count = $this->Mod_cart->jumlah_cart_by_user($id);

		}else{

			$id = 0;
			$count = $this->Mod_cart->jumlah_cart_id($mac, $id);

		}
		echo "<ul>";
		echo '<li><a href="'.base_url().'">Home</a></li>';
		echo '<li><a href="'.site_url('Shop').'">Shop</a></li>';
		echo '<li><a href="'.site_url('Store').'">Store</a></li>';
		echo '<li><a href="#">Partnership</a></li>';
		echo '<li><a href="'.site_url('About').'">About</a></li>';
		echo '<li><a href="'.site_url('Contact').'">Contact</a></li>';
		if(!empty($sess)){
			echo '<li class="has-dropdown"><a href="#"><span class="icon-user"></span>'.$sess['namadepan'].'</a>
					<ul class="dropdown">
						<li><a href="'.site_url('Login/logout').'"> Logout </a></li>
					</ul>
				</li>';
		}else{
				echo '<li><a href="'.site_url('login').'"><span class="icon-user"></span>Login</a></li>';
										}

		echo '<li class="active"><a href="'.site_url('cart/mycart').'"><i class="icon-shopping-cart">('.$count['jumlah'].')</i></a></li>';
		echo '</ul>';
	}


	public function show_cart()
	{
		$output = '';
        $no = 0;
        foreach ($this->cart->contents() as $items) {
            $no++;
            $output .='
                <tr>
                    <td>'.number_format($items['price']).'</td>
                    <td>'.$items['qty'].'</td>
                    <td>'.number_format($items['subtotal']).'</td>
                    <td><button type="button" id="'.$items['rowid'].'" class="hapus_cart btn btn-danger btn-xs">Batal</button></td>
                </tr>
            ';
        }
	        $output .= '
	            <tr>
	                <th colspan="3">Total</th>
	                <th colspan="2">'.'Rp '.number_format($this->cart->total()).'</th>
	            </tr>
	        ';
        return $output;
	}


	public function Kota()
	{
		$curl = curl_init();	
		curl_setopt_array($curl, array(
		  CURLOPT_URL => "http://api.rajaongkir.com/starter/city",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET",
		  CURLOPT_HTTPHEADER => array(
		    "key: f876060c0e565d3c3242d35b5808bf04"
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		$data = json_decode($response, true);
		return $data;
		//$this->pre($data);
	}

	public function get_kota()
	{
		$output = "";
		$id = $this->input->post('province_id');
		$expId = explode(',', $id);
		$id = $expId[0];
		/*$this->pre($id);
		die;*/

		$curl = curl_init();
		curl_setopt_array($curl, array(
		  CURLOPT_URL => "http://api.rajaongkir.com/starter/city?province=$id",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET",
		  CURLOPT_HTTPHEADER => array(
		    "key: f876060c0e565d3c3242d35b5808bf04"
		  ),
		));
		 
		$response = curl_exec($curl);
		$err = curl_error($curl);
		 
		curl_close($curl);
		 
		if ($err) {
		  echo "cURL Error #:" . $err;
		} else {
		  //echo $response;
		}
		 
		$data = json_decode($response, true);
		$output .= '
		<label>Kota</label>
		<select name="city_id" id="city_id" class="form-control">';
			foreach ($data['rajaongkir']['results'] as $key => $value) {
				$output .= "<option value='".$value['city_id'].",".$value['city_name']."'>".$value['city_name']."</option>";
			}
		$output .= '</select>
		<label>Kurir</label><br> <input class="form-control" type="text" readonly value="jne" name="kurir" id="kurir">
		<br>
		<div id="div_harga"></div>';
		
		$output .= "
		<script type='text/javascript'>
			$(document).ready(function() {
				$('#city_id').click(function() {
					var city = $('#city_id').val();
					var berat = $('#totalberat').val();
					var kurir = 'kurir';
					$.ajax({
						url: '".site_url('Cart/cost')."',
						type: 'POST',
						data: {city: city, berat : berat, kurir : 
							'jne'},
						success: function(data){
							$('#div_harga').html(data);
						}
					})
					.done(function() {
						console.log('success');
					})
					.fail(function() {
						console.log('error');
					})
					.always(function() {
						console.log('complete');
					});
					
				});
			});
		</script>";
		
		echo $output;
		/*$this->pre(array('id'=>$id, 'data'=> $data));
		die;*/
	}

	

	public function Provinsi()
	{
		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "http://api.rajaongkir.com/starter/province",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET",
		  CURLOPT_HTTPHEADER => array(
		    "key: f876060c0e565d3c3242d35b5808bf04"
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);
		$data = json_decode($response, true);

		curl_close($curl);

		if($data['rajaongkir']['status']['code'] == '200'){


			return $data;

		}else{

			$data = 'gagal';
			return $data;
		}
		
		//return $data;
	}

	public function cost()
	{
		$id_kabupaten = $this->input->post('city');
		$berat = $this->input->post('berat');
		$kurir = 'jne';

		/*$this->pre($id_kabupaten);
		die;*/

		$curl = curl_init();
		curl_setopt_array($curl, array(
		  CURLOPT_URL => "http://api.rajaongkir.com/starter/cost",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  /*CURLOPT_CUSTOMREQUEST => "POST",*/
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_POSTFIELDS => "origin=256&destination=".$id_kabupaten."&weight=".$berat."&courier=".$kurir."",
		  CURLOPT_HTTPHEADER => array(
		    "content-type: application/x-www-form-urlencoded",
		    "key: f876060c0e565d3c3242d35b5808bf04"
		  ),
		));
	 
		$response = curl_exec($curl);
		$err = curl_error($curl);
	 
		curl_close($curl);
		$data['data'] = json_decode($response, true);
		if($data['data']['rajaongkir']['status']['code'] == '200'){


			$this->load->view('Shop/APIcost', $data);

		}else{

			$data['data'] = 'gagal';
			$this->load->view('Shop/APIcost', $data);
		}
		/*$this->pre($data);
		die;*/
		//return $data;
		
	}

	function update_cart($id){
		
	}



	public function load_cart(){
		echo $this->show_cart();
	}

	public function hapus_cart()
	{
		$mac = $this->input->post('mac');
		$user = $this->input->post('user');
		$id = $this->input->post('id');

		$query = $this->Mod_cart->delete_cart($id, $mac, $user);
		$this->load_content();
		$this->count_cart();
	}

	function pre($var){
		echo '<pre>';
		print_r($var);
		echo '</pre>';
	}

}

/* End of file Cart.php */
/* Location: ./application/controllers/Cart.php */