<?php include('header.php'); ?>
<style type="text/css">
   
/* Form Container */
.form-fssi {
    background: #ffffff;
    padding: 25px;
    border-radius: 15px;
    box-shadow: 0 15px 35px rgba(0,0,0,0.08);
    border: 1px solid #eee;
}

/* Heading */
.fssi-head {
    background: linear-gradient(135deg, #1c5482, #0f3c60);
    padding: 12px;
    border-radius: 10px;
    margin-bottom: 20px;
}

.fssi-head h2 {
    color: #fff;
    font-weight: 600;
    font-size: 16px;
}

/* Labels */
.main-form-custom label {
    font-size: 13px;
    font-weight: 600;
    color: #333;
    margin-bottom: 5px;
}

/* Required star */
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
    box-shadow: none;
}

/* Textarea */
.main-form-custom textarea.form-control {
    height: auto;
    min-height: 80px;
}

/* Focus Effect */
.main-form-custom .form-control:focus {
    border-color: #1c5482;
    box-shadow: 0 0 0 2px rgba(28,84,130,0.1);
}

/* Select */
.main-form-custom select.form-control {
    cursor: pointer;
}

/* Form spacing */
.form-group {
    margin-bottom: 15px;
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

/* Verification box */
#very-code {
    border: 2px dashed #1c5482;
    text-align: center;
    font-weight: 600;
}

/* Verification number */
.small label {
    font-size: 13px;
    font-weight: 600;
}

/* Submit Button */
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

/* File input */
input[type="file"] {
    padding: 8px;
}

