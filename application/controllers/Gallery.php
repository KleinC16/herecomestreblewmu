<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

	public function index()
	{
		$this->load->view('gallery/default');
	}

    public function upload()
    {
        $this->load->view('gallery/upload');
    }

	public function upload_form() {
		$this->load->library('form_validation');
		if (empty($_FILES['userfile']['name'])) {
			$this->form_validation->set_rules('userfile', 'image', 'required|max_length[256]|is_unique[gallery.post_image]');
		}
		$this->form_validation->set_rules('post_title', 'title', 'alpha|max_length[64]');
		$this->form_validation->set_rules('post_description', 'description', 'required|max_length[512]');
		$this->form_validation->set_rules('post_tags', 'tags', 'max_length[64]');

		if ($this->form_validation->run() == TRUE) { // return true if the rules applied successfully
			// true
			$username = $this->session->userdata('username');
			$maxid = $this->db->query('SELECT MAX(gid) AS `maxid` FROM `gallery`')->row()->maxid;
			$newname = $maxid + 1;
			if(isset($_FILES['userfile']['name'])) {
				$config['file_name'] = ($newname);
				$config['upload_path'] = "./assets/images/gallery/";
				$config['allowed_types'] = "jpg|jpeg|png";

				$this->load->library('upload', $config);
				if ($this->upload->do_upload()) {
					$data = $this->upload->data();
					echo $data;
				}
				$this->load->model("gallery_model");
				$filename = $_FILES['userfile']['name'];
				$ext = end((explode(".", $filename)));
				$newname = ($newname . '.' . $ext);
				$image_path = ("assets/images/gallery/" . $newname); // . $_FILES['userfile']['name']
				$data = array(
					"post_image"=>$image_path,
					"post_title"=>$this->input->post("post_title"),
					"post_author"=>$username,
					"post_description"=>$this->input->post("post_description"),
					"post_tags"=>$this->input->post("post_tags"),
					"post_date"=>date("Y-m-d h:i:s")
				);

				$this->gallery_model->insert_to_gallery($data);
				redirect(base_url() . 'gallery');
			} else {
				echo 'FAILURE';
			}
		} else {
			// false
			$this->upload_form();
		}
	}

	public function add_comment() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('comment', 'comment', 'required|max_length[256]');
		if ($this->form_validation->run() == TRUE) { // return true if the rules applied successfully
			$username = $this->session->userdata('username');
			$this->load->model("gallery_model");
			$data = array(
				"comment"=>$this->input->post("comment"),
				"gid"=>$_SESSION['gid'],
				"username"=>$username
			);

			$this->gallery_model->add_post_comment($data);
			redirect(base_url() . 'gallery/view/?gid=' . $_SESSION['gid']);
		}

	}

	public function like() {
		$this->db->where('gid = ' . '\'' . $_SESSION['gid'] . '\'');
		$this->db->set('post_likes', 'post_likes+1', FALSE);
		$this->db->update('gallery');
		redirect(base_url() . 'gallery/view/?gid=' . $_SESSION['gid']);

	}

	public function dislike() {
		$this->db->where('gid = ' . '\'' . $_SESSION['gid'] . '\'');
		$this->db->set('post_dislikes', 'post_dislikes+1', FALSE);
		$this->db->update('gallery');
		redirect(base_url() . 'gallery/view/?gid=' . $_SESSION['gid']);
	}

	public function favorite() {
		$username = $this->session->userdata('username');
		$this->load->model("gallery_model");
		$this->db->select("id");
		$this->db->where('username = ' . '\'' . $username . '\'');
		$query = $this->db->get('users');
		foreach ($query->result() as $row) {
			$uid = $row->id;
		}
		$data = array(
			"gid"=>$_SESSION['gid'],
			"uid"=>$uid
		);

		$this->gallery_model->add_to_favorites($data);
		redirect(base_url() . 'gallery/view/?gid=' . $_SESSION['gid']);

	}

	public function view()
	{
		$this->load->view('gallery/view');
	}

}
