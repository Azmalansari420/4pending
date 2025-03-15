<?php $this->load->view("header"); ?>

        <section class="pt-6 pb-4 bg-white text-center memeber-list">
    <div class="container">
        <h1 class="fw-600 text-dark">Happy Stories</h1>
    </div>
</section>
<section class="pt-5 pb-4 bg-white">
    <div class="container">
        <div class="card-columns column-gap-10 card-columns-xl-3 card-columns-md-2 card-columns-1">
            <?php 
              $this->db->order_by('id desc');
              $story = $this->crud->selectDataByMultipleWhere('happy_story',array('status'=>1,));
              foreach($story as $data)

              { ?>
            <div class="card mb-3 shadow-none">
                <a href="<?php echo base_url('story-details/'.$data->slug); ?>" class="text-reset d-block mb-4">
                    <img src="<?php echo base_url(); ?>media/uploads/happy_story/<?php echo $data->image; ?>" class="img-fluid">
                </a>
                <div class="p-3">
                    <h2 class="h5"><a href="<?php echo base_url('story-details/'.$data->slug); ?>" class="text-dark"><?php echo $data->name; ?></a></h2>
                    <div class="mb-3">
                        <span class="opacity-40">Posted On:</span>
                        <span class="opacity-70"><?php echo date('d M Y',strtotime($data->addeddate)); ?></span>
                    </div>
                    <a href="<?php echo base_url('story-details/'.$data->slug); ?>" class="btn btn-primary mt-2">View Details</a>
                </div>
            </div>  
            <?php } ?>              
        </div>

        <!-- 
        <div class="aiz-pagination aiz-pagination-center mt-4">
            
        </div> -->
    </div>
</section>

    <?php $this->load->view("footer"); ?>
