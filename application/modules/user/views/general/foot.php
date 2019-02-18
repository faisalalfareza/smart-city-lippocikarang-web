<?php if(!isset($this->session->userdata('sc_sess')[1]['username'])) { ?>s

<div class="modal fade" id="login">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
          <h4 class="modal-title">Log in to smartCity</h4>
          <hr>
        </div>

        <div class="modal-body">
         <!-- -->
         <section class="modal-body">
           <!-- Social Login -->
           <div class="social_login">
            <div class="">
             <a href="" class="social_box fb">
              <span class="icon"><i class="fa fa-facebook"></i></span>
              <span class="icon_title">Connect with Facebook</span>	
            </a>

            <a href="#" class="social_box twitter">
              <span class="icon"><i class="fa fa-twitter"></i></span>
              <span class="icon_title">Connect with Twitter</span>
            </a>

            <a href="#" class="social_box google">
              <span class="icon"><i class="fa fa-google-plus"></i></span>
              <span class="icon_title">Connect with Google+</span>
            </a>
          </div>

          <hr>
          <div class="centeredText">
           <span>Or use your email address</span>
         </div>

         <div class="action_btns">
           <div class="one"><button type="button" id="login_form" class="btn">Log in</button></div>					
         </div>

         <div class="centeredText ruleterms">
          <span>By logging in, you agree to SmartCity's <a href="#">Terms of Service</a>, <a href="#">Cookie Policy</a>, <a href="#">Privacy Policy</a> and <a href="#">Content Policies</a>.</span>
        </div>
      </div>

      <!-- Username & Password Login form -->
      <div class="popup_login user_login">
        <form action="<?php echo base_url()."auth/cek_login" ?>" method="post">
         <div class="form-group">
           <label class="control-label" for="inputDefault">Email</label>
           <input type="text" name="username" class="form-control" id="inputDefault">
         </div>
         <div class="form-group">
           <label class="control-label" for="inputDefault">Password</label>
           <input type="text" name="password" class="form-control" id="inputDefault">
         </div>
         <div class="checkbox"><label style="font-size:12px;"><input type="checkbox"> &nbsp;  Remember me on this computer </label></div>

         <div class="action_btns">
           <div class="one_half"><button type="button" class="btn back_btn" id="bck_social">Back</button></div>
           <div class="one_half last"><button type="submit" class="btn btn-info btn-raised">Log in</button></div>
         </div>
       </form>

       <a href="#" class="forgot_password">Forgot password?</a>
       <div class="centeredText ruleterms">
         <span>By logging in, you agree to SmartCity's <a href="#">Terms of Service</a>, <a href="#">Cookie Policy</a>, <a href="#">Privacy Policy</a> and <a href="#">Content Policies</a>.</span>
       </div>        
     </div>

     <!-- Forgot form -->
     <div class="popup_login forgot">
      <form action="<?php echo base_url()."auth/recover" ?>" method="post">
       <div class="form-group">
         <label class="control-label" for="inputDefault">Email</label>
         <input type="text" name="username" class="form-control" id="inputDefault">
       </div>         

       <div class="action_btns">
         <div class="one_half"><button type="button" class="btn back_btn" id="bck_login">Back</button></div>
         <div class="one_half last"><button type="submit" class="btn btn-info btn-raised">Recover</button></div>
       </div>
     </form>

     <div class="centeredText">
      <span>Please check your email after recover.</span>
    </div>
  </div>

</section>

</div>
</div>
</div>
</div>
<?php } ?>

</body>

<script src="<?=base_js()."jquery.js"?>"></script>    
<script src="<?=base_js()."bootstrap.min.js"?>"></script>    
<script src="<?=base_js()."material.min.js"?>"></script>
<script src="<?=base_js()."ripples.min.js"?>"></script>
<script src="<?=base_js()."snackbar.min.js"?>"></script>    
<script src="<?=base_js()."jquery.dropdown.js"?>"></script>
<script src="<?=base_js()."webcam.js"?>"></script>

<script type="text/javascript">
  $(function(){
    $.material.init();

  //===============Form login=================
  $(".form-group select").dropdown();                        

  // Calling Login Form
  $("#login_form").click(function(){
    $(".social_login").hide();
    $(".user_login").show();
    return false;
  });

  // Calling Login Form
  $(".forgot_password").click(function(){
    $(".user_login").hide();
    $(".forgot").show();
    return false;
  });            

  // Going back to Social Forms
  $("#bck_social").click(function(){
    $(".user_login").hide();                
    $(".social_login").show();                
    return false;
  });

  // Going back to Login Forms
  $("#bck_login").click(function(){
    $(".forgot").hide();
    $(".user_login").show();              
    return false;
  });

  //===============Rating content=================
  $('.bs-component [data-toggle="tooltip"]').tooltip();

  $(".bs-component").hover(function () {
    $(this).append($button);
    $button.show();
  }, function () {
    $button.hide();
  });

  //===============Phone slide=================
  var x=0;
  $("button.direction").click(function() {    
    var direction = $(this).prop("id");   
    if(direction == "up" && x<($("img.pageslide").length-1)){
      $("img.pageslide").animate({ "bottom": "+="+$(".screen").height()+"px" }, "slow" );
      x+=1;
    } else if(direction == "down" && x>0){
      $("img").animate({ "bottom": "-="+$(".screen").height()+"px" }, "slow" );
      x-=1;
    }
  });
});       
</script>

</html>