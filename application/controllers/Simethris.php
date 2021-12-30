<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Simethris extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		// company_profile
		$this->data['company_data']    					  = $this->Company_model->company_profile();

    // template
		//$this->data['logo_header_template'] 			= $this->Template_model->logo_header();
		//$this->data['navbar_template'] 					  = $this->Template_model->navbar();
		//$this->data['sidebar_template'] 					= $this->Template_model->sidebar();
		//$this->data['background_template'] 			  = $this->Template_model->background();
		//$this->data['sidebarstyle_template'] 		  = $this->Template_model->sidebarstyle();
		$this->load->model('Simethris_model');
		$this->load->helper('url');
	}

	public function index()
	{
		$this->data['page_title'] = 'SiMETHRIS';
		//$mingguini = date("oW", strtotime(date('d-m-Y')));
		//$minggulalu = $mingguini - 1;
		//$minggulalu2 = $minggulalu - 1;
		//$minggulalu3 = $minggulalu2 - 1;
		//$this->data['get_all_table_steps']  			= $this->Simethris_model->get_all_cpcl_riph_dash();
		//$this->data['get_all_cpcl_admin']  				= $this->Simethris_model->get_all_cpcl_adminc2();
		//$this->data['get_jml_cpcl_verifikasi']  		= $this->Simethris_model->get_jml_cpcl_verifikasi_admin();
		//$this->data['get_jml_cpcl_blverifikasi']  		= $this->Simethris_model->get_jml_cpcl_blverifikasi_admin();
		//$this->data['get_jml_realisasi_verifikasi']  	= $this->Simethris_model->get_jml_realisasi_verifikasi_admin();
		//$this->data['get_jml_realisasi_blverifikasi']  	= $this->Simethris_model->get_jml_realisasi_blverifikasi_admin();
		//$this->data['get_jml_produksi_verifikasi']  	= $this->Simethris_model->get_jml_produksi_verifikasi_admin();
		//$this->data['get_jml_produksi_blverifikasi']  	= $this->Simethris_model->get_jml_produksi_blverifikasi_admin();
		$this->data['get_jml_produksi']  				= $this->Simethris_model->get_jml_produksi_admin();
		$this->data['get_jml_tanam']  					= $this->Simethris_model->get_jml_realisasi_admin();
		$this->data['get_jml_real_tanam']  				= $this->Simethris_model->get_all_realisasi_tanam_admin();
		$this->data['get_jml_beban_tanam'] 				= $this->Simethris_model->get_all_beban_realisasi_tanam_admin();
		$this->data['get_jml_all_produksi'] 			= $this->Simethris_model->get_all_jml_produksi_admin();
		//$this->data['get_jml_beban_produksi']			= $this->Simethris_model->get_all_beban_produksi_admin();
		$this->data['get_jml_import']					= $this->Simethris_model->get_volume_import();
		$this->data['get_all_riph'] = $this->Simethris_model->get_all_riph();
		$this->data['get_jml_riph']	= $this->Simethris_model->get_all_jumlah();
		$this->data['get_all_lo2']  				= $this->Simethris_model->get_all_lo();
		//$this->data['get_jml_riph_admin']	= $this->Simethris_model->get_all_riph_admin_dasboard();
		$this->data['get_jml_rencana_tanam'] = $this->Simethris_model->get_total_luas_cpcl_admin();
		$this->data['get_jml_perusahaan'] = $this->Simethris_model->get_jml_perusahaan();
		$this->load->view('back/simethris/index', $this->data);
	}
}
