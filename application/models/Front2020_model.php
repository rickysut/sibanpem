<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front2020_model extends CI_Model{
  var $table = 'tbl_banpem2020';
  var $column_order = array('kabupaten','k_kode_kegiatan','jumlah',null); //set column field database for datatable orderable
  var $column_search = array('kabupaten','k_kode_kegiatan'); //set column field database for datatable searchable just firstname , lastname , address are searchable
  var $column_order_kec = array('kecamatan','k_kode_kegiatan','jumlah',null); //set column field database for datatable orderable
  var $column_search_kec = array('kecamatan','k_kode_kegiatan'); //set column field database for datatable searchable just firstname , lastname , address are searchable
  var $column_order_des = array('desa','k_kode_kegiatan','jumlah',null); //set column field database for datatable orderable
  var $column_search_des = array('desa','k_kode_kegiatan'); //set column field database for datatable searchable just firstname , lastname , address are searchable
  var $column_order_person = array('pn_nama','k_kode_kegiatan','jumlah',null); //set column field database for datatable orderable
  var $column_search_person = array('pn_nama','k_kode_kegiatan'); //set column field database for datatable searchable just firstname , lastname , address are searchable
  //var $order = array('jumlah' => 'desc'); // default order 
  
  public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

  function get_Jumlah_penerima()
  {
	$this->db->select('count(pn_nama) as jumlah');
    return $this->db->get($this->table)->row();
  }
  
  function get_Jumlah_bantuan()
  {
	$this->db->select('sum(pn_nilai_bast) as jumlah_uang');
	return $this->db->get($this->table)->row();
  }
  
  function get_all_provinsi()
  {
    $this->db->select('provinsi,COUNT(DISTINCT(kabupaten)) as kabupaten, COUNT(DISTINCT(kecamatan)) as kecamatan,COUNT(DISTINCT(desa)) as desa,
	COUNT(DISTINCT(pn_nama)) as orang,ROUND(sum(jumlah),2) as jumlah');
	$this->db->group_by('provinsi');
    return $this->db->get($this->table)->result();
  }  
  
  function get_all_barang()
  {
    $this->db->select('nama_barang,provinsi,count(pn_nama) jml_orang, sum(jumlah) as jml_uang ');
	$this->db->group_by('nama_barang, provinsi');
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
    $this->db->select('COUNT(DISTINCT(provinsi)) as jml_provinsi');
    return $this->db->get($this->table)->row();
  }  
  
  function get_all_jml_kabupaten()
  {
    $this->db->select('COUNT(DISTINCT(kabupaten)) as jml_kabupaten');
    return $this->db->get($this->table)->row();
  } 
  
  function get_all_jml_barang()
  {
    $this->db->select('COUNT(DISTINCT(nama_barang)) as jml_barang');
    return $this->db->get($this->table)->row();
  }  
  
  function get_all_jml_penerima()
  {
    $this->db->select('COUNT(DISTINCT(pn_nama)) as pn_nama');
    return $this->db->get($this->table)->row();
  } 
	
  function get_kegiatan_by_provinsi($provinsi)
  {
	    $this->db->select("kabupaten, left(k_kode_kegiatan,4) as k_kode_kegiatan, tbl_kegiatan.nama_kegiatan, SUM(pn_diterima_nilai) AS jumlah");
		$this->db->join('tbl_kegiatan', 'left(tbl_benpam2020.k_kode_kegiatan,4) = tbl_kegiatan.kd_kegiatan');
	    $this->db->like('provinsi', $provinsi);
		$this->db->where('pn_diterima_status', 'sesuai');
		$this->db->group_by('left(k_kode_kegiatan,4)' );
		return $this->db->get($this->table)->result(); 
  }
  
  function get_akun_by_provinsi($provinsi)
  {
	    $this->db->select("kabupaten, k_kode_akun, tbl_akun.nama_akun, SUM(pn_diterima_nilai) AS jumlah");
		$this->db->join('tbl_akun', 'tbl_benpam2020.k_kode_akun = tbl_akun.kd_akun');
	    $this->db->like('provinsi', $provinsi);
		$this->db->where('pn_diterima_status', 'sesuai');
		$this->db->group_by('k_kode_akun');
		return $this->db->get($this->table)->result(); 
  }
 
  private function _get_datatables_query($provinsi)
	{
		
		//$this->db->from($this->table);
		$this->db->select("kabupaten,left(k_kode_kegiatan,4) as k_kode_kegiatan, SUM(pn_diterima_nilai) AS jumlah");
		$this->db->join('tbl_kegiatan', 'left(tbl_benpam2020.k_kode_kegiatan,4) = tbl_kegiatan.kd_kegiatan');
		$this->db->like('provinsi', $provinsi);
		$this->db->where('pn_diterima_status', 'sesuai');
		$this->db->group_by('left(k_kode_kegiatan,4)');
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
		$this->db->like('provinsi', $provinsi);
		$this->db->where('pn_diterima_status', 'sesuai');
		$this->db->group_by('provinsi', 'kabupaten');
		return $this->db->count_all_results();
	}
	
  private function _get_datatables_query_kecamatan($kabupaten)
	{
		
		//$this->db->from($this->table);
		$this->db->select("kecamatan, left(k_kode_kegiatan,4) as k_kode_kegiatan, tbl_kegiatan.nama_kegiatan, SUM(pn_diterima_nilai) AS jumlah");
		$this->db->join('tbl_kegiatan', 'left(tbl_benpam2020.k_kode_kegiatan,4) = tbl_kegiatan.kd_kegiatan');
		$this->db->like('kabupaten', $kabupaten);
		$this->db->where('pn_diterima_status', 'sesuai');
		$this->db->group_by('kecamatan', 'left(k_kode_kegiatan,4)');
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
		$this->db->like('kabupaten', $kabupaten);
		$this->db->where('pn_diterima_status', 'sesuai');
		$this->db->group_by('kecamatan', 'k_kode_kegiatan');
		return $this->db->count_all_results();
	}
	
	
	private function _get_datatables_query_desa($kecamatan)
	{
		
		//$this->db->from($this->table);
		$this->db->select("desa, left(k_kode_kegiatan,4) as k_kode_kegiatan, tbl_kegiatan.nama_kegiatan, SUM(pn_diterima_nilai) AS jumlah");
		$this->db->join('tbl_kegiatan', 'left(tbl_benpam2020.k_kode_kegiatan,4) = tbl_kegiatan.kd_kegiatan');
		$this->db->like('kecamatan', $kecamatan);
		$this->db->where('pn_diterima_status', 'sesuai');
		$this->db->group_by('desa', 'left(k_kode_kegiatan,4)');
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
		$this->db->like('kecamatan', $kecamatan);
		$this->db->where('pn_diterima_status', 'sesuai');
		$this->db->group_by('desa', 'k_kode_kegiatan');
		return $this->db->count_all_results();
	}
	
	private function _get_datatables_query_person($desa)
	{
		
		//$this->db->from($this->table);
		$this->db->select("pn_nama, left(k_kode_kegiatan,4) as k_kode_kegiatan, tbl_kegiatan.nama_kegiatan, SUM(pn_diterima_nilai) AS jumlah");
		$this->db->join('tbl_kegiatan', 'left(tbl_benpam2020.k_kode_kegiatan,4) = tbl_kegiatan.kd_kegiatan');
		$this->db->like('desa', $desa);
		$this->db->where('pn_diterima_status', 'sesuai');
		$this->db->group_by('pn_nama', 'left(k_kode_kegiatan,4)');
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
		$this->db->like('desa', $desa);
		$this->db->where('pn_diterima_status', 'sesuai');
		$this->db->group_by('pn_nama', 'k_kode_kegiatan');
		return $this->db->count_all_results();
	}
  
  function get_provinsi_kegiatan($provinsi)
  {
	$this->db->select("provinsi, SUM(pn_diterima_nilai) AS jumlah
	FROM tbl_benpam2020 WHERE pn_diterima_status = 'sesuai' GROUP BY provinsi
	ORDER BY SUM( pn_diterima_nilai)  DESC");  
    return $this->db->get()->result();
  }
  
  function get_kabupaten_kegiatan($provinsi)
  {
	$this->db->select("kabupaten, k_kode_kegiatan, SUM(pn_diterima_nilai) AS jumlah
	FROM tbl_benpam2020 WHERE provinsi like '%$provinsi%' and pn_diterima_status = 'sesuai' GROUP BY kabupaten,k_kode_kegiatan
	ORDER BY SUM( pn_diterima_nilai ), k_kode_kegiatan DESC; ");  
    return $this->db->get($this->table)->row();
  }
  
  function get_kecamatan_kegiatan($kabupaten)
  {
	$this->db->select("kecamatan, k_kode_kegiatan, SUM(pn_diterima_nilai) AS jumlah
	FROM tbl_benpam2020 WHERE kabupaten like '%$kabupaten%' and pn_diterima_status = 'sesuai' GROUP BY kecamatan,k_kode_kegiatan
	ORDER BY SUM( pn_diterima_nilai ), k_kode_kegiatan DESC; ");  
	return $this->db->get($this->table)->row();
  }
  
  function get_desa_kegiatan($kecamatan)
  {
	$this->db->select("desa, k_kode_kegiatan, SUM(pn_diterima_nilai) AS jumlah
	FROM tbl_benpam2020 WHERE kecamatan like '%$kecamatan%' and pn_diterima_status = 'sesuai' GROUP BY desa,k_kode_kegiatan
	ORDER BY SUM( pn_diterima_nilai ), k_kode_kegiatan DESC; ");  
	return $this->db->get($this->table)->row();
  }

}
