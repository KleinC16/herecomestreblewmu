<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<?php $this->load->view('require/head'); ?>
<body>
	<a name="home" ></a>
	<?php $this->load->view('require/nav'); ?>
	<div class="upload-container">
		<h1><strong>Upload and share your image.</strong></h1>

		<form action ="upload.php" method="post" enctype="multipart/form-data">
			Select an image to upload:
			<input type="file" name="fileToUpload" id="fileToUpload">
			<input type="submit" value="Upload Image" name="submit">

		</form>
	</div>
	<?php $this->load->view('require/footer.php'); ?>
</body>
</html>