/* Responsive */
@media (max-width: 768px) {
    .form-fssi {
        padding: 20px;
    }

    .fssi-head h2 {
        font-size: 14px;
    }
}
</style>
<!-- Header Start -->
<div class="container-fluid header hero-bg p-0 pb-5">
   <h1 class="text-uppercase text-center fs-3 p-4">APPLY FOR FSSAI REGISTRATION</h1>
   <div class="row g-0 flex-column-reverse flex-lg-row mx-2">
      
      <div class="col-lg-6 ps-lg-4 pe-xl-2 wow fadeIn" data-wow-delay="0.1s">
         <div class="form-fssi">
            <div class="fssi-head d-flex align-items-center justify-content-center">
               <h2 class="text-uppercase text-center fs-5 m-0">FSSAI Registration
                  Online
                  Apply
               </h2>
            </div>
            <form action="#!" method="post" enctype="multipart/form-data" class="main-form-custom" id="main-form1">
               <div class="form-group txt">
                  <label for="applicant-name"> Name of Applicant / आवेदक का नाम <span class="required">
                  *</span></label>
                  <input type="text" class="form-control" name="name" id="applicant-name" value=""
                     required="">
               </div>
               <div class="form-group txt">
                  <label for="email-id">Email Id / ईमेल आईडी <span class="required"> *</span></label>
                  <input type="text" class="form-control" name="email" id="email-id" required="">
               </div>
               <div class="form-group txt">
                  <label for="mobile-number">Mobile Number / मोबाइल नंबर <span class="required">
                  *</span></label>
                  <input type="tel" maxlength="10" minlength="10" class="form-control" name="mobile"
                     id="mobile-number" required="">
               </div>
               <div class="form-group txt">
                  <label for="name-of-business">Name Of Business / Firm / Company / व्यवसाय / फर्म / कंपनी का नाम <span class="required"> *</span></label>
                  <input type="text" class="form-control" name="busines_name" id="name-of-business"
                     required="">
               </div>
               <div class="form-group txt">
                  <label for="food_category">Name of the Food Category / खाद्य श्रेणी का नाम <span
                     class="required">
                  *</span></label>
                  <select class="form-control" name="food_cate" id="food_category"
                     required="">
                     <option value="">Select</option>
                     <option value="Dairy products and analogues, excluding products of food category 2.0">
                        Dairy products and analogues, excluding products of food category 2.0
                     </option>
                     <option value="Fats and oils, and fat emulsions">Fats and oils, and fat emulsions
                     </option>
                     <option value="Edible ices, including sherbet and sorbet">Edible ices, including sherbet and sorbet
                     </option>
                     <option value="Fruits and vegetables (including mushrooms and fungi, roots and tubers, pulses and legumes, and aloe vera)">Fruits and vegetables (including mushrooms and fungi, roots and tubers, pulses and legumes, and aloe vera) </option>
                     <option value="Confectionery">Confectionery</option>
                     <option
                        value="Cereals and cereal products, derived from cereal grains, from roots and tubers, pulses, legumes">
                        Cereals and cereal products, derived from cereal grains, from roots and tubers,
                        pulses, legumes
                     </option>
                     <option value="Bakery products">Bakery products</option>
                     <option value="Fish and fish products, including molluscs, crustaceans, and echinoderms">
                        Fish and fish products, including molluscs, crustaceans, and echinoderms
                     </option>
                     <option value="Eggs and egg products">Eggs and egg products</option>
                     <option value="Sweeteners, including honey">Sweeteners, including honey</option>
                     <option value="Salts, spices, soups, sauces, salads and protein products">Salts, spices,
                        soups, sauces, salads and protein products
                     </option>
                     <option value="Foodstuffs intended for particular nutritional uses">Foodstuffs intended
                        for particular nutritional uses
                     </option>
                     <option value="Beverages, excluding dairy products">Beverages, excluding dairy products
                     </option>
                     <option value="Ready-to-eat savouries">Ready-to-eat savouries</option>
                     <option value="Prepared Foods">Prepared Foods</option>
                     <option value="Substances added to food">Substances added to food</option>
                     <option value="others">Others</option>
                  </select>
               </div>


               <div class="form-group txt">
                  <label for="nature_business">Kind Of Business / व्यवसाय का प्रकार <span class="required">
                  *</span></label>
                  <select class="form-control businessTypesDropdown" name="business_name" id="nature_business" required="">
                     <option value="" selected>Select</option>
                     <option value="Small / Petty Food Business Operators" data-id="small-business-operators">1. Small / Petty Food Business Operators
                     </option>
                     <option value="Dairy Units including Milk Chilling Units" data-id="Dairy-Units">2. Dairy Units including Milk Chilling Units
                     </option>
                     <option value="Vegetable Oil Processing Units" data-id="Vegetable-Oil">3. Vegetable Oil Processing Units
                     </option>
                     <option value="Slaughtering House" data-id="Slaughtering-House">4. Slaughtering House</option>
                     <option value="Fish Poultry Farm" data-id="Fish-Poultry-Farm">5. Fish Seller / Poultry Products Seller
                     </option>
                     <option value="Meat Processing" data-id="Meat-Processing">6. Meat Processing</option>
                     <option value="Food Manufacturing/Processing units other than Dairy Units, Vegetable Oil, Meat Processing, and Slaughtering Houses" data-id="Manufacturer-of-any-food">
                        7. Manufacturer / Processor of any food other than Dairy Units, Vegetable Oil....
                     </option>
                     <option value="Proprietary Food" data-id="Proprietary-Food">8. Proprietary Food</option>
                     <option value="Food or Health Supplements and Nutraceuticals etc." data-id="Food-or-Health">9. Food or Health Supplements and Nutraceuticals etc.
                     </option>
                     <option value="Radiation processing of food" data-id="Radiation-processing">10. Radiation processing of food</option>
                     <option value="Substances added to Food" data-id="Substances-added">11. Substances added to Food</option>
                     <option value="Storage - Cold/Refrigerated" data-id="warehouse">12. Warehouse - Cold/Refrigerated</option>
                     <option value="Storage – Atmospheric Controlled + Cold" data-id="Atmospheric-Controlled">13. Warehouse – Atmospheric Controlled + Cold
                     </option>
                     <option value="Storage Without Atmospheric Controlled + Cold" data-id="Atmospheric-Controlled-without">14. Warehouse Without Atmospheric Controlled + Cold
                     </option>
                     <option value="Transporter" data-id="Transporter">15. Transporter</option>
                     <option value="Wholesaler" data-id="Wholesaler">16. Wholesaler</option>
                     <option value="Distributor" data-id="Distributor">17. Distributor</option>
                     <option value="Retailer" data-id="Retailer">18. Retailer</option>
                     <option value="Hotel" data-id="Hotel">19. Hotel</option>
                     <option value="Restaurants" data-id="Restaurants">20. Restaurants</option>
                     <option value="Club/Canteen" data-id="Club-Canteen">21. Club/Canteen</option>
                     <option value="Caterer" data-id="Caterar">22. Caterer</option>
                     <option value="Food Vending Agencies" data-id="Food-Vending-Agencies">23. Food Vending Agencies</option>
                     <option value="Dhaba" data-id="Dhaba">24. Dhaba</option>
                     <option value="Importers" data-id="Importers">25. Importers</option>
                     <option value="Exporters" data-id="Exporters">26. Exporters</option>
                     <option value="E-commerce" data-id="E-commerce">27. E-commerce</option>
                     <option value="Head Office/Registered Office" data-id="Head-Office">28. Head Office/Registered Office</option>
                     <option value="Relabellers And Repackers" data-id="Relabellers-Repackers">29. Relabellers And Repackers</option>
                     <option value="Any Other Food Business not mentioned above" data-id="Any-Other">30. Any Other Food Business
                        not mentioned above
                     </option>
                  </select>
               </div>
               <!-- 1 -->
               <div class="turnoverDisplay" style="display:none;">
                  <?php include('include/fssai-registration.php') ?>
               </div>

               <input type="hidden" id="payable_price" name="payable_price" class="payable-price" value="">

               <div class="form-group txt">
                  <label for="office-address">Complete Business Address / पता <span class="required">
                  *</span></label>
                  <textarea class="form-control" name="address" id="office-address" required=""
                     cols="10" row="5"></textarea>
               </div>

               <div class="row form-group">
                  <div class=" col-lg-4 txt">
                     <label>PINCODE</label>
                     <input type="text" class="form-control" name="pincode" id="pincode"  minlength="6" maxlength="6" required="">
                  </div>

                  <div class=" txt col-lg-4 col-12">
                     <label>State / राज्य <span class=""> *</span></label>
                     <select id="office-state" size="1" class="form-control select-state" name="state" required="">
                        <option value="" selected>Select State</option>
                        <option value="Andaman_And_Nicobar_Island">1. ANDAMAN AND NICOBAR ISLANDS / अंदमान और निकोबार
                          द्वीपसमूह</option>
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
                  <div class=" txt col-lg-4 col-12">
                     <label>District / जिला <span class=""> *</span></label>
                     <select class="form-control get-city" name="distric" id="office-district" required="">
                     </select>
                  </div>
               </div>

               <div class="form-group txt">
                  <label>UPLOAD PAN CARD <span class=""> *</span></label>
                  <input type="file" class="form-control" id="pan_card" name="upload_pan_card_front">
               </div>

               <div class="form-group row form-check ms-3">
                  <div class="col-lg-12"><input type="checkbox" class="form-check-input"
                     name="terms_of_service" id="terms-of-service" required="">
                     <label class="form-check-label " for="terms-of-service">I AGREE TO THE <a href="Terms-And-Conditions.php"
                        class="">TERMS OF SERVICE</a></label>
                  </div>
                  <div class="col-lg-12"><input type="checkbox" class="form-check-input" name="tos4" id="tos4"
                     required="">
                     <label class="form-check-label" for="tos4"><span class="blink"
                        style="font-size: 14px;font-weight: 600;">I,
                     the applicant agree to share OTP</span> sent on my mobile and / or other Details
                     required for the purpose of FOOD LICENCE Certificate Generation.<br><br>I am aware that generation of
                     FOOD LICENCE certificate requires OTP verification<span class="required txt">[UPDATED]</span></label>
                  </div>
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
               <!-- <input type="hidden" class="form-control" name="form_name" value="FSSAI Registration"> -->
               <br>
               <button type="button" name="submit" class="btn btn-primary fcs-submit-button" id="submit-btn">Submit Application</button>
            </form>
         </div>
      </div>

      <div class="col-lg-6 pe-lg-4 ps-xl-2 wow fadeIn" data-wow-delay="0.1s">
         <div class="form-fssi">
            <div class="fssi-head d-flex align-items-center justify-content-center">
               <h2 class="text-uppercase text-center fs-5 m-0">FSSAI Registration Services in India</h2>
            </div>
            <div class="form-instructions main-form-custom pt-4">
               <div class="form-instructions main-form-custom pt-4">
                  <div class="fssai-info-box">

                     <!-- Subheading -->
                     <p class="info-subtext">
                        Get professional assistance for FSSAI registration with complete documentation support and expert guidance.
                     </p>

                     <!-- Disclaimer -->
                     <div class="info-disclaimer">
                        <strong>Important Disclaimer:</strong>
                        <p>
                           Invenix India is a private consultancy firm and is not associated with FSSAI or any government authority. We provide professional assistance for application filing and compliance. Approval is subject to authority verification.
                        </p>
                     </div>

                     <!-- What is -->
                     <div class="info-section">
                        <h4>What is FSSAI Registration?</h4>
                        <p>
                           FSSAI registration is mandatory for every food business operator (FBO) in India. It ensures food safety compliance and legal operation.
                        </p>
                        <p>
                           At Invenix India, we help you identify the correct category and complete the process smoothly.
                        </p>
                     </div>

                     <!-- Who Needs -->
                     <div class="info-section">
                        <h4>Who Needs It?</h4>
                        <ul class="info-list">
                           <li>Restaurants</li>
                           <li>Home kitchens</li>
                           <li>Food stalls</li>
                           <li>Cloud kitchens</li>
                           <li>Bakeries</li>
                           <li>Food manufacturers</li>
                           <li>Online food sellers</li>
                        </ul>
                     </div>

                     <!-- Process -->
                     <div class="info-section">
                        <h4>Our Process</h4>
                        <ul class="info-list">
                           <li>Free consultation</li>
                           <li>Document checklist</li>
                           <li>Application filing</li>
                           <li>Authority follow-up</li>
                           <li>Completion support</li>
                        </ul>
                     </div>

                     <!-- Why -->
                     <div class="info-section">
                        <h4>Why Invenix India?</h4>
                        <ul class="info-list check">
                           <li>Experienced consultants</li>
                           <li>Transparent pricing</li>
                           <li>Pan India support</li>
                           <li>Dedicated assistance</li>
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
</div>
<!-- Header End -->
<!-- Service Start -->
<!-- <div class="container-xxl pt-5">
   <div class="container">
      <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
         <h2 class="text-uppercase text-center fs-3 m-0">TYPES OF FSSAI REGISTRATION</h2>
         <p class="py-3">The Food Safety and Standards Authority of India (FSSAI) offers different types of
            registrations and
            licenses based on
            the scale and nature of the food business. These registrations are categorized into three main
            types:
         </p>
      </div>
      <div class="row g-4">
         <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item bg-light rounded h-100 p-4">
               <div
                  class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4">
                  <img class="img-fluid " width="132" src="img/1.png" alt="">
               </div>
               <h4 class="mb-3">FSSAI Basic Registration</h4>
               <p class="mb-4">This type of registration is suitable for small-scale food businesses. Here are
                  the key features:
               </p>
               <p>
                  <strong>Eligibility:</strong> Small businesses that have an annual turnover of less than ₹12
                  lakh
                  (approximately $16,000) are eligible for FSSAI Basic Registration.
               </p>
               <p>
                  <strong>Scope:</strong> Basic Registration is ideal for businesses like small-scale
                  manufacturers, storage units,
                  transporters, retailers, and distributors.
               </p>
               <p>
                  <strong>Validity:</strong> The validity of FSSAI Basic Registration is typically for 1 to 5
                  years, and it can be
                  renewed
                  as needed.
               </p>
               <p>
                  <strong>Documentation:</strong> The documentation required for Basic Registration is minimal
                  and straightforward,
                  making
                  it accessible for small businesses.
               </p>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item bg-light rounded h-100 p-4">
               <div
                  class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4">
                  <img class="img-fluid " width="132" src="img/2.png" alt="">
               </div>
               <h4 class="mb-3">FSSAI State License</h4>
               <p class="mb-4">State License is suitable for medium-sized food businesses operating within a
                  specific state. Here are the key features:
               </p>
               <p><strong>Eligibility:</strong> Businesses with an annual turnover of more than ₹12 lakh
                  (approximately $16,000) and
                  less than ₹20 crore (approximately $2.7 million) are eligible for FSSAI State License.
               </p>
               <p><strong>Scope:</strong> State License is typically suitable for medium-scale manufacturers,
                  storage units,
                  transporters, retailers, and distributors operating within a specific state.
               </p>
               <p><strong>Validity:</strong> The State License is generally issued for 1 to 5 years and can be
                  renewed as required.
               </p>
               <p><strong>Documentation:</strong> The documentation requirements for State License are more
                  extensive than Basic
                  Registration but still manageable for medium-sized businesses.
               </p>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item bg-light rounded h-100 p-4">
               <div
                  class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4">
                  <img class="img-fluid " width="132" src="img/3.png" alt="">
               </div>
               <h4 class="mb-3">FSSAI Central License</h4>
               <p class="mb-4">Central License is necessary for large-scale food businesses that operate at a
                  national level or have multiple locations
                  in different states. Here are the key features:
               </p>
               <p><strong>Eligibility:</strong> Large food businesses with an annual turnover exceeding ₹20
                  crore (approximately $2.7
                  million) are required to obtain FSSAI Central License.
               </p>
               <p><strong>Scope:</strong> Central License is suitable for large manufacturers, importers,
                  exporters, and distributors
                  with a national presence.
               </p>
               <p><strong>Validity:</strong> Similar to the other types, Central License is issued for 1 to 5
                  years and can be renewed
                  as necessary.
               </p>
               <p><strong>Documentation:</strong> The documentation requirements for Central License are more
                  extensive and detailed,
                  given the larger scale and complexity of the businesses it covers.
               </p>
            </div>
         </div>
      </div>
   </div>
   <p class="px-5 pt-4 text-center ">It's important to note that FSSAI regulations can change over time, so
      businesses should always check the
      latest
      guidelines and requirements when applying for or renewing their FSSAI registrations or licenses.
      Additionally, the
      specific requirements and documentation may vary from state to state, so it's advisable to consult with an
      FSSAI
      consultant or visit the official FSSAI website for the most up-to-date information and guidance.
   </p>
