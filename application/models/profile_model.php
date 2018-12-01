<?php

class profile_model extends CI_Model
{

    function get_user_info($username)
    {
        $this->db->where('username', $username);
        $query = $this->db->get('bios');

        //SELECT * FROM bios WHERE username = '$username'

        if ($query->num_rows() > 0) {
            // we found a user!
            return $query;
        } else {
            // user entered incorrect username and password.
            return false;
        }
    }

}

?>
