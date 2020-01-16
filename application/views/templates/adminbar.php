<style>
    #admin-menu {
        background-color: yellow;
        padding: 20px;

    }

    h3 {
        color: black;
    }

    .holder {
        background-color: #eee;
        max-height: 600px;
        overflow: scroll;
    }

    .post {
        padding: 10px;
    }

    .post:nth-child(odd) {
        background-color: #ddd;
    }

    #Up_eve {
        margin-top: 10px;
        padding: 20px;
        border: 2px solid black;
    }

    section {
        margin: 10px 0;
    }
</style>


<?php
if ($this->session->userdata('role') >= '1') { ?>

    <div class="container text-left text-dark">
        <div class="row">
            <div class="col-sm-3" id="adminbar">
                <div id="admin-menu">
                    <h3>Admin Panel</h3>
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>create">Create Event Post</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>admin#posts">Edit/Delete Posts</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>admin#Up_eve">Upcoming Event</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>gallery_pics">Gallery Pics</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>admin#team_pic">Team Photo</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>admin#featured">Featured Posts</a></li>
                        <?php if ($this->session->userdata('role') >= '3') { ?>
                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>feedback">View feedbacks</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>register">Register New Admin</a></li><?php } ?>
                        <?php if ($this->session->userdata('role') >= '4') { ?>
                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>add_admin">Add Admin</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="col-sm-9">
<?php } ?>