<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
    <?php $this->load->view('require/head'); ?>
    <body>
		<?php $this->load->view('require/nav'); ?>
        <div class="row pt-5">
            <div class="col-md-4"></div>
            <div class="col-md-4 ml-5 mr-5">
            <?php
                if (isset($_SESSION['loggedin'])) {
                    echo '<h3>Hey, Silly! You\'re already logged in, how did you get here?<h3>';
                } else {
                    echo '<form method="post" action="' . base_url() . 'login/auth">';
                    if ($this->uri->segment(2) == "inserted") {
                        echo '<h1>You have successfully signed up!</h1>';
                    } else {
                        echo '<h3>Login:</h3>';
                        echo '<fieldset>';
                        echo '<div class="form-group">';
                        echo '<label for="username">Username</label>';
                        echo '<input type="text" name="username" class="form-control" placeholder="" value="' . set_value('username') . '">';
                        echo '<span class="text-danger">' . form_error("username") . '</span>';
                        echo '</div>';
                        echo '<div class="form-group">';
                        echo '<label for="password">Password</label>';
                        echo '<input type="password" name="password" class="form-control" placeholder="" value="' . set_value('password') . '">';
                        echo '<span class="text-danger">' . form_error("password") . '</span>';
                        echo '</div>';
                        echo '<div class="form-group">';
                        echo '<input type="submit" value="Submit" class="btn btn-info" />';
                        echo '<span class="text-danger ml-2">' . $this->session->flashdata("error") . '</span>';
                        echo '</fieldset>';
                        echo '</form>';
                    }
                }
            ?>

            </div>
            <div class="col-md-4"></div>
        </div>
	</body>
	<?php $this->load->view('require/footer.php'); ?>
	</html>