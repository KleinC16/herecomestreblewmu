<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<?php $this->load->view('require/head'); ?>
<body>
	<a name="home" ></a>
	<?php $this->load->view('require/nav'); ?>
	<?php $this->load->view('require/searchNav'); ?>

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
						<a class="footer-action-icons"href="#"><i class="fa fa-heart-o"></i></a>
						<input class="comments-input" type="text" placeholder="Add a comment..."/>
						<a class="footer-action-icons"href="#"><i class="fa fa-ellipsis-h"></i></a>
					</div>
				</div>

			</div>
			<?php $this->load->view('require/footer.php'); ?>
		</body>
		</html>