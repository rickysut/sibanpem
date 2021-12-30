<?php 
	if (!defined('BASEPATH'))exit('No direct script access allowed');

	class M_wilayah extends CI_Model {
		public $table = 'wilayah_provinsi';
		public $table2 = 'wilayah_kabupaten';
		public $table3 = 'wilayah_kecamatan';
		public $table4 = 'wilayah_desa';
		public $id    = 'id';
		public $order = 'DESC';
		function __construct() {
			parent::__construct();
		}
		
		function get_provinsi_byid($id)
		{
			$this->db->select('id,nama');
			$this->db->where('id',$id);
			return $this->db->get($this->table)->result();
		}
		
		function get_all_provinsi() 
		{
			$this->db->order_by('nama');
			$data = $this->db->get($this->table);

			if($data->num_rows() > 0)
			{
			  foreach($data->result_array() as $row)
			  {
				$result[''] = '- Provinsi';
				$result[$row['id']] = $row['nama'];
			  }
			  return $result;
			}
		}
		
		public function list_provinsi()
		{
			$this->db->select('id, nama, lat, lng');
			$data = $this->db
				->get('wilayah_provinsi')
				->result_array();
			return $data;
		}
		
		function get_all_nama_provinsi() 
		{
			$this->db->order_by('nama');
			$data = $this->db->get($this->table);

			if($data->num_rows() > 0)
			{
			  foreach($data->result_array() as $row)
			  {
				$result[''] = '- Provinsi';
				$result[$row['id'].'|'.$row['nama']] = $row['nama'];
			  }
			  return $result;
			}
		}
		
		function get_all_nama_kabupaten() 
		{
			$this->db->order_by('nama');
			$data = $this->db->get($this->table2);

			if($data->num_rows() > 0)
			{
			  foreach($data->result_array() as $row)
			  {
				$result[''] = '- Kabupaten';
				$result[$row['id'].'|'.$row['nama']] = $row['nama'];
			  }
			  return $result;
			}
		}
		
		function get_all_nama_kecamatan() 
		{
			$this->db->order_by('nama');
			$data = $this->db->get($this->table3);

			if($data->num_rows() > 0)
			{
			  foreach($data->result_array() as $row)
			  {
				$result[''] = '- Kecamatan';
				$result[$row['id'].'|'.$row['nama']] = $row['nama'];
			  }
			  return $result;
			}
		}
		
		function get_all_nama_desa() 
		{
			$this->db->order_by('nama');
			$data = $this->db->get($this->table4);

			if($data->num_rows() > 0)
			{
			  foreach($data->result_array() as $row)
			  {
				$result[''] = '- Desa';
				$result[$row['id'].'|'.$row['nama']] = $row['nama'];
			  }
			  return $result;
			}
		}
		
		function get_all_provinsi2() 
		{
			$this->db->order_by('nama');
			$data = $this->db->get($this->table);

			if($data->num_rows() > 0)
			{
			  foreach($data->result_array() as $row)
			  {
				$result[''] = '- Provinsi';
				$result[$row['id']] = $row['nama'];
			  }
			  return $result;
			}
		}
		
		function get_all_kabupaten2() 
		{
			$this->db->order_by('nama');
			$data = $this->db->get($this->table2);

			if($data->num_rows() > 0)
			{
			  foreach($data->result_array() as $row)
			  {
				$result[''] = '- Kabupaten';
				$result[$row['id']] = $row['nama'];
			  }
			  return $result;
			}
		}
		
		function get_all_kecamatan() 
		{
			$this->db->order_by('nama');
			$data = $this->db->get($this->table3);

			if($data->num_rows() > 0)
			{
			  foreach($data->result_array() as $row)
			  {
				$result[''] = '- Kecamatan';
				$result[$row['id']] = $row['nama'];
			  }
			  return $result;
			}
		}
		
		function get_all_desa() 
		{
			$this->db->order_by('nama');
			$data = $this->db->get($this->table4);

			if($data->num_rows() > 0)
			{
			  foreach($data->result_array() as $row)
			  {
				$result[''] = '- Desa';
				$result[$row['id']] = $row['nama'];
			  }
			  return $result;
			}
		}

		function get_nama_desa($id) 
		{
			$this->db->select('nama');
			$this->db->where('id',$id);
			return $this->db->get($this->table4)->result();
		}
				
	}
?>
