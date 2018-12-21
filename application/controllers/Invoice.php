<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$session =  $this->session->userdata('data');
		
		if($session['id_stat'] == 'adminemba' && $session['status'] == 'Login'){

			$this->load->model("Mod_transaksi");

		}else{
			redirect('Login/Admembajeans','refresh');
			
		}
		
	}
	public function index()
	{	
		
		$data = array(
			'nama' => $this->session->userdata('data'),
			'title' => 'Invoice',
			'feature' => 'Invoice',
			'nama_des' => 'Payment',
		);
		$this->load->view('Admin/Header', $data);
		$this->load->view('Admin/Invoice');
		$this->load->view('Admin/Footer');
	}

	public function data_tableInvoice()
	{
		$list = $this->Mod_transaksi->get_datatables();
		$data = array();
		$now = $this->db->query('select now() as now')->row();
		$now = $now->now;

		if(isset($_POST['start'])){
			
			$no = $_POST['start'];

		}else{

			$_POST['start'] = 0;
			$_POST['lenght'] = 10;

		}
		$no = 0;
		foreach ($list as $key_field => $value_field) {

			#$resi = !empty($value_field->noresi) ? $value_field->noresi : null;

			$expTglBeli = explode('-',$value_field->tgl_beli);
			$expTglBeli2 = explode(' ', $expTglBeli[2]);

			$expTglTf = explode('-',$value_field->tgl_tf);
			$expTglTf2 = explode(' ', $expTglTf[2]);

			$expTglBatas = explode('-',$value_field->batasbayar);
			$expTglBatas2 = explode(' ', $expTglBatas[2]);

			
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $value_field->usernama;
			$row[] = "Rp. ".number_format($value_field->total_harga,2)."";
			$row[] = $expTglBeli2[0].' - '.$expTglBeli[1].' - '.$expTglBeli[0].'<br>'.$expTglBeli2[1];
			$row[] = $expTglTf2[0].' - '.$expTglTf[1].' - '.$expTglTf[0].'<br>'.$expTglTf2[1];
			$row[] = $expTglBatas2[0].' - '.$expTglBatas[1].' - '.$expTglBatas[0].'<br>'.$expTglBatas2[1];
			
			if(!empty($value_field->noresi)){

				$row[] = $value_field->status.'<br> Resi : <br>'.$value_field->noresi;

			}else{

				$row[] = $value_field->status;
			}

			if(!empty($value_field->bukti)){

				$row[] = '<img src="'.base_url('upload_bukti/'.$value_field->bukti).'" style="width: 200px; height: auto;">';
			}else{

				$row[] = '<img src="'.base_url('assets/buktikosong.png').'" style="width: 200px; height: auto;">';

			}
			

			#if($value_field->batasbayar < $now){
			$lihat_detail = '<a href="'.site_url('Invoice/lihat_detail/'.$value_field->id).'" class="btn btn-info"><i class="fa fa-eye"></i></a>';

				if($value_field->status == 'Diperiksa'){

					$row[] = '<a href="'.site_url('Invoice/Invo_success/'.$value_field->id).'" class="btn btn-success">Terima</a>&nbsp;<a href="'.site_url('Invoice/Tolak/'.$value_field->id).'" class="btn btn-danger" id="btn-tolak">Tolak</a>'.$lihat_detail;

				}elseif ($value_field->status == 'Diproses' || $value_field->status == 'Dikirim') {
					
					$row[] = '<a href="Invoice/tambahResi/'.$value_field->id.'" class="btn btn-info">Tambah No Resi</a>'.$lihat_detail;

				}elseif ($value_field->status == 'nonpaid') {
					
					$row[] = 'Belum bayar'.$lihat_detail;

				}else{

					$row[] = '<p style="color:red">Kadaluarsa</p>'.$lihat_detail;

				}

				#$row[] = '<a href="javascript:void(0);" data-target="#modalEditslider" data-toggle="modal" data-id="#" title="Ubah"><i class="ti-ruler-pencil"></i></a>&nbsp;&nbsp;<a href="" title="hapus" onclick="return konfirmasi()""><span class="ti-trash"></span><span class="icon-name"></span></a>';

			/*}else{
				$row[] = 'asdf';
			}*/


			$data[] = $row;

		}


		$draw = (isset($_POST['draw'])) ? $_POST['draw'] : 0;

		$output = array(
			"draw" => $draw,
			"recordsTotal" => $this->Mod_transaksi->count_all(),
			"recordsFiltered" => $this->Mod_transaksi->count_filtered(),
			"data" => $data,
		);

		/*$this->pre($list);
		die;*/

		echo json_encode($output);
	}

	public function Invo_success($id)
	{
		$update = array(
			'status' => 'Diproses'
		);
		$query = $this->Mod_transaksi->update_sukses($id, $update);

		if($query == true){
			$this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4>BERHASIL GANTI STATUS -> DIPROSES</h4></div>');
			redirect('Invoice','refresh');
		}else{
			$this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4>GALAT</h4></div>');
			redirect('Invoice','refresh');
		}
	}

	public function Tolak($id)
	{
		$update = array('status' => 'Ditolak');
		$query = $this->Mod_transaksi->update_sukses($id, $update);

		if($query == true){
			$this->session->set_flashdata('msg', '<div class="alert alert-warning alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4>BERHASIL GANTI STATUS -> DITOLAK</h4></div>');
			redirect('Invoice','refresh');
		}else{
			$this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4>GALAT</h4></div>');
			redirect('Invoice','refresh');
		}

	}

	public function tambahResi($id)
	{
		/*$this->pre($id);	
		die;*/
		#$data['id'] = $id;
		#$this->load->view('Admin/Tambahresi',$data);

		$input = $this->input->post('resi');

		if(isset($input)){

			$update = array('noresi' =>$input, 'status' => 'Dikirim');
			$query = $this->Mod_transaksi->update_sukses($id, $update);

			if($query == true){
				$this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4>BERHASIL TAMBAH NO RESI</h4></div>');
				redirect('Invoice','refresh');
			}else{
				$this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4>GALAT</h4></div>');
				redirect('Invoice','refresh');
			}

		}else{

			$data = array(
				'nama' => $this->session->userdata('data'),
				'title' => 'Invoice | Tambah No Resi',
				'feature' => 'Invoice',
				'nama_des' => 'Payment',
				'id' => $id,
			);
			$this->load->view('Admin/Header', $data);
			$this->load->view('Admin/Tambahresi');
			$this->load->view('Admin/Footer');
		}

	}

	public function pre($var)
	{
		echo '<pre>';
		print_r($var);
		echo '</pre>';
	}

}

/* End of file Invoice.php */
/* Location: ./application/controllers/Invoice.php */