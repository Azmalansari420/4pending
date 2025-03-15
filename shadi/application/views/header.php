<?php
$user_details = user_logedin_detail();
if(!empty($user_details))
{
   $user_details = $user_details[0];
}
$sitesetting = $this->crud->fetchdatabyid('1','site_setting');

$uri = $this->uri->segment(1);
// print_r($uri);


?>

<!DOCTYPE html>
<html lang="en">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta name="csrf-token" content="">
      <meta name="app-url" content="">
      <meta name="file-base-url" content="">
      <!-- Title -->
      <title><?php echo website_name; ?></title>
      <!-- Required Meta Tags Always Come First -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="<?php echo website_name; ?>" />
      <meta name="keywords" content="<?php echo website_name; ?>">
      <!-- Schema.org markup for Google+ -->
      <meta itemprop="name" content="<?php echo website_name; ?>">
      <meta itemprop="description" content="<?php echo website_name; ?>">
      <meta itemprop="image" content="">
      <!-- Twitter Card data -->
      <meta name="twitter:card" content="<?php echo website_name; ?>">
      <meta name="twitter:site" content="<?php echo website_name; ?>">
      <meta name="twitter:title" content="<?php echo website_name; ?>">
      <meta name="twitter:description" content="<?php echo website_name; ?>">
      <meta name="twitter:creator" content="<?php echo website_name; ?>">
      <meta name="twitter:image" content="">
      <!-- Open Graph data -->
      <meta property="og:title" content="<?php echo website_name; ?>" />
      <meta property="og:type" content="<?php echo website_name; ?>" />
      <meta property="og:url" content="<?php echo website_name; ?>" />
      <meta property="og:image" content="<?php echo website_name; ?>" />
      <meta property="og:description" content="<?php echo website_name; ?>" />
      <meta property="og:site_name" content="<?php echo website_name; ?>" />
      <meta property="fb:app_id" content="<?php echo website_name; ?>">
      <!-- Favicon -->
      <link rel="icon" href="<?php echo base_url(); ?>public/uploads/all/HKb4dap327ArsZtb12KXUNeFVCfbA7mZBqQIGrCw.png">
      <!-- CSS -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&amp;display=swap">
      <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/css/vendors.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/css/aiz-core.css">
      <script>
         var AIZ = AIZ || {};
      </script>
      <style>
        
        
      </style>
   </head>
   <body class="text-left">
      <div class="aiz-main-wrapper d-flex flex-column position-relative  bg-white">
         <div class=" position-fixed  w-100 top-0 z-1020">
            <div class="top-navbar bg-white border-bottom z-1035 py-2 d-none d-lg-block">
               <div class="container">
                  <div class="row align-items-center">
                     <div class="col-lg-5 col">
                        <ul class="list-inline d-flex justify-content-between justify-content-lg-start mb-0">
                           <li class="list-inline-item">
                              <a href="<?php echo base_url(); ?>" class="text-reset opacity-60">
                              <span>Welcome to <?php echo website_name; ?></span>
                              </a>
                           </li>
                        </ul>
                     </div>
                     <div class="col-lg-7 col">
                        <ul class="list-inline mb-0 d-flex align-items-center justify-content-end ">
                           <li class="list-inline-item mr-3 pr-3 border-right text-reset opacity-60">
                              <span> Help Line</span>
                              <span><?php echo $sitesetting[0]->mobile; ?></span>
                           </li>

                        <?php
                           if(!empty($this->session->userdata('userdashboard')))
                        { ?>
                           
                           <li class="list-inline-item dropdown">
                              <a href="javascript:void(0)" class="dropdown-toggle text-reset no-arrow p-5px"
                                 data-toggle="dropdown" data-display="static">
                              <i class="las la-bell fs-16 opacity-60"></i>
                              <span class="badge badge-dot badge-sm badge-status no-border badge-primary"></span>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg py-0">
                                 <div class="p-3 bg-light border-bottom">
                                    <h6 class="mb-0">Notifications</h6>
                                 </div>
                                 <ul class="list-group list-group-raw c-scrollbar-light"
                                    style="overflow-y:auto;max-height:300px;">
                                    <li class="list-group-item d-flex justify-content-between align-items-start hov-bg-soft-primary">
                                       <a href="#" class="media text-inherit">
                                          <span class="avatar avatar-sm mr-3">
                                          <img
                                             src="https://demo.activeitzone.com/matrimonial/public/uploads/all/frIh1shOagKEHjg33H1CzyljjmGeg18jIjikmqxZ.png"
                                             onerror="this.onerror=null;this.src='https://demo.activeitzone.com/matrimonial/public/assets/img/female-avatar-place.png';"
                                             >
                                          </span>
                                          <div class="media-body">
                                             <p class="mb-1">Olivia Emma</p>
                                             <small class="text-muted">
                                             Olivia Emma  has Expressed Interest On You.
                                             </small>
                                          </div>
                                       </a>
                                       <button class="btn p-0">
                                       <span class="badge badge-md  badge-dot badge-circle badge-primary"></span>
                                       </button>
                                    </li>                                    
                                 </ul>
                                 <div class="border-top">
                                    <a href="<?php echo base_url('user-notifications'); ?>"
                                       class="btn text-reset btn-block">View All Notifications</a>
                                 </div>
                              </div>
                           </li>
                           <li class="list-inline-item dropdown">
                              <a href="javascript:void(0)" class="dropdown-toggle text-reset no-arrow p-5px"
                                 data-toggle="dropdown" data-display="static">
                              <i class="las la-envelope fs-16 opacity-60"></i>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg py-0">
                                 <div class="p-3 bg-light border-bottom">
                                    <h6 class="mb-0">Messages</h6>
                                 </div>
                                 <div class="c-scrollbar-light" style="overflow-y:auto;max-height:300px;">
                                    <div class="text-center py-4">
                                       <i class="las la-frown la-4x mb-2 opacity-40"></i>
                                       <h4 class="h6">No New Messages</h4>
                                    </div>
                                 </div>
                                 <div class="border-top">
                                    <a href="https://demo.activeitzone.com/matrimonial/chat"
                                       class="btn text-reset btn-block">View All Messages</a>
                                 </div>
                              </div>
                           </li>
                           <li class="list-inline-item mx-4">
                              <a href="<?php echo base_url('user-dashboard'); ?>" class="d-flex align-items-center text-reset">
                              <img src="<?php echo base_url(); ?>media/uploads/registration/<?php echo $user_details->image; ?>"
                                 class="size-30px rounded-circle img-fit mr-2">
                              <span class="opacity-60 mr-1">
                              Hi,
                              </span>
                              <span class="text-primary-grad fw-700">
                              <?php echo $user_details->first_name; ?>
                              </span>
                              </a>
                           </li>
                           <li class="list-inline-item">
                              <a href="<?php echo base_url('user/userlogout'); ?>"
                                 class="btn btn-sm bg-primary-grad text-white fw-600 py-1 border">Logout</a>
                           </li>
                        <?php } ?>

                        <?php
                           if(empty($this->session->userdata('userdashboard')))
                              { ?>

                           <li class="list-inline-item ml-4">
                              <a class="text-reset opacity-60" href="<?php echo base_url(); ?>login">Log In</a>
                           </li>
                           <li class="list-inline-item ml-3">
                              <a class="btn btn-sm bg-primary-grad text-white fw-600 py-1 border"
                                 href="<?php echo base_url(); ?>register">Registration</a>
                           </li>
                        <?php } ?>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <header class="aiz-header shadow-md bg-white border-gray-300">
               <div class="aiz-navbar position-relative">
                  <div class="container">
                     <div class="d-lg-flex justify-content-between text-center text-lg-left">
                        <div class="logo">
                           <a href="<?php echo base_url(); ?>" class="d-inline-block py-15px">
                           <img src="<?php echo base_url(); ?>media/uploads/site_setting/<?php echo $sitesetting[0]->logo; ?>" alt="testing" class="mw-100 h-30px h-md-40px" height="40">
                           </a>
                        </div>
                        <ul
                           class="mb-0 pl-0 ml-lg-auto d-lg-flex align-items-stretch justify-content-center justify-content-lg-start mobile-hor-swipe">
                           <li class="d-inline-block d-lg-flex pb-1 <?php if($uri==base_url()) echo 'bg-primary-grad'; ?>">
                              <a class="nav-link text-uppercase fw-700 fs-15 d-flex align-items-center bg-white py-2"
                                 href="<?php echo base_url(); ?>">
                              <span class="text-primary-grad mb-n1">Home</span>
                              </a>
                           </li>
                           <li
                              class="d-inline-block d-lg-flex pb-1 <?php if($uri=='member-list') echo 'bg-primary-grad'; ?>">
                              <a class="nav-link text-uppercase fw-700 fs-15 d-flex align-items-center bg-white py-2"
                                 href="<?php echo base_url(); ?>member-list">
                              <span class="text-primary-grad mb-n1">Search Members</span>
                              </a>
                           </li>
                           <li class="d-inline-block d-lg-flex pb-1 <?php if($uri=='packages') echo 'bg-primary-grad'; ?>">
                              <a class="nav-link text-uppercase fw-700 fs-15 d-flex align-items-center bg-white py-2"
                                 href="<?php echo base_url(); ?>packages">
                              <span class="text-primary-grad mb-n1">Premium Plans</span>
                              </a>
                           </li>
                           <li
                              class="d-inline-block d-lg-flex pb-1 <?php if($uri=='happy-stories') echo 'bg-primary-grad'; ?>">
                              <a class="nav-link text-uppercase fw-700 fs-15 d-flex align-items-center bg-white py-2"
                                 href="<?php echo base_url(); ?>happy-stories">
                              <span class="text-primary-grad mb-n1">Happy Stories</span>
                              </a>
                           </li>
                           <li
                              class="d-inline-block d-lg-flex pb-1 <?php if($uri=='contact') echo 'bg-primary-grad'; ?>">
                              <a class="nav-link text-uppercase fw-700 fs-15 d-flex align-items-center bg-white py-2"
                                 href="<?php echo base_url(); ?>contact">
                              <span class="text-primary-grad mb-n1">Contact Us</span>
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
                <?php
               if(!empty($this->session->userdata('userdashboard')))
                  { ?>
               <div class="border-top d-none d-lg-block">
                  <div class="container">
                     <ul class="list-inline d-flex align-items-center mb-0">
                        <li class="list-inline-item">
                           <a href="<?php echo base_url(); ?>dashboard"
                              class="text-reset d-inline-block px-4 py-3 fw-600 ">
                           <i class="las la-tachometer-alt mr-1"></i>
                           <span>Dashboard</span>
                           </a>
                        </li>
                        <li class="list-inline-item">
                           <a href="<?php echo base_url(); ?>user-profile-settings"
                              class="text-reset d-inline-block px-4 py-3 fw-600 ">
                           <i class="las la-user mr-1"></i>
                           <span>My Profile</span>
                           </a>
                        </li>
                        <li class="list-inline-item">
                           <a href="<?php echo base_url(); ?>user-interests"
                              class="text-reset d-inline-block px-4 py-3 fw-600 ">
                           <i class="la la-heart-o mr-1"></i>
                           <span>My Interest</span>
                           </a>
                        </li>
                        <li class="list-inline-item">
                           <a href="<?php echo base_url(); ?>user-shortlists"
                              class="text-reset d-inline-block px-4 py-3 fw-600 ">
                           <i class="las la-list mr-1"></i>
                           <span>Shortlist</span>
                           </a>
                        </li>
                        <li class="list-inline-item">
                           <a href="<?php echo base_url(); ?>user-chat"
                              class="text-reset d-inline-block px-4 py-3 fw-600 ">
                           <i class="las la-envelope mr-1"></i>
                           <span>Messaging</span>
                           </a>
                        </li>
                        <li class="list-inline-item">
                           <a href="<?php echo base_url(); ?>user-ignored-list"
                              class="text-reset d-inline-block px-4 py-3 fw-600 ">
                           <i class="las la-ban mr-1"></i>
                           <span>Ignored User List</span>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            <?php } ?>
            </header>
         </div>