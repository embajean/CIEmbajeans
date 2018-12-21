<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ongkir extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
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
		/*$this->pre($data);*/
		return $data;
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

		curl_close($curl);

		$data = json_decode($response, true);
		return $data;
	}

	public function cost()
	{
		$id_kabupaten = $this->input->post();

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
		  CURLOPT_POSTFIELDS => "origin=21&destination=".$id_kabupaten."&weight=".$berat."&courier=".$kurir."",
		  CURLOPT_HTTPHEADER => array(
		    "content-type: application/x-www-form-urlencoded",
		    "key: f876060c0e565d3c3242d35b5808bf04"
		  ),
		));
	 
		$response = curl_exec($curl);
		$err = curl_error($curl);
	 
		curl_close($curl);
		$data = json_encode($response, true);
		$this->pre($id_kabupaten);
	}





	function pre($var){
		echo '<pre>';
		print_r($var);
		echo '</pre>';
	}

}

/* End of file Kota.php */
/* Location: ./application/controllers/Kota.php */