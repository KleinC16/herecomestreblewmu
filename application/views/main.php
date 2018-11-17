<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
    <body>
        <a name="home" ></a>
        <?php
            $heroq = $this->db->query("SELECT website_name, header_image, home_description
                                            FROM configurations");
            $hero = $heroq->row();
            echo '<div class="header" style="padding-top:48px;">';
            echo '<div class="hero-image">';
            echo '<div class="row h-75">';
            echo '<img src="assets/images/' . $hero->header_image . '.jpg" style="visibility: hidden; width: 100%;"/>';
            echo '<div class="hero-text">';
            echo '<h1>' . $hero->website_name . '</h1><br>';
            echo '<p class="lead" style="margin-right: 1em; margin-left: 1em;">' . $hero->home_description . '</p>';
            echo '<hr class="my-4" style="margin-left: 100px; margin-right: 100px;">';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        ?>

        <br><br>

        <!-- - - - Start Bios - - - -->
        <a name="members"><h1 class="text-center">Meet the Members</h1></a>
        <?php
            function display_executive($member) {
                $fullname = $member->firstname . " " . $member->lastname;
                echo '<div class="column col-md d-flex align-items-stretch">';
                echo '<div class="new_card">';
                echo '<img src="assets/images/users/' . strtolower($member->firstname) . '.' . strtolower($member->lastname) . '.jpg" alt="' . $fullname . '" style="width:100%;">';
                echo '<div class="container">';
                echo '<h2>' . $fullname . '</h2>';
                echo '<p class="title">' . $member->position . '</p>';
                echo '<p class="title">' . $member->classification . '</p>';
                echo '<p>' . $member->description . '</p>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }

            $executiveq = $this->db->query("SELECT firstname, lastname, position, classification, major, description
                                                FROM bios
                                                JOIN users
                                                WHERE bios.username = users.username
                                                AND position IS NOT NULL");
            $numExecutives = $executiveq->num_rows();

            echo '<section id="cards">';
            echo '<h2><em>Executive Board</em></h2>';

            if ($numExecutives == 5) {
                echo '<div class="row d-flex align-items-stretch">';
            } else {
                // put four in a row instead.
            }

            $i = 0;
            foreach($executiveq->result() as $row) {
                if ($row->position != NULL) {
                    display_executive($row);
                }
                $i++;
            }
            echo '</div>';

            echo '<h2><em>Members</em></h2>';

            echo '</section>';
         ?>

            <!-- <section id="cards">
                <h2><em>Members</em></h2>
                <div class="row">
                    <div class="column d-flex align-items-stretch">
                        <div class="new_card">
                            <img src="assets/images/users/img (132).jpg" alt="Niang Siam" style="width:100%;">
                            <div class="container">
                                <h2>Niang Siam</h2>
                                <p class="title">Alto</p>
                                <p class="title">Elementary Education</p>
                                <p>
                                    I'm a Sophomore at WMU. I'm originally from Myanmar (Burma).
                                    I love music, singing, and artistic people. In my free time I watch
                                    movies, hang out with babies, or do community service. I feel blessed
                                    to be part of this group because it made me feel more confident about
                                    myself. I'm glad I joined Here Comes Treble a capella group.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="column d-flex align-items-stretch">
                        <div class="new_card">
                            <img src="assets/images/users/img (227).jpg" alt="Ryan Loney" style="width:100%;">
                            <div class="container">
                                <h2>Ryan Loney</h2>
                                <p class="title">Beatboxer, Backup Dancer, Group Hypeman</p>
                                <p class="title">Sales and Business Marketing</p>
                                <p>
                                    I am from Kalamazoo, MI. My first love is sports, especially football
                                    and rugby, however I have discovered new passion since joining HCT
                                    as a Sophomore in the Winter of 2016. Outside of sports and HCT I love
                                    reading, watching movies, and giving all my love to my puppies.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="column d-flex align-items-stretch">
                        <div class="new_card">
                            <img src="assets/images/users/img (13).jpg" alt="Kylee Wheeler" style="width:100%;">
                            <div class="container">
                                <h2>Kylee Wheeler</h2>
                                <p class="title">Alto</p>
                                <p class="title">Secondary Education, English an Earth Science</p>
                                <p>
                                    I'm a Freshman at WMU! I've been singing as long as I can remember and
                                    I absolutely love being in Here Comes Treble! In the few weeks I've been here,
                                    HCT has been such a kind, welcoming family and I wouldn't want to be
                                    anywhere else. When I'm not singing, I love to read, listen to music,
                                    watch America's Next Top Model, and tend to my bees. I'm so happy to
                                    be part of a community filled with so much support and positivity.
                                    I love being a part of this group!!
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="column d-flex align-items-stretch">
                        <div class="new_card">
                            <img src="assets/images/users/img (28).jpg" alt="Chelsea Chavez" style="width:100%;">
                            <div class="container">
                                <h2>Chelsea Chavez</h2>
                                <p class="title">Alto</p>
                                <p class="title">Business and Communications</p>
                                <p>
                                    I love writing poetry, playing guitar, and crafting/upscaling clothing,
                                    jewelry, and furniture. I am 23 years old with an ever-growing passion
                                    for creating art including music. Here Comes Treble is my first experience
                                    in an a capella group and I am so thrilled to grow with everyone.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column d-flex align-items-stretch">
                    <div class="new_card">
                        <img src="assets/images/users/img (164).jpg" alt="Haley Schnoor" style="width:100%;">
                        <div class="container">
                            <h2>Haley Schnoor</h2>
                            <p class="title">Alto</p>
                            <p class="title">Special Education</p>
                            <p>
                                I'm a super super Senior after chaning my major, but I've finally found
                                my niche. I love music, dramatic TV shows, reading, Taco Bell, and
                                snuggling my cat. I am thrilled to be a part of HCT this year and I already
                                love it!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- - - - End Bios - - - -->

        <?php $this->load->view('require/footer.php'); ?>

        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script type="text/javascript" language="javascript" src="js/displayContactForm.js"></script> -->
    </body>
</html>
