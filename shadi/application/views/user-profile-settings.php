<?php 
$userdata = user_logedin_detail();
$userdata = $userdata[0];

$dob = $userdata->dob;

$age = ageCalculator($dob);
print_r($age);

$this->load->view("header");
?>

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
                           <h5 class="mb-0 h6">Introduction</h5>
                        </div>
                        <div class="card-body">
                           <form action="<?php echo base_url('user/user_introduction'); ?>" method="POST" id="introduction-form" class="form_data" novalidate>               
                              <div class="form-group row">
                                 <label class="col-md-2 col-form-label">Introduction</label>
                                 <div class="col-md-10">
                                    <textarea type="text" name="introduction" class="form-control" rows="4" placeholder="Introduction" required><?php echo $userdata->introduction; ?></textarea>
                                    <span id="introduction-form-msg"></span>
                                 </div>
                              </div>
                              <div class="text-right">
                                 <button type="submit" class="btn btn-primary btn-sm">Update</button>
                              </div>
                           </form>
                        </div>
                     </div>
                     <!-- Email Change -->
                     <div class="card">
                        <div class="card-header">
                           <h5 class="mb-0 h6">Change your email</h5>
                        </div>
                        <div class="card-body">
                           <form action="<?php echo base_url('user/user_email'); ?>" method="POST" id="email-form" class="form_data" novalidate>              
                              <div class="row">
                                 <div class="col-md-2">
                                    <label>Your Email</label>
                                 </div>
                                 <div class="col-md-10">
                                    <div class="input-group mb-3">
                                       <input type="email" class="form-control" placeholder="Your Email" name="email" value="<?php echo $userdata->email; ?>" />
                                    </div>

                                    <span id="email-form-msg"></span>
                                    <div class="form-group mb-0 text-right">
                                       <button type="submit" class="btn btn-sm btn-primary">Update</button>
                                    </div>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                     <!-- Basic Information -->
                     <div class="card">
                        <div class="card-header">
                           <h5 class="mb-0 h6">Basic Information</h5>
                        </div>
                        <div class="card-body">
                           <form action="<?php echo base_url('user/basic_introduction'); ?>" method="POST" id="basic-into-form" class="form_data" novalidate>           
                              <div class="form-group row">
                                 <div class="col-md-6">
                                    <label for="first_name" >First Name
                                    <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" name="first_name" class="form-control" placeholder="First Name" required value="<?php echo $userdata->first_name; ?>">
                                 </div>
                                 <div class="col-md-6">
                                    <label for="first_name" >Last Name
                                    <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" name="last_name" value="<?php echo $userdata->last_name; ?>" class="form-control" placeholder="Last Name" required>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <div class="col-md-6">
                                    <label for="first_name" >Gender
                                    <span class="text-danger">*</span>
                                    </label>
                                    <select class="form-control aiz-selectpicker" name="gender" required>
                                       <option value="Male" <?php if($userdata->gender=='Male')echo 'selected'; ?>>Male</option>
                                       <option value="Female" <?php if($userdata->gender=='Female')echo 'selected'; ?>>Female</option>
                                    </select>
                                 </div>
                                 <div class="col-md-6">
                                    <label for="first_name" >Date Of Birth
                                    <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="aiz-date-range form-control" name="dob"  value="<?php echo $userdata->dob; ?>" placeholder="Select Date" data-single="true" data-show-dropdown="true"  autocomplete="off" required>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <div class="col-md-6">
                                    <label for="first_name" >Phone Number
                                    <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" name="mobile" value="<?php echo $userdata->mobile; ?>" class="form-control" placeholder="Phone" required>
                                 </div>
                                 <div class="col-md-6">
                                    <label for="first_name" >On Behalf
                                    <span class="text-danger">*</span>
                                    </label>
                                    <select class="form-control aiz-selectpicker" name="on_behalf" data-live-search="true" required>
                                       <option value="Friend" <?php if($userdata->on_behalf=='Friend')echo 'selected'; ?>>Friend</option>
                                       <option value="Brother" <?php if($userdata->on_behalf=='Brother')echo 'selected'; ?>>Brother</option>
                                       <option value="Sister" <?php if($userdata->on_behalf=='Sister')echo 'selected'; ?>>Sister</option>
                                       <option value="Daughter/Son" <?php if($userdata->on_behalf=='Daughter/Son')echo 'selected'; ?>>Daughter/Son</option>
                                       <option value="Selfs" <?php if($userdata->on_behalf=='Selfs')echo 'selected'; ?>  >Selfs</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <div class="col-md-6">
                                    <label for="first_name" >Marital  Status
                                    <span class="text-danger">*</span>
                                    </label>
                                    <select class="form-control aiz-selectpicker" name="marital_status" data-live-search="true" required>
                                       <option value="Never Married" <?php if($userdata->marital_status=='Never Married')echo 'selected'; ?> >Never Married</option>
                                       <option value="Married" <?php if($userdata->marital_status=='Married')echo 'selected'; ?> >Married</option>
                                       <option value="Divorced" <?php if($userdata->marital_status=='Divorced')echo 'selected'; ?> >Divorced </option>
                                       <option value="Separated" <?php if($userdata->marital_status=='Separated')echo 'selected'; ?> >Separated </option>
                                       <option value="Widowed" <?php if($userdata->marital_status=='Widowed')echo 'selected'; ?> >Widowed</option>
                                    </select>
                                 </div>
                                 <div class="col-md-6">
                                    <label for="first_name" >Number Of Children
                                    <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" name="children" value="<?php echo $userdata->children; ?>" class="form-control" placeholder="Number Of Children" >
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <div class="col-md-12">
                                    <label for="photo" >photo <small>(800x800)</small>
                                    <small class="text-danger">(Approved.)</small>
                                    </label>
                                    <div class="input-group" data-toggle="aizuploader" data-type="image">
                                       <div class="input-group-prepend">
                                          <div class="input-group-text bg-soft-secondary font-weight-medium">
                                             <input type="file" name="image" class="selected-files">
                                             <input  type="hidden" class="form-control" name="oldimage" value="<?php echo $userdata->image; ?>">
                                          </div>
                                       </div>                                       
                                    </div>                                    
                                 </div>
                              </div>
                              <span id="basic-into-msg"></span>
                              <div class="text-right">
                                 <button type="submit" class="btn btn-primary btn-sm">Update</button>
                              </div>
                           </form>
                        </div>
                     </div>
                     <!-- Present Address -->
                     <div class="card">
                        <div class="card-header">
                           <h5 class="mb-0 h6">Present Address</h5>
                        </div>
                        <div class="card-body">
                           <form action="<?php echo base_url('user/present_address'); ?>" method="POST" id="present-add-form" class="form_data" novalidate>           
                              <div class="form-group row">
                                 <div class="col-md-6">
                                    <label for="present_country_id">Country</label>
                                    <input type="text" name="present_country_id"  class="form-control" placeholder="Country" required value="<?php echo $userdata->present_country_id; ?>">
                                 </div>
                                 <div class="col-md-6">
                                    <label for="present_state_id">State</label>
                                    <input type="text" name="present_state_id"  class="form-control" placeholder="State" required value="<?php echo $userdata->present_state_id; ?>">

                                 </div>
                              </div>
                              <div class="form-group row">
                                 <div class="col-md-6">
                                    <label for="present_city_id">City</label>
                                    <input type="text" name="present_city_id"  class="form-control" placeholder="City" required value="<?php echo $userdata->present_city_id; ?>">

                                 </div>
                                 <div class="col-md-6">
                                    <label for="present_postal_code">Postal Code</label>
                                    <input type="text" name="present_postal_code"  class="form-control" placeholder="Postal Code" required value="<?php echo $userdata->present_postal_code; ?>">
                                 </div>
                              </div>
                              <span id="present-add-msg"></span>
                              <div class="text-right">
                                 <button type="submit" class="btn btn-primary btn-sm">Update</button>
                              </div>
                           </form>
                        </div>
                     </div>
                     <!-- Education -->
                     <div class="card">
                        <div class="card-header">
                           <h5 class="mb-0 h6">Education Info</h5>
                           <div class="text-right">
                              <a onclick="education_add_modal('27');"  href="javascript:void(0);" class="btn btn-sm btn-primary ">
                              <i class="las mr-1 la-plus"></i>
                              Add New
                              </a>
                           </div>
                        </div>
                        <div class="card-body">
                           <table class="table aiz-table">
                              <tr>
                                 <th>Degree</th>
                                 <th>Institution</th>
                                 <th data-breakpoints="md">Start</th>
                                 <th data-breakpoints="md">End</th>
                                 <th data-breakpoints="md">Status</th>
                                 <th class="text-right">Options</th>
                              </tr>
                              <tr>
                                 <td>M.B.B.S</td>
                                 <td>Imperial Medical College</td>
                                 <td>2010</td>
                                 <td>2015</td>
                                 <td>
                                    <label class="aiz-switch aiz-switch-success mb-0">
                                    <input type="checkbox" id="status.0" onchange="update_education_present_status(this)" value="2"  checked  data-switch="success"/>
                                    <span></span>
                                    </label>
                                 </td>
                                 <td class="text-right">
                                    <a href="javascript:void(0);" class="btn btn-soft-info btn-icon btn-circle btn-sm" onclick="education_edit_modal('2');" title="Edit">
                                    <i class="las la-edit"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete" data-href="https://demo.activeitzone.com/matrimonial/education/destroy/2" title="Delete">
                                    <i class="las la-trash"></i>
                                    </a>
                                 </td>
                              </tr>
                           </table>
                        </div>
                     </div>
                     <!-- Career -->
                     <div class="card">
                        <div class="card-header">
                           <h5 class="mb-0 h6">Career</h5>
                           <div class="text-right">
                              <a onclick="career_add_modal('27');"  href="javascript:void(0);" class="btn btn-sm btn-primary ">
                              <i class="las mr-1 la-plus"></i>
                              Add New
                              </a>
                           </div>
                        </div>
                        <div class="card-body">
                           <table class="table aiz-table">
                              <tr>
                                 <th>designation</th>
                                 <th>company</th>
                                 <th data-breakpoints="md">Start</th>
                                 <th data-breakpoints="md">End</th>
                                 <th data-breakpoints="md">Status</th>
                                 <th data-breakpoints="md" class="text-right">Options</th>
                              </tr>
                              <tr>
                                 <td>Cardiologist</td>
                                 <td>Imperial Hospital</td>
                                 <td>2015</td>
                                 <td>2024</td>
                                 <td>
                                    <label class="aiz-switch aiz-switch-success mb-0">
                                    <input type="checkbox" id="status.0" onchange="update_career_present_status(this)" value="2"  checked  data-switch="success"/>
                                    <span></span>
                                    </label>
                                 </td>
                                 <td class="text-right">
                                    <a href="javascript:void(0);" class="btn btn-soft-info btn-icon btn-circle btn-sm" onclick="career_edit_modal('2');" title="Edit">
                                    <i class="las la-edit"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete" data-href="https://demo.activeitzone.com/matrimonial/career/destroy/2" title="Delete">
                                    <i class="las la-trash"></i>
                                    </a>
                                 </td>
                              </tr>
                           </table>
                        </div>
                     </div>
                     <!-- Physical Attributes -->
                     <div class="card">
                        <div class="card-header">
                           <h5 class="mb-0 h6">Physical Attributes</h5>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo base_url('user/physical_attributes'); ?>" method="POST" id="physical-att-form" class="form_data" novalidate>           
                              <div class="form-group row">
                                 <div class="col-md-6">
                                    <label for="height">Height (In Feet)</label>
                                    <input type="number" name="height" value="<?php echo $userdata->height; ?>" step="any" class="form-control" placeholder="Height" required>
                                 </div>
                                 <div class="col-md-6">
                                    <label for="weight">Weight (In Kg)</label>
                                    <input type="number" name="weight" value="<?php echo $userdata->weight; ?>" step="any" placeholder="Weight" class="form-control" required>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <div class="col-md-6">
                                    <label for="eye_color">Eye color</label>
                                    <input type="text" name="eye_color" value="<?php echo $userdata->eye_color; ?>" class="form-control" placeholder="Eye color" required>
                                 </div>
                                 <div class="col-md-6">
                                    <label for="hair_color">Hair Color</label>
                                    <input type="text" name="hair_color" value="<?php echo $userdata->hair_color; ?>" placeholder="Hair Color" class="form-control" required>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <div class="col-md-6">
                                    <label for="complexion">Complexion</label>
                                    <input type="text" name="complexion" value="<?php echo $userdata->complexion; ?>" class="form-control" placeholder="Complexion" required>
                                 </div>
                                 <div class="col-md-6">
                                    <label for="blood_group">Blood Group</label>
                                    <input type="text" name="blood_group" value="<?php echo $userdata->blood_group; ?>" placeholder="Blood Group" class="form-control" required>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <div class="col-md-6">
                                    <label for="body_type">Body Type</label>
                                    <input type="text" name="body_type" value="<?php echo $userdata->body_type; ?>" class="form-control" placeholder="Body Type" required>
                                 </div>
                                 <div class="col-md-6">
                                    <label for="body_art">Body Art</label>
                                    <input type="text" name="body_art" value="<?php echo $userdata->body_art; ?>" placeholder="Body Art" class="form-control" required>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <div class="col-md-6">
                                    <label for="disability">Disability</label>
                                    <input type="text" name="disability" value="<?php echo $userdata->disability; ?>" class="form-control" placeholder="Disability">
                                 </div>
                              </div>
                              <span id="physical-att-form-msg"></span>
                              <div class="text-right">
                                 <button type="submit" class="btn btn-primary btn-sm">Update</button>
                              </div>
                           </form>
                        </div>
                     </div>
                     <!-- Language -->
                     <div class="card">
                        <div class="card-header">
                           <h5 class="mb-0 h6">Language</h5>
                        </div>
                        <div class="card-body">
                           <form action="<?php echo base_url('user/language'); ?>" method="POST" id="language-form" class="form_data" novalidate>            
                              <div class="form-group row">
                                 <div class="col-md-6">
                                    <label for="diet">Mother Tongue</label>
                                    <select name="mothere_tongue" class="form-control aiz-selectpicker" data-live-search="true" >
                                       <option value="English" <?php if($userdata->mothere_tongue=='English')echo 'selected'; ?>> English </option>
                                       <option value="German" <?php if($userdata->mothere_tongue=='German')echo 'selected'; ?>> German </option>
                                       <option value="Hindi" <?php if($userdata->mothere_tongue=='Hindi')echo 'selected'; ?>> Hindi </option>
                                       <option value="Urdu" <?php if($userdata->mothere_tongue=='Urdu')echo 'selected'; ?>> Urdu </option>
                                       <option value="Arabic" <?php if($userdata->mothere_tongue=='Arabic')echo 'selected'; ?>> Arabic </option>
                                       <option value="Tamil" <?php if($userdata->mothere_tongue=='Tamil')echo 'selected'; ?>> Tamil </option>
                                       <option value="Chainese" <?php if($userdata->mothere_tongue=='Chainese')echo 'selected'; ?>> Chainese </option>
                                       <option value="Japanese" <?php if($userdata->mothere_tongue=='Japanese')echo 'selected'; ?>> Japanese </option>
                                       <option value="Datch" <?php if($userdata->mothere_tongue=='Datch')echo 'selected'; ?>> Datch </option>
                                       <option value="Spanish" <?php if($userdata->mothere_tongue=='Spanish')echo 'selected'; ?>> Spanish </option>
                                    </select>

                                    <!-- <input type="text" name="mothere_tongue" value="<?php echo $userdata->mothere_tongue; ?>" class="form-control" placeholder="Mother Tongue"> -->
                                 </div>
                                 <div class="col-md-6">
                                    <label for="drink">Known Languages</label>
                                    <input type="text" name="known_languages" value="<?php echo $userdata->known_languages; ?>" class="form-control" placeholder="Known Languages">
                                 </div>
                              </div>
                              <span id="language-msg"></span>
                              <div class="text-right">
                                 <button type="submit" class="btn btn-primary btn-sm">Update</button>
                              </div>
                           </form>
                        </div>
                     </div>
                     <!-- Hobbies  -->
                     <div class="card">
                        <div class="card-header">
                           <h5 class="mb-0 h6">Hobbies &amp; Interest</h5>
                        </div>
                        <div class="card-body">
                          <form action="<?php echo base_url('user/hobbie_intrest'); ?>" method="POST" id="hobbie_intrest-form" class="form_data" novalidate>  
                              <div class="form-group row">
                                 <div class="col-md-6">
                                    <label for="hobbies">Hobbies</label>
                                    <input type="text" name="hobbies"  class="form-control" placeholder="Hobbies" value="<?php echo $userdata->hobbies; ?>">
                                 </div>
                                 <div class="col-md-6">
                                    <label for="interests">Interests</label>
                                    <input type="text" name="interests" value="<?php echo $userdata->interests; ?>" placeholder="Interests" class="form-control">
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <div class="col-md-6">
                                    <label for="music">Music</label>
                                    <input type="text" name="music" value="<?php echo $userdata->music; ?>" class="form-control" placeholder="Music">
                                 </div>
                                 <div class="col-md-6">
                                    <label for="books">Books</label>
                                    <input type="text" name="books" value="<?php echo $userdata->books; ?>" placeholder="Books" class="form-control">
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <div class="col-md-6">
                                    <label for="movies">Movies</label>
                                    <input type="text" name="movies" value="<?php echo $userdata->movies; ?>" class="form-control" placeholder="Movies">
                                 </div>
                                 <div class="col-md-6">
                                    <label for="tv_shows">TV Shows</label>
                                    <input type="text" name="tv_shows" value="<?php echo $userdata->tv_shows; ?>" placeholder="TV Shows" class="form-control">
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <div class="col-md-6">
                                    <label for="sports">Sports</label>
                                    <input type="text" name="sports" value="<?php echo $userdata->sports; ?>" class="form-control" placeholder="Sports">
                                 </div>
                                 <div class="col-md-6">
                                    <label for="fitness_activities">Fitness Activitiess</label>
                                    <input type="text" name="fitness_activities" value="<?php echo $userdata->fitness_activities; ?>" class="form-control">
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <div class="col-md-6">
                                    <label for="cuisines">Cuisines</label>
                                    <input type="text" name="cuisines" value="<?php echo $userdata->cuisines; ?>" class="form-control" placeholder="Cuisines">
                                 </div>
                                 <div class="col-md-6">
                                    <label for="dress_styles">Dress Styles</label>
                                    <input type="text" name="dress_styles" value="<?php echo $userdata->dress_styles; ?>" placeholder="Dress Styles" class="form-control">
                                 </div>
                              </div>

                              <span id="hobbie_intrest-msg"></span>

                              <div class="text-right">
                                 <button type="submit" class="btn btn-primary btn-sm">Update</button>
                              </div>
                           </form>
                        </div>
                     </div>
                     <!-- Personal Attitude & Behavior -->
                     <div class="card">
                        <div class="card-header">
                           <h5 class="mb-0 h6">Personal Attitude &amp; Behavior</h5>
                        </div>
                        <div class="card-body">
                           <form action="<?php echo base_url('user/personal_attitute'); ?>" method="POST" id="personal_attitute-form" class="form_data" novalidate>      
                              <div class="form-group row">
                                 <div class="col-md-6">
                                    <label for="affection">Affection</label>
                                    <input type="text" name="affection" value="<?php echo $userdata->affection; ?>" class="form-control" placeholder="Affection">
                                 </div>
                                 <div class="col-md-6">
                                    <label for="humor">Humor</label>
                                    <input type="text" name="humor" value="<?php echo $userdata->humor; ?>" placeholder="Humor" class="form-control">
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <div class="col-md-6">
                                    <label for="political_views">Political Views</label>
                                    <input type="text" name="political_views" value="<?php echo $userdata->political_views; ?>" class="form-control" placeholder="Political Views">
                                 </div>
                                 <div class="col-md-6">
                                    <label for="religious_service">Religious Service</label>
                                    <input type="text" name="religious_service" value="<?php echo $userdata->religious_service; ?>" placeholder="Religious Service" class="form-control">
                                 </div>
                              </div>
                              <span id="personal_attitute-msg"></span>

                              <div class="text-right">
                                 <button type="submit" class="btn btn-primary btn-sm">Update</button>
                              </div>
                           </form>
                        </div>
                     </div>
                     <!-- Residency Information -->
                     <div class="card">
                        <div class="card-header">
                           <h5 class="mb-0 h6">Residency Information</h5>
                        </div>
                        <div class="card-body">
                           <form action="<?php echo base_url('user/residenci_info'); ?>" method="POST" id="residenci_info-form" class="form_data" novalidate>

                              <div class="form-group row">
                                 <div class="col-md-6">
                                    <label for="birth_country_id">Birth Country</label>
                                    <input type="text" name="birth_country_id"  value="<?php echo $userdata->birth_country_id; ?>"  placeholder="Birth Country" class="form-control">
                                 </div>

                                 <div class="col-md-6">
                                    <label for="recidency_country_id">Residency Country</label>
                                    <input type="text" name="recidency_country_id"  value="<?php echo $userdata->recidency_country_id; ?>"  placeholder="Residency Country" class="form-control">
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <div class="col-md-6">
                                    <label for="growup_country_id">Grow up Country</label>
                                    <input type="text" name="growup_country_id" value="<?php echo $userdata->growup_country_id; ?>"  placeholder="Grow up Country" class="form-control">
                                 </div>
                                 <div class="col-md-6">
                                    <label for="immigration_status">Immigration Status</label>
                                    <input type="text" name="immigration_status"  value="<?php echo $userdata->immigration_status; ?>"  placeholder="Immigration Status" class="form-control">
                                 </div>
                              </div>
                              <span id="residenci_info-msg"></span>
                              <div class="text-right">
                                 <button type="submit" class="btn btn-primary btn-sm">Update</button>
                              </div>
                           </form>
                        </div>
                     </div>
                     <!-- Spiritual & Social Background -->
                     <div class="card">
                        <div class="card-header">
                           <h5 class="mb-0 h6">Spiritual &amp; Social Background</h5>
                        </div>
                        <div class="card-body">
                           <form action="<?php echo base_url('user/spitual_background'); ?>" method="POST" id="residenci_info-form" class="form_data" novalidate>
                              <div class="form-group row">
                                 <div class="col-md-6">
                                    <label for="member_religion_id">Religion</label>
                                    <select class="form-control aiz-selectpicker" name="member_religion_id" required>
                                       <option value="Islam"   <?php if($userdata->member_religion_id=='Islam')echo 'selected'; ?>> Islam </option>
                                       <option value="Judaismm"   <?php if($userdata->member_religion_id=='Judaismm')echo 'selected'; ?>> Judaismm </option>
                                       <option value="Hinduism"   <?php if($userdata->member_religion_id=='Hinduism')echo 'selected'; ?>> Hinduism </option>
                                       <option value="Christianity"  <?php if($userdata->member_religion_id=='Christianity')echo 'selected'; ?> > Christianity </option>
                                       <option value="Buddhism"   <?php if($userdata->member_religion_id=='Buddhism')echo 'selected'; ?>> Buddhism </option>
                                       <option value="Jainism"   <?php if($userdata->member_religion_id=='Jainism')echo 'selected'; ?>> Jainism </option>
                                       <option value="Baha"  <?php if($userdata->member_religion_id=='Baha')echo 'selected'; ?> > Baha&#039;i </option>
                                       <option value="Sikhism"  <?php if($userdata->member_religion_id=='Sikhism')echo 'selected'; ?> > Sikhism </option>
                                       <option value="Confucianism"  <?php if($userdata->member_religion_id=='Confucianism')echo 'selected'; ?> > Confucianism </option>
                                       <option value="Atheism"  <?php if($userdata->member_religion_id=='Atheism')echo 'selected'; ?> > Atheism </option>
                                       <option value="ertt"  <?php if($userdata->member_religion_id=='ertt')echo 'selected'; ?> > ertt </option>                                     
                                    </select>

                                    <!-- <input type="text" name="member_religion_id"  class="form-control" placeholder="Religion" value="<?php echo $userdata->member_religion_id; ?>"> -->
                                 </div>
                                 <div class="col-md-6">
                                    <label for="member_caste_id">Caste</label>
                                    <select class="form-control aiz-selectpicker" name="member_caste_id" required>
                                       <option value="Shia"   <?php if($userdata->member_caste_id=='Shia')echo 'selected'; ?>> Shia </option>
                                       <option value="Sunni"   <?php if($userdata->member_caste_id=='Sunni')echo 'selected'; ?>> Sunni </option>
                                       <option value="Israelites (Yisraelim)"   <?php if($userdata->member_caste_id=='Israelites (Yisraelim)')echo 'selected'; ?>> Israelites (Yisraelim) </option>
                                       <option value="Vaishyas"   <?php if($userdata->member_caste_id=='Vaishyas')echo 'selected'; ?>> Vaishyas </option>
                                       <option value="Brahmin"   <?php if($userdata->member_caste_id=='Brahmin')echo 'selected'; ?>> Brahmin </option>
                                       <option value="Kshatriyas"   <?php if($userdata->member_caste_id=='Kshatriyas')echo 'selected'; ?>> Kshatriyas </option>
                                       <option value="Shudras"   <?php if($userdata->member_caste_id=='Shudras')echo 'selected'; ?>> Shudras </option>
                                                                    
                                    </select>

                                    <!-- <input type="text" name="member_caste_id"  class="form-control" placeholder="Caste" value="<?php echo $userdata->member_caste_id; ?>"> -->
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <div class="col-md-6">
                                    <label for="member_sub_caste_id">Sub Caste</label>
                                    <input type="text" name="member_sub_caste_id"  class="form-control" placeholder="Sub Caste" value="<?php echo $userdata->member_sub_caste_id; ?>">
                                 </div>
                                 <div class="col-md-6">
                                    <label for="ethnicity">Ethnicity</label>
                                    <input type="text" name="ethnicity"  class="form-control" placeholder="Ethnicity" value="<?php echo $userdata->ethnicity; ?>">
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <div class="col-md-6">
                                    <label for="personal_value">Personal Value</label>
                                    <input type="text" name="personal_value"  class="form-control" placeholder="Personal Value" value="<?php echo $userdata->personal_value; ?>">
                                 </div>
                                 <div class="col-md-6">
                                    <label for="family_value_id">Family Value</label>
                                    <input type="text" name="family_value_id"  class="form-control" placeholder="Personal Value" value="<?php echo $userdata->family_value_id; ?>">
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <div class="col-md-6">
                                    <label for="community_value">Community Value</label>
                                    <input type="text" name="community_value" value="<?php echo $userdata->community_value; ?>" class="form-control" placeholder="Community Value">
                                 </div>
                              </div>
                              <span id="residenci_info-msg"></span>
                              <div class="text-right">
                                 <button type="submit" class="btn btn-primary btn-sm">Update</button>
                              </div>
                           </form>
                        </div>
                     </div>
                     <!-- Life Style -->
                     <div class="card">
                        <div class="card-header">
                           <h5 class="mb-0 h6">Lifestyle</h5>
                        </div>
                        <div class="card-body">
                           <form action="<?php echo base_url('user/lifestyle'); ?>" method="POST" id="lifestyle-form" class="form_data" novalidate>        
                              <div class="form-group row">
                                 <div class="col-md-6">
                                    <label for="diet">Diet</label>
                                    <select class="form-control aiz-selectpicker" name="diet" required>
                                       <option value="yes"  <?php if($userdata->diet=='yes')echo 'selected'; ?>  >Yes</option>
                                       <option value="no" <?php if($userdata->diet=='no')echo 'selected'; ?> >No</option>
                                    </select>
                                 </div>
                                 <div class="col-md-6">
                                    <label for="drink">Drink</label>
                                    <select class="form-control aiz-selectpicker" name="drink" required>
                                       <option value="yes" <?php if($userdata->drink=='yes')echo 'selected'; ?> >Yes</option>
                                       <option value="no"  <?php if($userdata->drink=='yes')echo 'selected'; ?>  >No</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <div class="col-md-6">
                                    <label for="smoke">Smoke</label>
                                    <select class="form-control aiz-selectpicker" name="smoke" required>
                                       <option value="yes" <?php if($userdata->smoke=='yes')echo 'selected'; ?> >Yes</option>
                                       <option value="no"  <?php if($userdata->smoke=='yes')echo 'selected'; ?>  >No</option>
                                    </select>
                                 </div>
                                 <div class="col-md-6">
                                    <label for="living_with">Living With</label>
                                    <input type="text" name="living_with" value="<?php echo $userdata->living_with; ?>" placeholder="Living With" class="form-control" required>
                                 </div>
                              </div>
                              <span id="lifestyle-msg"></span>
                              <div class="text-right">
                                 <button type="submit" class="btn btn-primary btn-sm">Update</button>
                              </div>
                           </form>
                        </div>
                     </div>
                     <!-- Astronomic Information  -->
                     <div class="card">
                        <div class="card-header">
                           <h5 class="mb-0 h6">Astronomic Information</h5>
                        </div>
                        <div class="card-body">
                           <form action="<?php echo base_url('user/astronomic'); ?>" method="POST" id="astronomic-form" class="form_data" novalidate>      
                              <div class="form-group row">
                                 <div class="col-md-6">
                                    <label for="sun_sign">Sun Sign</label>
                                    <input type="text" name="sun_sign" value="<?php echo $userdata->sun_sign; ?>" class="form-control" placeholder="Sun Sign" required>
                                 </div>
                                 <div class="col-md-6">
                                    <label for="moon_sign">Moon Sign</label>
                                    <input type="text" name="moon_sign" value="<?php echo $userdata->moon_sign; ?>" placeholder="Moon Sign" class="form-control" required>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <div class="col-md-6">
                                    <label for="time_of_birth">Time Of Birth</label>
                                    <input type="date" name="time_of_birth" value="<?php echo $userdata->time_of_birth; ?>" class="form-control" placeholder="Time Of Birth" required>
                                 </div>
                                 <div class="col-md-6">
                                    <label for="city_of_birth">City Of Birth</label>
                                    <input type="text" name="city_of_birth" value="<?php echo $userdata->city_of_birth; ?>" placeholder="City Of Birth" class="form-control" required>
                                 </div>
                              </div>
                              <span id="astronomic-msg"></span>
                              <div class="text-right">
                                 <button type="submit" class="btn btn-primary btn-sm">Update</button>
                              </div>
                           </form>
                        </div>
                     </div>
                     <!-- Permanent Address -->
                     <div class="card">
                        <div class="card-header">
                           <h5 class="mb-0 h6">Permanent Address</h5>
                        </div>
                        <div class="card-body">
                           <form action="<?php echo base_url('user/permanent_address'); ?>" method="POST" id="permanent_address-form" class="form_data" novalidate> 
                              <div class="form-group row">
                                 <div class="col-md-6">
                                    <label for="permanent_country_id">Country</label>
                                    <select class="form-control aiz-selectpicker" name="permanent_country_id" id="permanent_country_id" data-live-search="true" required>
                                       <option disabled >Select One</option>
                                       <option value="India" <?php if($userdata->permanent_country_id=='India') echo 'selected'; ?> >India</option>
                                    </select>
                                 </div>
                                 <div class="col-md-6">
                                    <label for="permanent_state_id">State</label>
                                    <select class="form-control aiz-selectpicker" name="permanent_state_id" id="permanent_state_id" data-live-search="true" required="" tabindex="-98">
                                       <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                       <option value="Andhra Pradesh"> Andhra Pradesh</option>
                                       <option value="Arunachal Pradesh"> Arunachal Pradesh</option>
                                       <option value="Assam"> Assam</option>
                                       <option value="Bihar"> Bihar</option>
                                       <option value="Chandigarh"> Chandigarh</option>
                                       <option value="Chhattisgarh"> Chhattisgarh</option>
                                       <option value="Dadra and Nagar Haveli"> Dadra and Nagar Haveli</option>
                                       <option value="Daman and Diu">  Daman and Diu</option>
                                       <option value="Delhi"> Delhi</option>
                                       <option value="Goa"> Goa</option>
                                       <option value="Gujarat"> Gujarat</option>
                                       <option value="Haryana"> Haryana</option>
                                       <option value="Himachal Pradesh"> Himachal Pradesh</option>
                                       <option value="Jammu and Kashmir"> Jammu and Kashmir</option>
                                       <option value="Jharkhand"> Jharkhand</option>
                                       <option value="Karnataka"> Karnataka</option>
                                       <option value="Kenmore"> Kenmore</option>
                                       <option value="Kerala"> Kerala</option>
                                       <option value="Lakshadweep"> Lakshadweep</option>
                                       <option value="Madhya Pradesh"> Madhya Pradesh</option>
                                       <option value="Maharashtra"> Maharashtra</option>
                                       <option value="Manipur"> Manipur</option>
                                       <option value="Meghalaya"> Meghalaya</option>
                                       <option value="Mizoram"> Mizoram</option>
                                       <option value="Nagaland"> Nagaland</option>
                                       <option value="Narora"> Narora</option>
                                       <option value="Natwar"> Natwar</option>
                                       <option value="Odisha"> Odisha</option>
                                       <option value="Paschim Medinipur"> Paschim Medinipur</option>
                                       <option value="Pondicherry"> Pondicherry</option>
                                       <option value="Punjab"> Punjab</option>
                                       <option value="Rajasthan"> Rajasthan</option>
                                       <option value="Sikkim"> Sikkim</option>
                                       <option value="Tamil Nadu"> Tamil Nadu</option>
                                       <option value="Telangana"> Telangana</option>
                                       <option value="Tripura"> Tripura</option>
                                       <option value="Uttar Pradesh"> Uttar Pradesh</option>
                                       <option value="Uttarakhand"> Uttarakhand</option>
                                       <option value="Vaishali"> Vaishali</option>
                                       <option value="West Bengal"> West Bengal</option>
                                    </select>
                                    <!-- <input type="text" name="permanent_state_id" value="<?php echo $userdata->permanent_state_id; ?>" class="form-control" placeholder="State" required> -->
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <div class="col-md-6">
                                    <label for="permanent_city_id">City</label>
                                    <input type="text" name="permanent_city_id" value="<?php echo $userdata->permanent_city_id; ?>" class="form-control" placeholder="City" required>
                                 </div>
                                 <div class="col-md-6">
                                    <label for="permanent_postal_code">Postal Code</label>
                                    <input type="text" name="permanent_postal_code" value="<?php echo $userdata->permanent_postal_code; ?>" class="form-control" placeholder="Postal Code" required>
                                 </div>
                              </div>
                              <span id="permanent_address-msg"></span>
                              <div class="text-right">
                                 <button type="submit" class="btn btn-primary btn-sm">Update</button>
                              </div>
                           </form>
                        </div>
                     </div>
                     <!-- Family Information -->
                     <div class="card">
                        <div class="card-header">
                           <h5 class="mb-0 h6">Family Information</h5>
                        </div>
                        <div class="card-body">
                           <form action="<?php echo base_url('user/family_info'); ?>" method="POST" id="family_info-form" class="form_data" novalidate>            
                              <div class="form-group row">
                                 <div class="col-md-6">
                                    <label for="father">Father</label>
                                    <input type="text" name="father" value="<?php echo $userdata->father; ?>" class="form-control" placeholder="Father" required>
                                 </div>
                                 <div class="col-md-6">
                                    <label for="mother">Mother</label>
                                    <input type="text" name="mother" value="<?php echo $userdata->mother; ?>" placeholder="Mother" class="form-control" required>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <div class="col-md-6">
                                    <label for="sibling">Sibling</label>
                                    <input type="text" name="sibling" value="<?php echo $userdata->sibling; ?>" class="form-control" placeholder="Sibling" required>
                                 </div>
                              </div>
                              <span id="family_info-msg"></span>
                              <div class="text-right">
                                 <button type="submit" class="btn btn-primary btn-sm">Update</button>
                              </div>
                           </form>
                        </div>
                     </div>
                     <!-- Partner Expectation -->
                     <div class="card">
                        <div class="card-header">
                           <h5 class="mb-0 h6">Partner Expectation</h5>
                        </div>
                        <div class="card-body">
                           
                           <form action="<?php echo base_url('user/partner_expect'); ?>" method="POST" id="partner_expect-form" class="form_data" novalidate>    
                              <div class="form-group row">
                                 <div class="col-md-6">
                                    <label for="general">General Requirement</label>
                                    <input type="text" name="general" value="<?php echo $userdata->general; ?>" class="form-control" placeholder="General" required>
                                 </div>
                                 <div class="col-md-6">
                                    <label for="residence_country_id">Residence Country</label>
                                    <select class="form-control aiz-selectpicker" name="residence_country_id" data-live-search="true" required>
                                       <option value="India" <?php if($userdata->residence_country_id=="India")echo 'selected'; ?> >India</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <div class="col-md-6">
                                    <label for="partner_height">Min Height  (In Feet)</label>
                                    <input type="number" name="partner_height" value="<?php echo $userdata->partner_height; ?>" step="any"  placeholder="Height" class="form-control" required>
                                 </div>
                                 <div class="col-md-6">
                                    <label for="partner_weight">Max Weight  (In Kg)</label>
                                    <input type="number" name="partner_weight" value="<?php echo $userdata->partner_weight; ?>" step="any" class="form-control" placeholder="Weight" required>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <div class="col-md-6">
                                    <label for="partner_marital_status">marital_status</label>
                                    <select class="form-control aiz-selectpicker" name="partner_marital_status" data-live-search="true" required>
                                       <option value="">Choose One</option>
                                       <option value="Never Married"  <?php if($userdata->partner_marital_status=="Never Married")echo 'selected'; ?> >Never Married</option>
                                       <option value="Married" <?php if($userdata->partner_marital_status=="Married")echo 'selected'; ?>>Married</option>
                                       <option value="Divorced" <?php if($userdata->partner_marital_status=="Divorced")echo 'selected'; ?>>Divorced </option>
                                       <option value="Separated" <?php if($userdata->partner_marital_status=="Separated")echo 'selected'; ?> >Separated </option>
                                       <option value="Widowed" <?php if($userdata->partner_marital_status=="Widowed")echo 'selected'; ?>>Widowed</option>
                                    </select>
                                 </div>
                                 <div class="col-md-6">
                                    <label for="partner_children_acceptable">Children Acceptable</label>
                                    <select class="form-control aiz-selectpicker" name="partner_children_acceptable" required>
                                       <option value="">Choose One</option>
                                       <option value="yes" <?php if($userdata->partner_children_acceptable=="Yes")echo 'selected'; ?> >Yes</option>
                                       <option value="no" <?php if($userdata->partner_children_acceptable=="No")echo 'selected'; ?> >No</option>
                                       <option value="Does not matter" <?php if($userdata->partner_children_acceptable=="Does not matter")echo 'selected'; ?> >Does not matter</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <div class="col-md-6">
                                    <label for="partner_religion_id">Religion</label>
                                    <select class="form-control aiz-selectpicker" name="partner_religion_id" id="partner_religion_id" data-live-search="true" required>
                                       <option disabled>Select One</option>
                                       <option value="Islam"  <?php if($userdata->partner_religion_id=="Islam")echo 'selected'; ?>> Islam </option>
                                       <option value="Judaismm" <?php if($userdata->partner_religion_id=="Judaismm")echo 'selected'; ?> > Judaismm </option>
                                       <option value="Hinduism" <?php if($userdata->partner_religion_id=="Hinduism")echo 'selected'; ?>> Hinduism </option>
                                       <option value="Christianity" <?php if($userdata->partner_religion_id=="Christianity")echo 'selected'; ?>> Christianity </option>
                                       <option value="Buddhism"  <?php if($userdata->partner_religion_id=="Buddhism")echo 'selected'; ?> > Buddhism </option>
                                       <option value="Jainism"  <?php if($userdata->partner_religion_id=="Jainism")echo 'selected'; ?>> Jainism </option>
                                       <option value="Bahai"  <?php if($userdata->partner_religion_id=="Bahai")echo 'selected'; ?>> Bahai </option>
                                       <option value="Sikhism"  <?php if($userdata->partner_religion_id=="Sikhism")echo 'selected'; ?>> Sikhism </option>
                                       <option value="Confucianism"  <?php if($userdata->partner_religion_id=="Confucianism")echo 'selected'; ?>> Confucianism </option>
                                       <option value="Atheism" <?php if($userdata->partner_religion_id=="Atheism")echo 'selected'; ?>> Atheism </option>
                                       <option value="ertt" <?php if($userdata->partner_religion_id=="ertt")echo 'selected'; ?>> ertt </option>
                                    </select>
                                 </div>
                                 <div class="col-md-6">
                                    <label for="partner_caste_id">Caste</label>
                                    <input type="text" name="partner_caste_id" value="<?php echo $userdata->partner_caste_id; ?>" class="form-control" placeholder="Caste">
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <div class="col-md-6">
                                    <label for="partner_sub_caste_id">Sub Caste</label>
                                    <input type="text" name="partner_sub_caste_id" value="<?php echo $userdata->partner_caste_id; ?>" class="form-control" placeholder="Sub Caste">
                                 </div>
                                 <div class="col-md-6">
                                    <label for="language_id">Language</label>
                                    <select class="form-control aiz-selectpicker" name="language_id" data-live-search="true" required>
                                       <option value="">Select One</option>
                                       <option value="English"  <?php if($userdata->language_id=="English")echo 'selected'; ?> > English </option>
                                       <option value="German" <?php if($userdata->language_id=="German")echo 'selected'; ?> > German </option>
                                       <option value="Hindi"  <?php if($userdata->language_id=="Hindi")echo 'selected'; ?>> Hindi </option>
                                       <option value="Urdu" <?php if($userdata->language_id=="Urdu")echo 'selected'; ?> > Urdu </option>
                                       <option value="Arabic" <?php if($userdata->language_id=="Arabic")echo 'selected'; ?>> Arabic </option>
                                       <option value="Tamil" <?php if($userdata->language_id=="Tamil")echo 'selected'; ?>> Tamil </option>
                                       <option value="Chainese" <?php if($userdata->language_id=="Chainese")echo 'selected'; ?> > Chainese </option>
                                       <option value="Japanese" <?php if($userdata->language_id=="Japanese")echo 'selected'; ?> > Japanese </option>
                                       <option value="Datch"  <?php if($userdata->language_id=="Datch")echo 'selected'; ?>> Datch </option>
                                       <option value="Spanish"  <?php if($userdata->language_id=="Spanish")echo 'selected'; ?>> Spanish </option>
                                    </select>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <div class="col-md-6">
                                    <label for="pertner_education">Education</label>
                                    <input type="text" name="pertner_education" value="<?php echo $userdata->pertner_education; ?>" class="form-control" placeholder="Education">
                                 </div>
                                 <div class="col-md-6">
                                    <label for="partner_profession">Profession</label>
                                    <input type="text" name="partner_profession" value="<?php echo $userdata->partner_profession; ?>" class="form-control" placeholder="Profession">
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <div class="col-md-6">
                                    <label for="smoking_acceptable">Smoking Acceptable</label>
                                    <select class="form-control aiz-selectpicker" name="smoking_acceptable" required>
                                       <option value="yes" <?php if($userdata->smoking_acceptable=="Yes")echo 'selected'; ?> >Yes</option>
                                       <option value="no"  <?php if($userdata->smoking_acceptable=="No")echo 'selected'; ?>  >No</option>
                                       <option value="Does not matter" <?php if($userdata->smoking_acceptable=="Does not matter")echo 'selected'; ?> >Does not matter</option>
                                    </select>
                                 </div>
                                 <div class="col-md-6">
                                    <label for="drinking_acceptable">Drinking Acceptable</label>
                                    <select class="form-control aiz-selectpicker" name="drinking_acceptable" required>
                                       <option value="yes" <?php if($userdata->drinking_acceptable=="Yes")echo 'selected'; ?> >Yes</option>
                                       <option value="no"  <?php if($userdata->drinking_acceptable=="No")echo 'selected'; ?>  >No</option>
                                       <option value="Does not matter" <?php if($userdata->drinking_acceptable=="Does not matter")echo 'selected'; ?> >Does not matter</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <div class="col-md-6">
                                    <label for="partner_diet">Dieting Acceptable</label>
                                    <select class="form-control aiz-selectpicker" name="partner_diet" required>
                                       <option value="yes" <?php if($userdata->partner_diet=="Yes")echo 'selected'; ?> >Yes</option>
                                       <option value="no"  <?php if($userdata->partner_diet=="No")echo 'selected'; ?>  >No</option>
                                       <option value="Does not matter" <?php if($userdata->partner_diet=="Does not matter")echo 'selected'; ?> >Does not matter</option>
                                    </select>
                                 </div>
                                 <div class="col-md-6">
                                    <label for="partner_body_type">Body Type</label>
                                    <input type="text" name="partner_body_type" value="<?php echo $userdata->partner_body_type; ?>" class="form-control" placeholder="Body Type">
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <div class="col-md-6">
                                    <label for="partner_personal_value">Personal Value</label>
                                    <input type="text" name="partner_personal_value" value="<?php echo $userdata->partner_personal_value; ?>" class="form-control" placeholder="Personal Value">
                                 </div>
                                 <div class="col-md-6">
                                    <label for="partner_manglik">Manglik</label>
                                    <select class="form-control aiz-selectpicker" name="partner_manglik" required>
                                       <option value="yes" <?php if($userdata->partner_manglik=="Yes")echo 'selected'; ?> >Yes</option>
                                       <option value="no"  <?php if($userdata->partner_manglik=="No")echo 'selected'; ?>  >No</option>
                                       <option value="Does not matter" <?php if($userdata->partner_manglik=="Does not matter")echo 'selected'; ?> >Does not matter</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <div class="col-md-6">
                                    <label for="partner_country_id">Preferred Country</label>
                                    <select class="form-control aiz-selectpicker" name="partner_country_id" id="partner_country_id" data-live-search="true" required>
                                       <option value="">Select One</option>
                                       <option value="India" <?php if($userdata->partner_country_id=="India")echo 'selected'; ?>>India</option>
                                    </select>
                                 </div>
                                 <div class="col-md-6">
                                    <label for="partner_state_id">Preferred State</label>
                                    <input type="text" name="partner_state_id"  class="form-control" placeholder="Preferred State" value="<?php echo $userdata->partner_state_id; ?>" required>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <div class="col-md-6">
                                    <label for="family_value_id2">Family Value</label>
                                    <select class="form-control aiz-selectpicker" name="family_value_id2" >
                                       <option value="">Select One</option>
                                       <option value="Liberall"  <?php if($userdata->family_value_id2=="Liberall")echo 'selected'; ?> > Liberall </option>
                                       <option value="Moderate"  <?php if($userdata->family_value_id2=="Moderate")echo 'selected'; ?> > Moderate </option>
                                       <option value="Traditional"  <?php if($userdata->family_value_id2=="Traditional")echo 'selected'; ?> > Traditional </option>
                                       <option value="Xanthus Collins"  <?php if($userdata->family_value_id2=="Xanthus Collins")echo 'selected'; ?> > Xanthus Collins </option>
                                    </select>
                                 </div>
                                 <div class="col-md-6">
                                    <label for="pertner_complexion">Complexion</label>
                                    <input type="text" name="pertner_complexion" value="<?php echo $userdata->pertner_complexion; ?>" class="form-control" placeholder="Complexion" required>
                                 </div>
                              </div>
                              <span id="partner_expect-msg"></span>
                              <div class="text-right">
                                 <button type="submit" class="btn btn-primary btn-sm">Update</button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
        <?php $this->load->view("footer"); ?>