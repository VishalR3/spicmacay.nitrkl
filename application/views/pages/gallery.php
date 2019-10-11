<div class="container">
        <div class="gallery" id="gallery">
                <?php foreach($images as $image) : ?>
                    <a href="<?php echo base_url(); ?>assets/img/gallery/<?php echo $image['image']; ?>" data-fancybox="gallery" title="<?php echo $image['caption']; ?>">
                        <img src="<?php echo base_url(); ?>assets/img//gallery/<?php echo $image['image']; ?>" alt="<?php echo $image['caption']; ?>">
                </a>
                <?php endforeach ; ?>
                    <a href="<?php echo base_url(); ?>assets/img/inno2.jpg" data-fancybox="gallery">
                        <img src="<?php echo base_url(); ?>assets/img/inno2.jpg" >
                </a>
                    <a href="<?php echo base_url(); ?>assets/img/inno3.jpg" data-fancybox="gallery">
                        <img src="<?php echo base_url(); ?>assets/img/inno3.jpg" >
                </a>
                    <a href="<?php echo base_url(); ?>assets/img/inno4.jpg" data-fancybox="gallery">
                        <img src="<?php echo base_url(); ?>assets/img/inno4.jpg" >
                </a>
                    <a href="<?php echo base_url(); ?>assets/img/inno5.jpg" data-fancybox="gallery">
                        <img src="<?php echo base_url(); ?>assets/img/inno5.jpg" >
                </a>

                    <a href="<?php echo base_url(); ?>assets/img/manager.jpg" data-fancybox="gallery">
                        <img src="<?php echo base_url(); ?>assets/img/manager.jpg" >
                </a>

                    <a href="<?php echo base_url(); ?>assets/img/profile.jpg" data-fancybox="gallery">
                        <img src="<?php echo base_url(); ?>assets/img/profile.jpg" >
                </a>

                    <a href="<?php echo base_url(); ?>assets/img/shivam.jpg" data-fancybox="gallery">
                        <img src="<?php echo base_url(); ?>assets/img/shivam.jpg" >
                </a>

                    <a href="<?php echo base_url(); ?>assets/img/shivani.jpg" data-fancybox="gallery">
                        <img src="<?php echo base_url(); ?>assets/img/shivani.jpg" >
                </a>
       
</div>
                
               
               
               
                
               
                
              
               


        </div>