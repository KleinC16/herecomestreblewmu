<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

	public function index()
	{
		$this->load->database('default');
		$this->load->helper('url');
		$this->load->view('signup');
	}

}
