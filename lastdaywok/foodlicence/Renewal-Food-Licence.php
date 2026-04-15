
<?php


include('header.php'); ?>
<style>
  
/* Container */
.form-fssi {
    background: #ffffff;
    padding: 25px;
    border-radius: 15px;
    box-shadow: 0 15px 35px rgba(0,0,0,0.08);
    border: 1px solid #eee;
}

/* Header */
.fssi-head {
    background: linear-gradient(135deg, #1c5482, #0f3c60);
    padding: 12px;
    border-radius: 10px;
    margin-bottom: 20px;
}

.fssi-head h2 {
    color: #fff;
    font-size: 15px;
    font-weight: 600;
}

/* Labels */
.main-form-custom label {
    font-size: 13px;
    font-weight: 600;
    color: #333;
    margin-bottom: 5px;
}

/* Required */
.required {
    color: red;
}

/* Inputs */
.main-form-custom .form-control {
    height: 45px;
    border-radius: 8px;
    border: 1px solid #ddd;
    font-size: 14px;
    transition: 0.3s;
}

/* Focus */
.main-form-custom .form-control:focus {
    border-color: #2e7d32;
    box-shadow: 0 0 0 2px rgba(46,125,50,0.15);
}

/* Input group (Validate button) */
.input-group .form-control {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}

.input-group .btn {
    border-radius: 0 8px 8px 0;
    padding: 10px 15px;
    font-size: 13px;
}

/* Validate button */
#btnz {
    background: #2e7d32;
    color: #fff;
    border: none;
}

#btnz:hover {
    background: #000;
}

/* Show-hide section */
.show-hide {
    background: #f9fbfd;
    padding: 15px;
    border-radius: 10px;
    border: 1px dashed #ddd;
    margin-top: 10px;
}

/* Section heading */
h6 {
    background: #fff3f3;
    padding: 10px;
    border-left: 4px solid red;
    border-radius: 6px;
}

/* File input */
input[type="file"] {
    padding: 8px;
    font-size: 13px;
}

/* Checkbox */
.form-check-input {
    margin-top: 4px;
    cursor: pointer;
}

.form-check-label {
    font-size: 13px;
    color: #444;
}

