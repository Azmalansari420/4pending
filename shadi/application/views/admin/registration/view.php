<!DOCTYPE html>
<html lang="en">
   <head>
      <title>View <?php echo $page_title; ?></title>
      <?php $this->load->view('admin/include/allcss') ?>

   </head>
   <body>
       <?php echo loder; ?> 
      <div id="app" class="app app-header-fixed app-sidebar-fixed ">


          <?php $this->load->view('admin/include/header') ?>
          <?php $this->load->view('admin/include/sidebar') ?>


         
         <div id="content" class="app-content">
            <div class="d-flex align-items-center justify-content-between mb-3">
               <div>
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard'); ?>">Home</a></li>
                     <li class="breadcrumb-item active"><i class="fa fa-arrow-back"></i> View <?php echo $page_title; ?></li>
                  </ol>
                  <h1 class="page-header mb-0">View <?php echo $page_title; ?></h1>
               </div>
               <div>
                  <button onclick="history.back();" class="btn btn-primary">Back</button>
               </div>
            </div>



               <form  class="row" method="post" enctype="multipart/form-data" action="#">
                  <div class="col-lg-8">
                     <div class="card border-0 mb-4">
                        <div class="card-header h6 mb-0 bg-none p-3">
                           <i class="fa fa-fa fa-lg fa-fw text-dark text-opacity-50 me-1"></i> Register Date:- <?php echo date('d M Y',strtotime($EDITDATA[0]->addeddate)); ?>
                        </div>
                        <div class="card-body">
                           <div class="row">
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Member ID</label>
                                    <input type="text" class="form-control" name="name" value="<?php echo $EDITDATA[0]->memeber_id; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">On Behalf</label>
                                    <input type="text" class="form-control" name="name" value="<?php echo $EDITDATA[0]->on_behalf; ?>" disabled>
                                 </div>
                              </div>
                              
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">First Name</label>
                                    <input type="text" class="form-control" name="email"  value="<?php echo $EDITDATA[0]->first_name; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Last Name</label>
                                    <input type="text" class="form-control" name="email"  value="<?php echo $EDITDATA[0]->last_name; ?>" disabled>
                                 </div>
                              </div>

                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Gender</label>
                                    <input type="text" class="form-control" name="mobile"  value="<?php echo $EDITDATA[0]->gender; ?>" disabled>
                                 </div>
                              </div>
                              
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Date of Birth</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->dob; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->email; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Reffer Code</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->reffer_code; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Country Code</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->country_code; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Mobile</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->mobile; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->password; ?>" disabled>
                                 </div>
                              </div>

                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Confirm Password</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->confirm_password; ?>" disabled>
                                 </div>
                              </div>
                              
                              <div class="col-lg-12 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Introduction</label>
                                    <textarea class="form-control" name="message" id="wysihtml5"  placeholder="Enter text ..." rows="12" disabled><?php echo $EDITDATA[0]->introduction; ?></textarea>
                                 </div>
                              </div>

                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Martial Status</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->marital_status; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Children</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->children; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Present Country</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->present_country_id; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Present State</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->present_state_id; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Present City</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->present_city_id; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Present Postal Code</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->present_postal_code; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Height</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->height; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Weight</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->weight; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Eye Color</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->eye_color; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Hair Color</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->hair_color; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Complexion</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->complexion; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Blood Group</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->blood_group; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Body Art</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->body_art; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Disability</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->disability; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Mothere Tongue</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->mothere_tongue; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Known Languages</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->known_languages; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Hobbies</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->hobbies; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Interests</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->interests; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Music</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->music; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Books</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->books; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Movies</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->movies; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">TV Show</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->tv_shows; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Sports</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->sports; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Fitness Activities</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->fitness_activities; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-6 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Cuisines</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->cuisines; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-6 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Dress Styles</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->dress_styles; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-12 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Affection</label>
                                    <textarea class="form-control" name="message" id="wysihtml5"  placeholder="Enter text ..." rows="12" disabled><?php echo $EDITDATA[0]->dress_styles; ?></textarea>
                                 </div>
                              </div>

                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Humor</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->humor; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Political Views</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->political_views; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Religious  Service</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->religious_service; ?>" disabled>
                                 </div>
                              </div>
                              
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Birth Country</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->birth_country_id; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Recidency Country</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->recidency_country_id; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Growup Country</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->growup_country_id; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Immigration Status</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->immigration_status; ?>" disabled>
                                 </div>
                              </div>
                              
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Member Religion</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->member_religion_id; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Member Caste</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->member_caste_id; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Member Sub Caste</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->member_sub_caste_id; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Ethnicity</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->ethnicity; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Personal Value</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->personal_value; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Family Value</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->family_value_id; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Community Value</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->community_value; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Diet</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->diet; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Drink</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->drink; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Smoke</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->smoke; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Living With</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->living_with; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Sun Sign</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->sun_sign; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Moon Sign</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->moon_sign; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Date Of Birth</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->time_of_birth; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">City Of Birth</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->city_of_birth; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Permanent Country</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->permanent_country_id; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Permanent State</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->permanent_state_id; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Permanent Postal</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->permanent_postal_code; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Father</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->father; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Mother</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->mother; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Sibling</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->sibling; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">General</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->general; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Residence Country</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->residence_country_id; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Partner Height</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->partner_height; ?>" disabled>
                                 </div>
                              </div>
                              
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Partner Weight</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->partner_weight; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Partner Martial Status</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->partner_marital_status; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Partner Children Acceptable</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->partner_children_acceptable; ?>" disabled>
                                 </div>
                              </div>
                              
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Partner Religion</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->partner_religion_id; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Partner Caste</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->partner_caste_id; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Partner Sub Caste</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->partner_sub_caste_id; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Language</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->language_id; ?>" disabled>
                                 </div>
                              </div>
                              
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Partner Education</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->pertner_education; ?>" disabled>
                                 </div>
                              </div>
                              
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Partner Profession</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->partner_profession; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Smoking Acceptable</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->smoking_acceptable; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Drinking Acceptable</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->drinking_acceptable; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Partner Diet</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->partner_diet; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Partner Body</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->partner_body_type; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Partner Personal Value</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->partner_personal_value; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Partner Manglik</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->partner_manglik; ?>" disabled>
                                 </div>
                              </div>
                              
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Partner Country</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->partner_country_id; ?>" disabled>
                                 </div>
                              </div>
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Partner State</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->partner_state_id; ?>" disabled>
                                 </div>
                              </div>
                              
                              <div class="col-lg-3 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Family Value</label>
                                    <input type="text" class="form-control" name="subject"  value="<?php echo $EDITDATA[0]->family_value_id2; ?>" disabled>
                                 </div>
                              </div>

                              <div class="col-lg-12 mb-4">
                                 <div class="mb-lg-0 mb-3">
                                    <label class="form-label">Family Value</label>
                                    <textarea class="form-control" name="message" id="wysihtml5"  placeholder="Enter text ..." rows="12" disabled><?php echo $EDITDATA[0]->pertner_complexion; ?></textarea>
                                 </div>
                              </div>
                              

                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="col-lg-4">
                      <div class="card border-0 mb-4">
                        <div class="card-header h6 mb-0 bg-none p-3">
                           <i class="fa fa-fa fa-lg fa-fw text-dark text-opacity-50 me-1"></i> Upload Image
                        </div>
                        <div class="card-body">
                           <div class="row">

                              <div class="col-lg-12 mb-4">
                                 <div class="mb-lg-0 mb-3 bg-light">
                                    <label class="form-label"style="width: 100%;text-align: center; position: relative;border: 1px solid aliceblue;">Upload image
                                       <img id="blah" src="<?php echo base_url($upload_path); ?><?php echo $EDITDATA[0]->image; ?>" class="sd" style="width: 100%; height: 100%; position: relative; top: -22px;">
                                       <input  type="hidden" class="form-control" name="oldimage" value="<?php echo $EDITDATA[0]->image; ?>">
                                       <input style="display: none;" type="file" class="form-control" name="image"  id="imgInp">
                                   </label>
                                 </div>
                              </div>
                                                         
                             
                           </div>
                        </div>
                     </div>                  
                  </div>

               </form>
           
         </div>
       
      </div>



   <?php $this->load->view('admin/include/footer') ?>

   </body>
</html>