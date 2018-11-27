<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

	public function index()
	{
		$this->load->database('default');
		$this->load->helper('url');
		$this->load->view('gallery/default');
	}

    public function upload()
    {
		$this->load->database('default');
		$this->load->helper('url');
        $this->load->view('gallery/upload');
    }

	public function view()
	{
		$this->load->database('default');
		$this->load->helper('url');
		$this->load->view('gallery/view');
	}

}
