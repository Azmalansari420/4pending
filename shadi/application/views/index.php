<?php $this->load->view("header"); ?>



         <!-- Homepage Slider Section -->
         <section class="position-relative overflow-hidden min-vh-100 d-flex home-slider-area">
            <div class="absolute-full">
               <div class="aiz-carousel aiz-carousel-full h-100" data-fade='true' data-infinite='true' data-autoplay='true'>
                  <img class="img-fit" src="<?php echo base_url(); ?>public/uploads/all/cEOhVAwkzGE51HebB3Ky9CwQU3vLyKnW4DRMQ1mt.jpg">
                  <img class="img-fit" src="<?php echo base_url(); ?>public/uploads/all/kfLiYSgqrdD5t8KYrg9HJNZyERclSnbpyZXxJjb5.jpg">
                  <img class="img-fit" src="<?php echo base_url(); ?>public/uploads/all/xV2jN72ErCdpYe6aZ5vysEUmBqm2qiouz13Ut0MA.jpg">
               </div>
               <div class="absolute-full bg-white opacity-0 d-md-none"></div>
            </div>
            <div class="container position-relative d-flex flex-column">
               <div class="row pt-11 pb-8 my-auto align-items-center">
                  <div class="col-xl-5 col-lg-6 my-4">
                     <div class="text-dark home-slider-text">
                        <h1><span style="background-color: inherit;"><b style="">Every Love Story is </b></span></h1>
                        <h1><span style="background-color: inherit;"><b style="">Beautiful</b></span></h1>
                        <h1><b style=""><font color="#fd2c79">Make Yours</font></b></h1>
                        <h1><b style=""><font color="#fd2c79">Special</font></b></h1>
                     </div>
                  </div>
                  <div class="offset-xxl-2 offset-xl-1 col-lg-6 col-xxl-5">
                     <div class="card">
                        <div class="card-body">
                           <div class="mb-4 text-center">
                              <h2 class="h3 text-primary mb-0">Create Your Account</h2>
                              <p>Fill out the form to get started.</p>
                           </div>

                           <form class="form-default" role="form" action="<?php echo base_url('User/registration'); ?>" method="POST">                                     
                              <div class="row">
                                 <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                       <label class="form-label"
                                          for="on_behalf">On Behalf</label>
                                       <select class="form-control aiz-selectpicker " name="on_behalf" required>
                                          <option value="Friend">Friend</option>
                                          <option value="Brother">Brother</option>
                                          <option value="Sister">Sister</option>
                                          <option value="Daughter/Son">Daughter/Son</option>
                                          <option value="Selfs">Selfs</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-lg-6">
                                    <div class="form-group mb-3">
                                       <label class="form-label"
                                          for="name">First Name</label>
                                       <input type="text"
                                          class="form-control "
                                          name="first_name" id="first_name"
                                          placeholder="First Name" required>
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="form-group mb-3">
                                       <label class="form-label"
                                          for="name">Last Name</label>
                                       <input type="text"
                                          class="form-control "
                                          name="last_name" id="last_name"
                                          placeholder="Last Name" required>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-lg-6">
                                    <div class="form-group mb-3">
                                       <label class="form-label"
                                          for="gender">Gender</label>
                                       <select class="form-control aiz-selectpicker " name="gender" required>
                                          <option value="Male">Male</option>
                                          <option value="Female">Female</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="form-group mb-3">
                                       <label class="form-label"
                                          for="name">Date Of Birth</label>
                                       <input type="text"
                                          class="form-control aiz-date-range "
                                          name="dob" id="dob"
                                          placeholder="Date Of Birth" data-single="true"
                                          data-show-dropdown="true" data-max-date="2023-04-29"
                                          autocomplete="off" required>
                                    </div>
                                 </div>
                              </div>
                              <div>
                                 <div class="d-flex justify-content-between align-items-start">
                                    <label class="form-label"
                                       for="email">Email</label>
                                    <!-- <button class="btn btn-link p-0 opacity-50 text-reset fs-12" type="button" onclick="toggleEmailPhone(this)">Use Email Instead</button> -->
                                 </div>
                                 <div class="form-group phone-form-group mb-1">
                                    <input type="tel" id="phone-code"
                                       class="form-control"
                                       value="" placeholder="" name="mobile"
                                       autocomplete="off">
                                 </div>
                                 <input type="hidden" name="country_code" value="">
                                 <div class="form-group email-form-group mb-1 d-none">
                                    <input type="email"
                                       class="form-control "
                                       value=""
                                       placeholder="Email" name="email"
                                       autocomplete="off">
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-lg-6">
                                    <div class="form-group mb-3">
                                       <label class="form-label"
                                          for="password">Password</label>
                                       <input type="password"
                                          class="form-control "
                                          name="password" placeholder="********" aria-label="********"
                                          required>
                                       <small>Minimun 8 characters</small>
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="form-group mb-3">
                                       <label class="form-label"
                                          for="password-confirm">Confirm password</label>
                                       <input type="password" class="form-control"
                                          name="confirm_password" placeholder="********" required>
                                       <small>Minimun 8 characters</small>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                       <label class="form-label"
                                          for="email">Referral Code</label>
                                       <input type="text"
                                          class="form-control"
                                          value=""
                                          placeholder="Referral Code"
                                          name="reffer_code">
                                    </div>
                                 </div>
                              </div>
                              <div class="mb-3">
                                 <label class="aiz-checkbox">
                                 <input type="checkbox" name="checkbox_example_1" required>
                                 <span class=opacity-60>By signing up you agree to our
                                 <a href="terms-conditions"
                                    target="_blank">terms and conditions.</a>
                                 </span>
                                 <span class="aiz-square-check"></span>
                                 </label>
                              </div>
                              <div class="">
                                 <button type="submit" name="submit" class="btn btn-block btn-primary">Create Account</button>
                              </div>
                         
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- search  -->
            </div>
         </section>
         <!-- premium member Section -->
         <section class="py-9 bg-white">
            <div class="container">
               <div class="row">
                  <div class="col-lg-10 col-xl-8 col-xxl-6 mx-auto">
                     <div class="text-center section-title mb-5">
                        <h2 class="fw-600 mb-3 text-dark">Premium Members</h2>
                        <p class="fw-400 fs-16 opacity-60">Every Premium member on Active Matrimonial is privileged by our policy &amp; rules so you dont have to worry about your privacy or security.</p>
                     </div>
                  </div>
               </div>
               <div class="aiz-carousel gutters-10 half-outside-arrow" data-items="5" data-xl-items="4" data-lg-items="4"
                  data-md-items="3" data-sm-items="2" data-xs-items="1" data-dots='true' data-infinite='true'>

                  <?php
                  $this->db->order_by('id desc');
                  $prem_memebers = $this->crud->selectDataByMultipleWhere('registration',array('status'=>1,'membership'=>1,));
                  foreach($prem_memebers as $key => $data)
                     { ?>
                  <?php $this->load->view('memeber-card',array('data'=>$data,)); ?>
               <?php } ?>


                 
               </div>
            </div>
         </section>
         <!-- Banner section 1 -->
         <section class="bg-white">
            <div class="container">
               <div class="row gutters-10">
                  <div class="col-xl col-md-6">
                     <div class="mb-3">
                        <a href="#"
                           class="d-block text-reset">
                        <img src="<?php echo base_url(); ?>public/assets/img/placeholder-rect.jpg"
                           data-src="<?php echo base_url(); ?>public/uploads/all/SHlh3Cwc7RaNiiSyvNGmexFDLSYoHkRXlMQqvYwo.png"
                           alt="testing" class="img-fluid lazyload w-100">
                        </a>
                     </div>
                  </div>
                  <div class="col-xl col-md-6">
                     <div class="mb-3">
                        <a href="#"
                           class="d-block text-reset">
                        <img src="<?php echo base_url(); ?>public/assets/img/placeholder-rect.jpg"
                           data-src="<?php echo base_url(); ?>public/uploads/all/MKeWioNRNyyZSPAJoi6Cy99Jk7kJn8gJabqjEBQW.png"
                           alt="testing" class="img-fluid lazyload w-100">
                        </a>
                     </div>
                  </div>
                  <div class="col-xl col-md-6">
                     <div class="mb-3">
                        <a href="#"
                           class="d-block text-reset">
                        <img src="<?php echo base_url(); ?>public/assets/img/placeholder-rect.jpg"
                           data-src="<?php echo base_url(); ?>public/uploads/all/UgoHnTw7QRHMYhzI9MaeSRNvcIP8FxR1FaGNyY32.png"
                           alt="testing" class="img-fluid lazyload w-100">
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- How It Works Section -->
         <section class="py-8 bg-white">
            <div class="container">
               <div class="row">
                  <div class="col-lg-10 col-xl-8 col-xxl-6 mx-auto">
                     <div class="text-center section-title mb-5">
                        <h2 class="fw-600 mb-3">How It Works</h2>
                        <p class="fw-400 fs-16 opacity-60">When you realize you want to spend the rest of your life with somebody, you want the rest of your life to start as soon as possible.</p>
                     </div>
                  </div>
               </div>
               <div class="row gutters-10">
                  <div class="col-lg">
                     <div class="border p-3 mb-3">
                        <div class=" row align-items-center">
                           <div class="col-7">
                              <div class="text-primary fw-600 h1">1</div>
                              <div class="text-secondary fs-20 mb-2 fw-600">Sign up
                              </div>
                              <div class="fs-15 opacity-60">
                                 Register for free &amp;  put up your Profile
                              </div>
                           </div>
                           <div class="mt-3 col-5 text-right">
                              <img src="<?php echo base_url(); ?>public/uploads/all/D8IvIuVZ1XgBEbW8WNygx6JM0G6AVPKohVaHyj7X.png"
                                 class="img-fluid h-80px">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg">
                     <div class="border p-3 mb-3">
                        <div class=" row align-items-center">
                           <div class="col-7">
                              <div class="text-primary fw-600 h1">2</div>
                              <div class="text-secondary fs-20 mb-2 fw-600">Connect
                              </div>
                              <div class="fs-15 opacity-60">
                                 Select &amp; Connect with Matches you like
                              </div>
                           </div>
                           <div class="mt-3 col-5 text-right">
                              <img src="<?php echo base_url(); ?>public/uploads/all/zxhwmcnXiCd5WUb8V4GBLb7VkvXuEl2DHFUUD2sk.png"
                                 class="img-fluid h-80px">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg">
                     <div class="border p-3 mb-3">
                        <div class=" row align-items-center">
                           <div class="col-7">
                              <div class="text-primary fw-600 h1">3</div>
                              <div class="text-secondary fs-20 mb-2 fw-600">Interact
                              </div>
                              <div class="fs-15 opacity-60">
                                 Become a Premium Member &amp; Start a Conversation
                              </div>
                           </div>
                           <div class="mt-3 col-5 text-right">
                              <img src="<?php echo base_url(); ?>public/uploads/all/bB4GZnLSrquYOKA3lbH0JI5WKWEwznwXNvjbAEEU.png"
                                 class="img-fluid h-80px">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- Trusted by Millions Section -->
         <section class="bg-center bg-cover min-vh-100 py-8 text-white d-flex align-items-center bg-fixed"
            style="background-image: url('<?php echo base_url(); ?>public/uploads/all/Zo4yekKwhDtasX6uEl3cKZFei63iYAAvi2550jOr.png')">
            <div class="container">
               <div class="row">
                  <div class="col-xl-8 mx-auto">
                     <div class="text-center pb-12">
                        <h2 class="fw-600">Trusted by Millions</h2>
                        <div class="fs-16 fw-400">&quot;Love doesn&#039;t make the world go around. Love is what makes the ride worthwhile.&quot; Millions of Active Matrimonial users around the world find their true love and partners from this site. We are always there to help and find you the suitable match for yourself.</div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg">
                     <div class="border rounded position-relative z-1 border-gray-600 overflow-hidden mt-4">
                        <div class="absolute-full bg-dark opacity-60 z--1"></div>
                        <div class="px-4 py-5 d-flex align-items-center justify-content-center">
                           <img src="<?php echo base_url(); ?>public/uploads/all/54adYPz3OC2PKzpgZF0rpnvR3qKeDMTikwOqNsMW.png"
                              class="img-fluid h-20px">
                           <span class="fs-17 ml-2">Best Matches</span>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg">
                     <div class="border rounded position-relative z-1 border-gray-600 overflow-hidden mt-4">
                        <div class="absolute-full bg-dark opacity-60 z--1"></div>
                        <div class="px-4 py-5 d-flex align-items-center justify-content-center">
                           <img src="<?php echo base_url(); ?>public/uploads/all/Zk2lj7FFjeGGYOhch3vtEAkxnnom4zPcWq1bV0tr.png"
                              class="img-fluid h-20px">
                           <span class="fs-17 ml-2">Verified Profiles</span>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg">
                     <div class="border rounded position-relative z-1 border-gray-600 overflow-hidden mt-4">
                        <div class="absolute-full bg-dark opacity-60 z--1"></div>
                        <div class="px-4 py-5 d-flex align-items-center justify-content-center">
                           <img src="<?php echo base_url(); ?>public/uploads/all/5HxbGcXOowGkctJOQHm5CYETk4wIPutWs5eb3dlL.png"
                              class="img-fluid h-20px">
                           <span class="fs-17 ml-2">100% Privacy</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- New Member Section -->
         <section class="py-9 bg-white">
            <div class="container">
               <div class="row">
                  <div class="col-lg-10 col-xl-8 col-xxl-6 mx-auto">
                     <div class="text-center section-title mb-5">
                        <h2 class="fw-600 mb-3 text-dark">New Members</h2>
                        <p class="fw-400 fs-16 opacity-60">Every user registered on Active Matrimonial is verified via photo and mobile phone so you don’t have to worry how real or fake anyone is..</p>
                     </div>
                  </div>
               </div>
               <div class="aiz-carousel gutters-10 half-outside-arrow" data-items="5" data-xl-items="4" data-lg-items="4"
                  data-md-items="3" data-sm-items="2" data-xs-items="1" data-dots='true' data-infinite='true'>

                  <?php
                  $this->db->order_by('id desc');
                  $prem_memebers = $this->crud->selectDataByMultipleWhere('registration',array('status'=>1,));
                  foreach($prem_memebers as $key => $data)
                     { ?>
                  <?php $this->load->view('memeber-card',array('data'=>$data,)); ?>
                  <?php } ?>
               </div>
            </div>
         </section>
         <!-- happy Story Section -->
         <section class="py-7 bg-dark text-white">
            <div class="container">
               <div class="row">
                  <div class="col-lg-10 col-xl-8 col-xxl-6 mx-auto">
                     <div class="text-center section-title mb-5">
                        <h2 class="fw-600 mb-3">Happy Stories</h2>
                     </div>
                  </div>
               </div>


               <div class="card-columns column-gap-10 card-columns-xxl-4 card-columns-lg-3 card-columns-md-2 card-columns-1">
                  <?php 
                  $this->db->order_by('id desc');
                  $this->db->limit(8);
                  $story = $this->crud->selectDataByMultipleWhere('happy_story',array('status'=>1,));
                  foreach($story as $data)

                  { ?>
                  <div class="card border-gray-800 overflow-hidden mb-2">
                     <a href="<?php echo base_url('story-details/'.$data->slug); ?>"
                        class="text-reset d-block position-relative">
                        <img src="<?php echo base_url(); ?>media/uploads/happy_story/<?php echo $data->image; ?>" class="img-fluid">
                        <div class="absolute-bottom-left p-3">
                           <div class="position-relative z-1 p-3">
                              <div class="absolute-full z--1 bg-dark opacity-60"></div>
                              <div class="text-primary text-truncate"><?php echo $data->name; ?></div>
                              <h2 class="h5 mb-0 fs-14 fw-400 lh-1-5 text-truncate-3"><?php echo $data->small_info; ?></h2>
                           </div>
                        </div>
                     </a>
                  </div>
                  
                 <?php } ?>
               </div>
               <div class="text-center mt-4">
                  <a href="<?php echo base_url(); ?>happy-stories" class="btn btn-primary">View More</a>
               </div>
            </div>
         </section>
         <section class="py-7 bg-white">
            <div class="container">
               <div class="row">
                  <div class="col-xl-8 col-xxl-6 mx-auto">
                     <div class="text-center pb-6">
                        <h2 class="fw-600 text-dark">Packages</h2>
                        <div class="fs-16 fw-400">Choose any of our packages as per your need. You&#039;ll get your money back anytime if we&#039;re unable to satisfy your need.</div>
                     </div>
                  </div>
               </div>
               <div class="aiz-carousel" data-items="4" data-xl-items="3" data-md-items="2" data-sm-items="1"
                  data-dots='true' data-infinite='true' data-autoplay='true'>

                      <?php
                   $plans = $this->crud->selectDataByMultipleWhere('plans',array('status'=>1,));
                   foreach($plans as $data)
                    { ?>
                  <div class="carousel-box">
                      <div class="overflow-hidden shadow-none border-right">
                          <div class="card-body">
                              <div class="text-center mb-4 mt-3">
                                  <img class="mw-100 mx-auto mb-4" src="<?php echo base_url(); ?>media/uploads/plans/<?php echo $data->image; ?>" height="130">
                                  <h5 class="mb-3 h5 fw-600"><?php echo $data->name; ?></h5>
                              </div>
                              <ul class="list-group list-group-raw fs-15 mb-5">
                                  <?php
                                  if(!empty($data->field_1))
                                      { ?>
                                  <li class="list-group-item py-2">
                                      <i class="las la-check text-success mr-2"></i>
                                      <?php echo $data->field_1; ?>
                                  </li>
                              <?php } ?>
                                   <?php
                                  if(!empty($data->field_2))
                                      { ?>
                                  <li class="list-group-item py-2">
                                      <i class="las la-check text-success mr-2"></i>
                                      <?php echo $data->field_2; ?>
                                  </li>
                              <?php } ?>
                               <?php
                                  if(!empty($data->field_3))
                                      { ?>
                                  <li class="list-group-item py-2">
                                      <i class="las la-check text-success mr-2"></i>
                                      <?php echo $data->field_3; ?>
                                  </li>
                              <?php } ?>
                               <?php
                                  if(!empty($data->field_4))
                                      { ?>
                                  <li class="list-group-item py-2">
                                      <i class="las la-check text-success mr-2"></i>
                                      <?php echo $data->field_4; ?>
                                  </li>
                              <?php } ?>
                               <?php
                                  if(!empty($data->field_5))
                                      { ?>
                                  <li class="list-group-item py-2">
                                      <i class="las la-check text-success mr-2"></i>
                                      <?php echo $data->field_5; ?>
                                  </li>
                              <?php } ?>
                               <?php
                                  if(!empty($data->field_6))
                                      { ?>
                                  <li class="list-group-item py-2">
                                      <i class="las la-check text-success mr-2"></i>
                                      <?php echo $data->field_6; ?>
                                  </li>
                              <?php } ?>

                              </ul>
                              <div class="mb-5 text-dark text-center">
                                  <span class="display-4 fw-600 lh-1 mb-0"><?php echo $data->price; ?></span>
                                  <span class="text-secondary d-block"><?php echo $data->days; ?></span>
                              </div>
                              <!-- <div class="text-center">
                                  <a href="javascript:void(0);" class="btn btn-light" ><del>Purchase This Package</del></a>
                              </div> -->
                              <div class="text-center">
                                  <button type="submit" class="btn btn-primary" tabindex="0">Purchase This Package</button>
                              </div>
                          </div>
                      </div>
                  </div>
               <?php } ?>

                  
               </div>
            </div>
         </section>

          <section class="py-7 bg-cover bg-center text-white"
            style="background-image: url('<?php echo base_url(); ?>public/uploads/all/LXbZN69RAoSGbxwxt5gk9IyItmqzHlklA03hsPYO.png');">
            <div class="container">
               <div class="row">
                  <div class="col-lg-10 col-xl-9 col-xxl-6 mx-auto">
                     <div class="text-center section-title mb-5">
                        <h2 class="fw-600 mb-3"></h2>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xxl-10 mx-auto">
                     <div class="aiz-carousel large-arrow" data-items="1" data-arrows='true' data-infinite='true' data-autoplay='true'>
                        <?php
                        $this->db->order_by('id desc');
                        $testimonials = $this->crud->selectDataByMultipleWhere('testimonials',array('status'=>1,));
                        foreach($testimonials as $data)
                           { ?>
                        <div class="carousel-box">
                           <div class="text-center px-lg-9">
                              <img src="<?php echo base_url(); ?>media/uploads/testimonials/<?php echo $data->image; ?>"
                                 class="size-180px img-fit mx-auto rounded-circle border border-white border-width-5 shadow-lg mb-5">
                              <div class="fs-18 fw-300 font-italic"><?php echo $data->content; ?></div>
                              <i class="las la-quote-right la-10x text-dark opacity-30"></i>
                           </div>
                        </div>

                        <?php } ?>


                     </div>
                  </div>
               </div>
            </div>
         </section>


         <section class="py-7 bg-white text-white">
            <div class="container">
               <div class="row">
                  <div class="col-lg-10 col-xl-8 col-xxl-6 mx-auto">
                     <div class="text-center section-title mb-5">
                        <h2 class="fw-600 mb-3 text-dark">Blog Section</h2>
                     </div>
                  </div>
               </div>
               <div class="aiz-carousel gutters-10" data-items="4" data-xl-items="3" data-md-items="2" data-sm-items="1"
                  data-arrows='true'>
                  
                  <?php
                  $this->db->order_by('id desc');
                  $blog = $this->crud->selectDataByMultipleWhere('blog',array('status'=>1,));
                  foreach($blog as $data)
                     { ?>
                  <div class="caorusel-box p-1">
                     <div class="card mb-3 overflow-hidden shadow-sm text-dark">
                        <a href="<?php echo base_url('blog-details/'.$data->slug); ?>" class="text-reset d-block">
                        <img src="<?php echo base_url(); ?>media/uploads/blog/<?php echo $data->image; ?>" alt="<?php echo $data->name; ?>"
                           class="h-200px img-fit">
                        </a>
                        <div class="p-4">
                           <h2 class="fs-18 fw-600 mb-1">
                              <a href="<?php echo base_url('blog-details/'.$data->slug); ?>" class="text-reset"><?php echo $data->name; ?></a>
                           </h2>
                          <!--  <div class="mb-2 opacity-50">
                              <i>Weeding Tips</i>
                           </div> -->
                           <p class="opacity-70 mb-4"><?php echo $data->name; ?></p>
                           <a href="<?php echo base_url('blog-details/'.$data->slug); ?>"
                              class="btn btn-soft-primary">View More</a>
                        </div>
                     </div>
                  </div>

               <?php } ?>

               </div>
               <div class="text-center mt-4">
                  <a href="<?php echo base_url(); ?>blog" class="btn btn-primary">View More</a>
               </div>
            </div>
         </section>

         
         <?php $this->load->view("footer"); ?>