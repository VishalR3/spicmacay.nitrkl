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
       $(document).ready(function(){
    $(".sub").click(function(event){
      event.preventDefault();
      var data=$("input[name=email]").val();
      //alert(data);
      $.post("<?php echo base_url() ;?>admin/subscribe",{
        email : data 
      },function(res,stat){
        if(stat=="success"){
          
          $(".formdata").css("display","flex");
          $(".data_body").html(res);
        }
        
      });

      
    })
    $(".formdata").click(function(){
      $(this).hide();
    });



  })
    </script>
    <script>
      new WOW().init();
    </script>
     <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor2' );
            </script>
  </body>
  </html>