<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

	public function index()
	{
		$this->load->view('signup');
	}

	public function form_validation()
	{
		// form validation library https://www.codeigniter.com/userguide3/libraries/form_validation.html
		$this->load->library('form_validation');
		$this->form_validation->set_rules('firstname', 'first name', 'required|alpha|max_length[32]'); // return false if firstname contains anything other than alpha characters.
		$this->form_validation->set_rules('lastname', 'last name', 'required|alpha|max_length[32]');
		$this->form_validation->set_rules('email', 'email', 'required|valid_email|max_length[64]|is_unique[users.email]', array('is_unique'=>'This %s already exists.'));
		$this->form_validation->set_rules('username', 'username', 'required|max_length[32]|is_unique[users.username]');
		$this->form_validation->set_rules('password', 'password', 'required|max_length[64]');
		$this->form_validation->set_rules('passwordconf', 'password confirmation', 'required|matches[password]');

		if ($this->form_validation->run() == TRUE) { // return true if the rules applied successfully
			// true
			$this->load->model("signup_model");
			$data = array(
				"firstname"=>$this->input->post("firstname"),
				"lastname"=>$this->input->post("lastname"),
				"email"=>$this->input->post("email"),
				"username"=>$this->input->post("username"),
				"password"=>$this->input->post("password")
			);

			$this->signup_model->insert_data($data);
			redirect(base_url() . 'signup/inserted');

		} else {
			// false
			$this->index();
		}
	}

	public function inserted()
	{
		$this->index();
	}

}
