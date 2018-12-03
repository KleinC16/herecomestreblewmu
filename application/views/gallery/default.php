<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
	<?php $this->load->view('require/head'); ?>
	<body>
		<a name="home" ></a>
		<?php $this->load->view('require/nav'); ?>
		<?php $this->load->view('require/searchNav'); ?>

		<?php
			$this->db->select("gallery.gid,gallery.post_title,gallery.post_date,gallery.post_author,gallery.post_tags,gallery.post_description,gallery.post_likes,gallery.post_dislikes,gallery.post_image,bios.image");
			$this->db->from("gallery");
			$this->db->join("bios", "bios.username = gallery.post_author");
			$this->db->order_by("post_date", "desc");
			$query = $this->db->get();
			foreach ($query->result() as $row)
			{
				$gid = $row->gid;
				echo '<div class="gallery-default-container">';
				echo '<div class="card-deck">';
				echo '<div class="Instagram-card">';
				echo '<div class="Instagram-card-header mb-4">';
				echo '<img src="' . base_url() . $row->image . '"" class="Instagram-card-user-image">';
				echo '<a class="Instagram-card-user-name" href="">' . $row->post_author . '</a>';
				//echo '<div class="Instagram-card-time"> 1 hour ago </div>';
				echo '</div>';
				echo '<div class="Instagram-card-image">';
				echo '<img src="' . base_url() . $row->post_image . '"/>';
				echo '</div>';
				echo '<div class="Instagram-card-content">';
				echo '<p class="Likes">' . $row->post_likes . ' likes</p>';
				echo '<p class="Dislikes">' . $row->post_dislikes . ' dislikes</p>';
				echo '<p>' . $row->post_description . '</p>';
				$this->db->select('post_tags');
				$this->db->from('gallery');
				$this->db->where('gid = ' . $gid);
				$tagq = $this->db->get();
				foreach ($tagq->result() as $tags) {
					$tagArray = explode(',', $tags->post_tags);
					foreach ($tagArray as $thetag) {
						echo '#' . $thetag . ' ';
					}
				}
				echo '<p><a class="Instagram-card-content-user">';
				$this->db->select("gallery.gid,gallery_comments.comment,gallery_comments.username");
				$this->db->from("gallery");
				$this->db->where('gallery.gid = ' . $gid);
				$this->db->join("gallery_comments", "gallery_comments.gid = gallery.gid");
				$commentq = $this->db->get();
				foreach ($commentq->result() as $comm) {
					echo '<br><strong>' . $comm->username . '</strong> </a>' . $comm->comment . '</br>';
				}
				echo '<hr>';
				echo '</div>';
				echo '<div class="Instagram-card-footer">';
				echo '<a class="comments-input" href="' . base_url() . 'gallery/view/?gid=' . $gid . '">Add a comment...</a>';
				//echo '<a class="footer-action-icons"href="#"><i class="fa fa-ellipsis-h"></i></a>';
				echo '</div>';
				echo '</div>';
				echo '</div>';
				echo '</div>';
			}
		 ?>
		<?php $this->load->view('require/footer.php'); ?>
	</body>
</html>
