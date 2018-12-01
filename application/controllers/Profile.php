<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function index()
	{
		$this->load->view('profile/user');
	}

    public function add() {
        $this->load->view('profile/bios/add');
    }

}
