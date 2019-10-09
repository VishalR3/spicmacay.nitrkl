<style>
  .existing img{
    max-width:300px;
    height:auto;
    object-fit:cover;
  } 
  .existing{
    margin:10px;
    padding:5px;
  } 
</style>
<?php
if ($this->session->userdata('role') >= '1') {?>
<div class="container text-dark text-left">

<h2><?= $title; ?></h2>

<?php echo validation_errors(); ?>
<div class="form" style="border:1px solid black;padding:20px;">
<div class="row">
    <div class="col-sm-6 col-md-8">
    <?php echo form_open_multipart('panel/gallery_pics'); ?>
  <div class="form-group">
    <label>Upload Image :</label>
    <br>
	  <input type="file" name="userfile" size="20" accept="image/*" onchange="preview_image(event)">
  </div>
  <div class="form-group">
    <label>Caption</label>
    <input type="text" class="form-control" name="caption" placeholder="Add Caption">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
    <div class="col-sm-6 col-md-4">
    <img id="output_image" class="img-fluid" >  

    </div> 
</div>
</div>


<div class="images row">
<?php foreach($images as $image): ?>
<div class="existing">
  <img src="<?php echo base_url();?>assets/img/gallery/<?php echo $image['image'];?>">
  <p><?php echo $image['caption'];?></p>
</div>
<?php endforeach;?>


</div>

</div>

<script type='text/javascript'>
function preview_image(event) 
  {
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
  }
</script>
<?php } ?>

     