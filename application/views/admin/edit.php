<?php
if ($this->session->userdata('role') >= '1') {?>
<div class="container text-left text-dark" id="post">
<h2 class="text-dark"><?= $title; ?></h2>
<?php echo validation_errors(); ?>
<?php echo form_open_multipart('panel/update'); ?>
<input type="hidden" name="id" value="<?php echo $post['id']; ?>">
    <div class="form-group">
        <label>Title</label>
        <input type="text" class="form-control" name="title" placeholder="Title" value="<?php echo $post['title']; ?>">
    </div>
    <div class="form-group">
        <label>Artist</label>
        <input type="text" class="form-control" name="artist" placeholder="Artist's Name" value="<?php echo $post['artist']; ?>">
    </div>
    <div class="form-group">
        <label>Body</label>
        <textarea class="form-control" name="body" rows="4" id="editor2"><?php echo $post['body']; ?></textarea>
    </div>
    <div class="form-group">
    <label>Change Image : </label>
    <input type="file" name="userfile" size="20">
    </div>
    <input type="submit" value="Submit" class="btn btn-primary">
    
</form>

</div>
<script>

ClassicEditor
                        .create( document.querySelector( '#editor2' ) )
                        .then( editor => {
                                console.log( editor );
                        } )
                        .catch( error => {
                                console.error( error );
                        } );
</script>
<?php } ?>
