<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function index()
	{
		$this->load->view('profile/user');
	}

    public function add()
	{
        $this->load->view('profile/bios/add');
    }

	public function add_form_validation()
	{
		// form validation library https://www.codeigniter.com/userguide3/libraries/form_validation.html
		$this->load->library('form_validation');
		if (empty($_FILES['userfile']['name'])) {
			$this->form_validation->set_rules('userfile', 'image', 'required|max_length[256]');
		}
		$this->form_validation->set_rules('position', 'position', 'alpha|max_length[16]');
		$this->form_validation->set_rules('classification', 'part', 'required|max_length[42]');
		$this->form_validation->set_rules('major', 'major', 'required|max_length[64]');
		$this->form_validation->set_rules('description', 'description', 'required|max_length[576]');

		if ($this->form_validation->run() == TRUE) { // return true if the rules applied successfully
			// true
			$username = $this->session->userdata('username');
			//$uid = $this->db->query('SELECT `biosid` FROM `bios` WHERE `username` = \'' . $username . '\'')->row()->id;
			//$newname = $uid;
			if(isset($_FILES['userfile']['name'])) {
				//$config['file_name'] = $newname;
				// $config['overwrite'] = true;
				$config['upload_path'] = "./assets/images/users/";
				$config['allowed_types'] = "jpg|jpeg|png";

				$this->load->library('upload', $config);
				if ($this->upload->do_upload()) {
					$data = $this->upload->data();
				}
				$this->load->model("profile_model");
				$filename = $_FILES['userfile']['name'];
				//$ext = end((explode(".", $filename)));
				//$newname = ($newname . '.' . $ext);
				$image_path = ("assets/images/users/" . $_FILES['userfile']['name']);
				$data = array(
					"username"=>$username,
					"image"=>$image_path,
					"position"=>$this->input->post("postion"),
					"classification"=>$this->input->post("classification"),
					"major"=>$this->input->post("major"),
					"description"=>$this->input->post("description")
				);

				$this->profile_model->insert_bio($data, $username);
				redirect(base_url() . 'profile/added');
			} else {
				echo 'FAILURE';
			}
		} else {
			// false
			$this->add();
		}
	}

	public function added()
	{
		$this->load->view('profile/bios/add');
	}

}
