<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Result_model');
		$this->load->library("form_validation");

		// validation login 
		if (!$this->session->userdata('user')) {
            $this->session->set_flashdata('message_error', "sesi anda habis, silahkan login ulang");
			redirect('welcome');
		}
	}
	
	// users - manage users data
	public function users($para='')
	{
		if ($para == '') {
			$page = "users/index";
			$data["info_topbar"] = "Users";
			$data['users'] = $this->Result_model->getdata("users");
			$this->_templating($data, $page);
		} elseif ($para == "edit") {
			$username = $this->input->post("username");
			$name = $this->input->post("name");
			$email = $this->input->post("email");
			$password_baru = $this->input->post("password_baru");
			$id = $this->input->post("id");

			$this->form_validation->set_rules("username", "Username", "required",["required" => "username harus diisi"]);
			$this->form_validation->set_rules("name", "Name", "required",["required" => "nama harus diisi"]);
			$this->form_validation->set_rules("email", "Email", "required",["required" => "Email harus diisi"]);

			if ($this->form_validation->run() == false) {
				echo validation_errors();
			} else {
				if ($password_baru != "" || $password_baru != NULL) {
					$data = [
						"username" => htmlspecialchars($username),
						"name" => htmlspecialchars($name),
						"email" => htmlspecialchars($email),
						"password" => password_hash($password_baru, PASSWORD_DEFAULT)
					];
				} else {
					$data = [
						"username" => htmlspecialchars($username),
						"name" => htmlspecialchars($name),
						"email" => htmlspecialchars($email),
					];
				}

				$this->Result_model->updatedata_by_id("users", $id, $this->audit_trails('edit', $data));

				echo "1";
			}
		} elseif ($para == "add") {
			$username = $this->input->post("username");
			$password = $this->input->post("password");
			$email = $this->input->post("email");
			$name = $this->input->post("name");

			$this->form_validation->set_rules("username", "Username", "required",["required" => "username harus diisi"]);
			$this->form_validation->set_rules("password", "Password", "required",["required" => "password harus diisi"]);
			$this->form_validation->set_rules("name", "Name", "required",["required" => "nama harus diisi"]);
			$this->form_validation->set_rules("email", "Email", "required",["required" => "email harus diisi"]);

			if ($this->form_validation->run() == false) {
				echo validation_errors();
			} else {
				$data = [
					"username" => htmlspecialchars($username),
					"password" => password_hash($password, PASSWORD_DEFAULT),
					"name" => htmlspecialchars($name),
					"email" => htmlspecialchars($email),
				];

				$this->Result_model->add_data("users", $this->audit_trails('add', $data));

				echo "1";
			}
		} elseif ($para == "delete") {
			$id = $this->input->post("id");

			$this->Result_model->delete("users", $id);

			echo "1";
		}
	}

	// abouts - manage abouts data
	public function abouts($para='')
	{
		if ($para == '') {
			$page = "abouts/index";
			$data["info_topbar"] = "Abouts";
			$data['abouts'] = $this->Result_model->getdata("abouts");
			$this->_templating($data, $page);
		} elseif ($para == "edit") {
			$username = $this->input->post("username");
			$name = $this->input->post("name");
			$email = $this->input->post("email");
			$password_baru = $this->input->post("password_baru");
			$id = $this->input->post("id");

			$this->form_validation->set_rules("username", "Username", "required",["required" => "username harus diisi"]);
			$this->form_validation->set_rules("name", "Name", "required",["required" => "nama harus diisi"]);
			$this->form_validation->set_rules("email", "Email", "required",["required" => "Email harus diisi"]);

			if ($this->form_validation->run() == false) {
				echo validation_errors();
			} else {
				if ($password_baru != "" || $password_baru != NULL) {
					$data = [
						"username" => htmlspecialchars($username),
						"name" => htmlspecialchars($name),
						"email" => htmlspecialchars($email),
						"password" => password_hash($password_baru, PASSWORD_DEFAULT)
					];
				} else {
					$data = [
						"username" => htmlspecialchars($username),
						"name" => htmlspecialchars($name),
						"email" => htmlspecialchars($email),
					];
				}

				$this->Result_model->updatedata_by_id("users", $id, $this->audit_trails('edit', $data));

				echo "1";
			}
		} elseif ($para == "add") {
			$username = $this->input->post("username");
			$password = $this->input->post("password");
			$email = $this->input->post("email");
			$name = $this->input->post("name");

			$this->form_validation->set_rules("username", "Username", "required",["required" => "username harus diisi"]);
			$this->form_validation->set_rules("password", "Password", "required",["required" => "password harus diisi"]);
			$this->form_validation->set_rules("name", "Name", "required",["required" => "nama harus diisi"]);
			$this->form_validation->set_rules("email", "Email", "required",["required" => "email harus diisi"]);

			if ($this->form_validation->run() == false) {
				echo validation_errors();
			} else {
				$data = [
					"username" => htmlspecialchars($username),
					"password" => password_hash($password, PASSWORD_DEFAULT),
					"name" => htmlspecialchars($name),
					"email" => htmlspecialchars($email),
				];

				$this->Result_model->add_data("users", $this->audit_trails('add', $data));

				echo "1";
			}
		} elseif ($para == "delete") {
			$id = $this->input->post("id");

			$this->Result_model->delete("users", $id);

			echo "1";
		}
	}

	// _templating - function to view and send data
	function _templating($data, $page)
	{
		$this->load->view('partials/header');
		$this->load->view('partials/sidebar', $data);
		$this->load->view($page, $data);
		$this->load->view('partials/footer');
	}

	function view_add($table='')
	{
		$page = $table."/add";
		$data["info_topbar"] = "Form Tambah ".$table;
		$this->_templating($data, $page);
	}

	function view_edit($table='',$id='')
	{
		$page = $table."/edit";
		$data["info_topbar"] = "Form Edit ".$table;
		$data[$table] = $this->Result_model->getdata($table, $id);
		$this->_templating($data, $page);
	}


	// audit_trails - function to merge array data and array audit trails
	function audit_trails($action, $arr = '')
	{
		// cek parameter array
		// if para = '', define array with empty value
		if ($arr == '') {
			$arr = [];
		}

		if ($action == 'add') {
			$data = [
				'createdby' => $this->session->userdata('user')[0]['id'],
				'createdat' => date('Y-m-d')
			];

			$audit_trails = array_merge($arr, $data);
		} elseif ($action == 'edit') {
			$data = [
				'updatedby' => $this->session->userdata('user')[0]['id'],
				'updatedat' => date('Y-m-d')
			];
			$audit_trails = array_merge($arr, $data);
		} elseif ($action == 'delete') {
			// $data = [
			// 	'deleted_by' => $this->session->userdata('user')[0]['id'],
			// 	'deleted_at' => date('Y-m-d')
			// ];
			// $audit_trails = array_merge($arr, $data);
		}

		return $audit_trails;
	}

	function guard_url_access($para)
	{
		// validation login
		if ($para == "1") {
			if ($this->session->userdata('user')[0]['role'] != "1") {
				redirect('dashboard');
			}
		} elseif ($para == "2") {
			if ($this->session->userdata('user')[0]['role'] != "2") {
				redirect('dashboard');
			}
		}
	}

}