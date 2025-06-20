<?php
$sitesetting = DB::Table('site_setting')->where('id',1)->first();
?>



<!-- witrfm_footer_area -->
<div class="witrfm_area">
	<div class="footer-middle">  
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-6  col-lg-4 ">
					<div class="widget widget_hackery_description_widget">			
						<div class="hackery-description-area">
							<h2 class="widget-title">About Us</h2>
							<a href="{{url('')}}" ><img src="{{url('public')}}/media/uploads/site_setting/{{$sitesetting->logo}}" alt="Footer logo"></a>
							 <p>ASR Bike Mechanic proposition web based booking administrations for Bike adjusting and fixing at client favored area whether it's home or office.</p>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="widget widget_nav_menu">
						<h2 class="widget-title">Quick Links</h2>
						<div class="menu-help-link-container">
							<ul  class="menu">
								<li><a href="{{'privecy-policie'}}">Privacy Policy</a></li>

								<li><a href="{{'term-condition'}}">Terms & Conditions</a></li>
							</ul>
						</div>
					</div>	
				</div>


				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="widget widget_nav_menu">
						<h2 class="widget-title">Head Office</h2>
						<div class="menu-help-link-container">
							<ul  class="menu">
								<li><a href="#"><i class="icofont-home"></i> {{$sitesetting->address}}</a></li>
								<li><a href="tel:{{$sitesetting->mobile}}"><i class="icofont-phone"></i> {{$sitesetting->mobile}}</a></li>
								<!--<li><a href="#"><i class="icofont-mobile-phone"></i> 91xxxxxxx</a></li>-->
								<li><a href="mailto:{{$sitesetting->email}}"><i class="icofont-email"></i> {{$sitesetting->email}}</a></li>
							</ul>

						</div>
						<div class="hackery-description-area">
							  <div class="social-icons">
								<a href="{{$sitesetting->facebook}}"><i class="fab fa-facebook-f"></i></a>
								<a href="{{$sitesetting->twitter}}"><i class="fab fa-twitter"></i></a>
								<a href="{{$sitesetting->instagram}}"><i class="fab fa-instagram"></i></a>
							</div>							
						</div>
					</div>	
				</div>


				
			</div>
		</div>	
	</div>		
	<div class="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12  col-sm-12 text-center">
					<div class="copy-right-text">
						<p>Copyright &copy; ASR Bike Mechanic all rights reserved.</p>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>


        <!-- Include All JS -->
        <script src="{{url('/')}}/assets/js/vendor/jquery-3.5.1.min.js"></script>
        <script src="{{url('/')}}/assets/js/bootstrap.min.js"></script>
        <script src="{{url('/')}}/assets/js/isotope.pkgd.min.js"></script>
        <script src="{{url('/')}}/assets/js/owl.carousel.min.js"></script>
        <script src="{{url('/')}}/assets/js/jquery.nivo.slider.pack.js"></script>
        <script src="{{url('/')}}/assets/js/slick.min.js"></script>
        <script src="{{url('/')}}/assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="{{url('/')}}/venobox/venobox.min.js"></script>
        <script src="{{url('/')}}/assets/js/jquery.appear.js"></script>
        <script src="{{url('/')}}/assets/js/jquery.knob.js"></script>
        <script src="{{url('/')}}/assets/js/BeerSlider.js"></script>
        <script src="{{url('/')}}/assets/js/theme-pluginjs.js"></script>
        <script src="{{url('/')}}/assets/js/jquery.meanmenu.js"></script>
        <script src="{{url('/')}}/assets/js/ajax-mail.js"></script>		
        <script src="{{url('/')}}/assets/js/theme.js"></script>



	<script>
    var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?66516';
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = url;
    var options = {
  "enabled":true,
  "chatButtonSetting":{
      "backgroundColor":"#4dc247",
      "ctaText":"Message us",
      "borderRadius":"25",
      "marginLeft":"0",
      "marginBottom":"50",
      "marginRight":"50",
      "position":"right"
  },
  "brandSetting":{
      "brandName":"ASR Bike Mechanic",
      "brandSubTitle":"Typically replies within a day",
      "brandImg":"{{url('public')}}/media/uploads/site_setting/{{$sitesetting->logo}}",
      "welcomeText":"Hi there!\nHow can I help you?",
      "messageText":"Hello, I have a question about ",
      "backgroundColor":"#0a5f54",
      "ctaText":"Start Chat",
      "borderRadius":"25",
      "autoShow":false,
      "phoneNumber":"917678348620"
  }
};
    s.onload = function() {
        CreateWhatsappChatWidget(options);
    };
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
</script>

        
</body>
</html>