<?php 
$userdata = $this->crud->selectDataByMultipleWhere('registration',array('id'=>temp_session_id('id')));
// print_r($userdata);
// $getuserid = $user_id[0]->id;
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
                    <div class="aiz-titlebar mt-2 mb-4">
                       <div class="row align-items-center">
                          <div class="col-md-6">
                             <h1 class="h3">Gallery Images</h1>
                          </div>
                       </div>
                    </div>
                    <?php echo $this->session->flashdata('user_gallery_message'); ?>
                    <div class="row gutters-10">
                       <div class="col-md-5 mx-auto mb-3" >
                          <div class="bg-grad-1 text-white rounded-lg overflow-hidden">
                             <span class="size-30px rounded-circle mx-auto bg-soft-primary d-flex align-items-center justify-content-center mt-3">
                             <i class="las la-image la-2x text-white"></i>
                             </span>
                             <div class="px-3 pt-3 pb-3">
                                <div class="h4 fw-700 text-center"><?php $this->db->where('user_id',$userdata[0]->id);
                                            $query = $this->db->get('user_images');
                                            echo $query->num_rows(); ?></div>
                                <div class="opacity-50 text-center">Gallery Image Upload</div>
                             </div>
                          </div>
                       </div>
                       <div class="col-md-5 mx-auto mb-3" >
                          <form method="POST" action="<?php echo base_url('user/user_gallery_upload');?>" enctype="multipart/form-data">
                             <div class="p-3 rounded mb-3 c-pointer text-center bg-white shadow-sm hov-shadow-lg has-transition">
                                <label class="size-60px rounded-circle mx-auto bg-secondary d-flex align-items-center justify-content-center mb-3">
                                    <input type="file" name="images[]" multiple required>
                                </label>
                                <button type="submit" name="submit" class="btn btn-primary">Add New Images</button>
                             </div>
                          </form>
                       </div>
                    </div>

                    <div class="card-columns">

                     <?php
                     $this->db->order_by('id desc');
                     $usergallery = $this->crud->selectDataByMultipleWhere('user_images',array('user_id'=>$userdata[0]->id,));
                     foreach($usergallery as $data)
                     { 
                     ?>

                       <div class="card hov-overlay">
                          <img src="<?php echo base_url(); ?>media/uploads/user_images/<?php echo $data->images; ?>" class="card-img" alt="Image">
                          <div class="overlay">
                             <div class="absolute-center">
                                <a target="_blank" href="<?php echo base_url(); ?>media/uploads/user_images/<?php echo $data->images; ?>" class="btn btn-light btn-icon btn-circle btn-sm" title="View">
                                    <i class="las la-search"></i>
                                </a>

                                <a href="<?php echo base_url('user/user_gallery_upload_delete/'.$data->id); ?>" class="btn btn-light btn-icon btn-circle btn-sm" title="Remove">
                                    <i class="las la-trash-alt"></i>
                                </a>
                             </div>
                          </div>
                       </div>
                    <?php } ?>

                       
                    </div>
                 </div>
              </div>
           </div>
        </section>
<?php $this->load->view("footer"); ?>