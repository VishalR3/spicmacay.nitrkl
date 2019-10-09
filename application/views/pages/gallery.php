<style>
    .img{
        margin-top:20px;
    }
</style>
<div class="container">
        <div class="gallery" id="gallery">
                <div class="row" id="gal_row">
                <?php foreach($images as $image) : ?>
                    <div class="col-md-4 col-sm-6">
                    <a href="<?php echo base_url(); ?>assets/img/gallery/<?php echo $image['image']; ?>" data-fancybox="gallery">
                        <img src="<?php echo base_url(); ?>assets/img//gallery/<?php echo $image['image']; ?>" class="img">
                </a>
                    </div>
                <?php endforeach ; ?>
                    <div class="col-md-4 col-sm-6">
                    <a href="<?php echo base_url(); ?>assets/img/inno2.jpg" data-fancybox="gallery">
                        <img src="<?php echo base_url(); ?>assets/img/inno2.jpg" class="img">
                </a>
                    </div>
                    <div class="col-md-4 col-sm-6">
                    <a href="<?php echo base_url(); ?>assets/img/inno3.jpg" data-fancybox="gallery">
                        <img src="<?php echo base_url(); ?>assets/img/inno3.jpg" class="img">
                </a>
                    </div>
                    <div class="col-md-4 col-sm-6">
                    <a href="<?php echo base_url(); ?>assets/img/inno4.jpg" data-fancybox="gallery">
                        <img src="<?php echo base_url(); ?>assets/img/inno4.jpg" class="img">
                </a>
                    </div>
                    <div class="col-md-4 col-sm-6">
                    <a href="<?php echo base_url(); ?>assets/img/inno5.jpg" data-fancybox="gallery">
                        <img src="<?php echo base_url(); ?>assets/img/inno5.jpg" class="img">
                </a>
                    </div>
                    <div class="col-md-4 col-sm-6">
                    <a href="<?php echo base_url(); ?>assets/img/manager.jpg" data-fancybox="gallery">
                        <img src="<?php echo base_url(); ?>assets/img/manager.jpg" class="img">
                </a>
                    </div>
                    <div class="col-md-4 col-sm-6">
                    <a href="<?php echo base_url(); ?>assets/img/profile.jpg" data-fancybox="gallery">
                        <img src="<?php echo base_url(); ?>assets/img/profile.jpg" class="img">
                </a>
                    </div>
                    <div class="col-md-4 col-sm-6">
                    <a href="<?php echo base_url(); ?>assets/img/shivam.jpg" data-fancybox="gallery">
                        <img src="<?php echo base_url(); ?>assets/img/shivam.jpg" class="img">
                </a>
                    </div>
                    <div class="col-md-4 col-sm-6">
                    <a href="<?php echo base_url(); ?>assets/img/shivani.jpg" data-fancybox="gallery">
                        <img src="<?php echo base_url(); ?>assets/img/shivani.jpg" class="img">
                </a>
                    </div>
                </div>           
                </div>
                
               
               
               
                
               
                
              
               


        </div>