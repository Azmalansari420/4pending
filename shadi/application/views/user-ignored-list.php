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
                           <h5 class="mb-0 h6">Ignored Members</h5>
                        </div>
                        <div class="card-body">
                           <table class="table aiz-table mb-0">
                              <thead>
                                 <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th data-breakpoints="lg">age</th>
                                    <th data-breakpoints="lg">Religion</th>
                                    <th data-breakpoints="lg">location</th>
                                    <th data-breakpoints="lg">Mother  Tongue</th>
                                    <th class="text-right" data-breakpoints="lg">Options</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr id="ignored_member_30">
                                    <td>1</td>
                                    <td>
                                       <img class="img-md" src="https://demo.activeitzone.com/matrimonial/public/uploads/all/zo8WHvxlUyiPrxwnrc6ztQE5u8MnJo2ej2UUl1JU.png" height="45px"  alt="photo">
                                    </td>
                                    <td>
                                       Idona Mccoy
                                    </td>
                                    <td>30</td>
                                    <td>
                                       Hinduism
                                    </td>
                                    <td>
                                       China
                                    </td>
                                    <td>
                                    </td>
                                    <td class="text-right">
                                       <a onclick="remove_from_ignored_list(30)" class="btn btn-soft-primary btn-icon btn-circle btn-sm" title="Remove From Ignore List">
                                       <i class="las la-trash"></i>
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