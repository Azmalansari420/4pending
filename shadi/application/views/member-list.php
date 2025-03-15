<?php $this->load->view("header"); ?>

         <section class="py-4 py-lg-5 bg-white memeber-list">
            <div class="container">
               <div class="row">
                  <div class="col-12">
                     <div class="row">
                        <div class="col-xl-3">
                           <div class="aiz-filter-sidebar collapse-sidebar-wrap sidebar-xl z-1035">
                              <div class="overlay overlay-fixed dark c-pointer" data-toggle="class-toggle" data-target=".aiz-filter-sidebar" data-same=".filter-sidebar-thumb"></div>
                              <div class="card collapse-sidebar c-scrollbar-light shadow-none">
                                 <div class="card-header pr-1 pl-3">
                                    <h5 class="mb-0 h6">ADVANCED SEARCH</h5>
                                    <button class="btn btn-sm p-2 d-xl-none filter-sidebar-thumb" data-toggle="class-toggle" data-target=".aiz-filter-sidebar" type="button">
                                    <i class="las la-times la-2x"></i>
                                    </button>
                                 </div>
                                 <div class="card-body">
                                    <div class="pb-4">
                                       <form action="#!" method="get">
                                          <div class="row">
                                             <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                   <label class="form-label" for="age_from">Age  From</label>
                                                   <input type="number" name="age_from" value="" class="form-control age_from">
                                                </div>
                                             </div>
                                             <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                   <label class="form-label" for="age_to">to</label>
                                                   <input type="number" name="age_to" value="" class="form-control age_to">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                   <label class="form-label" for="name">Member ID</label>
                                                   <input type="text" name="memeber_id" class="form-control memeber_id" id="memeber_id">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                   <label class="form-label" for="name">Maritial Status</label>
                                                   <select class="form-control aiz-selectpicker1 marital_status" name="marital_status">
                                                      <option value="" selected>Select One</option>
                                                      <option value="Never Married">Never Married</option>
                                                      <option value="Married">Married</option>
                                                      <option value="Divorced">Divorced </option>
                                                      <option value="Separated">Separated </option>
                                                      <option value="Widowed">Widowed</option>
                                                   </select>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                   <label class="form-label" for="name">Religion</label>
                                                   <select name="member_religion_id" class="form-control aiz-selectpicker1 member_religion_id" >
                                                      <option value="" selected>Select One</option>
                                                      <option value="Islam"> Islam </option>
                                                      <option value="Judaismm"> Judaismm </option>
                                                      <option value="Hinduism"> Hinduism </option>
                                                      <option value="Christianity"> Christianity </option>
                                                      <option value="Buddhism"> Buddhism </option>
                                                      <option value="Jainism"> Jainism </option>
                                                      <option value="Baha"> Baha&#039;i </option>
                                                      <option value="Sikhism"> Sikhism </option>
                                                      <option value="Confucianism"> Confucianism </option>
                                                      <option value="Atheism"> Atheism </option>
                                                      <option value="ertt"> ertt </option> 
                                                   </select>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                   <label class="form-label" for="name">Caste</label>
                                                   <select name="member_caste_id" class="form-control aiz-selectpicker1 member_caste_id" >
                                                      <option value="" selected>Select One</option>
                                                      <option value="Shia"> Shia </option>
                                                      <option value="Sunni"> Sunni </option>
                                                      <option value="Israelites (Yisraelim)">Israelites (Yisraelim) </option>
                                                      <option value="Vaishyas"> Vaishyas </option>
                                                      <option value="Brahmin"> Brahmin </option>
                                                      <option value="Kshatriyas"> Kshatriyas </option>
                                                      <option value="Shudras"> Shudras </option>
                                                   </select>
                                                </div>
                                             </div>
                                          </div>
                                          <!-- <div class="row">
                                             <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                   <label class="form-label" for="name">Sub Caste</label>
                                                   <select name="sub_caste_id" id="sub_caste_id" class="form-control aiz-selectpicker" data-live-search="true">
                                                      <option value="">Select One</option>
                                                   </select>
                                                </div>
                                             </div>
                                          </div> -->
                                          <div class="row">
                                             <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                   <label class="form-label" for="name">Mother  Tongue</label>
                                                   <select name="mothere_tongue" class="form-control aiz-selectpicker1 mothere_tongue" >
                                                      <option value="" selected>Select One</option>
                                                      <option value="English" > English </option>
                                                      <option value="German" > German </option>
                                                      <option value="Hindi" > Hindi </option>
                                                      <option value="Urdu" > Urdu </option>
                                                      <option value="Arabic" > Arabic </option>
                                                      <option value="Tamil" > Tamil </option>
                                                      <option value="Chainese" > Chainese </option>
                                                      <option value="Japanese" > Japanese </option>
                                                      <option value="Datch" > Datch </option>
                                                      <option value="Spanish" > Spanish </option>
                                                   </select>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-lg-12">
                                                <div class="form-grohp mb-3">
                                                   <label class="form-label" for="name">Partner Profession</label>
                                                   <input type="text" name="partner_profession" value="" class="form-control partner_profession" >
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                   <label class="form-label" for="name">Country</label>
                                                   <select name="permanent_country_id" class="form-control aiz-selectpicker permanent_country_id" >
                                                      <option value="India">India</option>
                                                   </select>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                   <label class="form-label" for="name">State</label>
                                                   <select class="form-control aiz-selectpicker1 permanent_state_id" name="permanent_state_id">
                                                      <option value="" selected>Select One</option>
                                                      <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                                      <option value="Andhra Pradesh"> Andhra Pradesh</option>
                                                      <option value="Arunachal Pradesh"> Arunachal Pradesh</option>
                                                      <option value="Assam"> Assam</option>
                                                      <option value="Bihar"> Bihar</option>
                                                      <option value="Chandigarh"> Chandigarh</option>
                                                      <option value="Chhattisgarh"> Chhattisgarh</option>
                                                      <option value="Dadra and Nagar Haveli"> Dadra and Nagar Haveli</option>
                                                      <option value="Daman and Diu">  Daman and Diu</option>
                                                      <option value="Delhi"> Delhi</option>
                                                      <option value="Goa"> Goa</option>
                                                      <option value="Gujarat"> Gujarat</option>
                                                      <option value="Haryana"> Haryana</option>
                                                      <option value="Himachal Pradesh"> Himachal Pradesh</option>
                                                      <option value="Jammu and Kashmir"> Jammu and Kashmir</option>
                                                      <option value="Jharkhand"> Jharkhand</option>
                                                      <option value="Karnataka"> Karnataka</option>
                                                      <option value="Kenmore"> Kenmore</option>
                                                      <option value="Kerala"> Kerala</option>
                                                      <option value="Lakshadweep"> Lakshadweep</option>
                                                      <option value="Madhya Pradesh"> Madhya Pradesh</option>
                                                      <option value="Maharashtra"> Maharashtra</option>
                                                      <option value="Manipur"> Manipur</option>
                                                      <option value="Meghalaya"> Meghalaya</option>
                                                      <option value="Mizoram"> Mizoram</option>
                                                      <option value="Nagaland"> Nagaland</option>
                                                      <option value="Narora"> Narora</option>
                                                      <option value="Natwar"> Natwar</option>
                                                      <option value="Odisha"> Odisha</option>
                                                      <option value="Paschim Medinipur"> Paschim Medinipur</option>
                                                      <option value="Pondicherry"> Pondicherry</option>
                                                      <option value="Punjab"> Punjab</option>
                                                      <option value="Rajasthan"> Rajasthan</option>
                                                      <option value="Sikkim"> Sikkim</option>
                                                      <option value="Tamil Nadu"> Tamil Nadu</option>
                                                      <option value="Telangana"> Telangana</option>
                                                      <option value="Tripura"> Tripura</option>
                                                      <option value="Uttar Pradesh"> Uttar Pradesh</option>
                                                      <option value="Uttarakhand"> Uttarakhand</option>
                                                      <option value="Vaishali"> Vaishali</option>
                                                      <option value="West Bengal"> West Bengal</option>
                                                   </select>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                   <label class="form-label" for="permanent_city_id">City</label>
                                                   <input type="text" name="permanent_city_id" class="form-control permanent_city_id" >
                                                   <!-- 
                                                   <select name="permanent_city_id" class="form-control aiz-selectpicker permanent_city_id"  >
                                                   </select> -->
                                                </div>
                                             </div>
                                          </div>

                                         <!--  <div class="row">
                                             <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                   <label class="form-label" for="name">Min Height</label>
                                                   <input type="number" name="min_height" value="" class="form-control" min="0" step="0.01"  >
                                                </div>
                                             </div>
                                             <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                   <label class="form-label" for="name">Max Height</label>
                                                   <input type="number" name="max_height" value="" class="form-control" min="0" step="0.01"   >
                                                </div>
                                             </div>
                                          </div> -->

                                          <h6 class="separator text-left mb-3 fs-12 text-uppercase text-secondary">
                                             <span class="bg-white pr-3">Member Type</span>
                                          </h6>
                                          <div class="aiz-radio-list">
                                             <label class="aiz-radio">
                                                <input type="radio" name="membership" value="1" class="membership"> Premium Member
                                                <span class="aiz-rounded-check"></span>
                                             </label>
                                             <label class="aiz-radio">
                                                <input type="radio" name="membership" checked value="2" class="membership"> Free member
                                                <span class="aiz-rounded-check"></span>
                                             </label>
                                                <label class="aiz-radio">
                                                <input type="radio" name="membership" value="3" class="membership"> All Member
                                                <span class="aiz-rounded-check"></span>
                                             </label>
                                          </div>
                                          <!-- <button type="submit" class="btn btn-block btn-primary mt-4">Search</button> -->
                                       </form>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-9">
                           <div class="d-flex">
                              <h1 class="h4 fw-600 mb-3 text-body">All Members List</h1>
                              <div class="d-xl-none ml-auto mb-1 ml-xl-3 mr-0 align-self-end">
                                 <button type="button" class="btn btn-icon p-0" data-toggle="class-toggle"
                                    data-target=".aiz-filter-sidebar">
                                 <i class="la la-list la-2x"></i>
                                 </button>
                              </div>
                           </div>
                           <div class="mb-5" id="allmembershow"></div>
                           <!-- <div class="aiz-pagination">
                           </div> -->
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>


         <?php $this->load->view("footer"); ?>

