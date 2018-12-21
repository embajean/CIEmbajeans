<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_ordering extends CI_Model {

	var $table = 'transaksi';
	var $column_order = array(null, 'jumlah_barang', 'total_harga', 'tgl_beli' , 'tgl_tf', 'status', 'user', 'batasbayar', 'bukti');
	var $column_search = array('jumlah_barang', 'total_harga', 'tgl_beli', 'tgl_tf', 'status', 'user', 'batasbayar', 'bukti');
	var $order = array('id' => 'desc');

	function insert($data){
		
		return $this->db->insert('transaksi', $data);

	}

	function cek_inse($id_user, $jumlah_barang, $total_harga, $provinsi, $city, $kurir, $estimasi, $method, $status, $ongkir){

		return $this->db->get_where('transaksi', array('id_user' => $id_user, 'jumlah_barang' => $jumlah_barang, 'total_harga' => $total_harga, 'provinsi' => $provinsi, 'city' => $city, 'kurir' => $kurir, 'estimasi' => $estimasi, 'method' => $method, 'status' => $status, 'ongkir' => $ongkir))->row();

	}

	function cek_stok_barang($sku, $size){

		$this->db->where(array('sku' => $sku, 'ukuran' => $size));
		$query = $this->db->get('stok_by_size')->row();
		$stok = $query->stok;

		return $stok;

	}

	function get_transaksi($id_user){

		$this->db->order_by('id','desc');
		$this->db->where('id_user', $id_user);
		return $this->db->get('transaksi')->row();
	}

	function insert_detail($data){
		$this->db->insert('detail_transaksi', $data);
	}

	public function get_besok()
	{
		$this->db->select('now() + interval 1 day as besok');
		return $this->db->get()->row();
	}

	public function sekarang()
	{
		$this->db->select('now() as now');
		return $this->db->get()->row();
	}

	public function get_detail_transaksi_byId($id)
	{
		$this->db->where('id_trans', $id);
		$query = $this->db->get('detail_beli')->result();

		foreach ($query as $key_query => $value_query) {
			
			$query_gambar = $this->db->get_where('gambar',array('sku' => $value_query->sku))->row();
			$arr_gambar[$value_query->sku] = $query_gambar->gambar_product;

		}

		$query = array(
			'query' => $query,
			'gambar' => $arr_gambar,
		);
		return $query;
	}

	public function _myTrans($id)
	{
		$this->db->select('transaksi.id as idtrans, barang.barangnama, gambar.gambar_product as gambar, transaksi.provinsi, transaksi.city, transaksi.kurir, transaksi.estimasi, transaksi.catatan, transaksi.alamat, transaksi.bukti, transaksi.tgl_beli, transaksi.tgl_tf, transaksi.bukti, detail_transaksi.qty, detail_transaksi.harga, detail_transaksi.subtotal, transaksi.status as status, transaksi.total_harga, transaksi.batasbayar');

		$this->db->from('user');

		$this->db->join('transaksi', 'transaksi.id_user = user.id');
		$this->db->join('detail_transaksi', 'detail_transaksi.id_transaksi = transaksi.id');
		$this->db->join('barang', 'barang.id = detail_transaksi.id_barang');
		$this->db->join('gambar', 'gambar.sku = barang.sku');
		$this->db->order_by('detail_transaksi.id_transaksi', 'desc');
		$this->db->group_by('detail_transaksi.id_transaksi');


		$this->db->where('user.id', $id);

		$query = $this->db->get()->result();
		$row = count($query);
		$sekarang = $this->sekarang();
		$_JBarang = array();
		foreach ($query as $key_trans => $value_trans) {
			
			$_JBarang[] = $this->db->get_where('detail_transaksi', array('id_transaksi' => $value_trans->idtrans))->num_rows();

			if($value_trans->batasbayar <= $sekarang->now && ($value_trans->status == 'unpaid' || $value_trans->status == 'Ditolak')){

				$this->db->where('id', $value_trans->idtrans);
				$aa = $this->db->update('transaksi', array('status' => 'expired'));

			}

		}

		$this->db->select('transaksi.id as idtrans, barang.barangnama, gambar.gambar_product as gambar, transaksi.provinsi, transaksi.city, transaksi.kurir, transaksi.estimasi, transaksi.catatan, transaksi.alamat, transaksi.bukti, transaksi.tgl_beli, transaksi.tgl_tf, transaksi.bukti, detail_transaksi.qty, detail_transaksi.harga, detail_transaksi.subtotal, transaksi.status as status, transaksi.total_harga, transaksi.batasbayar, transaksi.ongkir, barang.id as idbarang, transaksi.noresi as noresi');

		$this->db->from('user');

		$this->db->join('transaksi', 'transaksi.id_user = user.id');
		$this->db->join('detail_transaksi', 'detail_transaksi.id_transaksi = transaksi.id');
		$this->db->join('barang', 'barang.id = detail_transaksi.id_barang');
		$this->db->join('gambar', 'gambar.sku = barang.sku');
		$this->db->order_by('detail_transaksi.id_transaksi', 'desc');
		$this->db->group_by('detail_transaksi.id_transaksi');


		$this->db->where('user.id', $id);

		$query = $this->db->get()->result();
		$row = count($query);

		$return = array(
			'query' => $query,
			'numrows' => $row,
			'JumlahBarang' => $_JBarang,
			#'aa' => $aa,
			//'sekarang' => $sekarang->now,
		);

		return $return ;
	}

	/* serverside */

	private function _get_datatables_query($id)
	{
		/*$this->db->select('transaksi.*, user.usernama_depan as user');
		$this->db->from('user');
		$this->db->join('transaksi', 'transaksi.id_user = user.id');*/
		$this->db->select('barang.barangnama, barang.gambar_depan, transaksi.provinsi, transaksi.city, transaksi.kurir, transaksi.estimasi, transaksi.catatan, transaksi.alamat, transaksi.bukti, transaksi.tgl_beli, transaksi.tgl_tf, transaksi.bukti, detail_transaksi.qty, detail_transaksi.harga, detail_transaksi.subtotal');

		$this->db->from('user');

		$this->db->join('transaksi', 'transaksi.id_user = user.id');
		$this->db->join('detail_transaksi', 'detail_transaksi.id_transaksi = transaksi.id');
		$this->db->join('barang', 'barang.id = detail_transaksi.id_barang');
		$this->db->where('user.id', $id);

		#$this->db->from($this->table);

		$i = 0;

        $arrSearch = array();
        $data_post = $this->input->post();

        #die;

        if(isset($data_post['search'])){

            $arrSearch = $_POST['search']['value'];
        }
     
        foreach ($this->column_search as $item) // looping awal
        {

            //if($_POST['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
            if(!empty($arrSearch))
            {
                 
                if($i===0) // looping awal
                {
                    $this->db->group_start(); 
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
 
                if(count($this->column_search) - 1 == $i) 
                    $this->db->group_end(); 
            }
            $i++;
        }
         
        if(isset($_POST['order'])) 
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }

	}

	public function get_datatables($id)
	{
		
		$this->_get_datatables_query($id);
        $start = (isset($_POST['start'])) ? $_POST['start'] : 0;
        $length = (isset($_POST['length'])) ? $_POST['length'] : 10;

        if($length != -1){

            $this->db->limit($length, $start);
            $query = $this->db->get();
        }else{

            $this->db->limit($start, $length);
            $query = $this->db->get();
        }
        
        $data = $query->result(); 
       /* echo $this->db->last_query();
        $this->pre($data);
        die;*/
        return $data;

	}

	public function count_filtered()
	{
		
		$this->_get_datatables_query();
		$query = $this->db->get()->result();
		return $query;

	}

	public function count_all()
	{
		$this->db->get($this->table);
		return $this->db->count_all_results();

	}

	public function upload_bukti($id, $data)
	{
		$this->db->where('id', $id);
		$query = $this->db->update('transaksi', $data);
		return $query;

	}

	public function pre($var)
	{
		echo "<pre>";
		print_r($var);
		echo "</pre>";
	}

}

/* End of file Transaksi.php */
/* Location: ./application/models/Transaksi.php */