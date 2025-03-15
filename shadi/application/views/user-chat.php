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
                     <div class="aiz-chat">
                        <div class="row no-gutters">
                           <div class="col-lg-4">
                              <div class="chat-user-list-wrap z-1035">
                                 <div class="overlay dark c-pointer" data-toggle="class-toggle" data-target=".chat-user-list-wrap" data-same=".aiz-all-chat-toggler"></div>
                                 <div class="chat-user-list-header d-flex justify-content-between align-items-center bg-white border-bottom border-right h6 mb-0">
                                    <span class="p-2 m-1">Members</span>
                                    <button class="btn btn-icon d-lg-none" data-toggle="class-toggle" data-target=".chat-user-list-wrap"><i class="las la-times"></i></button>
                                 </div>
                                 <div class="chat-user-list border-right py-3 c-scrollbar-light">
                                    <a href="javascript:void(0)" class="chat-user-item p-3 d-block text-inherit" data-url="https://demo.activeitzone.com/matrimonial/single-chat/9" data-refresh="https://demo.activeitzone.com/matrimonial/chat/refresh/9" onclick="loadChats(this)">
                                       <div class="media">
                                          <span class="avatar avatar-sm mr-3 flex-shrink-0">
                                          <img src="https://demo.activeitzone.com/matrimonial/public/uploads/all/AKgrssE0aIV4yzwTzRQsBaNp93KS2PPp5wqMsld9.png">
                                          <span class="badge badge-dot badge-circle badge-secondary badge-status badge-md"></span>
                                          </span>
                                          <div class="media-body minw-0">
                                             <h6 class="mt-0 mb-1 fs-14 text-truncate">Donna J. Perryman</h6>
                                             <div class="fs-12 text-truncate opacity-60">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</div>
                                          </div>
                                          <div class="ml-2 text-right">
                                             <div class="opacity-60 fs-10 mb-1">2 years ago</div>
                                             <span class="badge badge-primary badge-circle flex-shrink-0 ml-4">0</span>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="javascript:void(0)" class="chat-user-item p-3 d-block text-inherit" data-url="https://demo.activeitzone.com/matrimonial/single-chat/11" data-refresh="https://demo.activeitzone.com/matrimonial/chat/refresh/11" onclick="loadChats(this)">
                                       <div class="media">
                                          <span class="avatar avatar-sm mr-3 flex-shrink-0">
                                          <img src="https://demo.activeitzone.com/matrimonial/public/uploads/all/0d0v5DC1Juc6RwmA6DtnWPx4QXz4mGc6ckr3Oh8L.png">
                                          <span class="badge badge-dot badge-circle badge-secondary badge-status badge-md"></span>
                                          </span>
                                          <div class="media-body minw-0">
                                             <h6 class="mt-0 mb-1 fs-14 text-truncate">Kimberley Lang</h6>
                                             <div class="fs-12 text-truncate opacity-60">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</div>
                                          </div>
                                          <div class="ml-2 text-right">
                                             <div class="opacity-60 fs-10 mb-1">1 year ago</div>
                                             <span class="badge badge-primary badge-circle flex-shrink-0 ml-4">0</span>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="javascript:void(0)" class="chat-user-item p-3 d-block text-inherit" data-url="https://demo.activeitzone.com/matrimonial/single-chat/12" data-refresh="https://demo.activeitzone.com/matrimonial/chat/refresh/12" onclick="loadChats(this)">
                                       <div class="media">
                                          <span class="avatar avatar-sm mr-3 flex-shrink-0">
                                          <img src="https://demo.activeitzone.com/matrimonial/public/uploads/all/uVl6pf6oqBpZiJuai4iwU4KCRAGe9plsh5wDrnkN.png">
                                          <span class="badge badge-dot badge-circle badge-success badge-status badge-md"></span>
                                          </span>
                                          <div class="media-body minw-0">
                                             <h6 class="mt-0 mb-1 fs-14 text-truncate">Matthew Ryan</h6>
                                             <div class="fs-12 text-truncate opacity-60">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,</div>
                                          </div>
                                          <div class="ml-2 text-right">
                                             <div class="opacity-60 fs-10 mb-1">1 year ago</div>
                                             <span class="badge badge-primary badge-circle flex-shrink-0 ml-4">0</span>
                                          </div>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-8" id="single_chat">
                              <div class="chat-box-wrap h-100">
                                 <div class="attached-top bg-white border-bottom chat-header d-flex justify-content-between align-items-center p-3 shadow-sm">
                                    <div class="media">
                                       <h6 class="mb-0">Chats</h6>
                                    </div>
                                    <button class="aiz-mobile-toggler d-lg-none aiz-all-chat-toggler mr-2" data-toggle="class-toggle" data-target=".chat-user-list-wrap">
                                    <span></span>
                                    </button>
                                 </div>
                                 <div class="px-3 py-5 text-center">
                                    <i class="las la-user la-6x text-primary mb-4"></i>
                                    <h5>Select a Member to view chats</h5>
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