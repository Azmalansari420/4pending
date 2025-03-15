       <?php $this->load->view("header"); ?>

        <section class="pt-4 mb-4 memeber-list">
            <div class="container">
               <div class="contact-us">
                  <div class="row">
                     <div class="col-md-6 offset-md-3">
                        <div class="contact-us my-5">
                           <h2 class="text-center mb-4">Can we help you?</h2>
                           <?php echo $this->session->flashdata('message'); ?>
                           <div class="card">
                              <div class="card-body">
                                 <form action="<?php echo base_url('welcome/enquiry_form'); ?>" method="post">                              
                                    <div class="mb-3">
                                       <label class="form-label text-primary-grad"> Name <span
                                          class="text-danger">*</span> </label>
                                       <input type="text" class="form-control" name="name"
                                          placeholder="Enter your full name" required>
                                    </div>
                                    <div class="mb-3">
                                       <label class="form-label text-primary-grad"> Email <span
                                          class="text-danger">*</span></label>
                                       <input type="email" class="form-control" name="email"
                                          placeholder="Enter Your E-mail" >
                                       <div class="form-text">
                                          Please, enter the email address where you wish to receive our
                                          answer.
                                       </div>
                                    </div>
                                    <div class="mb-3">
                                       <label class="form-label text-primary-grad"> Mobile <span
                                          class="text-danger">*</span></label>
                                       <input type="number" class="form-control" name="mobile"
                                          placeholder="Enter Your Mobile" >
                                       <div class="form-text">
                                          Please, enter your Mobile where you wish to receive our
                                          Call.
                                       </div>
                                    </div>
                                    <div class="mb-3">
                                       <label class="form-label text-primary-grad"> Subject <span
                                          class="text-danger">*</span> </label>
                                       <input type="text" class="form-control" name="subject"
                                          placeholder="Write the subject here" required>
                                    </div>
                                    <div class="mb-3">
                                       <label class="form-label text-primary-grad"> Description <span
                                          class="text-danger">*</span> </label>
                                       <textarea class="form-control" rows="8" placeholder=" Write your Message here"
                                          name="message" required style="resize: none;"></textarea>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-block btn-primary">Send</button>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
        </section>
       <?php $this->load->view("footer"); ?>
