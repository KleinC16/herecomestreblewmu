<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
    <?php $this->load->view('require/head'); ?>
    <body>
        <a name="home" ></a>
        <?php $this->load->view('require/nav'); ?>
        <h1>We see you haven't uploaded your profile information yet. As soon as you do, we'll add you to the front page!</h1>
        <?php $this->load->view('require/footer.php'); ?>
    </body>
</html>
