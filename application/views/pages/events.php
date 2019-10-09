   <!--Main Body --->
      <div class="container">
         <?php foreach($posts as $post) : ?>
            <a data-toggle="modal" data-target="#event_data_<?php echo $post['id'] ?>" style="text-decoration:none;color:black;"><div class="eve_card row wow bounceInUp">
               <div class="col-sm-3">
                  <img src="<?php echo base_url() ; ?>assets/img/posts/<?php echo $post['post_image']; ?>" class="img-fluid">
               </div>
               <div class="col-sm-9">
                  <h6><?php echo $post['title']; ?></h6>
                  <h5><small>by : </small><strong><?php echo $post['artist']; ?></strong></h5>
                  <p><?php echo word_limiter($post['body'],40); ?></p>
               </div>
            </div></a>
            <!-- Modal -->
            <div class="modal fade" id="event_data_<?php echo $post['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $post['title'];?>" aria-hidden="true">
               <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                  <div class="modal-content">
                     <div class="modal-header">
                           <h5 class="modal-title" id="<?php echo $post['title'];?>"><?php echo $post['title']; ?></h5>
        
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                          </button>
                     </div>
                     <div class="modal-body">
                        <div class="text-center">
                           <img src="<?php echo base_url() ; ?>assets/img/posts/<?php echo $post['post_image']; ?>" class="img-fluid">
                        </div>
                        <div>
                           <h4><small>by : </small><strong><?php echo $post['artist']; ?></strong></h4>
                           <p><?php echo $post['body']; ?></p>
                        </div>
                  </div>
               </div>
            </div>  
         </div>
         <?php endforeach ; ?>

      </div>