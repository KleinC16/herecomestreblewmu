<?php

class Profile_model extends CI_Model
{

    function get_user_info($username)
    {
        $query = $this->db->query("SELECT * FROM bios WHERE username = '" . $username . "'");

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
        $query = $this->db->query("SELECT * FROM bios WHERE username = '" . $username . "'");

        $complete = array("complete"=>"1");

        if ($query->num_rows() > 0) {
	    // the user wants to update their bios information
	    $this->db->query("UPDATE bios
				SET complete = '1'
				WHERE username = '" . $username . "'");
	    //$this->db->where("username", $username);
	    //$this->db->update("bios", $data);
	    $this->db->query("UPDATE bios
				SET username = '" . $data["username"] . "', image = '" . $data["image"] . "', position = '" . $data["position"] . "', classification = '" . $data["classification"] . "', major = '" . $data["major"] . "', description = '" . $data["description"] . "'			
				WHERE username = '" . $username . "'");
	    if ($data["position"] == NULL) {
		$this->db->query("UPDATE bios
					SET position = NULL
					WHERE username = '" . $username . "'");
	    }
            //$this->db->where("username", $username);
	    //$this->db->update("bios", $complete);
	} else {
	    $this->db->insert("bios", $data);
            $this->db->query("UPDATE bios SET complete = '1' WHERE username = '" . $username . "'");
        }
    }

    function get_user_posts($username) {

    }

}

?>
