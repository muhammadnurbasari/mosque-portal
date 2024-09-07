<?php 


/**
 * 
 */
class Dashboard extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Result_model');

		// validation login 
		if (!$this->session->userdata('user')) {
            $this->session->set_flashdata('message_error', "sesi anda habis, silahkan login ulang");
			redirect('welcome');
		}
	}

	function index()
	{
		$data['info_topbar'] = 'Dashboard';
		$this->load->view('partials/header');
		$this->load->view('partials/sidebar', $data);
		$this->load->view('dashboard', $data);
		$this->load->view('partials/footer');
	}
}