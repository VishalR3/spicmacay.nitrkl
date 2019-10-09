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
    <link href="<?php echo base_url() ;?>assets/css/full-slider.css" rel="stylesheet">
    <link href="<?php echo base_url() ;?>assets/css/spic.css" rel="stylesheet">
    <link href="<?php echo base_url() ;?>assets/vendor/animate/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ;?>assets/vendor/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ;?>assets/vendor/owlcarousel/assets/owl.theme.default.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">
    <script src="<?php echo base_url() ;?>assets/js/spic1.js"></script>
    <script src="<?php echo base_url() ;?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ;?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ;?>assets/js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script src="<?php echo base_url() ;?>assets/vendor/owlcarousel/owl.carousel.min.js"></script>
    <style>
        .wrapper{
            position:fixed;
            width:100%;
            height:100%;
        }
            .login_card{
                background-color:#fefefe;
                padding:10px 20px;
                border:1px solid black;
                box-shadow:0 4px 8px 0 rgba(0,0,0,0.5);
                margin-left:auto;
                margin-right:auto;
            }
            @media only screen and (max-width:500px){
                .login_card{
                    width:95%;
                    max-width:320px;
                    margin-top:20%;
                }
            }
            @media only screen and (min-width:501px){
                .login_card{
                    position:absolute;
                    top:50%;
                    left:50%;
                    transform:translate(-50%,-50%);
                }
            }
        </style>

  </head>
  <body style="background-image:url('<?php echo base_url() ;?>assets/img/pat.jpg');background-repeat :repeat;background-size:20%; ">
<div class="wrapper">
    <div class="text-center">
        <h2>SPICMACAY</h2>
        <p>Society for the Promotion of Indian Classical Music Amongst Youth</p>
        <br>
        <h2>Adminstrators</h2>
        
        <div style="padding:2% 10% 10%;">
        <div class="login_card">
            <h3>Login</h3>
            <br>
<?php if($this->session->flashdata('login_stat')){ ?> <p style="text-align: center;padding:10px;background-color:red;color:white;"><?php echo $this->session->flashdata('login_stat'); ?></p><?php } ?>
                                        <form class="form" method="POST" action="<?php echo base_url(); ?>admin/login">
                                                <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fa fa-user"></i>
                                                        </span></div>
                                            <input type="text" class="form-control" name="username" placeholder="Username"></div><br>
                                            <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-lock"></i>
                                                    </span></div>
                                            <input type="password" name="password" class="form-control" placeholder="password"></div>
                                            <br><br>
                                            <input type="submit" class="btn btn-primary" value="Log In" class="form-control" style="width:100%;">
                                        </form>
                </div>
        </div>
        
        


    </div>
</div>
</body>
</html>