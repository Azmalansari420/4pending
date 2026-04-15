<?php include('header.php'); ?>
<!-- Header Start -->
<div class="container-fluid header hero-bg p-0 pb-5">
   <h1 class="text-uppercase text-center fs-3 p-4">APPLY FOR FSSAI LICENSE | FOOD LICENSE CERTIFICATE | FOSCOS</h1>
   <div class="row g-0 flex-column-reverse flex-lg-row mx-2">
      <div class="col-lg-6 ps-lg-4 pe-xl-2 wow fadeIn" data-wow-delay="0.1s">
         <div class="form-fssi">
            <div class="fssi-head d-flex align-items-center justify-content-center">
               <h2 class="text-uppercase text-center fs-5 m-0">FSSAI Registration
                  Online
                  Apply
               </h2>
            </div>
            <form action="welcome/fssai_regiatration" method="post" enctype="multipart/form-data" id="main-for1m"
               class="main-form-custom">
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
                  <label for="name-of-business">Name Of Business / Firm / Company / व्यवसाय / फर्म / कंपनी का
                  नाम <span class="required"> *</span></label>
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
                        Dairy products and
                        analogues, excluding products of food category 2.0
                     </option>
                     <option value="Fats and oils, and fat emulsions">Fats and oils, and fat emulsions
                     </option>
                     <option value="Edible ices, including sherbet and sorbet">Edible ices, including sherbet
                        and sorbet
                     </option>
                     <option
                        value="Fruits and vegetables (including mushrooms and fungi, roots and tubers, pulses and legumes, and aloe vera)">
                        Fruits and vegetables (including mushrooms and fungi, roots and tubers, pulses and
                        legumes, and aloe
                        vera)
                     </option>
                     <option value="Confectionery">Confectionery</option>
                     <option
                        value="Cereals and cereal products, derived from cereal grains, from roots and tubers, pulses, legumes">
                        Cereals and cereal products, derived from cereal grains, from roots and tubers,
                        pulses, legumes
                     </option>
                     <option value="Bakery products">Bakery products</option>
                     <option
                        value="Fish and fish products, including molluscs, crustaceans, and echinoderms">
                        Fish and fish
                        products, including molluscs, crustaceans, and echinoderms
                     </option>
                     <option value="Eggs and egg products">Eggs and egg products</option>
                     <option value="Sweeteners, including honey">Sweeteners, including honey</option>
                     <option value="Salts, spices, soups, sauces, salads and protein products">Salts, spices,
                        soups, sauces,
                        salads and protein products
                     </option>
                     <option value="Foodstuffs intended for particular nutritional uses">Foodstuffs intended
                        for particular
                        nutritional uses
                     </option>
                     <option value="Beverages, excluding dairy products">Beverages, excluding dairy products
                     </option>
                     <option value="Ready-to-eat savouries">Ready-to-eat savouries</option>
                     <option value="Prepared Foods">Prepared Foods</option>
                     <option value="Substances added to food">Substances added to food</option>
                     <option value="others">Others</option>
                  </select>
               </div>
               <div class="form-group txt" id="otheritem" style="display: none;">
                  <label for="food_category">Please Specify Name Of Food Item </label>
                  <input type="text" class="form-control" name="others_data">
               </div>


               <div class="form-group txt">
                  <label for="nature_business">Kind Of Business / व्यवसाय का प्रकार <span class="required">
                  *</span></label>
                  <select class="form-control businessTypesDropdown" name="business_name" id="nature_business" required="">
                     <option value="" selected>Select</option>
                     <option value="Small / Petty Food Business Operators">1. Small / Petty Food Business Operators
                     </option>
                     <option value="Dairy Units including Milk Chilling Units">2. Dairy Units including Milk
                        Chilling Units
                     </option>
                     <option value="Vegetable Oil Processing Units">3. Vegetable Oil Processing Units
                     </option>
                     <option value="Slaughtering House">4. Slaughtering House</option>
                     <option value="Fish Poultry Farm">5. Fish Seller / Poultry Products Seller
                     </option>
                     <option value="Meat Processing">6. Meat Processing</option>
                     <option
                        value="Food Manufacturing/Processing units other than Dairy Units, Vegetable Oil, Meat Processing, and Slaughtering Houses">
                        7. Manufacturer / Processor of any food other than Dairy Units, Vegetable Oil....
                     </option>
                     <option value="Proprietary Food">8. Proprietary Food</option>
                     <option value="Food or Health Supplements and Nutraceuticals etc.">9. Food or Health
                        Supplements and Nutraceuticals etc.
                     </option>
                     <option value="Radiation processing of food">10. Radiation processing of food</option>
                     <option value="Substances added to Food">11. Substances added to Food</option>
                     <option value="Storage - Cold/Refrigerated">12. Warehouse - Cold/Refrigerated</option>
                     <option value="Storage – Atmospheric Controlled + Cold">13. Warehouse – Atmospheric Controlled + Cold
                     </option>
                     <option value="Storage Without Atmospheric Controlled + Cold">14. Warehouse Without Atmospheric Controlled + Cold
                     </option>
                     <option value="Transporter">15. Transporter</option>
                     <option value="Wholesaler">16. Wholesaler</option>
                     <option value="Distributor">17. Distributor</option>
                     <option value="Retailer">18. Retailer</option>
                     <option value="Hotel">19. Hotel</option>
                     <option value="Restaurants">20. Restaurants</option>
                     <option value="Club/Canteen">21. Club/Canteen</option>
                     <option value="Caterer">22. Caterer</option>
                     <option value="Food Vending Agencies">23. Food Vending Agencies</option>
                     <option value="Dhaba">24. Dhaba</option>
                     <option value="Importers">25. Importers</option>
                     <option value="Exporters">26. Exporters</option>
                     <option value="E-commerce">27. E-commerce</option>
                     <option value="Head Office/Registered Office">28. Head Office/Registered Office</option>
                     <option value="Relabellers And Repackers">29. Relabellers And Repackers</option>
                     <option value="Any Other Food Business not mentioned above">30. Any Other Food Business
                        not mentioned above
                     </option>
                  </select>
               </div>


               <!-- 1 -->
               <div class="turnoverDisplay">
                   <h6>ad</h6>
               </div>


               <div class="yearDisplay"></div>
               <div id="yourContainerElementId"></div>



               <div class="form-group txt" style="display:none">
                  <label for="designition">Select Designation / पदनाम चुनें</label>
                  <select class="form-control" name="designition" id="designition">
                     <option selected="selected" value="">Select Designation</option>
                     <option value="INDIVIDUAL">INDIVIDUAL </option>
                     <option value="PARTNER">PARTNER </option>
                     <option value="PROPRIETOR">PROPRIETOR </option>
                     <option value="PROPRIETOR">OTHERS </option>
                     <option value="SOCIETY">SOCIETY </option>
                     <option value="PVT LTD/LLP/OPC">PVT LTD/LLP/OPC
                     </option>
                  </select>
               </div>
               <div class="form-group txt">
                  <label for="office-address">Complete Business Address / पता <span class="required">
                  *</span></label>
                  <textarea class="form-control" name="address" id="office-address" required=""
                     cols="10" row="5"></textarea>
               </div>
               <div class="row form-group">
                  <div class=" col-lg-4 txt">
                     <label>PINCODE</label>
                     <input type="text" class="form-control" name="pincode" id="pincode"
                        oninput="lookupPincode(this.value)"
                        onkeypress="return (event.charCode != 8 &amp;&amp; event.charCode == 0 || (event.charCode >= 48 &amp;&amp; event.charCode <= 57))"
                        minlength="6" maxlength="6" required="">
                  </div>
                  <div class=" txt col-lg-4 col-12">
                     <label>State / राज्य <span class=""> *</span></label>
                     <select id="office-state" size="1" class="form-control select-state" name="state"
                         required="">
                        <option value="">Select State</option>
                        <?php
                        $this->db->order_by('name asc');
                        $state = $this->crud->selectDataByMultipleWhere('state',array('status'=>1,));
                        foreach($state as $data)
                            { ?>
                        <option value="<?=$data->id ?>"><?=$data->name ?> </option>
                    <?php } ?>
                        
                     </select>
                  </div>
                  <div class=" txt col-lg-4 col-12">
                     <label>District / जिला <span class=""> *</span></label>
                     <select class="form-control get-city" name="distric" id="office-district" required="">
                        <option value="" selected="selected">Select District</option>
                     </select>
                  </div>
               </div>
               <div class="form-group txt">
                  <label>UPLOAD PAN CARD <span class=""> *</span></label>
                  <input type="file" class="form-control" name="pan_card" required="">
               </div>
               <div class="form-group row form-check ms-3">
                  <div class="col-lg-12"><input type="checkbox" class="form-check-input"
                     name="terms_of_service" id="terms-of-service" required="">
                     <label class="form-check-label " for="terms-of-service">I AGREE TO THE <a href=""
                        class="">TERMS OF
                     SERVICE</a></label>
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
               <div class="form-group">
                  <input type="text" name="vercode" class="form-control" placeholder="Verfication Code" required="required">
               </div>
                <?php
                $rand = rand(999,9999);
                ?>
               <div class="form-group small clearfix">
                  <label class="checkbox-inline">Verification Code <span class="required"
                     onclick="openSOLNumber()" style="cursor: pointer">*</span></label>
                  &nbsp;&nbsp; <?=$rand ?>
               </div>
               <!-- <input type="hidden" class="form-control" name="form_name" value="FSSAI Registration"> -->
               <br>
               <button type="submit" name="submit" class="btn btn-primary fcs-submit-button">Submit Application</button>
            </form>
         </div>
      </div>







      <div class="col-lg-6 pe-lg-4 ps-xl-2 wow fadeIn" data-wow-delay="0.1s">
         <div class="form-fssi">
            <div class="fssi-head d-flex align-items-center justify-content-center">
               <h2 class="text-uppercase text-center fs-5 m-0">INSTRUCTIONS TO FILL FSSAI REGISTRATION ONLINE
                  APPLY FORM
               </h2>
            </div>
            <div class="form-instructions main-form-custom pt-4">
               <div class="info-box" style="text-align: left; text-transform:capitalize;">
                  <b> Name Of Applicant /company / आवेदक / कंपनी का नाम: </b>
                  <p>applicant Need To Mention His / Her Name Or Name Of Company In Application Form
                     आवेदक को आवेदन पत्र में अपना नाम या कंपनी का नाम उल्लेख करना होगा
                  </p>
                  <b>email Id / ईमेल आईडी:</b>
                  <p>applicant Need To Mention His / Her Email Id To Receive Certificate And Acknowledgement
                     प्रमाणपत्र और पावती प्राप्त करने के लिए आवेदक को अपनी ईमेल आईडी का उल्लेख करना होगा
                  </p>
                  <b>name Of Business / व्यवसाय का नाम:</b>
                  <p>applicant Need To Mention Name Of His Business, That Will Be Printed On Certificate
                     आवेदक को अपने व्यवसाय का नाम उल्लेख करना होगा, जिसे प्रमाणपत्र पर प्रदर्शित किया जाएगा
                  </p>
                  <b>mobile Number / मोबाइल नंबर:</b>
                  <p>mention Correct Mobile Number In The Application Form
                     आवेदन पत्र में सही मोबाइल नंबर अंकित करें
                  </p>
                  <b>kind Of Business / व्यवसाय का प्रकार:</b>
                  <p>mention Correct Type Of Business, Which Can Be Printed On Certificate
                     व्यवसाय के सही प्रकार का उल्लेख करें, जिसे प्रमाणपत्र पर प्रदर्शित किया जा सके
                  </p>
                  <b>name Of The Food Category / खाद्य श्रेणी का नाम:</b>
                  <p>applicant Need To Select Correct, Food Item From The Category Given In The Application
                     Form.
                     आवेदक को दी गई श्रेणी के सही खाद्य पदार्थ का चयन करना होगा
                  </p>
                  <b>select Designation / पदनाम चुनें:</b>
                  <p>choose Correct Designation Of The Applicant
                     आवेदक का सही पदनाम चुनें
                  </p>
                  <b>address / पता:</b>
                  <p>mention Correct Address Of The Business
                     व्यवसाय का सही पता बताएं
                  </p>
                  <b>pincode / पिन कोड:</b>
                  <p> Mention Correct Pin Code Of The Business
                     व्यवसाय का सही पिन कोड बताएं
                  </p>
                  <b>state / राज्य:</b>
                  <p> Select Correct State Of Operating Business
                     व्यवसाय संचालन की सही राज्य का चयन करें
                  </p>
                  <b>select The Turnover / टर्नओवर का चयन करें:</b>
                  <p>choose One Of The Option As Given Below
                     नीचे दिए गए विकल्पों में से एक चुनें
                  </p>
                  <b>choose Certificate Validity / प्रमाणपत्र वैधता चुनें:</b>
                  <p>select One Of The Option To Choose Validity Of Your Certificate
                     अपने प्रमाणपत्र की वैधता चुनने के लिए किसी एक विकल्प का चयन करें
                  </p>
                  <b>➨ Read The Terms And Conditions Of Service And Click On Checkbox When You Agree To Them
                  सेवा की शर्तें पढ़ें और उनसे सहमत होने के लिए चेकबॉक्स पर क्लिक करें
                  <br>
                  ➨ Now Click On The Submit Button To Submit The Application Form.
                  </b>
                  <br>
               </div>
               <h2 class=" text-uppercase fchd shadow text-center" style="font-size:12px;display:none">What are
                  the different types
                  of Licence?
               </h2>
               <table class=" table-bordered" style="display:none;width:100%;">
                  <tbody>
                     <tr>
                        <td style="width: 134px;">
                           <strong>Licence Type</strong>
                        </td>
                        <td style="width: 156px;"><strong>Eligibility</strong></td>
                        <td style="width: 144px;"><strong>Validity</strong></td>
                        <td style="width: 174px;"><strong>Fee</strong></td>
                     </tr>
                     <tr>
                        <td style="width: 134px;">FSSAI Normal Registration</td>
                        <td style="width: 156px;">Annual turnover of the business is less than 12 lakhs</td>
                        <td style="width: 140px;">1 Year<br>
                           2 Year <br>
                           3 Year <br>
                           4 Year <br>
                           5 Year <br>
                        </td>
                        <td style="width: 174px;"><span style="font-size: 16px">Rs 2299</span><br>
                           Rs 2999 <br>
                           Rs 3699 <br>
                           Rs 4399 <br>
                           Rs 5099 <br>
                        </td>
                     </tr>
                     <tr>
                        <td style="width: 134px;">FSSAI State Licence</td>
                        <td style="width: 156px;">Annual turnover of the business is between 12 to 20 crores
                        </td>
                        <td style="width: 140px;">1 Year<br>
                           2 Year <br>
                           3 Year <br>
                           4 Year <br>
                           5 Year <br>
                        </td>
                        <td style="width: 174px;"><span style="font-size: 16px">Rs 12999</span><br>
                           Rs 17399 <br>
                           Rs 21799 <br>
                           Rs 26199 <br>
                           Rs 30599 <br>
                        </td>
                     </tr>
                     <tr>
                        <td style="width: 134px;">FSSAI Central Licence</td>
                        <td style="width: 156px;">Annual turnover of the business is above 20 crores </td>
                        <td style="width: 140px;">1 Year<br>
                           2 Year <br>
                           3 Year <br>
                           4 Year <br>
                           5 Year <br>
                        </td>
                        <td style="width: 174px;"><span style="font-size: 16px">Rs 21200</span><br>
                           Rs 31200 <br>
                           Rs 41200 <br>
                           Rs 50000 <br>
                           Rs 61200 <br>
                        </td>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Header End -->
