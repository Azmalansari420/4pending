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
                           <h5 class="mb-0 h6">Package History</h5>
                        </div>
                        <div class="card-body">
                           <table class="table aiz-table mb-0">
                              <thead>
                                 <tr>
                                    <th data-breakpoints="md">#</th>
                                    <th>Code</th>
                                    <th>Package</th>
                                    <th data-breakpoints="md">Payment Method</th>
                                    <th data-breakpoints="md">Amount</th>
                                    <th data-breakpoints="md">Payment Status</th>
                                    <th data-breakpoints="md">Purchase Date</th>
                                    <th class="text-right">invoice</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td>1</td>
                                    <td>210410-113908</td>
                                    <td>Professional Package</td>
                                    <td>
                                       Stripe
                                    </td>
                                    <td>300$</td>
                                    <td class="text-center">
                                       <span class="badge badge-inline badge-success">Paid</span>
                                    </td>
                                    <td>2021-04-10 01:39:08</td>
                                    <td class="text-right">
                                       <a href="https://demo.activeitzone.com/matrimonial/package-payment-invoice/18" class="btn btn-soft-primary btn-icon btn-circle btn-sm" title="invoice">
                                       <i class="las la-file-invoice"></i>
                                       </a>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>2</td>
                                    <td>210406-092629</td>
                                    <td>Diamond Package</td>
                                    <td>
                                       Stripe
                                    </td>
                                    <td>100$</td>
                                    <td class="text-center">
                                       <span class="badge badge-inline badge-success">Paid</span>
                                    </td>
                                    <td>2021-04-05 23:26:29</td>
                                    <td class="text-right">
                                       <a href="https://demo.activeitzone.com/matrimonial/package-payment-invoice/2" class="btn btn-soft-primary btn-icon btn-circle btn-sm" title="invoice">
                                       <i class="las la-file-invoice"></i>
                                       </a>
                                    </td>
                                 </tr>
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