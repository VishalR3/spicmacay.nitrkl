<footer class="py-5" style="background-color:#eee;color:black;">
      <div class="formdata">
          <div class="data_body">
            
          </div>
        </div>
        <div class="container">
          <div class="col-6 col-sm-4 text-center" id="subs">
            
          <form>
            <div class="form-group">
              <input type="text" placeholder="xyz@gmail.com" name="email" id="email">
              <button type="submit" class="sub">Subscribe</button>
            </div>
          </form>
        </div>
        <p Contacts class="text-center">
        +91 9337751074
      </p>
          <p class="m-0 text-center">© 2019 SPIC MACAY.All rights Reserved.</p>
        </div>
        <!-- /.container -->
      </footer>


    <!-- Bootstrap core JavaScript -->
       <script src="<?php echo base_url(); ?>assets/vendor/wow/wow.min.js"></script>
       <script>
       $(function(){
         $("#share_btn").click(function(){
           var link=$(this).attr("href");
           if(link==""){
             link="https://www.facebook.com/SpicMacayNITR/posts/2374678469275536"
           }
          FB.ui({
  method: 'share',
  href: link,
  hashtag: "#spicmacay"

}, function(response){});
         })
       })
       
       </script>

  </body>
  </html>