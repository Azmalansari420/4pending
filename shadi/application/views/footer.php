<?php
$sitesetting = $this->crud->fetchdatabyid('1','site_setting');
?>
         <footer class="aiz-footer fs-13 mt-auto text-white fw-400 pt-5">
            <div class="container">
               <div class="row mb-4">
                  <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-10 text-center mx-auto">
                     <div class="logo mb-4">
                        <a href="matrimonial" class="d-inline-block py-15px">
                        <img src="<?php echo base_url(); ?>media/uploads/site_setting/<?php echo $sitesetting[0]->logo; ?>" alt="testing" class="mw-100 h-30px h-md-40px" height="40">
                        </a>
                     </div>
                     <div class="opacity-60">
                        But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure.
                     </div>
                  </div>
               </div>
               <div class="mb-4">
                  <h4 class="text-uppercase text-primary fs-14 border-bottom border-primary pb-4 mb-4">Contacts</h4>
                  <div class="row opacity-60 no-gutters">
                     <div class="col-xl col-md-6 mb-4">
                        <div class="mb-3 opacity-60">
                           <i class="las la-home mr-2"></i>
                           <span>Address</span>
                        </div>
                        <div><?php echo $sitesetting[0]->address; ?></div>
                     </div>
                     <div class="col-xl col-md-6 mb-4">
                        <div class="mb-3 opacity-60">
                           <i class="las la-globe mr-2"></i>
                           <span>Website</span>
                        </div>
                        <div><?php echo website_name; ?></div>
                     </div>
                     <div class="col-xl col-md-6 mb-4">
                        <div class="mb-3 opacity-60">
                           <i class="las la-envelope mr-2"></i>
                           <span>Email</span>
                        </div>
                        <div><a href="mailto:<?php echo $sitesetting[0]->email; ?>"><?php echo $sitesetting[0]->email; ?></a></div>
                        <div><a href="mailto:<?php echo $sitesetting[0]->alt_email; ?>"><?php echo $sitesetting[0]->alt_email; ?></a></div>
                     </div>
                     <div class="col-xl col-md-6 mb-4">
                        <div class="mb-3 opacity-60">
                           <i class="las la-phone mr-2"></i>
                           <span>Phone</span>
                        </div>
                        <div><a href="tel:<?php echo $sitesetting[0]->mobile; ?>"><?php echo $sitesetting[0]->mobile; ?></a></div>
                        <div><a href="tel:<?php echo $sitesetting[0]->alt_mobile; ?>"><?php echo $sitesetting[0]->alt_mobile; ?></a></div>
                     </div>
                  </div>
               </div>
               <div class="row no-gutters">
                  <div class="col-xl col-md-6 mb-4">
                     <h4 class="text-uppercase text-primary fs-14 border-bottom border-primary pb-4 mb-4">Main Menu</h4>
                     <div>
                        <ul class="list-unstyled">
                           <li class="my-3">
                              <a href="<?php echo base_url(); ?>" class="text-reset opacity-60">Home</a>
                           </li>
                           <li class="my-3">
                              <a href="<?php echo base_url(); ?>" class="text-reset opacity-60">How It Works</a>
                           </li>
                           <li class="my-3">
                              <a href="<?php echo base_url(); ?>" class="text-reset opacity-60">Premium Members</a>
                           </li>
                           <li class="my-3">
                              <a href="<?php echo base_url(); ?>packages" class="text-reset opacity-60">Packages</a>
                           </li>
                           <li class="my-3">
                              <a href="<?php echo base_url(); ?>" class="text-reset opacity-60">Real Reviews</a>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-xl col-md-6 mb-4">
                     <h4 class="text-uppercase text-primary fs-14 border-bottom border-primary pb-4 mb-4">Quick Search</h4>
                     <div>
                        <ul class="list-unstyled">
                           <li class="my-3">
                              <a href="<?php echo base_url(); ?>" class="text-reset opacity-60">All Members</a>
                           </li>
                           <li class="my-3">
                              <a href="<?php echo base_url(); ?>" class="text-reset opacity-60">Premium Members</a>
                           </li>
                           <li class="my-3">
                              <a href="<?php echo base_url(); ?>" class="text-reset opacity-60">Free Members</a>
                           </li>
                           <li class="my-3">
                              <a href="<?php echo base_url(); ?>member-list" class="text-reset opacity-60">Search</a>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-xl col-md-6 mb-4">
                     <h4 class="text-uppercase text-primary fs-14 border-bottom border-primary pb-4 mb-4">USEFUL LINKS</h4>
                     <div>
                        <ul class="list-unstyled">
                           <li class="my-3">
                              <a href="<?php echo base_url(); ?>" class="text-reset opacity-60">FAQ</a>
                           </li>
                           <li class="my-3">
                              <a href="<?php echo base_url(); ?>terms-conditions" class="text-reset opacity-60">Terms &amp; Conditions</a>
                           </li>
                           <li class="my-3">
                              <a href="<?php echo base_url(); ?>privacy-policy" class="text-reset opacity-60">Privacy Policy</a>
                           </li>
                           <li class="my-3">
                              <a href="<?php echo base_url(); ?>" class="text-reset opacity-60">Request a Refund</a>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-xl col-md-6 mb-4">
                     <h4 class="text-uppercase text-primary fs-14 border-bottom border-primary pb-4 mb-4">Mobile</h4>
                     <div class="mb-3">
                        <a href="#">
                        <img src="<?php echo base_url(); ?>public/uploads/all/vr2RFTrdbxEawbPyG8suCNyMVEvr05lGIQ6MX1Nz.png" height="50">
                        </a>
                     </div>
                     <div class="mb-3">
                        <a href="#">
                        <img src="<?php echo base_url(); ?>public/uploads/all/a1RdLfMfXtNqskauoZwEC94F8xAmbH16mhaGVHWh.png" height="50">
                        </a>
                     </div>
                  </div>
               </div>
               <div class="border-top border-primary pt-4 pb-7 pb-xl-4">
                  <div class="row">
                     <div class="col-lg-6">
                        <div class="lh-1">
                           <p><font color="#fd5366"><b><?php echo website_name; ?></b></font></p>
                           <p>©2023 <?php echo website_name; ?>&nbsp; |&nbsp; &nbsp;Design & Development By <a target="_blank" href="https://www.codediffusion.in/">Code Diffusion</a></p>
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="text-left text-lg-right">
                           <ul class="list-inline social colored mb-0">
                              <li class="list-inline-item">
                                 <a href="<?php echo $sitesetting[0]->facebook; ?>" target="_blank" class="facebook"><i class="lab la-facebook-f"></i></a>
                              </li>
                              <li class="list-inline-item">
                                 <a href="<?php echo $sitesetting[0]->twitter; ?>" target="_blank" class="twitter"><i class="lab la-twitter"></i></a>
                              </li>
                              <li class="list-inline-item">
                                 <a href="<?php echo $sitesetting[0]->instagram; ?>" target="_blank" class="instagram"><i class="lab la-instagram"></i></a>
                              </li>
                              <li class="list-inline-item">
                                 <a href="<?php echo $sitesetting[0]->youtube; ?>" target="_blank" class="youtube"><i class="lab la-youtube"></i></a>
                              </li>
                              <!-- <li class="list-inline-item">
                                 <a href="#" target="_blank" class="linkedin"><i class="lab la-linkedin-in"></i></a>
                              </li> -->
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </footer>


         <div class="aiz-mobile-bottom-nav d-xl-none fixed-bottom bg-white shadow-lg border-top rounded-top" style="box-shadow: 0px -1px 10px rgb(0 0 0 / 15%)!important; ">
            <div class="row align-items-center gutters-5 text-center">
               <div class="col">
                  <a href="<?php echo base_url(); ?>" class="text-reset d-block flex-grow-1 text-center py-2">
                  <i class="las la-home fs-18 opacity-60 opacity-100"></i>
                  <span class="d-block fs-10 opacity-60 opacity-100 fw-600">Home</span>
                  </a>
               </div>
               <div class="col">
                  <a href="user-notifications" class="text-reset d-block flex-grow-1 text-center py-2">
                  <span class="d-inline-block position-relative px-2">
                  <i class="las la-bell fs-18 opacity-60 "></i>
                  </span>
                  <span class="d-block fs-10 opacity-60 ">Notifications</span>
                  </a>
               </div>
               <div class="col">
                  <a href="users/login" class="text-reset d-block flex-grow-1 text-center py-2 ">
                  <span class="d-inline-block position-relative px-2">
                  <i class="las la-comment-dots fs-18 opacity-60 "></i>
                  </span>
                  <span class="d-block fs-10 opacity-60 ">Messages</span>
                  </a>
               </div>
               <div class="col">
                  <a href="user-dashboard" class="text-reset d-block flex-grow-1 text-center py-2">
                  <span class="d-block mx-auto mb-1 opacity-60 ">
                  <img src="<?php echo base_url(); ?>public/assets/img/avatar-place.png" class="rounded-circle size-20px">
                  </span>
                  <span class="d-block fs-10 opacity-60 ">Account</span>
                  </a>
               </div>
            </div>
         </div>
      </div>


     
 
      
      <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
      <script src="<?php echo base_url(); ?>public/assets/js/vendors.js"></script>
      <script src="<?php echo base_url(); ?>public/assets/js/aiz-core.js"></script>
      <!-- The core Firebase JS SDK is always required and must be listed first -->
      <script src="<?php echo base_url(); ?>public/assets/www.gstatic.com/firebasejs/8.3.2/firebase-app.js"></script>
      <script src="<?php echo base_url(); ?>public/assets/www.gstatic.com/firebasejs/8.3.2/firebase-messaging.js"></script>
      
      
      <script type="text/javascript">
         function loginModal() {
             $('#LoginModal').modal();
         }
         
         function package_update_alert() {
             $('.package_update_alert_modal').modal('show');
         }
         // making the CAPTCHA  a required field for form submission
         
      </script>
      
      <script>
         $(document).on("submit", ".form_data",(function(e) {
        e.preventDefault();
        var form = $(this);
        var fid = form.attr('id');
        var form_ok = 1;


        // -----check required felds
        $("#"+fid+" :input").each(function(){
         var input = $(this).prop("required"); 
         if (input == true)
         {
            if ($(this).val()=="" || $(this).val()=="0")
            {              
              form_ok = 0;
              var placeholder = $(this).attr("placeholder");
              if (placeholder==undefined) placeholder = $(this).attr("name");
              $(this).next('.invalid-feedback').remove();
              $(this).after('<div class="invalid-feedback">'+$(this).attr("placeholder")+'</div>');  
              $(this).addClass("is-invalid");
              // $(this).addClass("focus-red");
              $(this).focus();
              return false;
            }
            else 
            {
              $(this).removeClass("is-invalid");
              $(this).next('.invalid-feedback').remove();
             form_ok = 1;
            }
          }
        });
        // -----end check required felds


        if (form_ok==1){
        $(".loading").addClass("active");
          var url1 = form.attr('action');
          var filecheck = 1;
          if(filecheck==1)
          {
            $.ajax({
             url: url1,
             type: "POST",
             data:  new FormData(this),
             contentType: false,
                   cache: false,
             processData:false,
             beforeSend : function()
             {
              $("#err").fadeOut();
             },
             success: function(data)
                {
                    console.log(data);
                    if(JSON.parse(data))
                    {
                      var result = JSON.parse(data);
                      if(result.status=="200")
                      {
                        // success_message(result.message);
                        $("#"+fid+"-msg").html(result.message);
                        console.log(fid);
                        if(result.action=="add")
                        { 
                          $("#"+fid)[0].reset();
                          $('#'+fid+' .add-produc-imgs').empty();
                        }
                        if(result.action=="redirect")
                        { 
                            window.location.href=result.url;
                        }
                        if(result.action=="reload")
                        { 
                            location.reload();
                        }
                      }
                      else if(result.status=="400")
                      {
                        $("#"+fid+"-msg").html(result.message);
                        
                        // error_message(result.message);
                      }
                    }
                    else
                    {
                      $("#error-message").html(data);
                    }
                      $(".loading").removeClass("active");
                      $('html, body').animate({scrollTop:0}, 'slow');
                },
             error: function(e) 
                {
                  $(".loading").removeClass("active");
                }          
              });
            }
            else
          {
            $("#warning-message").html('Use only Files name. (input type="file" name="files[]" multiple)  Like this ');
             $(".loading").removeClass("active");
          }
        }
       }));

      $(document).on("click", ".submit-btn",(function(e) {
        event.preventDefault();
        var id = $(this).data("target");  
        $("#"+id).trigger("submit");
      }));
      </script>
    
   </body>
</html>