</div> -->
<!-- Service End -->
<!-- <div class="container-xxl pt-5">
   <div class="container">
      <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
         <h2 class="text-uppercase text-center fs-3 m-0">BENEFITS OF FSSAI REGISTRATION</h2>
      </div>
      <div class="row g-4">
         <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item bg-light rounded h-auto p-4">
               <p>
                  <strong>1. Legal Benefits:</strong> FSSAI registration ensures that your food business
                  complies with the
                  legal standards set by the Food Safety and Standards Authority of India. This compliance
                  protects your business from legal issues and penalties.
               </p>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item bg-light rounded h-100 p-4">
               <p>
                  <strong>2. Enhanced Customer Trust:</strong> Displaying the FSSAI logo on your products
                  enhances
                  customer trust. It signifies that your food products meet the safety and quality standards,
                  thus building a positive image for your brand.
               </p>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item bg-light rounded h-100 p-4">
               <p><strong>3. Improved Food Safety:</strong> FSSAI registration promotes adherence to hygiene
                  and safety
                  protocols in food handling and processing, reducing the risk of foodborne illnesses and
                  ensuring the health of consumers.
               </p>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item bg-light rounded h-100 p-4">
               <p><strong>4. Market Access and Business Expansion:</strong> FSSAI registration promotes
                  adherence to hygiene
                  and safety
                  protocols in food handling and processing, reducing the risk of foodborne illnesses and
                  ensuring the health of consumers.
               </p>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item bg-light rounded h-100 p-4">
               <p><strong>5. Quality Assurance:</strong> FSSAI registration provides a guarantee of the quality
                  and safety of
                  food products, which can differentiate your brand in a competitive market.
               </p>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item bg-light rounded h-100 p-4">
               <p><strong>6. Consumer Awareness:</strong> Educated consumers often check for FSSAI registration
                  before
                  purchasing food products. Being registered can cater to this segment, boosting your sales.
               </p>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item bg-light rounded h-100 p-4">
               <p><strong>7. Business Credibility:</strong> An FSSAI registration adds credibility to your food
                  business. It
                  demonstrates that your business is serious about food safety and quality, attracting more
                  customers and potential business partners.
               </p>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item bg-light rounded h-100 p-4">
               <p><strong>8. Operational Efficiency:</strong> Adhering to FSSAI guidelines ensures that your
                  business
                  operations are streamlined and efficient, reducing wastage and improving overall
                  productivity.
               </p>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item bg-light rounded h-100 p-4">
               <p><strong>9. Government Benefits:</strong> Registered food businesses can avail of various
                  government
                  schemes and benefits aimed at promoting the food industry, including subsidies and
                  financial assistance.
               </p>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item bg-light rounded h-100 p-4">
               <p><strong>10. Improved Product Labeling:</strong> FSSAI registration requires proper labeling
                  of food
                  products, which helps in providing accurate information to consumers about the product’s
                  ingredients, nutritional value, and expiry date.
               </p>
            </div>
         </div>
      </div>
   </div>
   <p class="px-5 pt-4 text-center  ">By obtaining FSSAI registration, your food business not only complies with
      the
      necessary
      regulations but also reaps numerous benefits that contribute to its growth and sustainability
   </p>
