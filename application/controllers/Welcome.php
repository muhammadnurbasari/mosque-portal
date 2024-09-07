<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Result_model');
	}

	public function index()
	{
		$data['abouts'] = $this->Result_model->getdata('abouts', 1);
		$this->load->view('welcome_message', $data);
	}
}
