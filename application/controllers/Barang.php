<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	

	public function __construct()
	{
		parent::__construct();

		$session =  $this->session->userdata('data');
		
		if($session['id_stat'] == 'adminemba' && $session['status'] == 'Login'){
			
			$session = $this->session->userdata('data');
			$this->load->model('Mod_kategori');
			$this->load->model('Mod_barang');

		}else{
			redirect('Login/Admembajeans','refresh');

		}
	}

	public function index()
	{
		$banyak_data = $this->Mod_barang->banyak_data();

		$this->load->library('pagination');
		
		$config['base_url'] = site_url('Barang/index');
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

		

		#$_listBarang = $this->Mod_barang->get_shop($start, $from);
		$_listBarang = $this->Mod_barang->get_shop($start, $from);
		$_listKategori = $this->Mod_kategori->get_all_data();

		if(count($_listBarang) > 0){

			foreach ($_listBarang as $key_barang => $value_barang) {
			
				$_listGambar[] = $this->Mod_barang->get_gambar_by_sku($value_barang->sku);
				$_listSize[] = $this->Mod_barang->get_size_by_sku($value_barang->sku);

			}

		}else{

			$_listGambar = 0;
			$_listSize = 0;

		}	

		$data = array(
			'nama' => $this->session->userdata('data'),
			'kategori' => $_listKategori,
			'banyak_data' => $banyak_data,
			'start' => $start,
			'from' => $from,
			'barang' => $_listBarang,
			'gambar' => $_listGambar,
			'size' => $_listSize,
			'link' => $this->pagination->create_links(),
		);

		/*$this->pre($data);
		die;*/

		$this->load->view('Admin/Barang4', $data);
	}

	
	public function tambah_gambar($id, $sku)
	{	

		$_QueryGambar = $this->Mod_barang->get_gambar_by_sku2($sku);

		$data = array(
			'nama' => $this->session->userdata('data'),
			'sku' => $sku,
			'gambar' => $_QueryGambar,
		);
		/*$this->pre($data);
		die;*/
		#$this->load->view('Admin/Header', $data);
		$this->load->view('Admin/Tambah_gambar', $data);
		#$this->load->view('Admin/Footer');
		
	}



	public function tambah_barang2()
	{
		$date = $this->db->query('select now() as now')->row();
		$awal = $this->input->post('lim_diskon');
		$akhir = $this->input->post('lim_diskon2');

		$ins = array(
			'sku' => $this->input->post('sku'),
			'barangnama' => $this->input->post('barangnama'),
			'id_kategori' => $this->input->post('id_kategori'),
			'harga' => $this->input->post('harga'),
			'warna' => $this->input->post('warna'),
			'deskripsi' => $this->input->post('deskripsi'),
			'petunjukcuci' => $this->input->post('Petunjukcuci'),
			'detailsize' => $this->input->post('detailsize'),
			'tgl_buat' => $date->now,
			'diskonpersen' => $this->input->post('diskonpersen'),
			'diskonangka' => $this->input->post('diskonangka'),
			'lim_diskon' => $this->input->post('lim_diskon'),
			'lim_diskon2' => $this->input->post('lim_diskon2'),
		);

		if($awal <= $akhir && $akhir >= $awal){ //cek date diskon limit


			//cek sku
			$_ceksku = $this->Mod_barang->cek_sku($ins['sku']);

			if($_ceksku > 0){

				$this->session->set_flashdata('msg', 
					        '<div class="alert alert-danger alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
								<h4>sku '.$ins['sku'].' sudah ada</h4>
							</div>');
				redirect('Barang','refresh');

			}else{
				
				//insert barang
				$_insBarang = $this->Mod_barang->ins($ins);
				$get_new_item = $this->Mod_barang->get_new_item();

				/*$this->pre($get_new_item);
				die;*/

				$stok = $this->input->post('stok');
				$size = $this->input->post('size');
				$gambar = $_FILES['gambar_product']['name'];

				

				$_countStok = count($stok);
				$_countImg = count($gambar);

				/*$this->pre($gambar);
				die;*/

				

				for ($key = 0; $key < $_countStok; $key++ ) {

					$data_stok = array(
						'sku' => $ins['sku'],
						'ukuran' => $size[$key],
						'stok' => $stok[$key],
					);
					
					$_insStok = $this->Mod_barang->ins_stok_by_size($data_stok);

				}

				//uploads

					$config['upload_path'] = './uploads/';
					$config['allowed_types'] = 'gif|jpg|png|jpeg';
					$config['max_size']  = '200';
					$config['max_width']  = '1024';
					$config['max_height']  = '768';
					
					$this->load->library('upload', $config);
					$files = $_FILES;
				
				for ($key= 0; $key < $_countImg; $key++) {
					//$img = time().$_FILES['gambar']['name'][$key];
					$name_image = time().$gambar[$key];
					$name_image = explode(' ', $name_image);
					$name_image = implode('_', $name_image);
					/*$name_image = explode('-', $name_image);
					$name_image = implode('_', $name_image);*/
					
					$_FILES['gambar_product']['name']= time().$gambar[$key];
			        $_FILES['gambar_product']['type']= $files['gambar_product']['type'][$key];
			        $_FILES['gambar_product']['tmp_name']= $files['gambar_product']['tmp_name'][$key];
			        $_FILES['gambar_product']['error']= $files['gambar_product']['error'][$key];
			        $_FILES['gambar_product']['size']= $files['gambar_product']['size'][$key];    

			        $this->upload->initialize($config);
			        $this->upload->do_upload('gambar_product');

			        $data_gambar = array(
							'sku' => $ins['sku'],
							'gambar_product' => $name_image,
						);

			        

			        $this->Mod_barang->ins_gambar($data_gambar);
					
				}

				/*$this->pre($data_gambar);
			        die;*/

				$this->session->set_flashdata('msg', 
					        '<div class="alert alert-success alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
								<h4>Sukses menambahkan barang</h4>
							</div>');

				redirect('Barang','refresh');

				/*$this->pre($_FILES['gambar_product']['name']);
				die;*/

				

			}

		}else{

			$this->session->set_flashdata('msg', 
					        '<div class="alert alert-danger alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
								<h4>GALAT ! TANGGAL AKHIR DISKON TIDAK BOLEH KURANG DARI HARI AWAL DISKON </h4>
							</div>');

			redirect('Barang','refresh');

		}
		
	}

	public function delete_barang($id)
	{
		#$id = $this->input->post('id');
		$qq = $this->Mod_barang->delete($id);
		#$this->pre($qq);
		$this->session->set_flashdata('msg', 
				        '<div class="alert alert-danger alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<h4>Berhasil Menghapus data</h4>
						</div>');
		redirect('Barang','refresh');

	}

	public function Load_gambar($sku){

		$_QueryGambar = $this->Mod_barang->get_gambar_by_sku2($sku);
		$_jumlahGambar = count($_QueryGambar);

		$data = array(
			'gambar' => $_QueryGambar,
			'jumlah_gambar' => $_jumlahGambar,
			'sku' => $sku,
		);

		$this->load->view('Admin/_LoadGambar', $data);

	}

	public function Get_barang()
	{
		$id = $this->input->post('rowid');
		$_listBarang = $this->Mod_barang->get_barangby($id);			
		$_listGambar = $this->Mod_barang->get_gambar_by_sku2($_listBarang->sku);
		$_listSize = $this->Mod_barang->get_size_by_sku($_listBarang->sku);
		$_jumlahGambar = count($_listGambar);

		$data = array(
				'barang' => $this->Mod_barang->get_barangby($id),
				'kategori' => $this->Mod_kategori->get_all_data(),
				'gambar' => $_listGambar,
				'size' => $_listSize,
				'jumlah_gambar' => $_jumlahGambar,
			);
		/*$this->pre($data);
		die;*/
		$this->load->view('Admin/Modal_barang', $data);
	}

	public function get_size_by_kategori()
	{
		$id = $this->input->post('_kategori');

		if($id == '--Silahkan Pilih--'){

			
		}else{

			$kategori = $this->Mod_kategori->get_kategori_by($id);

			$kategoriname = explode(' ', $kategori->kategorinama);
			$kategoriname = strtolower($kategoriname[0]);

			$size = $this->Mod_kategori->get_size_by($kategoriname);

			$data = array(
				'size' => $size,
			);
			
			$this->load->view('Admin/Load_size', $data);

		}

		
	}

	public function edit_barang2($id)
	{
		$date = $this->db->query('select now() as now')->row();
		$data_barang = array(
			'sku' => $this->input->post('sku'),
			'barangnama' => $this->input->post('barangnama'),
			'id_kategori' => $this->input->post('id_kategori'),			
			'harga' => $this->input->post('harga'),
			'deskripsi' => $this->input->post('deskripsi'),
			'detailsize' => $this->input->post('detailsize'),
			'petunjukcuci' => $this->input->post('Petunjukcuci'),
			'tgl_ubah' => $date->now,
			'diskonpersen' => $this->input->post('diskonpersen'),
			'diskonangka' => $this->input->post('diskonangka'),
			'lim_diskon' => $this->input->post('lim_diskon'),
			'lim_diskon2' => $this->input->post('lim_diskon2'),
		);

		$tanggalawal = $this->input->post('lim_diskon');
		$tanggalakhir = $this->input->post('lim_diskon2');

		/*$this->pre(array($tanggalawal, $tanggalakhir));
		die;*/

		if($tanggalawal <= $tanggalakhir && $tanggalakhir >= $tanggalawal){

			$sku = $data_barang['sku'];

			$_TrueBrang = $this->Mod_barang->edit($id, $data_barang);
			$deletegambar = empty($this->input->post('deletegambar')) ? array() : $this->input->post('deletegambar');
			$gambar_baru = empty($_FILES['gambar_input']['name']) ? array() : $_FILES['gambar_input']['name'];

			$gambar_edit = empty($_FILES['gambar_edit']['name']) ? array() : $_FILES['gambar_edit']['name'] ;

			$id_gambar = $this->input->post('gantigambar');

			$size = $this->input->post('size');
			$stok = $this->input->post('stok');

			/*$this->pre(array(
					'id' => $id_gambar,
					'sku' => $data_barang['sku'],
					'gambar_baru' => $gambar_baru,
					'gambar_edit' => $gambar_edit,
					'delete_gambar' => $deletegambar,
					'size' => $size, 
					'stok' => $stok,
					'data_barang' => $data_barang
				));
			die;*/

			/*foreach ($gambar as $key => $value) {
				if(empty($gambar[$key])){
					#echo 'empty';
				}else{
					echo $key;
				}
			}*/
			#die;

			$_jumlahGambar = count($gambar_edit);
			$_jumlahSize = count($size);

			//input gambar / size and stok
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size']  = '200';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';

			$this->load->library('upload', $config);
			$files = $_FILES;

			$_TrueGambar = 1;
			$_TrueSize = 0;
			$_TrueDelGambar = 1;
			$_TrueGambarBaru = 1;

			//gambar edit
			/*$this->pre($gambar_edit);
			die;*/
			foreach ($gambar_edit as $key => $value) {

				if(!empty($gambar_edit[$key])){

					$name_image = time().$gambar_edit[$key];
					$name_image = explode(' ', $name_image);
					$name_image = implode('_', $name_image);
					/*$name_image = explode('-', $name_image);
					$name_image = implode('_', $name_image);*/
					

					
					#$_FILES['gambar_edit']['name']= time().$gambar_edit[$key];
					$_FILES['gambar_edit']['name']= $name_image;
			        $_FILES['gambar_edit']['type']= $files['gambar_edit']['type'][$key];
			        $_FILES['gambar_edit']['tmp_name']= $files['gambar_edit']['tmp_name'][$key];
			        $_FILES['gambar_edit']['error']= $files['gambar_edit']['error'][$key];
			        $_FILES['gambar_edit']['size']= $files['gambar_edit']['size'][$key];




			        $this->upload->initialize($config);
			        $this->upload->do_upload('gambar_edit');

			        $data_gambar[$key] = array(
							'sku' => $sku,
							'gambar_product' => $name_image,
						);
			         /*$this->pre(array($name_image, $_FILES['gambar_edit'], $this->upload->do_upload('gambar_edit'), $data_gambar));
					die;*/


					$query_gambar = $this->Mod_barang->edit_gambar($data_barang['sku'], $id_gambar[$key], $data_gambar[$key]);

					if($query_gambar == true){

						$_TrueGambar++;

					}

				}

			}

			//tambah gambar

			foreach ($gambar_baru as $key_gambarBaru => $value_gambarBaru) {
				
				if(!empty($gambar_baru[$key_gambarBaru])){

						$name_image = time().$gambar_baru[$key_gambarBaru];
						$name_image = explode(' ', $name_image);
						$name_image = implode('_', $name_image);
						/*$name_image = explode('-', $name_image);
						$name_image = implode('_', $name_image);*/
						
						
						$_FILES['gambar_input']['name']= time().$gambar_baru[$key_gambarBaru];
				        $_FILES['gambar_input']['type']= $files['gambar_input']['type'][$key_gambarBaru];
				        $_FILES['gambar_input']['tmp_name']= $files['gambar_input']['tmp_name'][$key_gambarBaru];
				        $_FILES['gambar_input']['error']= $files['gambar_input']['error'][$key_gambarBaru];
				        $_FILES['gambar_input']['size']= $files['gambar_input']['size'][$key_gambarBaru];    

				        $this->upload->initialize($config);
				        $this->upload->do_upload('gambar_input');

				        $data_gambar = array(
								'sku' => $sku,
								'gambar_product' => $name_image,
							);


						$query_gambar = $this->Mod_barang->ins_gambar($data_gambar);

					}

			}

			foreach ($deletegambar as $key => $value) {

				if(!empty($deletegambar[$key])){

					$del_gambar = $this->Mod_barang->Hapus_gambar($value);

					if($del_gambar == true){

						$_TrueDelGambar++;

					}

				}

			}

			#$this->pre($data_gambar);
			#die;

			for ($j = 0; $j < $_jumlahSize ; $j++) {

				$ukuran = $size[$j];
				
				$data_size = array(
					'sku' => $this->input->post('sku'),
					'ukuran' => $size[$j],
					'stok' => $stok[$j],
				);

				$query_stok = $this->Mod_barang->edit_stok($sku, $ukuran,  $data_size);

				if($query_stok == true){
					$_TrueSize++;
				}

			}

			/*$this->pre(array($_TrueGambar, $_TrueGambarBaru, $_TrueDelGambar, $_TrueSize, $_TrueBrang));
				die;*/

			if($_TrueGambar <= 6 && $_TrueSize <= 10 && $_TrueBrang == 1){

				$this->session->set_flashdata('msg', 
					        '<div class="alert alert-success alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
								<h4>Berhasil Edit data '.$sku.'</h4>
							</div>');
				redirect('Barang','refresh');
			}else{
				echo 'false';
			}

		}else{

			$this->session->set_flashdata('msg', 
					        '<div class="alert alert-danger alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
								<h4>Tanggal Diskon tidak sesuai</h4>
							</div>');
			redirect('Barang','refresh');

		}

		/*$this->pre($data_barang);
		die;*/



	}

	public function edit_gambar()
	{	

		$_DataInput =empty($_FILES['gambar_input']['name']) ? 0 : $_FILES['gambar_edit']['name'];
		$_DataEdit = empty($_FILES['gambar_edit']['name']) ? 0 : $_FILES['gambar_edit']['name'];
		$_DataDelete = $this->input->post('deletegambar');

		$this->pre(array($_DataInput, $_DataEdit, $_DataDelete));
	}

	public function Hapus_gambar()
	{	
		$id = $this->input->post('id');
		$query = $this->Mod_barang->Hapus_gambar($id);
		
		if($query == true){

			echo "Gambar berhasil dihapus";

		}else{

			echo "Galat !!";

		}
	}


	function pre($var){
		echo '<pre>';
		print_r($var);
		echo '</pre>';
	}

}

/* End of file Barang.php */
/* Location: ./application/controllers/Barang.php */