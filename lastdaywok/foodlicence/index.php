<?php include('header.php'); ?>
<style type="text/css">
   input[type="radio"]:checked {
   border-color: green;
   animation: none;
   }

   select option:nth-child(odd) {
       background-color: #dde9ff;
       font-weight: bold;
   }
   select option:nth-child(even) {
    background-color: #ffffff;
    font-weight: bold;
}
.form-control:disabled, .form-control:read-only {
    background-color: #ffffff;
    opacity: 1;
}

.hero-fssai {
    background: linear-gradient(rgba(0,0,0,0.65), rgba(0,0,0,0.65)), url('img/fssai.webp');
    background-size: cover;
    background-position: center;
    padding: 80px 0;
}

.hero-content h1 {
    font-size: 40px;
    font-weight: 700;
    margin-bottom: 15px;
    color: white;
}

.subheading {
    font-size: 16px;
    margin-bottom: 25px;
    color: #ddd;
}

.hero-btn {
    background: #1c5482;
    color: #fff;
    padding: 12px 28px;
    border-radius: 30px;
    text-decoration: none;
    font-weight: 600;
    transition: 0.3s;
}

.hero-btn:hover {
    background: #0f3c60;
    color: #fff;
}

/* Trust Box */
.trust-box {
    background: rgba(255,255,255,0.1);
    padding: 15px;
    border-left: 4px solid #00c3ff;
    border-radius: 6px;
    font-size: 14px;
}

.trust-box p {
    margin: 5px 0 0;
    color: #eee;
}

/* Right Card */
.hero-card {
    background: #fff;
    border-radius: 12px;
    padding: 20px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.2);
}

.hero-card h2 {
    font-size: 18px;
    margin-bottom: 10px;
    font-weight: 600;
}

.card-scroll {
    max-height: 220px;
    overflow-y: auto;
    font-size: 14px;
    color: #444;
}

/* Scrollbar Styling */
.card-scroll::-webkit-scrollbar {
    width: 5px;
}
.card-scroll::-webkit-scrollbar-thumb {
    background: #1c5482;
    border-radius: 10px;
}

/* Responsive */
@media (max-width: 768px) {
    .hero-content h1 {
        font-size: 28px;
    }

    .hero-fssai {
        padding: 50px 0;
    }

    .hero-card {
        margin-top: 20px;
    }
}
</style>
<!-- Header Start -->
<section class="hero-fssai">
   <div class="container">
      <div class="row align-items-center">
         
         <!-- LEFT CONTENT -->
         <div class="col-lg-6 col-md-12 text-white hero-content">
            <h1>FSSAI Registration & Food License Services in India</h1>
            <p class="subheading">
               Get expert assistance for FSSAI registration, license, renewal, modification, and annual compliance — simple, fast, and reliable.
            </p>

            <a href="contact.php" class="btn hero-btn">Talk to Expert</a>

            <!-- Trust Disclaimer -->
            <div class="trust-box mt-4">
               <strong>Important Notice:</strong>
               <p>
                  Invenix India is a private consultancy firm and is not associated with the Food Safety and Standards Authority of India (FSSAI) or any government body. We provide professional assistance for FSSAI-related applications and compliance services.
               </p>
            </div>
         </div>

         <!-- RIGHT CARD -->
         <div class="col-lg-6 col-md-12 mt-4 mt-lg-0">
            <div class="hero-card">
               <h2>What is FoSCoS / FSSAI Registration?</h2>
               <div class="card-scroll">
                  <p>
                     In starting fssai registration is known as the Food Licensing and Registration System (FLRS) and After 1st June 2020, It is replaced by the FoSCoS (Food Safety Compliance System).
                     It was mainly launched for the users of Indian Railways and Konkan Railways on the 1st of January 2021.
                     <br><br>
                     The major role of the FSSAI is to protect and promote public health by ensuring the quality of the food which requires proper supervision and the regulation to check all standards of food safety.
                     <br><br>
                     The Central Government authorized the FSSAI to offer a food safety license to all Food Business Operators (FBO).
                     <br><br>
                     In the FSSAI registration, the FBO will get the 14 digit License number that is printed on the food packaging box.
                     <br><br>
                     FSSAI registration ensures quality checking and reduces adulteration and substandard products.
                  </p>
               </div>
            </div>
         </div>

      </div>
   </div>
</section>

   
  
   <section class="about-fssai">
      <div class="container">
         <div class="row align-items-center">

            <!-- IMAGE -->
            <div class="col-lg-5 col-md-12 mb-4 mb-lg-0">
               <div class="about-img">
                  <img src="img/01.svg" alt="FSSAI Services" class="img-fluid">
               </div>
            </div>

            <!-- CONTENT -->
            <div class="col-lg-7 col-md-12">
               <div class="about-content">
                  
                  <h2>Hassle-Free FSSAI Services with Invenix India</h2>

                  <p class="about-text">
                     Starting or running a food business in India requires valid FSSAI registration or license. At <strong>Invenix India</strong>, we simplify the entire process by providing end-to-end consultancy services — from documentation to application submission and follow-ups.
                  </p>

                  <p class="about-text">
                     Whether you are a small food vendor, restaurant owner, cloud kitchen, manufacturer, or exporter, our experts help you choose the correct FSSAI category and complete the process smoothly.
                  </p>

                  <!-- Highlights -->
                  <div class="about-points">
                     <div class="point">✔ Basic Registration – For small businesses (Turnover up to ₹12 lakh)</div>
                     <div class="point">✔ State License – For medium businesses (Turnover up to ₹20 crore)</div>
                     <div class="point">✔ Central License – For large businesses (Turnover above ₹20 crore)</div>
                  </div>

               </div>
            </div>

         </div>
      </div>
   </section>


  

   <section class="services-fssai">
      <div class="container">
         
         <!-- Heading -->
         <div class="text-center mb-5">
            <h2 class="section-title">Our FSSAI Services</h2>
            <p class="section-subtitle">Complete support for registration, licensing, and compliance</p>
         </div>

         <div class="row">

            <!-- Service Box -->
            <div class="col-lg-4 col-md-6 mb-4">
               <div class="service-box">
                  <h5>Basic FSSAI Registration</h5>
               </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
               <div class="service-box">
                  <h5>State FSSAI License</h5>
               </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
               <div class="service-box">
                  <h5>Central FSSAI License</h5>
               </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
               <div class="service-box">
                  <h5>Tatkal FSSAI Registration</h5>
               </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
               <div class="service-box">
                  <h5>License Renewal</h5>
               </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
               <div class="service-box">
                  <h5>Modification of FSSAI Details</h5>
               </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
               <div class="service-box">
                  <h5>Lost Certificate Recovery</h5>
               </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
               <div class="service-box">
                  <h5>Annual Return Filing</h5>
               </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
               <div class="service-box">
                  <h5>Compliance Support</h5>
               </div>
            </div>

         </div>

         <!-- CTA -->
         <div class="text-center mt-4">
            <a href="contact.php" class="btn service-btn">👉 Talk to Expert</a>
         </div>

      </div>
   </section>

  
   <section class="why-choose">
      <div class="container">
         <div class="row align-items-center">

            <!-- LEFT CONTENT -->
            <div class="col-lg-7 col-md-12">
               <div class="why-content">
                  
                  <h2 class="why-title">Why Choose Invenix India?</h2>

                  <div class="why-grid">
                     <div class="why-item">✔ Experienced FSSAI Consultants</div>
                     <div class="why-item">✔ Transparent Pricing</div>
                     <div class="why-item">✔ Dedicated Relationship Manager</div>
                     <div class="why-item">✔ Pan India Service</div>
                     <div class="why-item">✔ Simple & Fast Process</div>
                     <div class="why-item">✔ Document Support</div>
                     <div class="why-item">✔ Regular Status Updates</div>
                     <div class="why-item">✔ No Hidden Charges</div>
                  </div>

               </div>
            </div>

            <!-- RIGHT IMAGE -->
            <div class="col-lg-5 col-md-12 mt-4 mt-lg-0">
               <div class="why-image">
                  <img src="img/01.svg" alt="FSSAI Services" class="img-fluid">
               </div>
            </div>

         </div>
      </div>
   </section>

   
   <section class="workflow-clean">
      <div class="container">

         <!-- Heading -->
         <div class="workflow-head text-center">
            <h2>How It Works</h2>
            <p>Simple 5-step process to get your FSSAI license</p>
         </div>

         <div class="row justify-content-center">

            <div class="col-lg-4 col-md-6 mb-4">
               <div class="workflow-box">
                  <div class="workflow-icon">💬</div>
                  <h5>Consultation</h5>
                  <p>Discuss your business type with our expert.</p>
               </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
               <div class="workflow-box">
                  <div class="workflow-icon">📄</div>
                  <h5>Document Collection</h5>
                  <p>We guide you on the exact documents required.</p>
               </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
               <div class="workflow-box">
                  <div class="workflow-icon">📤</div>
                  <h5>Application Submission</h5>
                  <p>Our team submits your application accurately.</p>
               </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
               <div class="workflow-box">
                  <div class="workflow-icon">🔄</div>
                  <h5>Follow-Up & Updates</h5>
                  <p>We track your application and keep you informed.</p>
               </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
               <div class="workflow-box">
                  <div class="workflow-icon">✅</div>
                  <h5>Certificate Assistance</h5>
                  <p>We assist until the process is completed.</p>
               </div>
            </div>

         </div>

      </div>
   </section>




   <section class="fssai-need-section">
   <div class="container">

      <!-- Heading -->
      <div class="fssai-need-header text-center">
         <h2>Who Needs FSSAI Registration?</h2>
         <p>Applicable for all types of food-related businesses in India</p>
      </div>

      <!-- Grid -->
      <div class="row">

         <div class="col-lg-4 col-md-6 mb-4">
            <div class="fssai-need-card">
               <div class="need-icon">🍽️</div>
               <h5>Restaurants & Cafes</h5>
            </div>
         </div>

         <div class="col-lg-4 col-md-6 mb-4">
            <div class="fssai-need-card">
               <div class="need-icon">🏠</div>
               <h5>Cloud Kitchens</h5>
            </div>
         </div>

         <div class="col-lg-4 col-md-6 mb-4">
            <div class="fssai-need-card">
               <div class="need-icon">🏭</div>
               <h5>Food Manufacturers</h5>
            </div>
         </div>

         <div class="col-lg-4 col-md-6 mb-4">
            <div class="fssai-need-card">
               <div class="need-icon">📦</div>
               <h5>Wholesalers & Distributors</h5>
            </div>
         </div>

         <div class="col-lg-4 col-md-6 mb-4">
            <div class="fssai-need-card">
               <div class="need-icon">🌍</div>
               <h5>Importers & Exporters</h5>
            </div>
         </div>

         <div class="col-lg-4 col-md-6 mb-4">
            <div class="fssai-need-card">
               <div class="need-icon">🏡</div>
               <h5>Home-Based Food Businesses</h5>
            </div>
         </div>

         <div class="col-lg-4 col-md-6 mb-4">
            <div class="fssai-need-card">
               <div class="need-icon">🚚</div>
               <h5>Food Trucks</h5>
            </div>
         </div>

         <div class="col-lg-4 col-md-6 mb-4">
            <div class="fssai-need-card">
               <div class="need-icon">🎂</div>
               <h5>Bakeries & Sweet Shops</h5>
            </div>
         </div>

         <div class="col-lg-4 col-md-6 mb-4">
            <div class="fssai-need-card">
               <div class="need-icon">📱</div>
               <h5>Online Food Sellers</h5>
            </div>
         </div>

      </div>

   </div>
