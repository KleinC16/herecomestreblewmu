<?php

class signup_model extends CI_Model
{

    function insert_data($data)
    {
        $this->db->insert("users", $data);
        // INSERT INTO users (firstname, lastname, email, username, password) VALUES (...)
    }
} ?>
