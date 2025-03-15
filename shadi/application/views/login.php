         <?php $this->load->view("header"); ?>

         <style>
#snackbar {
  visibility: hidden;
    min-width: 317px;
    margin-left: -125px;
    /* background-color: #333; */
    color: #fff;
    text-align: center;
    border-radius: 2px;
    padding: 16px;
    position: fixed;
    z-index: 99999999;
    left: 8%;
    bottom: 30px;
    font-size: 17px;
}

#snackbar.show {
  visibility: visible;
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
  from {bottom: 0; opacity: 0;} 
  to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
  from {bottom: 30px; opacity: 1;} 
  to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}
</style>

<div id="snackbar"><?php echo $this->session->flashdata('login_message'); ?></div>





         <div class="py-4 py-lg-5 pt-8 pt-lg-10 memeber-list">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-4 col-xl-5 col-md-7 mx-auto">
                     <div class="card">
                        <div class="card-body">
                           <div class="mb-5 text-center">
                              <h1 class="h3 text-primary mb-0">Login to your Account</h1>
                           </div>
                         
                           <?php if($this->session->flashdata('login_message')){ ?>
                               <script>
                                 function myFunction() {
                                   var x = document.getElementById("snackbar");
                                   x.className = "show";
                                   setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
                                 }
                                 myFunction();
                                 </script>
                          
                           <?php } ?>
                           <form class="" method="POST" action="<?php echo base_url('user/user_login'); ?>">
                                                        
                              <div class="form-group">
                                 <label class="form-label" for="email">
                                 Email/Phone
                                 </label>
                                 <input type="text" class="form-control " value="" placeholder="Email Or Phone" name="email" id="email">
                                 <span class="opacity-60">Use country code before number</span>
                              </div>
                              <div class="form-group">
                                 <label class="form-label" for="password">Password</label>
                                 <input type="password" class="form-control " name="password" id="password" placeholder="********" required>
                              </div>
                              <div class="mb-3 text-right">
                                 <a class="link-muted text-capitalize font-weight-normal" href="reset">Forgot Password?</a>
                              </div>
                              <div class="mb-5">
                                 <button type="submit" class="btn btn-block btn-primary">Login to your Account</button>
                              </div>
                           </form>
                           
                          <!--  <div class="separator mb-3">
                              <span class="bg-white px-3 opacity-60">Or Login With</span>
                           </div> -->
                           
                           <div class="text-center">
                              <p class="text-muted mb-0">Don&#039;t have an account?</p>
                              <a href="register">Create an account</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>


         <?php $this->load->view("footer"); ?>
         