<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

	public function index()
	{
		// $this->load->library('form_validation');
		// $this->load->helper(array('form', 'url'));
		$this->load->view('signup');
	}

	public function form_validation()
	{
		// $this->load->helper(array('form', 'url'));

		// $username = $this->input->post("firstname");

		// echo '<h1>' . $username . '</h1>';

		// form validation library https://www.codeigniter.com/userguide3/libraries/form_validation.html
		$this->load->library('form_validation');
		$this->form_validation->set_rules('firstname', 'First name', 'required'); // return false if firstname contains anything other than alpha characters.
		$this->form_validation->set_rules('lastname', 'Last name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

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

			redirect(base_url() . 'inserted');

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
