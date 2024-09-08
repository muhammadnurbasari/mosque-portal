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

		$data['wording1'] = 'Selamat Datang';
		$data['wording2'] = 'Masjid Abdul Aziz';

		$this->load->view('welcome_message', $data);
	}

	function activitas_readmore($id) 
	{
		$data['wording1'] = 'Detail';
		$data['wording2'] = 'Aktivitas';
		$data['abouts'] = $this->Result_model->getdata('abouts', 1);
		$data['activitas'] = $this->Result_model->getdata('activitas', $id);
		$this->load->view('activitas_readmore', $data);
	}

	function event_readmore($id) 
	{
		$data['wording1'] = 'Detail';
		$data['wording2'] = 'Events';
		$data['abouts'] = $this->Result_model->getdata('abouts', 1);
		$data['events'] = $this->Result_model->getdata('events', $id);
		$this->load->view('event_readmore', $data);
	}

	function donation() 
	{
		$data['wording1'] = 'Info';
		$data['wording2'] = 'INFAK';
		$data['abouts'] = $this->Result_model->getdata('abouts', 1);
		$data['donations'] = $this->Result_model->getdata('donations', 1);
		$this->load->view('donations', $data);
	}

	function about() 
	{
		$data['wording1'] = 'Tentang';
		$data['wording2'] = 'Masjid Abdul Aziz';
		$data['abouts'] = $this->Result_model->getdata('abouts', 1);
		$this->load->view('about', $data);
	}

	function activitas() 
	{
		$data['wording1'] = 'List';
		$data['wording2'] = 'Aktivitas';
		$data['abouts'] = $this->Result_model->getdata('abouts', 1);
		$data['activitas'] = $this->Result_model->getdata('activitas');
		$this->load->view('activitas', $data);
	}

	function events() 
	{
		$data['wording1'] = 'List';
		$data['wording2'] = 'Events';
		$data['abouts'] = $this->Result_model->getdata('abouts', 1);
		$data['events'] = $this->Result_model->getdata('events');
		$this->load->view('events', $data);
	}

}
