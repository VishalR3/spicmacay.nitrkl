 <style>
    .caption{
      position:relative;
      background-color:rgba(0,0,0,0.8);
      color:white;
      padding:5px;
      z-index:500;
      width:100%;
      /* height:50%;
      transform:translateY(50%); */
    }
 </style>
 <!--Body-->
        <div class="container text-center">
          <!--Slider Begins-->
          <div class="container" id="slider">
            <div class="carousel slide" data-ride="carousel" id="myslide">
                <ol class="carousel-indicators">
                    <li data-target="#myslide" data-slide-to="0" class="active"></li>
                    <li data-target="#myslide" data-slide-to="1"></li>
                    <li data-target="#myslide" data-slide-to="2"></li>
                    <li data-target="#myslide" data-slide-to="3"></li>

                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?php echo base_url() ;?>/assets/img/teejanbai.jpg" >
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo base_url() ;?>/assets/img/inno1_slide.jpg" >
                    </div>
                    <div class="carousel-item">
                            <img src="<?php echo base_url() ;?>/assets/img/inno2_slide.jpg">
                            
                    </div>
                    <div class="carousel-item">
                            <img src="<?php echo base_url() ;?>/assets/img/inno3_slide.jpg">
                            
                    </div>
                </div>
                <a class="carousel-control-prev" href="#myslide" data-slide="prev"><i class="carousel-control-prev-icon"></i></a>
                <a class="carousel-control-next" href="#myslide" data-slide="next"><i class="carousel-control-next-icon"></i></a>
            </div>
        </div>
          




          <!--Slider Ends-->
                    <div id="details" style="color:black;" class="wow bounceInUp">
                      <p id="test"></p>
      
                            <h1 class="one">SPICMACAY NIT Rourkela Chapter</h1>
                    
                            <p class=" text-justify">
                    India is a diverse and culturally abounding country which throughout the centuries has been a humble abode of the residents of the subcontinent who have accomplished a rich intellectual life in such fields as music, dance, fine arts and literature. In the hustle of development the cultural heritage of this magnanimous country has taken a backseat.
                    SPICMACAY is a pro bono autonomous youth movement which promotes the incorporeal aspects of Indian cultural heritage by fostering and nurturing the classical dance forms, folk music, crafts and other ethnic inclusiveness of the country. SPIC MACAY organises thousands of programs every year to enlighten our youth and make them au courant about the elegance and delicacy of our culture. 
                    SPICMACAY makes a conscious effort to influence our lives by making us imbibe the simplicity, grace and beauty of our culture and heritage thereby leading a meaningful and enhanced life.</p>
                    
                    <p class=" text-justify">Since the Inception……to the present...<a href="about.php">Read More</a>.</p>    
                      </div>
                    <div id="up_events" class="text-dark text-center">
                      <br>
                      <hr>
                      <h3>UPCOMING EVENTS</h3>
                      <div class="col-lg-6 order-2 card-2">
                        <img src="<?php echo base_url(); ?>assets/img/events/<?php echo $upcoming['post_image']; ?>" style="width:100%;">
                      </div>
                          <button class="btn" id="share_btn">Share</button>
                    </div>
                    
        <hr>
        <h3 style="color:black;">OUR TEAM</h3>
        <img class="wow bounceInUp"src="<?php echo base_url(); ?>assets/img/<?php echo $team_image['team_image']; ?>" width="100%" height="100%" alt="SPICMACAY Team">
        <hr>

        </div>
