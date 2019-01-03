<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_transaksi extends CI_Model {

	var $table = 'transaksi';
	var $column_order = array(null, 'usernama', 'total_harga', 'tgl_beli' , 'tgl_tf', 'batasbayar', 'status', 'bukti', null);
	var $column_search = array('usernama', 'total_harga', 'tgl_beli', 'tgl_tf', 'batasbayar', 'status', 'bukti');
	var $order = array('transaksi.id' => 'desc');



    public function update_sukses($id, $data)
    {
        $this->db->where('id', $id);
        $query = $this->db->update($this->table, $data);
        return $query;
    }

    public function get_all_data()
    {
        $query = $this->db->get($this->table)->result();
        $now = $this->db->query('select now() as now')->row();
        $now = $now->now;
        return array('now' => $now, 'query' => $query);
    }

    public function intervalproces($tgl_resi)
    {
        $query = $this->db->query('SELECT date_add("'.$tgl_resi.'", INTERVAL 3 day) as day')->row();
        $query = $query->day;
        return $query;
    }

    public function intervalkirim($tgl_resi, $estimasi)
    {
        $est = explode(' ', $estimasi);
        $est = explode('-', $est[0]);
        $est = $est[1];
        /*var_dump($est);
        die;*/
        $query = $this->db->query("select date_add('$tgl_resi', INTERVAL $est day) as day")->row();
        $query = $query->day;
        return $query;
    }

	//server side datatables
	private function _get_datatables_query()
	{
		$this->db->select('transaksi.id, user.usernama_depan as usernama, transaksi.batasbayar, transaksi.bukti, transaksi.tgl_beli, transaksi.tgl_tf, transaksi.total_harga, transaksi.ongkir, transaksi.jumlah_barang, transaksi.catatan, transaksi.kurir, transaksi.alamat, transaksi.provinsi, transaksi.city, transaksi.estimasi, transaksi.status, transaksi.noresi');
		$this->db->from('user');
		$this->db->join('transaksi', 'user.id = transaksi.id_user');

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


	public function get_datatables()
	{
		
		$this->_get_datatables_query();
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
	

}

/* End of file Mod_transaksi.php */
/* Location: ./application/models/Mod_transaksi.php */