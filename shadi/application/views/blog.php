    <?php $this->load->view("header"); ?>

        
<section class="pt-4 mb-4 memeber-list">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-6 text-center text-lg-left">
                <h1 class="fw-600 h4">Blog</h1>
            </div>
            <div class="col-lg-6">
                <ul class="breadcrumb bg-transparent p-0 justify-content-center justify-content-lg-end">
                    <li class="breadcrumb-item opacity-50">
                        <a class="text-reset" href="<?php echo base_url(); ?>">
                            Home
                        </a>
                    </li>
                    <li class="text-dark fw-600 breadcrumb-item">
                        <a class="text-reset" href="<?php echo base_url(); ?>blog">
                            "Blog"
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="pb-4">
    <div class="container">
        <div class="card-columns">

            <?php
              $this->db->order_by('id desc');
              $blog = $this->crud->selectDataByMultipleWhere('blog',array('status'=>1,));
              foreach($blog as $data)
                 { ?>
                <div class="card mb-3 overflow-hidden shadow-sm">
                    <a href="<?php echo base_url('blog-details/'.$data->slug); ?>" class="text-reset d-block">
                        <img src="<?php echo base_url(); ?>media/uploads/blog/<?php echo $data->image; ?>" data-src="<?php echo base_url(); ?>media/uploads/blog/<?php echo $data->image; ?>" alt="<?php echo $data->name; ?>" class="img-fluid lazyload ">
                    </a>
                    <div class="p-4">
                        <h2 class="fs-18 fw-600 mb-1">
                            <a href="<?php echo base_url('blog-details/'.$data->slug); ?>" class="text-reset"><?php echo $data->name; ?></a>
                        </h2>
                        <!-- <div class="mb-2 opacity-50">
                            <i>Weeding Tips</i>
                        </div> -->
                       <!--  <p class="opacity-70 mb-4">
                            The leaders have a vision for the future and meet regularly to plan how to achieve their goals. Most couples stop thinking critically about their relationship after the initial honeymoon stage.
                        </p> -->
                        <a href="<?php echo base_url('blog-details/'.$data->slug); ?>" class="btn btn-soft-primary">View More</a>
                    </div>
                </div>
            <?php } ?>                        
        </div>

        <!-- <div class="aiz-pagination aiz-pagination-center mt-4">
            
        </div> -->
    </div>
</section>

        <?php $this->load->view("footer"); ?>