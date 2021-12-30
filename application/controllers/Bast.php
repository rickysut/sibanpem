<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Bast extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('Bast_model', 'emp');
		$this->data['company_data']    					  = $this->Company_model->company_profile();
		$this->load->model('front_model','person');
		$this->load->model('m_wilayah');
		$this->load->model('Kontrak_model');
    }
    // Employee list method
    public function index() {
		//is_login();
        $this->data['page'] = 'emp-list';
        $this->data['title'] = 'BAST | Hortikultura';  
        $this->load->view('back/sibanpem/kontrak/detail', $this->data);
    }
	
	public function penyaluran() {
		//is_login();
        $this->data['page'] = 'emp-list';
        $this->data['title'] = 'BAST | Hortikultura';  
        $this->load->view('back/sibanpem/kontrak/penyaluran', $this->data);
    }
	
	public function spm() 
	{
		//is_login();
        $this->data['page'] = 'emp-list';
        $this->data['title'] = 'BAST | Hortikultura';  
		$this->data['get_all_kegiatan'] = $this->Kontrak_model->get_all_kegiatan(); 
		$this->data['get_all_kro'] = $this->Kontrak_model->get_all_kro(); 
		$this->data['get_all_ro'] = $this->Kontrak_model->get_all_ro();
		$this->data['get_all_akun'] = $this->Kontrak_model->get_all_kdakun();  
		$this->data['k_kode_kegiatan'] = ['name' => 'k_kode_kegiatan','id' => 'k_kode_kegiatan`','class'=> 'form-control','autocomplete' => 'off','value' => $this->form_validation->set_value('k_kode_kegiatan')];
        $this->data['kd_kro'] = ['name' => 'kd_kro','id' => 'kd_kro`','class'=> 'form-control','autocomplete' => 'off','value' => $this->form_validation->set_value('kd_kro')];
        $this->data['kd_ro'] = ['name' => 'kd_ro','id' => 'kd_ro`','class'=> 'form-control','autocomplete' => 'off','value' => $this->form_validation->set_value('kd_ro')];
        $this->data['kd_akun'] = ['name' => 'kd_akun','id' => 'kd_akun`','class'=> 'form-control','autocomplete' => 'off','value' => $this->form_validation->set_value('kd_akun')];
		
        $this->load->view('back/sibanpem/kontrak/spm', $this->data);
    }
	
	public function catsatker() 
	{
		//is_login();
        $this->data['page'] = 'emp-list';
        $this->data['title'] = 'BAST | Hortikultura';  
        $this->load->view('back/sibanpem/kontrak/catsatker', $this->data);
    }
	
	public function bast() 
	{
		//is_login();
        $this->data['page'] = 'emp-list';
        $this->data['title'] = 'BAST | Hortikultura';  
        $this->load->view('back/sibanpem/kontrak/bast', $this->data);
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

    public function getAllEmployees()
    {
        $json = array();    
        $list = $this->emp->getEmpData();
        $data = array();
        foreach ($list as $element) {
            $row = array();
            $row[] = $element['id'];
            $row[] = $element['fullname'];
            $row[] = $element['email'];
            $row[] = $element['contact_no'];
            $row[] = $element['address'];
            $row[] = $element['salary'];
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
        $first_name = $this->input->post('first_name');
        $last_name = $this->input->post('last_name');
        $email = $this->input->post('email');
        $address = $this->input->post('address');
        $contact_no = $this->input->post('contact_no');
        $salary = $this->input->post('salary');            
            
        if(empty(trim($first_name))){
            $json['error']['firstname'] = 'Please enter first name';
        }
        if(empty(trim($last_name))){
            $json['error']['lastname'] = 'Please enter last name';
        }

        if(empty(trim($email))){
            $json['error']['email'] = 'Please enter email address';
        }

        if ($this->emp->validateEmail($email) == FALSE) {
            $json['error']['email'] = 'Please enter valid email address';
        }
        if(empty($address)){
            $json['error']['address'] = 'Please enter address';
        }
        if($this->emp->validateMobile($contact_no) == FALSE) {
            $json['error']['contactno'] = 'Please enter valid contact no';
        }

        if(empty($salary)){
            $json['error']['salary'] = 'Please enter salary';
        }

        if(empty($json['error'])){
            $this->emp->setFirstName($first_name);
            $this->emp->setLastName($last_name);
            $this->emp->setEmail($email);
            $this->emp->setAddress($address);
            $this->emp->setSalary($salary);
            $this->emp->setContactNo($contact_no);
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
                $json['first_name'] = $empInfo['first_name'];
                $json['last_name'] = $empInfo['last_name'];
                $json['email'] = $empInfo['email'];
                $json['address'] = $empInfo['address'];
                $json['contact_no'] = $empInfo['contact_no'];
                $json['salary'] = $empInfo['salary'];
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
        $this->load->view('bast/popup/renderEdit', $json);
    }

    // Employee update method
    public function update() {
        $json = array();        
        $emp_id = $this->input->post('emp_id');
        $first_name = $this->input->post('first_name');
        $last_name = $this->input->post('last_name');
        $email = $this->input->post('email');
        $address = $this->input->post('address');
        $contact_no = $this->input->post('contact_no');
        $salary = $this->input->post('salary');            
            
        if(empty(trim($first_name))){
            $json['error']['firstname'] = 'Please enter first name';
        }
        if(empty(trim($last_name))){
            $json['error']['lastname'] = 'Please enter last name';
        }

        if(empty(trim($email))){
            $json['error']['email'] = 'Please enter email address';
        }

        if ($this->emp->validateEmail($email) == FALSE) {
            $json['error']['email'] = 'Please enter valid email address';
        }
        if(empty($address)){
            $json['error']['address'] = 'Please enter address';
        }
        if($this->emp->validateMobile($contact_no) == FALSE) {
            $json['error']['contactno'] = 'Please enter valid contact no';
        }

        if(empty($salary)){
            $json['error']['salary'] = 'Please enter salary';
        }

        if(empty($json['error'])){
            $this->emp->setEmpID($emp_id);
            $this->emp->setFirstName($first_name);
            $this->emp->setLastName($last_name);
            $this->emp->setEmail($email);
            $this->emp->setAddress($address);
            $this->emp->setSalary($salary);
            $this->emp->setContactNo($contact_no);
            try {
                $last_id = $this->emp->updateEmp();;
            } catch (Exception $e) {
                var_dump($e->getMessage());
            }
                
            if (!empty($emp_id) && $emp_id > 0) { 
                $this->emp->setEmpID($emp_id);
                $empInfo = $this->emp->getEmp();                    
                $json['emp_id'] = $empInfo['id'];
                $json['first_name'] = $empInfo['first_name'];
                $json['last_name'] = $empInfo['last_name'];
                $json['email'] = $empInfo['email'];
                $json['address'] = $empInfo['address'];
                $json['contact_no'] = $empInfo['contact_no'];
                $json['salary'] = $empInfo['salary'];                   
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
        $this->load->view('bast/popup/renderDisplay', $json);
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