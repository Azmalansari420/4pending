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
                     <div class="row gutters-5 row-cols-xl-3 row-cols-2">
                        <div class="col mx-auto mb-3" >
                           <div class="bg-light rounded overflow-hidden text-center p-3">
                              <i class="la la-heart-o la-2x mb-3 text-primary-grad"></i>
                              <div class="h4 fw-700 text-primary-grad">1088</div>
                              <div class="opacity-50">Remaining <br> Interest</div>
                           </div>
                        </div>
                        <div class="col mx-auto mb-3" >
                           <div class="bg-light rounded overflow-hidden text-center p-3">
                              <i class="las la-phone la-2x mb-3 text-primary-grad"></i>
                              <div class="h4 fw-700 text-primary-grad">1020</div>
                              <div class="opacity-50 ">Remaining <br> Contact View</div>
                           </div>
                        </div>
                        <div class="col mx-auto mb-3" >
                           <div class="bg-light rounded overflow-hidden text-center p-3">
                              <i class="las la-image la-2x mb-3 text-primary-grad"></i>
                              <div class="h4 fw-700 text-center text-primary-grad">1071</div>
                              <div class="opacity-50 text-center">Remaining <br> Gallery Image Upload</div>
                           </div>
                        </div>
                     </div>
                     <div class="row gutters-5">
                        <div class="col-md-6">
                           <div class="card">
                              <div class="card-header">
                                 <h2 class="fs-16 mb-0">Current package</h2>
                              </div>
                              <div class="card-body">
                                 <div class="text-center mb-4 mt-3">
                                    <img class="mw-100 mx-auto mb-4" src="https://demo.activeitzone.com/matrimonial/public/uploads/all/ccZXfUBJdeI3nVlTaDjj5XktantwFNh70bYVXTJR.png" height="130">
                                    <h5 class="mb-3 h5 fw-600">Professional Package</h5>
                                 </div>
                                 <ul class="list-group list-group-raw fs-15 mb-4 pb-4 border-bottom">
                                    <li class="list-group-item py-2">
                                       <i class="las la-check text-success mr-2"></i>
                                       1000 Express Interests
                                    </li>
                                    <li class="list-group-item py-2">
                                       <i class="las la-check text-success mr-2"></i>
                                       1000 Gallery Photo Upload
                                    </li>
                                    <li class="list-group-item py-2">
                                       <i class="las la-check text-success mr-2"></i>
                                       1000 Contact Info View
                                    </li>
                                    <li class="list-group-item py-2 text-line-through">
                                       <i class="las la-check text-success mr-2"></i>
                                       Show Auto Profile Match
                                    </li>
                                 </ul>
                                 <h4 class="fs-18 mb-3">
                                    Package expiry date:
                                    2025-08-14
                                 </h4>
                                 <a href="#" class="btn btn-success d-inline-block">Upgrade Package</a>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="card">
                              <div class="card-header">
                                 <h2 class="fs-16 mb-0">Matched profile</h2>
                              </div>
                              <div class="card-body">
                                 <div>
                                    <a href="" class="text-reset border rounded row no-gutters align-items-center mb-3">
                                       <div class="col-auto w-100px">
                                          <img
                                             src="https://demo.activeitzone.com/matrimonial/public/uploads/all/PHOPJbRhA2sirsP6lcQu3hgQdIQVCSzSIH03p83i.png"
                                             onerror="this.onerror=null;this.src='https://demo.activeitzone.com/matrimonial/public/assets/img/female-avatar-place.png';"
                                             class="img-fit w-100 size-100px"
                                             >
                                       </div>
                                       <div class="col">
                                          <div class="p-3">
                                             <h5 class="fs-16 text-body text-truncate">Jane R Lamy</h5>
                                             <div class="fs-12 text-truncate-3">
                                                <span class="mr-1 d-inline-block">
                                                30 yrs,
                                                </span>
                                                <span class="mr-1 d-inline-block">
                                                5 Feet,
                                                </span>
                                                <span class="mr-1 d-inline-block">
                                                Never Married,
                                                </span>
                                                <span class="mr-1 d-inline-block">
                                                Judaismm, 
                                                </span>
                                                <span class="mr-1 d-inline-block">
                                                Israelites (Yisraelim), 
                                                </span>
                                                <span class="mr-1 d-inline-block">
                                                   <td class="py-1"></td>
                                                </span>
                                             </div>
                                          </div>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
    
    <?php $this->load->view("footer"); ?>