</div>
<div class="container-xxl pt-5">
   <div class="container">
      <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
         <h2 class="text-uppercase text-center fs-3 m-0">Documents Required for Obtaining FSSAI Registration
         </h2>
      </div>
      <div class="row g-4">
         <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="section">
               <h2 class="fs-5 pt-4 pb-2">=> Basic FSSAI Registration (For petty food business operators)</h2>
               <ul class="service-item bg-light rounded h-100 p-5">
                  <li class="py-2"><strong>Application Form A:</strong> Duly completed and signed.</li>
                  <li class="py-2"><strong>Photo Identity Proof:</strong> A copy of the applicant’s valid ID
                     proof (Aadhar card, Voter ID,
                     Passport, etc.).
                  </li>
                  <li class="py-2"><strong>Passport-sized Photograph:</strong> Recent photograph of the
                     applicant.
                  </li>
               </ul>
            </div>
            <div class="section">
               <h2 class="fs-5 pt-4 pb-2">=> FSSAI State License (For medium-sized food businesses)</h2>
               <ul class="service-item bg-light rounded h-100 p-5">
                  <li class="py-2"><strong>Application Form B:</strong> Duly completed and signed.</li>
                  <li class="py-2"><strong>Photo Identity Proof:</strong> A copy of the applicant’s valid ID
                     proof.
                  </li>
                  <li class="py-2"><strong>Passport-sized Photograph:</strong> Recent photograph of the
                     applicant.
                  </li>
                  <li class="py-2"><strong>Proof of Possession of Premises:</strong> Rental agreement, utility
                     bill, or ownership document.
                  </li>
                  <li class="py-2"><strong>Food Safety Management Plan (FSMS):</strong> A brief plan outlining
                     the food safety protocols and
                     practices.
                  </li>
                  <li class="py-2"><strong>Supporting Documents:</strong> NOCs from the local municipality or
                     other relevant authorities, if
                     applicable.
                  </li>
                  <li class="py-2"><strong>Business Registration Proof:</strong> Incorporation certificate,
                     partnership deed, or other relevant
                     business registration documents.
                  </li>
                  <li class="py-2"><strong>List of Food Products:</strong> Detailed list of food products to
                     be handled/manufactured.
                  </li>
                  <li class="py-2"><strong>Water Testing Report:</strong> Report of water used in food
                     processing, if applicable.
                  </li>
               </ul>
            </div>
            <div class="section">
               <h2 class="fs-5 pt-4 pb-2">=> FSSAI Central License (For large-scale food businesses)</h2>
               <ul class="service-item bg-light rounded h-100 p-5">
                  <li class="py-2"><strong>Application Form B:</strong> Duly completed and signed.</li>
                  <li class="py-2"><strong>Photo Identity Proof:</strong> A copy of the applicant’s valid ID
                     proof.
                  </li>
                  <li class="py-2"><strong>Passport-sized Photograph:</strong> Recent photograph of the
                     applicant.
                  </li>
                  <li class="py-2"><strong>Proof of Possession of Premises:</strong> Rental agreement, utility
                     bill, or ownership document.
                  </li>
                  <li class="py-2"><strong>Food Safety Management Plan (FSMS):</strong> A detailed plan
                     outlining the food safety protocols and
                     practices.
                  </li>
                  <li class="py-2"><strong>Supporting Documents:</strong> NOCs from the local municipality or
                     other relevant authorities, if
                     applicable.
                  </li>
                  <li class="py-2"><strong>Business Registration Proof:</strong> Incorporation certificate,
                     partnership deed, or other relevant
                     business registration documents.
                  </li>
                  <li class="py-2"><strong>List of Food Products:</strong> Detailed list of food products to
                     be handled/manufactured.
                  </li>
                  <li class="py-2"><strong>Water Testing Report:</strong> Report of water used in food
                     processing, if applicable.
                  </li>
                  <li class="py-2"><strong>Nomination of Person:</strong> Letter of authority from the
                     manufacturer nominating a person
                     responsible for ensuring compliance with FSSAI regulations.
                  </li>
                  <li class="py-2"><strong>Proof of Annual Turnover:</strong> Financial documents supporting
                     the business’s annual turnover.
                  </li>
                  <li class="py-2"><strong>Import Export Code (IEC):</strong> Required for food businesses
                     involved in import/export.
                  </li>
               </ul>
            </div>
            <div class="section">
               <h3 class="fs-5 pt-4 pb-2">=> Additional Documents (if applicable)</h3>
               <ul class="service-item bg-light rounded h-100 p-5">
                  <li class="py-2"><strong>No Objection Certificate (NOC):</strong> From the local
                     municipality or health department.
                  </li>
                  <li class="py-2"><strong>Proof of Food Safety Management System:</strong> Certificates or
                     documents proving the
                     implementation of food safety management systems.
                  </li>
                  <li class="py-2"><strong>Proof of Refrigeration Facility:</strong> For businesses dealing
                     with perishable food items.
                  </li>
                  <li class="py-2"><strong>FSSAI Declaration Form:</strong> Declaration as per FSSAI
                     guidelines.
                  </li>
               </ul>
            </div>
            <div class="section">
               <h2 class="fs-5 pt-4 pb-2">=> Steps to Apply for FSSAI Registration</h2>
               <ol class="service-item bg-light rounded h-100 p-5">
                  <li class="py-2"><strong>Determine the Type of Registration/License:</strong> Based on your
                     business size and nature.
                  </li>
                  <li class="py-2"><strong>Gather Required Documents:</strong> Ensure all necessary documents
                     are complete and accurate.
                  </li>
                  <li class="py-2"><strong>Fill the Application Form:</strong> Form A for basic registration
                     and Form B for state and central
                     licenses.
                  </li>
                  <li class="py-2"><strong>Submit the Application:</strong> Submit the application and
                     required documents to the FSSAI
                     authority.
                  </li>
                  <li class="py-2"><strong>Pay the Fee:</strong> Pay the registration fee as applicable.</li>
                  <li class="py-2"><strong>Inspection (if needed):</strong> An FSSAI officer may inspect your
                     premises before granting the
                     license.
                  </li>
                  <li class="py-2"><strong>Obtain Registration/License:</strong> Upon approval, you will
                     receive your FSSAI
                     registration/license.
                  </li>
                  <p>By ensuring you have all the required documents and following the proper application
                     process, you
                     can smoothly obtain
                     FSSAI registration and ensure your food business operates legally and meets the
                     necessary food
                     safety standards.
                  </p>
               </ol>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="container-xxl pt-5">
   <div class="container">
      <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
         <h2 class="text-uppercase text-center fs-3 m-0">TYPES OF FSSAI LICENSE REGISTRATION</h2>
         <p class="pt-3">The Food Safety and Standards Authority of India (FSSAI) offers different types of
            licenses/registrations based on the
            scale and nature of the food business. As of my last knowledge update in September 2021, here are
            the three primary
            types of FSSAI licenses/registrations.
         </p>
      </div>
      <div class="row g-4">
         <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item bg-light rounded h-75 p-4">
               <h4 class="mb-3">FSSAI State License</h4>
               <p>
                  This is required for small food businesses with an annual turnover of up to Rs.12 lakhs.
                  Basic registration is suitable
                  for small-scale manufacturers, distributors, and food retailers. The basic registration is
                  granted by the local food
                  safety authority.
               </p>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item bg-light rounded h-100 p-4">
               <h4 class="mb-3">FSSAI State License</h4>
               <p>
                  Businesses with an annual turnover of more than Rs.12 lakhs but less than Rs.20crores are
                  required to obtain an FSSAI
                  State License. This category covers medium-sized food businesses and manufacturers that
                  operate within a specific state.
                  State licenses are issued by the State Food Safety Department.
               </p>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item bg-light rounded h-100 p-4">
               <h4 class="mb-3">FSSAI Central License</h4>
               <p>
                  Large food businesses with an annual turnover exceeding Rs.20crore, or those involved in
                  import and export of food
                  products, are required to obtain an FSSAI Central License. This category is for businesses
                  that operate across multiple
                  states or at a national level. Central licenses are issued by the Central Licensing
                  Authority, which is the FSSAI
                  headquarters in New Delhi.
               </p>
            </div>
         </div>
      </div>
   </div>
