<?php if($this->session->userdata('role')>2){ ?>
    <style>
            .feed_card{
                margin:10px;
                border:1px solid black;
            }
    </style>


<?php foreach ($feeds as $feed) : ?>
<div class="feed_card">
    
        <div class="card-header">
        <h4><?php echo $feed['subject']; ?></h4>
        <h6>Sender : <?php echo $feed['sender']; ?></h6>
        </div>
        <div class="card-body">
            <p><?php echo $feed['message']; ?></p>
        </div>
</div>
<?php endforeach; ?>

</div>
<?php } ?>