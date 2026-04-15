
    <!-- Footer Start -->
    <footer class="container-fluid bg-dark text-light footer ddmt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container pt-5 pb-3">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <a href="" class="navbar-brand d-flex align-items-center ms-4">
                        <img class="img-fluid " width="100" src="logo.png" alt="">
                    </a>
                    <p>Get expert assistance for FSSAI registration, license, renewal, modification, and annual compliance — simple, fast, and reliable. </p>



                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Quick Links</h5>
                    <a class="btn btn-link" href="">Home</a>
                    <a class="btn btn-link" href="about">About Us</a>
                    <a class="btn btn-link" href="contact">Contact Us</a>

                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Quick Links</h5>
                    <a class="btn btn-link" href="Terms-And-Conditions">Terms And Conditions</a>
                    <a class="btn btn-link" href="Refund-Policy">Refund Policy</a>
                    <a class="btn btn-link" href="privacy-policy.php">Privacy Policy</a>
                    <a class="btn btn-link" href="Shipping-Policy">Shipping Policy</a>

                </div>

                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Contacts</h5>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i><a class="text-white" href="tel:+91-8595323374">+91-8595323374</a></p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i><a class="text-white" href="mailto:info@foodlicence.org.in">info@foodlicence.org.in</a></p>
                    <p class="mb-2"><i class="fa fa-home me-3"></i><a class="text-white" href="#!">Plot No 24 
              Second Floor , Sewak Park Near Metro pillar - 771
              New Delhi - 110059</a></p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-12 text-center mb-3 mb-md-0">
                        Copyright © Food License Online | All Rights Reserved
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->


    <!-- Back to Top -->
      <a  class="whats-icon" href="https://api.whatsapp.com/send?phone=9643895224"><i class="bi bi-whatsapp"></i></a>
            <!-- <a href="tel:9153966183"><i class="fas fa-phone-alt"></i></a>919153985199,9262807555-->
            <a class="cal-icon-fixe" href="tel:9643895224"><i class="bi bi-telephone new-icon"></i></a>
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>


<script>
    // Target the input field using the `name` attribute
const dobInput = document.querySelector('input[type="date"]');
dobInput.addEventListener('click', function() {
  dobInput.showPicker(); // Opens the calendar popup programmatically
});

</script>


