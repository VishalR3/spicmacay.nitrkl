<!DOCTYPE html>
<html lang="en">

  <head>
  

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SPICMACAY NIT Rourkela Chapter is a student chapter of SPICMACAY.">
    <meta name="author" content="Vishal Rana">
    <link rel="shortcut icon" href="<?php echo base_url() ;?>/assets/img/favicon.png" type="image/png">

    <title>Spic Macay, NIT Rourkela</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url() ;?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ;?>assets/vendor/fa/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ;?>assets/css/events.css" rel="stylesheet">
    <link href="<?php echo base_url() ;?>assets/css/spic.css" rel="stylesheet">
    <link href="<?php echo base_url() ;?>assets/vendor/animate/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ;?>assets/vendor/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ;?>assets/vendor/owlcarousel/assets/owl.theme.default.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">
    <script src="<?php echo base_url() ;?>assets/vendor/jquery/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Livvic&display=swap" rel="stylesheet">
    <script src="<?php echo base_url() ;?>assets/js/spic1.js"></script>
    <script src="<?php echo base_url() ;?>assets/js/spic.js"></script>
    <script src="<?php echo base_url() ;?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script src="<?php echo base_url() ;?>assets/vendor/owlcarousel/owl.carousel.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/12.4.0/classic/ckeditor.js"></script>

  </head>
  <body style="background-image:url('<?php echo base_url() ;?>assets/img/pat.jpg');">

    <!--Page Content-->
    <!--Header Begins-->
    <div class="texture container" style="box-shadow:0 3px 6px 0 rgba(0,0,0,0.5);background-color:white;" id="texture">
    <div id="logo" style="background-color:rgb(255,230,0);" class="text-center">
    <a class="logo" href="<?php echo base_url() ;?>" ><img src="<?php echo base_url() ;?>assets/img/Spic_logo.png" class="img-responsive" style="width:80%;" alt="logo"></a></div>
        <nav class="navbar navbar-expand-sm sticky-top" id="navb">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="fa fa-bars" style="color:black;"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="<?php echo base_url() ;?>">Home </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url() ;?>about">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url() ;?>events">Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url() ;?>gallery">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url() ;?>contacts">Contact Us</a>
                </li>
              </ul>
              
            </div>

            <div class="user_data">
              <?php if ($this->session->userdata('logged_in')) { ?>
                                  <div class="dropdown" style="z-index:1000;padding:.5rem 0;">
                                          <p class="pull-left nav-link"><strong><?php echo $this->session->userdata('username');?></strong></p>
                                          <button class="dropdown-toggle btn" data-toggle="dropdown" data-target="#user_drop"></button>
                                          <ul class="dropdown-menu" id="user_drop" style="z-index:1000";>
                                            <?php if($this->session->userdata('role')>= '1') { ?>
                                              <li class="nav-item"><a href=" <?php echo base_url(); ?>admin" style="text-transform: none;" class="nav-link">Admin Panel</a></li>
                                              <?php } ?>
                                              <li class="nav-item"><a href="<?php echo base_url(); ?>admin/logout" style="text-transform: none;" class="nav-link">Logout</a></li>
                                          </ul>
                                          </div>
                                        <?php } ?>
                
              </div>
        </nav>

        <!--Header Ends-->