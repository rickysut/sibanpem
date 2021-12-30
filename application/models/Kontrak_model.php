<?php 
	if (!defined('BASEPATH'))exit('No direct script access allowed');

	class Kontrak_model extends CI_Model {
		private $_empID;
		private $_idkontrak;
		private $_k_tipe;
		private $_k_kontrak_cpcl;
		private $_k_kontrak_nomor;
		private $_k_kontrak_tgl;
		private $_k_kontrak_nilai;
		private $_k_kontrak_dokumen;
		private $_k_dipa;
		private $_k_dipa_tgl;
		private $_k_kode_kegiatan;
		private $_k_kode_output;
		private $_k_kode_akun;
		private $_k_kode_ro;
		private $_k_kode_kro;
		private $_k_vendor_npwp;
		private $_k_vendor_nama;
		private $_k_eselon_kode;
		private $_k_eselon_nama;
		private $_k_satker_kode;
		private $_k_satker_nama;

		public function setEmpID($empID) {
			$this->_empID = $empID;
		}
		public function setidkontrak($idkontrak) {
			$this->_idkontrak = $idkontrak;
		}
		public function setk_tipe($k_tipe) {
			$this->_k_tipe = $k_tipe;
		}
		public function set_kontrak_cpcl($k_kontrak_cpcl) {
			$this->_k_kontrak_cpcl = $k_kontrak_cpcl;
		}    
		public function set_kontrak_nomor($k_kontrak_nomor) {
			$this->_k_kontrak_nomor = $k_kontrak_nomor;
		}
		public function setk_kontrak_tgl($k_kontrak_tgl) {
			$this->_k_kontrak_tgl = $k_kontrak_tgl;
		}
		public function setk_kontrak_nilai($k_kontrak_nilai) {
			$this->_k_kontrak_nilai = $k_kontrak_nilai;
		}
		public function setk_kontrak_dokumen($k_kontrak_dokumen) {
			$this->_k_kontrak_dokumen = $k_kontrak_dokumen;
		}
		public function set_k_dipa($k_dipa) {
			$this->_k_dipa = $k_dipa;
		}
		public function setk_dipa_tgl($k_dipa_tgl) {
			$this->_k_dipa_tgl = $k_dipa_tgl;
		}    
		public function setk_kode_kegiatan($k_kode_kegiatan) {
			$this->_k_kode_kegiatan = $k_kode_kegiatan;
		}
		public function setk_kode_akun($k_kode_akun) {
			$this->_k_kode_akun = $k_kode_akun;
		}
		public function setk_kode_output($k_kode_output) {
			$this->_k_kode_output = $k_kode_output;
		}
		public function setk_kode_ro($k_kode_ro) {
			$this->_k_kode_ro = $k_kode_ro;
		}
		public function setk_kode_kro($k_kode_kro) {
			$this->_k_kode_kro = $k_kode_kro;
		}
		public function setk_vendor_npwp($k_vendor_npwp) {
			$this->_k_vendor_npwp = $k_vendor_npwp;
		}    
		public function setk_vendor_nama($k_vendor_nama) {
			$this->_k_vendor_nama = $k_vendor_nama;
		}
		public function setk_eselon_kode($k_eselon_kode) {
			$this->_k_eselon_kode = $k_eselon_kode;
		}
		public function setk_eselon_nama($k_eselon_nama) {
			$this->_k_eselon_nama = $k_eselon_nama;
		}
		public function setk_satker_kode($k_satker_kode) {
			$this->_k_satker_kode = $k_satker_kode;
		}
		public function setk_satker_nama($k_satker_nama) {
			$this->_k_satker_nama = $k_satker_nama;
		}
		
		public $tablek = 'tbl_kegiatan';
		public $table2 = 'tbl_kro';
		public $table3 = 'tbl_ro';
		public $table4 = 'tbl_komponen';
		public $table5 = 'tbl_akun';
		public $id    = 'id';
		//public $order = 'DESC';
		var $table = 'tbl_kontrak';
		var $column_order = array(null, 'k_kontrak_tgl','e.k_tipe', 'e.k_kontrak_nomor','e.k_kode_kegiatan','e.k_kode_akun','e.k_kode_output','e.k_kode_ro','k_eselon_nama','k_satker_nama');
		var $column_search = array('e.k_tipe','e.k_kontrak_nomor','e.k_kode_kegiatan','e.k_kode_akun','e.k_kode_output','e.k_kode_ro','k_eselon_nama','k_satker_nama');
		var $order = array('id' => 'DESC');
		
		private function getQuery()
		{

			//add custom filter here
			if(!empty($this->input->post('k_tipe')))
			{
				$this->db->like('k_tipe', $this->input->post('k_tipe'), 'both');
			}
			if(!empty($this->input->post('k_kontrak_nomor')))
			{
				$this->db->like('e.k_kontrak_nomor', $this->input->post('k_kontrak_nomor'), 'both');
			}
			if(!empty($this->input->post('k_kode_kegiatan')))
			{
				$this->db->like('e.k_kode_kegiatan', $this->input->post('k_kode_kegiatan'), 'both');
			}
			if(!empty($this->input->post('k_kode_akun')))
			{
				$this->db->like('e.k_kode_akun', $this->input->post('k_kode_akun'), 'both');
			}

			$this->db->select(array('e.id AS id', 'e.k_tipe AS k_tipe','e.k_kontrak_cpcl AS k_kontrak_cpcl', 'e.k_kontrak_nomor AS k_kontrak_nomor','e.k_kontrak_tgl AS k_kontrak_tgl','tbl_kegiatan.kd_kegiatan AS k_kode_kegiatan','tbl_akun.kd_akun AS k_kode_akun','e.k_kode_output AS k_kode_output','e.k_eselon_nama AS k_eselon_nama','e.k_satker_nama AS k_satker_nama','e.k_kontrak_nilai AS k_kontrak_nilai','e.k_kontrak_status_review AS k_kontrak_status_review','e.k_kode_ro AS k_kode_ro','e.k_kode_kro AS k_kode_kro'));
			$this->db->from('tbl_kontrak as e');
			$this->db->join('tbl_kegiatan', 'tbl_kegiatan.kd_kegiatan = e.k_kode_kegiatan');
			$this->db->join('tbl_akun', 'tbl_akun.kd_akun = e.k_kode_akun');
			$i = 0;
		
			foreach ($this->column_search as $item) // loop column 
			{
				if(!empty($_POST['search']['value'])) // if datatable send POST for search
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
			
			if(!empty($_POST['order'])) // here order processing
			{
				$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
			} 
			else if(!empty($this->order))
			{
				$order = $this->order;
				$this->db->order_by(key($order), $order[key($order)]);
			}
		}
		
    public function getEmpData()
    {
        $this->getQuery();
        if(!empty($_POST['length']) && $_POST['length'] < 1) {
            $_POST['length']= '10';
        } else {
            $_POST['length']= $_POST['length'];
        }
        
        if(!empty($_POST['start']) && $_POST['start'] > 1) {
        $_POST['start']= $_POST['start'];
        }
        $this->db->limit($_POST['length'], $_POST['start']);
        //print_r($_POST);die;
        $query = $this->db->get();
        return $query->result_array();
    }
	
    public function countFiltered()
    {
        $this->getQuery();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function countAll()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }
	
	function insert($data)
	{
		$this->db->insert($this->table, $data);
	}

	function update($idr, $data)
	{
		$this->db->where($this->idr, $idr);
		$this->db->update($this->table, $data);
	}
	
	function get_by_id($id)
	  {
		$this->db->where($this->id, $id);
		return $this->db->get($this->table)->row();
	  }


    // create new Employee
    public function createEmp() { 
        $data = array(
            'name' => $this->_firstName,
            'last_name' => $this->_lastName,
            'email' => $this->_email,
            'address' => $this->_address,
            'contact_no' => $this->_contactNo,
            'salary' => $this->_salary,
        );
        $this->db->insert('employees', $data);
        return $this->db->insert_id();
    }
    // update Employee
    public function updateEmp() { 
        $data = array(
            'name' => $this->_firstName,
            'last_name' => $this->_lastName,
            'email' => $this->_email,
            'address' => $this->_address,
            'contact_no' => $this->_contactNo,
            'salary' => $this->_salary,
        );
        $this->db->where('id', $this->_empID);
        $this->db->update('employees', $data);
    }
    // for display Employee
    public function getEmp() {        
        $this->db->select(array('e.id', 'e.name as first_name', 'e.last_name', 'e.email', 'e.address', 'e.contact_no', 'e.salary'));
        $this->db->from('employees e');  
        $this->db->where('e.id', $this->_empID);     
        $query = $this->db->get();
       return $query->row_array();
    }

    // delete Employee
    public function deleteEmp() {         
        $this->db->where('id', $this->_empID);
        $this->db->delete('employees');  
    }
		
		function get_all_kegiatan() 
		{
			$this->db->order_by('nama_kegiatan');
			$data = $this->db->get($this->tablek);

			if($data->num_rows() > 0)
			{
			  foreach($data->result_array() as $row)
			  {
				$result[''] = '- Kegiatan';
				$result[$row['kd_kegiatan']] = $row['kd_kegiatan'].' - '.$row['nama_kegiatan'];
			  }
			  return $result;
			}
		}
		
		function get_kegiatan() 
		{
			$this->db->select("kd_kegiatan, nama_kegiatan");
			return $this->db->get($this->tablek)->result(); 
		}
		
		function get_akun() 
		{
			$this->db->select("kd_akun, nama_akun");
			return $this->db->get($this->table5)->result(); 
		}
		
		function get_all_kro() 
		{
			$this->db->order_by('nama_kro');
			$data = $this->db->get($this->table2);

			if($data->num_rows() > 0)
			{
			  foreach($data->result_array() as $row)
			  {
				$result[''] = '- KRO';
				$result[$row['kd_kro']] = $row['kd_kro'].' - '.$row['nama_kro'];
			  }
			  return $result;
			}
		}
		
		function get_all_ro() 
		{
			$this->db->order_by('nama_ro');
			$data = $this->db->get($this->table3);

			if($data->num_rows() > 0)
			{
			  foreach($data->result_array() as $row)
			  {
				$result[''] = '- Rincian Output';
				$result[$row['kd_ro']] = $row['kd_ro'].' - '.$row['nama_ro'];
			  }
			  return $result;
			}
		}
		
		function get_all_komponen() 
		{
			$this->db->order_by('nama_komponen');
			$data = $this->db->get($this->table4);

			if($data->num_rows() > 0)
			{
			  foreach($data->result_array() as $row)
			  {
				$result[''] = '- Pilih Komponen';
				$result[$row['kd_komponen']] = $row['kd_komponen'].' - '.$row['nama_komponen'];
			  }
			  return $result;
			}
		}
		
		function get_all_kdakun() 
		{
			$this->db->order_by('nama_akun');
			$data = $this->db->get($this->table5);

			if($data->num_rows() > 0)
			{
			  foreach($data->result_array() as $row)
			  {
				$result[''] = '- Pilih Akun';
				$result[$row['kd_akun']] = $row['kd_akun'].' - '.$row['nama_akun'];
			  }
			  return $result;
			}
		}
		
		public function list_provinsi()
		{
			$data = $this->db
				->get('wilayah_provinsi')
				->result_array();
			return $data;
		}
				
	}
?>