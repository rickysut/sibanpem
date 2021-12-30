<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Onedash extends CI_Controller {

	public function __construct()
	{
        parent::__construct();
        // load model
		is_login();

		// company_profile
		$this->data['company_data']    					  = $this->Company_model->company_profile();
        $this->load->database();
		$this->load->model('Simethris_model');
	}

	public function index()
	{
		//for simethris
		$this->data['get_jml_produksi']  				= $this->Simethris_model->get_jml_produksi_admin();
		$this->data['get_jml_tanam']  					= $this->Simethris_model->get_jml_realisasi_admin();
		$this->data['get_jml_real_tanam']  				= $this->Simethris_model->get_all_realisasi_tanam_admin();
		$this->data['get_jml_beban_tanam'] 				= $this->Simethris_model->get_all_beban_realisasi_tanam_admin();
		$this->data['get_jml_all_produksi'] 			= $this->Simethris_model->get_all_jml_produksi_admin();
		
		//for EWS area and line chart
		$this->data['page_title'] = 'OneDash';
		$profitQuery =  $this->db->query("SELECT  (purchase) as X, (sale) as Y, (year) as Z	FROM smv_product");
		$record = $profitQuery->result();
		$data['smv_product'] = json_encode( $record );
		//print_r($data['chart_data']);die;
		$this->load->view('back/onedash/body', $data, $this->data);
	}
	
}
