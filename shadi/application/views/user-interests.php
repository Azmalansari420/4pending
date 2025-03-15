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
                           <h5 class="mb-0 h6">My Interests</h5>
                           <a href="https://demo.activeitzone.com/matrimonial/interest/requests"
                              class="mb-0 h6 btn btn-primary">Interest Requests</a>
                        </div>
                        <div class="card-body">
                           <table class="table aiz-table mb-0">
                              <thead>
                                 <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>age</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Action</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr id="interested_member_39">
                                    <td>1</td>
                                    <td>
                                       <a                                     href="https://demo.activeitzone.com/matrimonial/member-profile/39"                                     class="text-reset c-pointer">
                                       <img class="img-md" src="https://demo.activeitzone.com/matrimonial/public/uploads/all/EQNFezAk0ZnHgT1f6P2ToxJ5DxZctllDfSy0iuM9.png"
                                          height="45px" alt="photo">
                                       </a>
                                    </td>
                                    <td>
                                       <a                                     href="https://demo.activeitzone.com/matrimonial/member-profile/39"                                     class="text-reset c-pointer">
                                       Ramona D. Mears
                                       </a>
                                    </td>
                                    <td>30</td>
                                    <td class="text-center">
                                       <span class="badge badge-inline badge-info">Pending</span>
                                    </td>
                                    <td class="text-center">
                                       <a href="javascript:void(0);" onclick="reject_interest(98)"
                                          class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete"
                                          title="Delete">
                                       <i class="las la-trash"></i>
                                       </a>
                                    </td>
                                 </tr>
                                 <tr id="interested_member_41">
                                    <td>2</td>
                                    <td>
                                       <a                                     href="https://demo.activeitzone.com/matrimonial/member-profile/41"                                     class="text-reset c-pointer">
                                       <img class="img-md" src="https://demo.activeitzone.com/matrimonial/public/uploads/all/fb6a0r1ea9xT1CsDBotRTd6DqvAWS3dODkGr1cUN.png"
                                          height="45px" alt="photo">
                                       </a>
                                    </td>
                                    <td>
                                       <a                                     href="https://demo.activeitzone.com/matrimonial/member-profile/41"                                     class="text-reset c-pointer">
                                       Sylvia J. Love
                                       </a>
                                    </td>
                                    <td>19</td>
                                    <td class="text-center">
                                       <span class="badge badge-inline badge-info">Pending</span>
                                    </td>
                                    <td class="text-center">
                                       <a href="javascript:void(0);" onclick="reject_interest(26)"
                                          class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete"
                                          title="Delete">
                                       <i class="las la-trash"></i>
                                       </a>
                                    </td>
                                 </tr>
                                 <tr id="interested_member_41">
                                    <td>3</td>
                                    <td>
                                       <a                                     href="https://demo.activeitzone.com/matrimonial/member-profile/41"                                     class="text-reset c-pointer">
                                       <img class="img-md" src="https://demo.activeitzone.com/matrimonial/public/uploads/all/fb6a0r1ea9xT1CsDBotRTd6DqvAWS3dODkGr1cUN.png"
                                          height="45px" alt="photo">
                                       </a>
                                    </td>
                                    <td>
                                       <a                                     href="https://demo.activeitzone.com/matrimonial/member-profile/41"                                     class="text-reset c-pointer">
                                       Sylvia J. Love
                                       </a>
                                    </td>
                                    <td>19</td>
                                    <td class="text-center">
                                       <span class="badge badge-inline badge-info">Pending</span>
                                    </td>
                                    <td class="text-center">
                                       <a href="javascript:void(0);" onclick="reject_interest(25)"
                                          class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete"
                                          title="Delete">
                                       <i class="las la-trash"></i>
                                       </a>
                                    </td>
                                 </tr>
                                 <tr id="interested_member_31">
                                    <td>4</td>
                                    <td>
                                       <a                                     href="https://demo.activeitzone.com/matrimonial/member-profile/31"                                     class="text-reset c-pointer">
                                       <img class="img-md" src="https://demo.activeitzone.com/matrimonial/public/uploads/all/UZR9qdCaIqm7RLwZOsQo8YPd2PUBlt3aWKH9pU08.png"
                                          height="45px" alt="photo">
                                       </a>
                                    </td>
                                    <td>
                                       <a                                     href="https://demo.activeitzone.com/matrimonial/member-profile/31"                                     class="text-reset c-pointer">
                                       Tate Kennedy
                                       </a>
                                    </td>
                                    <td>32</td>
                                    <td class="text-center">
                                       <span class="badge badge-inline badge-info">Pending</span>
                                    </td>
                                    <td class="text-center">
                                       <a href="javascript:void(0);" onclick="reject_interest(24)"
                                          class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete"
                                          title="Delete">
                                       <i class="las la-trash"></i>
                                       </a>
                                    </td>
                                 </tr>
                                 <tr id="interested_member_27">
                                    <td>5</td>
                                    <td>
                                       <a                                     href="https://demo.activeitzone.com/matrimonial/member-profile/27"                                     class="text-reset c-pointer">
                                       <img class="img-md" src="https://demo.activeitzone.com/matrimonial/public/uploads/all/uVl6pf6oqBpZiJuai4iwU4KCRAGe9plsh5wDrnkN.png"
                                          height="45px" alt="photo">
                                       </a>
                                    </td>
                                    <td>
                                       <a                                     href="https://demo.activeitzone.com/matrimonial/member-profile/27"                                     class="text-reset c-pointer">
                                       Matthew Ryan
                                       </a>
                                    </td>
                                    <td>32</td>
                                    <td class="text-center">
                                       <span class="badge badge-inline badge-success">Approved</span>
                                    </td>
                                    <td class="text-center">
                                       <a href="javascript:void(0);" onclick="reject_interest(12)"
                                          class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete"
                                          title="Delete">
                                       <i class="las la-trash"></i>
                                       </a>
                                    </td>
                                 </tr>
                                 <tr id="interested_member_27">
                                    <td>6</td>
                                    <td>
                                       <a                                     href="https://demo.activeitzone.com/matrimonial/member-profile/27"                                     class="text-reset c-pointer">
                                       <img class="img-md" src="https://demo.activeitzone.com/matrimonial/public/uploads/all/uVl6pf6oqBpZiJuai4iwU4KCRAGe9plsh5wDrnkN.png"
                                          height="45px" alt="photo">
                                       </a>
                                    </td>
                                    <td>
                                       <a                                     href="https://demo.activeitzone.com/matrimonial/member-profile/27"                                     class="text-reset c-pointer">
                                       Matthew Ryan
                                       </a>
                                    </td>
                                    <td>32</td>
                                    <td class="text-center">
                                       <span class="badge badge-inline badge-info">Pending</span>
                                    </td>
                                    <td class="text-center">
                                       <a href="javascript:void(0);" onclick="reject_interest(11)"
                                          class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete"
                                          title="Delete">
                                       <i class="las la-trash"></i>
                                       </a>
                                    </td>
                                 </tr>
                                 <tr id="interested_member_27">
                                    <td>7</td>
                                    <td>
                                       <a                                     href="https://demo.activeitzone.com/matrimonial/member-profile/27"                                     class="text-reset c-pointer">
                                       <img class="img-md" src="https://demo.activeitzone.com/matrimonial/public/uploads/all/uVl6pf6oqBpZiJuai4iwU4KCRAGe9plsh5wDrnkN.png"
                                          height="45px" alt="photo">
                                       </a>
                                    </td>
                                    <td>
                                       <a                                     href="https://demo.activeitzone.com/matrimonial/member-profile/27"                                     class="text-reset c-pointer">
                                       Matthew Ryan
                                       </a>
                                    </td>
                                    <td>32</td>
                                    <td class="text-center">
                                       <span class="badge badge-inline badge-info">Pending</span>
                                    </td>
                                    <td class="text-center">
                                       <a href="javascript:void(0);" onclick="reject_interest(10)"
                                          class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete"
                                          title="Delete">
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