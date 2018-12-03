<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<?php $this->load->view('require/head'); ?>
<body>
	<a name="home" ></a>
	<?php $this->load->view('require/nav'); ?>
	<?php
		if (!(empty($_GET['gid']))) {
			$gid = $_GET['gid'];

			$this->db->select("gallery.gid,gallery.post_title,gallery.post_date,gallery.post_author,gallery.post_tags,gallery.post_description,gallery.post_likes,gallery.post_dislikes,gallery.post_image,gallery.post_views,bios.image");
			$this->db->from("gallery");
			$this->db->where("gallery.gid = " . $gid);
			$this->db->join("bios", "bios.username = gallery.post_author");
			$this->db->order_by("post_date", "desc");
			$query = $this->db->get();
			foreach ($query->result() as $row)
			{
				$views = $row->post_views;
				$this->db->where("gid = " . $gid);
				$this->db->set('post_views', 'post_views+1', FALSE);
				$this->db->update('gallery');
				echo '<div class="gallery-default-container">';
				echo '<div class="col-md-10">';
				echo '<div class="row">';
				echo '<div class="col-md-8">';
				echo '<img class="img-responsive" src="' . base_url() . $row->post_image . '"/>';
				echo '<p class="description">' , $row->post_description . '</p>';
				echo '</div>';
				echo '<div class="col-md-4">';
				echo '<h2>' . $row->post_title . '</h2>';
				echo '<div class="panel panel-default">';
				echo '<div class="panel-body">';
				echo '<ul class="details-list">';
				echo '<li>By: ' . $row->post_author . '</li>';
				echo '<li>Uploaded on ' . $row->post_date . '</li>';
				echo '</ul>';
				echo '</div>';
				echo '</div>';
				echo '<h4>Tags</h4>';
				echo '<div class="panel panel-default">';
				echo '<div class="panel-body" id="tags">';
				$tagArray = explode(',', $row->post_tags);
				foreach ($tagArray as $thetag) {
					echo '#' . $thetag . ' ';
				}
				echo '<h4> Number of views: ' . $row->post_views . '</h4>';
				echo '<p class="Likes">' . $row->post_likes . ' likes</p>';
				echo '<p class="Dislikes">' . $row->post_dislikes . ' dislikes</p>';
				// echo '<span class="label labe-default">This is a tag</span>';

				echo '<form method="post" action="' . base_url() . 'Gallery/add_comment" id="upload_form" enctype="multipart/form-data">';
                echo '<fieldset>';
				echo '<div class="form-group">';
				echo '<label for="description">Add a comment:</label>';
				echo '<textarea name="comment" class="form-control" rows="3" id="description">' . set_value('description') . '</textarea>';
				echo '<span class="text-danger">' . form_error("comment") . '</span>';
				echo '</div>';
				echo '<div class="form-group">';
				$_SESSION['gid'] = $gid;
				if($this->session->userdata('username') == TRUE) {
					echo '<input type="submit" value="Submit" class="btn btn-primary" />';
				} else {
					echo 'Please sign in to leave a comment';
				}
				echo '</fieldset>';
				echo '</form>';

				echo '<form method="post" action="' . base_url() . 'Gallery/like" id="upload_form" enctype="multipart/form-data">';
                echo '<fieldset>';
				echo '<div class="form-group">';
				$_SESSION['gid'] = $gid;
				if($this->session->userdata('username') == TRUE) {
					echo '<input type="submit" value="like" class="btn btn-primary" />';
				} else {
					echo 'Please sign in to leave a like';
				}
				echo '</fieldset>';
				echo '</form>';

				echo '<form method="post" action="' . base_url() . 'Gallery/dislike" id="upload_form" enctype="multipart/form-data">';
                echo '<fieldset>';
				echo '<div class="form-group">';
				$_SESSION['gid'] = $gid;
				if($this->session->userdata('username') == TRUE) {
					echo '<input type="submit" value="dislike" class="btn btn-primary" />';
				} else {
					echo 'Please sign in to leave a dislike';
				}
				echo '</fieldset>';
				echo '</form>';

				echo '<form method="post" action="' . base_url() . 'Gallery/favorite" id="upload_form" enctype="multipart/form-data">';
				echo '<fieldset>';
				echo '<div class="form-group">';
				$_SESSION['gid'] = $gid;
				if($this->session->userdata('username') == TRUE) {
					echo '<input type="submit" value="favorite" class="btn btn-primary" />';
				} else {
					echo 'Please sign in to favorite';
				}
				echo '</fieldset>';
				echo '</form>';
				echo '</div>';
				echo '</div>';
				echo '</div>';
				echo '</div>';
				echo '</div>';
				echo '</div>';
				echo '</div>';
			}
		}
	?>

	<?php $this->load->view('require/footer.php'); ?>
</body>
</html>
