<div class="row no-gutters border border-gray-300 rounded hov-shadow-md mb-4 has-transition position-relative">
                                 <div class="col-md-auto">
                                    <div class="text-center text-md-left pt-3 pt-md-0">
                                       <img  src="<?php echo base_url(); ?>media/uploads/registration/<?php echo $row->image; ?>" class="img-fit mw-100 size-150px size-md-250px rounded-circle md-rounded-0">
                                    </div>
                                 </div>
                                 <div class="col-md position-static d-flex align-items-center">
                                    <?php
                                    if(!empty($row->membership==1))
                                       { ?>
                                    <span class="absolute-top-right px-4 py-3">
                                       <span class="badge badge-inline badge-success">Preminum</span>
                                    </span>
                                 <?php } ?>
                                    <div class="px-md-4 p-3 flex-grow-1">
                                       <h2 class="h6 fw-600 fs-18 text-truncate mb-1"><?php echo $row->first_name; ?> <?php echo $row->last_name; ?></h2>
                                       <div class="mb-2 fs-12">
                                          <span class="opacity-60">Member ID: </span>
                                          <span class="ml-4 text-primary"><?php echo $row->memeber_id; ?></span>
                                       </div>
                                       <table class="w-100 opacity-70 mb-2 fs-12">
                                          <tr>
                                             <td class="py-1 w-25">
                                                <span>age</span>
                                             </td>
                                             <td class="py-1 w-25 fw-400"><?php echo ageCalculator($row->dob); ?></td>
                                             <td class="py-1 w-25"><span>Height</span></td>
                                             <td class="py-1 w-25 fw-400"><?php echo $row->height; ?></td>
                                          </tr>
                                          <tr>
                                             <td class="py-1"><span>Religion</span></td>
                                             <td class="py-1 fw-400"><?php echo $row->member_religion_id; ?></td>
                                             <td class="py-1"><span>Caste</span></td>
                                             <td class="py-1 fw-400"><?php echo $row->member_caste_id; ?></td>
                                          </tr>
                                          <tr>
                                             <td class="py-1"><span>First Language</span></td>
                                             <td class="py-1 fw-400"><?php echo $row->mothere_tongue; ?></td>
                                             <td class="py-1"><span>Marital Status</span></td>
                                             <td class="py-1 fw-400"><?php echo $row->marital_status; ?></td>
                                          </tr>
                                          <tr>
                                             <td class="py-1"><span>location</span></td>
                                             <td class="py-1 fw-400"><?php echo $row->permanent_country_id; ?></td>
                                          </tr>
                                       </table>
                                       <div class="row gutters-5 text-center">
                                          <div class="col">
                                             <a href="<?php echo base_url('member-profile/'.$row->id); ?>" class="text-reset c-pointer">
                                                <i class="las la-user fs-20 text-primary"></i>
                                                <span class="d-block fs-10 opacity-60">Full Profile</span>
                                             </a>
                                          </div>
                                          <div class="col">
                                             <a id="interest_a_id_42" href="" class="text-reset c-pointer">
                                                <i class="la la-heart-o fs-20 text-primary"></i>
                                                <span id="interest_id_42"class="d-block fs-10 opacity-60 text-primary">Response to Interest</span>
                                             </a>
                                          </div>
                                          <div class="col">
                                             <a id="shortlist_a_id_42" class="text-reset c-pointer">
                                                <i class="las la-list fs-20 text-primary"></i>
                                                <span id="shortlist_id_42" class="d-block fs-10 opacity-60 text-dark">Shortlist</span>
                                             </a>
                                          </div>
                                          <div class="col">
                                             <a class="text-reset c-pointer">
                                                <span class="text-dark">
                                                   <i class="las la-ban fs-20 text-primary"></i>
                                                   <span class="d-block fs-10 opacity-60">Ignore</span>
                                                </span>
                                             </a>
                                          </div>
                                          <div class="col">
                                             <a id="report_a_id_42" class="text-reset c-pointer">
                                                <span id="report_id_42" class="text-dark">
                                                   <i class="las la-info-circle fs-20 text-primary"></i>
                                                   <span class="d-block fs-10 opacity-60">Report</span>
                                                </span>
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>