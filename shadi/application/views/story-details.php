<?php $this->load->view("header"); ?>

         <section class="py-5 text-center bg-white memeber-list">
            <div class="container">
               <div class="row">
                  <div class="col-xl-8 mx-auto">
                     <h1 class="fw-600 h2 lh-1-5 text-dark"><?php echo $EDITDATA[0]->name; ?></h1>
                     <div>
                        <span class="opacity-40">Posted On:</span>
                       <!--  <a href="" class="c-pointer text-primary">
                        Donna J. Perryman
                        </a> -->
                        <!-- <span class="opacity-40">On:</span> -->
                        <span class="opacity-70"><?php echo date('d M Y',strtotime($EDITDATA[0]->addeddate)); ?></span>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="py-4 bg-white">
            <div class="container">
               <div class="aiz-carousel dots-inside-bottom" data-arrows="true" data-dots="true" data-autoplay="true">
                  <div class="carousel-box">
                     <img class="d-block lazyload img-fluid mx-auto" src="<?php echo base_url(); ?>media/uploads/happy_story/<?php echo $EDITDATA[0]->image; ?>" data-src="<?php echo base_url(); ?>media/uploads/happy_story/<?php echo $EDITDATA[0]->image; ?>" alt="A love story Could begin Anywhere.">
                  </div>
               </div>
               <div class="row">
                  <div class="col-xl-12 mx-auto">
                     <div class="py-4">
                        <div class="overflow-hidden mb-4 lh-1-8">
                           <?php echo $EDITDATA[0]->content; ?>
                        </div>

                        <div class="">
                           <div class="embed-responsive embed-responsive-16by9">
                              <?php echo $EDITDATA[0]->youtube; ?>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <?php $this->load->view("footer"); ?>