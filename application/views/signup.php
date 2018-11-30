<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
    <?php $this->load->view('require/head'); ?>
    <body>
		<?php $this->load->view('require/nav'); ?>
        <div class="row pt-5">
            <div class="col-md-4"></div>
            <div class="col-md-4 ml-4 mr-4">
            <?php
                if (isset($_SESSION['loggedin'])) {
                    echo '<h3>Hey, Silly! You\'re already logged in, how did you get here?<h3>';
                } else {
                    echo '<form method="post" action="/' . base_url() . 'Signup/form_validation">';
                    if ($this->uri->segment(2) == "inserted") {
                        echo '<p>You have successfully signed up!</p>';
                    }
                    echo '<h3>Create your account</h3>';
                    echo '<fieldset>';
                    echo '<div class="form-group">';
                    echo '<label for="firstname">First name</label>';
                    echo '<input type="text" name="firstname" class="form-control" placeholder="" value="' . set_value('firstname') . '">';
                    echo '<span class="text-danger">' . form_error("firstname") . '</span>';
                    echo '</div>';
                    echo '<div class="form-group">';
                    echo '<label for="lastname">Last name</label>';
                    echo '<input type="text" name="lastname" class="form-control" placeholder="" value="' . set_value('lastname') . '">';
                    echo '<span class="text-danger">' . form_error("lastname") . '</span>';
                    echo '</div>';
                    echo '<div class="form-group">';
                    echo '<label for="email">Email address</label>';
                    echo '<input type="text" name="email" class="form-control" aria-describedby="emailHelp" placeholder="" value="' . set_value('email') . '">';
                    echo '<span class="text-danger">' . form_error("email") . '</span>';
                     echo '<small id="emailHelp" class="form-text text-muted">We\'ll never share your email with anyone else.</small>';
                    echo '</div>';
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
                    echo '</fieldset>';
                    echo '</form>';
                }
            ?>

            </div>
            <div class="col-md-4"></div>
        </div>
	</body>
</html>
