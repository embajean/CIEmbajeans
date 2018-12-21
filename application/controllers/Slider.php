<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();

		$session =  $this->session->userdata('data');
		
		if($session['id_stat'] == 'adminemba' && $session['status'] == 'Login'){

			$this->load->model('Mod_slider');


		}else{
			redirect('Login/Admembajeans','refresh');
		}
		
	}

	public function index()
	{
		$data_slider = $this->Mod_slider->get_all_data();

		$data = array(
			'title' => 'Slider',
			'nama' => $this->session->userdata('data'),
			'feature' => 'Feature',
			'nama_des' => 'Home Slider',
			'slider' => $data_slider,
		);
		/*$this->pre($data);
		die;*/
		$this->load->view('Admin/Header',$data);
		$this->load->view('Admin/slider');
		$this->load->view('Admin/Footer');
	}

	public function add()
	{
		
		$gambar = $_FILES['gambar']['name'];
		$head1 = $this->input->post('head1');
		$head2 = $this->input->post('head2');
		$head3 = $this->input->post('head3');


		/*$this->pre(array($gambar, $head1, $head2, $head3));
		die;*/
		#$query = $this->Mod_slider->add($data);
		$name_image = time().$gambar;
		$name_image = explode(' ', $name_image);
		$name_image = implode('_', $name_image);

		$config['file_name'] = $name_image;
		$config['upload_path'] = './slider/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']  = '1000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('gambar')){

			$error = array('error' => $this->upload->display_errors());
			$this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
								<h4>'.$error['error'].' MAX width : 1024, Max Height : 768, Size : 1MB</h4>
							</div>');
				#$this->loadDataSlider();
				redirect('Slider','refresh');

		}else{

			$data = array('upload_data' => $this->upload->data());
			$input = array(
				'gambar' => $name_image,
				'head1' => $head1,
				'head2' => $head2,
				'head3' => $head3,
			);

			$query = $this->Mod_slider->add($input);

			if(!empty($query)){

				$this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
								<h4>Sukses menambahkan slider</h4>
							</div>');
				#$this->loadDataSlider();
				redirect('Slider','refresh');

			}else{

				$this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
								<h4>GALAT !</h4>
							</div>');
				redirect('Slider','refresh');
			}
		}

		
	}

	function delete($id){

		$query = $this->Mod_slider->delete($id);

		if(!empty($query)){

			$this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
								<h4>Berhasil Hapus Slider</h4>
							</div>');
				#$this->loadDataSlider();
				redirect('Slider','refresh');
		}else{

			$this->session->set_flashdata('msg', '<div class="alert alert-warning alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
								<h4>Galat</h4>
							</div>');
				#$this->loadDataSlider();
				redirect('Slider','refresh');

		}

	}

	public function update($id)
	{
		//$data = $this->input->post();
		$gambar = $_FILES['gambar']['name'];
		$head1 = $this->input->post('head1');
		$head2 = $this->input->post('head2');
		$head3 = $this->input->post('head3');

		/*$this->pre($gambar);
		die;*/

		if(empty($gambar)){

			$input = array(
				'head1' => $head1,
				'head2' => $head2,
				'head3' => $head3,
			);

			$query = $this->Mod_slider->update($id, $input);

			if(!empty($query)){
				$this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
								<h4>Berhasil Edit Slider</h4>
							</div>');
				#$this->loadDataSlider();
				redirect('Slider','refresh');
			}else{

				$this->session->set_flashdata('msg', '<div class="alert alert-warning alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
								<h4>Galat</h4>
							</div>');
				#$this->loadDataSlider();
				redirect('Slider','refresh');

			}

		}else{

			$gambar = time().$gambar;
			$gambar = explode(' ', $gambar);
			$gambar = implode('_', $gambar);

			$config['file_name'] = $gambar;
			$config['upload_path'] = './slider/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']  = '1000';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('gambar')){
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
								<h4>Ukuran Gambar max 1MB, max width 1024, max height 769, min width 650 max height 450</h4>
							</div>');
				#$this->loadDataSlider();
				redirect('Slider','refresh');
			
			}else{

				$data = array('upload_data' => $this->upload->data());
				$input = array(
					'gambar' => $gambar,
					'head1' => $head1,
					'head2' => $head2,
					'head3' => $head3,
				);

				$query = $this->Mod_slider->update($id, $input);

				if(!empty($query)){

					$this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
									<h4>Sukses edit slider</h4>
								</div>');
					#$this->loadDataSlider();
					redirect('Slider','refresh');

				}else{

					$this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
									<h4>GALAT !</h4>
								</div>');
					redirect('Slider','refresh');
				}

			}


		}

		//$this->pre(array($gambar, $head1, $head2, $head3));
		/*if(!empty($query)){

			$this->session->set_flashdata('msg', '<div class="alert alert-warning alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
								<h4>S</h4>
							</div>');
			redirect('Slider','refresh');

		}*/
	}

	public function Get_slider()
	{
		$id = $this->input->post('rowid');
		$data['data'] = $this->Mod_slider->get_data_row($id);
		/*$this->pre($data);
		die;*/
		$this->load->view('Admin/Modal_editSlider', $data);
	}

	//datatables
	public function datatable_slider()
	{
		$list = $this->Mod_slider->get_datatables();
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
			$row[] = '<img src="'.base_url('slider/'.$value_field->gambar).'" style="width: 200px; height: auto;">';
			$row[] = $value_field->head1;
			$row[] = $value_field->head2;
			$row[] = $value_field->head3;
			$row[] = '<a href="javascript:void(0);" data-target="#modalEditslider" data-toggle="modal" data-id="'.$value_field->id.'" title="Ubah"><i class="ti-ruler-pencil"></i></a>&nbsp;&nbsp;<a href="'.site_url('Slider/delete/'.$value_field->id).'" title="hapus" onclick="return konfirmasi()""><span class="ti-trash"></span><span class="icon-name"></span></a>';
			/*if(!empty($value_field->status)){

			$row[] = '<input type="checkbox" id="inp-cbslider'.$key_field.'" checked>';

			}else{

			$row[] = '<input type="checkbox" id="inp-cbslider'.$key_field.'">';

			}*/
			

			$data[] = $row;

		}



		$draw = (isset($_POST['draw'])) ? $_POST['draw'] : 0;

		$output = array(
			"draw" => $draw,
			"recordsTotal" => $this->Mod_slider->count_all(),
			"recordsFiltered" => $this->Mod_slider->count_filtered(),
			"data" => $data,
		);

		/*$this->pre($list);
		die;*/

		echo  json_encode($output);

		
	}

	public function loadDataSlider()
	{
		$this->load->view('Admin/_LoadSlider');
	}

	function pre($var){
		echo '<pre>';
		print_r($var);
		echo '</pre>';
	}

}

/* End of file Slider.php */
/* Location: ./application/controllers/Slider.php */