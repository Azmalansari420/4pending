  <?php include('header.php'); ?>

    <!-- Breadcrumb -->
    <div class="pq-breadcrumb">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <div class="pq-breadcrumb-title">
                            <h1>HM Shirts</h1>
                        </div>
                        
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb -->

    <!-- Portfolio Single -->
    <section class="portfolio-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 pq-mb-30">
                    <div class="owl-carousel owl-loaded owl-drag" data-dots="false" data-nav="false" data-desk_num="1" data-lap_num="1" data-tab_num="1" data-mob_num="1" data-mob_sm="1" data-autoplay="true" data-loop="true" data-margin="0">
                        <div class="item">
                            <img src="images/portfolio-single/1.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="item">
                            <img src="images/portfolio-single/2.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="item">
                            <img src="images/portfolio-single/3.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                    
                </div>

                <div class="col-lg-7">
                    <div class="">
                        <div class="product-details">

                            <!-- Title -->
                            <h2 class="product-title">HM Shirts</h2>

                            <!-- Price -->
                            <div class="product-price">₹ 49.00</div>

                            <!-- Color -->
                            <div class="product-option">
                                <h6>Select Color</h6>
                                <div class="color-selector">
                                    <div style="background:red;" class="active"></div>
                                    <div style="background:black;"></div>
                                    <div style="background:blue;"></div>
                                </div>
                            </div>

                            <!-- Size -->
                            <div class="product-option">
                                <h6>Select Size</h6>
                                <div class="size-selector">
                                    <button>S</button>
                                    <button class="active">M</button>
                                    <button>L</button>
                                    <button>XL</button>
                                </div>
                            </div>

                            <!-- Add to Cart -->
                            <div class="add-to-cart-btn">
                                <button  data-bs-toggle="modal" data-bs-target="#myModal">Enquiry Now</button>
                            </div>

                        </div>                    
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- Portfolio Single -->

   <?php include('footer.php'); ?>


   <!-- model -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Enquiry Now</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <form class="pq-applyform">
            <div class="row">
                <div class="col-lg-12">
                    <input type="text" placeholder="Enter Name">
                </div>
                <div class="col-lg-6 col-md-6">
                    <input type="email" placeholder="Email Address">
                </div>
                <div class="col-lg-6 col-md-6">
                    <input type="text" placeholder="Phone Number">
                </div>
                <div class="col-lg-12">
                    <select>
                        <option value="Service 1" selected>Service 1</option>
                        <option value="Service 2">Service 2</option>
                        <option value="Service 3">Service 3</option>
                        <option value="Service 4">Service 4</option>
                    </select>
                </div>
                <div class="col-lg-12">
                    <textarea cols="40" rows="10" placeholder="Message"></textarea>
                </div>
                <div class="col-lg-12">
                    <a href="#" class="pq-button">SUBMIT</a>
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>