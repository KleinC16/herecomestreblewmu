<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
    <?php $this->load->view('require/head'); ?>
    <body>
        <a name="home" ></a>
        <?php $this->load->view('require/nav'); ?>
        <script>
        function preview() {
            console.log('test');
            var image = document.getElementById("userfile").value;
            var position = document.getElementById("position").value;
            var classification = document.getElementById("classification").value;
            var major = document.getElementById("major").value;
            var description = document.getElementById("description").value;

            var html = ("<div class=\"row\">" + "<div class=\"col-7\">" + "<div class=\"new_card\">" + "<img src=\"<?php echo base_url() ?>assets/images/index.png\" alt=\"\" style=\"width:100%;\">"
                            + "<div class=\"container\">" + "<h2>Firstname Lastname</h2>" + "<p class=\"title\">" + position + "</p>"
                            + "<p class=\"title\">" + classification + "</p>" + "<p class=\"title\">" + major + "</p>" + "<p>" + description + "</p>"
                             + "</div>" + "</div>" + "</div>" + "</div>" + "</div>");

            document.getElementById("preview").innerHTML = html;
        }
        </script>
        <?php
            if($this->session->userdata('username') == FALSE) {
                $this->load->view('errors/no_access');
            } else {
                echo '<h2 class="text-center">You haven\'t uploaded your profile information yet.</h2>';
                echo '<h2 class="text-center">As soon as you do, we\'ll add you to the front page!</h2>';
                echo '<div class="row">';
                echo '<div class="col-md-2"></div>';
                echo '<div class="col-md-4 ml-5">';
                echo '<h4>Form</h4>';
                echo '<form method="post" action="' . base_url() . 'Profile/add_form_validation" id="upload_form" enctype="multipart/form-data">';
                echo '<fieldset>';
                echo '<div class="form-group">';
                echo '<label for="image">Choose an Image: </label><br>';
                echo '<input type="file" name="userfile" id="userfile">';
                echo '<span class="text-danger">' . form_error("userfile") . '</span>';
                echo '</div>';
                echo '<div class="form-group">';
                echo '<label for="position">If you\'re on the e-board, upload your position title:</label>';
                echo '<input type="text" name="position" class="form-control" placeholder="" value="' . set_value('position') . '" id="position">';
                echo '<span class="text-danger">' . form_error("position") . '</span>';
                echo '</div>';
                echo '<div class="form-group">';
                echo '<label for="classification">What part do you sing?</label>';
                echo '<input type="text" name="classification" class="form-control" placeholder="" value="' . set_value('classification') . '" id="classification">';
                echo '<span class="text-danger">' . form_error("classification") . '</span>';
                echo '</div>';
                echo '<div class="form-group">';
                echo '<label for="major">What is your major?</label>';
                echo '<input type="text" name="major" class="form-control" placeholder="" value="' . set_value('major') . '" id="major">';
                echo '<span class="text-danger">' . form_error("major") . '</span>';
                echo '</div>';
                echo '<div class="form-group">';
                echo '<label for="description">Tell us about yourself:</label>';
                echo '<textarea name="description" class="form-control" rows="3" id="description">' . set_value('description') . '</textarea>';
                echo '<span class="text-danger">' . form_error("description") . '</span>';
                echo '</div>';
                echo '<div class="form-group">';
                echo '<input type="submit" value="Submit" class="btn btn-primary" />';
                echo '<button onclick="preview()" type="button" class="btn btn-secondary ml-2">Preview</button>';
                echo '</fieldset>';
                echo '</form>';
                echo '</div>';
                echo '<div class="col-md-4">';
                echo '<h4>Preview</h4>';
                echo '<div id="preview"></div>';
                echo '<div class="col-md-2"></div>';
                echo '</div>';
                echo '<script>';
            }
         ?>

        <?php $this->load->view('require/footer.php'); ?>
    </body>
</html>
