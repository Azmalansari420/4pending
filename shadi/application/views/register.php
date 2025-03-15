<?php $this->load->view("header"); ?>


        <div class="py-4 py-lg-5 memeber-list">
	   <div class="container">
	      <div class="row">
	         <div class="col-xxl-6 col-xl-6 col-md-8 mx-auto">
	            <div class="card">
	               <div class="card-body">
	                  <div class="mb-5 text-center">
	                     <h1 class="h3 text-primary mb-0">Create Your Account</h1>
	                     <p>Fill out the form to get started.</p>
	                  <?php echo $this->session->flashdata('error_message'); ?>
	                  </div>


	                  <form class="form-default" role="form" action="<?php echo base_url('User/registration'); ?>" method="POST" >
	                     <div class="row">
	                        <div class="col-lg-12">
	                           <div class="form-group mb-3">
	                              <label class="form-label" for="on_behalf">On Behalf</label>
	                              <select class="form-control aiz-selectpicker " name="on_behalf" required>
	                                 <option value="Friend">Friend</option>
	                                 <option value="Brother">Brother</option>
	                                 <option value="Sister">Sister</option>
	                                 <option value="Daughter/Son">Daughter/Son</option>
	                                 <option value="Selfs" selected>Selfs</option>
	                              </select>
	                           </div>
	                        </div>
	                     </div>
	                     <div class="row">
	                        <div class="col-lg-6">
	                           <div class="form-group mb-3">
	                              <label class="form-label" for="name">First Name</label>
	                              <input type="text" class="form-control " name="first_name" id="first_name" placeholder="First Name"  required >
	                           </div>
	                        </div>
	                        <div class="col-lg-6">
	                           <div class="form-group mb-3">
	                              <label class="form-label" for="name">Last Name</label>
	                              <input type="text" class="form-control " name="last_name" id="last_name" placeholder="Last Name"  required>
	                           </div>
	                        </div>
	                     </div>
	                     <div class="row">
	                        <div class="col-lg-6">
	                           <div class="form-group mb-3">
	                              <label class="form-label" for="gender">Gender</label>
	                              <select class="form-control aiz-selectpicker " name="gender" required>
	                                 <option value="Male">Male</option>
	                                 <option value="Female">Female</option>
	                              </select>
	                           </div>
	                        </div>
	                        <div class="col-lg-6">
	                           <div class="form-group mb-3">
	                              <label class="form-label" for="name">Date Of Birth</label>
	                              <input type="text" class="form-control aiz-date-range " name="dob" id="dob" placeholder="Date Of Birth" data-single="true" data-show-dropdown="true" data-max-date="2023-04-29" autocomplete="off" required>
	                           </div>
	                        </div>
	                     </div>
	                     <div>
	                        <div class="d-flex justify-content-between align-items-start">
	                           <label class="form-label" for="email">Email </label>
	                           <!-- <button class="btn btn-link p-0 opacity-50 text-reset fs-12" type="button" onclick="toggleEmailPhone(this)">Use Email Instead</button> -->
	                        </div>

	                        <div class="form-group phone-form-group mb-1 d-none">
	                           <input type="tel" id="phone-code" class="form-control" value="" placeholder="" name="mobile" autocomplete="off">
	                        </div>
	                        <input type="hidden" name="country_code" value="">

	                        <div class="form-group email-form-group mb-1 ">
	                           <input type="email" class="form-control " value="" placeholder="Email" name="email"  autocomplete="off">
	                        </div>
	                     </div>
	                     <div class="row">
	                        <div class="col-lg-6">
	                           <div class="form-group mb-3">
	                              <label class="form-label" for="password">Password</label>
	                              <input type="password" class="form-control " name="password" placeholder="********" aria-label="********" required>
	                              <small>Minimun 8 characters</small>
	                           </div>
	                        </div>
	                        <div class="col-lg-6">
	                           <div class="form-group mb-3">
	                              <label class="form-label" for="password-confirm">Confirm password</label>
	                              <input type="password" class="form-control" name="confirm_password" placeholder="********" required>
	                              <small>Minimun 8 characters</small>
	                           </div>
	                        </div>
	                     </div>
	                     <div class="row">
	                        <div class="col-lg-12">
	                           <div class="form-group mb-3">
	                              <label class="form-label" for="email">Referral Code</label>
	                              <input type="text" class="form-control" value="" placeholder="Referral Code" name="reffer_code">
	                           </div>
	                        </div>
	                     </div>
	                     <div class="mb-3">
	                        <label class="aiz-checkbox">
	                        <input type="checkbox" name="checkbox_example_1" required>
	                        <span class=opacity-60>By signing up you agree to our
	                        <a href="terms-conditions" target="_blank">terms and conditions.</a>
	                        </span>
	                        <span class="aiz-square-check"></span>
	                        </label>
	                     </div>
	                     <div class="mb-5">
	                        <button type="submit" name="submit" class="btn btn-block btn-primary">Create Account</button>
	                     </div>
	                   
	                     <div class="text-center">
	                        <p class="text-muted mb-0">Already have an account?</p>
	                        <a href="login">Login to your Account</a>
	                     </div>
	                  </form>
	               </div>
	            </div>
	         </div>
	      </div>
	   </div>
	</div>

        <?php $this->load->view("footer"); ?>
