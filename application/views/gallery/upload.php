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
			<input type="file" name="fileToUpload" id="fileToUpload"><br><br>
			Give it a title:<br>
			<input type="text" name="title"><br><br>
			Give it a description:<br>
			<input type="text" name="description"><br><br>
			Add tags:<br>
			<input type="text" name="tags"><br><br>
			<input type="submit" value="Upload" name="submit">
		</form>

	</div>
	<?php $this->load->view('require/footer.php'); ?>
</body>
</html>