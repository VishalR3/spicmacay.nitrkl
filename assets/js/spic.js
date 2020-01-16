

$(document).ready(function(){
      

      // Scroll Control for mobile
            if($(window).width()<=576){
            $("#texture").removeClass("container");
            $(window).scroll(function() {
                  if ($(this).scrollTop() > 100) {
                        $('nav').addClass('header-scrolled');
                  } else {
                        $('nav').removeClass('header-scrolled');
                  }
            });
      
            if ($(window).scrollTop() > 100) {
            $('nav').addClass('header-scrolled');
            } 
            }else{
                  $(window).scroll(function() {
                        if ($(this).scrollTop() > 350) {
                              $('nav').addClass('header-scrolled').prependTo("body");
                        } else {
                              $('nav').removeClass('header-scrolled').prependTo("#texture");
                              $("#logo").prependTo("#texture");
                        }
                  });
            
                  if ($(window).scrollTop() > 350) {
                  $('nav').addClass('header-scrolled').prependTo("body");
                  } 
            }
            $(window).resize(function(){
                  if($(window).width() < 576){
                        $("#texture").removeClass("container");
                        $(window).scroll(function() {
                              if ($(this).scrollTop() > 330) {
                                    $('nav').addClass('header-scrolled');
                              } else {
                                    $('nav').removeClass('header-scrolled');
                              }
                        });
                  
                        if ($(window).scrollTop() > 330) {
                        $('nav').addClass('header-scrolled');
                        } 
                  }else{
                        $("#texture").addClass("container");
                        $(window).scroll(function() {
                              if ($(this).scrollTop() > 350) {
                                    $('nav').addClass('header-scrolled').prependTo("body");
                              } else {
                                    $('nav').removeClass('header-scrolled').prependTo("#texture");
                                    $("#logo").prependTo("#texture");
                              }
                        });
                  
                        if ($(window).scrollTop() > 350) {
                        $('nav').addClass('header-scrolled').prependTo("body");
                        } 
                  }
            })
            // Scroll Mobile is ended

            // subscribe button
      $(".sub").click(function(event){
            event.preventDefault();
            var data=$("input[name=email]").val();
            //alert(data);
            $.post(SITE_ROOT+"admin/subscribe",{
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
      // Subscribe Ended
      new WOW().init();
});
$(document).ready(function(){
      //justified Gallery
      $("#gallery").justifiedGallery({
          rowHeight:300,
          lastRow: "nojustify",
          margins:10
      });
  

      //Remove Galllery Pic
      $(".remove_pic").click(function(){
            var id=$(this).attr("data-id");
            $.post(SITE_ROOT + "panel/remove_pic",{
                  'id' : id
            },function(response){
                  response=JSON.parse(response);
                        if(response.success){
                              console.log("Deleted!!");
                              $(".remove_pic[data-id='"+id+"']").parent().fadeOut();
                        }
                  
            });
      })
  
  });