<script>

    // $(document).on("click", ".age_from, .age_to, .memeber_id, .marital_status, .member_religion_id, .member_caste_id, .mothere_tongue, .partner_profession, .permanent_country_id, .permanent_state_id, .permanent_city_id, .membership",(function(e) {
    //       allmemeberlist();
    // }));
   // $('.memeber_id').on('keyup paste change', function () {
   //       allmemeberlist();
   // });

      $(document).ready(function () {
        $("#memeber_id, .permanent_city_id, .partner_profession").keyup(function () {
          allmemeberlist();
          // alert('keyup cl rha he pr undifined bta rha he memeber_id ko');
        });
      });

    $(document).on("change", ".marital_status, .member_religion_id, .member_caste_id, .mothere_tongue, .permanent_state_id",(function(e) {
       allmemeberlist();
    }));

   $(document).on("click", ".membership",(function(e) {
       allmemeberlist();
    }));

   





   function allmemeberlist() 
   {
      var age_from = $(".age_from").val();
      var age_to = $(".age_to").val();
      var memeber_id = $(".memeber_id").val();
      var marital_status = $(".marital_status").val();
      var member_religion_id = $(".member_religion_id").val();
      var member_caste_id = $(".member_caste_id").val();
      var mothere_tongue = $(".mothere_tongue").val();
      var partner_profession = $(".partner_profession").val();
      var permanent_country_id = $(".permanent_country_id").val();
      var permanent_state_id = $(".permanent_state_id").val();
      var permanent_city_id = $(".permanent_city_id").val();
      var membership = $(".membership:checked").val();




      var form = new FormData();
      form.append("age_from", age_from);
      form.append("age_to", age_to);
      form.append("memeber_id", memeber_id);
      form.append("marital_status", marital_status);
      form.append("member_religion_id", member_religion_id);
      form.append("member_caste_id", member_caste_id);
      form.append("mothere_tongue", mothere_tongue);
      form.append("partner_profession", partner_profession);
      form.append("permanent_country_id", permanent_country_id);
      form.append("permanent_state_id", permanent_state_id);
      form.append("permanent_city_id", permanent_city_id);
      form.append("membership", membership);

      var settings = {
        "url": "<?php echo base_url('welcome/membernumber'); ?>",
        "method": "POST",
        "timeout": 0,
        "dataType": "json",
        "processData": false,
        "mimeType": "multipart/form-data",
        "contentType": false,
        "data": form
      };

      $.ajax(settings).done(function (response) {
         $('#allmembershow').html(response.data)
        console.log(response);
      });
   }

      allmemeberlist();
</script>