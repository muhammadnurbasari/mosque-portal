<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		$this->load->model('Result_model');
	}

	public function index()
	{
		$this->load->view('administrator/login');
	}

    public function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		$cek_users = $this->Result_model->getdata_by_name('users', 'username', $username);
		 if (count($cek_users) > 0) {
		 	if (password_verify($password, $cek_users[0]['password'])) {

		 		$this->session->set_userdata(['user' => $cek_users]);

			 	redirect('dashboard');
		 	} else {
		 		$this->session->set_flashdata('message_error', "password anda salah");
			 	redirect('administrator');
		 	}
		 } else {
		 	$this->session->set_flashdata('message_error', "username belum terdaftar");
			redirect('administrator');
		 }
	}
}
