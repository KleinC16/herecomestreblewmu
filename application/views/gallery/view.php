<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<?php $this->load->view('require/head'); ?>
<body>
	<a name="home" ></a>
	<?php $this->load->view('require/nav'); ?>
	<div class="gallery-default-container">

		<div class="col-md-10">
			<div class="row">

				<div class="col-md-8">
					<img class="img-responsive" src="<?php echo base_url();?>assets/images/bongo-cat.svg"
					alt="bongo-cat"/>
					<p class="description">This is description</p>
				</div>

				<div class="col-md-4">
					<h2>Title</h2>
					<div class="panel panel-default">
						<div class="panel-body">
							<ul class="details-list">
								<li>By: <a href="#">User</a></li>
								<li>Uploaded on "timestamp"</li>
							</ul>
						</div>
					</div>
					<h4>Tags</h4>
					<div class="panel panel-default">
						<div class="panel-body" id="tags">
							<span class="label labe-default">This is a tag</span>
						</div>
					</div>
				</div>

			</div>
		</div>

	</div>
	
	<?php $this->load->view('require/footer.php'); ?>
</body>
</html>