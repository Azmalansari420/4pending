<?php include('header.php'); ?>


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
    border-color: #ff9800;
    box-shadow: 0 0 0 2px rgba(255,152,0,0.15);
}

/* Input Group */
.input-group .form-control {
    border-radius: 8px;
}

/* Dropdown */
.main-form-custom select.form-control {
    cursor: pointer;
}

/* Verification Input */
#very-code {
    border: 2px dashed #ff9800;
    text-align: center;
    font-weight: 600;
}

/* Verification Label */
.small label {
    font-size: 13px;
    font-weight: 600;
}

/* Button */
.fcs-submit-button {
    width: 100%;
    background: linear-gradient(135deg, #1c5482, #0f3c60);
    border: none;
    padding: 12px;
    font-size: 15px;
    font-weight: 600;
    border-radius: 30px;
    transition: 0.3s;
    color: #fff;
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
    <h1 class="text-uppercase text-center fs-3 p-4">APPLY FOR FSSAI ANNUAL RETURN FILING</h1>
    <div class="row g-0 flex-column-reverse flex-lg-row mx-2">
      <div class="col-lg-6 ps-lg-4 pe-xl-2 wow fadeIn" data-wow-delay="0.1s">
        <div class="form-fssi">
          <div class="fssi-head d-flex align-items-center justify-content-center">
            <h2 class="text-uppercase text-center fs-5 m-0">FSSAI Registration
              Online
              Apply</h2>
          </div>

          <form action="MakePayment.php" method="post" enctype="multipart/form-data" id="main-form"
            class="main-form-custom">
            <div class="form-group txt">
              <label>Enter Full Name <span class="required"> *</span></label>
              <input type="text" class="form-control" name="name" id="applicant-name" value="" required="">
            </div>


            <div class="form-group txt">
              <label>Enter E-mail Id <span class="required"> *</span></label>
              <input type="text" class="form-control" name="email" id="email-id" required="">
            </div>
            <div class="form-group txt">
              <label>Enter Mobile Number <span class="required"> *</span></label>
              <input type="tel" maxlength="10" minlength="10" class="form-control" name="mobile"
                id="mobile-number" required="">
            </div>
            <div class="form-group txt">
              <label>Mention FSSAI License Number For Which ANNUAL RETURN IS TO BE FILLED<span class="required"> *
                </span></label>
              <div class="input-group">
                <input type="text" class="form-control" name="existing_licence_number" value="" required="true">
                <!-- <button type="button" class="btn btn-dark fcs-submit-button" id="btnz"  value="valid">Validate</button> -->
              </div>
            </div>

            <div class="form-group txt mt-2">
              <label>SELECT NUMBER OF RETURNS <span class="required"> * </span></label><br>
              <div class="input-group">
                <select id="tenure" name="tenure" class="form-control" >
                  <option value="1 Return (Annual / Bi-Annual)" selected="">1 Return (Annual / Bi-Annual) </option>
                </select>
              </div>
            </div>
            <div class="form-group txt col-lg-12 mt-2">
              <label>State / राज्य <span class="">*</span></label> 
              <select id="office-state" class="form-control" name="state" required="">
                <option value="">
                  Select State
                </option>
                <option value="Andaman_And_Nicobar_Island">
                  1. ANDAMAN AND NICOBAR ISLANDS / अंदमान और निकोबार द्वीपसमूह
                </option>
                <option value="Andhra_Pradesh">
                  2. ANDHRA PRADESH / आन्ध्र प्रदेश
                </option>
                <option value="Arunachal_Pradesh">
                  3. ARUNACHAL PRADESH / अरुणाचल प्रदेश
                </option>
                <option value="Assam">
                  4. ASSAM / असम
                </option>
                <option value="Bihar">
                  5. BIHAR / बिहार
                </option>
                <option value="Chhattisgarh">
                  6. CHHATTISGARH / छत्तीसगढ़
                </option>
                <option value="Chandigarh">
                  7. CHANDIGARH / चंडीगढ़
                </option>
                <option value="Dadara">
                  8.DADAR AND NAGAR HAVELI / दादरा और नगर हवेली
                </option>
                <option value="Daman">
                  9. DAMAN AND DIU / दमन और दीव
                </option>
                <option value="Delhi">
                  10. DELHI / दिल्ली
                </option>
                <option value="Goa">
                  11. GOA / गोवा
                </option>
                <option value="Gujarat">
                  12. GUJARAT / गुजरात
                </option>
                <option value="Haryana">
                  13. HARYANA / हरियाणा
                </option>
                <option value="Himachal_Pradesh">
                  14. HIMACHAL PRADESH / हिमाचल प्रदेश
                </option>
                <option value="Jammu_and_Kashmir">
                  15. JAMMU AND KASHMIR / जम्मू और कश्मीर
                </option>
                <option value="Jharkhand">
                  16. JHARKHAND / झारखण्ड
                </option>
                <option value="Karnataka">
                  17. KARNATAKA / कर्णाटक
                </option>
                <option value="Kerala">
                  18. KERALA / केरल
                </option>
                <option value="Ladakh">
                  19. LADAKH / लद्दाख
                </option>
                <option value="Lakshadweep">
                  20. LAKSHADWEEP / लक्षद्वीप
                </option>
                <option value="Madhya_Pradesh">
                  21. MADHYA PRADESH / मध्य प्रदेश
                </option>
                <option value="Maharashtra">
                  22. MAHARASHTRA / महाराष्ट्र
                </option>
                <option value="Manipur">
                  23. MANIPUR / मणिपुर
                </option>
                <option value="Meghalaya">
                  24. MEGHALAYA / मेघालय
                </option>
                <option value="Mizoram">
                  25. MIZORAM / मिज़ोरम
                </option>
                <option value="Nagaland">
                  26. NAGALAND / नागालैण्ड
                </option>
                <option value="Odisha">
                  27. ODISHA / ओड़िशा
                </option>
                <option value="Puducherry">
                  28. PUDUCHERRY / पुडुचेरी
                </option>
                <option value="Punjab">
                  29. PUNJAB / पंजाब
                </option>
                <option value="Rajasthan">
                  30. RAJASTHAN / राजस्थान
                </option>
                <option value="Sikkim">
                  31. SIKKIM / सिक्किम
                </option>
                <option value="Tamil_Nadu">
                  32. TAMIL NADU / तमिलनाडु
                </option>
                <option value="Telangana">
                  33. TELANGANA / तेलंगाना
                </option>
                <option value="Tripura">
                  34. TRIPURA / त्रिपुरा
                </option>
                <option value="Uttar_Pradesh">
                  35. UTTAR PRADESH / उत्तर प्रदेश
                </option>
                <option value="Uttarakhand">
                  36. UTTARAKHAND / उत्तराखण्ड
                </option>
                <option value="West_Bengal">
                  37. WEST BENGAL / पश्चिम बंगाल
                </option>
              </select>
            </div>
            <?php $rand = rand(999,9999); ?>
               <div class="form-group">
                  <input type="text" id="very-code" class="form-control" placeholder="Verfication Code" required="required">
               </div>
              
               <input type="hidden" value="<?=$rand ?>" id="form-rand">
               <div class="form-group small clearfix">
                  <label class="checkbox-inline">Verification Code <span class="required"
                      style="cursor: pointer">*</span></label>
                  &nbsp;&nbsp; <?=$rand ?>
               </div>

            <button type="button" class="btn btn-primary fcs-submit-button" id="submit-btn">Submit Application</button>
          </form>

        </div>
      </div>

      <div class="col-lg-6 pe-lg-4 ps-xl-2 wow fadeIn mb-3" data-wow-delay="0.1s">
        <div class="form-fssi">
          <div class="fssi-head d-flex align-items-center justify-content-center">
            <h2 class="text-uppercase text-center fs-5 m-0">FSSAI Annual Return Filing Assistance</h2>
          </div>

          <div class="form-instructions main-form-custom">

            <div class="fssai-info-box">

                     <!-- Subheading -->
                     <p class="info-subtext">
                        Stay compliant and avoid penalties with proper annual return filing.

                     </p>

                     <!-- Who Needs -->
                     <div class="info-section">
                        <h4>Who Must File?</h4>
                        <ul class="info-list">
                           <li>Manufacturers</li>
                           <li>Importers</li>
                           <li>Exporters</li>
                           <li>Food processors</li>
                        </ul>
                     </div>


                     <!-- Why -->
                     <div class="info-section">
                        <h4>Why Invenix India?</h4>
                        <ul class="info-list check">
                           <li>Compliance experts </li>
                           <li>Timely reminders </li>
                           <li>Accurate filing </li>
                           <li> Documentation support </li>
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

    // console.log(payable_price);

    $(document).on("click", "#submit-btn",(function(e) {      
      event.preventDefault();
      var data = [];
      var files_name_array = [];
      const final_amount = 4599;

      var form_id = "main-form1";


      var form_ok = check_required_fields(form_id);
      if(form_ok!=1) return false;

      loader("show");

      var current_url =  window.location.href;
      var form_name = 'APPLY FOR FSSAI ANNUAL RETURN FILING';
      var name = $('input[name="name"]').val();
      var email = $('input[name="email"]').val();
      var mobile = $('input[name="mobile"]').val();



      data.push({"name":"Mention FSSAI License Number For Which ANNUAL RETURN IS TO BE FILLED","value":$('input[name="existing_licence_number"]').val()});
      data.push({"name":"SELECT NUMBER OF RETURNS","value":$('select[name="tenure"]').val()});
      data.push({"name":"State / राज्य ","value":$('select[name="state"]').val()});


    


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