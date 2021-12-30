<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front2018_model extends CI_Model{
  var $table = 'tbl_benpam2018';
  var $column_order = array('kr_namakota','kd_output','jumlah',null); //set column field database for datatable orderable
  var $column_search = array('kr_namakota','kd_output'); //set column field database for datatable searchable just firstname , lastname , address are searchable
  var $column_order_kec = array('kr_namakecamatan','kd_output','jumlah',null); //set column field database for datatable orderable
  var $column_search_kec = array('kr_namakecamatan','kd_output'); //set column field database for datatable searchable just firstname , lastname , address are searchable
  var $column_order_des = array('kr_namadesa','kd_output','jumlah',null); //set column field database for datatable orderable
  var $column_search_des = array('kr_namadesa','kd_output'); //set column field database for datatable searchable just firstname , lastname , address are searchable
  var $column_order_person = array('kr_namapenerima','kd_output','jumlah',null); //set column field database for datatable orderable
  var $column_search_person = array('kr_namapenerima','kd_output'); //set column field database for datatable searchable just firstname , lastname , address are searchable
  //var $order = array('jumlah' => 'desc'); // default order 
  
  public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
  function get_Jumlah_penerima()
  {
	$this->db->select('count(kr_namapenerima) as jumlah');
    return $this->db->get($this->table)->row();
  }
  
  function get_Jumlah_bantuan()
  {
	$this->db->select('sum(db_nilaibast) as jumlah_uang');
	return $this->db->get($this->table)->row();
  }
  
  function get_all_provinsi()
  {
    $this->db->select('kr_namaprovinsi,COUNT(DISTINCT(kr_namakota)) as kabupaten, COUNT(DISTINCT(kr_namakecamatan)) as kecamatan,COUNT(DISTINCT(kr_namadesa)) as desa,
	COUNT(DISTINCT(kr_namapenerima)) as orang,ROUND(sum(db_nilaibast),2) as jumlah');
	$this->db->group_by('provinsi');
    return $this->db->get($this->table)->result();
  }  
  
  function get_all_barang()
  {
    $this->db->select('ko_jenis,kr_namaprovinsi,count(kr_namapenerima) jml_orang, sum(db_nilaibast) as jml_uang ');
	$this->db->group_by('ko_jenis, kr_namaprovinsi');
    return $this->db->get($this->table)->result();
  }  
  
  function get_all_kontrak()
  {
    $this->db->select('k_kontrak_tgl, k_kontrak_nomor, k_kode_kegiatan, k_kode_akun, k_kode_output, k_satker_nama, k_kontrak_status_review');
	$this->db->group_by('k_kontrak_tgl, k_kontrak_nomor, k_kode_kegiatan, k_kode_akun, k_kode_output, k_satker_nama, k_kontrak_status_review');
    $this->db->order_by('k_kontrak_tgl', 'DESC');
    return $this->db->get($this->table2)->result();
  }  
  
  function get_all_jml_provinsi()
  {
    $this->db->select('COUNT(DISTINCT(kr_namaprovinsi)) as jml_provinsi');
    return $this->db->get($this->table)->row();
  }  
  
  function get_all_jml_kabupaten()
  {
    $this->db->select('COUNT(DISTINCT(kr_namakota)) as jml_kabupaten');
    return $this->db->get($this->table)->row();
  } 
  
  function get_all_jml_barang()
  {
    $this->db->select('COUNT(DISTINCT(ko_jenis)) as jml_barang');
    return $this->db->get($this->table)->row();
  }  
  
  function get_all_jml_penerima()
  {
    $this->db->select('COUNT(DISTINCT(kr_namapenerima)) as pn_nama');
    return $this->db->get($this->table)->row();
  } 
  
  function get_kegiatan_by_provinsi($provinsi)
  {
	    $this->db->select("kr_namakota, left(kd_output,4) as kode_kegiatan, tbl_kegiatan.nama_kegiatan, SUM(db_nilaibast) AS jumlah");
		$this->db->join('tbl_kegiatan', 'left(tbl_benpam2018.kd_output,4) = tbl_kegiatan.kd_kegiatan');
	    $this->db->like('kr_namaprovinsi', $provinsi);
		$this->db->where('status_review', 'sesuai');
		$this->db->group_by('left(kd_output,4)' );
		return $this->db->get($this->table)->result(); 
  }
  
  function get_akun_by_provinsi($provinsi)
  {
	    $this->db->select("tbl_benpam2018.kr_namakota, tbl_benpam2018.kd_akun, tbl_akun.nama_akun, SUM(tbl_benpam2018.db_nilaibast) AS jumlah");
		$this->db->join('tbl_akun', 'tbl_benpam2018.kd_akun = tbl_akun.kd_akun');
	    $this->db->like('tbl_benpam2018.kr_namaprovinsi', $provinsi);
		$this->db->where('tbl_benpam2018.status_review', 'sesuai');
		$this->db->group_by('tbl_benpam2018.kd_akun');
		return $this->db->get($this->table)->result(); 
  }
  
  function get_provinsi_kegiatan()
  {
	$this->db->select("kr_namaprovinsi,sum(db_nilaibast) as jumlah FROM tbl_benpam2018 where status_review='selesai' GROUP by kr_namaprovinsi order by sum(db_nilaibast) DESC");  
    return $this->db->get()->result();
  }
  
  function get_kabupaten_kegiatan($provinsi)
  {
	$this->db->select("SELECT kr_namakota,kd_output,sum(db_nilaibast) as jumlah FROM tbl_benpam2018 where kr_namaprovinsi like '%$provinsi%' and status_review='selesai' GROUP by kr_namakota,kd_output order by jumlah desc; ");  
    return $this->db->get($this->table)->row();
  }
  
  function get_kecamatan_kegiatan($kabupaten)
  {
	$this->db->select("SELECT kr_namakecamatan,kd_output,sum(db_nilaibast) as jumlah FROM tbl_benpam2018 where kr_namakota like '%$kabupaten%' and status_review='selesai' GROUP by kr_namakecamatan,kd_output order by jumlah desc; ");  
    return $this->db->get($this->table)->row();
  }
  
  function get_desa_kegiatan($kecamatan)
  {
	$this->db->select("SELECT kr_namadesa,kd_output,sum(db_nilaibast) as jumlah FROM tbl_benpam2018 where kr_namakecamatan like '%$kecamatan%' and status_review='selesai' GROUP by kr_namadesa,kd_output order by jumlah desc; ");  
    return $this->db->get($this->table)->row();
  }
 
  private function _get_datatables_query($provinsi)
	{
		
		//$this->db->from($this->table);
		$this->db->select("kr_namakota,left(kd_output,4) as kode_kegiatan, SUM(db_nilaibast) AS jumlah");
		$this->db->join('tbl_kegiatan', 'left(tbl_benpam2018.kd_output,4) = tbl_kegiatan.kd_kegiatan');
		$this->db->like('kr_namaprovinsi', $provinsi);
		$this->db->where('status_review', 'sesuai');
		$this->db->group_by('left(kd_output,4)');
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

	function get_datatables($provinsi)
	{
		$this->_get_datatables_query($provinsi);
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	function count_filtered($provinsi)
	{
		$this->_get_datatables_query($provinsi);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all($provinsi)
	{
		$this->db->from($this->table);
		$this->db->like('kr_namaprovinsi', $provinsi);
		$this->db->where('status_review', 'sesuai');
		$this->db->group_by('kr_namaprovinsi');
		return $this->db->count_all_results();
	}
	
  private function _get_datatables_query_kecamatan($kabupaten)
	{
		
		//$this->db->from($this->table);
		$this->db->select("kr_namakecamatan, left(kd_output,4) as kode_kegiatan, tbl_kegiatan.nama_kegiatan, SUM(db_nilaibast) AS jumlah");
		$this->db->join('tbl_kegiatan', 'left(tbl_benpam2018.kd_output,4) = tbl_kegiatan.kd_kegiatan');
		$this->db->like('kr_namakota', $kabupaten);
		$this->db->where('status_review', 'sesuai');
		$this->db->group_by('kr_namakecamatan', 'left(kd_output,4)');
		$this->db->from($this->table);

		$i = 0;
	
		foreach ($this->column_search_kec as $item) // loop column 
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

				if(count($this->column_search_kec) - 1 == $i) //last loop
					$this->db->group_end(); //close bracket
			}
			$i++;
		}
		
		if(isset($_POST['order'])) // here order processing
		{
			$this->db->order_by($this->column_order_kec[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} 
		else if(isset($this->order))
		{
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}

	function get_datatables_kecamatan($kabupaten)
	{
		$this->_get_datatables_query_kecamatan($kabupaten);
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	function count_filtered_kecamatan($kabupaten)
	{
		$this->_get_datatables_query_kecamatan($kabupaten);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all_kecamatan($kabupaten)
	{
		$this->db->from($this->table);
		$this->db->like('kr_namakota', $kabupaten);
		$this->db->where('status_review', 'sesuai');
		$this->db->group_by('kr_namakecamatan');
		return $this->db->count_all_results();
	}
	
	
	private function _get_datatables_query_desa($kecamatan)
	{
		
		//$this->db->from($this->table);
		$this->db->select("kr_namadesa, left(kd_output,4) as kode_kegiatan, tbl_kegiatan.nama_kegiatan, SUM(db_nilaibast) AS jumlah");
		$this->db->join('tbl_kegiatan', 'left(tbl_benpam2018.kd_output,4) = tbl_kegiatan.kd_kegiatan');
		$this->db->like('kr_namakecamatan', $kecamatan);
		$this->db->where('status_review', 'sesuai');
		$this->db->group_by('kr_namadesa', 'left(kd_output,4)');
		$this->db->from($this->table);

		$i = 0;
	
		foreach ($this->column_search_des as $item) // loop column 
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

				if(count($this->column_search_des) - 1 == $i) //last loop
					$this->db->group_end(); //close bracket
			}
			$i++;
		}
		
		if(isset($_POST['order'])) // here order processing
		{
			$this->db->order_by($this->column_order_des[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} 
		else if(isset($this->order))
		{
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}

	function get_datatables_desa($kecamatan)
	{
		$this->_get_datatables_query_desa($kecamatan);
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	function count_filtered_desa($kecamatan)
	{
		$this->_get_datatables_query_desa($kecamatan);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all_desa($kecamatan)
	{
		$this->db->from($this->table);
		$this->db->like('kr_namakecamatan', $kecamatan);
		$this->db->where('status_review', 'sesuai');
		$this->db->group_by('kr_namadesa', 'kode_kegiatan');
		return $this->db->count_all_results();
	}
	
	private function _get_datatables_query_person($desa)
	{
		
		//$this->db->from($this->table);
		$this->db->select("kr_namapenerima, left(kd_output,4) as kode_kegiatan, tbl_kegiatan.nama_kegiatan, SUM(db_nilaibast) AS jumlah");
		$this->db->join('tbl_kegiatan', 'left(tbl_benpam2018.kd_output,4) = tbl_kegiatan.kd_kegiatan');
		$this->db->like('kr_namadesa', $desa);
		$this->db->where('status_review', 'sesuai');
		$this->db->group_by('kr_namapenerima', 'left(kd_output,4)');
		$this->db->from($this->table);

		$i = 0;
	
		foreach ($this->column_search_person as $item) // loop column 
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

				if(count($this->column_search_person) - 1 == $i) //last loop
					$this->db->group_end(); //close bracket
			}
			$i++;
		}
		
		if(isset($_POST['order'])) // here order processing
		{
			$this->db->order_by($this->column_order_person[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} 
		else if(isset($this->order))
		{
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}

	function get_datatables_person($desa)
	{
		$this->_get_datatables_query_person($desa);
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	function count_filtered_person($desa)
	{
		$this->_get_datatables_query_person($desa);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all_person($desa)
	{
		$this->db->from($this->table);
		$this->db->like('kr_namadesa', $desa);
		$this->db->where('status_review', 'sesuai');
		$this->db->group_by('kr_namapenerima', 'kd_output');
		return $this->db->count_all_results();
	}

}
