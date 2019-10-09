<?php 
if ($this->session->userdata('role') >= '1') {?>
  <style>
        .wrapper{
            position:fixed;
            width:100%;
            height:100%;
        }
            .card{
                background-color:#fefefe;
                padding:10px 20px;
                border:1px solid black;
                box-shadow:0 4px 8px 0 rgba(0,0,0,0.5);
                margin-left:auto;
                margin-right:auto;
            }
        </style>
<div class="text-center">
        <div class="col-sm-9" style="padding:2% 10% 10%;margin:auto;">
            <div class="card">
                    <h3>Register</h3>
                    <br>
                    <?php if($this->session->flashdata('signup_stat')){?><p style="text-align: center;padding:10px;background-color:red;color:white;"><?php echo $this->session->flashdata('signup_stat'); ?></p><?php } ?>
                                            <form class="form" method="POST" action="<?php echo base_url(); ?>admin/signup">
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
                                                <input type="password" name="password" class="form-control" placeholder="Password"></div><br>
                                                <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                                <i class="fa fa-lock"></i>
                                                            </span></div>
                                                <input type="password" name="cpassword" class="form-control" placeholder="Confirm Password"></div><br><br>
                                                <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                        <span class="input-group-text">@</span>
                                                            </span></div>
                                                <input type="text" class="form-control" name="email" placeholder="Email Address"></div><br>
                                                <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                                <i class="fa fa-user"></i>
                                                            </span></div>
                                                <input type="text" class="form-control" name="name" placeholder="Display Name"></div><br>
                                                <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                                <i class="fa fa-lock"></i>
                                                            </span></div>
                                                <select type="select" class="form-control" name="role">
                                                    <option value="1">Author</option>  
                                                    <option value="2">Technical</option>  
                                                    <option value="3">Post Holder</option>  
                                                </select>
                                                </div><br>
                                                <input type="submit" class="btn btn-primary" value="Register" class="form-control" style="width:100%;">
                                            </form>
        </div>
        </div> 
        </div>
<?php }?>