</div> -->
<?php include('footer.php'); ?>
<script>
  
   
   
   
   
   
   
   
</script>








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
    const final_amount = $("#payable_price").val();

      var form_id = "main-form1";


      var form_ok = check_required_fields(form_id);
      if(form_ok!=1) return false;

      loader("show");

      var current_url =  window.location.href;
      var form_name = 'APPLY FOR FSSAI LICENSE | FOOD LICENSE CERTIFICATE | FOSCOS';
      var name = $('input[name="name"]').val();
      var email = $('input[name="email"]').val();
      var mobile = $('input[name="mobile"]').val();



      data.push({"name":"Name Of Business / Firm / Company / व्यवसाय / फर्म / कंपनी का नाम","value":$('input[name="busines_name"]').val()});
      data.push({"name":"Name of the Food Category / खाद्य श्रेणी का नाम","value":$('select[name="food_cate"]').val()});
      data.push({"name":"Kind Of Business / व्यवसाय का प्रकार","value":$('select[name="business_name"]').val()});
      data.push({"name":"Complete Business Address / पता","value":$('input[name="address"]').val()});
      data.push({"name":"PINCODE","value":$('input[name="pincode"]').val()});
      data.push({"name":"State / राज्य ","value":$('select[name="state"]').val()});
      data.push({"name":"District / जिला","value":$('select[name="distric"]').val()});
      files_name_array.push({"name":"UPLOAD PAN CARD","key":"upload_pan_card_front"});

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