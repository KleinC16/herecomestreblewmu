<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
    <?php $this->load->view('require/head'); ?>
    <body>
        <a name="home" ></a>
        <?php $this->load->view('require/nav'); ?>
        <?php
            echo '<h2 class="text-center">You haven\'t uploaded your profile information yet.</h2>';
            echo '<h2 class="text-center">As soon as you do, we\'ll add you to the front page!</h2>';
         ?>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-4 ml-5">
            <h4>Form</h4>
            <form method="post" action="' . base_url() . 'Signup/form_validation">
            <fieldset>
            <div class="form-group">
            <label for="firstname">Choose an Image:</label>
            <input type="file" name="image">
            <!-- <span class="text-danger">' . form_error("firstname") . '</span> -->
            </div>
            <div class="form-group">
            <label for="lastname">If you're on the e-board, upload your position title:</label>
            <input type="text" name="position" class="form-control" placeholder="" value="' . set_value('position') . '">
            <!-- <span class="text-danger">' . form_error("position") . '</span> -->
            </div>
            <div class="form-group">
            <label for="email">What part do you sing?</label>
            <input type="text" name="classification" class="form-control" placeholder="" value="' . set_value('classification') . '">
            <!-- <span class="text-danger">' . form_error("classification") . '</span> -->
            </div>
            <div class="form-group">
            <label for="username">What is your major?</label>
            <input type="text" name="major" class="form-control" placeholder="" value="' . set_value('major') . '">
            <!-- <span class="text-danger">' . form_error("major") . '</span> -->
            </div>
            <div class="form-group">
            <label for="password">Tell us about yourself:</label>
            <textarea name="description" class="form-control" rows="3" placeholder="" value="' . set_value('description') . '"></textarea>
            <!-- <input type="password" name="description" class="form-control" placeholder="" value="' . set_value('description') . '"> -->
            <!-- <span class="text-danger">' . form_error("description") . '</span> -->
            </div>
            <div class="form-group">
            <input type="submit" value="Submit" class="btn btn-info" />
            </fieldset>
            </form>
            </div>
            <div class="col-md-4">
                <h4>Preview</h4>
                <div class="row">
                    <div class="col-7">
                        <div class="new_card">
                            <img src="<?php echo base_url() ?>assets/images/users/briana.klug.jpg" alt="" style="width:100%;">
                            <div class="container">
                                <h2>Briana Klug</h2>
                                <p class="title">position</p>
                                <p class="title">classification</p>
                                <p>description</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-2"></div>
        </div>

        <?php $this->load->view('require/footer.php'); ?>
    </body>
</html>