/* Submit button */
.fcs-submit-button {
    width: 100%;
    background: linear-gradient(135deg, #1c5482, #0f3c60);
    border: none;
    padding: 12px;
    font-size: 15px;
    font-weight: 600;
    border-radius: 30px;
    transition: 0.3s;
}

/* Hover */
.fcs-submit-button:hover {
    background: #000;
    transform: translateY(-2px);
}

/* Spacing */
.form-group {
    margin-bottom: 15px;
}

/* Responsive */
@media (max-width: 768px) {
    .form-fssi {
        padding: 20px;
    }

    .fssi-head h2 {
        font-size: 13px;
    }
}
</style>



  <div class="container-fluid header hero-bg p-0 pb-5">
    <h1 class="text-uppercase text-center fs-3 p-4">FSSAI License Renewal Services</h1>
    <div class="row g-0 flex-column-reverse flex-lg-row mx-2">

      <div class="col-lg-6 ps-lg-4 pe-xl-2 wow fadeIn" data-wow-delay="0.1s">
        <div class="form-fssi">
          <div class="fssi-head d-flex align-items-center justify-content-center">
            <h2 class="text-uppercase text-center fs-5 m-0">FSSAI License Renewal Services Registration</h2>
          </div>

          <form  method="post" enctype="multipart/form-data" id="main-form1"
            class="main-form-custom" >
            <div class="form-group txt">
              <label>Name of Applicant / आवेदक का नाम  <span class="required"> * </span></label>
              <input type="tel" maxlength="10" minlength="10" class="form-control" name="name" required="">
            </div>
            <div class="form-group txt">
              <label>Mobile Number / मोबाइल नंबर <span class="required"> * </span></label>
              <input type="tel" maxlength="10" minlength="10" class="form-control" name="mobile" required="">
            </div>

            <div class="form-group txt">
              <label>Email / ईमेल <span class="required"> * </span></label>
              <input type="email" class="form-control" name="email" required="">
            </div>

            <div class="form-group txt">
              <label>Existing FSSAI License/Registration No / मौजूदा एफएसएसएआई लाइसेंस/पंजीकरण नंबर <span
                  class="required"> *
                </span></label><br>
              <div class="input-group">
                <input type="text" class="form-control existing_licence_number" name="existing_licence_number" value="" required="true">
                <!-- <button type="button" class="btn btn-dark fcs-submit-button" id="btnz" onclick="check_licence_no()" value="valid">Validate</button> -->
              </div>
              <hr>
            
            </div>

            <h6 style="color:red;font-weight:bold;font-size:14px">PLEASE VERIFY YOUR BUSINESS NAME BELOW</h6>
            <div class="show-hide" style="display:none;">
              <div class="form-group txt">
                <label>Business Name / व्यवसाय का नाम <span class="required"> * </span></label>
                <input type="text" class="form-control bussiness_name" name="bussiness_name"  >
              </div>

              <div class="form-group txt">
                <label>PAN CARD NUMBER / पैन कार्ड नंबर <span class=""> *</span></label>
                <input type="text" class="form-control" name="pan_card_number" pattern="(^([a-zA-Z]{5})([0-9]{4})([a-zA-Z]{1})$)" required="">
              </div>
              <div class=" txt col-lg-12 col-12">
               <label>Certificate Validity / प्रमाणपत्र वैधता *<span class=""> *</span></label>
               <select id="office-state" size="1" class="form-control select-state" name="state" required="">
                  <option value="1" selected>1 YEARS</option>
                </select>
              </div>

              <div class="form-group txt">
                <label>Upload Your Existing Fssai Licence / अपना मौजूदा एफएसएसएआई लाइसेंस अपलोड करें *<span class="required"> * </span></label>
                <input type="file" class="form-control" name="bussiness_name"  >
              </div>
              <div class="form-group txt">
                <label>Existing FSSAI Licence Validity End Date * (DD-MM-YYYY)<span class="required"> * </span></label>
                <input type="date" class="form-control" name="bussiness_name"  >
              </div>

            </div>

            
            




            <div class="form-group form-check ms-4">
              <input type="checkbox" class="form-check-input" name="terms_of_service" required="">
              <label class="form-check-label">I AGREE TO THE <a href="Terms-And-Conditions.php">TERMS OF
                  SERVICE</a></label>
            </div>

            <div class="form-group form-check ms-4">
              <input type="checkbox" class="form-check-input" name="tos4" required="">
              <label class="form-check-label"><span class="blink" style="font-size: 14px;font-weight: 600;">I, the
                  applicant
                  agree to share OTP</span> sent on my mobile and / or other Details required for the purpose of FOOD
                LICENCE
                Certificate Generation.<br><br>I am aware that generation of FOOD LICENCE certificate requires OTP
                verification
                <span class="required txt">[UPDATED]</span></label><br><br>
            </div>


            <button type="button" class="btn btn-primary fcs-submit-button" id="submit-btn">Submit
              Application</button>
          </form>
        </div>
      </div>



      <div class="col-lg-6 pe-lg-4 ps-xl-2 wow fadeIn" data-wow-delay="0.1s">
        <div class="form-fssi">
          <div class="fssi-head d-flex align-items-center justify-content-center">
            <h2 class="text-uppercase text-center fs-5 m-0">FSSAI License Renewal Services</h2>
          </div>

          <div class="form-instructions main-form-custom">

            <div class="fssai-info-box">

                     <!-- Subheading -->
                     <p class="info-subtext">Avoid penalties and business interruption by renewing your food license on time.
                     </p>

                     <!-- Disclaimer -->
                     <div class="info-disclaimer">
                        <strong>Why Renewal is Important?</strong>
                        <p>Expired licenses can result in fines or closure notices.</p>
                     </div>

                    
                     <!-- Who Needs -->
                     <div class="info-section">
                        <h4>Our Renewal Assistance</h4>
                        <ul class="info-list">
                           <li>License validity check</li>
                           <li>Document update</li>
                           <li>Renewal filing</li>
                           <li>Follow-up support</li>
                        </ul>
                     </div>

                     <!-- Process -->
                     <div class="info-section">
                        <h4>Who Needs Renewal?</h4>
                        <ul class="info-list">
                           <li>Restaurants</li>
                           <li>Food manufacturers</li>
                           <li>Importers/exporters</li>
                           <li>Cloud kitchens</li>
                        </ul>
                     </div>

                   
                     <!-- CTA -->
                     <div class="info-cta text-center">
                        <a href="contact.php" class="info-btn">👉 Talk to Expert</a>
                     </div>

                  </div>
            
          </div>

        </div>
      </div>

    </div>
  </div>

 











  <!-- Footer Start -->
 <?php include('footer.php'); ?>


<link href="apisetup/toast/saber-toast.css" rel="stylesheet">
<link href="apisetup/front_css.css" rel="stylesheet">
<script src="apisetup/toast/saber-toast.js"></script>
<script src="apisetup/front_script.js"></script>

<script>


//   function check_licence_no() {
//     var licenceno = $(".existing_licence_number").val();
//     // console.log(licenceno);
//     var settings = {
//         "url": "proxy.php", // Your PHP proxy script URL
//         "method": "POST",
//         "timeout": 0,
//         "data": {
//             "licenseNumber": licenceno,
//             "getCategorizedProductList": "false"
//         }
//     };
//     $.ajax(settings).done(function(response) 
//     {
//       var getdata = JSON.parse(response);
//       console.log(getdata.result.entityName);
//       if(getdata.result.entityName !== '') 
//       {
//           $(".bussiness_name").val(getdata.result.entityName);
//           $(".show-hide").css("display", "block");
//           alert("License number verified successfully!");
//       }
//     });
    
// }













  <?php  
    $base  = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]".str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
  ?>

    var api_url = '<?=$api_url ?>';
    var base_url = '<?=$base ?>';

    // console.log(payable_price);

    $(document).on("click", "#submit-btn",(function(e) {      
      event.preventDefault();
      var data = [];
      var files_name_array = [];
      const final_amount = 16997;

      var form_id = "main-form1";


      var form_ok = check_required_fields(form_id);
      if(form_ok!=1) return false;

      loader("show");

      var current_url =  window.location.href;
      var form_name = 'RENEW FSSAI LICENSE | FOOD LICENSE RENEWAL CERTIFICATE';
      var name = $('input[name="name"]').val();
      var email = $('input[name="email"]').val();
      var mobile = $('input[name="mobile"]').val();



      data.push({"name":"Existing FSSAI License/Registration No / मौजूदा एफएसएसएआई लाइसेंस/पंजीकरण नंबर","value":$('input[name="existing_licence_number"]').val()});
      data.push({"name":"Business Name / व्यवसाय का नाम","value":$('input[name="bussiness_name"]').val()});
      data.push({"name":"PAN CARD NUMBER / पैन कार्ड नंबर","value":$('input[name="pan_card_number"]').val()});


      data = JSON.stringify(data);
      var form = new FormData();




      
      form.append('form_name', form_name); // do not change Mandatory
      form.append('name', name); // do not change Mandatory
      form.append('email', email); // do not change Mandatory
      form.append('mobile', mobile); // do not change Mandatory
      form.append('current_url', current_url); // do not change Mandatory
      form.append('base_url', base_url); // do not change Mandatory
      form.append('hostname', location.hostname); // do not change Mandatory
      form.append('files_name_array', JSON.stringify(files_name_array)); // do not change Mandatory
      form.append('final_amount', final_amount); // do not change Mandatory
      form.append('data', data); // do not change Mandatory

      $(files_name_array).each(function(index, item){
        form.append(item.key, $(`input[name="${item.key}"]`).prop('files')[0]);
      });


      var settings = {
        "url": api_url+"leads/create",
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