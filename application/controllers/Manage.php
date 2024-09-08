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
			redirect('administrator');
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
			$phone_number = $this->input->post("phone_number");
			$email = $this->input->post("email");
			$twitter = $this->input->post("twitter");
			$instagram = $this->input->post("instagram");
			$facebook = $this->input->post("facebook");
			$linkedin = $this->input->post("linkedin");
			$address = $this->input->post("address");
			$vision = $this->input->post("vision");
			$mission = $this->input->post("mission");
			$id = $this->input->post("id");

			$this->form_validation->set_rules("phone_number", "Phone_number", "required",["required" => "phone harus diisi"]);
			// $this->form_validation->set_rules("twitter", "Twitter", "required",["required" => "twitter harus diisi"]);
			$this->form_validation->set_rules("email", "Email", "required",["required" => "Email harus diisi"]);
			// $this->form_validation->set_rules("instagram", "Instagram", "required",["required" => "instagram harus diisi"]);
			// $this->form_validation->set_rules("facebook", "Facebook", "required",["required" => "facebook harus diisi"]);
			// $this->form_validation->set_rules("linkedin", "Linkedin", "required",["required" => "linkedin harus diisi"]);
			$this->form_validation->set_rules("address", "Address", "required",["required" => "Alamat harus diisi"]);
			$this->form_validation->set_rules("vision", "Vision", "required",["required" => "Visi harus diisi"]);
			$this->form_validation->set_rules("mission", "Mission", "required",["required" => "Misi	 harus diisi"]);

			if ($this->form_validation->run() == false) {
				echo validation_errors();
			} else {
				$data = [
					"phone_number" => htmlspecialchars($phone_number),
					"email" => htmlspecialchars($email),
					"twitter" => htmlspecialchars($twitter),
					"instagram" => htmlspecialchars($instagram),
					"facebook" => htmlspecialchars($facebook),
					"linkedin" => htmlspecialchars($linkedin),
					"address" => htmlspecialchars($address),
					"vision" => htmlspecialchars($vision),
					"mission" => htmlspecialchars($mission),
				];

				$this->Result_model->updatedata_by_id("abouts", $id, $this->audit_trails('edit', $data));

				echo "1";
			}
		} elseif ($para == "add") {
			
		} elseif ($para == "delete") {
			$id = $this->input->post("id");

			$this->Result_model->delete("users", $id);

			echo "1";
		} elseif ($para == "change_image") {
			$id = $this->input->post("id");
			$about = $this->Result_model->getdata("abouts", $id);

			if (isset($_FILES['image'])) {
				$upload_result = $this->do_upload($id, 'assets/img/', 'about_');
				if ($upload_result['is_error']) {
					$this->session->set_flashdata('message_error', $upload_result['error']);
			 		redirect('manage/view_edit/abouts/'.$id);
				} else {
					// unlink(explode(base_url('assets/img/'), $about->image)[1]);
					$file_name = $upload_result['file_name']['file_name'];
					$data = [
						"image" => base_url('assets/img/').$file_name
					];
					$this->Result_model->updatedata_by_id("abouts", $id, $this->audit_trails('edit', $data));

					$this->session->set_flashdata('message_success', "Berhasil ubah gambar");
			 		redirect('manage/view_edit/abouts/'.$id);
				}
			} else {
				$this->session->set_flashdata('message_error', "harap pilih gambar !");
				redirect('manage/view_edit/abouts/'.$id);
			}
		}
	}

	// activitas - manage activitas data
	public function activitas($para='')
	{
		if ($para == '') {
			$page = "activitas/index";
			$data["info_topbar"] = "Activitas";
			$data['activitas'] = $this->Result_model->getdata("activitas");
			$this->_templating($data, $page);
		} elseif ($para == "edit") {
			$title = $this->input->post("title");
			$content = $this->input->post("content");
			$posting_date = $this->input->post("posting_date");
			$id = $this->input->post("id");

			$this->form_validation->set_rules("title", "Title", "required",["required" => "title harus diisi"]);
			$this->form_validation->set_rules("content", "Content", "required",["required" => "content harus diisi"]);
			$this->form_validation->set_rules("posting_date", "Posting_date", "required",["required" => "tanggal posting harus diisi"]);

			if ($this->form_validation->run() == false) {
				$this->session->set_flashdata('message_error', validation_errors());
				redirect('manage/view_edit/activitas/'.$id);
			} else {
				if (strcmp($_FILES['image']["name"], "") != 0) {
					$upload_result = $this->do_upload($id, 'assets/img/', 'activitas_');
					if ($upload_result['is_error']) {
						$this->session->set_flashdata('message_error', $upload_result['error']);
						redirect('manage/view_edit/activitas/'.$id);
					} else {
						$file_name = $upload_result['file_name']['file_name'];
						$data = [
							"title" => htmlspecialchars($title),
							"content" => $content,
							"posting_date" => htmlspecialchars($posting_date),
							"image" => base_url('assets/img/').$file_name
						];
					}
				} else {
					$data = [
						"title" => htmlspecialchars($title),
						"content" => $content,
						"posting_date" => htmlspecialchars($posting_date),
					];
				}

				$this->Result_model->updatedata_by_id("activitas", $id, $this->audit_trails('edit', $data));
	
				$this->session->set_flashdata('message_success', "Berhasil edit data");
				redirect('manage/activitas');
			}
		} elseif ($para == "add") {
			$title = $this->input->post("title");
			$content = $this->input->post("content");
			$posting_date = $this->input->post("posting_date");

			$this->form_validation->set_rules("title", "Title", "required",["required" => "title harus diisi"]);
			$this->form_validation->set_rules("content", "Content", "required",["required" => "content harus diisi"]);
			$this->form_validation->set_rules("posting_date", "Posting_date", "required",["required" => "tanggal posting harus diisi"]);

			if ($this->form_validation->run() == false) {
				$this->session->set_flashdata('message_error', validation_errors());
				redirect('manage/view_add/activitas/');
			} else {

				if (isset($_FILES['image'])) {
					$id = $this->Result_model->maxid("activitas");
					$upload_result = $this->do_upload($id, 'assets/img/', 'activitas_');
					if ($upload_result['is_error']) {
						$this->session->set_flashdata('message_error', $upload_result['error']);
						redirect('manage/view_add/activitas/');
					} else {
						$file_name = $upload_result['file_name']['file_name'];
						$data = [
							"title" => htmlspecialchars($title),
							"content" => $content,
							"posting_date" => htmlspecialchars($posting_date),
							"image" => base_url('assets/img/').$file_name
						];

						$this->Result_model->add_data("activitas", $this->audit_trails('add', $data));
		
						$this->session->set_flashdata('message_success', "Berhasil tambah data");
						redirect('manage/activitas');
					}
				} else {
					$this->session->set_flashdata('message_error', "harap pilih gambar !");
					redirect('manage/view_add/activitas/');
				}
				
			}
		} elseif ($para == "delete") {
			$id = $this->input->post("id");

			$this->Result_model->delete("activitas", $id);

			echo "1";
		}
	}

	// events - manage events data
	public function events($para='')
	{
		if ($para == '') {
			$page = "events/index";
			$data["info_topbar"] = "events";
			$data['events'] = $this->Result_model->getdata("events");
			$this->_templating($data, $page);
		} elseif ($para == "edit") {
			$title = $this->input->post("title");
			$content = $this->input->post("content");
			$posting_date = $this->input->post("posting_date");
			$id = $this->input->post("id");

			$this->form_validation->set_rules("title", "Title", "required",["required" => "title harus diisi"]);
			$this->form_validation->set_rules("content", "Content", "required",["required" => "content harus diisi"]);
			$this->form_validation->set_rules("posting_date", "Posting_date", "required",["required" => "tanggal posting harus diisi"]);

			if ($this->form_validation->run() == false) {
				$this->session->set_flashdata('message_error', validation_errors());
				redirect('manage/view_edit/events/'.$id);
			} else {
				if (strcmp($_FILES['image']["name"], "") != 0) {
					$upload_result = $this->do_upload($id, 'assets/img/', 'events_');
					if ($upload_result['is_error']) {
						$this->session->set_flashdata('message_error', $upload_result['error']);
						redirect('manage/view_edit/events/'.$id);
					} else {
						$file_name = $upload_result['file_name']['file_name'];
						$data = [
							"title" => htmlspecialchars($title),
							"content" => $content,
							"posting_date" => htmlspecialchars($posting_date),
							"image" => base_url('assets/img/').$file_name
						];
					}
				} else {
					$data = [
						"title" => htmlspecialchars($title),
						"content" => $content,
						"posting_date" => htmlspecialchars($posting_date),
					];
				}

				$this->Result_model->updatedata_by_id("events", $id, $this->audit_trails('edit', $data));
	
				$this->session->set_flashdata('message_success', "Berhasil edit data");
				redirect('manage/events');
			}
		} elseif ($para == "add") {
			$title = $this->input->post("title");
			$content = $this->input->post("content");
			$posting_date = $this->input->post("posting_date");

			$this->form_validation->set_rules("title", "Title", "required",["required" => "title harus diisi"]);
			$this->form_validation->set_rules("content", "Content", "required",["required" => "content harus diisi"]);
			$this->form_validation->set_rules("posting_date", "Posting_date", "required",["required" => "tanggal posting harus diisi"]);

			if ($this->form_validation->run() == false) {
				$this->session->set_flashdata('message_error', validation_errors());
				redirect('manage/view_add/events/');
			} else {

				if (isset($_FILES['image'])) {
					$id = $this->Result_model->maxid("events");
					$upload_result = $this->do_upload($id, 'assets/img/', 'events_');
					if ($upload_result['is_error']) {
						$this->session->set_flashdata('message_error', $upload_result['error']);
						redirect('manage/view_add/events/');
					} else {
						$file_name = $upload_result['file_name']['file_name'];
						$data = [
							"title" => htmlspecialchars($title),
							"content" => $content,
							"posting_date" => htmlspecialchars($posting_date),
							"image" => base_url('assets/img/').$file_name
						];

						$this->Result_model->add_data("events", $this->audit_trails('add', $data));
		
						$this->session->set_flashdata('message_success', "Berhasil tambah data");
						redirect('manage/events');
					}
				} else {
					$this->session->set_flashdata('message_error', "harap pilih gambar !");
					redirect('manage/view_add/events/');
				}
				
			}
		} elseif ($para == "delete") {
			$id = $this->input->post("id");

			$this->Result_model->delete("events", $id);

			echo "1";
		}
	}


	// do_upload
    private function do_upload($id, $path, $filename)
    {
        // set path to store image
        // $path = 'assets/img/';

        // make directory if not exist
        // if (!file_exists($path)) {
        //     mkdir($path, 0777);
        // }

        $config['upload_path']          = "./" . $path;
        $config['file_name']            = $filename.$id;
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = 2048;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('image')) {
            $data = [
                'is_error' => true,
                'error' => $this->upload->display_errors(),
                'file_name' => "",
            ];

            return $data;
        } else {
            $data = [
                'is_error' => false,
                'error' => "",
                'file_name' => $this->upload->data(),
            ];

            return $data;
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