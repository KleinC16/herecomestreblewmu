<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <?php $this->load->view('require/head'); ?>
    <body>
        <?php $this->load->view('require/nav'); ?>
        <a name="home"></a>
        <?php
            $heroq = $this->db->query("SELECT website_name, header_image, home_description
            FROM configurations");
            $hero = $heroq->row();
            echo '<section>';
            echo '<div class="header">';
            echo '<div class="hero-image">';
            echo '<div class="row">';
            echo '<div class="col">';
            echo '<img src="assets/images/' . $hero->header_image . '.jpg" class="mw-60" style="visibility: hidden;"/>';
            echo '<div class="hero-text">';
            echo '<div>';
            echo '<h1>' . $hero->website_name . '</h1><br>';
            echo '<p class="lead" style="margin-right: 1em; margin-left: 1em;">' . $hero->home_description . '</p>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</section>';
        ?>

        <br><br>

        <!-- - - - Start Bios - - - -->
        <a name="members"><h1 class="text-center">Meet the Members</h1></a>
        <?php
            function write_members($member) {
                echo '<div class="col-lg-3 d-flex align-items-stretch justify-content-md-center">';
                echo '<div class="new_card">';
                echo '<img src="' . base_url() . $member->image . '" alt="" style="width:100%;">';
                echo '<div class="container">';
                echo '<h2>'. $member->firstname . ' ' . $member->lastname . '</h2>';
                if ($member->position !== NULL) {
                    echo '<p class="title">' . $member->position . '</p>';
                }
                echo '<p class="title">' . $member->classification . '</p>';
                echo '<p class="title">' . $member->major . '</p>';
                echo '<p>' . $member->description . '</p>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }

            function cmp ($o1, $o2) {
                return strcmp($o1->firstname, $o2->$firstname);
            }

            $executiveq = $this->db->query("SELECT firstname, lastname, position, classification, major, description, complete, image
                                            FROM bios
                                            JOIN users
                                            WHERE bios.username = users.username
                                            AND position IS NOT NULL");
            $numExecutives = $executiveq->num_rows();

            echo '<section id="cards">';
            echo '<h2><em>Executive Board</em></h2>';
            echo '<div class="row justify-content-md-center">';
            $i = 0;
            foreach($executiveq->result() as $row) {
                if ($row->position != NULL && $row->complete == 1) {
                    write_members($row);
                    echo '<script>console.log("' . $row->firstname . '")</script>';
                }
                $i++;
                if ($executiveq->num_rows() > 5) {
                    if ($i % 4 == 0) {
                        echo '</div>';
                        echo '<br>';
                        echo '<div class="row justify-content-md-center">';
                    }
                } elseif ($executiveq->num_rows() == 5) {
                    if ($i % 3 == 0) {
                        echo '</div>';
                        echo '<br>';
                        echo '<div class="row justify-content-md-center">';
                    }
                } elseif ($executiveq->num_rows() < 5) {
                    if ($i % 4 == 0) {
                        echo '</div>';
                        echo '<br>';
                        echo '<div class="row justify-content-md-center">';
                    }
                }
            }
            echo '</div>';

            $memberq = $this->db->query("SELECT firstname, lastname, position, classification, major, description, complete, image
                                            FROM bios
                                            JOIN users
                                            WHERE bios.username = users.username
                                            AND position IS NULL
                                            ORDER BY firstname");
            $numMembers = $memberq->num_rows();

            echo '<h2><em>Members</em></h2>';
            echo '<div class="row justify-content-md-center">';
            $i = 0;
            foreach($memberq->result() as $row) {
                if ($row->position == NULL && $row->complete == 1) {
                    write_members($row);
                }
                $i++;
                if ($i % 4 == 0) {
                    echo '</div>';
                    echo '<br>';
                    echo '<div class="row justify-content-md-center">';
                }
            }
            echo '</div>';
            echo '</section>'; // end cards section
        ?>
        <!-- - - - End Bios - - - -->

        <?php $this->load->view('require/footer.php'); ?>
    </body>
</html>
