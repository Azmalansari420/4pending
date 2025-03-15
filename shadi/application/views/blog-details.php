    <?php $this->load->view("header"); ?>


        
<section class="py-4 memeber-list">
    <div class="container">
        <div class="mb-4">
            <img src="<?php echo base_url(); ?>media/uploads/blog/<?php echo $EDITDATA[0]->image; ?>" data-src="<?php echo base_url(); ?>media/uploads/blog/<?php echo $EDITDATA[0]->image; ?>" alt="<?php echo $EDITDATA[0]->name; ?>" class="img-fluid lazyload w-100">
        </div>
        <div class="row">
            <div class="col-xl-8 mx-auto">
                <div class="bg-white rounded shadow-sm p-4"> 
                    <div class="border-bottom">
                        <h1 class="h4"><?php echo $EDITDATA[0]->name; ?></h1>
                        <!-- <div class="mb-2 opacity-50">
                            <i>Life Partner</i>
                        </div> -->
                    </div>
                    <div class="mb-4 overflow-hidden">
                        <!-- <h3 style="margin-bottom: 10px; font-weight: bold; line-height: 1.1; font-size: 1.8em; text-align: left; font-family: &quot;Open Sans&quot;, sans-serif; color: rgb(37, 48, 102);"><em>Annas Take:</em></h3> -->
                        <?php echo $EDITDATA[0]->content; ?>
                    </div>    
                </div>
            </div>
        </div>
    </div>
</section>

    <?php $this->load->view("footer"); ?>
