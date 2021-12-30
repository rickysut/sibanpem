<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor_model extends CI_Model{

  public $table = 'tbl_vendor';
  public $id    = 'id';
  public $order = 'DESC';

  function get_all_combobox()
  {
    $this->db->order_by('nama_vendor');
    $data = $this->db->get($this->table);

    if($data->num_rows() > 0)
    {
      foreach($data->result_array() as $row)
      {
        $result[''] = '- Please Choose Users';
        $result[$row['no_npwp'].'|'.$row['nama_vendor']] = $row['nama_vendor'];
      }
      return $result;
    }
  }

  function get_all_deleted()
  {
    $this->db->join('tbl_kontrak', 'tbl_vendor.no_npwp = tbl_kontrak.k_vendor_npwp');
    $this->db->where('is_delete', '1');
    $this->db->order_by('nama_vendor', $this->order);
    return $this->db->get($this->table)->result();
  }

  function get_by_id($id)
  {
    $this->db->where($this->id, $id);
    return $this->db->get($this->table)->row();
  }

  function total_rows()
  {
    return $this->db->get($this->table)->num_rows();
  }

  function insert($data)
  {
    $this->db->insert($this->table, $data);
  }

  function update($id,$data)
  {
    $this->db->where($this->id, $id);
    $this->db->update($this->table, $data);
  }

  function soft_delete($id,$data)
  {
    $this->db->where($this->id, $id);
    $this->db->update($this->table, $data);
  }

  function delete($id)
  {
    $this->db->where($this->id, $id);
    $this->db->delete($this->table);
  }

}
