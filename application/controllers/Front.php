<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		
		$this->data['page_title'] = 'SIBANPEM';
		$this->data['action']     = 'front';

		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

		// $this->form_validation->set_message('required', '{field} wajib diisi');

		if($this->form_validation->run() === TRUE)
		{
		  
		  $row = $this->Auth_model->get_by_username($this->input->post('username'));
		  
		  if(!$row->username)
		  {
			$this->session->set_flashdata('message', '<div class="alert alert-danger">Username not found</div>');
			redirect('front');
		  }
		  elseif($row->is_active == 0)
		  {
			$this->session->set_flashdata('message', '<div class="alert alert-danger">Your account is INACTIVE</div>');
			redirect('front');
		  }
		  elseif(!password_verify($this->input->post('password'), $row->password))
		  {
			$log = $this->Auth_model->get_total_login_attempts_per_user($this->input->post('username'));

			// kunci akun kalau gagal input password 3x
			if($log > 2)
			{
			  $this->Auth_model->lock_account($this->input->post('username'), array('is_active' => '0'));

			  $this->Auth_model->clear_login_attempt($this->input->post('username'));

			  $this->session->set_flashdata('message', '<div class="alert alert-danger">Too many login attemps, we set your account to INACTIVE. Please contact superadmin to open it again.</div>');
			  redirect('front');
			}
			else
			{
			  $this->Auth_model->insert_login_attempt(array('ip_address'=>$this->input->ip_address(), 'username'=>$this->input->post('username')));

			  $this->session->set_flashdata('message', '<div class="alert alert-danger">Wrong Password</div>');
			  redirect('front');
			}

		  }
		  else
		  {
			$this->Auth_model->clear_login_attempt($this->input->post('username'));

			$session = array(
			  'id_users'    => $row->id_users,
			  'name'        => $row->name,
			  'username'    => $row->username,
			  'email'       => $row->email,
			  'usertype'    => $row->usertype,
			  'photo'       => $row->photo,
			  'photo_thumb' => $row->photo_thumb,
			);

			$this->session->set_userdata($session);

			$this->Auth_model->update($this->session->id_users, array('last_login'=>date('Y-m-d H:i:s')));

			redirect('dashboard');
		  }
		}
		else
		{
		  $this->data['username'] = [
			'name'              => 'username',
			'id'                => 'username',
			'class'             => 'form-control',
			'placeholder'       => 'Please insert your username',
			'value'             => $this->form_validation->set_value('username'),
		  ];

		  $this->data['password'] = [
			'name'              => 'password',
			'id'                => 'password',
			'class'             => 'form-control',
			'placeholder'       => 'Please insert your password',
			'value'             => $this->form_validation->set_value('password'),
		  ];
		$this->load->view('front/index', $this->data);
		}
	}
}