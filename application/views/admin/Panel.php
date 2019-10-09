<?php
if ($this->session->userdata('role') >= '1') {?>
<section>
    <div id="posts" class="text-dark">
    <h4>Posts</h4>
    <div class="holder">
    <?php foreach($posts as $post) : ?>
    <div class="container post">
    <a class="news-link" href="<?php echo base_url(); ?>/posts/<?php echo $post['slug'] ; ?>" >
    <div class="data" style="color:black;">
                        
    <h5><?php echo $post['title'] ; ?></h5>
    <p class="text-muted"><small><i><?php echo $post['artist'] ; ?></i></small></p>
    <p><?php echo word_limiter($post['body'],12) ; ?></p>
    </div>
    <a class="btn btn-primary pull-left" href="<?php echo base_url(); ?>edit/<?php echo $post['slug']; ?>">Edit Post</a>
    <a class="btn btn-danger" href="<?php echo base_url(); ?>delete/<?php echo $post['slug']; ?>">Delete</a>
    

    </a>
    </div>
    <?php endforeach ; ?>
    
    </div>
    </section>

<section>
    <div id="Up_eve">
    <h4>Upcoming Event Details</h4>
    <div class="row" style="display:flexbox;border:1px solid black;margin-bottom:10px;">
        <div id="info" class="col-sm-6 text-center" style="transform : translateY(50%);margin-top:-50%;">
        
        <h6><i><?php echo $upcoming['artist'] ;?></i></h6><br><br>
        <b><?php echo $upcoming['title'] ;?></b>
        <p><?php echo $upcoming['date'] ;?></p>
        </div>
        <div class="col-sm-6">
        <img src="<?php echo base_url(); ?>assets/img/events/<?php echo $upcoming['post_image']; ?>" class="img-responsive img-fluid">
        </div>
    </div>
<?php echo form_open_multipart('panel/upcoming'); ?>
<div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="title" placeholder="Add Title">
  </div>
  <div class="form-group">
    <label>Artist</label>
    <input type="text" class="form-control" name="artist" placeholder="Add Artist's Name">
  </div>
  <div class="form-group">
    <label>Date</label>
    <input type="date" name="date">
  </div>
  <div class="form-group">
    <label>Upload Image :</label>
    <br>
	  <input type="file" name="userfile" size="20">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
    </section>

<section>
    <div id="team_pic" class="bg-grey">
    <h4>Team Photo</h4>
    <img src="<?php echo base_url(); ?>assets/img/<?php echo $team_image['team_image']; ?>" class="img-fluid">
    <?php echo form_open_multipart('panel/team'); ?>
    <div class="form-group">
        <label>Upload Image :</label>
        <br>
	    <input type="file" name="userfile" size="20">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
</section>




</div>
<?php } ?>



