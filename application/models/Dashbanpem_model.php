<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashbanpem_model extends CI_Model{
  var $table2021 = 'v_kegiatan_provinsi_2021';
  var $tableakun2021 = 'v_akun_provinsi_2021';
  var $tableBanpem = 'tbl_banpem';
  var $column_order = array('kabupaten','k_kode_kegiatan','jumlah',null); //set column field database for datatable orderable
  var $column_search = array('kabupaten','k_kode_kegiatan'); //set column field database for datatable searchable just firstname , lastname , address are searchable
  var $column_order_kec = array('kecamatan','k_kode_kegiatan','jumlah',null); //set column field database for datatable orderable
  var $column_search_kec = array('kecamatan','k_kode_kegiatan'); //set column field database for datatable searchable just firstname , lastname , address are searchable
  var $column_order_des = array('desa','k_kode_kegiatan','jumlah',null); //set column field database for datatable orderable
  var $column_search_des = array('desa','k_kode_kegiatan'); //set column field database for datatable searchable just firstname , lastname , address are searchable
  var $column_order_person = array('pn_nama','k_kode_kegiatan','jumlah',null); //set column field database for datatable orderable
  var $column_search_person = array('pn_nama','k_kode_kegiatan','nama_barang','spek_barang',); //set column field database for datatable searchable just firstname , lastname , address are searchable
  //var $order = array('jumlah' => 'desc'); // default order 
  
  public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
  function get_jml_status_review($kd_satker)
  {
	$this->db->select("status, count(k_kontrak_nomor) as jumlah from(select DISTINCT if(k_kontrak_status_review is null,'Belum di Ajukan',k_kontrak_status_review) as status, k_kontrak_nomor from tbl_banpem where k_satker_kode='$kd_satker') as kontrak group by status"); 
	return $this->db->get()->result(); 
  }
  
  function get_jml_status_review_admin()
  {
	$this->db->select("status, count(k_kontrak_nomor) as jumlah from(select DISTINCT if(k_kontrak_status_review is null,'Belum di Ajukan',k_kontrak_status_review) as status, k_kontrak_nomor from tbl_banpem) as kontrak group by status"); 
	return $this->db->get()->result(); 
  }
	
  function get_kegiatan_by_provinsi($provinsi)
  {
	    $this->db->select("id_provinsi,id_kabupaten, kabupaten, left(k_kode_kegiatan,4) as k_kode_kegiatan, nama_kegiatan, sum(jmlbast) as jumlah");
	    $this->db->where('v_kegiatan_provinsi_2021.id_provinsi', $provinsi);
		$this->db->where('v_kegiatan_provinsi_2021.jmlbast !=' , 0);
		$this->db->group_by('left(k_kode_kegiatan,4)' );
		return $this->db->get($this->table2021)->result(); 
  }
  
  function get_akun_by_provinsi($provinsi)
  {
	    $this->db->select("id_provinsi,provinsi,id_kabupaten,kabupaten, k_kode_akun, nama_akun, SUM(jmlbast) AS jumlah");
	    $this->db->where('v_kegiatan_provinsi_2021.id_provinsi', $provinsi);
		$this->db->where('v_kegiatan_provinsi_2021.jmlbast !=' , 0);
		$this->db->group_by('k_kode_akun');
		return $this->db->get($this->tableakun2021)->result(); 
  }
  
  private function _get_datatables_query($provinsi)
	{
		
		//$this->db->from($this->table);
		$this->db->select("id_kabupaten,kabupaten,left(k_kode_kegiatan,4) as k_kode_kegiatan, sum(jmlbast) AS jumlah");
		$this->db->where('v_kegiatan_provinsi_2021.id_provinsi', $provinsi);
		$this->db->where('v_kegiatan_provinsi_2021.id_kabupaten !=' , null);
		$this->db->where('v_kegiatan_provinsi_2021.jmlbast !=' , 0);
		$this->db->group_by('kabupaten');
		$this->db->from($this->table2021);

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
		$this->db->from($this->table2021);
		$this->db->where('v_kegiatan_provinsi_2021.id_provinsi', $provinsi);
		$this->db->where('v_kegiatan_provinsi_2021.id_kabupaten !=' , null);
		$this->db->where('v_kegiatan_provinsi_2021.jmlbast !=' , 0);
		$this->db->group_by('kabupaten');
		return $this->db->count_all_results();
	}
	
  private function _get_datatables_query_kecamatan($kabupaten)
	{
		
		//$this->db->from($this->table);
		$this->db->select("id_kecamatan, kecamatan, left(v_kegiatan_provinsi_2021.k_kode_kegiatan,4) as k_kode_kegiatan, tbl_kegiatan.nama_kegiatan, SUM(jmlbast) AS jumlah");
		$this->db->join('tbl_kegiatan', 'left(v_kegiatan_provinsi_2021.k_kode_kegiatan,4) = tbl_kegiatan.kd_kegiatan');
		$this->db->where('v_kegiatan_provinsi_2021.id_kabupaten', $kabupaten);
		$this->db->where('v_kegiatan_provinsi_2021.jmlbast !=' , 0);
		$this->db->group_by('kecamatan', 'left(v_kegiatan_provinsi_2021.k_kode_kegiatan,4)');
		$this->db->from($this->table2021);

		$i = 0;
	
		foreach ($this->column_search_kec as $item) // loop column 
		{
			if($_POST['search']['value']) // if datatable send POST for search
			{
				
				if($i===0) // first loop
				{
					$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
					$this->db->where($item, $_POST['search']['value']);
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
		$this->db->from($this->table2021);
		$this->db->where('v_kegiatan_provinsi_2021.id_kabupaten', $kabupaten);
		$this->db->where('v_kegiatan_provinsi_2021.jmlbast !=' , 0);
		$this->db->group_by('kecamatan', 'k_kode_kegiatan');
		return $this->db->count_all_results();
	}
	
	
	private function _get_datatables_query_desa($kecamatan)
	{
		
		//$this->db->from($this->table);
		$this->db->select("desa, left(k_kode_kegiatan,4) as k_kode_kegiatan, tbl_kegiatan.nama_kegiatan, SUM(jmlbast) AS jumlah");
		$this->db->join('tbl_kegiatan', 'left(v_kegiatan_provinsi_2021.k_kode_kegiatan,4) = tbl_kegiatan.kd_kegiatan');
		$this->db->where('v_kegiatan_provinsi_2021.kecamatan', $kecamatan);
		$this->db->where('v_kegiatan_provinsi_2021.jmlbast !=' , 0);
		$this->db->group_by('desa', 'left(k_kode_kegiatan,4)');
		$this->db->from($this->table2021);

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
		$this->db->from($this->table2021);
		$this->db->where('v_kegiatan_provinsi_2021.kecamatan', $kecamatan);
		$this->db->where('v_kegiatan_provinsi_2021.jmlbast !=' , 0);
		$this->db->group_by('desa', 'k_kode_kegiatan');
		return $this->db->count_all_results();
	}
	
	private function _get_datatables_query_person($desa)
	{
		
		//$this->db->from($this->table);
		$this->db->select("pn_nama, left(k_kode_kegiatan,4) as k_kode_kegiatan, tbl_kegiatan.nama_kegiatan, nama_barang, spek_barang, SUM(jmlbast) AS jumlah");
		$this->db->join('tbl_kegiatan', 'left(v_kegiatan_provinsi_2021.k_kode_kegiatan,4) = tbl_kegiatan.kd_kegiatan');
		$this->db->where('desa', $desa);
		$this->db->group_by('pn_nama', 'left(k_kode_kegiatan,4)');
		$this->db->from($this->table2021);

		$i = 0;
	
		foreach ($this->column_search_person as $item) // loop column 
		{
			if($_POST['search']['value']) // if datatable send POST for search
			{
				
				if($i===0) // first loop
				{
					$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
					$this->db->where($item, $_POST['search']['value']);
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
		$this->db->from($this->table2021);
		$this->db->where('desa', $desa);
		$this->db->group_by('pn_nama', 'k_kode_kegiatan');
		return $this->db->count_all_results();
	}
	
  function get_provinsi_terbesar()
  {
	$this->db->select("id_provinsi, provinsi, sum(jmlbast) as jumlah FROM v_kegiatan_provinsi_2021 group by provinsi order by sum(jmlbast) DESC limit 10;"); 
	return $this->db->get()->result(); 
  }
  
  function get_provinsi_terkecil()
  {
	$this->db->select("id_provinsi, provinsi, sum(jmlbast) as jumlah FROM v_kegiatan_provinsi_2021"); 
	$this->db->where("provinsi !=","'160100");
	$this->db->group_by("provinsi");
	$this->db->order_by("sum(jmlbast) ASC limit 10"); 
	return $this->db->get()->result(); 
  }
	
  function get_provinsi_kegiatan()
  {
	$this->db->select("id_provinsi, provinsi, jmlbast AS jumlah
	FROM v_kegiatan_provinsi_2021 GROUP BY provinsi
	ORDER BY jmlbast DESC"); 
	return $this->db->get()->result(); 
  }
  
  function get_kabupaten_kegiatan($provinsi)
  {
	$myurl = urldecode($provinsi);
	$this->db->select("id_kabupaten, kabupaten, k_kode_kegiatan, jmlbast AS jumlah
	FROM v_kegiatan_provinsi_2021 WHERE id_provinsi =  '$myurl' GROUP BY id_kabupaten, kabupaten,k_kode_kegiatan
	ORDER BY jmlbast, k_kode_kegiatan");  
	return $this->db->get()->row();
  }
  
  function get_kecamatan_kegiatan($kabupaten)
  {
	$this->db->select("id_kecamatan, kecamatan, k_kode_kegiatan, SUM(jmlbast) AS jumlah
	FROM v_kegiatan_provinsi_2021 WHERE id_kabupaten = '$kabupaten' GROUP BY oid_kecamatan, kecamatan,k_kode_kegiatan
	ORDER BY jmlbast, k_kode_kegiatan DESC;");  
	return $this->db->get()->row();
  }
  
  function get_kegiatan_dasboard()
  {
	$this->db->select("SELECT k_kode_kegiatan,sum(jmlbast) as jumlah FROM v_kegiatan_provinsi_2021 WHERE k_kode_kegiatan is not null group by k_kode_kegiatan;");  
	return $this->db->get()->row();
  }
  
  function get_akun_dasboard()
  {
	$this->db->select("SELECT k_kode_akun, sum(jmlbast) as jumlah FROM v_akun_provinsi_2021 WHERE k_kode_akun is not null group by k_kode_akun");  
	return $this->db->get()->row();
  }
  
  function get_nilai_kontrak_Barang_dasboard()
  {
	$this->db->select("k_tipe, SUM(k.k_kontrak_nilai) AS jumlah FROM (SELECT DISTINCT k_tipe, k_kontrak_nomor, k_kontrak_nilai FROM tbl_banpem group by k_tipe) AS k where k_tipe='Barang' group by k_tipe");  
	return $this->db->get()->row();
  }
  
  function get_nilai_kontrak_Uang_dasboard()
  {
	$this->db->select("k_tipe, SUM(k.k_kontrak_nilai) AS jumlah FROM (SELECT DISTINCT k_tipe, k_kontrak_nomor, k_kontrak_nilai FROM tbl_banpem group by k_tipe) AS k where k_tipe='Uang' group by k_tipe");  
	return $this->db->get()->row();
  }
  
  function get_nilai_spm_barang_dasboard()
  {
	$this->db->select("k_tipe, SUM(k.pn_nilai_disalurkan) AS jumlah FROM (SELECT DISTINCT k_tipe, pn_spm_nomor, pn_nilai_disalurkan FROM tbl_banpem group by k_tipe) AS k where k_tipe='Barang' and k_tipe != 'null' group by k_tipe");  
	return $this->db->get()->row();
  }
  
  function get_nilai_spm_uang_dasboard()
  {
	$this->db->select("k_tipe, SUM(k.pn_nilai_disalurkan) AS jumlah FROM (SELECT DISTINCT k_tipe, pn_spm_nomor, pn_nilai_disalurkan FROM tbl_banpem group by k_tipe) AS k where k_tipe='Uang' and k_tipe != 'null' group by k_tipe");  
	return $this->db->get()->row();
  }
  
  function get_nilai_disalurkan_uang_dasboard()
  {
	$this->db->select("k_tipe, SUM(k.pn_nilai_disalurkan) AS jumlah FROM (SELECT DISTINCT k_tipe, pn_spm_nomor, pn_nilai_disalurkan FROM tbl_banpem group by k_tipe) AS k where k_tipe='Uang' and k_tipe != 'null' group by k_tipe");  
	return $this->db->get()->row();
  }
  
  function get_nilai_disalurkan_barang_dasboard()
  {
	$this->db->select("k_tipe, SUM(k.pn_nilai_disalurkan) AS jumlah FROM (SELECT DISTINCT k_tipe, pn_spm_nomor, pn_nilai_disalurkan FROM tbl_banpem group by k_tipe) AS k where k_tipe='Barang' and k_tipe != 'null' group by k_tipe");  
	return $this->db->get()->row();
  }
  
  function get_nilai_diterima_barang_dasboard()
  {
	$this->db->select("k_tipe, SUM(k.pn_diterima_nilai) AS jumlah FROM (SELECT DISTINCT k_tipe, k_kontrak_nomor, pn_diterima_nilai FROM tbl_banpem group by k_tipe) AS k where k_tipe='Barang' and k_tipe != 'null' group by k_tipe");  
	return $this->db->get()->row();
  }
  
  function get_nilai_diterima_uang_dasboard()
  {
	$this->db->select("k_tipe, SUM(k.pn_diterima_nilai) AS jumlah FROM (SELECT DISTINCT k_tipe, k_kontrak_nomor, pn_diterima_nilai FROM tbl_banpem group by k_tipe) AS k where k_tipe='Uang' and k_tipe != 'null' group by k_tipe");  
	return $this->db->get()->row();
  }
  
  function get_nilai_bast_uang_dasboard()
  {
	$this->db->select("k_tipe, SUM(k.pn_nilai_bast) AS jumlah FROM (SELECT DISTINCT k_tipe, k_kontrak_nomor, pn_nilai_bast FROM tbl_banpem group by k_tipe) AS k where k_tipe='Uang' and k_tipe != 'null' group by k_tipe");  
	return $this->db->get()->row();
  }
  
  function get_nilai_bast_barang_dasboard()
  {
	$this->db->select("k_tipe, SUM(k.pn_nilai_bast) AS jumlah FROM (SELECT DISTINCT k_tipe, k_kontrak_nomor, pn_nilai_bast FROM tbl_banpem group by k_tipe) AS k where k_tipe='Barang' and k_tipe != 'null' group by k_tipe");  
	return $this->db->get()->row();
  }
  
   function get_nilai_bast_barang_selesai_dasboard()
  {
	$this->db->select("k_tipe, SUM(k.pn_nilai_bast) AS jumlah FROM (SELECT DISTINCT k_tipe,k_kontrak_nomor,pn_diterima_status, pn_nilai_bast FROM tbl_banpem group by k_tipe) AS k where k_tipe='Barang' and k_tipe != 'null' and pn_diterima_status = 'Sesuai' group by k_tipe");  
	return $this->db->get()->row();
  }
  
  function get_nilai_bast_uang_selesai_dasboard()
  {
	$this->db->select("k_tipe, SUM(k.pn_nilai_bast) AS jumlah FROM (SELECT DISTINCT k_tipe,k_kontrak_nomor,pn_diterima_status, pn_nilai_bast FROM tbl_banpem group by k_tipe) AS k where k_tipe='Uang' and k_tipe != 'null' and pn_diterima_status = 'Sesuai' group by k_tipe");  
	return $this->db->get()->row();
  }
  

}
