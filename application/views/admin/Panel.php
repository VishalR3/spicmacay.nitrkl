<style>
    #admin-menu{
        background-color:yellow;
        padding:20px;

    }
    h3{
        color:black;
    }
    .holder{
    background-color:#eee;
    max-height:600px;
    overflow:scroll;
    }
    .post{
        padding:10px;
    }
    .post:nth-child(odd){
        background-color:#ddd;
    }
    #Up_eve{
        margin-top:10px;
        padding:20px;
        border:2px solid black;
    }
    section{
        margin:10px 0;
    }
</style>


<?php 
if ($this->session->userdata('role') == '1') {?>

<div class="container text-left text-dark">
<div class="row">
<div class="col-sm-3" id="adminbar">
    <div id="admin-menu">
<h3>Admin Panel</h3>
<ul class="navbar-nav">
    <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>create">Create Event Post</a></li>
    <li class="nav-item"><a class="nav-link" href="#posts">Edit/Delete Posts</a></li>
    <li class="nav-item"><a class="nav-link" href="#Up_eve">Upcoming Event</a></li>
    <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>gallery_pics">Gallery Pics</a></li>
    <li class="nav-item"><a class="nav-link" href="#team_pic">Team Photo</a></li>
    <li class="nav-item"><a class="nav-link" href="#featured">Featured Posts</a></li>
    <li class="nav-item"><a class="nav-link" href="#">Comment Approval</a></li>
    <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>add_admin">Add Admin</a></li>
</ul>
</div>
</div>
<div class="col-sm-9">
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



    











</div>
</div>





<?php } else {?>
<div class="container">
<h3 style="color:black;">Sorry, Only Adminstrators can access.</h3></div>
<?php } ?>