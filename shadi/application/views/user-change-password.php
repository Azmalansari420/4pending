<?php $this->load->view("header"); ?>

         <section class="py-5 bg-white memeber-list">
            <div class="container">
               <div class="d-flex align-items-start">
                  <div class="aiz-user-sidenav-wrap pt-4 sticky-top c-scrollbar-light position-relative z-1 shadow-none">
                     <div class="absolute-top-left d-xl-none">
                        <button class="btn btn-sm p-2" data-toggle="class-toggle" data-target=".aiz-mobile-side-nav" data-same=".mobile-side-nav-thumb">
                        <i class="las la-times la-2x"></i>
                        </button>
                     </div>
                     <?php $this->load->view('user-sidebar'); ?>
                  </div>
                  <div class="aiz-user-panel overflow-hidden">
                     <div class="card">
                        <div class="card-header">
                           <h5 class="mb-0 h6">Change Password</h5>
                        </div>
                        <div class="card-body">
                           <form action="https://demo.activeitzone.com/matrimonial/member/password-update/27" method="POST">
                              <input type="hidden" name="_token" value="WqgLNsDi4wd3k3FkbQYXuVsN1aHzUw9LyRimfiLT">            
                              <div class="form-group row">
                                 <label class="col-md-3 col-form-label">Old Password<span class="text-danger">*</span></label>
                                 <div class="col-md-9">
                                    <input type="password" name="old_password" id="old_password" class="form-control" placeholder="Old Password" required>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label class="col-md-3 col-form-label">Password<span class="text-danger">*</span></label>
                                 <div class="col-md-9">
                                    <input type="password" name="password" id="new_password" class="form-control" placeholder="Password" required>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label class="col-md-3 col-form-label">Confirm password<span class="text-danger">*</span></label>
                                 <div class="col-md-9">
                                    <input type="password" class="form-control" name="confirm_password" onkeyup="checkPasswordValidation(123)" id="confirm_password" placeholder="Confirm password" required>
                                    <small id="confirm_password_help" class="form-text text-muted" style="color: red; display: none;">Mismatch Password.</small>
                                 </div>
                              </div>
                              <div class="form-group row text-right">
                                 <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary" id="passSaveBtn" disabled>Confirm</button>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <?php $this->load->view("footer"); ?>