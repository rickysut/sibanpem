<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Riph extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		is_login();

		// company_profile
    $this->data['company_data']    					  = $this->Company_model->company_profile();
	$this->load->model('Simethris_model');
	$this->load->helper('url');
	}

	public function index()
	{
		$this->data['page_title'] = 'RIPH';
		$this->data['get_jml_produksi']  				= $this->Simethris_model->get_jml_produksi_admin();
		$this->data['get_jml_tanam']  					= $this->Simethris_model->get_jml_realisasi_admin();
		$this->data['get_jml_real_tanam']  				= $this->Simethris_model->get_all_realisasi_tanam_admin();
		$this->data['get_jml_beban_tanam'] 				= $this->Simethris_model->get_all_beban_realisasi_tanam_admin();
		$this->data['get_jml_all_produksi'] 			= $this->Simethris_model->get_all_jml_produksi_admin();
		$this->load->view('back/riph/index', $this->data);
	}
}
