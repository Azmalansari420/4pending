<div class="carousel-box">
                     <div class="rounded border position-relative overflow-hidden">
                        <a class="d-block text-reset c-pointer" >
                           <img src="<?php echo base_url(); ?>media/uploads/registration/<?php echo $data->image; ?>"
                              onerror="this.onerror=null;this.src='<?php echo base_url(); ?>public/assets/img/avatar-place.png';"
                              class="img-fit mw-100 h-350px"
                              >
                           <div class="absolute-bottom-left w-100 p-3 z-1">
                              <div class="absolute-full bg-white opacity-90 z--1"></div>
                              <div class="text-center">
                                 <div class="text-primary fw-500 mb-1"><?php echo $data->first_name; ?></div>
                                 <div class="fs-10">
                                    <span class="opacity-60">Member ID: </span>
                                    <span class="ml-2 text-primary"><?php echo $data->memeber_id; ?></span>
                                 </div>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>