<nav class="navbar navbar-expand-lg navbar-dark bg-dark behind" id="behind">
    <a class="navbar-brand" href="<?php echo base_url();?>main">Here Comes Treble</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>main#home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>main#members">Members</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>gallery">Gallery</a>
            </li>
        </ul>
        <?php
            if($this->session->userdata('username') == FALSE){
                echo '<ul class="navbar-nav float-sm-right">';
                echo '<li class="nav-item">';
                echo '<a class="nav-link" href="' . base_url() . 'login" id="trigger">login</a>';
                echo '</li>';
                echo '<li class="nav-item">';
                echo '<a class="nav-link" href=' . base_url() . 'signup>sign up</a>';
                echo '</li>';
                echo '</ul>';
            } else {
                echo '<ul class="navbar-nav float-sm-right">';
                echo '<li class="nav-item">';
                echo '<a class="nav-link" href="' . base_url() . 'login/logout">log out</a>';
                echo '</li>';
                echo '</ul>';
            }
        ?>
    </div>
</nav>

<!-- Modal -->
<h1 style="padding-bottom:48px;"></h1>
