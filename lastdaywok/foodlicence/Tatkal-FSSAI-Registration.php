<?php include('header.php'); ?>


<style>

/* Form Container */
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

/* Textarea */
.main-form-custom textarea.form-control {
    height: auto;
    min-height: 90px;
}

/* Focus */
.main-form-custom .form-control:focus {
    border-color: #ff6a00;
    box-shadow: 0 0 0 2px rgba(255,106,0,0.15);
}

/* Warning Text (Red Info Lines) */
.form-group span[style*="color:red"] {
    display: block;
    background: #fff3f3;
    padding: 10px;
    border-left: 4px solid red;
    border-radius: 6px;
    margin-bottom: 10px;
    font-size: 12px !important;
}

/* Dropdown */
.main-form-custom select.form-control {
    cursor: pointer;
}

/* Spacing */
.form-group {
    margin-bottom: 15px;
}

/* File Upload */
input[type="file"] {
    padding: 8px;
    font-size: 13px;
}

/* Row Fix (custom row1) */
.row1 {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
}

.row1 .form-group {
    flex: 1;
}

/* Button */
#submit-btn {
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
#submit-btn:hover {
    background: #000;
    transform: translateY(-2px);
}

/* Hidden sections animation (optional smooth show) */
#file-section {
    transition: 0.3s ease-in-out;
}

