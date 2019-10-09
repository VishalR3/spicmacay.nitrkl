</div>
</div>
<?php if(!$this->session->userdata('logged_in') or $this->session->userdata('role') < '1'){ ?>
  <div class="container" style="background-color:#eee;padding:10%;">
     <div class="errbox text-center" style="background-color:#bbb;padding:30px;">
     <h1>Sorry! Direct Access is Forbidden</h1>
     <h4>Only Adminstrators can access.</h4>
     </div>
  </div>

  <?php } ?>
<footer class="py-3" style="background-color:#eee;color:black;">
        <p class="m-0 text-center">© 2019 SPIC MACAY.All rights Reserved.</p>
        <!-- /.container -->
</footer>


       <!-- Bootstrap core JavaScript -->
       <script src="<?php echo base_url(); ?>assets/vendor/wow/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>
    



  </body>
  </html>


