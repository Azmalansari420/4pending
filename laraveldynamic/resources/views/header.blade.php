
<!DOCTYPE HTML>
<html lang="en-US">
 <head>
		<meta charset="UTF-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">

		{!! $meta_html ?? '' !!}


		<title>{{env('website_name')}}</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Favicon Icon -->
        <link rel="icon"  type="image/png" href="{{url('public')}}/media/uploads/site_setting/{{$sitesetting->logo}}">		
        <link rel="stylesheet" type="text/css" href="{{url('')}}/assets/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="{{url('')}}/venobox/venobox.css"/>
        <link rel="stylesheet" type="text/css" href="{{url('')}}/assets/css/plugin_theme_css.css"/>
		<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/css/style.css"/>
		<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/css/responsive.css"/>
		<!-- modernizr js -->	
        <script src="{{url('')}}/assets/js/vendor/modernizr-2.8.3.min.js"></script>	
    </head>
<body>
<div class="em40_header_area_main">
	<!-- HEADER TOP AREA -->
	<div class="hackery-header-top">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-lg-7 col-xl-9 col-md-9 col-sm-12">
					<div class="top-address">
						<p>	
							<span><i class="fas fa-home"></i>{{$sitesetting->address}}</span>
							<a href="tel:{{$sitesetting->mobile}}"><i class="fas fa-phone-alt"></i>{{$sitesetting->mobile}}</a>
							<a href="mailto:{{$sitesetting->email}}"><i class="fas fa-envelope"></i>{{$sitesetting->email}}</a>
						</p>
					</div>
				</div>
				<div class="col-xs-12 col-lg-3 col-xl-3 col-md-3 col-sm-12 ">
					<div class="top-right-menu">
						<ul class="social-icons text-right text_m_center">
							<li><a href="{{$sitesetting->facebook}}" target="_blank"><i class="fa fa-facebook-f"></i></a></li>
							<li><a href="{{$sitesetting->twitter}}" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="{{$sitesetting->instagram}}" target="_blank"><i class="fab fa-instagram"></i></a></li>							
						</ul>
					</div>
				</div>	
			</div>										
		</div>
	</div>
	<!-- END HEADER TOP AREA -->
 	<div class="hackery-main-menu one_page hidden-xs hidden-sm  witr_h_h10">
		<div class="hackery_nav_area scroll_fixed postfix">
			<div class="container">
				<div class="row logo-left">				
					<div class="col-md-3 col-sm-3 col-xs-4">
						<div class="logo" style="padding: 6px 0;">
							<a class="main_sticky_main_l" href="{{url('')}}" title="Hackery">
								<img src="{{url('public')}}/media/uploads/site_setting/{{$sitesetting->logo}}" alt="Hackery">
							</a>
							<a class="main_sticky_l" href="{{url('')}}" title="Hackery">
								<img src="{{url('public')}}/media/uploads/site_setting/{{$sitesetting->logo}}" alt="Hackery">
							</a>
						</div>	
					</div>
					<!-- MAIN MENU -->
					<div class="col-md-9 col-sm-9 col-xs-8">
						<nav class="hackery_menu main-search-menu">						
							<ul class="sub-menu">
								<li class="menu-item-has-children">
									<a href="{{url('')}}">Home</a>
								</li>
								<li class="menu-item-has-children">
									<a href="{{url('about')}}">About</a>
								</li>
								<li class="menu-item-has-children">
									<a href="{{url('service')}}">Our Price</a>
								</li>
								<li class="menu-item-has-children">
									<a href="{{url('our-price')}}">Our Service</a>
								</li>
								
								<li class="menu-item-has-children">
									<a href="{{url('blog')}}">Blog</a>
								</li>
								<li class="menu-item-has-children">
									<a href="{{url('contact')}}">Contact</a>
								</li>
							</ul>
							<div class="donate-btn-header">
								<a class="dtbtn" href="{{url('contact')}}">Book Now</a>	
							</div>	
						</nav>
					</div>	
				</div>
			</div>
		</div>
	</div>
</div>


<!-- MOBILE MENU Logo AREA -->
<div class="mobile_logo_area hidden-md hidden-lg">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="mobile_menu_logo text-center">
					<a href="{{url('')}}" title="hackery">
						<img src="{{url('public')}}/media/uploads/site_setting/{{$sitesetting->logo}}" alt="hackery">
					</a>		
				</div>
			</div>
		</div>
	</div>
</div>

<!-- MOBILE MENU AREA -->
<div class="home-2 mbm hidden-md hidden-lg  header_area main-menu-area">
	<div class="menu_area mobile-menu">
		<nav class="hackery_menu">						
			<ul class="sub-menu">
				<li class="menu-item-has-children">
					<a href="{{url('')}}">Home</a>
					
				</li>
				<li class="menu-item-has-children">
					<a href="{{url('about')}}">About</a>
					
				</li>
				<li class="menu-item-has-children">
					<a href="{{url('our-price')}}">Our Service</a>
					
				</li>
				<li class="menu-item-has-children">
					<a href="{{url('service')}}">Our Price</a>
					
				</li>
				<li class="menu-item-has-children">
					<a href="{{url('blog')}}">Blog</a>
					
				</li>
				<li class="menu-item-has-children">
					<a href="{{url('contact')}}">Contact</a>
					
				</li>
			</ul>
			
		</nav>	
	</div>					
</div>
<!-- END MOBILE MENU AREA  -->

