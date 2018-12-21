<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_slider extends CI_Model {

	var $table = 'slider';
    var $column_order = array(null, 'gambar','head1','head2','head3','status'); //set column field database for datatable orderable
    var $column_search = array('gambar','head1','head2','head3','status'); //set column field database for datatable searchable 
    var $order = array('id' => 'asc'); // default order 

	public function get_all_data()
		{
			$this->db->limit(3,0);
			return $this->db->get('slider')->result();
		}

	public function add($inputan)
	{
		return $this->db->insert('slider', $inputan);

	}

	public function delete($id)
	{	
		$this->db->where('id', $id);
		return $this->db->delete($this->table);

	}

	public function get_data_row($id)
	{
		$query = $this->db->get_where('slider',array('id' => $id))->row();
		return $query;
	}

	public function update($id, $data)
	{
		$this->db->where('id', $id);
		return $this->db->update($this->table, $data);
	}

	//server side start
	private function _get_datatables_query()
    {
         
        $this->db->from($this->table);
 
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
 
    function get_datatables()
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
 
    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }
}

/* End of file Mod_slider.php */
/* Location: ./application/models/Mod_slider.php */