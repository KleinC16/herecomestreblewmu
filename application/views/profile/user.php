<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
    <?php $this->load->view('require/head'); ?>
    <body>
        <a name="home" ></a>
        <?php $this->load->view('require/nav'); ?>
        <?php
        if ($this->session->userdata('username') == FALSE) {
            $this->load->view('errors/no_access');
        } else {
            $username = $this->session->userdata('username');

            $this->load->model("profile_model");

            $this->db->where('bios.username', $username);
            $this->db->join('users', 'bios.username = users.username');
            $query = $this->db->get('bios');

            // echo $query;

            foreach ($query->result() as $row)
            {
                echo '<h1>Welcome to your profile, ' . $row->firstname . ' ' . $row->lastname . '</h1>';
            }
        }

    ?>
        <?php $this->load->view('require/footer.php'); ?>
    </body>
</html>
