<?php include('header.php'); ?>
   <!-- Banner -->
   <div class="banner py-0">
      <div class="banner-top">
       <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
         <!-- Indicators -->
         <div class="carousel-indicators">
           <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></button>
           <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></button>
           <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></button>
         </div>

         <!-- Slides -->
         <div class="carousel-inner">
           <div class="carousel-item active">
             <img src="images/3.png" class="d-block w-100" alt="">                
           </div>

           <div class="carousel-item">
             <img src="images/2.png" class="d-block w-100" alt="">
           </div>

           <div class="carousel-item">
             <img src="images/1.png" class="d-block w-100" alt="">
           </div>
         </div>

       </div>
     </div>
   </div>
   <!-- Banner -->

   <section class="about-us pb-0">
      <div class="container">
         <div class="row">
            
            <div class="col-xl-5 mt-4 mt-xl-0 ps-xl-5 wow animated fadeInRight">
               <div class="pq-section-title pq-style-1 pq-mb-30">
                  <span class="pq-section-sub-title">
                  <img decoding="async" src="images/section-title/title-icon-primary.png" alt="image">Our Products
                  </span>
                  <h5 class="pq-section-main-title">latest Desing</h5>
                  <p class="pq-section-description">BIGLOM is a trusted apparel manufacturer and exporter offering premium clothing across men, women, and kids wear with sustainable fabrics and global quality standards.</p>
               </div>
               <ul class="pq-list-check pq-mb-45">
                  <li>
                     <i class="fas fa-check-circle"></i>
                     <span>Premium apparel manufacturing for global export markets </span>
                  </li>
                  <li>
                     <i class="fas fa-check-circle"></i>
                     <span>Sustainable fabrics with high quality production standards </span>
                  </li>
                  <li>
                     <i class="fas fa-check-circle"></i>
                     <span>Wide range across men women kids and innerwear </span>
                  </li>
                  <li>
                     <i class="fas fa-check-circle"></i>
                     <span>Reliable bulk supply with timely delivery assurance</span>
                  </li>
               </ul>
               
            </div>

            <style>
               .filter-wrapper {
    width: 100%;
    padding: 20px;
}

/* MENU */
.filter-menu {
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
    list-style: none;
    padding: 0;
    margin-bottom: 20px;
}

.filter-menu li {
    padding: 8px 15px;
    background: #eee;
    cursor: pointer;
    border-radius: 5px;
}

.filter-menu li.active {
    background: #000;
    color: #fff;
}

/* GRID */
.filter-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 15px;
}

