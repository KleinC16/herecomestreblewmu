<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<?php $this->load->view('require/head'); ?>
<body>
	<a name="home" ></a>
	<?php $this->load->view('require/nav'); ?>
	<div class="upload-container">
		<h1 class="text-center"><strong>Upload and share your image.</strong></h1>

		<?php
            if($this->session->userdata('username') == FALSE) {
                $this->load->view('errors/no_access');
            } else {
                echo '<div class="row">';
                echo '<div class="col-md-4"></div>';
                echo '<div class="col-md-4">';
                echo '<form method="post" action="' . base_url() . 'Gallery/upload_form" id="upload_form" enctype="multipart/form-data">';
                echo '<fieldset>';
                echo '<div class="form-group">';
                echo '<label for="post_image">Select an image to upload: </label><br>';
                echo '<input type="file" name="userfile" id="userfile">';
                echo '<span class="text-danger">' . form_error("userfile") . '</span>';
                echo '</div>';
                echo '<div class="form-group">';
                echo '<label for="post_title">Give it a title:</label>';
                echo '<input type="text" name="post_title" class="form-control" placeholder="" value="' . set_value('post_title') . '" id="post_title">';
                echo '<span class="text-danger">' . form_error("post_title") . '</span>';
                echo '</div>';
                echo '<div class="form-group">';
                echo '<label for="post_description">Give it a description:</label>';
				echo '<textarea name="post_description" class="form-control" rows="3" id="post_description">' . set_value('post_description') . '</textarea>';
                echo '<span class="text-danger">' . form_error("post_description") . '</span>';
                echo '</div>';
                echo '<div class="form-group">';
                echo '<label for="post_tags">Add tags (comma-separated):</label>';
                echo '<input type="text" name="post_tags" class="form-control" placeholder="" value="' . set_value('post_tags') . '" id="post_tags">';
                echo '<span class="text-danger">' . form_error("post_tags") . '</span>';
                echo '</div>';
                echo '<div class="form-group">';
                echo '<input type="submit" value="Submit" class="btn btn-primary" />';
                echo '</fieldset>';
                echo '</form>';
                echo '</div>';
                echo '<div class="col-md-4"></div>';
                echo '</div>';
            }
         ?>

	</div>
	<?php $this->load->view('require/footer.php'); ?>
</body>
</html>
