<?php $this->load->view("header"); ?>

         <section class="py-5 bg-white memeber-list">
            <div class="container">
               <div class="row">
                  <div class="col-lg-10 mx-auto">
                     <form action="https://demo.activeitzone.com/matrimonial/recharge" class="form-default" role="form" method="POST" id="package-payment-form">
                        <input type="hidden" name="_token" value="WqgLNsDi4wd3k3FkbQYXuVsN1aHzUw9LyRimfiLT">                    <input type="hidden" id="payment_type" value="">
                        <div class="card shadow-none">
                           <div class="card-header p-3">
                              <h3 class="fs-16 fw-600 mb-0">
                                 Select a payment option
                              </h3>
                           </div>
                           <div class="card-body">
                              <div class="row">
                                 <div class="col-xxl-10 col-xl-10 mx-auto">
                                    <div class="form-group row">
                                       <label class="col-md-2 col-form-label">Amount<span class="text-danger"> *</span></label>
                                       <div class="col-md-10">
                                          <input type="text" name="amount" id="amount" class="form-control" placeholder="Amount" required>
                                       </div>
                                    </div>
                                    <div class="row gutters-10">
                                       <div class="col-4 col-md-2">
                                          <label class="aiz-megabox d-block mb-3">
                                          <input value="paypal" class="online_payment" type="radio" name="payment_option">
                                          <span class="d-block p-3 aiz-megabox-elem">
                                          <img src="https://demo.activeitzone.com/matrimonial/public/assets/img/payment_method/paypal.png" class="img-fluid mb-2">
                                          <span class="d-block text-center">
                                          <span class="d-block fw-600 fs-15">Paypal</span>
                                          </span>
                                          </span>
                                          </label>
                                       </div>
                                       <div class="col-4 col-md-2">
                                          <label class="aiz-megabox d-block mb-3">
                                          <input value="stripe" class="online_payment" type="radio" name="payment_option">
                                          <span class="d-block p-3 aiz-megabox-elem">
                                          <img src="https://demo.activeitzone.com/matrimonial/public/assets/img/payment_method/stripe.png" class="img-fluid mb-2">
                                          <span class="d-block text-center">
                                          <span class="d-block fw-600 fs-15">Stripe</span>
                                          </span>
                                          </span>
                                          </label>
                                       </div>
                                       <div class="col-4 col-md-2">
                                          <label class="aiz-megabox d-block mb-3">
                                          <input value="instamojo" class="online_payment" type="radio" name="payment_option">
                                          <span class="d-block p-3 aiz-megabox-elem">
                                          <img src="https://demo.activeitzone.com/matrimonial/public/assets/img/payment_method/instamojo.png" class="img-fluid mb-2">
                                          <span class="d-block text-center">
                                          <span class="d-block fw-600 fs-15">Instamojo</span>
                                          </span>
                                          </span>
                                          </label>
                                       </div>
                                       <div class="col-4 col-md-2">
                                          <label class="aiz-megabox d-block mb-3">
                                          <input value="razorpay" class="online_payment" type="radio" name="payment_option">
                                          <span class="d-block p-3 aiz-megabox-elem">
                                          <img src="https://demo.activeitzone.com/matrimonial/public/assets/img/payment_method/rozarpay.png" class="img-fluid mb-2">
                                          <span class="d-block text-center">
                                          <span class="d-block fw-600 fs-15">Razorpay</span>
                                          </span>
                                          </span>
                                          </label>
                                       </div>
                                       <div class="col-4 col-md-2">
                                          <label class="aiz-megabox d-block mb-3">
                                          <input value="paystack" class="online_payment" type="radio" name="payment_option">
                                          <span class="d-block p-3 aiz-megabox-elem">
                                          <img src="https://demo.activeitzone.com/matrimonial/public/assets/img/payment_method/paystack.png" class="img-fluid mb-2">
                                          <span class="d-block text-center">
                                          <span class="d-block fw-600 fs-15">Paystack</span>
                                          </span>
                                          </span>
                                          </label>
                                       </div>
                                       <div class="col-4 col-md-2">
                                          <label class="aiz-megabox d-block mb-3">
                                          <input value="manual_payment_1" type="radio" name="payment_option" class="manual_payment_1">
                                          <span class="d-block p-3 aiz-megabox-elem">
                                          <img src="" class="img-fluid mb-2">
                                          <span class="d-block text-center">
                                          <span class="d-block fw-600 fs-15">Hillary Jennings</span>
                                          </span>
                                          </span>
                                          </label>
                                       </div>
                                       <div class="col-4 col-md-2">
                                          <label class="aiz-megabox d-block mb-3">
                                          <input value="manual_payment_2" type="radio" name="payment_option" class="manual_payment_2">
                                          <span class="d-block p-3 aiz-megabox-elem">
                                          <img src="" class="img-fluid mb-2">
                                          <span class="d-block text-center">
                                          <span class="d-block fw-600 fs-15">Method 2</span>
                                          </span>
                                          </span>
                                          </label>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-10 mx-auto d-none" id="manual_payment_1_info">
                                    <div class="bg-white border mb-3 p-3 rounded text-left ">
                                       <p class="MsoNormal" style="mso-margin-bottom-alt:auto;line-height:normal;
                                          mso-outline-level:5">
                                          <b><i><span style="font-size:10.0pt;font-family:&quot;Helvetica&quot;,sans-serif;
                                             mso-fareast-font-family:&quot;Times New Roman&quot;;color:#1B1B28">Manual Payment Method
                                          1 - Instruction1</span></i></b>
                                          <span style="font-size:10.0pt;font-family:&quot;Helvetica&quot;,sans-serif;
                                             mso-fareast-font-family:&quot;Times New Roman&quot;;color:#1B1B28">
                                             <o:p></o:p>
                                          </span>
                                       </p>
                                       <p class="MsoNormal" style="mso-margin-bottom-alt:auto;line-height:normal;
                                          mso-outline-level:5">
                                          <span style="font-size:10.0pt;font-family:&quot;Helvetica&quot;,sans-serif;
                                             mso-fareast-font-family:&quot;Times New Roman&quot;;color:#1B1B28">
                                             Manual Payment Method
                                             1 - Instruction2
                                             <o:p></o:p>
                                          </span>
                                       </p>
                                       <ol start="1" type="1">
                                          <li class="MsoNormal" style="color:#1B1B28;mso-margin-top-alt:auto;mso-margin-bottom-alt:
                                             auto;line-height:normal;mso-list:l0 level1 lfo1;tab-stops:list .5in">
                                             <span style="font-size:10.0pt;font-family:&quot;Helvetica&quot;,sans-serif;mso-fareast-font-family:
                                                &quot;Times New Roman&quot;">
                                                Manual Payment Method 1 - Instruction3
                                                <o:p></o:p>
                                             </span>
                                          </li>
                                          <li class="MsoNormal" style="color:#1B1B28;mso-margin-top-alt:auto;mso-margin-bottom-alt:
                                             auto;line-height:normal;mso-list:l0 level1 lfo1;tab-stops:list .5in">
                                             <span style="font-size:10.0pt;font-family:&quot;Helvetica&quot;,sans-serif;mso-fareast-font-family:
                                                &quot;Times New Roman&quot;">
                                                Manual Payment Method 1 - Instruction4
                                                <o:p></o:p>
                                             </span>
                                          </li>
                                          <li class="MsoNormal" style="color:#1B1B28;mso-margin-top-alt:auto;mso-margin-bottom-alt:
                                             auto;line-height:normal;mso-list:l0 level1 lfo1;tab-stops:list .5in">
                                             <span style="font-size:10.0pt;font-family:&quot;Helvetica&quot;,sans-serif;mso-fareast-font-family:
                                                &quot;Times New Roman&quot;">
                                                Manual Payment Method 1 - Instruction5
                                                <o:p></o:p>
                                             </span>
                                          </li>
                                       </ol>
                                    </div>
                                 </div>
                                 <div class="col-md-10 mx-auto d-none" id="manual_payment_2_info">
                                    <div class="bg-white border mb-3 p-3 rounded text-left ">
                                       <p class="MsoNormal" style="line-height: normal;">
                                          <span style="font-weight: bolder;"><i><span style="font-size: 10pt; font-family: Helvetica, sans-serif; color: rgb(27, 27, 40);">Manual Payment Method 2 - Instruction1</span></i></span>
                                          <span style="font-size: 10pt; font-family: Helvetica, sans-serif; color: rgb(27, 27, 40);">
                                             <o:p></o:p>
                                          </span>
                                       </p>
                                       <p class="MsoNormal" style="line-height: normal;">
                                          <span style="font-size: 10pt; font-family: Helvetica, sans-serif; color: rgb(27, 27, 40);">
                                             Manual Payment Method 2 - Instruction2
                                             <o:p></o:p>
                                          </span>
                                       </p>
                                       <ol start="1" type="1">
                                          <li class="MsoNormal" style="color: rgb(27, 27, 40); line-height: normal;">
                                             <span style="font-size: 10pt; font-family: Helvetica, sans-serif;">
                                                Manual Payment Method 2 - Instruction3
                                                <o:p></o:p>
                                             </span>
                                          </li>
                                          <li class="MsoNormal" style="color: rgb(27, 27, 40); line-height: normal;">
                                             <span style="font-size: 10pt; font-family: Helvetica, sans-serif;">
                                                Manual Payment Method 2 - Instruction4
                                                <o:p></o:p>
                                             </span>
                                          </li>
                                          <li class="MsoNormal" style="color: rgb(27, 27, 40); line-height: normal;"><span style="font-size: 10pt; font-family: Helvetica, sans-serif;">Manual Payment Method 2 - Instruction5</span></li>
                                       </ol>
                                    </div>
                                 </div>
                                 <div class="col-md-10 mx-auto d-none" id="purchase_by_manual_payment">
                                    <div class="form-group row">
                                       <div class="col-md-6">
                                          <label >Transaction Id<span class="text-danger"> *</span></label>
                                          <input type="text" name="transaction_id" id="transaction_id"  class="form-control" placeholder="Transaction Id">
                                       </div>
                                       <div class="col-md-6">
                                          <label>Payment Proof<span class="text-danger"> *</span></label>
                                          <div class="input-group" data-toggle="aizuploader" data-type="image">
                                             <div class="input-group-prepend">
                                                <div class="input-group-text bg-soft-secondary font-weight-medium">Browse</div>
                                             </div>
                                             <div class="form-control file-amount">Choose file</div>
                                             <input type="hidden" name="payment_proof" id="payment_proof" class="selected-files">
                                          </div>
                                          <div class="file-preview box sm">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="form-group row">
                                       <div class="col-md-12">
                                          <label>Payment Details</label>
                                          <textarea type="text" name="payment_details" class="form-control" rows="2" placeholder="Payment Details"></textarea>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class=" text-right pt-3">
                           <button type="button" onclick="package_purchase(this)" class="btn btn-primary fw-600 purchase_button" disabled>Confirm</button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </section>

        <?php $this->load->view("footer"); ?>