/* ITEMS */
.filter-item {
    display: none;
    background: #fff;
    border-radius: 8px;
    overflow: hidden;
    text-align: center;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.filter-item img {
    width: 200px;
    height: 300px;
    object-fit: cover;
}

.filter-item h4 {
    padding: 10px;
    font-size: 16px;
}
            </style>

            <div class="col-xl-7">
               <div class="row">
                   <div class="col-lg-12">
                       <div class="filter-wrapper">

                         <!-- FILTER BUTTONS -->
                         <ul class="filter-menu">
                             <li class="active" data-filter="men">Men’s Wear</li>
                             <li data-filter="women">Women’s Wear</li>
                             <li data-filter="kids">Kids Wear</li>
                             <li data-filter="inner">Innerwear</li>
                         </ul>

                         <!-- ITEMS -->
                         <div class="filter-container">

                             <div class="filter-item men">
                                 <img src="https://www.richaglobal.com/images/mens-pic2a.jpg">
                                 <!-- <h4>Men T-Shirt</h4> -->
                             </div>

                             <div class="filter-item women">
                                 <img src="images/portfolio/masonry/2.jpg">
                                 <h4>Women Dress</h4>
                             </div>

                             <div class="filter-item kids">
                                 <img src="images/portfolio/masonry/3.jpg">
                                 <h4>Kids Wear</h4>
                             </div>

                             <div class="filter-item inner">
                                 <img src="images/portfolio/masonry/4.jpg">
                                 <h4>Innerwear</h4>
                             </div>

                            

                         </div>

                     </div>

                    </div>


                 </div>
            </div> 

            <!-- <div class="col-xl-6">
               <div class="pq-about-us-img">
                  <img src="images/1biglom.jpeg" class="pq-about-us-img-1 wow animated fadeInLeft" alt="">
                  <img src="images/2biglom.png" class="pq-about-us-img-2 wow animated zoomIn" alt="">
               </div>
            </div> -->

         </div>
      </div>
   </section>

<!-- About Us -->
   <section class="about-us pb-4">
      <div class="container">
         <div class="row">
            <div class="col-xl-6">
               <div class="pq-about-us-img">
                  <img src="images/about-us/3.jpg" class="pq-about-us-img-1 wow animated fadeInLeft" alt="">
                  <img src="images/about-us/4.jpg" class="pq-about-us-img-2 wow animated zoomIn" alt="">
               </div>
            </div>
            <div class="col-xl-6 mt-4 mt-xl-0 ps-xl-5 wow animated fadeInRight">
               <div class="pq-section-title pq-style-1 pq-mb-30">
                  <span class="pq-section-sub-title">
                  <img decoding="async" src="images/section-title/title-icon-primary.png" alt="image">About Us
                  </span>
                  <h5 class="pq-section-main-title">Global Apparel Exporter & Manufacturer</h5>
                  <p class="pq-section-description">BIGLOM is a trusted apparel manufacturer and exporter offering premium clothing across men, women, and kids wear with sustainable fabrics and global quality standards.</p>
               </div>
               <ul class="pq-list-check pq-mb-45">
                  <li>
                     <i class="fas fa-check-circle"></i>
                     <span>Premium apparel manufacturing for global export markets </span>
                  </li>
                  <li>
                     <i class="fas fa-check-circle"></i>
                     <span>Sustainable fabrics with high quality production standards </span>
                  </li>
                  <li>
                     <i class="fas fa-check-circle"></i>
                     <span>Wide range across men women kids and innerwear </span>
                  </li>
                  <li>
                     <i class="fas fa-check-circle"></i>
                     <span>Reliable bulk supply with timely delivery assurance</span>
                  </li>
               </ul>
               <a class="pq-button pq-button-flat" href="about-us.html">
                  <div class="pq-button-block">
                     <span class="pq-button-text">Read more</span>
                     <svg xmlns="http://www.w3.org/2000/svg" class="pq-svg-arrow" width="34.899" height="14.585"
                        viewBox="0 0 34.899 14.585">
                        <path
                           d="M.5,6.388c6.609,0,11.487-6.142,11.535-6.2a.6.6,0,0,1,.684-.131.33.33,0,0,1,.176.513A19.589,19.589,0,0,1,4.765,6.388H33.4c.275,0,.5.168.5.376s-.223.376-.5.376H4.765a19.591,19.591,0,0,1,8.128,5.822.331.331,0,0,1-.179.514.6.6,0,0,1-.68-.133c-.048-.062-4.926-6.2-11.535-6.2-.275,0-.5-.168-.5-.376S.223,6.388.5,6.388Z"
                           transform="translate(34.399 14.056) rotate(180)" fill="currentColor" stroke="currentColor"
                           stroke-width="1"></path>
                     </svg>
                  </div>
               </a>
            </div>
         </div>
      </div>
   </section>
<!-- About Us -->
<!-- Service -->
   <section class="product-section">
     <div class="container">
       
       <h2 class="section-title">Key Product Highlights</h2>
       <p class="section-subtitle">
         Our diverse range of premium apparel for <b>global markets.</b>
       </p>

       <div class="product-grid">

         
         <div class="card">
           <div class="icon">👕 👖</div>
           <h3>Men’s Wear Collection</h3>
           <p>T-Shirts, Shirts, Jeans & Jackets</p>
         </div>

         <!-- Card 2 -->
         <div class="card">
           <div class="icon">👗 🩳</div>
           <h3>Women’s Fashion Range</h3>
           <p>Tops, Pants & Trendy Apparel</p>
         </div>

         <!-- Card 3 -->
         <div class="card">
           <div class="icon">👶 👕</div>
           <h3>Kids Wear Segment</h3>
           <p>Baby Frocks & Kids Clothing</p>
         </div>

         <!-- Card 4 -->
         <div class="card">
           <div class="icon">🩲</div>
           <h3>Innerwear Essentials</h3>
           <p>Underwear & Banyan</p>
         </div>

         <!-- Card 5 -->
         <div class="card">
           <div class="icon">📏</div>
           <h3>All Size Availability</h3>
           <p>Full Range in All Sizes</p>
         </div>

         <!-- Card 6 -->
         <div class="card">
           <div class="icon">🏭 🌍</div>
           <h3>Bulk Production Ready</h3>
           <p>Large Scale Export Orders</p>
         </div>

       </div>
     </div>
   </section>
<!-- Service -->
   <!-- Client -->
   <section class="client pq-bg-dark pq-bg-img-4 pq-ddddpb-500 pb-0 wow animated fadeInUp">
      <div class="container">
         <div class="row">
            <div class="col-lg-3 col-md-4 pq-border-right">
               <div class="pq-counter pq-counter-default">
                  <div class="pq-counter-num-prefix">
                     <h4 class="text-white" >Export Markets</h4>
                  </div>
               </div>
            </div>
            <div class="col-lg-9 col-md-8 mt-4 mt-md-0 pq-ps-90">
               <div class="pq-client-box pq-client-style-1">
                  <div class="owl-carousel owl-loaded owl-drag" data-dots="false" data-nav="false" data-desk_num="5" data-lap_num="3" data-tab_num="2" data-mob_num="2" data-mob_sm="2" data-autoplay="false" data-loop="true" data-margin="30">
                     <div class="item">
                        <div class="pq-client-box pq-style-1">
                           <a>
                           <img decoding="async" src="https://flagcdn.com/w80/us.png" alt="pq-client-img" class="pq-client-img">
                           <img decoding="async" src="https://flagcdn.com/w80/us.png" alt="pq-client-img" class="pq-client-hover-img">
                           </a>
                        </div>
                     </div>
                     <div class="item">
                        <div class="pq-client-box pq-style-1">
                           <a>
                           <img decoding="async" src="https://flagcdn.com/w80/de.png" alt="pq-client-img" class="pq-client-img">
                           <img decoding="async" src="https://flagcdn.com/w80/de.png" alt="pq-client-img" class="pq-client-hover-img">
                           </a>
                        </div>
                     </div>
                     <div class="item">
                        <div class="pq-client-box pq-style-1">
                           <a>
                           <img decoding="async" src="https://flagcdn.com/w80/gb.png" alt="pq-client-img" class="pq-client-img">
                           <img decoding="async" src="https://flagcdn.com/w80/gb.png" alt="pq-client-img" class="pq-client-hover-img">
                           </a>
                        </div>
                     </div>
                     <div class="item">
                        <div class="pq-client-box pq-style-1">
                           <a>
                           <img decoding="async" src="https://flagcdn.com/w80/ae.png" alt="pq-client-img" class="pq-client-img">
                           <img decoding="async" src="https://flagcdn.com/w80/ae.png" alt="pq-client-img" class="pq-client-hover-img">
                           </a>
                        </div>
                     </div>
                     <div class="item">
                        <div class="pq-client-box pq-style-1">
                           <a>
                           <img decoding="async" src="https://flagcdn.com/w80/fr.png" alt="pq-client-img" class="pq-client-img">
                           <img decoding="async" src="https://flagcdn.com/w80/fr.png" alt="pq-client-img" class="pq-client-hover-img">
                           </a>
                        </div>
                     </div>
                     <div class="item">
                        <div class="pq-client-box pq-style-1">
                           <a>
                           <img decoding="async" src="https://flagcdn.com/w80/jp.png" alt="pq-client-img" class="pq-client-img">
                           <img decoding="async" src="https://flagcdn.com/w80/jp.png" alt="pq-client-img" class="pq-client-hover-img">
                           </a>
                        </div>
                     </div>
                     <div class="item">
                        <div class="pq-client-box pq-style-1">
                           <a>
                           <img decoding="async" src="https://flagcdn.com/w80/vn.png" alt="pq-client-img" class="pq-client-img">
                           <img decoding="async" src="https://flagcdn.com/w80/vn.png" alt="pq-client-img" class="pq-client-hover-img">
                           </a>
                        </div>
                     </div>
                     <div class="item">
                        <div class="pq-client-box pq-style-1">
                           <a>
                           <img decoding="async" src="https://flagcdn.com/w80/it.png" alt="pq-client-img" class="pq-client-img">
                           <img decoding="async" src="https://flagcdn.com/w80/it.png" alt="pq-client-img" class="pq-client-hover-img">
                           </a>
                        </div>
                     </div>
                     <div class="item">
                        <div class="pq-client-box pq-style-1">
                           <a>
                           <img decoding="async" src="https://flagcdn.com/w80/bd.png" alt="pq-client-img" class="pq-client-img">
                           <img decoding="async" src="https://flagcdn.com/w80/bd.png" alt="pq-client-img" class="pq-client-hover-img">
                           </a>
                        </div>
                     </div>
                     <div class="item">
                        <div class="pq-client-box pq-style-1">
                           <a>
                           <img decoding="async" src="https://flagcdn.com/w80/sa.png" alt="pq-client-img" class="pq-client-img">
                           <img decoding="async" src="https://flagcdn.com/w80/sa.png" alt="pq-client-img" class="pq-client-hover-img">
                           </a>
                        </div>
                     </div>

                  </div>
               </div>
            </div>
            <div class="col-lg-12 p-0">
               <div class="divider pq-pt-60"></div>
            </div>
         </div>
      </div>
   </section>
   <!-- Client -->

    <section class="process pq-process-bg-img pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pq-section-title pq-style-1 text-center">
                        <span class="pq-section-sub-title">
                            <img decoding="async" src="images/section-title/title-icon-primary.png" alt="image">OUR WORKING PROCESS
                        </span>
                        <h5 class="pq-section-main-title">Why Choose Us</h5>
                        <p>BIGLOM stands as a reliable apparel manufacturing partner for global buyers, delivering consistent quality, sustainable production, and timely bulk supply with a strong focus on customer satisfaction.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-6 col-md-6 pq-mt-60 wow animated fadeInLeft">
                    <div class="pq-process-step pq-style-1 text-center">
                        <div class="pq-process-media">
                            <img decoding="async" src="images/process-step/1.jpg" alt="image">
                            <span class="pq-process-number">step 1</span>
                        </div>
                        <div class="pq-process-info">
                            <h5 class="pq-process-title">Premium Quality Assurance</h5>
                            <p class="pq-process-description">Strict quality checks at every stage of production</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-6 mt-5 mt-md-0 pq-process-center wow animated fadeInUp">
                    <div class="pq-process-step pq-style-1 text-center">
                        <div class="pq-process-media">
                            <img decoding="async" src="images/process-step/2.jpg" alt="image">
                            <span class="pq-process-number">step 2</span>
                        </div>
                        <div class="pq-process-info">
                            <h5 class="pq-process-title">Sustainable Fabric Expertise</h5>
                            <p class="pq-process-description">Use of eco-friendly and certified materials</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 mt-5 mt-xl-0 pq-mt-60 wow animated fadeInRight">
                    <div class="pq-process-step pq-style-1 text-center">
                        <div class="pq-process-media">
                            <img decoding="async" src="images/process-step/3.jpg" alt="image">
                            <span class="pq-process-number">step 3</span>
                        </div>
                        <div class="pq-process-icon">
                            <i class="flaticon-sewing-machine"></i>
                        </div>
                        <div class="pq-process-info">
                            <h5 class="pq-process-title">Global Export Experience</h5>
                            <p class="pq-process-description">Serving multiple international markets with reliability</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-6 pq-mt-60 wow animated fadeInLeft">
                    <div class="pq-process-step pq-style-1 text-center">
                        <div class="pq-process-media">
                            <img decoding="async" src="images/process-step/1.jpg" alt="image">
                            <span class="pq-process-number">step 4</span>
                        </div>
                        <div class="pq-process-info">
                            <h5 class="pq-process-title">Wide Product Range</h5>
                            <p class="pq-process-description">Complete apparel solutions under one roof</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 mt-5 mt-md-0 pq-process-center wow animated fadeInUp">
                    <div class="pq-process-step pq-style-1 text-center">
                        <div class="pq-process-media">
                            <img decoding="async" src="images/process-step/2.jpg" alt="image">
                            <span class="pq-process-number">step 5</span>
                        </div>
                        <div class="pq-process-info">
                            <h5 class="pq-process-title">Bulk Order Capability</h5>
                            <p class="pq-process-description">Efficient handling of large-scale production needs</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 pq-mt-60 wow animated fadeInLeft">
                    <div class="pq-process-step pq-style-1 text-center">
                        <div class="pq-process-media">
                            <img decoding="async" src="images/process-step/1.jpg" alt="image">
                            <span class="pq-process-number">step 6</span>
                        </div>
                        <div class="pq-process-info">
                            <h5 class="pq-process-title">Wide Product Range</h5>
                            <p class="pq-process-description">Complete apparel solutions under one roof</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- Process -->


    <section class="process pq-process-bg-img pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pq-section-title pq-style-1 text-center">
                        <span class="pq-section-sub-title">
                            <img decoding="async" src="images/section-title/title-icon-primary.png" alt="image">Our Product
                        </span>
                        <h5 class="pq-section-main-title">Fabrics & Materials</h5>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">

                <div class="col-lg-4">
                    <div class="pq-blog-post">
                        <div class="pq-post-media">
                            <img src="https://www.sleeporganic.co.uk/cdn/shop/articles/If_all_farming_was_organic_research_suggests_that_pesticide_use_would_drop_by_98_._2_1200x.png?v=1643390762" class="img-fluid" alt="" decoding="async">
                        </div>
                        <div class="pq-blog-contain">
                            <h5 class="pq-blog-title text-center">
                                <a href="#!">Organic Cotton</a>
                            </h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="pq-blog-post">
                        <div class="pq-post-media">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS6bHRLf1WcaqH_gDc_gC_uftA5gsFgPbQDsg&s" class="img-fluid" alt="" decoding="async">
                        </div>
                        <div class="pq-blog-contain">
                            <h5 class="pq-blog-title text-center">
                                <a href="#!">Bamboo Fabric</a>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="pq-blog-post">
                        <div class="pq-post-media">
                            <img src="https://weavvehome.com/cdn/shop/articles/TENCEL_Lyocell_or_TENCEL_Modal_blue_bedsheet_2925e2fe-dcde-458d-89e2-02ca2ddcac98_1200x1200.jpg?v=1738470954" class="img-fluid" alt="" decoding="async">
                        </div>
                        <div class="pq-blog-contain">
                            <h5 class="pq-blog-title text-center">
                                <a href="#!">Bamboo Fabric</a>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="pq-blog-post">
                        <div class="pq-post-media">
                            <img src="https://www.arcusag.com/wp-content/uploads/2025/02/Is-Modal.webp" class="img-fluid" alt="" decoding="async">
                        </div>
                        <div class="pq-blog-contain">
                            <h5 class="pq-blog-title text-center">
                                <a href="#!">Modal Fabric</a>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="pq-blog-post">
                        <div class="pq-post-media">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTTvvVxG2fW47kWt_qCx4q5GID1szzt8WjYHA&s" class="img-fluid" alt="" decoding="async">
                        </div>
                        <div class="pq-blog-contain">
                            <h5 class="pq-blog-title text-center">
                                <a href="#!">Cotton Lining</a>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="pq-blog-post">
                        <div class="pq-post-media">
                            <img src="https://m.media-amazon.com/images/I/816Pnf6Eb+L.jpg" class="img-fluid" alt="" decoding="async">
                        </div>
                        <div class="pq-blog-contain">
                            <h5 class="pq-blog-title text-center">
                                <a href="#!">Silk Lining</a>
                            </h5>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </section>

   <!-- <section class="product-section mb-3">
     <div class="container">
       <h2 class="section-title">Fabrics & Materials</h2>
       <p class="section-subtitle">Our Product</p>
       <div class="product-grid">                  
         <div class="card">
           <div class="icon">👕 👖</div>
           <h3>Organic Cotton</h3>
           <p>T-Shirts, Shirts, Jeans & Jackets</p>
         </div>
         <div class="card">
           <div class="icon">👗 🩳</div>
           <h3>Bamboo Fabric</h3>
           <p>Tops, Pants & Trendy Apparel</p>
         </div>
         <div class="card">
           <div class="icon">👶 👕</div>
           <h3>Tencel (Lyocell)</h3>
           <p>Baby Frocks & Kids Clothing</p>
         </div>
         <div class="card">
           <div class="icon">🩲</div>
           <h3>Modal Fabric</h3>
           <p>Underwear & Banyan</p>
         </div>
         <div class="card">
           <div class="icon">📏</div>
           <h3>Cotton Lining</h3>
           <p>Full Range in All Sizes</p>
         </div>
         <div class="card">
           <div class="icon">🏭 🌍</div>
           <h3>Silk Lining</h3>
           <p>Large Scale Export Orders</p>
         </div>
       </div>
     </div>
   </section> -->

   <!-- Process -->
   <section class="process wow animated fadeInUp pt-0">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="pq-section-title pq-style-1 text-center">
                  <span class="pq-section-sub-title">
                  <img decoding="async" src="images/section-title/title-icon-primary.png" alt="image">our working process
                  </span>
                  <h5 class="pq-section-main-title">We Deliver Excellence In Every Stitch</h5>
               </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
               <div class="pq-circle-progress pq-circle-progress-style-1">
                  <div class="pq-circle-progress-bar" data-size="180" data-thickness="5" data-skill-level="95"
                     data-empty-color="#F5F5F5" data-fill-color="#F56800">
                     <span class="pq-progress-count">95%</span>
                  </div>
                  <div class="pq-progress-details">
                     <h5 class="pq-progress-title">Quality Assurance</h5>
                     <span class="pq-progress-desc">Maintaining strict quality control in every production stage</span>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 mt-4 mt-md-0">
               <div class="pq-circle-progress pq-circle-progress-style-1">
                  <div class="pq-circle-progress-bar" data-size="180" data-thickness="5" data-skill-level="90"
                     data-empty-color="#F5F5F5" data-fill-color="#F56800">
                     <span class="pq-progress-count">90%</span>
                  </div>
                  <div class="pq-progress-details">
                     <h5 class="pq-progress-title">Global Client Satisfaction</h5>
                     <span class="pq-progress-desc">From Handcrafted such as using organic Textiles Production</span>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 mt-4 mt-xl-0">
               <div class="pq-circle-progress pq-circle-progress-style-1">
                  <div class="pq-circle-progress-bar" data-size="180" data-thickness="5" data-skill-level="85"
                     data-empty-color="#F5F5F5" data-fill-color="#F56800">
                     <span class="pq-progress-count">85%</span>
                  </div>
                  <div class="pq-progress-details">
                     <h5 class="pq-progress-title">On-Time Delivery Rate</h5>
                     <span class="pq-progress-desc">Committed to timely dispatch and smooth logistics</span>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 mt-4 mt-xl-0">
               <div class="pq-circle-progress pq-circle-progress-style-1">
                  <div class="pq-circle-progress-bar" data-size="180" data-thickness="5" data-skill-level="92"
                     data-empty-color="#F5F5F5" data-fill-color="#F56800">
                     <span class="pq-progress-count">92%</span>
                  </div>
                  <div class="pq-progress-details">
                     <h5 class="pq-progress-title">Bulk Production Efficiency</h5>
                     <span class="pq-progress-desc">Capable of handling large scale export orders efficiently</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Process -->

   <section class="partner-section">
       <div class="container">
           
           <div class="text-center mb-4">
               <h4>Our Trusted Partners</h4>
           </div>

           <div class="owl-carousel partner-carousel">
               <div class="item"><img src="images/partner/1.jpeg" alt=""></div>
               <div class="item"><img src="images/partner/2.jpeg" alt=""></div>
               <div class="item"><img src="images/partner/3.jpeg" alt=""></div>
               <div class="item"><img src="images/partner/4.jpeg" alt=""></div>
               <div class="item"><img src="images/partner/5.jpeg" alt=""></div>
               <div class="item"><img src="images/partner/6.jpeg" alt=""></div>
               <div class="item"><img src="images/partner/7.jpeg" alt=""></div>
           </div>

       </div>
   </section>

   <section class="testimonial wow animated fadeInUp pt-0 pb-0">
       <div class="container">
           <div class="row justify-content-center">
               <div class="col-xl-11">
                   <div class="pq-section-title pq-style-1 text-center">
                       <span class="pq-section-sub-title">
                           <img decoding="async" src="images/section-title/title-icon-primary.png" alt="image">our
                           testimonials
                       </span>
                       <h5 class="pq-section-main-title">what our happy clients say about us</h5>
                   </div>
               </div>
               <div class="col-lg-12">
                   <div class="pq-testimonial-box-slider pq-style-1">
                       <div class="owl-carousel owl-loaded owl-drag" data-dots="true" data-nav="false"
                           data-desk_num="3" data-lap_num="2" data-tab_num="2" data-mob_num="1" data-mob_sm="1"
                           data-autoplay="false" data-loop="true" data-margin="30">
                           <div class="item">
                               <div class="pq-testimonial-box pq-style-1">
                                   <div class="pq-testimonial-img">
                                       <img decoding="async" src="images/testimonial/slider/testimonial-style-1/1.jpg"
                                           alt="testimonial-img">
                                       <span class="pq-review-img">
                                           <img decoding="async"
                                               src="images/testimonial/slider/testimonial-style-1/review-from/1.png"
                                               alt="img">
                                       </span>
                                   </div>
                                   <div class="pq-testimonial-info">
                                       <div class="pq-testimonial-meta">
                                           <div class="pq-testimonial-data">
                                               <h5>Alex john martin</h5>
                                               <span>senior manager</span>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="pq-testimonial-content">
                                       <div class="pq-quote">
                                           <i class="fa fa-quote-right" aria-hidden="true"></i>
                                       </div>
                                       <p>These services involve cleaning and washing textiles, such as clothing,
                                           linens, and towels.
                                           Laundering services can be provided by com mercial laundry facilities hotels
                                       </p>
                                   </div>
                                   <h5 class="pq-testimonial-commnet">Quality Services</h5>
                                   <div class="pq-testimonial-star">
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                   </div>
                               </div>
                           </div>
                           <div class="item">
                               <div class="pq-testimonial-box pq-style-1">
                                   <div class="pq-testimonial-img">
                                       <img decoding="async" src="images/testimonial/slider/testimonial-style-1/2.jpg"
                                           alt="testimonial-img">
                                       <span class="pq-review-img">
                                           <img decoding="async"
                                               src="images/testimonial/slider/testimonial-style-1/review-from/1.png"
                                               alt="img">
                                       </span>
                                   </div>
                                   <div class="pq-testimonial-info">
                                       <div class="pq-testimonial-meta">
                                           <div class="pq-testimonial-data">
                                               <h5>Niku Harrison</h5>
                                               <span>Owner</span>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="pq-testimonial-content">
                                       <div class="pq-quote">
                                           <i class="fa fa-quote-right" aria-hidden="true"></i>
                                       </div>
                                       <p>These services involve cleaning and washing textiles, such as clothing,
                                           linens, and towels.
                                           Laundering services can be provided by com mercial laundry facilities hotels
                                       </p>
                                   </div>
                                   <h5 class="pq-testimonial-commnet">Quality Services</h5>
                                   <div class="pq-testimonial-star">
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                   </div>
                               </div>
                           </div>
                           <div class="item">
                               <div class="pq-testimonial-box pq-style-1">
                                   <div class="pq-testimonial-img">
                                       <img decoding="async" src="images/testimonial/slider/testimonial-style-1/3.jpg"
                                           alt="testimonial-img">
                                       <span class="pq-review-img">
                                           <img decoding="async"
                                               src="images/testimonial/slider/testimonial-style-1/review-from/1.png"
                                               alt="img">
                                       </span>
                                   </div>
                                   <div class="pq-testimonial-info">
                                       <div class="pq-testimonial-meta">
                                           <div class="pq-testimonial-data">
                                               <h5>Leia Organa</h5>
                                               <span>Fashion Designer</span>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="pq-testimonial-content">
                                       <div class="pq-quote">
                                           <i class="fa fa-quote-right" aria-hidden="true"></i>
                                       </div>
                                       <p>These services involve cleaning and washing textiles, such as clothing,
                                           linens, and towels.
                                           Laundering services can be provided by com mercial laundry facilities hotels
                                       </p>
                                   </div>
                                   <h5 class="pq-testimonial-commnet">Quality Services</h5>
                                   <div class="pq-testimonial-star">
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                   </div>
                               </div>
                           </div>
                           <div class="item">
                               <div class="pq-testimonial-box pq-style-1">
                                   <div class="pq-testimonial-img">
                                       <img decoding="async" src="images/testimonial/slider/testimonial-style-1/4.jpg"
                                           alt="testimonial-img">
                                       <span class="pq-review-img">
                                           <img decoding="async"
                                               src="images/testimonial/slider/testimonial-style-1/review-from/1.png"
                                               alt="img">
                                       </span>
                                   </div>
                                   <div class="pq-testimonial-info">
                                       <div class="pq-testimonial-meta">
                                           <div class="pq-testimonial-data">
                                               <h5>David K. Morris</h5>
                                               <span>senior manager</span>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="pq-testimonial-content">
                                       <div class="pq-quote">
                                           <i class="fa fa-quote-right" aria-hidden="true"></i>
                                       </div>
                                       <p>These services involve cleaning and washing textiles, such as clothing,
                                           linens, and towels.
                                           Laundering services can be provided by com mercial laundry facilities hotels
                                       </p>
                                   </div>
                                   <h5 class="pq-testimonial-commnet">Quality Services</h5>
                                   <div class="pq-testimonial-star">
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>



<?php include('footer.php'); ?>


  <!-- JS -->
<script>
$('.partner-carousel').owlCarousel({
    loop: true,
    margin: 20,
    autoplay: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    nav: false,
    dots: false,
    responsive:{
        0:{ items:2 },
        600:{ items:3 },
        1000:{ items:5 }
    }
});



document.addEventListener("DOMContentLoaded", function () {

    const buttons = document.querySelectorAll(".filter-menu li");
    const items = document.querySelectorAll(".filter-item");

    // 👉 DEFAULT SHOW (MEN)
    items.forEach(item => {
        if(item.classList.contains("men")){
            item.style.display = "block";
        }
    });

    buttons.forEach(btn => {
        btn.addEventListener("click", function(){

            // active class
            buttons.forEach(b => b.classList.remove("active"));
            this.classList.add("active");

            let filter = this.getAttribute("data-filter");

            items.forEach(item => {
                if(item.classList.contains(filter)){
                    item.style.display = "block";
                } else {
                    item.style.display = "none";
                }
            });

        });
    });

});


</script>
