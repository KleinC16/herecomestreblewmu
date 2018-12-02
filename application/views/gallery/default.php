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
			$this->db->select("gallery.gid,gallery.post_title,gallery.post_date,gallery.post_author,gallery.post_tags,gallery.post_likes,gallery.post_dislikes,gallery.post_image,bios.image");
			$this->db->from("gallery");
			$this->db->join("bios", "bios.username = gallery.post_author");
			$query = $this->db->get();
			foreach ($query->result() as $row)
			{
				echo '<div class="gallery-default-container">';
				echo '<div class="card-deck">';
				echo '<div class="Instagram-card">';
				echo '<div class="Instagram-card-header mb-4">';
				echo '<img src="' . base_url() . $row->image . '"" class="Instagram-card-user-image">';
				echo '<a class="Instagram-card-user-name" href="">' . $row->post_author . '</a>';
				//echo '<div class="Instagram-card-time"> 1 hour ago </div>';
				echo '</div>';
				echo '<div class="Instagram-card-image">';
				echo '<img src="' . base_url() . $row->post_image . '" height=600px/>';
				echo '</div>';
				echo '<div class="Instagram-card-content">';
				echo '<p class="Likes">' . $row->post_likes . ' likes</p>';
				echo '<p class="Dislikes">' . $row->post_dislikes . ' dislikes</p>';
				echo '<p><a class="Instagram-card-content-user">';
				echo '<href="#">username</a>';
				echo 'caption <a class="hashtag" href="#">#This is a hashtag</a></p>';
				echo '<p class="comments"> see 12 more comments </p>';
				echo '<br><a class="user-comment" href="#">username2</a> Hello</br>';
				echo '<hr>';
				echo '</div>';
				echo '<div class="Instagram-card-footer">';
				echo '<div class="likes-dislikes">';
				echo '<a class="fa fa-arrow-up" href="#"></i></a>';
				echo '<a class="fa fa-arrow-down" href="#"></i></a>';
				echo '</div>';
				echo '<a class="footer-action-icons"href="#"><i class="fa fa-heart-o"></i></a>';
				echo '<input class="comments-input" type="text" placeholder="Add a comment..."/>';
				echo '<a class="footer-action-icons"href="#"><i class="fa fa-ellipsis-h"></i></a>';
				echo '</div>';
				echo '</div>';
				echo '</div>';
				echo '</div>';
			}
		 ?>

		<div class="gallery-default-container">
		<div class="card-deck">
		<div class="Instagram-card">
		<div class="Instagram-card-header">
		<img src="<?php echo base_url();?>assets/images/index.png"class="Instagram-card-user-image">
		<a class="Instagram-card-user-name" href=""> username </a>
		<div class="Instagram-card-time"> 1 hour ago </div>
		</div>
		<div class="Instagram-card-image">
		<img src= "<?php echo base_url();?>assets/images/bongo-cat.svg" height=600px/>
		</div>
		<div class="Instagram-card-content">
		<p class="Likes">2,568,990 likes</p>
		<p><a class="Instagram-card-content-user">
		<href="#">username</a>
		caption <a class="hashtag" href="#">#This is a hashtag</a></p>
		<p class="comments"> see 12 more comments </p>
		<br><a class="user-comment" href="#">username2</a> Hello</br>
		<hr>
		</div>
		<div class="Instagram-card-footer">
		<div class="likes-dislikes">
		<a class="fa fa-arrow-up" href="#"></i></a>
		<a class="fa fa-arrow-down" href="#"></i></a>
		</div>
		<a class="footer-action-icons"href="#"><i class="fa fa-heart-o"></i></a>
		<input class="comments-input" type="text" placeholder="Add a comment..."/>
		<a class="footer-action-icons"href="#"><i class="fa fa-ellipsis-h"></i></a>
		</div>
		</div>
		</div>
		</div>

		<?php $this->load->view('require/footer.php'); ?>
	</body>
</html>
