<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front2019_model extends CI_Model{
  var $table = 'tbl_benpam2019';
  var $column_order = array('nama_kota','kode_kegiatan','jumlah',null); //set column field database for datatable orderable
  var $column_search = array('nama_kota','kode_kegiatan'); //set column field database for datatable searchable just firstname , lastname , address are searchable
  var $column_order_kec = array('nama_kecamatan','kode_kegiatan','jumlah',null); //set column field database for datatable orderable
  var $column_search_kec = array('nama_kecamatan','kode_kegiatan'); //set column field database for datatable searchable just firstname , lastname , address are searchable
  var $column_order_des = array('nama_desa','kode_kegiatan','jumlah',null); //set column field database for datatable orderable
  var $column_search_des = array('nama_desa','kode_kegiatan'); //set column field database for datatable searchable just firstname , lastname , address are searchable
  var $column_order_person = array('nama_penerima','kode_kegiatan','jumlah',null); //set column field database for datatable orderable
  var $column_search_person = array('nama_penerima','kode_kegiatan'); //set column field database for datatable searchable just firstname , lastname , address are searchable
  //var $order = array('jumlah' => 'desc'); // default order 
  
  public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
  function get_Jumlah_penerima()
  {
	$this->db->select('count(nama_penerima) as jumlah');
    return $this->db->get($this->table)->row();
  }
  
  function get_Jumlah_bantuan()
  {
	$this->db->select('sum(nilai_bast) as jumlah_uang');
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
    $this->db->select('COUNT(DISTINCT(nama_provinsi)) as jml_provinsi');
    return $this->db->get($this->table)->row();
  }  
  
  function get_all_jml_kabupaten()
  {
    $this->db->select('COUNT(DISTINCT(nama_kota)) as jml_kabupaten');
    return $this->db->get($this->table)->row();
  } 
  
  function get_all_jml_barang()
  {
    $this->db->select('COUNT(DISTINCT(nama_barang)) as jml_barang');
    return $this->db->get($this->table)->row();
  }  
  
  function get_all_jml_penerima()
  {
    $this->db->select('COUNT(DISTINCT(nama_penerima)) as pn_nama');
    return $this->db->get($this->table)->row();
  } 
	
  function get_kegiatan_by_provinsi($provinsi)
  {
	    $this->db->select("nama_kota, left(kode_kegiatan,4) as kode_kegiatan, tbl_kegiatan.nama_kegiatan, SUM(nilai_bast) AS jumlah");
		$this->db->join('tbl_kegiatan', 'left(tbl_benpam2019.kode_kegiatan,4) = tbl_kegiatan.kd_kegiatan');
	    $this->db->like('nama_provinsi', $provinsi);
		$this->db->where('status_penerimaan', 'sesuai');
		$this->db->group_by('left(kode_kegiatan,4)' );
		return $this->db->get($this->table)->result(); 
  }
  
  function get_akun_by_provinsi($provinsi)
  {
	    $this->db->select("nama_kota, kode_akun, tbl_akun.nama_akun, SUM(nilai_bast) AS jumlah");
		$this->db->join('tbl_akun', 'tbl_benpam2019.kode_akun = tbl_akun.kd_akun');
	    $this->db->like('nama_provinsi', $provinsi);
		$this->db->where('status_penerimaan', 'sesuai');
		$this->db->group_by('kode_akun');
		return $this->db->get($this->table)->result(); 
  }
  
  function get_provinsi_kegiatan()
  {
	$this->db->select("nama_provinsi,sum(nilai_bast) as jumlah FROM tbl_benpam2019 where status_penerimaan='sesuai' GROUP by nama_provinsi order by sum(nilai_bast) DESC");  
    return $this->db->get()->result();
  }
  
  function get_kabupaten_kegiatan($provinsi)
  {
	$this->db->select("SELECT nama_kota,kode_kegiatan,sum(nilai_bast) as jumlah FROM tbl_benpam2019 where nama_provinsi like '%$provinsi%' and status_penerimaan='sesuai' GROUP by nama_kota,kode_kegiatan order by jumlah desc;  ");  
    return $this->db->get()->row();
  }
  
  function get_kecamatan_kegiatan($kabupaten)
  {
	$this->db->select("SELECT nama_kecamatan,kode_kegiatan,sum(nilai_bast) as jumlah FROM tbl_benpam2019 where nama_kota like '%$kabupaten%' and status_penerimaan='sesuai' GROUP by nama_kecamatan,kode_kegiatan order by jumlah desc;  ");  
    return $this->db->get()->row();
  }
  
  function get_desa_kegiatan($kecamatan)
  {
	$this->db->select("SELECT nama_desa,kode_kegiatan,sum(nilai_bast) as jumlah FROM tbl_benpam2019 where nama_kecamatan like '%$kecamatan%' and status_penerimaan='sesuai' GROUP by nama_desa,kode_kegiatan order by jumlah desc;  ");  
    return $this->db->get()->row();
  }
 
  private function _get_datatables_query($provinsi)
	{
		
		//$this->db->from($this->table);
		$this->db->select("nama_kota,left(kode_kegiatan,4) as kode_kegiatan, SUM(nilai_bast) AS jumlah");
		$this->db->join('tbl_kegiatan', 'left(tbl_benpam2019.kode_kegiatan,4) = tbl_kegiatan.kd_kegiatan');
		$this->db->like('nama_provinsi', $provinsi);
		$this->db->where('status_penerimaan', 'sesuai');
		$this->db->group_by('left(kode_kegiatan,4)');
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
		$this->db->like('nama_provinsi', $provinsi);
		$this->db->where('status_penerimaan', 'sesuai');
		$this->db->group_by('nama_provinsi');
		return $this->db->count_all_results();
	}
	
  private function _get_datatables_query_kecamatan($kabupaten)
	{
		
		//$this->db->from($this->table);
		$this->db->select("nama_kecamatan, left(kode_kegiatan,4) as kode_kegiatan, tbl_kegiatan.nama_kegiatan, SUM(nilai_bast) AS jumlah");
		$this->db->join('tbl_kegiatan', 'left(tbl_benpam2019.kode_kegiatan,4) = tbl_kegiatan.kd_kegiatan');
		$this->db->like('nama_kota', $kabupaten);
		$this->db->where('status_penerimaan', 'sesuai');
		$this->db->group_by('nama_kecamatan', 'left(kode_kegiatan,4)');
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
		$this->db->like('nama_kota', $kabupaten);
		$this->db->where('status_penerimaan', 'sesuai');
		$this->db->group_by('kecamatan');
		return $this->db->count_all_results();
	}
	
	
	private function _get_datatables_query_desa($kecamatan)
	{
		
		//$this->db->from($this->table);
		$this->db->select("nama_desa, left(kode_kegiatan,4) as kode_kegiatan, tbl_kegiatan.nama_kegiatan, SUM(nilai_bast) AS jumlah");
		$this->db->join('tbl_kegiatan', 'left(tbl_benpam2019.k_kode_kegiatan,4) = tbl_kegiatan.kd_kegiatan');
		$this->db->like('nama_kecamatan', $kecamatan);
		$this->db->where('status_penerimaan', 'sesuai');
		$this->db->group_by('nama_desa', 'left(kode_kegiatan,4)');
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
		$this->db->like('nama_kecamatan', $kecamatan);
		$this->db->where('status_penerimaan', 'sesuai');
		$this->db->group_by('nama_desa', 'kode_kegiatan');
		return $this->db->count_all_results();
	}
	
	private function _get_datatables_query_person($desa)
	{
		
		//$this->db->from($this->table);
		$this->db->select("nama_penerima, left(k_kode_kegiatan,4) as kode_kegiatan, tbl_kegiatan.nama_kegiatan, SUM(nilai_bast) AS jumlah");
		$this->db->join('tbl_kegiatan', 'left(tbl_benpam2019.kode_kegiatan,4) = tbl_kegiatan.kd_kegiatan');
		$this->db->like('nama_desa', $desa);
		$this->db->where('status_penerimaan', 'sesuai');
		$this->db->group_by('nama_penerima', 'left(k_kode_kegiatan,4)');
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
		$this->db->like('nama_desa', $desa);
		$this->db->where('status_penerimaan', 'sesuai');
		$this->db->group_by('nama_penerima', 'kode_kegiatan');
		return $this->db->count_all_results();
	}
}