/* Responsive */
@media (max-width: 768px) {
    .form-fssi {
        padding: 20px;
    }

    .fssi-head h2 {
        font-size: 13px;
    }

    .row1 {
        flex-direction: column;
    }
}
</style>


  <div class="container-fluid header hero-bg p-0 pb-5">
    <h1 class="text-uppercase text-center fs-3 p-4">APPLY FOR TATKAL FSSAI REGISTRATION</h1>
    <div class="row g-0 flex-column-reverse mx-2 flex-lg-row">

      <div class="col-lg-6 ps-lg-4 pe-xl-2 wow fadeIn" data-wow-delay="0.1s">
        <div class="form-fssi">
          <div class="fssi-head d-flex align-items-center justify-content-center">
            <h2 class="text-uppercase text-center fs-5 m-0">tatkal FSSAI REGISTRATION ONLINE APPLICATION FORM</h2>
          </div>

          <form id="main-form1" class="pb-5 main-form-custom pt-4" action="#" method="post" enctype="multipart/form-data">
            <!-- State Selection -->
            <div class="form-group txt" style="color:red;font-weight:bold;font-size:13px !important">
              <span style="color:red;font-size:13px;text-align:justify">
                Currently FSSAI Tatkal Processing Of Applications Is Available Only In 5 States (Given In Drop Down).
                Applicants From Other States Can File Non Tatkal Application By
                <a href="https://foodlicenceapply.com/">Clicking Here</a>
              </span>
            </div>
            <div class="form-group txt">
              <label>1. State / राज्य <span class="required"> *</span></label>
              <select id="office-state" class="form-control select-state" name="state"  required>
                <option value="">Select State</option>
                <option value="Andaman_And_Nicobar_Island">1. ANDAMAN AND NICOBAR ISLANDS / अंदमान और निकोबार द्वीपसमूह </option>
                <option value="Andhra_Pradesh">2. ANDHRA PRADESH / आन्ध्र प्रदेश </option>
                <option value="Arunachal_Pradesh">3. ARUNACHAL PRADESH / अरुणाचल प्रदेश</option>
                <option value="Assam">4. ASSAM / असम</option>
                <option value="Bihar">5. BIHAR / बिहार</option>
                <option value="Chhattisgarh">6. CHHATTISGARH / छत्तीसगढ़</option>
                <option value="Chandigarh">7. CHANDIGARH / चंडीगढ़ </option>
                <option value="Dadara">8.DADAR AND NAGAR HAVELI / दादरा और नगर हवेली</option>
                <option value="Daman">9. DAMAN AND DIU / दमन और दीव</option>
                <option value="Delhi">10. DELHI / दिल्ली</option>
                <option value="Goa">11. GOA / गोवा</option>
                <option value="Gujarat">12. GUJARAT / गुजरात</option>
                <option value="Haryana">13. HARYANA / हरियाणा</option>
                <option value="Himachal_Pradesh">14. HIMACHAL PRADESH / हिमाचल प्रदेश</option>
                <option value="Jammu_and_Kashmir">15. JAMMU AND KASHMIR / जम्मू और कश्मीर</option>
                <option value="Jharkhand">16. JHARKHAND / झारखण्ड</option>
                <option value="Karnataka">17. KARNATAKA / कर्णाटक</option>
                <option value="Kerala">18. KERALA / केरल</option>
                <option value="Ladakh">19. LADAKH / लद्दाख</option>
                <option value="Lakshadweep">20. LAKSHADWEEP / लक्षद्वीप</option>
                <option value="Madhya_Pradesh">21. MADHYA PRADESH / मध्य प्रदेश</option>
                <option value="Maharashtra">22. MAHARASHTRA / महाराष्ट्र</option>
                <option value="Manipur">23. MANIPUR / मणिपुर</option>
                <option value="Meghalaya">24. MEGHALAYA / मेघालय</option>
                <option value="Mizoram">25. MIZORAM / मिज़ोरम</option>
                <option value="Nagaland">26. NAGALAND / नागालैण्ड</option>
                <option value="Odisha">27. ODISHA / ओड़िशा</option>
                <option value="Puducherry">28. PUDUCHERRY / पुडुचेरी</option>
                <option value="Punjab">29. PUNJAB / पंजाब</option>
                <option value="Rajasthan">30. RAJASTHAN / राजस्थान</option>
                <option value="Sikkim">31. SIKKIM / सिक्किम</option>
                <option value="Tamil_Nadu">32. TAMIL NADU / तमिलनाडु</option>
                <option value="Telangana">33. TELANGANA / तेलंगाना</option>
                <option value="Tripura">34. TRIPURA / त्रिपुरा</option>
                <option value="Uttar_Pradesh">35. UTTAR PRADESH / उत्तर प्रदेश</option>
                <option value="Uttarakhand">36. UTTARAKHAND / उत्तराखण्ड</option>
                <option value="West_Bengal">37. WEST BENGAL / पश्चिम बंगाल</option>
              </select>
            </div>

            <!-- District Selection -->
            <div class="form-group txt">
              <label>2. District / जिला <span class="required"> *</span></label>
              <select class="form-control get-city" name="distric" id="office-district" required >
              </select>
            </div>

            <!-- Organisation Type -->
            <div class="form-group txt">
              <label>3. TYPE OF ORGANISATION / संगठन का प्रकार <span class="required"> *</span></label>
              <br>
              <span style="color:red;font-size:13px;text-align:justify">
                Only Individual / Proprietor Form Of Business Is Allowed To Apply Under FSSAI Tatkal Registration
                Scheme. Applicants Having Other Forms Of Business Viz. Partnership / LLP / Company Etc. Can File Non Tatkal By
                <a href="https://foodlicenceapply.com/">Clicking Here</a>.
              </span>
              <select class="form-control" name="organise_name" id="type_of_organisation"
                onchange="selectOrganisationType();" required>
                <option value="">Select Type</option>
                <option value="INDIVIDUAL">1. INDIVIDUAL</option>
                <option value="PROPRIETOR">2. PROPRIETOR</option>
              </select>
            </div>

            <!-- Business Type -->
            <div class="form-group txt" id="nature" style="display: n1one;">
              <label>4. Kind Of Business / व्यवसाय का प्रकार <span class="required"> *</span></label>
              <br>
              <span style="color:red;font-size:13px;text-align:justify">
                Business owners having the following kinds of business can apply for processing of their food license
                application under the Tatkal scheme. Applicants having other kinds of business can apply for non Tatkal application by <a href="https://foodlicenceapply.com/">Clicking Here</a>.
              </span>
              <select class="form-control businessTypesDropdown" name="business_name" id="nature_business" required>
                <option value="">Select</option>
                <option value="Importers" data-id="Importers">1. Importers</option>
                <option value="Exporters" data-id="Exporters">2. Merchant Exporters</option>
                <option value="Wholesaler" data-id="Wholesaler">3. Wholesaler</option>
                <option value="Transporter" data-id="Transporter">4. Transporter</option>
                <option value="Distributor" data-id="Distributor">5. Distributor</option>
                <option value="Retailer" data-id="Retailer">6. Retailer</option>
                <option value="Storage Without Atmospheric Controlled + Cold" data-id="Atmospheric-Controlled-without">7. Warehouse Without Atmospheric Controlled + Cold
                </option>
                <option value="Food Vending Agencies" data-id="Food-Vending-Agencies">8. Food Vending Agencies</option>
                <option value="Petty Food Business Operators"  data-id="small-business-operators">9. Small / Petty Food Business Operators</option>
              </select>
            </div>

            <div class="turnoverDisplay" style="display:none;">
                  <?php include('include/fssai-registration.php') ?>
               </div>

            <input type="hidden" id="payable_price" name="payable_price" class="payable-price" value="">

            <div class="form-group txt" id="file-section" style="display: n1one;">
              <!-- Applicant Name -->
              <div class="form-group txt">
                <label>Name of Applicant / आवेदक का नाम <span class="required"> *</span></label>
                <input type="text" class="form-control" name="name" id="applicant-name" required>
              </div>

              <!-- Email and Mobile -->
              <div class="row1">
                <div class="form-group txt col-lg-12">
                  <label>Email Id / ईमेल आईडी <span class="required"> *</span></label>
                  <input type="email" class="form-control" name="email" id="email-id" required>
                </div>
                <div class="form-group txt col-lg-12">
                  <label>Mobile No. / मोबाइल नंबर <span class="required"> *</span></label>
                  <input type="tel" maxlength="10" minlength="10" class="form-control" name="mobile"
                    id="mobile-number" required>
                </div>
              </div>

              <!-- Business Name -->
              <div class="form-group txt">
                <label>Name Of Business / Firm / Company / व्यवसाय / फर्म / कंपनी का नाम <span class="required">
                    *</span></label>
                <input type="text" class="form-control" name="busines_name" id="name-of-business" required>
              </div>

              <!-- Food Category -->
              <div class="form-group txt">
                <label>Name of the Food Category / खाद्य श्रेणी का नाम <span class="required"> *</span></label>
                <select class="form-control" name="food_cate" id="food_category" required>
                  <option value="">Select</option>
                  <option value="Dairy products and analogues, excluding products of food category 2.0">Dairy products
                    and
                    analogues</option>
                  <option value="Fats and oils, and fat emulsions">Fats and oils</option>
                  <option value="Edible ices, including sherbet and sorbet">Edible ices</option>
                  <option
                    value="Fruits and vegetables (including mushrooms and fungi, roots and tubers, pulses and legumes, and aloe vera)">
                    Fruits and vegetables</option>
                  <option value="Confectionery">Confectionery</option>
                  <option
                    value="Cereals and cereal products, derived from cereal grains, from roots and tubers, pulses, legumes">
                    Cereals and cereal products</option>
                  <option value="Bakery products">Bakery products</option>
                  <option value="Fish and fish products, including molluscs, crustaceans, and echinoderms">Fish and fish
                    products
                  </option>
                  <option value="Eggs and egg products">Eggs and egg products</option>
                  <option value="Sweeteners, including honey">Sweeteners, including honey</option>
                  <option value="Salts, spices, soups, sauces, salads and protein products">Salts, spices, soups,
                    sauces, salads
                    and protein products</option>
                  <option value="Foodstuffs intended for particular nutritional uses">Foodstuffs intended for particular
                    nutritional uses</option>
                  <option value="Beverages, excluding dairy products">Beverages</option>
                  <option value="Ready-to-eat savouries">Ready-to-eat savouries</option>
                  <option value="Prepared Foods">Prepared Foods</option>
                  <option value="Substances added to food">Substances added to food</option>
                  <option value="others">Others</option>
                </select>
              </div>

              

              <!-- Address -->
              <div class="form-group txt">
                <label>Complete Business Address / पता <span class="required"> *</span></label>
                <textarea class="form-control" name="address" id="office-address" required rows="3"></textarea>
              </div>

              <!-- Pincode -->
              <div class="form-group txt">
                <label>PINCODE</label>
                <input type="text" class="form-control" name="pincode" id="pincode" minlength="6" maxlength="6"
                  required>
              </div>

              <!-- GST -->
              <div class="form-group txt gst">
                <label>Enter GST No <span class="required"> *</span></label><br>
                <div class="input-group">
                  <input type="text" class="form-control" name="gst" required>
                </div>
              </div>

              <!-- Uploads -->
              <div class="form-group txt">
                <label>UPLOAD AADHAAR CARD FRONT SIDE <span class="required"> *</span></label>
                <input type="file" class="form-control" name="upload_aadhaar_card_front">
              </div>
              <div class="form-group txt">
                <label>UPLOAD AADHAAR CARD BACK SIDE <span class="required"> *</span></label>
                <input type="file" class="form-control" name="upload_aadhaar_card_back">
              </div>
              <div class="form-group txt">
                <label>UPLOAD PAN CARD <span class="required"> *</span></label>
                <input type="file" class="form-control" name="upload_pan_card_front">
              </div>
              <div class="form-group txt">
                <label>UPLOAD a photo of the owner standing in front of the shop <span class="required">
                    *</span></label>
                <input type="file" class="form-control" name="upload_owner_photo">
              </div>

              <!-- Submit -->
              <button type="button" name="submit" class="btn btn-primary mt-3" id="submit-btn">Submit Application</button>
            </div>
          </form>

        </div>
      </div>

      <div class="col-lg-6 pe-lg-4 ps-xl-2 wow fadeIn" data-wow-delay="0.1s">
        <div class="form-fssi">
          <div class="fssi-head d-flex align-items-center justify-content-center">
            <h2 class="text-uppercase text-center fs-5 m-0">Tatkal FSSAI Registration Assistance</h2>
          </div>

          <div class="form-instructions main-form-custom pt-4">
            
            <div class="fssai-info-box">

                     <!-- Subheading -->
                     <p class="info-subtext">
                        Need urgent FSSAI registration? Get expert support for faster processing
                     </p>

                     <!-- Disclaimer -->
                     <div class="info-disclaimer">
                        <strong>Compliance Notice</strong>
                        <p>We do not guarantee approval or processing time. Approval depends on the authority.</p>
                     </div>

                     <!-- What is -->
                     <div class="info-section">
                        <h4>What is Tatkal FSSAI?</h4>
                        <p>Tatkal FSSAI is an assistance model where we prioritize documentation and filing speed.</p>
                     </div>

                     <!-- Who Needs -->
                     <div class="info-section">
                        <h4>Best For:</h4>
                        <ul class="info-list">
                           <li>Urgent business openings</li>
                           <li>Swiggy/Zomato onboarding</li>
                           <li>Franchise launches</li>
                        </ul>
                     </div>

                     <!-- Process -->
                     <div class="info-section">
                        <h4>How We Help</h4>
                        <ul class="info-list">
                           <li>Same-day filing support</li>
                           <li>Priority handling</li>
                           <li>Error-free documentation</li>
                           <li> Real-time updates</li>
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
  <?php  
    $base  = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]".str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
  ?>

    var api_url = '<?=$api_url ?>';
    var base_url = '<?=$base ?>';
    // const final_amount = 1;

    $(document).on("click", "#submit-btn",(function(e) {      
      event.preventDefault();
      var data = [];
      var files_name_array = [];

      const final_amount = $("#payable_price").val();

      var form_id = "main-form1";


      var form_ok = check_required_fields(form_id);
      if(form_ok!=1) return false;

      loader("show");

      var current_url =  window.location.href;
      var form_name = 'APPLY FOR tatkal FSSAI REGISTRATION | FSSAI FOOD LICENSE';
      var name = $('input[name="name"]').val();
      var email = $('input[name="email"]').val();
      var mobile = $('input[name="mobile"]').val();



      data.push({"name":"State / राज्य ","value":$('select[name="state"]').val()});
      data.push({"name":"District / जिला","value":$('select[name="distric"]').val()});
      data.push({"name":"TYPE OF ORGANISATION / संगठन का प्रकार","value":$('select[name="organise_name"]').val()});
      data.push({"name":"Kind Of Business / व्यवसाय का प्रकार","value":$('select[name="business_name"]').val()});
      data.push({"name":"Name of Applicant / आवेदक का नाम","value":$('input[name="name"]').val()});
      data.push({"name":"Email Id / ईमेल आईडी","value":$('input[name="email"]').val()});
      data.push({"name":"Mobile No. / मोबाइल नंबर","value":$('input[name="mobile"]').val()});
      data.push({"name":"Name Of Business / Firm / Company / व्यवसाय / फर्म / कंपनी का नाम","value":$('input[name="busines_name"]').val()});
      data.push({"name":"Name of the Food Category / खाद्य श्रेणी का नाम","value":$('select[name="food_cate"]').val()});
      data.push({"name":"Complete Business Address / पता","value":$('input[name="address"]').val()});
      data.push({"name":"PINCODE","value":$('input[name="pincode"]').val()});
      data.push({"name":"Enter GST No","value":$('input[name="gst"]').val()});
      data.push({"name":"Amount","value":$('input[name="payable_price"]').val()});




      files_name_array.push({"name":"UPLOAD AADHAAR CARD FRONT SIDE","key":"upload_aadhaar_card_front"});
      files_name_array.push({"name":"UPLOAD AADHAAR CARD BACK SIDE","key":"upload_aadhaar_card_back"});
      files_name_array.push({"name":"UPLOAD PAN CARD","key":"upload_pan_card_front"});
      files_name_array.push({"name":"UPLOAD a photo of the owner standing in front of the shop","key":"upload_owner_photo"});





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