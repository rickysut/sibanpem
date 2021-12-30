<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penyaluran_model extends CI_Model {

	var $table = 'tbl_penyaluran';
	var $column_order = array('id_penerima','nama_lengkap',null); //set column field database for datatable orderable
	var $column_search = array('id_penerima','nama_lengkap'); //set column field database for datatable searchable just firstname , lastname , address are searchable
	var $order = array('id_penerima' => 'desc'); // default order 

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	private function _get_datatables_query($idkontrak)
	{
		$this->db->select('tbl_penyaluran.*,tbl_barang.nama_barang as nama_barang, tbl_barang.spek_barang as spek_barang, tbl_barang.harga_satuan as harga_satuan');
		$this->db->join('tbl_barang', 'tbl_penyaluran.id_barang = tbl_barang.id');
		$this->db->where('tbl_penyaluran.id_kontrak',$idkontrak);
		$this->db->from($this->table);

		$i = 0;
	
		foreach ($this->column_search as $item) // loop column 
		{
			if($_POST['search']['value']) // if datatable send POST for search
			{
				
				if($i===0) // first loop
				{
					$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
					$this->db->like($item, $_POST['search']['value']);
				}
				else
				{
					$this->db->or_like($item, $_POST['search']['value']);
				}

				if(count($this->column_search) - 1 == $i) //last loop
					$this->db->group_end(); //close bracket
			}
			$i++;
		}
		
		if(isset($_POST['order'])) // here order processing
		{
			$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} 
		else if(isset($this->order))
		{
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}

	function get_datatables($idkontrak)
	{
		$this->_get_datatables_query($idkontrak);
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	function count_filtered($idkontrak)
	{
		$this->_get_datatables_query($idkontrak);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all($idkontrak)
	{
		$this->db->from($this->table);
		$this->db->where('id_kontrak',$idkontrak);
		return $this->db->count_all_results();
	}

	public function get_by_id($id)
	{
		$this->db->from($this->table);
		$this->db->where('id_penerima',$id);
		$query = $this->db->get();

		return $query->row();
	}
	
	public function get_by_id_kontrak($id)
	{
		$this->db->from($this->table);
		$this->db->where('id_kontrak',$id);
		$query = $this->db->get();

		return $query->result();
	}
	
	public function get_by_id_barang($id)
	{
		$this->db->from($this->table);
		$this->db->where('id_barang',$id);
		$query = $this->db->get();

		return $query->result();
	}

	public function save($data)
	{
		$this->db->insert($this->table, $data);
		//return $this->db->insert_id();
	}

	public function update($where, $data)
	{
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}

	public function delete_by_id($id)
	{
		$this->db->where('id_penerima', $id);
		$this->db->delete($this->table);
	}


}
