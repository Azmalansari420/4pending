<?php
$user_detail = user_logedin_detail();
?>

<div class="aiz-user-sidenav rounded overflow-hidden">
                        <div class="px-4 text-center mb-4">
                           <span class="avatar avatar-md mb-3">
                           <img src="<?php echo base_url(); ?>media/uploads/registration/<?php echo $user_detail[0]->image; ?>">
                           </span>
                           <h4 class="h5 fw-600"><?php echo $user_detail[0]->first_name; ?> <?php echo $user_detail[0]->last_name; ?></h4>
                        </div>
                        <!-- <div class="text-center mb-3 px-3">
                           <a href="" class="btn btn-block btn-soft-primary">Public Profile</a>
                        </div> -->
                        <div class="sidemnenu mb-3">
                           <ul class="aiz-side-nav-list" data-toggle="aiz-side-menu">
                              <li class="aiz-side-nav-item">
                                 <a href="<?php echo base_url('user-dashboard'); ?>" class="aiz-side-nav-link ">
                                 <i class="las la-home aiz-side-nav-icon"></i>
                                 <span class="aiz-side-nav-text">Dashboard</span>
                                 </a>
                              </li>
                              <li class="aiz-side-nav-item">
                                 <a href="<?php echo base_url('user-gallery'); ?>" class="aiz-side-nav-link">
                                 <i class="las la-image aiz-side-nav-icon"></i>
                                 <span class="aiz-side-nav-text">Gallery</span>
                                 </a>
                              </li>
                            <!--   <li class="aiz-side-nav-item">
                                 <a href="<?php echo base_url(); ?>matrimonial/happy-story/create" class="aiz-side-nav-link">
                                 <i class="las la-handshake aiz-side-nav-icon"></i>
                                 <span class="aiz-side-nav-text">Happy Story</span>
                                 </a>
                              </li> -->
                              <li class="aiz-side-nav-item">
                                 <a href="javascript:void(0);" class="aiz-side-nav-link">
                                 <i class="las la-shopping-basket aiz-side-nav-icon"></i>
                                 <span class="aiz-side-nav-text">Packages</span>
                                 <span class="aiz-side-nav-arrow"></span>
                                 </a>
                                 <ul class="aiz-side-nav-list level-2">
                                    <li class="aiz-side-nav-item">
                                       <a href="<?php echo base_url('packages'); ?>" class="aiz-side-nav-link">
                                       <span class="aiz-side-nav-text">Packages</span>
                                       </a>
                                    </li>
                                    <li class="aiz-side-nav-item">
                                       <a href="<?php echo base_url('user-package-purchase-history'); ?>" class="aiz-side-nav-link">
                                       <span class="aiz-side-nav-text">Package Purchase History</span>
                                       </a>
                                    </li>
                                 </ul>
                              </li>
                              <li class="aiz-side-nav-item">
                                 <a href="<?php echo base_url('user-wallet'); ?>" class="aiz-side-nav-link">
                                 <i class="las la-dollar-sign aiz-side-nav-icon"></i>
                                 <span class="aiz-side-nav-text">My Wallet</span>
                                 </a>
                              </li>
                              <li class="aiz-side-nav-item">
                                 <a href="javascript:void(0);" class="aiz-side-nav-link">
                                 <i class="las la-shopping-basket aiz-side-nav-icon"></i>
                                 <span class="aiz-side-nav-text">Referral System</span>
                                 <span class="badge badge-inline badge-danger">Addon</span>
                                 <span class="aiz-side-nav-arrow"></span>
                                 </a>
                                 <ul class="aiz-side-nav-list level-2">
                                    <li class="aiz-side-nav-item">
                                       <a href="<?php echo base_url(); ?>matrimonial/referred-users" class="aiz-side-nav-link">
                                       <span class="aiz-side-nav-text">Referred Users</span>
                                       </a>
                                    </li>
                                    <li class="aiz-side-nav-item">
                                       <a href="<?php echo base_url('user-referral-earnings'); ?>" class="aiz-side-nav-link">
                                       <span class="aiz-side-nav-text">Referral Earnings</span>
                                       </a>
                                    </li>
                                    <li class="aiz-side-nav-item">
                                       <a href="<?php echo base_url('user-wallet-withdraw-request-history'); ?>" class="aiz-side-nav-link">
                                       <span class="aiz-side-nav-text">Wallet Withdraw Requests</span>
                                       </a>
                                    </li>
                                 </ul>
                              </li>
                              <li class="aiz-side-nav-item">
                                 <a href="<?php echo base_url('user-chat'); ?>" class="aiz-side-nav-link">
                                 <i class="las la-envelope aiz-side-nav-icon"></i>
                                 <span class="aiz-side-nav-text">Message</span>
                                 </a>
                              </li>
                              <li class="aiz-side-nav-item">
                                 <a href="<?php echo base_url('user-support-ticket'); ?>" class="aiz-side-nav-link ">
                                 <i class="las la-life-ring aiz-side-nav-icon"></i>
                                 <span class="aiz-side-nav-text">Support Ticket</span>
                                 <span class="badge badge-inline badge-danger">Addon</span>
                                 </a>
                              </li>
                              <li class="aiz-side-nav-item">
                                 <a href="<?php echo base_url('user-interests'); ?>" class="aiz-side-nav-link">
                                 <i class="la la-heart-o aiz-side-nav-icon"></i>
                                 <span class="aiz-side-nav-text">My Interest</span>
                                 </a>
                              </li>
                              <li class="aiz-side-nav-item">
                                 <a href="<?php echo base_url('user-shortlists'); ?>" class="aiz-side-nav-link">
                                 <i class="las la-list aiz-side-nav-icon"></i>
                                 <span class="aiz-side-nav-text">Shortlist</span>
                                 </a>
                              </li>
                              <li class="aiz-side-nav-item">
                                 <a href="<?php echo base_url('user-ignored-list'); ?>" class="aiz-side-nav-link">
                                 <i class="las la-ban aiz-side-nav-icon"></i>
                                 <span class="aiz-side-nav-text">Ignored User List</span>
                                 </a>
                              </li>
                              <li class="aiz-side-nav-item">
                                 <a href="<?php echo base_url('user-change-password'); ?>" class="aiz-side-nav-link">
                                 <i class="las la-key aiz-side-nav-icon"></i>
                                 <span class="aiz-side-nav-text">Change Password</span>
                                 </a>
                              </li>
                              <li class="aiz-side-nav-item">
                                 <a href="<?php echo base_url('user-profile-settings'); ?>" class="aiz-side-nav-link">
                                 <i class="las la-user aiz-side-nav-icon"></i>
                                 <span class="aiz-side-nav-text">Manage Profile</span>
                                 </a>
                              </li>
                              <li class="aiz-side-nav-item">
                                 <a href="javascript:void(0);" class="aiz-side-nav-link" onclick="account_deactivation()">
                                 <i class="las la-lock aiz-side-nav-icon"></i>
                                 <span class="aiz-side-nav-text">Deactive Account</span>
                                 </a>
                              </li>
                           </ul>
                        </div>
                        <div>
                           <a class="btn btn-block btn-primary" href="<?php echo base_url('User/userlogout'); ?>">
                              <i class="las la-sign-out-alt"></i>
                              <span>Logout</span>
                           </a>
                        </div>
                     </div>