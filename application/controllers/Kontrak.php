<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Kontrak extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Kontrak_model', 'emp');
		$this->load->model('m_wilayah');
		$this->load->model('Kontrak_model');
		$this->load->model('Vendor_model');
		$this->load->model('Barang_model');
		$this->load->model('Penyaluran_model', 'penyaluran');
    }
    // Employee list method
    public function index() {
        $data['page'] = 'emp-list';
        $data['page_title'] = 'Entry Penyaluran';   
		$this->load->view('back/sibanpem/kontrak/index', $data);
    }
	// methode create
	function create_barang()
	{
		is_login();
		is_create();
		$this->data['action']     = 'kontrak/create_action_barang';
		$this->data['page_title'] = 'Bantuan Barang'; 
		$this->data['get_all_combobox_provinsi'] = $this->m_wilayah->get_all_provinsi();
		$this->data['get_all_kegiatan'] = $this->Kontrak_model->get_all_kegiatan(); 
		$this->data['get_all_kro'] = $this->Kontrak_model->get_all_kro(); 
		$this->data['get_all_ro'] = $this->Kontrak_model->get_all_ro(); 
		$this->data['get_all_komponen'] = $this->Kontrak_model->get_all_komponen(); 
		$this->data['get_all_vendor'] = $this->Vendor_model->get_all_combobox(); 
		$this->data['get_all_akun'] = $this->Kontrak_model->get_all_kdakun();  
		$this->data['dataBarang'] = $this->Barang_model->get_all_barang();  
		$this->data['provinsi'] = ['name' => 'provinsi','id' => 'provinsi','class' => 'form-control','required' => '','value' => $this->form_validation->set_value('provinsi'),];
		$this->data['kabupaten'] = ['name' => 'kabupaten','id' => 'kabupaten','class' => 'form-control','autocomplete'  => 'off','required' => '','value' => $this->form_validation->set_value('kabupaten'),];
		$this->data['kecamatan'] = ['name' => 'kecamatan','id' => 'kecamatan','class' => 'form-control','autocomplete'  => 'off','required' => '','value' => $this->form_validation->set_value('kecamatan'),];
		$this->data['desa'] = ['name' => 'desa','id' => 'desa`','class' => 'form-control','autocomplete'  => 'off','value' => $this->form_validation->set_value('desa'),];
		$this->data['idkontrak'] = ['name'=> 'idkontrak','id' => 'idkontrak','class' => 'form-control','autocomplete' => 'off','value' => $this->form_validation->set_value('idkontrak'),];
		//$this->data['k_tipe'] = 'Barang';
		$this->data['k_tipe'] = ['name' => 'k_tipe','id' => 'k_tipe','class' => 'form-control','autocomplete' => 'off','value' => $this->form_validation->set_value('k_tipe'),];
		$this->data['k_kontrak_nomor'] = ['name' => 'k_kontrak_nomor','id' => 'k_kontrak_nomor','class' => 'form-control','autocomplete'  => 'off','value' => $this->form_validation->set_value('k_kontrak_nomor'),];
		$this->data['k_kontrak_tgl'] = ['type'=>'date','name' => 'k_kontrak_tgl','id' => 'k_kontrak_tgl','class' => 'form-control','autocomplete' => 'off','value' => $this->form_validation->set_value('k_kontrak_tgl'),];
		$this->data['k_kontrak_nilai'] = ['name' => 'k_kontrak_nilai','id' => 'k_kontrak_nilai','class' => 'form-control','autocomplete' => 'off','value' => $this->form_validation->set_value('k_kontrak_nilai'),];
		$this->data['k_kontrak_cpcl'] = ['name' => 'k_kontrak_cpcl','id' => 'k_kontrak_cpcl','class' => 'form-control','autocomplete' => 'off','value' => $this->form_validation->set_value('k_kontrak_cpcl'),];
		$this->data['k_kontrak_dokumen'] = ['name' => 'k_kontrak_dokumen','id' => 'k_kontrak_dokumen','class' => 'form-control','autocomplete'  => 'off','value' => $this->form_validation->set_value('k_kontrak_dokumen'),];
		$this->data['k_dipa'] = ['name'=> 'k_dipa','id' => 'k_dipa','class' => 'form-control','autocomplete' => 'off','value' => $this->form_validation->set_value('k_dipa'),];
		$this->data['k_dipa_tgl'] = ['type'=>'date','name' => 'k_dipa_tgl','id' => 'k_dipa_tgl','class' => 'form-control','autocomplete' => 'off','value' => $this->form_validation->set_value('k_dipa_tgl'),];
		$this->data['k_kode_kegiatan'] = ['name' => 'k_kode_kegiatan','id' => 'k_kode_kegiatan','class' => 'form-control','autocomplete'  => 'off','value' => $this->form_validation->set_value('k_kode_kegiatan'),];
		$this->data['k_kode_kro'] = ['name' => 'k_kode_kro','id' => 'k_kode_kro','class' => 'form-control','autocomplete'  => 'off','value' => $this->form_validation->set_value('k_kode_kro'),];
		$this->data['k_kode_akun'] = ['name' => 'k_kode_akun','id' => 'k_kode_akun','class' => 'form-control','autocomplete' => 'off','value' => $this->form_validation->set_value('k_kode_akun'),];
		$this->data['k_kode_output'] = ['name' => 'k_kode_output','id' => 'k_kode_output','class' => 'form-control','autocomplete' => 'off','value' => $this->form_validation->set_value('k_kode_output'),];
		$this->data['k_kode_ro'] = ['name' => 'k_kode_ro','id' => 'k_kode_ro','class' => 'form-control','autocomplete'  => 'off','value' => $this->form_validation->set_value('k_kode_ro'),];
		$this->data['k_vendor_npwp'] = ['name'=> 'k_vendor_npwp','id' => 'k_vendor_npwp','class' => 'form-control','autocomplete' => 'off','value' => $this->form_validation->set_value('k_vendor_npwp'),];
		$this->data['k_vendor_nama'] = ['name' => 'k_vendor_nama','id' => 'k_vendor_nama','class' => 'form-control','autocomplete' => 'off','value' => $this->form_validation->set_value('k_vendor_nama'),];
		$this->data['k_eselon_kode'] = ['name' => 'k_eselon_kode','id' => 'k_eselon_kode','class' => 'form-control','autocomplete'  => 'off','value' => $this->form_validation->set_value('k_eselon_kode'),];
		$this->data['k_eselon_nama'] = ['name' => 'k_eselon_nama','id' => 'k_eselon_nama','class' => 'form-control','autocomplete' => 'off','value' => $this->form_validation->set_value('k_eselon_nama'),];
		$this->data['k_satker_kode'] = ['name' => 'k_satker_kode','id' => 'k_satker_kode','class' => 'form-control','autocomplete' => 'off','value' => $this->form_validation->set_value('k_satker_kode'),];
		$this->data['k_satker_nama'] = ['name' => 'k_satker_nama','id' => 'k_satker_nama','class' => 'form-control','autocomplete'  => 'off','value' => $this->form_validation->set_value('k_satker_nama'),];
		$this->data['titik_bagi'] = ['name'=> 'titik_bagi','id' => 'titik_bagi','class' => 'form-control','autocomplete' => 'off','value' => $this->form_validation->set_value('titik_bagi'),];
		$this->data['file_cpcl'] = ['name' => 'file_cpcl','id' => 'file_cpcl','class' => 'form-control','autocomplete' => 'off','value' => $this->form_validation->set_value('file_cpcl'),];
		$this->data['is_ongkir'] = ['name' => 'is_ongkir','id' => 'is_ongkir','class' => 'form-control','autocomplete'  => 'off','value' => $this->form_validation->set_value('is_ongkir'),];
		$this->data['is_swakelola'] = ['name' => 'is_swakelola','id' => 'is_swakelola','class' => 'form-control','autocomplete' => 'off','value' => $this->form_validation->set_value('is_swakelola'),];
		$this->data['is_langsung'] = ['name' => 'is_langsung','id' => 'is_langsung','class' => 'form-control','autocomplete' => 'off','value' => $this->form_validation->set_value('is_langsung'),];
	  
		$this->load->view('back/sibanpem/kontrak/add_kontrak_barang', $this->data);
	}

  function create_action_barang()
  {
		$this->form_validation->set_rules('k_kontrak_nomor', 'Nomor Kontrak Harus Diisi', 'trim|required');
		$this->form_validation->set_rules('k_dipa', 'Dipa Harus Diisi', 'required');

		$this->form_validation->set_message('required', '{field} wajib diisi');

		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

		if($this->form_validation->run() === FALSE)
		{
			$this->create_barang();
		}
		else
		{
			$data = array(
			'idkontrak'			=> $this->input->post('idkontrak'),
            'k_tipe'			=> $this->input->post('k_tipe'),
            'k_dipa_tgl' 		=> date('Y-m-d',strtotime($this->input->post('k_dipa_tgl'))),
            'k_kontrak_tgl' 	=> date('Y-m-d',strtotime($this->input->post('k_kontrak_tgl'))),
			'k_kontrak_cpcl'   => $this->input->post('k_kontrak_cpcl'),
            'k_kontrak_nomor'	=> $this->input->post('k_kontrak_nomor'),
			'k_kontrak_nilai'   => $this->input->post('k_kontrak_nilai'),
			'k_dipa'      		=> $this->input->post('k_dipa'),
            'k_kode_kegiatan'	=> $this->input->post('k_kode_kegiatan'),
			'k_kode_akun'   	=> $this->input->post('k_kode_akun'),
			'k_kode_output'     => $this->input->post('k_kode_output'),
            'k_kode_ro'			=> $this->input->post('k_kode_ro'),
			'k_vendor_npwp'   	=> $this->input->post('k_vendor_npwp'),
			'k_vendor_nama'     => $this->input->post('k_vendor_nama'),
            'k_kode_kegiatan'	=> $this->input->post('k_kode_kegiatan'),
			'k_eselon_kode'   	=> $this->input->post('k_eselon_kode'),
			'k_eselon_nama'     => $this->input->post('k_eselon_nama'),
            'k_satker_kode'		=> $this->input->post('k_satker_kode'),
			'k_satker_nama'   	=> $this->input->post('k_satker_nama'),
			'titik_bagi'     	=> $this->input->post('titik_bagi'),
            'is_ongkir'			=> $this->input->post('is_ongkir'),
			'is_swakelola'   	=> $this->input->post('is_swakelola'),
			'is_langsung'     	=> $this->input->post('is_langsung'),
			'k_kode_kro'     	=> $this->input->post('k_kode_kro'),
			);
			//print_r($data);
			$this->Kontrak_model->insert($data);

			$this->db->select_max('id');
			$result = $this->db->get('tbl_kontrak')->row_array();

			$this->session->set_flashdata('message', '<div class="alert alert-success">Data saved succesfully</div>');
			redirect('kontrak');
		}
	}

  function update_barang($idc)
  {
    is_login();
    is_update();

    $this->data['user']     = $this->Kontrak_model->get_by_id($idc);
	$this->data['get_all_combobox_provinsi'] = $this->m_wilayah->get_all_provinsi();
    if($this->data['user'])
    {
		$this->data['action']     = 'kontrak/update_action_barang';
		$this->data['provinsi'] = ['name' => 'provinsi','id' => 'provinsi','class' => 'form-control','required' => '','value' => $this->form_validation->set_value('provinsi'),];
		$this->data['kabupaten'] = ['name' => 'kabupaten','id' => 'kabupaten','class' => 'form-control','autocomplete'  => 'off','required' => '','value' => $this->form_validation->set_value('kabupaten'),];
		$this->data['kecamatan'] = ['name' => 'kecamatan','id' => 'kecamatan','class' => 'form-control','autocomplete'  => 'off','required' => '','value' => $this->form_validation->set_value('kecamatan'),];
		$this->data['desa'] = ['name' => 'desa','id' => 'desa`','class' => 'form-control','autocomplete'  => 'off','value' => $this->form_validation->set_value('desa'),];
		$this->data['idkontrak'] = ['name'=> 'idkontrak','id' => 'idkontrak','class' => 'form-control','autocomplete' => 'off',];
		$this->data['k_tipe'] = ['name' => 'k_tipe','id' => 'k_tipe','class' => 'form-control','autocomplete' => 'off',];
		$this->data['k_kontrak_nomor'] = ['name' => 'k_kontrak_nomor','id' => 'k_kontrak_nomor','class' => 'form-control','autocomplete'  => 'off',];
		$this->data['k_kontrak_tgl'] = ['name' => 'k_kontrak_tgl','id' => 'k_kontrak_tgl','class' => 'form-control','autocomplete' => 'off',];
		$this->data['k_kontrak_cpcl'] = ['name' => 'k_kontrak_cpcl','id' => 'k_kontrak_cpcl','class' => 'form-control','autocomplete' => 'off',];
		$this->data['k_kontrak_nilai'] = ['name' => 'k_kontrak_nilai','id' => 'k_kontrak_nilai','class' => 'form-control','autocomplete' => 'off',];
		$this->data['k_kontrak_dokumen'] = ['name' => 'k_kontrak_dokumen','id' => 'k_kontrak_dokumen','class' => 'form-control','autocomplete'  => 'off',];
		$this->data['k_dipa'] = ['name'=> 'k_dipa','id' => 'k_dipa','class' => 'form-control','autocomplete' => 'off',];
		$this->data['k_dipa_tgl'] = ['name' => 'k_dipa_tgl','id' => 'k_dipa_tgl','class' => 'form-control','autocomplete' => 'off',];
		$this->data['k_kode_kegiatan'] = ['name' => 'k_kode_kegiatan','id' => 'k_kode_kegiatan','class' => 'form-control','autocomplete'  => 'off',];
		$this->data['k_kode_kro'] = ['name' => 'k_kode_kro','id' => 'k_kode_kro','class' => 'form-control','autocomplete'  => 'off','value' => $this->form_validation->set_value('k_kode_kro'),];
		$this->data['k_kode_akun'] = ['name' => 'k_kode_akun','id' => 'k_kode_akun','class' => 'form-control','autocomplete' => 'off',];
		$this->data['k_kode_output'] = ['name' => 'k_kode_output','id' => 'k_kode_output','class' => 'form-control','autocomplete' => 'off',];
		$this->data['k_kode_ro'] = ['name' => 'k_kode_ro','id' => 'k_kode_ro','class' => 'form-control','autocomplete'  => 'off',];
		$this->data['k_vendor_npwp'] = ['name'=> 'k_vendor_npwp','id' => 'k_vendor_npwp','class' => 'form-control','autocomplete' => 'off',];
		$this->data['k_vendor_nama'] = ['name' => 'k_vendor_nama','id' => 'k_vendor_nama','class' => 'form-control','autocomplete' => 'off',];
		$this->data['k_eselon_kode'] = ['name' => 'k_eselon_kode','id' => 'k_eselon_kode','class' => 'form-control','autocomplete'  => 'off',];
		$this->data['k_eselon_nama'] = ['name' => 'k_eselon_nama','id' => 'k_eselon_nama','class' => 'form-control','autocomplete' => 'off',];
		$this->data['k_satker_kode'] = ['name' => 'k_satker_kode','id' => 'k_satker_kode','class' => 'form-control','autocomplete' => 'off',];
		$this->data['k_satker_nama'] = ['name' => 'k_satker_nama','id' => 'k_satker_nama','class' => 'form-control','autocomplete'  => 'off',];
		$this->data['titik_bagi'] = ['name'=> 'titik_bagi','id' => 'titik_bagi','class' => 'form-control','autocomplete' => 'off',];
		$this->data['file_cpcl'] = ['name' => 'file_cpcl','id' => 'file_cpcl','class' => 'form-control','autocomplete' => 'off',];
		$this->data['is_ongkir'] = ['name' => 'is_ongkir','id' => 'is_ongkir','class' => 'form-control','autocomplete'  => 'off',];
		$this->data['is_swakelola'] = ['name' => 'is_swakelola','id' => 'is_swakelola','class' => 'form-control','autocomplete' => 'off',];
		$this->data['is_langsung'] = ['name' => 'is_langsung','id' => 'is_langsung','class' => 'form-control','autocomplete' => 'off',];
	  
		$this->load->view('back/sibanpem/edit_kontrak_barang', $this->data);
    }
    else
    {
      $this->session->set_flashdata('message', '<div class="alert alert-danger">User not found</div>');
      redirect('riph');
    }

  }

  function update_action_barang()
  {
    $this->form_validation->set_rules('tgl_max_lunas', 'Tanggal Maksimal Pelunasan', 'trim|required');
	$this->form_validation->set_rules('nama_perusahaan', 'Nama Perusahaan', 'required');
	$this->form_validation->set_rules('volume_riph', 'Volume Pengajuan', 'required');

    $this->form_validation->set_message('required', '{field} wajib diisi');

    $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

    if($this->form_validation->run() === FALSE)
    {
      $this->update($this->input->post('id_riph'));
    }
    else
    {
        $data = array(
			'idkontrak'			=> $this->input->post('idkontrak'),
            'k_tipe'			=> $this->input->post('k_tipe'),
            'k_dipa_tgl' 		=> date('Y-m-d',strtotime($this->input->post('k_dipa_tgl'))),
            'k_kontrak_tgl' 	=> date('Y-m-d',strtotime($this->input->post('k_kontrak_tgl'))),
            'k_kontrak_nomor'	=> $this->input->post('k_kontrak_nomor'),
			'k_kontrak_nilai'   => $this->input->post('k_kontrak_nilai'),
			'k_dipa'      		=> $this->input->post('k_dipa'),
            'k_kode_kegiatan'	=> $this->input->post('k_kode_kegiatan'),
			'k_kode_akun'   	=> $this->input->post('k_kode_akun'),
			'k_kode_output'     => $this->input->post('k_kode_output'),
            'k_kode_ro'			=> $this->input->post('k_kode_ro'),
			'k_vendor_npwp'   	=> $this->input->post('k_vendor_npwp'),
			'k_vendor_nama'     => $this->input->post('k_vendor_nama'),
            'k_kode_kegiatan'	=> $this->input->post('k_kode_kegiatan'),
			'k_eselon_kode'   	=> $this->input->post('k_eselon_kode'),
			'k_eselon_nama'     => $this->input->post('k_eselon_nama'),
            'k_satker_kode'		=> $this->input->post('k_satker_kode'),
			'k_satker_nama'   	=> $this->input->post('k_satker_nama'),
			'titik_bagi'     	=> $this->input->post('titik_bagi'),
            'is_ongkir'			=> $this->input->post('is_ongkir'),
			'is_swakelola'   	=> $this->input->post('is_swakelola'),
			'is_langsung'     	=> $this->input->post('is_langsung'),
			'k_kode_kro'     	=> $this->input->post('k_kode_kro'),
        );

        $this->Kontrak_model->update($this->input->post('id'),$data);

        $this->write_log();

        $this->session->set_flashdata('message', '<div class="alert alert-success">Data update succesfully</div>');
        redirect('kontrak');
      
    }
  }
  
	// methode create Uang
	function create_uang()
	{
		is_login();
		is_create();
		$this->data['action']     = 'create_action_uang';
		$this->data['page_title'] = 'Bantuan Uang'; 
		$this->data['get_all_combobox_provinsi'] = $this->m_wilayah->get_all_provinsi();
		$this->data['get_all_kegiatan'] = $this->Kontrak_model->get_all_kegiatan(); 
		$this->data['get_all_kro'] = $this->Kontrak_model->get_all_kro(); 
		$this->data['get_all_ro'] = $this->Kontrak_model->get_all_ro(); 
		$this->data['get_all_komponen'] = $this->Kontrak_model->get_all_komponen(); 
		$this->data['get_all_vendor'] = $this->Vendor_model->get_all_combobox(); 
		$this->data['get_all_akun'] = $this->Kontrak_model->get_all_kdakun();  
		$this->data['dataBarang'] = $this->Barang_model->get_all_barang();  
		$this->data['provinsi'] = ['name' => 'provinsi','id' => 'provinsi','class' => 'form-control','required' => '','value' => $this->form_validation->set_value('provinsi'),];
		$this->data['kabupaten'] = ['name' => 'kabupaten','id' => 'kabupaten','class' => 'form-control','autocomplete'  => 'off','required' => '','value' => $this->form_validation->set_value('kabupaten'),];
		$this->data['kecamatan'] = ['name' => 'kecamatan','id' => 'kecamatan','class' => 'form-control','autocomplete'  => 'off','required' => '','value' => $this->form_validation->set_value('kecamatan'),];
		$this->data['desa'] = ['name' => 'desa','id' => 'desa`','class' => 'form-control','autocomplete'  => 'off','value' => $this->form_validation->set_value('desa'),];
		$this->data['idkontrak'] = ['name'=> 'idkontrak','id' => 'idkontrak','class' => 'form-control','autocomplete' => 'off','value' => $this->form_validation->set_value('idkontrak'),];
		$this->data['k_tipe'] = ['name' => 'k_tipe','id' => 'k_tipe','class' => 'form-control','autocomplete' => 'off','value' => $this->form_validation->set_value('k_tipe'),];
		$this->data['k_kontrak_nomor'] = ['name' => 'k_kontrak_nomor','id' => 'k_kontrak_nomor','class' => 'form-control','autocomplete'  => 'off','value' => $this->form_validation->set_value('k_kontrak_nomor'),];
		$this->data['k_kontrak_tgl'] = ['name' => 'k_kontrak_tgl','id' => 'k_kontrak_tgl','class' => 'form-control','autocomplete' => 'off','value' => $this->form_validation->set_value('k_kontrak_tgl'),];
		$this->data['k_kontrak_nilai'] = ['name' => 'k_kontrak_nilai','id' => 'k_kontrak_nilai','class' => 'form-control','autocomplete' => 'off','value' => $this->form_validation->set_value('k_kontrak_nilai'),];
		$this->data['k_kontrak_dokumen'] = ['name' => 'k_kontrak_dokumen','id' => 'k_kontrak_dokumen','class' => 'form-control','autocomplete'  => 'off','value' => $this->form_validation->set_value('k_kontrak_dokumen'),];
		$this->data['k_dipa'] = ['name'=> 'k_dipa','id' => 'k_dipa','class' => 'form-control','autocomplete' => 'off','value' => $this->form_validation->set_value('k_dipa'),];
		$this->data['k_dipa_tgl'] = ['name' => 'k_dipa_tgl','id' => 'k_dipa_tgl','class' => 'form-control','autocomplete' => 'off','value' => $this->form_validation->set_value('k_dipa_tgl'),];
		$this->data['k_kode_kegiatan'] = ['name' => 'k_kode_kegiatan','id' => 'k_kode_kegiatan','class' => 'form-control','autocomplete'  => 'off','value' => $this->form_validation->set_value('k_kode_kegiatan'),];
		$this->data['k_kode_akun'] = ['name' => 'k_kode_akun','id' => 'k_kode_akun','class' => 'form-control','autocomplete' => 'off','value' => $this->form_validation->set_value('k_kode_akun'),];
		$this->data['k_kode_output'] = ['name' => 'k_kode_output','id' => 'k_kode_output','class' => 'form-control','autocomplete' => 'off','value' => $this->form_validation->set_value('k_kode_output'),];
		$this->data['k_kode_kro'] = ['name' => 'k_kode_kro','id' => 'k_kode_kro','class' => 'form-control','autocomplete'  => 'off','value' => $this->form_validation->set_value('k_kode_kro'),];
		$this->data['k_kode_ro'] = ['name' => 'k_kode_ro','id' => 'k_kode_ro','class' => 'form-control','autocomplete'  => 'off','value' => $this->form_validation->set_value('k_kode_ro'),];
		$this->data['k_vendor_npwp'] = ['name'=> 'k_vendor_npwp','id' => 'k_vendor_npwp','class' => 'form-control','autocomplete' => 'off','value' => $this->form_validation->set_value('k_vendor_npwp'),];
		$this->data['k_vendor_nama'] = ['name' => 'k_vendor_nama','id' => 'k_vendor_nama','class' => 'form-control','autocomplete' => 'off','value' => $this->form_validation->set_value('k_vendor_nama'),];
		$this->data['k_eselon_kode'] = ['name' => 'k_eselon_kode','id' => 'k_eselon_kode','class' => 'form-control','autocomplete'  => 'off','value' => $this->form_validation->set_value('k_eselon_kode'),];
		$this->data['k_eselon_nama'] = ['name' => 'k_eselon_nama','id' => 'k_eselon_nama','class' => 'form-control','autocomplete' => 'off','value' => $this->form_validation->set_value('k_eselon_nama'),];
		$this->data['k_satker_kode'] = ['name' => 'k_satker_kode','id' => 'k_satker_kode','class' => 'form-control','autocomplete' => 'off','value' => $this->form_validation->set_value('k_satker_kode'),];
		$this->data['k_satker_nama'] = ['name' => 'k_satker_nama','id' => 'k_satker_nama','class' => 'form-control','autocomplete'  => 'off','value' => $this->form_validation->set_value('k_satker_nama'),];
		$this->data['titik_bagi'] = ['name'=> 'titik_bagi','id' => 'titik_bagi','class' => 'form-control','autocomplete' => 'off','value' => $this->form_validation->set_value('titik_bagi'),];
		$this->data['file_cpcl'] = ['name' => 'file_cpcl','id' => 'file_cpcl','class' => 'form-control','autocomplete' => 'off','value' => $this->form_validation->set_value('file_cpcl'),];
		$this->data['is_ongkir'] = ['name' => 'is_ongkir','id' => 'is_ongkir','class' => 'form-control','autocomplete'  => 'off','value' => $this->form_validation->set_value('is_ongkir'),];
		$this->data['is_swakelola'] = ['name' => 'is_swakelola','id' => 'is_swakelola','class' => 'form-control','autocomplete' => 'off','value' => $this->form_validation->set_value('is_swakelola'),];
		$this->data['is_langsung'] = ['name' => 'is_langsung','id' => 'is_langsung','class' => 'form-control','autocomplete' => 'off','value' => $this->form_validation->set_value('is_langsung'),];
	  
		$this->load->view('back/sibanpem/kontrak/add_kontrak_uang', $this->data);
	}

  function create_action_uang()
  {
		$this->form_validation->set_rules('k_kontrak_nomor', 'Nomor Kontrak Harus Diisi', 'trim|required');
		$this->form_validation->set_rules('k_dipa', 'Dipa Harus Diisi', 'required');

		$this->form_validation->set_message('required', '{field} wajib diisi');

		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

		if($this->form_validation->run() === FALSE)
		{
			$this->create_uang();
		}
		else
		{
			$data = array(
			'idkontrak'			=> $this->input->post('idkontrak'),
            'k_tipe'			=> $this->input->post('k_tipe'),
            'k_dipa_tgl' 		=> date('Y-m-d',strtotime($this->input->post('k_dipa_tgl'))),
            'k_kontrak_tgl' 	=> date('Y-m-d',strtotime($this->input->post('k_kontrak_tgl'))),
            'k_kontrak_nomor'	=> $this->input->post('k_kontrak_nomor'),
			'k_kontrak_nilai'   => $this->input->post('k_kontrak_nilai'),
			'k_dipa'      		=> $this->input->post('k_dipa'),
            'k_kode_kegiatan'	=> $this->input->post('k_kode_kegiatan'),
			'k_kode_akun'   	=> $this->input->post('k_kode_akun'),
			'k_kode_output'     => $this->input->post('k_kode_output'),
            'k_kode_ro'			=> $this->input->post('k_kode_ro'),
			'k_vendor_npwp'   	=> $this->input->post('k_vendor_npwp'),
			'k_vendor_nama'     => $this->input->post('k_vendor_nama'),
            'k_kode_kegiatan'	=> $this->input->post('k_kode_kegiatan'),
			'k_eselon_kode'   	=> $this->input->post('k_eselon_kode'),
			'k_eselon_nama'     => $this->input->post('k_eselon_nama'),
            'k_satker_kode'		=> $this->input->post('k_satker_kode'),
			'k_satker_nama'   	=> $this->input->post('k_satker_nama'),
			'titik_bagi'     	=> $this->input->post('titik_bagi'),
            'is_ongkir'			=> $this->input->post('is_ongkir'),
			'is_swakelola'   	=> $this->input->post('is_swakelola'),
			'is_langsung'     	=> $this->input->post('is_langsung'),
			'k_kode_kro'     	=> $this->input->post('k_kode_kro'),
			);

			$this->Kontrak_model->insert($data);

			$this->db->select_max('id');
			$result = $this->db->get('tbl_kontrak')->row_array();

			$this->session->set_flashdata('message', '<div class="alert alert-success">Data saved succesfully</div>');
			redirect('kontrak');
		}
	}

  function update_uang($idc)
  {
    is_login();
    is_update();

    $this->data['user']     = $this->Kontrak_model->get_by_id($idc);
	$this->data['get_all_combobox_provinsi'] = $this->m_wilayah->get_all_provinsi();
    if($this->data['user'])
    {
		$this->data['action']     = 'kontrak/update_action_uang';
		$this->data['idkontrak'] = ['name'=> 'idkontrak','id' => 'idkontrak','class' => 'form-control','autocomplete' => 'off',];
		$this->data['k_tipe'] = ['name' => 'k_tipe','id' => 'k_tipe','class' => 'form-control','autocomplete' => 'off',];
		$this->data['k_kontrak_nomor'] = ['name' => 'k_kontrak_nomor','id' => 'k_kontrak_nomor','class' => 'form-control','autocomplete'  => 'off',];
		$this->data['k_kontrak_tgl'] = ['name' => 'k_kontrak_tgl','id' => 'k_kontrak_tgl','class' => 'form-control','autocomplete' => 'off',];
		$this->data['k_kontrak_nilai'] = ['name' => 'k_kontrak_nilai','id' => 'k_kontrak_nilai','class' => 'form-control','autocomplete' => 'off',];
		$this->data['k_kontrak_dokumen'] = ['name' => 'k_kontrak_dokumen','id' => 'k_kontrak_dokumen','class' => 'form-control','autocomplete'  => 'off',];
		$this->data['k_dipa'] = ['name'=> 'k_dipa','id' => 'k_dipa','class' => 'form-control','autocomplete' => 'off',];
		$this->data['k_dipa_tgl'] = ['name' => 'k_dipa_tgl','id' => 'k_dipa_tgl','class' => 'form-control','autocomplete' => 'off',];
		$this->data['k_kode_kegiatan'] = ['name' => 'k_kode_kegiatan','id' => 'k_kode_kegiatan','class' => 'form-control','autocomplete'  => 'off',];
		$this->data['k_kode_akun'] = ['name' => 'k_kode_akun','id' => 'k_kode_akun','class' => 'form-control','autocomplete' => 'off',];
		$this->data['k_kode_output'] = ['name' => 'k_kode_output','id' => 'k_kode_output','class' => 'form-control','autocomplete' => 'off',];
		$this->data['k_kode_kro'] = ['name' => 'k_kode_kro','id' => 'k_kode_kro','class' => 'form-control','autocomplete'  => 'off',];
		$this->data['k_kode_ro'] = ['name' => 'k_kode_ro','id' => 'k_kode_ro','class' => 'form-control','autocomplete'  => 'off',];
		$this->data['k_vendor_npwp'] = ['name'=> 'k_vendor_npwp','id' => 'k_vendor_npwp','class' => 'form-control','autocomplete' => 'off',];
		$this->data['k_vendor_nama'] = ['name' => 'k_vendor_nama','id' => 'k_vendor_nama','class' => 'form-control','autocomplete' => 'off',];
		$this->data['k_eselon_kode'] = ['name' => 'k_eselon_kode','id' => 'k_eselon_kode','class' => 'form-control','autocomplete'  => 'off',];
		$this->data['k_eselon_nama'] = ['name' => 'k_eselon_nama','id' => 'k_eselon_nama','class' => 'form-control','autocomplete' => 'off',];
		$this->data['k_satker_kode'] = ['name' => 'k_satker_kode','id' => 'k_satker_kode','class' => 'form-control','autocomplete' => 'off',];
		$this->data['k_satker_nama'] = ['name' => 'k_satker_nama','id' => 'k_satker_nama','class' => 'form-control','autocomplete'  => 'off',];
		$this->data['titik_bagi'] = ['name'=> 'titik_bagi','id' => 'titik_bagi','class' => 'form-control','autocomplete' => 'off',];
		$this->data['file_cpcl'] = ['name' => 'file_cpcl','id' => 'file_cpcl','class' => 'form-control','autocomplete' => 'off',];
		$this->data['is_ongkir'] = ['name' => 'is_ongkir','id' => 'is_ongkir','class' => 'form-control','autocomplete'  => 'off',];
		$this->data['is_swakelola'] = ['name' => 'is_swakelola','id' => 'is_swakelola','class' => 'form-control','autocomplete' => 'off',];
		$this->data['is_langsung'] = ['name' => 'is_langsung','id' => 'is_langsung','class' => 'form-control','autocomplete' => 'off',];
	  
		$this->load->view('back/riph/riph_edit', $this->data);
    }
    else
    {
      $this->session->set_flashdata('message', '<div class="alert alert-danger">User not found</div>');
      redirect('riph');
    }

  }

  function update_action_uang()
  {
    $this->form_validation->set_rules('tgl_max_lunas', 'Tanggal Maksimal Pelunasan', 'trim|required');
	$this->form_validation->set_rules('nama_perusahaan', 'Nama Perusahaan', 'required');
	$this->form_validation->set_rules('volume_riph', 'Volume Pengajuan', 'required');

    $this->form_validation->set_message('required', '{field} wajib diisi');

    $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

    if($this->form_validation->run() === FALSE)
    {
      $this->update($this->input->post('id'));
    }
    else
    {
        $data = array(
			'idkontrak'			=> $this->input->post('idkontrak'),
            'k_tipe'			=> $this->input->post('k_tipe'),
            'k_dipa_tgl' 		=> date('Y-m-d',strtotime($this->input->post('k_dipa_tgl'))),
            'k_kontrak_tgl' 	=> date('Y-m-d',strtotime($this->input->post('k_kontrak_tgl'))),
            'k_kontrak_nomor'	=> $this->input->post('k_kontrak_nomor'),
			'k_kontrak_nilai'   => $this->input->post('k_kontrak_nilai'),
			'k_dipa'      		=> $this->input->post('k_dipa'),
            'k_kode_kegiatan'	=> $this->input->post('k_kode_kegiatan'),
			'k_kode_akun'   	=> $this->input->post('k_kode_akun'),
			'k_kode_output'     => $this->input->post('k_kode_output'),
            'k_kode_ro'			=> $this->input->post('k_kode_ro'),
			'k_vendor_npwp'   	=> $this->input->post('k_vendor_npwp'),
			'k_vendor_nama'     => $this->input->post('k_vendor_nama'),
            'k_kode_kegiatan'	=> $this->input->post('k_kode_kegiatan'),
			'k_eselon_kode'   	=> $this->input->post('k_eselon_kode'),
			'k_eselon_nama'     => $this->input->post('k_eselon_nama'),
            'k_satker_kode'		=> $this->input->post('k_satker_kode'),
			'k_satker_nama'   	=> $this->input->post('k_satker_nama'),
			'titik_bagi'     	=> $this->input->post('titik_bagi'),
            'is_ongkir'			=> $this->input->post('is_ongkir'),
			'is_swakelola'   	=> $this->input->post('is_swakelola'),
			'is_langsung'     	=> $this->input->post('is_langsung'),
			'k_kode_kro'     	=> $this->input->post('k_kode_kro'),
        );

        $this->Kontrak_model->update($this->input->post('id'),$data);

        $this->write_log();

        $this->session->set_flashdata('message', '<div class="alert alert-success">Data update succesfully</div>');
        redirect('kontrak');
      
    }
  }
	
	function add_ajax_kab($id_prov){
		    $query = $this->db->get_where('wilayah_kabupaten',array('provinsi_id'=>$id_prov));
		    $data = "<option value=''>- Select Kabupaten -</option>";
		    foreach ($query->result() as $value) {
		        $data .= "<option value='".$value->id."'>".$value->nama."</option>";
		    }
		    echo $data;
		}
		
		function add_ajax_kec($id_kab){
		    $query = $this->db->get_where('wilayah_kecamatan',array('kabupaten_id'=>$id_kab));
		    $data = "<option value=''> - Pilih Kecamatan - </option>";
		    foreach ($query->result() as $value) {
		        $data .= "<option value='".$value->id."'>".$value->nama."</option>";
		    }
		    echo $data;
		}
		
		function add_ajax_des($id_kec){
		    $query = $this->db->get_where('wilayah_desa',array('kecamatan_id'=>$id_kec));
		    $data = "<option value=''> - Pilih Desa - </option>";
		    foreach ($query->result() as $value) {
		        $data .= "<option value='".$value->id."'>".$value->nama."</option>";
		    }
		    echo $data;
		}
		
	
    public function getAllData()
    {
        $json = array();    
        $list = $this->emp->getEmpData();
        $data = array();
        foreach ($list as $element) {
            $row = array();
            $row[] = $element['id'];
            $row[] = $element['k_tipe'];
			$row[] = $element['k_kontrak_cpcl'];
            $row[] = $element['k_kontrak_nomor'];
            $row[] = $element['k_kontrak_tgl'];
            $row[] = $element['k_kode_kegiatan'].'.'.$element['k_kode_kro'].'.'.$element['k_kode_ro'];
            $row[] = $element['k_kode_akun'];
            $row[] = $element['k_eselon_nama'];
            $row[] = $element['k_satker_nama'];
            $row[] = $this->format_rupiah($element['k_kontrak_nilai']);
			switch ($element['k_kontrak_status_review']){
				case 0:
					$row[] = 'Belum diajukan';
					break;
				case 1:
					$row[] = 'Sudah diajukan';
					break;
				case 2:
					$row[] = 'Proses Review';
					break;
				case 3:
					$row[] = 'Perlu Diperbaiki';
					break;
				case 4:
					$row[] = 'Selesai';
					break;
				default:
					$row[] = 'N/A';
			} 
            
            $data[] = $row;
			
        }

        $json['data'] = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->emp->countAll(),
            "recordsFiltered" => $this->emp->countFiltered(),
            "data" => $data,
        );
        //output to json format
        $this->output->set_header('Content-Type: application/json');
        echo json_encode($json['data']);
    }

    
    // Employee save method
    public function save() {
        $json = array();        
        $idkontrak = $this->input->post('idkontrak');
        $k_tipe = $this->input->post('k_tipe');
        $k_kontrak_nomor = $this->input->post('k_kontrak_nomor');
        $k_kontrak_tgl = $this->input->post('k_kontrak_tgl');
        $k_kontrak_nilai = $this->input->post('k_kontrak_nilai');
        $k_kontrak_dokumen = $this->input->post('k_kontrak_dokumen');
        $k_dipa = $this->input->post('k_dipa');
        $k_dipa_tgl = $this->input->post('k_dipa_tgl');
        $k_kode_kegiatan = $this->input->post('k_kode_kegiatan');
        $k_kode_akun = $this->input->post('k_kode_akun');
        $k_kode_kro = $this->input->post('k_kode_kro');
        $k_kode_ro = $this->input->post('k_kode_ro');  
        $k_kode_output = $k_kode_kegiatan.'.'.$k_kode_kro.'.'.$k_kode_ro.'.'.$k_kode_akun;          
        $k_vendor_npwp = $this->input->post('k_vendor_npwp');
        $k_vendor_nama = $this->input->post('k_vendor_nama');
        $k_eselon_kode = $this->input->post('k_eselon_kode');
        $k_eselon_nama = $this->input->post('k_eselon_nama');
        $k_satker_kode = $this->input->post('k_satker_kode');
        $k_satker_nama = $this->input->post('k_satker_nama');            
            
        if(empty(trim($k_kontrak_nomor))){
            $json['error']['k_kontrak_nomor'] = 'Silahkan Isi Nomor Kontrak';
        }
        if(empty(trim($k_kontrak_tgl))){
            $json['error']['k_kontrak_tgl'] = 'Silahkan Isi Tanggal Kontrak';
        }

        if(empty(trim($k_kontrak_nilai))){
            $json['error']['k_kontrak_nilai'] = 'Please enter email address';
        }
		
        if(empty($k_kode_kegiatan)){
            $json['error']['k_kode_kegiatan'] = 'Silahkan Isi Kode Kegiatan';
        }

        if(empty($k_kode_akun)){
            $json['error']['k_kode_akun'] = 'Silahkan Isi Kode Akun';
        }

        if(empty($json['error'])){
            $this->emp->setidkontrak($idkontrak);
            $this->emp->setk_tipe($k_tipe);
            $this->emp->setk_kontrak_nomor($k_kontrak_nomor);
            $this->emp->setk_kontrak_tgl($k_kontrak_tgl);
            $this->emp->setk_kontrak_nilai($k_kontrak_nilai);
            $this->emp->setk_kontrak_dokumen($k_kontrak_dokumen);
            $this->emp->setk_dipa($k_dipa);
            $this->emp->setk_dipa_tgl($k_dipa_tgl);
            $this->emp->setk_kode_kegiatan($k_kode_kegiatan);
            $this->emp->setk_kode_akun($k_kode_akun);
            $this->emp->setk_kode_kro($k_kode_kro);
            $this->emp->setk_kode_ro($k_kode_ro);
            $this->emp->setk_kode_output($k_kode_output);
            $this->emp->setk_vendor_npwp($k_vendor_npwp);
            $this->emp->setk_vendor_nama($k_vendor_nama);
            $this->emp->setk_eselon_kode($k_eselon_kode);
            $this->emp->setk_eselon_nama($k_eselon_nama);
            $this->emp->setk_satker_kode($k_satker_kode);
            $this->emp->setk_satker_nama($k_satker_nama);
            try {
                $last_id = $this->emp->createEmp();
            } catch (Exception $e) {
                var_dump($e->getMessage());
            }
                
            if (!empty($last_id) && $last_id > 0) {
                $empID = $last_id;
                $this->emp->setEmpID($empID);
                $empInfo = $this->emp->getEmp();                    
                $json['emp_id'] = $empInfo['id'];
                $json['idkontrak'] = $empInfo['idkontrak'];
                $json['k_tipe'] = $empInfo['k_tipe'];
                $json['k_kontrak_nomor'] = $empInfo['k_kontrak_nomor'];
                $json['k_kontrak_tgl'] = $empInfo['k_kontrak_tgl'];
                $json['k_kontrak_nilai'] = $empInfo['k_kontrak_nilai'];
                $json['k_kontrak_dokumen'] = $empInfo['k_kontrak_dokumen'];
                $json['k_dipa'] = $empInfo['k_dipa'];
                $json['k_dipa_tgl'] = $empInfo['k_dipa_tgl'];
                $json['k_kode_kegiatan'] = $empInfo['k_kode_kegiatan'];
                $json['k_kode_akun'] = $empInfo['k_kode_akun'];
                $json['k_kode_ro'] = $empInfo['k_kode_ro'];
                $json['k_kode_kro'] = $empInfo['k_kode_kro'];
                $json['k_kode_output'] = $empInfo['k_kode_output'];
                $json['k_vendor_npwp'] = $empInfo['k_vendor_npwp'];
                $json['k_vendor_nama'] = $empInfo['k_vendor_nama'];
                $json['k_eselon_kode'] = $empInfo['k_eselon_kode'];
                $json['k_eselon_nama'] = $empInfo['k_eselon_nama'];
                $json['k_satker_kode'] = $empInfo['k_satker_kode'];
                $json['k_satker_nama'] = $empInfo['k_satker_nama'];
                $json['status'] = 'success';
            }
        }
        $this->output->set_header('Content-Type: application/json');
        echo json_encode($json);
    }

    // Employee edit method
    public function edit() {
        $json = array();
        $empID = $this->input->post('emp_id');
        $this->emp->setEmpID($empID);
        $json['empInfo'] = $this->emp->getEmp();

        $this->output->set_header('Content-Type: application/json');
        $this->load->view('apps/kontrak/popup/renderEdit', $json);
    }

    // Employee update method
    public function update() {
        $json = array();        
        $emp_id = $this->input->post('emp_id');
        $idkontrak = $this->input->post('idkontrak');
        $k_tipe = $this->input->post('k_tipe');
        $k_kontrak_nomor = $this->input->post('k_kontrak_nomor');
        $k_kontrak_tgl = $this->input->post('k_kontrak_tgl');
        $k_kontrak_nilai = $this->input->post('k_kontrak_nilai');
        $k_kontrak_dokumen = $this->input->post('k_kontrak_dokumen');
        $k_dipa = $this->input->post('k_dipa');
        $k_dipa_tgl = $this->input->post('k_dipa_tgl');
        $k_kode_kegiatan = $this->input->post('k_kode_kegiatan');
        $k_kode_akun = $this->input->post('k_kode_akun');
        $k_kode_kro = $this->input->post('k_kode_kro');
        $k_kode_ro = $this->input->post('k_kode_ro');  
        $k_kode_output = $k_kode_kro.'.'.$k_kode_ro;      
        $k_vendor_npwp = $this->input->post('k_vendor_npwp');
        $k_vendor_nama = $this->input->post('k_vendor_nama');
        $k_eselon_kode = $this->input->post('k_eselon_kode');
        $k_eselon_nama = $this->input->post('k_eselon_nama');
        $k_satker_kode = $this->input->post('k_satker_kode');
        $k_satker_nama = $this->input->post('k_satker_nama');               
            
        if(empty(trim($k_kontrak_nomor))){
            $json['error']['k_kontrak_nomor'] = 'Silahkan Isi Nomor Kontrak';
        }
        if(empty(trim($k_kontrak_tgl))){
            $json['error']['k_kontrak_tgl'] = 'Silahkan Isi Tanggal Kontrak';
        }

        if(empty(trim($k_kontrak_nilai))){
            $json['error']['k_kontrak_nilai'] = 'Please enter email address';
        }

        //if ($this->emp->validateEmail($email) == FALSE) {
        //    $json['error']['email'] = 'Please enter valid email address';
       //}
        if(empty($k_kode_kegiatan)){
            $json['error']['k_kode_kegiatan'] = 'Silahkan Isi Kode Kegiatan';
        }
        //if($this->emp->validateMobile($contact_no) == FALSE) {
        //    $json['error']['contactno'] = 'Please enter valid contact no';
        //}

        if(empty($k_kode_akun)){
            $json['error']['k_kode_akun'] = 'Silahkan Isi Kode Akun';
        }

        if(empty($json['error'])){
            $this->emp->setidkontrak($idkontrak);
            $this->emp->setk_tipe($k_tipe);
            $this->emp->setk_kontrak_nomor($k_kontrak_nomor);
            $this->emp->setk_kontrak_tgl($k_kontrak_tgl);
            $this->emp->setk_kontrak_nilai($k_kontrak_nilai);
            $this->emp->setk_kontrak_dokumen($k_kontrak_dokumen);
            $this->emp->setk_dipa($k_dipa);
            $this->emp->setk_dipa_tgl($k_dipa_tgl);
            $this->emp->setk_kode_kegiatan($k_kode_kegiatan);
            $this->emp->setk_kode_akun($k_kode_akun);
            $this->emp->setk_kode_kro($k_kode_kro);
            $this->emp->setk_kode_ro($k_kode_ro);
            $this->emp->setk_kode_output($k_kode_output);
            $this->emp->setk_vendor_npwp($k_vendor_npwp);
            $this->emp->setk_vendor_nama($k_vendor_nama);
            $this->emp->setk_eselon_kode($k_eselon_kode);
            $this->emp->setk_eselon_nama($k_eselon_nama);
            $this->emp->setk_satker_kode($k_satker_kode);
            $this->emp->setk_satker_nama($k_satker_nama);
            try {
                $last_id = $this->emp->updateEmp();;
            } catch (Exception $e) {
                var_dump($e->getMessage());
            }
                
            if (!empty($emp_id) && $emp_id > 0) { 
                $this->emp->setEmpID($emp_id);
                $empInfo = $this->emp->getEmp();                    
                $json['emp_id'] = $empInfo['id'];
                $json['idkontrak'] = $empInfo['idkontrak'];
                $json['k_tipe'] = $empInfo['k_tipe'];
                $json['k_kontrak_nomor'] = $empInfo['k_kontrak_nomor'];
                $json['k_kontrak_tgl'] = $empInfo['k_kontrak_tgl'];
                $json['k_kontrak_nilai'] = $empInfo['k_kontrak_nilai'];
                $json['k_kontrak_dokumen'] = $empInfo['k_kontrak_dokumen'];
                $json['k_dipa'] = $empInfo['k_dipa'];
                $json['k_dipa_tgl'] = $empInfo['k_dipa_tgl'];
                $json['k_kode_kegiatan'] = $empInfo['k_kode_kegiatan'];
                $json['k_kode_akun'] = $empInfo['k_kode_akun'];
                $json['k_kode_ro'] = $empInfo['k_kode_ro'];
                $json['k_kode_kro'] = $empInfo['k_kode_kro'];
                $json['k_kode_output'] = $empInfo['k_kode_output'];
                $json['k_vendor_npwp'] = $empInfo['k_vendor_npwp'];
                $json['k_vendor_nama'] = $empInfo['k_vendor_nama'];
                $json['k_eselon_kode'] = $empInfo['k_eselon_kode'];
                $json['k_eselon_nama'] = $empInfo['k_eselon_nama'];
                $json['k_satker_kode'] = $empInfo['k_satker_kode'];
                $json['k_satker_nama'] = $empInfo['k_satker_nama'];                 
                $json['status'] = 'success';
            }
        }
        $this->output->set_header('Content-Type: application/json');
        echo json_encode($json);
    }

    // Employee display method
    public function display() {
        $json = array();
        $empID = $this->input->post('emp_id');
        $this->emp->setEmpID($empID);
        $json['empInfo'] = $this->emp->getEmp();

        $this->output->set_header('Content-Type: application/json');
        $this->load->view('employees/popup/renderDisplay', $json);
    }

    // Employee display method
    public function delete() {
        $json = array();
        $empID = $this->input->post('emp_id');        
        $this->emp->setEmpID($empID);
        $this->emp->deleteEmp();
        $this->output->set_header('Content-Type: application/json');
        echo json_encode($json);
        
    }
	// Vendor
	public function ajax_add_vendor()
	{
		$this->_validate_vendor();
		$data = array(
				'no_npwp' => $this->input->post('no_npwp'),
				'nama_vendor' => $this->input->post('nama_vendor'),
				'provinsi' => $this->input->post('provinsi2'),
				'kabupaten' => $this->input->post('kabupaten2'),
				'kecamatan' => $this->input->post('kecamatan2'),
				'desa' => $this->input->post('desa2'),
				'alamat' => $this->input->post('alamat'),
				'nama_direktur' => $this->input->post('nama_direktur'),
				'nomor_kontak' => $this->input->post('nomor_kontak'),
				'email' => $this->input->post('email'),
				'file_npwp' => $this->input->post('file_npwp'),
			);
		$insert = $this->Vendor_model->save($data);
		echo json_encode(array("status" => TRUE));
	}
	
	public function ajax_delete_vendor($id)
	{
		$this->Vendor_model->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}
	
	public function ajax_update_vendor()
	{
		$this->_validate_vendor();
		$data = array(
				'no_npwp' => $this->input->post('no_npwp'),
				'nama_vendor' => $this->input->post('nama_vendor'),
				'provinsi' => $this->input->post('provinsi2'),
				'kabupaten' => $this->input->post('kabupaten2'),
				'kecamatan' => $this->input->post('kecamatan2'),
				'desa' => $this->input->post('desa2'),
				'alamat' => $this->input->post('alamat'),
				'nama_direktur' => $this->input->post('nama_direktur'),
				'nomor_kontak' => $this->input->post('nomor_kontak'),
				'email' => $this->input->post('email'),
				'file_npwp' => $this->input->post('file_npwp'),
			);
		$this->saprodi->update(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));
	}
	
	private function _validate_vendor()
	{
		$data = array();
		$data['error_string'] = array();
		$data['inputerror'] = array();
		$data['status'] = TRUE;

		if($this->input->post('no_npwp') == '')
		{
			$data['inputerror'][] = 'no npwp';
			$data['error_string'][] = 'no npwp is required';
			$data['status'] = FALSE;
		}

		if($this->input->post('nama_vendor') == '')
		{
			$data['inputerror'][] = 'nama vendor';
			$data['error_string'][] = 'nama vendor is required';
			$data['status'] = FALSE;
		}

		if($data['status'] === FALSE)
		{
			echo json_encode($data);
			exit();
		}
	}
	
	//Penerima
	public function ajax_list_penerima($id)
	{
		//$list = $this->saprodi->get_by_id_poktan($idpoktan);
		$list = $this->penyaluran->get_datatables($id);
		$data = array();
		$no = $_POST['start'];
		$lat = "";$lng="";
		foreach ($list as $penyaluran) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $penyaluran->nik;
			$row[] = $penyaluran->nama_lengkap;
			$row[] = $penyaluran->satuan;
			$row[] = "Rp ". number_format($penyaluran->harga,2);
			$row[] = "Rp ". number_format($penyaluran->qty * $penyaluran->harga,2);
			$row[] = $penyaluran->qty * $penyaluran->harga;

			//add html for action
			$row[] = '<a class="btn btn-sm btn-primary btn-fab" href="javascript:void(0)" title="Isi Posisi" onclick="edit_penerima('."'".$penyaluran->id_penerima."'".')"><i class="icon icon-lead-pencil"></i></a>
				  <a class="btn btn-sm btn-danger btn-fab" href="javascript:void(0)" title="Hapus" onclick="delete_penerima('."'".$penyaluran->id_penerima."'".')"><i class="icon icon-delete-empty"></i></a>';
		
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->penyaluran->count_all($id),
						"recordsFiltered" => $this->penyaluran->count_filtered($id),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}
	
	public function ajax_edit_penerima($id)
	{
		$data = $this->penyaluran->get_by_id($id);
		//$data->tgl_rencana_tanam = ($data->tgl_rencana_tanam == '00-00-0000') ? '' : $data->tgl_rencana_tanam; // if 0000-00-00 set tu empty for datepicker compatibility
		echo json_encode($data);
	}
	
	public function ajax_add_penerima()
	{
		$this->_validate_penerima();
		$data = array(
				'id_poktan' => $this->input->post('id_poktan'),
				'id_cpcl' => $this->input->post('id_cpcl'),
				'komponen' => $this->input->post('komponen'),
				'qty' => $this->input->post('qty'),
				'harga' => $this->input->post('harga'),
				'satuan' => $this->input->post('satuan'),
				'total_harga' => $this->input->post('qty')*$this->input->post('harga'),
			);
		$insert = $this->penyaluran->save($data);
		echo json_encode(array("status" => TRUE));
	}
	
	public function ajax_delete_penerima($id)
	{
		$this->penyaluran->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}
	
	public function ajax_update_penerima()
	{
		$this->_validate_penerima();
		$data = array(
				'komponen' => $this->input->post('komponen'),
				'qty' => $this->input->post('qty'),
				'satuan' => $this->input->post('satuan'),
				'harga' => $this->input->post('harga'),
				'total_harga' => $this->input->post('qty') * $this->input->post('harga'),
			);
		$this->penyaluran->update(array('id_penerima' => $this->input->post('id_penerima')), $data);
		echo json_encode(array("status" => TRUE));
	}
	
	private function _validate_penerima()
	{
		$data = array();
		$data['error_string'] = array();
		$data['inputerror'] = array();
		$data['status'] = TRUE;

		if($this->input->post('komponen') == '')
		{
			$data['inputerror'][] = 'komponen';
			$data['error_string'][] = 'Komponen is required';
			$data['status'] = FALSE;
		}

		if($this->input->post('qty') == '')
		{
			$data['inputerror'][] = 'qty';
			$data['error_string'][] = 'Jumlah / Banyaknya is required';
			$data['status'] = FALSE;
		}

		if($this->input->post('satuan') == '')
		{
			$data['inputerror'][] = 'satuan';
			$data['error_string'][] = 'Satuan is required';
			$data['status'] = FALSE;
		}

		if($this->input->post('harga') == '')
		{
			$data['inputerror'][] = 'harga';
			$data['error_string'][] = 'Harga is required';
			$data['status'] = FALSE;
		}

		if($data['status'] === FALSE)
		{
			echo json_encode($data);
			exit();
		}
	}

	function format_rupiah($angka){

		$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
		return $hasil_rupiah;
		
	}
	function write_log()
	{
		$data = array(
		'content'    => $this->db->last_query(),
		'created_by' => $this->session->name,
		'ip_address' => $this->input->ip_address(),
		'user_agent' => $this->input->user_agent(),
		);

		$this->db->insert('log_queries', $data);
	}

	

	
}