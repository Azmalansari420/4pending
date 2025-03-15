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
                     <div class="aiz-titlebar mt-2 mb-4">
                        <div class="row align-items-center">
                           <div class="col-md-6">
                              <h1 class="h3">Referral Earnings</h1>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header">
                           <h5 class="mb-0 h6">Referral Earnings</h5>
                        </div>
                        <div class="card-body">
                           <table class="table aiz-table mb-0">
                              <thead>
                                 <tr>
                                    <th>#</th>
                                    <th>Referred User</th>
                                    <th>Amount</th>
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