<script>
   var previousDataId = '';
   $('.businessTypesDropdown').on('change', function() {
       var selectedOption = $(this).find('option:selected');
       var dataId = selectedOption.data('id');
       if (previousDataId !== '') {
           $('.' + previousDataId).hide();
       }
       if (dataId !== '') {
           $('.turnoverDisplay').show();
           $('.' + dataId).show();
       }
       previousDataId = dataId;
   });
   
   /*Small preety*/
   $('.choose_cerificate_value').on('change', function() {
       var selectedOption = $(this).find('option:selected');
       var dataprice = selectedOption.data('price');
       $('.option-price').text(dataprice);
       $('.payable-price').val(dataprice);
   });
   
   /*--------------daily unit-------------*/
   
   $('.prodcution-radio').on('change', function() {
      var datatext = $('.prodcution-radio:checked').data('text');
       if ($(this).val() == 'upto-500' && $(this).is(':checked')) {
           $('.dairy-year-display').css('display', 'block');
           $('.dairy-year-display-2').css('display', 'none');
           $('.option-daily-price-sidetext').text(datatext);
           $('.payable-price').val('');
           $('.option-transporter-price-sidetext').text('');
       } else {
           $('.dairy-year-display').css('display', 'none');
           $('.dairy-year-display-2').css('display', 'block');
           $('.option-daily-price-sidetext').text(datatext);
           $('.payable-price').val('');
           $('.option-transporter-price-sidetext').text('');
       }
   });
   
   /*price 1 optiona*/
   $('.choose_dairy_value').on('change', function() {
       var selectedOption = $(this).find('option:selected');
       var dataprice = selectedOption.data('price');
       $('.option-daily-price').text(dataprice);
       $('.payable-price').val(dataprice);
   });
   
   /*price 2 3 4 optiona*/
   $('.other-price').on('change', function() {
       var checkedData = $('.other-price:checked').data('price');
       $('.option-daily-price-2').text(checkedData);
       $('.payable-price').val(checkedData);
   });
   
   
   /*--------------vegitable-------------*/
   
   $('.vegitable-radio').on('change', function() {
      var datatext = $('.vegitable-radio:checked').data('text');
       if ($(this).val() == 'upto 12 Lacs' && $(this).is(':checked')) {
           $('.vegitable-year-display').css('display', 'block');
           $('.vegitable-year-display-2').css('display', 'none');
           $('.option-vegitable-price-sidetext').text(datatext);
           $('.payable-price').val('');
           $('.option-transporter-price-sidetext').text('');
       } else {
           $('.vegitable-year-display').css('display', 'none');
           $('.vegitable-year-display-2').css('display', 'block');
           $('.option-vegitable-price-sidetext').text(datatext);
           $('.payable-price').val('');
           $('.option-transporter-price-sidetext').text('');
       }
       // console.log(datatext);
   });
   
   /*price 1 optiona*/
   $('.choose_vegitable_value').on('change', function() {
       var selectedOption = $(this).find('option:selected');
       var dataprice = selectedOption.data('price');
       $('.option-vegitable-price').text(dataprice);
       $('.payable-price').val(dataprice);
   });
   
   /*price 2 3 4 optiona*/
   $('.other-price-22').on('change', function() {
       var checkedData = $('.other-price-22:checked').data('price');
       $('.option-vegitable-price-2').text(checkedData);
       $('.payable-price').val(checkedData);
   });
   
   
   
   /*--------------slaughtering-------------*/
   
   $('.slaughtering-radio').on('change', function() {
      var datatext = $('.slaughtering-radio:checked').data('text');
       if ($(this).val() == 'Large Animals: 2' && $(this).is(':checked')) {
           $('.slaughtering-year-display').css('display', 'block');
           $('.slaughtering-year-display-2').css('display', 'none');
           $('.option-slaughtering-price-sidetext').text(datatext);
           $('.payable-price').val('');
           $('.option-transporter-price-sidetext').text('');
       } else {
           $('.slaughtering-year-display').css('display', 'none');
           $('.slaughtering-year-display-2').css('display', 'block');
           $('.option-slaughtering-price-sidetext').text(datatext);
           $('.payable-price').val('');
           $('.option-transporter-price-sidetext').text('');
       }
       // console.log(datatext);
   });
   
   /*price 1 optiona*/
   $('.choose_slaughtering_value').on('change', function() {
       var selectedOption = $(this).find('option:selected');
       var dataprice = selectedOption.data('price');
       $('.option-slaughtering-price').text(dataprice);
       $('.payable-price').val(dataprice);
   });
   
   /*price 2 3 4 optiona*/
   $('.other-price-33').on('change', function() {
       var checkedData = $('.other-price-33:checked').data('price');
       $('.option-slaughtering-price-2').text(checkedData);
       $('.payable-price').val(checkedData);
   });
   
   
   
   /*--------------fish-------------*/
   
   $('.fish-radio').on('change', function() {
      var datatext = $('.fish-radio:checked').data('text');
       if ($(this).val() == 'Turnover upto Rs. 12 Lacs per annum' && $(this).is(':checked')) {
           $('.fish-year-display').css('display', 'block');
           $('.fish-year-display-2').css('display', 'none');
           $('.option-fish-price-sidetext').text(datatext);
           $('.payable-price').val('');
           $('.option-transporter-price-sidetext').text('');
       } else {
           $('.fish-year-display').css('display', 'none');
           $('.fish-year-display-2').css('display', 'block');
           $('.option-fish-price-sidetext').text(datatext);
           $('.payable-price').val('');
           $('.option-transporter-price-sidetext').text('');
       }
   });
   
   /*price 1 optiona*/
   $('.choose_fish_value').on('change', function() {
       var selectedOption = $(this).find('option:selected');
       var dataprice = selectedOption.data('price');
       $('.option-fish-price').text(dataprice);
       $('.payable-price').val(dataprice);
   });
   
   /*price 2 3 4 optiona*/
   $('.other-price-44').on('change', function() {
       var checkedData = $('.other-price-44:checked').data('price');
       $('.option-fish-price-2').text(checkedData);
       $('.payable-price').val(checkedData);
   });
   
   
   /*--------------meat-------------*/
   
   $('.meat-radio').on('change', function() {
      var datatext = $('.meat-radio:checked').data('text');
       if ($(this).val() == 'Turnover upto Rs. 12 Lacs per annum' && $(this).is(':checked')) {
           $('.meat-year-display').css('display', 'block');
           $('.meat-year-display-2').css('display', 'none');
           $('.option-meat-price-sidetext').text(datatext);
           $('.payable-price').val('');
           $('.option-transporter-price-sidetext').text('');
       } else {
           $('.meat-year-display').css('display', 'none');
           $('.meat-year-display-2').css('display', 'block');
           $('.option-meat-price-sidetext').text(datatext);
           $('.payable-price').val('');
           $('.option-transporter-price-sidetext').text('');
       }
   });
   
   /*price 1 optiona*/
   $('.choose_meat_value').on('change', function() {
       var selectedOption = $(this).find('option:selected');
       var dataprice = selectedOption.data('price');
       $('.option-meat-price').text(dataprice);
       $('.payable-price').val(dataprice);
   });
   
   /*price 2 3 4 optiona*/
   $('.other-price-55').on('change', function() {
       var checkedData = $('.other-price-55:checked').data('price');
       $('.option-meat-price-2').text(checkedData);
       $('.payable-price').val(checkedData);
   });
   
   
   
   /*--------------manufacturer-------------*/
   
   $('.manufacturer-radio').on('change', function() {
      var datatext = $('.manufacturer-radio:checked').data('text');
       if ($(this).val() == 'Production capacity upto 100 kgs / LTR / DAY' && $(this).is(':checked')) {
           $('.manufacturer-year-display').css('display', 'block');
           $('.manufacturer-year-display-2').css('display', 'none');
           $('.option-manufacturer-price-sidetext').text(datatext);
           $('.payable-price').val('');
           $('.option-transporter-price-sidetext').text('');
       } else {
           $('.manufacturer-year-display').css('display', 'none');
           $('.manufacturer-year-display-2').css('display', 'block');
           $('.option-manufacturer-price-sidetext').text(datatext);
           $('.payable-price').val('');
           $('.option-transporter-price-sidetext').text('');
       }
   });
   
   /*price 1 optiona*/
   $('.choose_manufacturer_value').on('change', function() {
       var selectedOption = $(this).find('option:selected');
       var dataprice = selectedOption.data('price');
       $('.option-manufacturer-price').text(dataprice);
       $('.payable-price').val(dataprice);
   });
   
   /*price 2 3 4 optiona*/
   $('.other-price-66').on('change', function() {
       var checkedData = $('.other-price-66:checked').data('price');
       $('.option-manufacturer-price-2').text(checkedData);
       $('.payable-price').val(checkedData);
   });
   
   
   /*--------Proprietary-Food ||  Food-or-Health || Radiation processing of food---------------*/
   $('.businessTypesDropdown').on('change', function() {
    if ($.inArray($(this).val(), ['Proprietary Food', 'Food or Health Supplements and Nutraceuticals etc.', 'Radiation processing of food', 'Importers', 'Exporters', 'E-commerce', 'Head Office/Registered Office']) !== -1) {
        $('.payable-price').val('16799');
       } else {
           $('.payable-price').val('');
       }
   });
   
   
   
   /*--------------substances-------------*/
   
   $('.substances-radio').on('change', function() {
      var datatext = $('.substances-radio:checked').data('text');
       if ($(this).val() == 'Turnover  upto  Rs. 12 Lacs / annum' && $(this).is(':checked')) {
           $('.substances-year-display').css('display', 'block');
           $('.substances-year-display-2').css('display', 'none');
           $('.option-substances-price-sidetext').text(datatext);
           $('.payable-price').val('');
           $('.option-transporter-price-sidetext').text('');
       } else {
           $('.substances-year-display').css('display', 'none');
           $('.substances-year-display-2').css('display', 'block');
           $('.option-substances-price-sidetext').text(datatext);
           $('.payable-price').val('');
           $('.option-transporter-price-sidetext').text('');
       }
   });
   
   /*price 1 optiona*/
   $('.choose_substances_value').on('change', function() {
       var selectedOption = $(this).find('option:selected');
       var dataprice = selectedOption.data('price');
       $('.option-substances-price').text(dataprice);
       $('.payable-price').val(dataprice);
   });
   
   /*price 2 3 4 optiona*/
   $('.other-price-77').on('change', function() {
       var checkedData = $('.other-price-77:checked').data('price');
       $('.option-substances-price-2').text(checkedData);
       $('.payable-price').val(checkedData);
   });
   
   
   
   /*--------------warehouse-------------*/
   
   $('.warehouse-radio').on('change', function() {
      var datatext = $('.warehouse-radio:checked').data('text');
       if ($(this).val() == 'Turnover  upto  Rs. 12 Lacs / annum' && $(this).is(':checked')) {
           $('.warehouse-year-display').css('display', 'block');
           $('.warehouse-year-display-2').css('display', 'none');
           $('.option-warehouse-price-sidetext').text(datatext);
           $('.payable-price').val('');
           $('.option-transporter-price-sidetext').text('');
       } else {
           $('.warehouse-year-display').css('display', 'none');
           $('.warehouse-year-display-2').css('display', 'block');
           $('.option-warehouse-price-sidetext').text(datatext);
           $('.payable-price').val('');
           $('.option-transporter-price-sidetext').text('');
       }
   });
   
   /*price 1 optiona*/
   $('.choose_warehouse_value').on('change', function() {
       var selectedOption = $(this).find('option:selected');
       var dataprice = selectedOption.data('price');
       $('.option-warehouse-price').text(dataprice);
       $('.payable-price').val(dataprice);
   });
   
   /*price 2 3 4 optiona*/
   $('.other-price-88').on('change', function() {
       var checkedData = $('.other-price-88:checked').data('price');
       $('.option-warehouse-price-2').text(checkedData);
       $('.payable-price').val(checkedData);
   });
   
   
   /*--------------atmospheric_controlled-------------*/
   
   $('.atmospheric_controlled-radio').on('change', function() {
      var datatext = $('.atmospheric_controlled-radio:checked').data('text');
       if ($(this).val() == 'Turnover  upto  Rs. 12 Lacs / annum' && $(this).is(':checked')) {
           $('.atmospheric_controlled-year-display').css('display', 'block');
           $('.atmospheric_controlled-year-display-2').css('display', 'none');
           $('.option-atmospheric_controlled-price-sidetext').text(datatext);
           $('.payable-price').val('');
           $('.option-transporter-price-sidetext').text('');
       } else {
           $('.atmospheric_controlled-year-display').css('display', 'none');
           $('.atmospheric_controlled-year-display-2').css('display', 'block');
           $('.option-atmospheric_controlled-price-sidetext').text(datatext);
           $('.payable-price').val('');
           $('.option-transporter-price-sidetext').text('');
       }
   });
   
   /*price 1 optiona*/
   $('.choose_atmospheric_controlled_value').on('change', function() {
       var selectedOption = $(this).find('option:selected');
       var dataprice = selectedOption.data('price');
       $('.option-atmospheric_controlled-price').text(dataprice);
       $('.payable-price').val(dataprice);
   });
   
   /*price 2 3 4 optiona*/
   $('.other-price-99').on('change', function() {
       var checkedData = $('.other-price-99:checked').data('price');
       $('.option-atmospheric_controlled-price-2').text(checkedData);
       $('.payable-price').val(checkedData);
   });
   
   
   
   
   /*--------------atmospheric_controlled_without-------------*/
   
   $('.atmospheric_controlled_without-radio').on('change', function() {
      var datatext = $('.atmospheric_controlled_without-radio:checked').data('text');
       if ($(this).val() == 'Turnover  upto  Rs. 12 Lacs / annum' && $(this).is(':checked')) {
           $('.atmospheric_controlled_without-year-display').css('display', 'block');
           $('.atmospheric_controlled_without-year-display-2').css('display', 'none');
           $('.option-atmospheric_controlled_without-price-sidetext').text(datatext);
           $('.payable-price').val('');
           $('.option-transporter-price-sidetext').text('');
       } else {
           $('.atmospheric_controlled_without-year-display').css('display', 'none');
           $('.atmospheric_controlled_without-year-display-2').css('display', 'block');
           $('.option-atmospheric_controlled_without-price-sidetext').text(datatext);
           $('.payable-price').val('');
           $('.option-transporter-price-sidetext').text('');
       }
   });
   
   /*price 1 optiona*/
   $('.choose_atmospheric_controlled_without_value').on('change', function() {
       var selectedOption = $(this).find('option:selected');
       var dataprice = selectedOption.data('price');
       $('.option-atmospheric_controlled_without-price').text(dataprice);
       $('.payable-price').val(dataprice);
   });
   
   /*price 2 3 4 optiona*/
   $('.other-price-1010').on('change', function() {
       var checkedData = $('.other-price-1010:checked').data('price');
       $('.option-atmospheric_controlled_without-price-2').text(checkedData);
       $('.payable-price').val(checkedData);
   });
   
   
   
   
   
   
   /*--------------transport-------------*/
   
   $('.transporter-radio').on('change', function() {
      var datatext = $('.transporter-radio:checked').data('text');
       if ($(this).val() == 'Single Vehicle and Turnover  upto  Rs. 12 Lacs / annum' && $(this).is(':checked')) {
           $('.transporter-year-display').css('display', 'block');
           $('.transporter-year-display-2').css('display', 'none');
           $('.option-transporter-price-sidetext').text(datatext);
           $('.payable-price').val('');
           $('.option-transporter-price-sidetext').text('');
       } else {
           $('.transporter-year-display').css('display', 'none');
           $('.transporter-year-display-2').css('display', 'block');
           $('.option-transporter-price-sidetext').text(datatext);
           $('.payable-price').val('');
           $('.option-transporter-price-sidetext').text('');
       }
   });
   
   /*price 1 optiona*/
   $('.choose_transporter_value').on('change', function() {
       var selectedOption = $(this).find('option:selected');
       var dataprice = selectedOption.data('price');
       $('.option-transporter-price').text(dataprice);
       $('.payable-price').val(dataprice);
   });
   
   /*price 2 3 4 optiona*/
   $('.other-price-1111').on('change', function() {
       var checkedData = $('.other-price-1111:checked').data('price');
       $('.option-transporter-price-2').text(checkedData);
       $('.payable-price').val(checkedData);
   });
   
   
   /*--------------Wholesaler-------------*/
   
   $('.Wholesaler-radio').on('change', function() {
      var datatext = $('.Wholesaler-radio:checked').data('text');
       if ($(this).val() == 'Turnover  upto  Rs. 12 Lacs / annum' && $(this).is(':checked')) {
           $('.Wholesaler-year-display').css('display', 'block');
           $('.Wholesaler-year-display-2').css('display', 'none');
           $('.option-Wholesaler-price-sidetext').text('');
           $('.option-Wholesaler-price-sidetext').text(datatext);
           $('.payable-price').val('');
       } else {
           $('.Wholesaler-year-display').css('display', 'none');
           $('.Wholesaler-year-display-2').css('display', 'block');
           $('.option-Wholesaler-price-sidetext').text('');
           $('.option-Wholesaler-price-sidetext').text(datatext);
           $('.payable-price').val('');
       }
       console.log(datatext);
   });
   
   /*price 1 optiona*/
   $('.choose_Wholesaler_value').on('change', function() {
       var selectedOption = $(this).find('option:selected');
       var dataprice = selectedOption.data('price');
       $('.option-Wholesaler-price').text(dataprice);
       $('.payable-price').val(dataprice);
   });
   
   /*price 2 3 4 optiona*/
   $('.other-price-1212').on('change', function() {
       var checkedData = $('.other-price-1212:checked').data('price');
       $('.option-Wholesaler-price-2').text(checkedData);
       $('.payable-price').val(checkedData);
   });
   
   
   
   
   /*--------------Wholesaler-------------*/
   
   $('.Distributor-radio').on('change', function() {
      var datatext = $('.Distributor-radio:checked').data('text');
       if ($(this).val() == 'Turnover upto Rs. 12 Lacs per annum' && $(this).is(':checked')) {
           $('.Distributor-year-display').css('display', 'block');
           $('.Distributor-year-display-2').css('display', 'none');
           $('.option-Distributor-price-sidetext').text('');
           $('.option-Distributor-price-sidetext').text(datatext);
           $('.payable-price').val('');
       } else {
           $('.Distributor-year-display').css('display', 'none');
           $('.Distributor-year-display-2').css('display', 'block');
           $('.option-Distributor-price-sidetext').text('');
           $('.option-Distributor-price-sidetext').text(datatext);
           $('.payable-price').val('');
       }
       console.log(datatext);
   });
   
   /*price 1 optiona*/
   $('.choose_Distributor_value').on('change', function() {
       var selectedOption = $(this).find('option:selected');
       var dataprice = selectedOption.data('price');
       $('.option-Distributor-price').text(dataprice);
       $('.payable-price').val(dataprice);
   });
   
   /*price 2 3 4 optiona*/
   $('.other-price-1313').on('change', function() {
       var checkedData = $('.other-price-1313:checked').data('price');
       $('.option-Distributor-price-2').text(checkedData);
       $('.payable-price').val(checkedData);
   });
   
   
   
   /*--------------Retailer-------------*/
   
   $('.Retailer-radio').on('change', function() {
      var datatext = $('.Retailer-radio:checked').data('text');
       if ($(this).val() == 'Turnover upto Rs. 12 Lacs per annum' && $(this).is(':checked')) {
           $('.Retailer-year-display').css('display', 'block');
           $('.Retailer-year-display-2').css('display', 'none');
           $('.option-Retailer-price-sidetext').text('');
           $('.option-Retailer-price-sidetext').text(datatext);
           $('.payable-price').val('');
       } else {
           $('.Retailer-year-display').css('display', 'none');
           $('.Retailer-year-display-2').css('display', 'block');
           $('.option-Retailer-price-sidetext').text('');
           $('.option-Retailer-price-sidetext').text(datatext);
           $('.payable-price').val('');
       }
       console.log(datatext);
   });
   
   /*price 1 optiona*/
   $('.choose_Retailer_value').on('change', function() {
       var selectedOption = $(this).find('option:selected');
       var dataprice = selectedOption.data('price');
       $('.option-Retailer-price').text(dataprice);
       $('.payable-price').val(dataprice);
   });
   
   /*price 2 3 4 optiona*/
   $('.other-price-1414').on('change', function() {
       var checkedData = $('.other-price-1414:checked').data('price');
       $('.option-Retailer-price-2').text(checkedData);
       $('.payable-price').val(checkedData);
   });
   
   
   /*--------------Hotel-------------*/
   
   $('.Hotel-radio').on('change', function() {
      var datatext = $('.Hotel-radio:checked').data('text');
       if ($(this).val() == 'Turnover upto Rs. 12 Lacs per annum' && $(this).is(':checked')) {
           $('.Hotel-year-display').css('display', 'block');
           $('.Hotel-year-display-2').css('display', 'none');
           $('.option-Hotel-price-sidetext').text('');
           $('.option-Hotel-price-sidetext').text(datatext);
           $('.payable-price').val('');
       } else {
           $('.Hotel-year-display').css('display', 'none');
           $('.Hotel-year-display-2').css('display', 'block');
           $('.option-Hotel-price-sidetext').text('');
           $('.option-Hotel-price-sidetext').text(datatext);
           $('.payable-price').val('');
       }
       console.log(datatext);
   });
   
   /*price 1 optiona*/
   $('.choose_Hotel_value').on('change', function() {
       var selectedOption = $(this).find('option:selected');
       var dataprice = selectedOption.data('price');
       $('.option-Hotel-price').text(dataprice);
       $('.payable-price').val(dataprice);
   });
   
   /*price 2 3 4 optiona*/
   $('.other-price-1515').on('change', function() {
       var checkedData = $('.other-price-1515:checked').data('price');
       $('.option-Hotel-price-2').text(checkedData);
       $('.payable-price').val(checkedData);
   });
   
   
   /*--------------Restaurants-------------*/
   
   $('.Restaurants-radio').on('change', function() {
      var datatext = $('.Restaurants-radio:checked').data('text');
       if ($(this).val() == 'Turnover upto Rs. 12 Lacs per annum' && $(this).is(':checked')) {
           $('.Restaurants-year-display').css('display', 'block');
           $('.Restaurants-year-display-2').css('display', 'none');
           $('.option-Restaurants-price-sidetext').text('');
           $('.option-Restaurants-price-sidetext').text(datatext);
           $('.payable-price').val('');
       } else {
           $('.Restaurants-year-display').css('display', 'none');
           $('.Restaurants-year-display-2').css('display', 'block');
           $('.option-Restaurants-price-sidetext').text('');
           $('.option-Restaurants-price-sidetext').text(datatext);
           $('.payable-price').val('');
       }
       console.log(datatext);
   });
   
   /*price 1 optiona*/
   $('.choose_Restaurants_value').on('change', function() {
       var selectedOption = $(this).find('option:selected');
       var dataprice = selectedOption.data('price');
       $('.option-Restaurants-price').text(dataprice);
       $('.payable-price').val(dataprice);
   });
   
   /*price 2 3 4 optiona*/
   $('.other-price-1616').on('change', function() {
       var checkedData = $('.other-price-1616:checked').data('price');
       $('.option-Restaurants-price-2').text(checkedData);
       $('.payable-price').val(checkedData);
   });
   
   
   
   /*--------------Club-------------*/
   
   $('.Club-radio').on('change', function() {
      var datatext = $('.Club-radio:checked').data('text');
       if ($(this).val() == 'Turnover upto Rs. 12 Lacs per annum' && $(this).is(':checked')) {
           $('.Club-year-display').css('display', 'block');
           $('.Club-year-display-2').css('display', 'none');
           $('.option-Club-price-sidetext').text('');
           $('.option-Club-price-sidetext').text(datatext);
           $('.payable-price').val('');
       } else {
           $('.Club-year-display').css('display', 'none');
           $('.Club-year-display-2').css('display', 'block');
           $('.option-Club-price-sidetext').text('');
           $('.option-Club-price-sidetext').text(datatext);
           $('.payable-price').val('');
       }
       console.log(datatext);
   });
   
   /*price 1 optiona*/
   $('.choose_Club_value').on('change', function() {
       var selectedOption = $(this).find('option:selected');
       var dataprice = selectedOption.data('price');
       $('.option-Club-price').text(dataprice);
       $('.payable-price').val(dataprice);
   });
   
   /*price 2 3 4 optiona*/
   $('.other-price-1717').on('change', function() {
       var checkedData = $('.other-price-1717:checked').data('price');
       $('.option-Club-price-2').text(checkedData);
       $('.payable-price').val(checkedData);
   });
   
   
   /*--------------Caterar-------------*/
   
   $('.Caterar-radio').on('change', function() {
      var datatext = $('.Caterar-radio:checked').data('text');
       if ($(this).val() == 'Turnover upto Rs. 20 crores per annum' && $(this).is(':checked')) {
           $('.Caterar-year-display').css('display', 'block');
           $('.Caterar-year-display-2').css('display', 'none');
           $('.option-Caterar-price-sidetext').text('');
           $('.option-Caterar-price-sidetext').text(datatext);
           $('.payable-price').val('');
       } else {
           $('.Caterar-year-display').css('display', 'none');
           $('.Caterar-year-display-2').css('display', 'block');
           $('.option-Caterar-price-sidetext').text('');
           $('.option-Caterar-price-sidetext').text(datatext);
           $('.payable-price').val('');
       }
       console.log(datatext);
   });
   
   /*price 1 optiona*/
   $('.choose_Caterar_value').on('change', function() {
       var selectedOption = $(this).find('option:selected');
       var dataprice = selectedOption.data('price');
       $('.option-Caterar-price').text(dataprice);
       $('.payable-price').val(dataprice);
   });
   
   /*price 2 3 4 optiona*/
   $('.other-price-1818').on('change', function() {
       var checkedData = $('.other-price-1818:checked').data('price');
       $('.option-Caterar-price-2').text(checkedData);
       $('.payable-price').val(checkedData);
   });
   
   
   
   /*--------------food_veding-------------*/
   
   $('.food_veding-radio').on('change', function() {
      var datatext = $('.food_veding-radio:checked').data('text');
       if ($(this).val() == 'Turnover upto Rs. 12 Lacs per annum' && $(this).is(':checked')) {
           $('.food_veding-year-display').css('display', 'block');
           $('.food_veding-year-display-2').css('display', 'none');
           $('.option-food_veding-price-sidetext').text('');
           $('.option-food_veding-price-sidetext').text(datatext);
           $('.payable-price').val('');
       } else {
           $('.food_veding-year-display').css('display', 'none');
           $('.food_veding-year-display-2').css('display', 'block');
           $('.option-food_veding-price-sidetext').text('');
           $('.option-food_veding-price-sidetext').text(datatext);
           $('.payable-price').val('');
       }
       console.log(datatext);
   });
   
   /*price 1 optiona*/
   $('.choose_food_veding_value').on('change', function() {
       var selectedOption = $(this).find('option:selected');
       var dataprice = selectedOption.data('price');
       $('.option-food_veding-price').text(dataprice);
       $('.payable-price').val(dataprice);
   });
   
   /*price 2 3 4 optiona*/
   $('.other-price-1919').on('change', function() {
       var checkedData = $('.other-price-1919:checked').data('price');
       $('.option-food_veding-price-2').text(checkedData);
       $('.payable-price').val(checkedData);
   });
   
   
   
   /*--------------Dhaba-------------*/
   
   $('.Dhaba-radio').on('change', function() {
      var datatext = $('.Dhaba-radio:checked').data('text');
       if ($(this).val() == 'Turnover upto Rs. 12 Lacs per annum' && $(this).is(':checked')) {
           $('.Dhaba-year-display').css('display', 'block');
           $('.Dhaba-year-display-2').css('display', 'none');
           $('.option-Dhaba-price-sidetext').text('');
           $('.option-Dhaba-price-sidetext').text(datatext);
           $('.payable-price').val('');
       } else {
           $('.Dhaba-year-display').css('display', 'none');
           $('.Dhaba-year-display-2').css('display', 'block');
           $('.option-Dhaba-price-sidetext').text('');
           $('.option-Dhaba-price-sidetext').text(datatext);
           $('.payable-price').val('');
       }
       console.log(datatext);
   });
   
   /*price 1 optiona*/
   $('.choose_Dhaba_value').on('change', function() {
       var selectedOption = $(this).find('option:selected');
       var dataprice = selectedOption.data('price');
       $('.option-Dhaba-price').text(dataprice);
       $('.payable-price').val(dataprice);
   });
   
   /*price 2 3 4 optiona*/
   $('.other-price-2020').on('change', function() {
       var checkedData = $('.other-price-2020:checked').data('price');
       $('.option-Dhaba-price-2').text(checkedData);
       $('.payable-price').val(checkedData);
   });
   
   
   
   /*--------------Relabellers-------------*/
   
   $('.Relabellers-radio').on('change', function() {
      var datatext = $('.Relabellers-radio:checked').data('text');
       if ($(this).val() == 'Turnover upto Rs. 12 Lacs per annum' && $(this).is(':checked')) {
           $('.Relabellers-year-display').css('display', 'block');
           $('.Relabellers-year-display-2').css('display', 'none');
           $('.option-Relabellers-price-sidetext').text('');
           $('.option-Relabellers-price-sidetext').text(datatext);
           $('.payable-price').val('');
       } else {
           $('.Relabellers-year-display').css('display', 'none');
           $('.Relabellers-year-display-2').css('display', 'block');
           $('.option-Relabellers-price-sidetext').text('');
           $('.option-Relabellers-price-sidetext').text(datatext);
           $('.payable-price').val('');
       }
       console.log(datatext);
   });
   
   /*price 1 optiona*/
   $('.choose_Relabellers_value').on('change', function() {
       var selectedOption = $(this).find('option:selected');
       var dataprice = selectedOption.data('price');
       $('.option-Relabellers-price').text(dataprice);
       $('.payable-price').val(dataprice);
   });
   
   /*price 2 3 4 optiona*/
   $('.other-price-2121').on('change', function() {
       var checkedData = $('.other-price-2121:checked').data('price');
       $('.option-Relabellers-price-2').text(checkedData);
       $('.payable-price').val(checkedData);
   });
   
   
   
   /*--------------Any OIther-------------*/
   
   $('.any_other-radio').on('change', function() {
      var datatext = $('.any_other-radio:checked').data('text');
       if ($(this).val() == 'Turnover upto Rs. 12 Lacs per annum' && $(this).is(':checked')) {
           $('.any_other-year-display').css('display', 'block');
           $('.any_other-year-display-2').css('display', 'none');
           $('.option-any_other-price-sidetext').text('');
           $('.option-any_other-price-sidetext').text(datatext);
           $('.payable-price').val('');
       } else {
           $('.any_other-year-display').css('display', 'none');
           $('.any_other-year-display-2').css('display', 'block');
           $('.option-any_other-price-sidetext').text('');
           $('.option-any_other-price-sidetext').text(datatext);
           $('.payable-price').val('');
       }
       console.log(datatext);
   });
   
   /*price 1 optiona*/
   $('.choose_any_other_value').on('change', function() {
       var selectedOption = $(this).find('option:selected');
       var dataprice = selectedOption.data('price');
       $('.option-any_other-price').text(dataprice);
       $('.payable-price').val(dataprice);
   });
   
   /*price 2 3 4 optiona*/
   $('.other-price-2222').on('change', function() {
       var checkedData = $('.other-price-2222:checked').data('price');
       $('.option-any_other-price-2').text(checkedData);
       $('.payable-price').val(checkedData);
   });
   
   
 
  /*distric list*/