<!-- Service Start -->
<div class="container-xxl pt-5">
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
</div>
<!-- Service End -->
<div class="container-xxl pt-5">
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
</div>

<?php include('footer.php'); ?>

<script>
    var name = "";
    $(document).on("change", ".businessTypesDropdown",(function(e) {
        name = $(this).val();
      // console.log(name);
      quick_view();
    }));

    function quick_view()
    {
      var form = new FormData();
      form.append("name", name);

      var settings = {
        "url": "welcome/fssai_price",
        "method": "POST",
        "dataType": "json",
        "timeout": 0,
        "processData": false,
        "cache": false,
        "mimeType": "multipart/form-data",
        "contentType": false,
        "data": form

      };

      $.ajax(settings).done(function (response) {
        console.log(response.name);
        if(response.status=='200')
        {
            /**/
            if(response.name == 'Small / Petty Food Business Operators')
            {
                $(".small-business-operators").show();
                $(".turnoverDisplay").show();
                $(".turnoverDisplay").html(response.html);
                $(".Dairy-Units").hide();
                $(".Vegetable-Oil").hide();
                $(".Slaughtering-House").hide();
                $(".Fish-Poultry-Farm").hide();
                $(".Meat-Processing").hide();
                $(".Manufacturer-of-any-food").hide();
                $(".Proprietary-Food").hide();
                $(".Food-or-Health").hide();
                $(".Radiation-processing").hide();
                $(".Substances-added").hide();
                $(".warehouse").hide();
                $(".Atmospheric-Controlled").hide();
                $(".Atmospheric-Controlled-without").hide();
                $(".Transporter").hide(); 
                $(".Wholesaler").hide();
            }

            if(response.name == 'Dairy Units including Milk Chilling Units')
            {
                $(".Dairy-Units").show();
                $(".turnoverDisplay").show();
                $(".turnoverDisplay").html(response.html);
                $(".small-business-operators").hide();
                $(".Vegetable-Oil").hide();
                $(".Slaughtering-House").hide();
                $(".Fish-Poultry-Farm").hide();
                $(".Meat-Processing").hide();
                $(".Manufacturer-of-any-food").hide();
                $(".Proprietary-Food").hide();
                $(".Food-or-Health").hide();
                $(".Radiation-processing").hide();
                $(".Substances-added").hide();
                $(".warehouse").hide();
                $(".Atmospheric-Controlled").hide();
                $(".Atmospheric-Controlled-without").hide();
                $(".Transporter").hide(); 
                $(".Wholesaler").hide();
            }

            if(response.name == 'Vegetable Oil Processing Units')
            {
                $(".Vegetable-Oil").show();
                $(".turnoverDisplay").show();
                $(".turnoverDisplay").html(response.html);
                $(".small-business-operators").hide();
                $(".Dairy-Units").hide();
                $(".Slaughtering-House").hide();
                $(".Fish-Poultry-Farm").hide();
                $(".Meat-Processing").hide();
                $(".Manufacturer-of-any-food").hide();
                $(".Proprietary-Food").hide();
                $(".Food-or-Health").hide();
                $(".Radiation-processing").hide();
                $(".Substances-added").hide();
                $(".warehouse").hide();
                $(".Atmospheric-Controlled").hide();
                $(".Atmospheric-Controlled-without").hide();
                $(".Transporter").hide(); 
                $(".Wholesaler").hide();
            }
            if(response.name == 'Slaughtering House')
            {
                $(".Slaughtering-House").show();
                $(".turnoverDisplay").show();
                $(".turnoverDisplay").html(response.html);
                $(".small-business-operators").hide();
                $(".Dairy-Units").hide();
                $(".Vegetable-Oil").hide();
                $(".Fish-Poultry-Farm").hide();
                $(".Meat-Processing").hide();
                $(".Manufacturer-of-any-food").hide();
                $(".Proprietary-Food").hide();
                $(".Food-or-Health").hide();
                $(".Radiation-processing").hide();
                $(".Substances-added").hide();
                $(".warehouse").hide();
                $(".Atmospheric-Controlled").hide();
                $(".Atmospheric-Controlled-without").hide();
                $(".Transporter").hide(); 
                $(".Wholesaler").hide();
            }
            if(response.name == 'Fish Poultry Farm')
            {
                $(".Fish-Poultry-Farm").show();
                $(".turnoverDisplay").show();
                $(".turnoverDisplay").html(response.html);
                $(".small-business-operators").hide();
                $(".Dairy-Units").hide();
                $(".Vegetable-Oil").hide();
                $(".Slaughtering-House").hide();
                $(".Meat-Processing").hide();
                $(".Manufacturer-of-any-food").hide();
                $(".Proprietary-Food").hide();
                $(".Food-or-Health").hide();
                $(".Radiation-processing").hide();
                $(".Substances-added").hide();
                $(".warehouse").hide();
                $(".Atmospheric-Controlled").hide();
                $(".Atmospheric-Controlled-without").hide();
                $(".Transporter").hide(); 
                $(".Wholesaler").hide();
            }
            if(response.name == 'Meat Processing')
            {
                $(".Meat-Processing").show();
                $(".turnoverDisplay").show();
                $(".turnoverDisplay").html(response.html);
                $(".small-business-operators").hide();
                $(".Dairy-Units").hide();
                $(".Vegetable-Oil").hide();
                $(".Slaughtering-House").hide();
                $(".Fish-Poultry-Farm").hide();
                $(".Manufacturer-of-any-food").hide();
                $(".Proprietary-Food").hide();
                $(".Food-or-Health").hide();
                $(".Radiation-processing").hide();
                $(".Substances-added").hide();
                $(".warehouse").hide();
                $(".Atmospheric-Controlled").hide();
                $(".Atmospheric-Controlled-without").hide();
                $(".Transporter").hide(); 
                $(".Wholesaler").hide();
            }
            if(response.name == 'Food Manufacturing/Processing units other than Dairy Units, Vegetable Oil, Meat Processing, and Slaughtering Houses')
            {
                $(".Manufacturer-of-any-food").show();
                $(".turnoverDisplay").show();
                $(".turnoverDisplay").html(response.html);
                $(".small-business-operators").hide();
                $(".Dairy-Units").hide();
                $(".Vegetable-Oil").hide();
                $(".Slaughtering-House").hide();
                $(".Fish-Poultry-Farm").hide();
                $(".Meat-Processing").hide();
                $(".Proprietary-Food").hide();
                $(".Food-or-Health").hide();
                $(".Radiation-processing").hide();
                $(".Substances-added").hide();
                $(".warehouse").hide();
                $(".Atmospheric-Controlled").hide();
                $(".Atmospheric-Controlled-without").hide();
                $(".Transporter").hide(); 
                $(".Wholesaler").hide();
            }
            if(response.name == 'Proprietary Food')
            {
                $(".Proprietary-Food").show();
                $(".turnoverDisplay").show();
                $(".turnoverDisplay").html(response.html);
                $(".small-business-operators").hide();
                $(".Dairy-Units").hide();
                $(".Vegetable-Oil").hide();
                $(".Slaughtering-House").hide();
                $(".Fish-Poultry-Farm").hide();
                $(".Meat-Processing").hide();
                $(".Manufacturer-of-any-food").hide();
                $(".Food-or-Health").hide();
                $(".Radiation-processing").hide();
                $(".Substances-added").hide();
                $(".warehouse").hide();
                $(".Atmospheric-Controlled").hide();
                $(".Atmospheric-Controlled-without").hide();
                $(".Transporter").hide(); 
                $(".Wholesaler").hide();
            }
            if(response.name == 'Food or Health Supplements and Nutraceuticals etc.')
            {
                $(".Food-or-Health").show();
                $(".turnoverDisplay").show();
                $(".turnoverDisplay").html(response.html);
                $(".small-business-operators").hide();
                $(".Dairy-Units").hide();
                $(".Vegetable-Oil").hide();
                $(".Slaughtering-House").hide();
                $(".Fish-Poultry-Farm").hide();
                $(".Meat-Processing").hide();
                $(".Proprietary-Food").hide();
                $(".Manufacturer-of-any-food").hide();
                $(".Radiation-processing").hide();
                $(".Substances-added").hide();
                $(".warehouse").hide();
                $(".Atmospheric-Controlled").hide();
                $(".Atmospheric-Controlled-without").hide();
                $(".Transporter").hide(); 
                $(".Wholesaler").hide();
            }
            if(response.name == 'Radiation processing of food')
            {
                $(".Radiation-processing").show();
                $(".turnoverDisplay").show();
                $(".turnoverDisplay").html(response.html);
                $(".small-business-operators").hide();
                $(".Dairy-Units").hide();
                $(".Vegetable-Oil").hide();
                $(".Slaughtering-House").hide();
                $(".Fish-Poultry-Farm").hide();
                $(".Meat-Processing").hide();
                $(".Proprietary-Food").hide();
                $(".Manufacturer-of-any-food").hide();
                $(".Food-or-Health").hide();
                $(".Substances-added").hide();
                $(".warehouse").hide();
                $(".Atmospheric-Controlled").hide();
                $(".Atmospheric-Controlled-without").hide();
                $(".Transporter").hide(); 
                $(".Wholesaler").hide();
            }
            if(response.name == 'Substances added to Food')
            {
                $(".Substances-added").show();
                $(".turnoverDisplay").show();
                $(".turnoverDisplay").html(response.html);
                $(".small-business-operators").hide();
                $(".Dairy-Units").hide();
                $(".Vegetable-Oil").hide();
                $(".Slaughtering-House").hide();
                $(".Fish-Poultry-Farm").hide();
                $(".Meat-Processing").hide();
                $(".Proprietary-Food").hide();
                $(".Manufacturer-of-any-food").hide();
                $(".Food-or-Health").hide();
                $(".Radiation-processing").hide();
                $(".warehouse").hide();
                $(".Atmospheric-Controlled").hide();
                $(".Atmospheric-Controlled-without").hide();
                $(".Transporter").hide(); 
                $(".Wholesaler").hide();
            }
            if(response.name == 'Storage - Cold/Refrigerated')
            {
                $(".warehouse").show();
                $(".turnoverDisplay").show();
                $(".turnoverDisplay").html(response.html);
                $(".small-business-operators").hide();
                $(".Dairy-Units").hide();
                $(".Vegetable-Oil").hide();
                $(".Slaughtering-House").hide();
                $(".Fish-Poultry-Farm").hide();
                $(".Meat-Processing").hide();
                $(".Proprietary-Food").hide();
                $(".Manufacturer-of-any-food").hide();
                $(".Food-or-Health").hide();
                $(".Radiation-processing").hide();
                $(".Substances-added").hide();
                $(".Atmospheric-Controlled").hide();
                $(".Atmospheric-Controlled-without").hide();
                $(".Transporter").hide(); 
                $(".Wholesaler").hide();
            }
            if(response.name == 'Storage – Atmospheric Controlled + Cold')
            {
                $(".Atmospheric-Controlled").show();
                $(".turnoverDisplay").show();
                $(".turnoverDisplay").html(response.html);
                $(".small-business-operators").hide();
                $(".Dairy-Units").hide();
                $(".Vegetable-Oil").hide();
                $(".Slaughtering-House").hide();
                $(".Fish-Poultry-Farm").hide();
                $(".Meat-Processing").hide();
                $(".Proprietary-Food").hide();
                $(".Manufacturer-of-any-food").hide();
                $(".Food-or-Health").hide();
                $(".Radiation-processing").hide();
                $(".Substances-added").hide();
                $(".warehouse").hide();
                $(".Atmospheric-Controlled-without").hide();
                $(".Transporter").hide(); 
                $(".Wholesaler").hide();
            }
            if(response.name == 'Storage Without Atmospheric Controlled + Cold')
            {
                $(".Atmospheric-Controlled-without").show();
                $(".turnoverDisplay").show();
                $(".turnoverDisplay").html(response.html);
                $(".small-business-operators").hide();
                $(".Dairy-Units").hide();
                $(".Vegetable-Oil").hide();
                $(".Slaughtering-House").hide();
                $(".Fish-Poultry-Farm").hide();
                $(".Meat-Processing").hide();
                $(".Proprietary-Food").hide();
                $(".Manufacturer-of-any-food").hide();
                $(".Food-or-Health").hide();
                $(".Radiation-processing").hide();
                $(".Substances-added").hide();
                $(".warehouse").hide();
                $(".Atmospheric-Controlled").hide();
                $(".Transporter").hide(); 
            }
            if(response.name == 'Transporter')
            {
                $(".Transporter").show();                
                $(".turnoverDisplay").show();
                $(".turnoverDisplay").html(response.html);
                $(".small-business-operators").hide();
                $(".Dairy-Units").hide();
                $(".Vegetable-Oil").hide();
                $(".Slaughtering-House").hide();
                $(".Fish-Poultry-Farm").hide();
                $(".Meat-Processing").hide();
                $(".Proprietary-Food").hide();
                $(".Manufacturer-of-any-food").hide();
                $(".Food-or-Health").hide();
                $(".Radiation-processing").hide();
                $(".Substances-added").hide();
                $(".warehouse").hide();
                $(".Atmospheric-Controlled").hide();
                $(".Atmospheric-Controlled-without").hide();
                $(".Wholesaler").hide();
            }
            if(response.name == 'Wholesaler')
            {
                $(".Wholesaler").show();                                
                $(".turnoverDisplay").show();
                $(".turnoverDisplay").html(response.html);
                $(".small-business-operators").hide();
                $(".Dairy-Units").hide();
                $(".Vegetable-Oil").hide();
                $(".Slaughtering-House").hide();
                $(".Fish-Poultry-Farm").hide();
                $(".Meat-Processing").hide();
                $(".Proprietary-Food").hide();
                $(".Manufacturer-of-any-food").hide();
                $(".Food-or-Health").hide();
                $(".Radiation-processing").hide();
                $(".Substances-added").hide();
                $(".warehouse").hide();
                $(".Atmospheric-Controlled").hide();
                $(".Atmospheric-Controlled-without").hide();
            }
            if(response.name == 'Distributor')
            {
                $(".Distributor").show();
                $(".turnoverDisplay").show();
                $(".turnoverDisplay").html(response.html);
                $(".small-business-operators").hide();
                $(".Dairy-Units").hide();
                $(".Vegetable-Oil").hide();
                $(".Slaughtering-House").hide();
                $(".Fish-Poultry-Farm").hide();
                $(".Meat-Processing").hide();
                $(".Proprietary-Food").hide();
                $(".Manufacturer-of-any-food").hide();
                $(".Food-or-Health").hide();
                $(".Radiation-processing").hide();
                $(".Substances-added").hide();
                $(".warehouse").hide();
                $(".Atmospheric-Controlled").hide();
                $(".Atmospheric-Controlled-without").hide();
                $(".Wholesaler").hide();   
                $(".Retailer").hide();
            }
            if(response.name == 'Retailer')
            {
                $(".Retailer").show();
                $(".turnoverDisplay").show();
                $(".turnoverDisplay").html(response.html);
                $(".small-business-operators").hide();
                $(".Dairy-Units").hide();
                $(".Vegetable-Oil").hide();
                $(".Slaughtering-House").hide();
                $(".Fish-Poultry-Farm").hide();
                $(".Meat-Processing").hide();
                $(".Proprietary-Food").hide();
                $(".Manufacturer-of-any-food").hide();
                $(".Food-or-Health").hide();
                $(".Radiation-processing").hide();
                $(".Substances-added").hide();
                $(".warehouse").hide();
                $(".Atmospheric-Controlled").hide();
                $(".Atmospheric-Controlled-without").hide();
                $(".Wholesaler").hide();  
                $(".Distributor").hide(); 
            }
            if(response.name == 'Hotel')
            {
                $(".Retailer").show();
                $(".turnoverDisplay").show();
                $(".turnoverDisplay").html(response.html);
                $(".small-business-operators").hide();
                $(".Dairy-Units").hide();
                $(".Vegetable-Oil").hide();
                $(".Slaughtering-House").hide();
                $(".Fish-Poultry-Farm").hide();
                $(".Meat-Processing").hide();
                $(".Proprietary-Food").hide();
                $(".Manufacturer-of-any-food").hide();
                $(".Food-or-Health").hide();
                $(".Radiation-processing").hide();
                $(".Substances-added").hide();
                $(".warehouse").hide();
                $(".Atmospheric-Controlled").hide();
                $(".Atmospheric-Controlled-without").hide();
                $(".Wholesaler").hide();  
                $(".Distributor").hide(); 
            }
        }
        else
        {
            $(".turnoverDisplay").hide();
            // $(".turnoverDisplay").html(response.html);
            // $(".turnoverDisplay").modal("hide");
        }
      });
    }
</script>

<script>
    // $(document).ready(function(){
    //     $('.businessTypesDropdown').on('change', function() {
    //       if ( this.value == 'Small / Petty Food Business Operators')
    //       {
    //         alert('dd')
    //         $(".small-business-operators").css('display','block');
    //       }
    //       else
    //       {
    //         $(".small-business-operators").hide();
    //       }
    //     });
    // });
</script>