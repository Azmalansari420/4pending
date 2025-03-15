<?php $this->load->view("header"); ?>


        <section class="pt-6 pb-4 bg-white text-center memeber-list">
    <div class="container">
        <h1 class="mb-0 fw-600 text-dark">Select Your Package</h1>
    </div>
</section>

<section class="py-5 bg-white">
    <div class="container">
        <div class="aiz-carousel" data-items="4" data-xl-items="3" data-md-items="2" data-sm-items="1" data-dots='true' data-infinite='true' data-autoplay='true'>
                <?php
                $plans = $this->crud->selectDataByMultipleWhere('plans',array('status'=>1,));
                foreach($plans as $data)
                    { ?>
            <div class="carousel-box">
                <div class="overflow-hidden shadow-none border-right">
                    <div class="card-body">
                        <div class="text-center mb-4 mt-3">
                            <img class="mw-100 mx-auto mb-4" src="<?php echo base_url(); ?>media/uploads/plans/<?php echo $data->image; ?>" height="130">
                            <h5 class="mb-3 h5 fw-600"><?php echo $data->name; ?></h5>
                        </div>
                        <ul class="list-group list-group-raw fs-15 mb-5">
                            <?php
                            if(!empty($data->field_1))
                                { ?>
                            <li class="list-group-item py-2">
                                <i class="las la-check text-success mr-2"></i>
                                <?php echo $data->field_1; ?>
                            </li>
                        <?php } ?>
                             <?php
                            if(!empty($data->field_2))
                                { ?>
                            <li class="list-group-item py-2">
                                <i class="las la-check text-success mr-2"></i>
                                <?php echo $data->field_2; ?>
                            </li>
                        <?php } ?>
                         <?php
                            if(!empty($data->field_3))
                                { ?>
                            <li class="list-group-item py-2">
                                <i class="las la-check text-success mr-2"></i>
                                <?php echo $data->field_3; ?>
                            </li>
                        <?php } ?>
                         <?php
                            if(!empty($data->field_4))
                                { ?>
                            <li class="list-group-item py-2">
                                <i class="las la-check text-success mr-2"></i>
                                <?php echo $data->field_4; ?>
                            </li>
                        <?php } ?>
                         <?php
                            if(!empty($data->field_5))
                                { ?>
                            <li class="list-group-item py-2">
                                <i class="las la-check text-success mr-2"></i>
                                <?php echo $data->field_5; ?>
                            </li>
                        <?php } ?>
                         <?php
                            if(!empty($data->field_6))
                                { ?>
                            <li class="list-group-item py-2">
                                <i class="las la-check text-success mr-2"></i>
                                <?php echo $data->field_6; ?>
                            </li>
                        <?php } ?>

                        </ul>
                        <div class="mb-5 text-dark text-center">
                            <span class="display-4 fw-600 lh-1 mb-0"><?php echo $data->price; ?></span>
                            <span class="text-secondary d-block"><?php echo $data->days; ?></span>
                        </div>
                        <!-- <div class="text-center">
                            <a href="javascript:void(0);" class="btn btn-light" ><del>Purchase This Package</del></a>
                        </div> -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary" tabindex="0">Purchase This Package</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

       <?php $this->load->view("footer"); ?>
