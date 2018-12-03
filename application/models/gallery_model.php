<?php

class gallery_model extends CI_Model
{

    function insert_to_gallery($data)
    {
        $this->db->insert("gallery", $data);
    }

    function add_post_comment($data) {
        $this->db->insert("gallery_comments", $data);
    }

    function add_to_favorites($data) {
        $this->db->insert("user_favorites", $data);
    }

}

?>
