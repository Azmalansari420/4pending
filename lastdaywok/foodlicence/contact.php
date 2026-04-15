<?php include('header.php'); ?>



    <div class="container-fluid header hero-bg p-0 pb-5">
        <h1 class="text-uppercase text-center fs-3 p-4">Contact Us</h1>
        <div class="row mx-2">


            <div class="col-lg-4">
                <div class="h-auto bg-white rounded d-flex align-items-center p-5">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light"
                        style="width: 55px; height: 55px;">
                        <i class="fa fa-phone-alt text-primary"></i>
                    </div>
                    <div class="ms-4">
                        <p class="mb-2">Call Us Now</p>
                        <h5 class="mb-0"><a class="" href="tel:+91-8595323374">+91-8595323374</a></h5>
                    </div>
                </div>
                <div class="h-auto bg-white rounded d-flex align-items-center p-5 my-4">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light"
                        style="width: 55px; height: 55px;">
                        <i class="fa fa-envelope-open text-primary"></i>
                    </div>
                    <div class="ms-4">
                        <p class="mb-2">Mail Us Now</p>
                        <h5 class="mb-0"><a href="mailto:info@foodlicence.org.in">info@foodlicence.org.in</a></h5>
                    </div>
                </div>
                <div class="h-auto bg-white rounded d-flex align-items-center p-5 my-4">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light"
                        style="width: 55px; height: 55px;">
                        <i class="fa fa-home text-primary"></i>
                    </div>
                    <div class="ms-4">
                        <p class="mb-2">Address</p>
                        <h5 class="mb-0"><a href="#!">Plot No 24 
              Second Floor , Sewak Park Near Metro pillar - 771
              New Delhi - 110059</a></h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 wow fadeIn" data-wow-delay="0.1s">
                <div class="bg-white rounded p-5">
                    <p class="d-inline-block border rounded-pill py-1 px-4">Contact Us</p>

                    <form id="main-form1" method="post" enctype="multipart/form-data">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name" name="name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email" name="email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject" name="subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message"
                                        style="height: 100px" name="message"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="button" id="submit-btn">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>



    </div>

    <!-- Contact Start -->
    <div class="container-xxl mt-4 ">
        <div class="container">

        </div>
    </div>
    <!-- Contact End -->

  <?php include('footer.php'); ?>
  
  
  <link href="apisetup/toast/saber-toast.css" rel="stylesheet">
<link href="apisetup/front_css.css" rel="stylesheet">
<script src="apisetup/toast/saber-toast.js"></script>
<script src="apisetup/front_script.js"></script>
<script>
  <?php  
    $base  = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]".str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
  ?>

    var api_url = '<?=$api_url ?>';
    var base_url = '<?=$base ?>';
    const final_amount = 1;

    $(document).on("click", "#submit-btn",(function(e) {      
      event.preventDefault();
      var files_name_array = [];

      var form_id = "main-form1";


      var form_ok = check_required_fields(form_id);
      if(form_ok!=1) return false;

      loader("show");

      var current_url =  window.location.href;
      var website_id = 1;
      
      var name = $('input[name="name"]').val();
      var email = $('input[name="email"]').val();
      var subject = $('input[name="subject"]').val();
      var message = $('textarea[name="message"]').val();


      
      var form = new FormData();




      form.append('website_id', website_id); // do not change Mandatory
      form.append('name', name); // do not change Mandatory
      form.append('email', email); // do not change Mandatory
      form.append('subject', subject); // do not change Mandatory
      form.append('message', message); // do not change Mandatory
      form.append('current_url', current_url); // do not change Mandatory
      form.append('base_url', base_url); // do not change Mandatory
      form.append('hostname', location.hostname); // do not change Mandatory

   


      var settings = {
        "url": api_url+"contact/create",
        "method": "POST",
        "timeout": 0,
        "processData": false,
        xhr: function() {
                var xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener('progress', function(evt) {
                    if (evt.lengthComputable) {
                        var percentComplete = Math.round((evt.loaded / evt.total) * 100);
                        $('#progressBar').css('width', percentComplete + '%');
                        $('#progressText').text(percentComplete + '%');
                    }
                }, false);
                return xhr;
             },
        "mimeType": "multipart/form-data",
        "contentType": false,
        "dataType": "json",
        "data": form
      };
      $.ajax(settings).always(function (response) {
          loader("hide");
          response = admin_response_data_check(response);
      });
   }));


      

</script>
  
  
  
  
  
  
  
  
  
  
  
  
  
  