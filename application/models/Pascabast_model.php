<?php
/**
 * Description of Curd Model: Datatables Add, View, Edit, Delete, Export and Custom Filter Using Codeigniter with Ajax
 *
 * @author TechArise Team
 *
 * @email  info@techarise.com
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pascabast_model extends CI_Model {

    private $_empID;
    private $_first_name;
    private $_provinsi;
    private $_kabupaten;
    private $_kecamatan;
    private $_desa;
    private $_alamat;
    private $_target_output;
    private $_awal_penggunaan;
    private $_jadwal_panen;
    private $_jumlah_satuan;
    private $_satuan;
    private $_perkembangan;
    private $_permasalahan;
    private $_penyelesaian;
    private $_no_handphone;

    public function setEmpID($empID) {
        $this->_empID = $empID;
    }
    public function setFirstName($nama) {
        $this->_first_name = $nama;
    }
    public function setprovinsi($provinsi) {
        $this->_provinsi = $provinsi;
    }    
    public function setkabupaten($kabupaten) {
        $this->_kabupaten = $kabupaten;
    }
    public function setkecamatan($kecamatan) {
        $this->_kecamatan = $kecamatan;
    }
    public function setdesa($desa) {
        $this->_desa = $desa;
    }
    public function setalamat($alamat) {
        $this->_alamat = $alamat;
    }
    public function setnohandphone($no_handphone) {
        $this->_no_handphone = $no_handphone;
    }    
    public function settarget_output($target_output) {
        $this->_target_output = $target_output;
    }
    public function setawal_penggunaan($awal_penggunaan) {
        $this->_awal_penggunaan = $awal_penggunaan;
    }
    public function setjadwal_panen($jadwal_panen) {
        $this->_jadwal_panen = $jadwal_panen;
    }
    public function setjumlah_satuan($jumlah_satuan) {
        $this->_jumlah_satuan = $jumlah_satuan;
    }
	
    public function setsatuan($satuan) {
        $this->_satuan = $satuan;
    }
    public function setperkembangan($perkembangan) {
        $this->_perkembangan = $perkembangan;
    }
    public function setpermasalahan($permasalahan) {
        $this->_permasalahan = $permasalahan;
    }
    public function setpenyelesaian($penyelesaian) {
        $this->_penyelesaian = $penyelesaian;
    }
    // get Employee List
    var $table = 'tbl_pasca';
    var $column_order = array(null, 'concat_ws(" ", e.nama)','e.provinsi','e.alamat','e.desa');
    var $column_search = array('concat_ws(" ", e.nama)','e.provinsi','e.alamat','e.desa');
    var $order = array('id' => 'DESC');

    private function getQuery()
    {

        //add custom filter here
        if(!empty($this->input->post('nama')))
        {
            $this->db->like('concat_ws(" ", e.nama)', $this->input->post('nama'), 'both');
        }
        if(!empty($this->input->post('provinsi')))
        {
            $this->db->like('e.provinsi', $this->input->post('provinsi'), 'both');
        }
        if(!empty($this->input->post('desa')))
        {
            $this->db->like('e.desa', $this->input->post('desa'), 'both');
        }
        if(!empty($this->input->post('alamat')))
        {
            $this->db->like('e.alamat', $this->input->post('alamat'), 'both');
        }

        $this->db->select(array('e.id', 'concat_ws(" ", e.name) as nama','e.provinsi','e.kabupaten','e.kecamatan','e.desa','e.desa','e.alamat','e.target_output'));

        $this->db->from('tbl_pasca as e');
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


    // create new Employee
    public function createEmp() { 
        $data = array(
            'nama' => $this->_firstName,
            'provinsi' => $this->_provinsi,
            'kabupaten' => $this->_kabupaten,
            'kecamatan' => $this->_kecamatana,
            'desa' => $this->_desa,
            'alamat' => $this->_alamat,
            'target_output' => $this->_target_output,
            'awal_penggunaan' => $this->_awal_penggunaan,
            'no_handphone' => $this->_no_handphone,
            'jadwal_panen' => $this->_jadwal_panen,
            'jumlah_satuan' => $this->_jumlah_satuan,
            'satuan' => $this->_satuan,
            'perkembangan' => $this->_perkembangan,
            'permasalahan' => $this->_permasalahan,
            'penyelesaian' => $this->_penyelesaian,
        );
        $this->db->insert('tbl_pasca', $data);
        return $this->db->insert_id();
    }
    // update Employee
    public function updateEmp() { 
        $data = array(
            'nama' => $this->_firstName,
            'provinsi' => $this->_provinsi,
            'kabupaten' => $this->_kabupaten,
            'kecamatan' => $this->_kecamatana,
            'desa' => $this->_desa,
            'alamat' => $this->_alamat,
            'target_output' => $this->_target_output,
            'awal_penggunaan' => $this->_awal_penggunaan,
            'no_handphone' => $this->_no_handphone,
            'jadwal_panen' => $this->_jadwal_panen,
            'jumlah_satuan' => $this->_jumlah_satuan,
            'satuan' => $this->_satuan,
            'perkembangan' => $this->_perkembangan,
            'permasalahan' => $this->_permasalahan,
            'penyelesaian' => $this->_penyelesaian,
        );
        $this->db->where('id', $this->_empID);
        $this->db->update('tbl_pasca', $data);
    }
    // for display Employee
    public function getEmp() {        
        $this->db->select(array('e.id', 'e.nama as first_name', 'e.provinsi', 'e.kabupaten', 'e.kecamatan', 'e.desa', 'e.alamat', 'e.target_output'));
        $this->db->from('tbl_pasca e');  
        $this->db->where('e.id', $this->_empID);     
        $query = $this->db->get();
       return $query->row_array();
    }

    // delete Employee
    public function deleteEmp() {         
        $this->db->where('id', $this->_empID);
        $this->db->delete('tbl_pasca');  
    }

    // email validation
    public function validateEmail($email)
    {
        return preg_match('/^[^\@]+@.*.[a-z]{2,15}$/i', $email)?TRUE:FALSE;
    }

    // mobile validation
    public function validateMobile($mobile)
    {
        return preg_match('/^[0-9]{10}+$/', $mobile)?TRUE:FALSE;
    }
    
}