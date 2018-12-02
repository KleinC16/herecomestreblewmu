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

    function insert_bio($data, $username)
    {
        $this->db->where('username', $username);
        $query = $this->db->get('bios');

        $complete = array("complete"=>"1");

        if ($query->num_rows() > 0) {
            // the user wants to update their bios information
            $this->db->where("username", $username);
            $this->db->update("bios", $data);
            $this->db->where("username", $username);
            $this->db->update("bios", $complete);
        } else {
            $this->db->insert("bios", $data);
            $this->db->where("username", $username);
            $this->db->update("bios", $complete);
        }
    }

    function get_user_posts($username) {

    }

}

?>
