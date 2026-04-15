<?php include('header.php'); ?>

    <!-- Breadcrumb -->
    <div class="pq-breadcrumb">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <div class="pq-breadcrumb-title">
                            <h1>Women’s Wear</h1>
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
                                <li class="pq-filter-btn"><a href="men-clothing.php" class="text-dark">Men’s Wear</a></li>
                                <li class="active pq-filter-btn"><a href="women-clothing.php" class="text-white">Women’s Wear</a></li>
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
                <img src="https://www.richaglobal.com/images/innerpage/whatwedo1.jpg" 
                     class="img-fluid w-58" alt="">
              </div>
            </div>

            <!-- RIGHT CONTENT -->
            <div class="col-lg-6 ps-lg-5">
              <span class="section-tag mb-2 d-inline-block text-end">
                <img src="images/section-title/title-icon-primary.png" class="me-2">
                Women's Wear
              </span>

              <h2 class="section-title mt-2">At Biglom, we celebrate modern elegance, setting new standards in contemporary women’s fashion.</h2>
              <p class="section-desc mt-3">Every creation is designed with precision and attention to detail, reflecting our commitment to quality and craftsmanship. With Biglom, we redefine style and versatility—empowering the modern woman with confidence, grace, and timeless appeal</p>

            </div>

          </div>

          <!-- SECOND ROW -->
          <div class="row mt-5 align-items-center">

            <!-- TEXT -->
            <div class="col-lg-6">
              <p class="section-desc">Explore Biglom’s versatile collection featuring tops, dresses, jackets, and sweatshirts, crafted in premium fabrics like woven, knit, linen, and denim—perfectly suited for both work and leisure. Our expertise in innovative apparel graphics allows us to create designs that match your unique style and evolving preferences.<br>At Biglom, we go beyond fashion—we inspire confidence. Our collections are thoughtfully curated to help every woman express her individuality with ease. Whether you’re looking for everyday essentials or standout statement pieces, Biglom has something for every mood and every occasion.</p>
            </div>

            <!-- OVERLAP IMAGES -->
            <div class="col-lg-6 position-relative mt-4 mt-lg-0">

              <div class="image-stack">

                <!-- SMALL IMAGE -->
                <div class="img-small">
                  <img src="https://www.richaglobal.com/images/innerpage/whatwedo2.jpg" class="img-fluid">
                </div>

                <!-- BIG IMAGE -->
                <div class="img-big">
                  <img src="https://www.richaglobal.com/images/innerpage/whatwedo3.jpg" class="img-fluid">
                </div>

              </div>

            </div>

          </div>
        </div>



    </section>


    <style>
        .what_women5 {
    padding: 80px 0;
    padding-top: 0;
}

/* IMAGE STYLE */
.what_women5 figure {
    overflow: hidden;
    border-radius: 10px;
}

.what_women5 img {
    width: 100%;
    border-radius: 10px;
    transition: 0.4s ease;
}

.what_women5 figure:hover img {
    transform: scale(1.05);
}

/* STAGGER EFFECT (TOP ROW) */
.what_women5 .col-lg-4:nth-child(1) {
    margin-top: 40px;
}

.what_women5 .col-lg-4:nth-child(2) {
    margin-top: 0;
}

.what_women5 .col-lg-4:nth-child(3) {
    margin-top: 60px;
}

/* CONTENT BOX */
.women_content5 {
    margin-top: 20px;
}

.women_content5 .dash {
    font-size: 15px;
    color: #444;
    margin-bottom: 8px;
    display: flex;
    align-items: center;
}

.women_content5 .dash strong {
    color: #caa34d;
    margin-right: 8px;
}

/* SHADOW IMAGE */
.image_shadow img {
    box-shadow: 0 20px 50px rgba(0,0,0,0.15);
}

/* BOTTOM OFFSET IMAGE */
.single_image {
    margin-top: 60px;
}

.single_image .col-lg-6 {
    position: relative;
}

/* OFFSET RIGHT ALIGN */
.single_image .col-lg-6 {
    margin-left: auto;
}

/* RESPONSIVE */
@media (max-width: 991px) {

    .what_women5 .col-lg-4 {
        margin-top: 0 !important;
        margin-bottom: 25px;
    }

    .single_image .col-lg-6 {
        margin-left: 0;
    }
}
    </style>

    <section class="what_women5">
<div class="container">
<div class="row">
<div class="col-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1200">
<figure><img src="https://www.richaglobal.com/images/innerpage/whatwedo5.jpg" alt="Women" class="img-fluid w-100 image2 reveal-image2"></figure>
<div class="women_content5 aos-init" data-aos="fade-up" data-aos-duration="1700">
<p class="dash"><strong>-</strong> Tops</p>
<p class="dash"><strong>-</strong> Dresses</p>
<p class="dash"><strong>-</strong> Jackets</p>
<p class="dash"><strong>-</strong> Sweatshirts</p>
</div>
</div>
<div class="col-lg-4 aos-init" data-aos="fade-up" data-aos-duration="1300">
<figure><img src="https://www.richaglobal.com/images/innerpage/whatwedo6.jpg" alt="Women" class="img-fluid w-100 image2 reveal-image2"></figure>
</div>
<div class="col-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1400">
<figure class="image_shadow"><img src="https://www.richaglobal.com/images/innerpage/whatwedo7.jpg" alt="Women" class="img-fluid w-100 image2 reveal-image2"></figure>
</div>
</div>
<div class="single_image aos-init" data-aos="fade-up" data-aos-duration="1500">
<div class="row">
<div class="col-lg-6 offset-lg-4">
<figure class="image_shadow"><img src="https://www.richaglobal.com/images/innerpage/whatwedo8.jpg" alt="Women" class="img-fluid w-100 image2 reveal-image2"></figure>
</div>
</div>
</div>
</div>
</section>
    <!-- Masonry -->

 <?php include('footer.php'); ?>