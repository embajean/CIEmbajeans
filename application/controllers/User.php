<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mod_user');

	}

	// List all your items
	public function index( $offset = 0 )
	{

	}

	// Add a new item
	public function add()
	{

	}

	//Update one item
	public function update($id)
	{
		$email = $this->input->post('email');
		$namadepan = $this->input->post('usernama_depan');
		$namabelakang = $this->input->post('usernama_belakang');
		$no = $this->input->post('telephon');
		$jk = $this->input->post('jk');
		$img = $this->input->post('img');
		#$id = $this->input->post('id');
		$date = $this->input->post('tgl_lahir');
		$images = $_FILES['images']['name'];

		if(empty($images)){

			$data = array(
				'email' => $email,
				'usernama_depan' => $namadepan,
				'usernama_belakang' => $namabelakang,
				'telephon' => $no,
				'tgl_lahir' => $date,
				'jk' => $jk,
			);

		/*	$this->pre($data);
			die;*/

			$query = $this->Mod_user->update($id, $data);

			$get_user = $this->Mod_user->get_user($id);

			$session = array(
				'namadepan' => $get_user->usernama_depan,
			);
			
			$this->session->set_userdata('data', $session);

			if($query == true){

				$this->session->set_flashdata('msg','<div class="alert alert-success alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<h4>Sukses edit data</h4>
						</div>');
				redirect('Ordering/Transaksiku','refresh');
			}else{

				$this->session->set_flashdata('msg','<div class="alert alert-danger alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<h4>GALAT</h4>
						</div>');
				redirect('Ordering/Transaksiku','refresh');
			}


		}else{

			$filename = time().$images;
			$filename = explode(' ', $filename);
			$filename = implode('_', $filename);
			$filename = explode('-', $filename);
			$filename = implode('_', $filename);

			$config['file_name'] = $filename;
			$config['upload_path'] = './user_up/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']  = '100';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('images')){
				
				$error = array('error' => $this->upload->display_errors());
				echo $error['error'];
				die;

			}else{

				$data = array(
					'email' => $email,
					'usernama_depan' => $namadepan,
					'usernama_belakang' => $namabelakang,
					'telephon' => $no,
					'tgl_lahir' => $date,
					'jk' => $jk,
					'images' => $filename,

				);

				$query = $this->Mod_user->update($id, $data);
				$data = array('upload_data' => $this->upload->data());

				


					if(!empty($query)){

						$this->session->set_flashdata('msg','<div class="alert alert-success alert-dismissible">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
									<h4>Success</h4>
								</div>');
						redirect('Ordering/Transaksiku','refresh');

					}else{

						$this->session->set_flashdata('msg','<div class="alert alert-danger alert-dismissible">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
									<h4>Galat up</h4>
								</div>');
						redirect('Ordering/Transaksiku','refresh');
					}

			

			}

		}

	}

	//Delete one item
	public function delete( $id = NULL )
	{

	}

	function pre($var){
		echo '<pre>';
		print_r($var);
		echo '</pre>';
	}
}

/* End of file User.php */
/* Location: ./application/controllers/User.php */
