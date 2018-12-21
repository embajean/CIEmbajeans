<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//$this->load->model('Mod_provinsi');
		$this->load->model('mod_login');
		$this->load->model('Mod_cart');
		//$this->load->model('kabupaten');
	}

	public function Admembajeans()
	{
		$this->load->view('Admin/Login');
		$this->session->sess_destroy();
	}

	public function index()
	{	
		$id = 0;
		ob_start();
		system('ipconfig/all');
		$mycom = ob_get_contents();
		ob_clean();
		$findme = "Physical";
		$pmac = strpos($mycom, $findme);
		$mac = substr($mycom, ($pmac+36), 17);
		$data = array(
			'cart' => $this->Mod_cart->jumlah_cart_id($mac, $id),
		);
		$this->load->view('Login3', $data);
		$this->session->sess_destroy();
		
	}

	public function register()
	{
		$id = 0;
		ob_start();
		system('ipconfig/all');
		$mycom = ob_get_contents();
		ob_clean();
		$findme = "Physical";
		$pmac = strpos($mycom, $findme);
		$mac = substr($mycom, ($pmac+36), 17);
		$data = array(
			'cart' => $this->Mod_cart->jumlah_cart_id($mac, $id),
		);
		$this->load->view('Register', $data);
		$this->session->sess_destroy();
	}

	public function logintransaksi()
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

		$data_barang = $this->session->userdata('datatransaksi');
		$data_transaksi = $this->session->userdata('databarang');
		if(!empty($id)){
			$data = array(
				'databarang' => $data_barang,
				'data_transaksi' => $data_transaksi,
				'cart' => $this->Mod_cart->jumlah_cart_id($mac, $id),
				);	
		}else{
			$id = 0;
			$data = array(
				'databarang' => $data_barang,
				'data_transaksi' => $data_transaksi,
				'cart' => $this->Mod_cart->jumlah_cart_id($mac, $id),
			);
		}
		
		#$this->pre(array($mac, $id));
		$this->load->view('Login2', $data);
		/*$this->pre(array('databarang' => $data_barang, 'datatransaksi' => $data_transaksi));
		die;*/
		#$this->load->view('Shop/Logtrans', $data);
	}

	public function regis()
	{
		$data = array(
			'usernama_depan' => $this->input->post('usernama_depan'),
			'usernama_belakang' => $this->input->post('usernama_belakang'),
			'email' => $this->input->post('email'),
			'password' => md5($this->input->post('password')),
			'repassword' => md5($this->input->post('repassword')),
			'telephon' => $this->input->post('telephon'),
			'tgl_daftar' => $this->input->post('tgl_daftar'),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
		);

		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$repassword = $this->input->post('repassword');

		$cek = $this->mod_login->cek_email($email);

		if($cek == true){

			$this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<h4>NOTIF</h4>
						Email Sudah ada
						</div>');
			redirect('login','refresh');

		}else{

			if($password == $repassword){

				/*$this->pre($data);
				die;*/
				$query = $this->mod_login->insert($data);

				if($query == true){

					$this->session->set_flashdata('msg', 
				        '<div class="alert alert-success alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<h4>NOTIF</h4>
							Data Berhasil Masuk
						</div>');

						$data_session = array(
							'namadepan' => $data['usernama_depan'],
							'email' => $data['email'],
							'password' => $data['password'],
						);
						
						$sess =  $this->session->set_userdata('data',$data_session);

					redirect('login/process');

				}else{

					$this->session->set_flashdata('msg', 
				        '<div class="alert alert-danger alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<h4>Oppss !</h4>
							GALAT
						</div>');
						redirect('Login');

				}

			}else{

				$this->session->set_flashdata('msg', 
				        '<div class="alert alert-danger alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<h4>Oppss !</h4>
							Password tidak sama !!
						</div>');
						redirect('Login');

			}

		}

	}

	public function registrans()
	{
		$data = array(
			'usernama_depan' => $this->input->post('usernama_depan'),
			'usernama_belakang' => $this->input->post('usernama_belakang'),
			'email' => $this->input->post('email'),
			'password' => md5($this->input->post('password')),
			'repassword' => md5($this->input->post('repassword')),
			'telephon' => $this->input->post('telephon'),
			'tgl_daftar' => $this->input->post('tgl_daftar'),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
		);

		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$repassword = $this->input->post('repassword');

		$cek = $this->mod_login->cek_email($email);

		if($cek == true){

			$this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<h4>NOTIF</h4>
						Email Sudah ada
						</div>');
			redirect('login/logintransaksi','refresh');

		}else{

			if($password == $repassword){

				/*$this->pre($data);
				die;*/
				$query = $this->mod_login->insert($data);

				if($query == true){

					$this->session->set_flashdata('msg', 
				        '<div class="alert alert-success alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<h4>NOTIF</h4>
							Data Berhasil Masuk
						</div>');

						$data_session = array(
							'namadepan' => $data['usernama_depan'],
							'email' => $data['email'],
							'password' => $data['password'],
						);
						
						$sess =  $this->session->set_userdata('data',$data_session);

					redirect('login/processtrans');

				}else{

					$this->session->set_flashdata('msg', 
				        '<div class="alert alert-danger alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<h4>Oppss !</h4>
							GALAT
						</div>');
						redirect('login/logintransaksi','refresh');

				}

			}else{

				$this->session->set_flashdata('msg', 
				        '<div class="alert alert-danger alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<h4>Oppss !</h4>
							Password tidak sama !!
						</div>');
						redirect('login/logintransaksi','refresh');

			}

		}
	}

	function process(){
		
		$sess = $this->session->userdata('data');
		$status = empty($this->input->post('stt')) ? null : $this->input->post('stt');
		/*$this->pre($status);
		die;*/

		if(empty($status)){

			$arr = array(
				'email' => $this->input->post('email'),
				'password' => md5($this->input->post('password')),
			);

			/*$this->pre($arr);
			die;*/

			$validasi = $this->mod_login->valid_login($arr);

			/*$this->pre(array($arr, $validasi));
			die;*/
			
			if($validasi != null){
				
				$data_session = array(
					'id' => $validasi->id,
					'namadepan' => $validasi->usernama_depan,
					'email' => $validasi->email,
					'password' => $validasi->password,
					'status' => 'Login',
					'id_stat' => 'user',
				);
				
				$qq = $this->session->set_userdata('data', $data_session);
				
				redirect('','refresh');

			}else{

				$this->session->set_flashdata('msg', 
						'<div class="alert alert-danger alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<h4>Oppss !</h4>
							Email / Password Salah !!
						</div>');
				redirect('login','refresh');
			}
		
		}else{

			$email = $this->input->post('email');
			$password = md5($this->input->post('password'));

			$data = array(
				'email' => $email,
				'password' => $password,
			);

			$validasi = $this->mod_login->valid_login($data);
			
			if($validasi != null){

				if($validasi->status == 'adm'){

					$data_session = array(
					'id' => $validasi->id,
					'namadepan' => $validasi->usernama_depan,
					'email' => $validasi->email,
					'password' => $validasi->password,
					'status' => 'Login',
					'id_stat' => 'adminemba',
					);
					
					$qq = $this->session->set_userdata('data', $data_session);
					
					redirect('Adminembajeans','refresh');

				}else{

					$data_session = array(
					'id' => $validasi->id,
					'namadepan' => $validasi->usernama_depan,
					'email' => $validasi->email,
					'password' => $validasi->password,
					'status' => 'Login',
					'id_stat' => 'user',
					);
					
					$qq = $this->session->set_userdata('data', $data_session);
					
					redirect('','refresh');

				}

			}else{
				$this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						Email / Passowrd Salah ! !
						</div>');
				redirect('Login/Admembajeans','refresh');

			}

		}

	}

	public function processtrans()
	{
		$sess = $this->session->userdata('data');

		ob_start();
		system('ipconfig/all');
		$mycom = ob_get_contents();
		ob_clean();
		$findme = "Physical";
		$pmac = strpos($mycom, $findme);
		$mac = substr($mycom, ($pmac+36), 17);

		if($sess == true){

			$arr = array(
				'email' => $sess['email'],
				'password' => $sess['password']
			);

			/*$this->pre(array('data' => $data, 'status' => 'true'));
			die;*/
			

			$validasi = $this->mod_login->valid_login($arr);
			
			if($validasi != null){
				
				$data_session = array(
					'id' => $validasi->id,
					'namadepan' => $validasi->usernama_depan,
					'email' => $validasi->email,
					'password' => $validasi->password,
					'status' => 'Login',
					'id_stat' => 'user',
				);
				
				$qq = $this->session->set_userdata('data', $data_session);
				
				redirect('','refresh');

			}else{

				$this->session->flashdata('msg', 
						'<div class="alert alert-danger alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<h4>Oppss !</h4>
							Email / Password Salah !!
						</div>');
				redirect('login/logintransaksi','refresh');
			}
		
		}else{

			$email = $this->input->post('email');
			$password = md5($this->input->post('password'));

			$data = array(
				'email' => $email,
				'password' => $password,
			);



			$validasi = $this->mod_login->valid_login($data);
			
			if($validasi != null){

				if($validasi->status == 'adm'){

					$data_session = array(
					'id' => $validasi->id,
					'namadepan' => $validasi->usernama_depan,
					'email' => $validasi->email,
					'password' => $validasi->password,
					'status' => 'Login',
					'id_stat' => 'adminemba',
					);
					
					$qq = $this->session->set_userdata('data', $data_session);
					
					redirect('Adminembajeans','refresh');

				}else{

					$_CBarang = $this->session->userdata('databarang');
					$_CTransaksi = $this->session->userdata('datatransaksi');
					$user = 0;

					$_SumCart = count($_CBarang['id_barang']);

					for ($key_cart = 0; $key_cart < $_SumCart ; $key_cart++) { 

						$_UpCart[$key_cart] = array(
							'id_barang' => $_CBarang['id_barang'][$key_cart],
							'qty' => $_CBarang['qty'][$key_cart],
							'id_user' => $validasi->id,
						);
						
						$this->Mod_cart->update_cart($user, $mac, $_CBarang['id_barang'][$key_cart], $_UpCart[$key_cart]);

					}

				/*	$this->pre(
						array(
							'data' => $data, 
							'validasi' => $validasi,
							'status' => 'else',
							'barang' => $_CBarang,
							'transaksi' => $_CTransaksi,
							'mac' => $mac,
							'upcart' => $_UpCart,
						)
					);
					die;*/

					$data_session = array(
					'id' => $validasi->id,
					'namadepan' => $validasi->usernama_depan,
					'email' => $validasi->email,
					'password' => $validasi->password,
					'status' => 'Login',
					'id_stat' => 'user',
					);
					
					$qq = $this->session->set_userdata('data', $data_session);
					
					redirect('Transaksi','refresh');

				}

			}else{
				$this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<h4>NOTIF</h4>
						Email / Passowrd Salah ! !
						</div>');
				redirect('Login/logintransaksi','refresh');

			}

		}
	}

	public function Logout()
	{
		$session = $this->session->userdata('data');
		if($session['id_stat'] == 'adminemba'){

			$this->session->sess_destroy();
			redirect('Login/Admembajeans','refresh');

		}else{
			
			$this->session->sess_destroy();
			redirect('Login','refresh');

		}
		
	}

	function pre($var){
		echo "<pre>";
		print_r($var);
		echo '</pre>';
	}


}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */