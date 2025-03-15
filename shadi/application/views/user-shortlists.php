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
                           <h5 class="mb-0 h6">My Shortlists</h5>
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
                                 <tr id="shortlisted_member_39">
                                    <td>1</td>
                                    <td>
                                       <a
                                          href="https://demo.activeitzone.com/matrimonial/member-profile/39"
                                          class="text-reset c-pointer"
                                          >
                                       <img class="img-md" src="https://demo.activeitzone.com/matrimonial/public/uploads/all/EQNFezAk0ZnHgT1f6P2ToxJ5DxZctllDfSy0iuM9.png" height="45px"  alt="photo">
                                       </a>
                                    </td>
                                    <td>
                                       <a
                                          href="https://demo.activeitzone.com/matrimonial/member-profile/39"
                                          class="text-reset c-pointer"
                                          >
                                       Ramona D. Mears
                                       </a>
                                    </td>
                                    <td>30</td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                    <td class="text-right">
                                       <a href="avascript:void(0);" class="btn btn-soft-success btn-icon btn-circle btn-sm" title="Interest Expressed">
                                       <i class="las la-heart"></i>
                                       </a>
                                       <a onclick="remove_shortlist(39)" class="btn btn-soft-danger btn-icon btn-circle btn-sm" title="Remove">
                                       <i class="las la-trash-alt"></i>
                                       </a>
                                    </td>
                                 </tr>
                                 <tr id="shortlisted_member_41">
                                    <td>2</td>
                                    <td>
                                       <a
                                          href="https://demo.activeitzone.com/matrimonial/member-profile/41"
                                          class="text-reset c-pointer"
                                          >
                                       <img class="img-md" src="https://demo.activeitzone.com/matrimonial/public/uploads/all/fb6a0r1ea9xT1CsDBotRTd6DqvAWS3dODkGr1cUN.png" height="45px"  alt="photo">
                                       </a>
                                    </td>
                                    <td>
                                       <a
                                          href="https://demo.activeitzone.com/matrimonial/member-profile/41"
                                          class="text-reset c-pointer"
                                          >
                                       Sylvia J. Love
                                       </a>
                                    </td>
                                    <td>19</td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                    <td class="text-right">
                                       <a href="avascript:void(0);" class="btn btn-soft-success btn-icon btn-circle btn-sm" title="Interest Expressed">
                                       <i class="las la-heart"></i>
                                       </a>
                                       <a onclick="remove_shortlist(41)" class="btn btn-soft-danger btn-icon btn-circle btn-sm" title="Remove">
                                       <i class="las la-trash-alt"></i>
                                       </a>
                                    </td>
                                 </tr>
                                 <tr id="shortlisted_member_31">
                                    <td>3</td>
                                    <td>
                                       <a
                                          href="https://demo.activeitzone.com/matrimonial/member-profile/31"
                                          class="text-reset c-pointer"
                                          >
                                       <img class="img-md" src="https://demo.activeitzone.com/matrimonial/public/uploads/all/UZR9qdCaIqm7RLwZOsQo8YPd2PUBlt3aWKH9pU08.png" height="45px"  alt="photo">
                                       </a>
                                    </td>
                                    <td>
                                       <a
                                          href="https://demo.activeitzone.com/matrimonial/member-profile/31"
                                          class="text-reset c-pointer"
                                          >
                                       Tate Kennedy
                                       </a>
                                    </td>
                                    <td>32</td>
                                    <td>
                                       Islam
                                    </td>
                                    <td>
                                       Korea North
                                    </td>
                                    <td>
                                       English
                                    </td>
                                    <td class="text-right">
                                       <a href="avascript:void(0);" class="btn btn-soft-success btn-icon btn-circle btn-sm" title="Interest Expressed">
                                       <i class="las la-heart"></i>
                                       </a>
                                       <a onclick="remove_shortlist(31)" class="btn btn-soft-danger btn-icon btn-circle btn-sm" title="Remove">
                                       <i class="las la-trash-alt"></i>
                                       </a>
                                    </td>
                                 </tr>
                                 <tr id="shortlisted_member_40">
                                    <td>4</td>
                                    <td>
                                       <a
                                          href="https://demo.activeitzone.com/matrimonial/member-profile/40"
                                          class="text-reset c-pointer"
                                          >
                                       <img class="img-md" src="https://demo.activeitzone.com/matrimonial/public/uploads/all/4KfjU2TSW4HAkmtZN9OGGjfCjAIjoMjn5PB0s6bU.png" height="45px"  alt="photo">
                                       </a>
                                    </td>
                                    <td>
                                       <a
                                          href="https://demo.activeitzone.com/matrimonial/member-profile/40"
                                          class="text-reset c-pointer"
                                          >
                                       Nicole Hruby
                                       </a>
                                    </td>
                                    <td>19</td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                    <td class="text-right">
                                       <a href="avascript:void(0);" onclick="express_interest(40)" id="interest_a_id_40" class="btn btn-soft-primary btn-icon btn-circle btn-sm" title="Express Interest">
                                       <i class="las la-heart"></i>
                                       </a>
                                       <a onclick="remove_shortlist(40)" class="btn btn-soft-danger btn-icon btn-circle btn-sm" title="Remove">
                                       <i class="las la-trash-alt"></i>
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