</section>

















   <style>
      .accordion-button {
          color: #000000 !important;
       }
   </style>

<div class="container-xxl pt-5">
   <div class="container">
      <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
         <h2 class="text-uppercase text-center fs-3 m-0">FAQs (Google Ads Friendly)</h2>
      </div>

      <div class="row featurette d-block">

         <div class="accordion" id="accordionExample">
           <div class="accordion-item">
             <h2 class="accordion-header">
               <button class="accordion-button collapsed" type="button"
                 data-bs-toggle="collapse" data-bs-target="#collapse1">
                 Is FSSAI registration mandatory?
               </button>
             </h2>
             <div id="collapse1" class="accordion-collapse collapse"
               data-bs-parent="#accordionExample">
               <div class="accordion-body">
                 Yes, any food business operator in India must obtain valid FSSAI registration or license as per applicable rules.
               </div>
             </div>
           </div>

           <div class="accordion-item">
             <h2 class="accordion-header">
               <button class="accordion-button collapsed" type="button"
                 data-bs-toggle="collapse" data-bs-target="#collapse2">
                 Do you guarantee approval?
               </button>
             </h2>
             <div id="collapse2" class="accordion-collapse collapse"
               data-bs-parent="#accordionExample">
               <div class="accordion-body">
                 No consultancy can guarantee approval. Approval is subject to authority verification. We assist in correct filing and compliance.

               </div>
             </div>
           </div>

           <div class="accordion-item">
             <h2 class="accordion-header">
               <button class="accordion-button collapsed" type="button"
                 data-bs-toggle="collapse" data-bs-target="#collapse3">
                 Are you a government website?
               </button>
             </h2>
             <div id="collapse3" class="accordion-collapse collapse"
               data-bs-parent="#accordionExample">
               <div class="accordion-body">
                 No. Invenix India is a private consultancy service provider.
               </div>
             </div>
           </div>


         </div>

      </div>

   </div>
</div>


   <section class="fssai-cta-banner">
   <div class="container">
      <div class="row align-items-center text-center text-lg-start">

         <!-- TEXT -->
         <div class="col-lg-8 col-md-12">
            <h2>Need Help with FSSAI Registration?</h2>
            <p>Our experts are ready to assist you.</p>
         </div>

         <!-- BUTTON -->
         <div class="col-lg-4 col-md-12 text-center text-lg-end mt-3 mt-lg-0">
            <a href="contact.php" class="cta-btn">👉 Talk to Expert</a>
         </div>

      </div>
   </div>
</section>








<?php include('footer.php'); ?>

