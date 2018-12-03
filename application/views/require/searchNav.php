<!-- <div class="topnav">

	<input type="text" class="search-box" autocapitalize="none" placeholder="Search" value="">
</div> -->
<?php
	echo '<form method="post" action="' . base_url() . 'Gallery/search" id="upload_form" enctype="multipart/form-data" class="topnav">';
	echo '<fieldset>';
	echo '<div class="row">';
	echo '<div class="col-4"></div>';
	echo '<div class="col-2">';
	echo '<div class="form-group">';
	echo '<input type="text" name="tag" class="search-box" autocapitalize="none" placeholder="Search" value="">';
	echo '</div>';
	echo '</div>';
	echo '<div class="col-2">';
	echo '<div class="form-group">';
	echo '<input type="submit" value="Submit" class="btn btn-primary" />';
	echo '</div>';
	echo '</div>';
	echo '<div class="col-4"></div>';
	echo '</div>';
	echo '</fieldset>';
	echo '</form>';
?>
