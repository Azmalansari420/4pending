<?php include('header.php'); ?>

    <!-- Breadcrumb -->
    <div class="pq-breadcrumb">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <div class="pq-breadcrumb-title">
                            <h1>Men’s Wear</h1>
                        </div>
                        
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb -->

    <style>
   




.section-desc {
    font-size: 18px;
    color: #000;
    line-height: 1.8;
    /*max-width: 500px;*/
}

.btn-shop {
    display: inline-block;
    padding: 12px 28px;
    background: #caa34d;
    color: #fff;
    border-radius: 30px;
    text-decoration: none;
    font-weight: 500;
    transition: 0.3s;
}

.btn-shop:hover {
    background: #000;
    color: #fff;
}

.men-section-img img {
    transition: transform 0.4s ease;
}

.men-section-img:hover img {
    transform: scale(1.05);
}

/* MAIN IMAGE */
.image-main img {
    border-radius: 12px;
    box-shadow: 0 25px 60px rgba(0,0,0,0.15);
}

/* IMAGE STACK */
.image-stack {
    position: relative;
    height: 100%;
}

/* BIG IMAGE */
.img-big {
    width: 70%;
    margin-left: auto;
}

.img-big img {
    border-radius: 12px;
    box-shadow: 0 20px 50px rgba(0,0,0,0.2);
}

/* SMALL IMAGE */
.img-small {
    position: absolute;
    bottom: -40px;
    left: 0;
    width: 55%;
    z-index: 2;
}

.img-small img {
    border-radius: 12px;
    box-shadow: 0 15px 40px rgba(0,0,0,0.2);
}

/* TEXT IMPROVEMENT */
.section-title {
    font-size: 38px;
    font-weight: 700;
    line-height: 1.3;
}

.section-desc {
    font-size: 18px;
    color: #000;
    line-height: 1.9;
}

/* BUTTON */
.btn-shop {
    background: #caa34d;
    padding: 12px 30px;
    border-radius: 30px;
    color: #fff;
    display: inline-block;
    transition: 0.3s;
}

.btn-shop:hover {
    background: #000;
}

/* RESPONSIVE */
@media(max-width: 991px){
    .img-small {
        position: relative;
        bottom: 0;
        margin-bottom: 20px;
        width: 100%;
    }

    .img-big {
        width: 100%;
        display: none;
    }
}
    </style>

    <!-- Masonry -->
    <section class="masonry" style="padding-top: 70px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pq-filters">
                        <div class="filters pq-filter-button-group">
                            <ul>
                                <li class="active pq-filter-btn"><a href="men-clothing.php" class="text-white">Men’s Wear</a></li>
                                <li class=" pq-filter-btn"><a href="women-clothing.php" class="text-dark">Women’s Wear</a></li>
                                <li class=" pq-filter-btn"><a href="kids-clothing.php" class="text-dark">Kids Wear</a></li>
                                <li class=" pq-filter-btn"><a href="innerwear.php" class="text-dark">Innerwear</a></li>
                            </ul>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>



        <div class="container py-5">
          <div class="row align-items-center">

            <!-- LEFT BIG IMAGE -->
            <div class="col-lg-6 position-relative mb-5 mb-lg-0">
              <div class="image-main text-center">
                <img src="https://www.richaglobal.com/images/mens-pic1.jpg" 
                     class="img-fluid w-58" alt="">
              </div>
            </div>

            <!-- RIGHT CONTENT -->
            <div class="col-lg-6 ps-lg-5">
              <span class="section-tag mb-2 d-inline-block text-end">
                <img src="images/section-title/title-icon-primary.png" class="me-2">
                Men's Wear
              </span>

              <h2 class="section-title mt-2">
                Step Into Style With <span>Biglom’s Signature Collection</span>
              </h2>

              <p class="section-desc mt-3">
                A perfect fusion of modern and traditional men's fashion, offering 
                premium formal and casual wear—crafted with care, quality, and sustainable practices.
              </p>

            </div>

          </div>

          <!-- SECOND ROW -->
          <div class="row mt-5 align-items-center">

            <!-- TEXT -->
            <div class="col-lg-6">
              <p class="section-desc">
                With Biglom menswear, you’re always ready for every moment and every destination. 
                We offer a diverse range of men’s apparel including hoodies, T-shirts, shirts, jackets, 
                and more. Crafted using modern technology and expert craftsmanship, our designs ensure 
                comfort, durability, and style.
              </p>
            </div>

            <!-- OVERLAP IMAGES -->
            <div class="col-lg-6 position-relative mt-4 mt-lg-0">

              <div class="image-stack">

                <!-- SMALL IMAGE -->
                <div class="img-small">
                  <img src="https://www.richaglobal.com/images/mens-pic2a.jpg" class="img-fluid">
                </div>

                <!-- BIG IMAGE -->
                <div class="img-big">
                  <img src="https://www.richaglobal.com/images/mens-pic3a.jpg" class="img-fluid">
                </div>

              </div>

            </div>

          </div>
        </div>



    </section>
    <!-- Masonry -->

 <?php include('footer.php'); ?>