document.getElementById('office-state').addEventListener('change', function() {
  var firstSelectValue = this.value;
  var secondSelect = document.getElementById('office-district');
  
  if (firstSelectValue == 'Andaman_And_Nicobar_Island') 
  {
    secondSelect.innerHTML = '';
    var options = ['Choose District','NIKOBARS / निकोबार', 'NORTH AND MIDDLE ANDAMAN / उत्तर और मध्य अंडमान', 'SOUTH ANDAMANS / दक्षिण अंडमान'];
    for (var i = 0; i < options.length; i++) {
      var option = document.createElement('option');
      option.value = options[i];
      option.text = options[i];
      secondSelect.appendChild(option);
    }
  } 
  else if(firstSelectValue == 'Andhra_Pradesh')
  {
    secondSelect.innerHTML = '';
    var options = ['Choose District','Alluri Sitharama Raju / Alluri Sitharama Raju', 'Anakapalli / Anakapalli', 'ANANTHAPUR / अनंतपुर' ,'Annamayya / Annamayya' ,'Bapatla / Bapatla' ,'CHITOOR / चित्तूर' ,'EAST GODAVARI / पूर्वी गोदावरी' ,'Eluru / Eluru' ,'GUNTUR / गुंटूर' ,'Kakinada / Kakinada' ,'Konaseema / Konaseema' ,'KRISHNA / कृष्णा' ,' KURNOOL / कुरनूल' ,'Nandyal / Nandyal' ,'NTR / NTR' ,'Palnadu / Palnadu' ,'Parvathipuram Manyam / Parvathipuram Manyam' ,'PRAKASAM / प्रकाशम' ,'SPSR NELLORE / एस पी एस आर नेल्लूर' ,'Sri Sathya Sai / Sri Sathya Sai' ,'SRIKAKULAM / श्रीकाकुलम' ,'Tirupati / Tirupati' ,'VISAKHAPATNAM / विशाखापत्तनम' ,'VIZIANAGARAM / विजयनगरम' ,'WEST GODAVARI / पश्चिमी गोदावरी' ,'Y.S.R / वाईएसआर' ];
    for (var i = 0; i < options.length; i++) {
      var option = document.createElement('option');
      option.value = options[i];
      option.text = options[i];
      secondSelect.appendChild(option);
    }
  }
  else if(firstSelectValue == 'Arunachal_Pradesh')
  {
    secondSelect.innerHTML = '';
    var options = ['Choose District','ANJAW / अन्जऔ','CHANGLANG / चांगलांग','DIBANG VALLEY / दिबांग घाटी','EAST KAMENG / पूर्वी कामेंग','EAST SIANG / पूर्वी सियांग','KAMLE / KAMLE','KRA DAADI / क्रा दादी','KURUNG KUMEY / कुरुंग कुमे','LEPARADA / LEPARADA','LOHIT / लोहित','LONGDING / लोंग्डिंग','LOWER DIBANG VALLEY / लोअर  दिबांग घाटी','LOWER SIANG / LOWER SIANG','LOWER SUBANSIRI / लोअर सुबानसिरी','NAMSAI / नंसैई','PAKKE KESSANG / PAKKE KESSANG',' PAPUM PARE / पापुम पारे','SHI YOMI / SHI YOMI'];
    for (var i = 0; i < options.length; i++) {
      var option = document.createElement('option');
      option.value = options[i];
      option.text = options[i];
      secondSelect.appendChild(option);
    }
  }
  else if(firstSelectValue == 'Assam')
  {
    secondSelect.innerHTML = '';
    var options = ['Choose District', '1. BAKSA / बक्सा', '2. BARPETA / बारपेटा', '3. Biswanath / बीसवनाथ', '4. BONGAIGAON / बोंगईगांव', '5. CACHAR / कछार', '6. CHARAIDEO / चरडेव', '7. CHIRANG / चिरांग', '8. DARRANG / दारांग', '9. DHEMAJI / धेमाजी', '10. DHUBRI / धुबरी', '11. DIBRUGARH / डिब्रूगढ़', '12. DIMA HASAO / दीमा हसो ', '13. GOALPARA / गोलपाड़ा', '14. GOLAGHAT / गोलाघाट', '15. HAILAKANDI / हैलाकंडी ', '16. HOJAI / होजाई', '17. JORHAT / जोरहट', '18. KAMRUP / कामरूप', '19. KAMRUP METRO / कामरूप मेट्रो', '20. KARBI-ANGELONG / कार्बी आंगलोंग', '21. KARIMGANJ / करीमगंज', '22. KOKRAJHAR / कोकराझार', '23. LAKHIMPUR / लखीमपुर', '24. MAJULI / माजुली', '25. MARIGAON / मोरीगांव', '26. NAGAON / नगांव', '27. NALBARI / नलबाड़ी', '28. SIVASAGAR / सिवसागर ', '29. SONITPUR / सोनितपुर', '30. SOUTH SALMARA MANCACHAR / साउत सलमरा मांकचार', '31. TINSUKIA / तिनसुकिया', '32. UDALGURI / उदल्गिरी', '33. WEST KARBI ANGLONG / वेस्ट कर्बी आंगलॉंग'];
    for (var i = 0; i < options.length; i++) {
      var option = document.createElement('option');
      option.value = options[i];
      option.text = options[i];
      secondSelect.appendChild(option);
    }
  }
  else if(firstSelectValue == 'Bihar')
  {
    secondSelect.innerHTML = '';
    var options = [' -- Choose One -- ', '1. ARARIA / अररिया', '2. ARWAL / अरवल', '3. AURANGABAD / औरंगाबाद', '4. BANKA / बांका', '5. BEGUSARAI / बेगूसराय', '6. BHAGALPUR / भागलपुर', '7. BHOJPUR / भोजपुर', '8. BUXAR / बक्सर', '9. DARBHANGA / दरभंगा', '10. GAYA / गया', '11. GOPALGANJ / गोपालगंज', '12. JAMUI / जमुई', '13. JEHANABAD / जहानाबाद', '14. KAIMUR (BHABUA) / कैमूर (भभुआ)', '15. KATIHAR / कटिहार', '16. KHAGARIA / खगरिया', '17. KISHANGANJ / किशनगंज', '18. LAKHISARAI / लखीसराय', '19. MADHEPURA / मधेपुरा', '20. MADHUBANI / मधुबनी', '21. MUNGER / मुंगेर', '22. MUZAFFARPUR / मुजफ्फरपुर', '23. NALANDA / नालंदा', '24. NAWADA / नवादा', '25. PASHCHIM CHAMPARAN / पश्चिमी चंपारण', '26. PATNA / पटना', '27. PURBI CHAMPARAN / पूर्वी चंपारण', '28. PURNIA / पूर्णिया', '29. ROHTAS / रोहतास', '30. SAHARSA / सहरसा', '31. SAMASTIPUR / समस्तीपुर', '32. SARAN / सरन', '33. SHEIKHPURA / शेखपुरा', '34. SHEOHAR / शिवहर', '35. SITAMARHI / सीतामढ़ी', '36. SIWAN / सिवान', '37. SUPAUL / सुपौल', '38. VAISHALI / वैशाली'];
    for (var i = 0; i < options.length; i++) {
      var option = document.createElement('option');
      option.value = options[i];
      option.text = options[i];
      secondSelect.appendChild(option);
    }
  }
  else if(firstSelectValue == 'Chhattisgarh')
  {
    secondSelect.innerHTML = '';
    var options = [' -- Choose One -- ', '1. BALOD / बालोद', '2. BALOD BAZAR / बलोदा बाज़ार', '3. BALRAMPUR / बलरामपुर', '4. BASTAR / बस्तर', '5. BEMETARA / बेमेतारा', '6. BIJAPUR / बीजापुर', '7. BILASPUR / बिलासपुर', '8. DANTEWADA / दंतेवाड़ा', '9. DHAMTARI / धमतरी', '10. DURG / दुर्ग', '11. GARIABAND / गरिआबंद', '12. Gaurella Pendra Marwahi / Gaurella Pendra Marwahi', '13. JANJGIR-CHAMPA / जांजगीर-चंपा', '14. JASHPUR / जशपुर', '15. KABIRDHAM / कबीरधाम', '16. KANKER / कांकेर', '17. KONDAGAON / कोंडागांव', '18. KORBA / कोरबा', '19. KOREA / कोरिया', '20. MAHASAMUND / महासमुंद', '21. MUNGELI / मुंगेली', '22. NARAYANPUR / नारायणपुर', '23. RAIGARH / रायगढ़', '24. RAIPUR / रायपुर', '25. RAJNANDAGAON / राजनांदगांव', '26. SUKMA / सुकमा ', '27. SURAJPUR / सूरजपुर', '28. SURGUJA / सरगुजा'];
    for (var i = 0; i < options.length; i++) {
      var option = document.createElement('option');
      option.value = options[i];
      option.text = options[i];
      secondSelect.appendChild(option);
    }
  }
  else if(firstSelectValue == 'Chandigarh')
  {
    secondSelect.innerHTML = '';
    var options = [' -- Choose One -- ', 'CHANDIGARH / चंडीगढ़'];
    for (var i = 0; i < options.length; i++) {
      var option = document.createElement('option');
      option.value = options[i];
      option.text = options[i];
      secondSelect.appendChild(option);
    }
  }
  else if(firstSelectValue == 'Dadara')
  {
    secondSelect.innerHTML = '';
    var options = [' -- Choose One -- ', '1. DADRA AND NAGAR HAVELLI / दादरा और नगर हवेली'];
    for (var i = 0; i < options.length; i++) {
      var option = document.createElement('option');
      option.value = options[i];
      option.text = options[i];
      secondSelect.appendChild(option);
    }
  }
  else if(firstSelectValue == 'Daman')
  {
    secondSelect.innerHTML = '';
    var options = [' -- Choose One -- ', '1. DAMAN / दमन','2. DIU / दीव'];
    for (var i = 0; i < options.length; i++) {
      var option = document.createElement('option');
      option.value = options[i];
      option.text = options[i];
      secondSelect.appendChild(option);
    }
  }
  else if(firstSelectValue == 'Delhi')
  {
    secondSelect.innerHTML = '';
    var options = [' -- Choose One -- ', '1. CENTRAL / सेंट्रल', '2. EAST / पूर्वी', '3. NEW DELHI / नई दिल्ली', '4. NORTH / उत्तरी', '5. NORTH EAST / उत्तर पूर्वी', '6. NORTH WEST / उत्तर पश्चिम', '7. SHAHDARA / शाहदरा', '8. SOUTH / दक्षिण', '9. SOUTH EAST / दक्षिण पूर्वी', '10. SOUTH WEST / दक्षिण पश्चिमी', '11. WEST / पश्चिमी'];
    for (var i = 0; i < options.length; i++) {
      var option = document.createElement('option');
      option.value = options[i];
      option.text = options[i];
      secondSelect.appendChild(option);
    }
  }
  else if(firstSelectValue == 'Goa')
  {
    secondSelect.innerHTML = '';
    var options = [' -- Choose One -- ', '1. NORTH GOA / उत्तरी गोवा', '2. SOUTH GOA / दक्षिण गोवा'];
    for (var i = 0; i < options.length; i++) {
      var option = document.createElement('option');
      option.value = options[i];
      option.text = options[i];
      secondSelect.appendChild(option);
    }
  }
  else if(firstSelectValue == 'Gujarat')
  {
    secondSelect.innerHTML = '';
    var options = [' -- Choose One -- ', '1. AHMADABAD / अहमदाबाद', '2. AMRELI / अमरेली', '3. ANAND / आनंद', '4. ARVALLI / अरावली', '5. BANAS KANTHA / बनास कांठा', '6. BHARUCH / भरूच', '7. BHAVNAGAR / भावनगर', '8. BOTAD / बोताड', '9. CHHOTAUDEPUR / छोटा उदयपुर', '10. DANG / डांग', '11. DEVBHOOMI DWARKA / देवभूमि द्वारका', '12. DOHAD / दाहोद', '13. GANDHINAGAR / गांधीनगर', '14. GIR SOMNATH / गिर सोमनाथ', '15. JAMNAGAR / जामनगर', '16. JUNAGADH / जूनागढ़', '17. KACHCHH / कच्छ', '18. KHEDA / खेड़ा', '19. MAHESANA / मेहसाणा', '20. MAHISAGAR / महिसागर', '21. MORBI / मोरबी', '22. NARMADA / नर्मदा', '23. NAVSARI / नवसारी', '24. PANCH MAHALS / पंचमहल', '25. PATAN / पाटन', '26. PORBANDAR / पोरबंदर', '27. RAJKOT / राजकोट', '28. SABAR KANTHA / साबर कांठा', '29. SURAT / सूरत', '30. SURENDRANAGAR / सुरेंद्रनगर', '31. TAPI / तापी', '32. VADODARA / वडोदरा', '33. VALSAD / वलसाड'];
    for (var i = 0; i < options.length; i++) {
      var option = document.createElement('option');
      option.value = options[i];
      option.text = options[i];
      secondSelect.appendChild(option);
    }
  }
  else if(firstSelectValue == 'Haryana')
  {
    secondSelect.innerHTML = '';
    var options = [' -- Choose One -- ', '1. AMBALA / अम्बाला', '2. BHIWANI / भिवानी', '3. CHARKI DADRI / चरकी दाडरी', '4. FARIDABAD / फरीदाबाद', '5. FATEHABAD / फतेहाबाद', '6. GURUGRAM / गुरुग्राम', '7. HISAR / हिसार', '8. JHAJJAR / झज्जर', '9. JIND / जींद', '10. KAITHAL / कैथल', '11. KARNAL / करनाल', '12. KURUKSHETRA / कुरुक्षेत्र', '13. MAHENDRAGARH / महेंद्रगढ़', '14. NUH / नूँह', '15. PALWAL / पलवल', '16. PANCHKULA / पंचकुला', '17. PANIPAT / पानीपत', '18. REWARI / रेवाड़ी', '19. ROHTAK / रोहतक', '20. SIRSA / सिरसा', '21. SONIPAT / सोनीपत', '22. YAMUNANAGAR / यमुना नगर'];
    for (var i = 0; i < options.length; i++) {
      var option = document.createElement('option');
      option.value = options[i];
      option.text = options[i];
      secondSelect.appendChild(option);
    }
  }
  else if(firstSelectValue == 'Himachal_Pradesh')
  {
    secondSelect.innerHTML = '';
    var options = [' -- Choose One -- ', '1. BILASPUR / बिलासपुर', '2. CHAMBA / चंबा', '3. HAMIRPUR / हमीरपुर', '4. KANGRA / कांगड़ा', '5. KINNAUR / किन्नौर', '6. KULLU / कुल्लू', '7. LAHUL AND SPITI / लाहौल और स्पीति', '8. MANDI / मंडी', '9. SHIMLA / शिमला', '10. SIRMAUR / सिरमौर', '11. SOLAN / सोलन', '12. UNA / ऊना'];
    for (var i = 0; i < options.length; i++) {
      var option = document.createElement('option');
      option.value = options[i];
      option.text = options[i];
      secondSelect.appendChild(option);
    }
  }
  else if(firstSelectValue == 'Jammu_and_Kashmir')
  {
    secondSelect.innerHTML = '';
    var options = ['-- Choose One -- ', '1. ANANTNAG / अनंतनाग', '2. BADGAM / बडगाम ', '3. BANDIPORA / बांदीपुरा', '4. BARAMULLA / बारामूला', '5. DODA / डोडा', '6. GANDERBAL / गांदरबल', '7. JAMMU / जम्मू', '8. KATHUA / कठुआ', '9. KISHTWAR / किश्तवाड़', '10. KULGAM / कुलगाम', '11. KUPWARA / कुपवाड़ा', '12. POONCH / पुंछ', '13. PULWAMA / पुलवामा', '14. RAJAURI / राजौरी', '15. RAMBAN / रामबन', '16. REASI / रियासी', '17. SAMBA / सांबा', '18. SHOPIAN / शोपियां', '19. SRINAGAR / श्रीनगर', '20. UDHAMPUR / उधमपुर'];
    for (var i = 0; i < options.length; i++) {
      var option = document.createElement('option');
      option.value = options[i];
      option.text = options[i];
      secondSelect.appendChild(option);
    }
  }
  else if(firstSelectValue == 'Jharkhand')
  {
    secondSelect.innerHTML = '';
    var options = ['-- Choose One -- ', '1. BOKARO / बोकारो', '2. CHATRA / चतरा', '3. DEOGHAR / देवघर', '4. DHANBAD / धनबाद', '5. DUMKA / दुमका', '6. EAST SINGHBHUM / पूर्वी सिंहभूम', '7. GARHWA / गढ़वा', '8. GIRIDIH / गिरिडीह', '9. GODDA / गोड्डा', '10. GUMLA / गुमला', '11. HAZARIBAG / हजारीबाग', '12. JAMTARA / जामताड़ा', '13. KHUNTI / खूंटी', '14. KODERMA / कोडरमा', '15. LATEHAR / लातेहार', '16. LOHARDAGA / लोहरदगा', '17. PAKUR / पाकुर', '18. PALAMU / पलामू', '19. RAMGARH / रामगढ़', '20. RANCHI / रांची', '21. SAHEBGANJ / साहिबगंज', '22. SERAIKELA-KHARSAWAN / सेरैकेला खरास्वान ', '23. SIMDEGA / सिमडेगा', '24. WEST SINGHBHUM / पश्चिमी सिंहभूम'];
    for (var i = 0; i < options.length; i++) {
      var option = document.createElement('option');
      option.value = options[i];
      option.text = options[i];
      secondSelect.appendChild(option);
    }
  }
  else if(firstSelectValue == 'Karnataka')
  {
    secondSelect.innerHTML = '';
    var options = ['-- Choose One -- ', '1. BAGALKOT / बागलकोट', '2. BALLARI / बेल्लारी', '3. BELAGAVI / बेलगावी', '4. BENGALURU (RURAL) / बेंगलुरु (ग्रामीण)', '5. BENGALURU (URBAN) / बेंगलुरु (शहरी)', '6. BIDAR / बीदर', '7. CHAMARAJNAGAR / चामराजनगर', '8. CHIKBALLAPUR / चिकबल्लापुर ', '9. CHIKKAMAGALURU / चिक्कमगलूरु', '10. CHITRADURGA / चित्रदुर्गा', '11. DAKSHIN KANNAD / दक्षिण कन्नड़', '12. DAVANGERE / दावणगेरे', '13. DHARWAD / धारवाड़', '14. GADAG / गदग', '15. HASSAN / हसन', '16. HAVERI / हावेरी', '17. KALABURAGI / कालबुर्गे', '18. KODAGU / कोडागू', '19. KOLAR / कोलर', '20. KOPPAL / कोप्पल', '21. MANDYA / मंड्या', '22. MYSURU / मयसूरु', '23. RAICHUR / रायचूर', '24. RAMANAGARA / रामानगर', '25. SHIVAMOGGA / शिवमोग्गा', '26. TUMAKURU / तुमकुर', '27. UDUPI / उडुपी', '28. UTTAR KANNAD / उत्तर कन्नड़', '29. VIJAYAPURA / विजयपुरा ', '30. YADGIR / यादगीर'];
    for (var i = 0; i < options.length; i++) {
      var option = document.createElement('option');
      option.value = options[i];
      option.text = options[i];
      secondSelect.appendChild(option);
    }
  }
  else if(firstSelectValue == 'Kerala')
  {
    secondSelect.innerHTML = '';
    var options = ['-- Choose One -- ', '1. ALAPPUZHA / अलाप्पुझा', '2. ERNAKULAM / एरनाकुलम', '3. IDUKKI / इडुक्की', '4. KANNUR / कन्नूर', '5. KASARAGOD / कासरगोड', '6. KOLLAM / कोल्लम', '7. KOTTAYAM / कोट्टायम', '8. KOZHIKODE / कोझीकोड', '9. MALAPPURAM / मलप्पुरम', '10. PALAKKAD / पलक्कड़', '11. PATHANAMTHIPTA / पथानामथिट्टा', '12. THIRUVANANTHAPURAM / तिरूवनंतपुरम', '13. THRISSUR / त्रिशूर', '14. WAYANAD / वायनाड'];
    for (var i = 0; i < options.length; i++) {
      var option = document.createElement('option');
      option.value = options[i];
      option.text = options[i];
      secondSelect.appendChild(option);
    }
  }
  else if(firstSelectValue == 'Ladakh')
  {
    secondSelect.innerHTML = '';
    var options = ['-- Choose One -- ', '1. KARGIL / करगिल', '2. LEH LADAKH / लेह लद्दाख'];
    for (var i = 0; i < options.length; i++) {
      var option = document.createElement('option');
      option.value = options[i];
      option.text = options[i];
      secondSelect.appendChild(option);
    }
  }
  else if(firstSelectValue == 'Lakshadweep')
  {
    secondSelect.innerHTML = '';
    var options = ['-- Choose One -- ', '1. LAKSHADWEEP DISTRICT / लक्षद्वीप जिला'];
    for (var i = 0; i < options.length; i++) {
      var option = document.createElement('option');
      option.value = options[i];
      option.text = options[i];
      secondSelect.appendChild(option);
    }
  }
  else if(firstSelectValue == 'Madhya_Pradesh')
  {
    secondSelect.innerHTML = '';
    var options = ['-- Choose One -- ', '1. AGAR MALWA / अग्र मालवा', '2. ALIRAJPUR / अलीराजपुर', '3. ANUPPUR / अनूपपुर', '4. ASHOKNAGAR / अशोकनगर', '5. BALAGHAT / बालाघाट', '6. BARWANI / बड़वानी', '7. BETUL / बैतूल', '8. BHIND / भिंड', '9. BHOPAL / भोपाल', '10. BURHANPUR / बुरहानपुर', '11. CHHATARPUR / छतरपुर', '12. CHHINDWARA / छिंदवाड़ा', '13. DAMOH / दमोह', '14. DATIA / दतिया', '15. DEWAS / देवास', '16. DHAR / धार', '17. DINDORI / डिंडोरी', '18. EAST NIMAR / खंडवा (पूर्व निमाड़)', '19. GUNA / गुना', '20. GWALIOR / ग्वालियर', '21. HARDA / हरदा', '22. HOSHANGABAD / होशंगाबाद', '23. INDORE / इंदौर', '24. JABALPUR / जबलपुर', '25. JHABUA / झाबुआ', '26. KATNI / कटनी', '27. KHARGONE / खरगोन (पश्चिम निमाड़)', '28. MANDLA / मंडला', '29. MANDSAUR / मंदसौर', '30. MORENA / मुरैना', '31. NARSINGHPUR / नरसिंहपुर', '32. NEEMUCH / नीमच', '33. NIWARI / निवारी', '34. PANNA / पन्ना', '35. RAISEN / रायसेन', '36. RAJGARH / राजगढ़', '37. RATLAM / रतलाम', '38. REWA / रीवा', '39. SAGAR / सागर', '40. SATNA / सतना', '41. SEHORE / सीहोर', '42. SEONI / सिवनी', '43. SHAHDOL / शहडोल', '44. SHAJAPUR / शाजापुर', '45. SHEOPUR / श्योपुर', '46. SHIVPURI / शिवपुरी', '47. SIDHI / सीधी', '48. SINGRAULI / सिंगरौली', '49. TIKAMGARH / टीकमगढ़', '50. UJJAIN / उज्जैन', '51. UMARIA / उमरिया', '52. VIDISHA / विदिशा'];
    for (var i = 0; i < options.length; i++) {
      var option = document.createElement('option');
      option.value = options[i];
      option.text = options[i];
      secondSelect.appendChild(option);
    }
  }
  else if(firstSelectValue == 'Maharashtra')
  {
    secondSelect.innerHTML = '';
    var options = ['-- Choose One -- ', '1. AHMEDNAGAR / अहमदनगर', '2. AKOLA / अकोला', '3. AMRAVATI / अमरावती', '4. AURANGABAD / औरंगाबाद', '5. BEED / बीड', '6. BHANDARA / भंडारा', '7. BULDHANA / बुलढाना', '8. CHANDRAPUR / चंद्रपुर', '9. DHULE / धुले', '10. GADCHIROLI / गढ़चिरौली', '11. GONDIA / गोंदिया', '12. HINGOLI / हिंगोली ', '13. JALGAON / जलगांव', '14. JALNA / जलना', '15. KOLHAPUR / कोल्हापुर', '16. LATUR / लातूर', '17. MUMBAI / मुंबई', '18. MUMBAI SUBURBAN / मुंबई उपनगरीय', '19. NAGPUR / नागपुर', '20. NAN DED / नांदेड़', '21. NANDURBAR / नंदुरबार', '22. NASHIK / नासिक', '23. OSMANABAD / उस्मानाबाद', '24. PALGHAR / पालघर', '25. PARBHANI / परभानी', '26. PUNE / पुणे', '27. RAIGAD / रायगढ़', '28. RATNAGIRI / रत्नागिरी', '29. SANGLI / सांगली', '30. SATARA / सतारा', '31. SINDHUDURG / सिंधुदुर्ग', '32. SOLAPUR / सोलापुर', '33. THANE / ठाणे', '34. WARDHA / वर्धा', '35. WASHIM / वाशिम', '36. YAVATMAL / यवतमाल'];
    for (var i = 0; i < options.length; i++) {
      var option = document.createElement('option');
      option.value = options[i];
      option.text = options[i];
      secondSelect.appendChild(option);
    }
  }
  else if(firstSelectValue == 'Manipur')
  {
    secondSelect.innerHTML = '';
    var options = ['-- Choose One -- ', '1. BISHNUPUR / बिश्नुपुर', '2. CHANDEL / चंदेल', '3. CHURACHANDPUR / चुराचांदपुर', '4. IMPHAL EAST / इम्फाल ईस्ट', '5. IMPHAL WEST / इंफाल पश्चिम', '6. JIRIBAM / जिरीबाम', '7. KAKCHING / काकचिंग', '8. KAMJONG / कमजोंग', '9. KANGPOKPI / कांगपोकपि', '10. NONEY / नोनी', '11. PHERZAWL / फेरजॉल', '12. SENAPATI / सेनापति', '13. TAMENGLONG / तामेंगलांग', '14. TENGNOUPAL / टेंगनूपाल', '15. THOUBAL / थोबल', '16. UKHRUL / उखरूल'];
    for (var i = 0; i < options.length; i++) {
      var option = document.createElement('option');
      option.value = options[i];
      option.text = options[i];
      secondSelect.appendChild(option);
    }
  }
  else if(firstSelectValue == 'Meghalaya')
  {
    secondSelect.innerHTML = '';
    var options = ['-- Choose One -- ', '1. EAST GARO HILLS / ईस्ट गारो हिल्स', '2. EAST JAINTIA HILLS / पूर्वी जयंतिया हिल्स', '3. EAST KHASI HILLS / पूर्वी खासी हिल्स', '4. NORTH GARO HILLS / उत्तर गारो हिल्स', '5. RI BHOI / री भोई', '6. SOUTH GARO HILLS / दक्षिण गारो हिल्स', '7. SOUTH WEST GARO HILLS / साउथ वेस्ट गारो हिल्स', '8. SOUTH WEST KHASI HILLS / दक्षिण पश्चिम खासी हिल्स', '9. WEST GARO HILLS / पश्चिमी गारो हिल्स', '10. WEST JAINTIA HILLS / पश्चिम जैंतिया हिल्स', '11. WEST KHASI HILLS / पश्चिम खासी हिल्स'];
    for (var i = 0; i < options.length; i++) {
      var option = document.createElement('option');
      option.value = options[i];
      option.text = options[i];
      secondSelect.appendChild(option);
    }
  }
  else if(firstSelectValue == 'Mizoram')
  {
    secondSelect.innerHTML = '';
    var options = ['-- Choose One -- ', '1. AIZAWL / आइजोल', '2. CHAMPHAI / चम्फाई ', '3. Hnahthial / Hnahthial', '4. Khawzawl / Khawzawl', '5. KOLASIB / कोलासिब', '6. LAWNGTLAI / लावन्ग्त्लाई', '7. LUNGLEI / लुंगलेई', '8. MAMIT / मामित', '9. SAIHA / सैहा', '10. Saitual / Saitual', '11. SERCHHIP / सेरछिप'];
    for (var i = 0; i < options.length; i++) {
      var option = document.createElement('option');
      option.value = options[i];
      option.text = options[i];
      secondSelect.appendChild(option);
    }
  }
  else if(firstSelectValue == 'Nagaland')
  {
    secondSelect.innerHTML = '';
    var options = ['-- Choose One -- ', '1. DIMAPUR / दीमापुर', '2. KIPHRIE / किफायर', '3. KOHIMA / कोहिमा', '4. LONGLENG / लोंगलेंग', '5. MOKOKCHUNG / मोकोकचुंग', '6. MON / मोन', '7. Noklak / Noklak', '8. PEREN / पेरेन', '9. PHEK / फेक ', '10. TUENSANG / तुएनसांग', '11. WOKHA / वोखा', '12. ZUNHEBOTO / ज़ुन्हेबोटो'];
    for (var i = 0; i < options.length; i++) {
      var option = document.createElement('option');
      option.value = options[i];
      option.text = options[i];
      secondSelect.appendChild(option);
    }
  }
  else if(firstSelectValue == 'Odisha')
  {
    secondSelect.innerHTML = '';
    var options = ['-- Choose One -- ', '1. ANGUL / अंगुल', '2. BALANGIR / बालनगीर ', '3. BALESHWAR / बालासोर', '4. BARGARH / बरगढ़', '5. BHADRAK / भद्रक', '6. BOUDH / बौध ', '7. CUTTACK / कटक', '8. DEOGARH / देवगढ़', '9. DHENKANAL / ढेंकनाल', '10. GAJAPATI / गजपति', '11. GANJAM / गंजम', '12. JAGATSINGHPUR / जगतसिंहपुर', '13. JAJAPUR / जाजपुर', '14. JHARSUGUDA / झारसुगुडा', '15. KALAHANDI / कालाहांडी', '16. KANDHAMAL / कंधमाल', '17. KENDRAPARA / केंद्रपाड़ा', '18. KENDUJHAR / केंदुझार (क्योंझर)', '19. KHORDHA / खोर्दा ', '20. KORAPUT / कोरापुट', '21. MALKANGIRI / मलकानगिरी', '22. MAYURBHANJ / मयूरभंज', '23. NABARANGPUR / नबरंगपुर ', '24. NAYAGARH / नयागढ़', '25. NUAPADA / नुआपाड़ा ', '26. PURI / पुरी', '27. RAYAGADA / रायगढ़', '28. SAMBALPUR / संबलपुर', '29. SONEPUR / सोनेपुर ', '30. SUNDARGARH / सुंदरगढ़'];
    for (var i = 0; i < options.length; i++) {
      var option = document.createElement('option');
      option.value = options[i];
      option.text = options[i];
      secondSelect.appendChild(option);
    }
  }
  else if(firstSelectValue == 'Puducherry')
  {
    secondSelect.innerHTML = '';
    var options = ['-- Choose One -- ', '1. KARAIKAL / कराईकल', '2. MAHE / माहे', '3. PONDICHERRY / पांडिचेरी', '4. YANAM / यनम'];
    for (var i = 0; i < options.length; i++) {
      var option = document.createElement('option');
      option.value = options[i];
      option.text = options[i];
      secondSelect.appendChild(option);
    }
  }
  else if(firstSelectValue == 'Punjab')
  {
    secondSelect.innerHTML = '';
    var options = ['-- Choose One -- ', '1. AMRITSAR / अमृतसर', '2. BARNALA / बरनाला', '3. BATHINDA / बठिंडा', '4. FARIDKOT / फरीदकोट', '5. FATEHGARH SAHIB / फतेहगढ़ साहिब', '6. FAZILKA / फाजिल्का ', '7. FIROZEPUR / फिरोजपुर', '8. GURDASPUR / गुरदासपुर', '9. HOSHIARPUR / होशियारपुर', '10. JALANDHAR / जालंधर', '11. KAPURTHALA / कपूरथला', '12. LUDHIANA / लुधियाना', '13. MANSA / मानसा', '14. MOGA / मोगा', '15. PATHANKOT / पठानकोट', '16. PATIALA / पटियाला', '17. RUPNAGAR / रूपनगर', '18. SANGRUR / संगरूर', '19. SAS NAGAR / साहिबजादा अजीत सिंह नगर', '20. SHAHID BHAGAT SINGH NAGAR / शहीद भगत सिंह नगर', '21. SRI MUKTSAR SAHIB / मुक्तसर साहिब', '22. TARN TARAN / तरनतारन'];
    for (var i = 0; i < options.length; i++) {
      var option = document.createElement('option');
      option.value = options[i];
      option.text = options[i];
      secondSelect.appendChild(option);
    }
  }
  else if(firstSelectValue == 'Rajasthan')
  {
    secondSelect.innerHTML = '';
    var options = ['-- Choose One -- ', '1. AJMER / अजमेर', '2. ALWAR / अलवर', '3. BANSWARA / बांसवाड़ा', '4. BARAN / बारां', '5. BARMER / बाड़मेर', '6. BHARATPUR / भरतपुर', '7. BHILWARA / भीलवाड़ा', '8. BIKANER / बीकानेर', '9. BUNDI / बूंदी', '10. CHITTORGARH / चित्तौड़गढ़', '11. CHURU / चुरू', '12. DAUSA / दौसा', '13. DHOLPUR / धौलपुर', '14. DUNGARPUR / डूंगरपुर ', '15. GANGANAGAR / गंगानगर', '16. HANUMANGARH / हनुमानगढ़', '17. JAIPUR / जयपुर', '18. JAISALMER / जैसलमेर', '19. JALORE / जालौर', '20. JHALAWAR / झालावाड़', '21. JHUNJHUNU / झुनझुनू', '22. JODHPUR / जोधपुर', '23. KARAULI / करौली', '24. KOTA / कोटा', '25. NAGAUR / नागौर', '26. PALI / पाली', '27. PRATAPGARH / प्रतापगढ़', '28. RAJSAMAND / राजसमंद', '29. SAWAI MADHOPUR / सवाई माधोपुर', '30. SIKAR / सीकर', '31. SIROHI / सिरोही', '32. TONK / टोंक', '33. UDAIPUR / उदयपुर'];
    for (var i = 0; i < options.length; i++) {
      var option = document.createElement('option');
      option.value = options[i];
      option.text = options[i];
      secondSelect.appendChild(option);
    }
  }
  else if(firstSelectValue == 'Sikkim')
  {
    secondSelect.innerHTML = '';
    var options = ['-- Choose One -- ', '1. Gangtok / Gangtok', '2. Gyalshing / Gyalshing', '3. Mangan / Mangan', '4. Namchi / Namchi', '5. Pakyong / Pakyong', '6. Soreng / Soreng'];
    for (var i = 0; i < options.length; i++) {
      var option = document.createElement('option');
      option.value = options[i];
      option.text = options[i];
      secondSelect.appendChild(option);
    }
  }
  else if(firstSelectValue == 'Tamil_Nadu')
  {
    secondSelect.innerHTML = '';
    var options = ['-- Choose One -- ', '1. ARIYALUR / अरियालुर', '2. Chengalpattu / Chengalpattu', '3. CHENNAI / चेन्नई', '4. COIMBATORE / कोयंबटूर', '5. CUDDALORE / कुड्डालोर', '6. DHARMAPURI / धर्मपुरी', '7. DINDIGUL / डिंडीगुल', '8. ERODE / इरोड', '9. Kallakurichi / Kallakurichi', '10. KANCHIPURAM / कांचीपुरम', '11. KANNIYAKUMARI / कन्याकुमारी', '12. KARUR / करूर', '13. KRISHNAGIRI / कृष्णागिरि', '14. MADURAI / मदुरै', '15. Maliyaduthurai / Maliyaduthurai', '16. NAGAPATTINAM / नागपट्टिनम', '17. NAMAKKAL / नमक्कल', '18. PERAMBALUR / पेरम्बलुर', '19. PUDUKKOTTAI / पुदुक्कोट्टई', '20. RAMANATHAPURAM / रामनाथपुरम', '21. Ranipet / Ranipet', '22. SALEM / सलेम', '23. SIVAGANGA / शिवगंगा', '24. Tenkasi / Tenkasi', '25. THANJAVUR / तंजावुर', '26. THE NILGIRISH / नीलगिरी', '27. THENI / तब मैं', '28. THIRUVALLUR / तिरुवल्लुर', '29. THIRUVARUR / तिरुवरुर', '30. TIRUCHIRAPPALLI / तिरुचिरापल्ली', '31. TIRUNELVELI / तिरुनेलवेली', '32. Tirupattu / Tirupattu', '33. TIRUPPUR / तिरुपुर', '34. TIRUVANNAMALAI / तिरुवन्नामलाई', '35. TUTICORIN / थूठुकुदी ', '36. VELLORE / वेल्लोर', '37. VILLUPURAM / विलुप्पुरम ', '38. VIRUDHUNAGAR / विरुधुनगर'];
    for (var i = 0; i < options.length; i++) {
      var option = document.createElement('option');
      option.value = options[i];
      option.text = options[i];
      secondSelect.appendChild(option);
    }
  }
  else if(firstSelectValue == 'Telangana')
  {
    secondSelect.innerHTML = '';
    var options = ['-- Choose One -- ', '1. ADILABAD / आदिलाबाद', '2. BHADRADRI KOTHAGUDEM / बदाद्ररी', '3. HYDERABAD / हैदराबाद', '4. Jagitial / जगतियाल', '5. JANGOAN / जनगाव', '6. JAYASHANKAR BHUPALAPALLY / जयशंकर', '7. JOGULAMBA GADWAL / जॉग्लाम्बा', '8. KAMAREDDY / कामरेड्डी', '9. KARIMNAGAR / करीमनगर', '10. KHAMMAM / खम्मम', '11. KOMARAM BHEEM ASIFABAD / कॉमाराम भाईम असिबद', '12. MAHABUBABAD / महबूबाबाद', '13. MAHABUBNAGAR / महबूबनगर', '14. MANCHERIAL / मैनेजियल', '15. MEDAK / मेदक', '16. MEDCHAL MALKAJGIRI / मेडिकल मालकाजीरी', '17. Mulugu / Mulugu', '18. NAGARKURNOOL / नगरकुरनूल', '19. NALGONDA / नलगोंडा', '20. Narayanpet / Narayanpet', '21. Nirmal / निर्मल', '22. NIZAMABAD / निजामाबाद', '23. PEDDAPALLI / पेडडाप्ली', '24. RAJANNA SIRCILLA / राजाने', '25. RANGA REDDI / रंगा रेड्डी', '26. SANGAREDDY / सांगारेड्डी', '27. SIDDIPET / सिडिपएट', '28. SURYAPET / सुर्यापएट', '29. VIKARABAD / विकाराबाद', '30. WANAPARTHY / वानपार्थि', '31. WARANGAL RURAL / वारंगल ग्रामीण', '32. WARANGAL URBAN / वारंगल शहरी', '33. YADADRI BHUVANAGIRI / यादादरी'];
    for (var i = 0; i < options.length; i++) {
      var option = document.createElement('option');
      option.value = options[i];
      option.text = options[i];
      secondSelect.appendChild(option);
    }
  }
  else if(firstSelectValue == 'Tripura')
  {
    secondSelect.innerHTML = '';
    var options = ['-- Choose One -- ', '1. DHALAI / धलाई', '2. GOMATI / गोमती', '3. KHOWAI / खोवाई ', '4. NORTH TRIPURA / उत्तरी त्रिपुरा', '5. SEPAHIJALA / सेपहिजाला ', '6. SOUTH TRIPURA / दक्षिण त्रिपुरा', '7. UNAKOTI / उनोकोटी', '8. WEST TRIPURA / पश्चिम त्रिपुरा'];
    for (var i = 0; i < options.length; i++) {
      var option = document.createElement('option');
      option.value = options[i];
      option.text = options[i];
      secondSelect.appendChild(option);
    }
  }
  else if(firstSelectValue == 'Uttar_Pradesh')
  {
    secondSelect.innerHTML = '';
    var options = [' -- Choose One -- ', '1. AGRA / आगरा', '2. ALIGARH / अलीगढ़', '3. AMBEDAKAR NAGAR / अम्बेडकर नगर', '4. AMETHI / अमेठी ', '5. AMROHA / अमरोहा', '6. AURAIYA / औरैया', '7. AZAMGARH / आजमगढ़', '8. BAGHPAT / बागपत', '9. BAHRAICH / बहराइच', '10. BALLIA / बलिया', '11. BALRAMPUR / बलरामपुर', '12. BANDA / बांदा', '13. BARABANKI / बाराबंकी', '14. BAREILLY / बरेली', '15. BASTI / बस्ती', '16. BHADOHI / भदोही', '17. BIJNOR / बिजनौर', '18. BUDAUN / बदायूं ', '19. BULANDSHAHAR / बुलंदशहर', '20. CHANDAULI / चंदौली', '21. CHITRAKOOT / चित्रकूट', '22. DEORIA / देवरिया', '23. ETAH / एटा', '24. ETAWAH / इटावा', '25. FAIZABAD / फैजाबाद', '26. FARRUKHABAD / फर्रुखाबाद', '27. FATEHPUR / फतेहपुर', '28. FIROZABAD / फिरोजाबाद', '29. GAUTAM BUDDHA NAGAR / गौतमबुध नगर', '30. GHAZIABAD / गाजियाबाद', '31. GHAZIPUR / गाजीपुर', '32. GONDA / गोंडा', '33. GORAKHAPUR / गोरखपुर', '34. HAMIRPUR / हमीरपुर', '35. HAPUR / हापुड़', '36. HARDOI / हरदोई', '37. HATHRAS / हाथरस (महामाया नगर)', '38. JALAUN / जालौन', '39. JAUNPUR / जौनपुर ', '40. JHANSI / झाँसी', '41. KANNAUJ / कन्नौज', '42. KANPUR DEHAT / कानपुर देहात (रमाबाई नगर)', '43. KANPUR NAGAR / कानपुर नगर', '44. KASGANJ / कासगंज', '45. KAUSHAMBI / कौशाम्बी', '46. KUSHINAGAR / कुशीनगर', '47. LAKHIMPUR KHERI / लखीमपुर खीरी', '48. LALITPUR / ललितपुर', '49. LUCKNOW / लखनऊ', '50. MAHARAJGANJ / महाराजगंज', '51. MAHOBA / महोबा', '52. MAINPURI / मैनपुरी', '53. MATHURA / मथुरा', '54. MAU / मऊ', '55. MEERUT / मेरठ', '56. MIRZAPUR / मिर्जापुर', '57. MORADABAD / मुरादाबाद', '58. MUZAFFARNAGAR / मुज़फ्फरनगर', '59. PILIBHIT / पीलीभीत', '60. PRATAPGARH / प्रतापगढ़', '61. PRAYAGRAJ / प्रयागराज', '62. RAE BARELI / रायबरेली', '63. RAMPUR / रामपुर', '64. SAHARANPUR / सहारनपुर', '65. SAMBHAL / सम्भल', '66. SANT KABEER NAGAR / संत कबीर नगर', '67. SHAHJAHANPUR / शाहजहाँपुर', '68. SHAMLI / शामली', '69. SHRAVASTI / श्रावस्ती', '70. SIDDHARTHNAGAR / सिद्धार्थनगर', '71. SITAPUR / सीतापुर', '72. SONBHADRA / सोनभद्र ', '73. SULTANPUR / सुल्तानपुर', '74. UNNAO / उन्नाव', '75. VARANASI / वाराणसी'];
    for (var i = 0; i < options.length; i++) {
      var option = document.createElement('option');
      option.value = options[i];
      option.text = options[i];
      secondSelect.appendChild(option);
    }
  }
  else if(firstSelectValue == 'Uttarakhand')
  {
    secondSelect.innerHTML = '';
    var options = ['-- Choose One -- ', '1. ALMORA / अल्मोड़ा', '2. BAGESHWAR / बागेश्वर', '3. CHAMOLI / चमोली', '4. CHAMPAWAT / चंपावत', '5. DEHRADUN / देहरादून', '6. HARIDWAR / हरिद्वार', '7. NAINITAL / नैनीताल', '8. PAURI GARHWAL / पौड़ी गढ़वाल', '9. PITHORAGARH / पिथौरागढ़', '10. RUDRA PRAYAG / रूद्र प्रयाग', '11. TEHRI GARHWAL / टिहरी गढ़वाल', '12. UDHAM SINGH NAGAR / ऊधमसिंह नगर', '13. UTTARKASHI / उत्तरकाशी'];
    for (var i = 0; i < options.length; i++) {
      var option = document.createElement('option');
      option.value = options[i];
      option.text = options[i];
      secondSelect.appendChild(option);
    }
  }
  else if(firstSelectValue == 'West_Bengal')
  {
    secondSelect.innerHTML = '';
    var options = [' -- Choose One -- ', '1. ALIPURDUAR / अलीपुरद्वार', '2. BANKURA / बांकुरा', '3. BIRBHUM / बीरभूम', '4. COOCHBEHAR / कूचबिहार', '5. DAKSHIN DINAJPUR / दक्षिण दिनाजपुर', '6. DARJEELING / दार्जिलिंग', '7. EAST MEDINIPUR / पूर्ब मेदिनीपुर', '8. HOOGHLY / हुगली', '9. HOWRAH / हावड़ा', '10. JALPAIGURI / जलपाईगुड़ी', '11. Jhargram / झार्गरम', '12. KALIMPONG / कॅलीम्पोंग', '13. KOLKOTA / कोलकाता', '14. MALDA / मालदह ', '15. MURSHIDABAD / मुर्शिदाबाद', '16. NADIA / नादिया', '17. NORTH 24 PRAGANAS / उत्तरी 24 परगना', '18. PASCHIM BARDHAMAN / पश्चिम बर्धमान', '19. PURBA BARDHAMAN / पूर्ब बर्धमान', '20. PURULIA / पुरुलिया', '21. SOUTH 24 PRAGANAS / दक्षिण 24 परगना', '22. UTTAR DINAJPUR / उत्तर दिनाजपुर', '23. WEST MEDINIPUR / पश्चिम मेदिनीपुर'];
    for (var i = 0; i < options.length; i++) {
      var option = document.createElement('option');
      option.value = options[i];
      option.text = options[i];
      secondSelect.appendChild(option);
    }
  }

  else if(firstSelectValue=='')
  {
    secondSelect.innerHTML = '<option value="">Select an option</option>';
  }
});


</script>


</body>

</html>