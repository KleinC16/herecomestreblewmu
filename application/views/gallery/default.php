<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<<<<<<< HEAD
    <?php $this->load->view('require/head'); ?>
    <body>
        <a name="home" ></a>
        <?php $this->load->view('require/nav'); ?>
        <h1>Gallery Home</h1>
        <?php $this->load->view('require/footer.php'); ?>
    </body>
</html>
=======
<?php $this->load->view('require/head'); ?>
<body>
	<a name="home" ></a>
	<?php $this->load->view('require/nav'); ?>
	<div class="gallery-default-container">
		<h1 id="title"><strong>Default gallery</strong></h1>

		<div class="card-deck">
			<div class="card">
				<img class="card-img-top" src="/<?php echo base_url();?>assets/images/bongo-cat.jpg" alt="Card image cap">
				<div class="card-body">
					<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					<p class="card-text"><small class="text-muted">1 min ago</small></p>
				</div>
			</div>
			<div class="card">
				<img class="card-img-top" src="/<?php echo base_url();?>assets/images/bongo-cat.jpg" alt="Card image cap">
				<div class="card-body">
					<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
					<p class="card-text"><small class="text-muted">3 mins ago</small></p>
				</div>
			</div>
			<div class="card">
				<img class="card-img-top" src="/<?php echo base_url();?>assets/images/bongo-cat.jpg"
				alt="Card image cap">
				<div class="card-body">
					<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
					<p class="card-text"><small class="text-muted">7 mins ago</small></p>
				</div>
			</div>
		</div>

		<div class="card-deck">
			<div class="card">
				<img class="card-img-top" src="/<?php echo base_url();?>assets/images/bongo-cat.jpg" alt="Card image cap">
				<div class="card-body">
					<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					<p class="card-text"><small class="text-muted">9 mins ago</small></p>
				</div>
			</div>
			<div class="card">
				<img class="card-img-top" src="/<?php echo base_url();?>assets/images/bongo-cat.jpg" alt="Card image cap">
				<div class="card-body">
					<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
					<p class="card-text"><small class="text-muted">15 mins ago</small></p>
				</div>
			</div>
			<div class="card">
				<img class="card-img-top" src="/<?php echo base_url();?>assets/images/bongo-cat.jpg" alt="Card image cap">
				<div class="card-body">
					<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
					<p class="card-text"><small class="text-muted">30 mins ago</small></p>
				</div>
			</div>
		</div>

		<div class="Instagram-card">
			<div class="Instagram-card-header">
				<img src="https://scontent-mia1-2.cdninstagram.com/t51.2885-19/11351720_883119395071375_1326111195_a.jpg"class="Instagram-card-user-image">
				<a class="Instagram-card-user-name" href="#"> username </a>
				<div class="Instagram-card-time"> 1 hour ago </div>
			</div>

			<div class="Instagram-card-image">
				<img src= "https://scontent-mia1-2.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/16123953_1838454153060984_5963456318336401408_n.jpg" height=600px/>
			</div>

			<div class="Instagram-card-content">
				<p class="Likes">200 likes</p>
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
>>>>>>> 398793b69f05663eb033409a94e75d6546e7f9c1
