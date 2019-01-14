<?php

class Auth_model extends CI_Model
{

    function can_login($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('users');

        //SELECT * FROM users WHERE username = '$username' AND password = '$password'

        if ($query->num_rows() > 0) {
            // we found a user!
            return true;
        } else {
            // user entered incorrect username and password.
            return false;
        }
    }

    function is_bios_complete($username) {
        $this->db->where('username', $username);
        $this->db->where('complete', 1); // so they have already completed their bios..
        $query = $this->db->get('bios');

        if ($query->num_rows() > 0) {
            // we found a user
            return true;
        } else {
            return false;
        }

    }
}

?>
