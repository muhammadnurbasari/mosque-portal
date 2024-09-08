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

		$this->db->limit(6);
		$this->db->where('posting_date <= ', date('Y-m-d'));
		$this->db->order_by("posting_date", "DESC");
		$data['activitas'] = $this->Result_model->getdata('activitas');

		$this->db->limit(3);
		$this->db->where('posting_date <= ', date('Y-m-d'));
		$this->db->order_by("posting_date", "DESC");
		$data['events'] = $this->Result_model->getdata('events');

		$this->load->view('welcome_message', $data);
	}

	function activitas_readmore($id) 
	{
		$data['abouts'] = $this->Result_model->getdata('abouts', 1);
		$data['activitas'] = $this->Result_model->getdata('activitas', $id);
		$this->load->view('activitas_readmore', $data);
	}
}
