<footer id="pq-footer">
   <div class="pq-footer-style-1">
      <div class="pq-footer-top">
         <div class="container">
            <div class="row">
               <div class="col-xl-3 col-md-6">
                  <div class="widget">
                     <!-- <div class="pq-footer-img mb-2">
                        <img src="images/logo.png" class="pq-footer-logo" alt="textica-footer-logo">
                     </div> -->
                     <p>Offering high quality garments that combine style, comfort and durability while maintaining ethical and sustainable manufacturing practices.</p>
                  </div>
               </div>
               
               <div class="col-xl-3  col-md-6">
                  <div class="widget">
                     <h4 class="footer-title">Usefull Links</h4>
                     <div class="menu-useful-links-container">
                        <ul id="menu-useful-links" class="menu">
                           <li class="menu-item"><a href="index.php">Home</a></li>
                           <li class="menu-item"><a href="about.php">About Us</a></li>
                           <li class="menu-item"><a href="componey-policy.php">Componey policy</a></li>
                           <li class="menu-item"><a href="payment-term.php">Payment Term</a></li>
                           <li class="menu-item"><a href="contact.php">Contact Us</a></li>
                        </ul>
                     </div>
                  </div>
               </div>


               <div class="col-xl-3  col-md-6">
                  <div class="widget">
                     <h4 class="footer-title">Specialization</h4>
                     <div class="menu-textile-service-container">
                        <ul id="menu-textile-service" class="menu">
                           <li class="menu-item"><a href="men-clothing.php">Men’s Wear</a></li>
                           <li class="menu-item"><a href="women-clothing.php">Women’s Wear</a></li>
                           <li class="menu-item"><a href="kids-clothing.php">Kids Wear</a></li>
                           <li class="menu-item"><a href="innerwear.php">Innerwear</a></li>
                        </ul>
                     </div>
                  </div>
               </div>

               
               <div class="col-xl-3  col-md-6">
                  <div class="widget">
                     <h4 class="footer-title">Contact Us</h4>
                     <div class="menu-useful-links-container">
                        <ul id="menu-useful-links" class="menu">
                           <li class="menu-item">
                              <a href="tel:+18000016555">
                                  <i class="fas fa-phone"></i>
                                  <span>+1800-001-6555</span>
                              </a>
                           </li>

                           <li class="menu-item">
                              <a href="mailto:info@biglom.com">
                                  <i class="fas fa-envelope"></i>
                                  <span>info@biglom.com</span>
                              </a>
                           </li>
                           <li class="menu-item">
                              <i class="fa fa-map-marker"></i>
                              <span>Address </span>
                           </li>
                           
                        </ul>
                     </div>
                  </div>
               </div>

               

            </div>
         </div>
      </div>
      <div class="pq-copyright-footer">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-md-6 text-center text-md-start">
                  <div class="pq-footer-social">
                     <ul>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-6 text-center text-md-end">
                  <span class="pq-copyright"> Proudly Powered By BIGLOM</span>
               </div>
            </div>
         </div>
      </div>
   </div>
</footer>
<!-- Footer -->
<!-- Back To Top -->
<div id="back-to-top">
   <a class="top" id="top" href="#top">
   <i class="ion-ios-arrow-up"></i>
   </a>
</div>
<!-- Back To Top -->





<style>
   /* Floating Button */
.enquiry-btn {
    position: fixed;
    top: 55%;
    right: 50px;
    transform: translateY(-50%) rotate(-90deg);
    transform-origin: right top;
    background: #a23c7a;
    color: #fff;
    padding: 10px 20px;
    cursor: pointer;
    font-weight: bold;
    border-radius: 5px 5px 0 0;
    z-index: 9999;
}

/* Form Panel */
.enquiry-form {
    position: fixed;
    top: 0;
    right: -350px;
    width: 320px;
    height: 100%;
    background: #fff;
    box-shadow: -3px 0 10px rgba(0,0,0,0.2);
    transition: 0.4s;
    z-index: 99999;
}

/* Active Class */
.enquiry-form.active {
    right: 0;
}

/* Header */
.form-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: #a23c7a;
    color: #fff;
    padding: 15px;
}

.form-header span {
    cursor: pointer;
    font-size: 22px;
}

/* Form Fields */
.enquiry-form form {
    padding: 15px;
}

.enquiry-form input,
.enquiry-form textarea {
    width: 100%;
    margin-bottom: 10px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

/* Button */
.enquiry-form button {
    width: 100%;
    padding: 10px;
    background: #a23c7a;
    color: #fff;
    border: none;
    cursor: pointer;
}
</style>

<!-- Enquiry Button -->
<div class="enquiry-btn" onclick="openForm()">
    Enquire Now
</div>

<!-- Side Form -->
<div id="enquiryForm" class="enquiry-form">
    <div class="form-header">
        <h3>Enquiry Form</h3>
        <span onclick="closeForm()">×</span>
    </div>

    <form>
        <input type="text" placeholder="Your Name" required>
        <input type="email" placeholder="Email" required>
        <input type="tel" placeholder="Mobile" required>
        <textarea placeholder="Your Message"></textarea>
        <button type="submit">Submit</button>
    </form>
</div>

















<!--jquery js-->
<script src="js/jquery.min.js"></script>
<!--bootstrap js-->
<script src="js/bootstrap.min.js"></script>
<!--owl-carousal-->
<script src="js/owl.carousel.min.js"></script>
<!--progress-bar js-->
<script src="js/progressbar.js"></script>
<!--isotope js-->
<script src="js/isotope.pkgd.min.js"></script>
<!--countTo js-->
<script src="js/jquery.countTo.min.js"></script>
<!--Maginfic-Popup js-->
<script src="js/jquery.magnific-popup.min.js"></script>
<!-- Animation JS -->
<script src="js/wow.min.js"></script>
<!-- Simplebar js -->
<script src="js/simplebar.min.js"></script>
<!-- Slick Slider js -->
<script src="js/slick.js"></script>
<!-- Circluar Progressbar js -->
<script src="js/circle-progress.min.js"></script>
<!-- Rev-Slider -->
<script src="rev/js/rbtools.min.js"></script>
<script src="rev/js/rs6.min.js"></script>
<script src="js/rev-custom.js"></script>
<!--custom js-->
<script src="js/custom.js"></script>


<script>
function openForm() {
    document.getElementById("enquiryForm").classList.add("active");
}

function closeForm() {
    document.getElementById("enquiryForm").classList.remove("active");
}
</script>

</body>
</html>