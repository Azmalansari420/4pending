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
                     <div class="row gutters-10">
                        <div class="col-md-4 mx-auto mb-3" >
                           <div class="bg-grad-1 text-white rounded-lg overflow-hidden">
                              <span class="size-30px rounded-circle mx-auto bg-soft-primary d-flex align-items-center justify-content-center mt-3">
                              <i class="las la-dollar-sign la-2x text-white"></i>
                              </span>
                              <div class="px-3 pt-3 pb-3">
                                 <div class="h4 fw-700 text-center">0$</div>
                                 <div class="opacity-50 text-center">Wallet Balance</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-4 mx-auto mb-3" >
                           <div class="p-3 rounded mb-3 c-pointer text-center bg-white shadow-sm hov-shadow-lg has-transition bg-soft-info" onclick="show_wallet_withdraw_modal()">
                              <span class="size-60px rounded-circle mx-auto bg-secondary d-flex align-items-center justify-content-center mb-3">
                              <i class="las la-plus la-3x text-white"></i>
                              </span>
                              <div class="fs-18 text-primary">Wallet Withdraw Request</div>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header">
                           <h5 class="mb-0 h6">Wallet Withdraw Request History</h5>
                        </div>
                        <div class="card-body">
                           <table class="table aiz-table mb-0">
                              <thead>
                                 <tr>
                                    <th>#</th>
                                    <th>Amount</th>
                                    <th data-breakpoints="lg">Status</th>
                                    <th data-breakpoints="lg" width="50%">Details</th>
                                    <th data-breakpoints="lg">Date</th>
                                 </tr>
                              </thead>
                              <tbody>
                              </tbody>
                           </table>
                           <div class="aiz-pagination">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
        <?php $this->load->view("footer"); ?>