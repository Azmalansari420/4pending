<?php
$sitesetting = DB::Table('site_setting')->where('id',1)->first();
?>
@include('header');


<!-- breadcumb-area -->
<div class="breadcumb-area">
	<div class="container">				
		<div class="row">
			<div class="col-md-12 txtc  text-center ccase">
				<div class="brpt">
					<h2>Contact</h2>
				</div>
				<div class="breadcumb-inner">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><i class="fas fa-angle-right"></i></li>
						<li>Contact </li>
					</ul>					
				</div>
			</div>
		</div>
	</div>
</div>


<!-- hackery_contact2_area -->
<div class="hackery_contact_area contact2 contact_page">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="apartment_area">
					<div class="apartment_text">		
						<h1>// Contact us</h1>
						<p>ENQUIRY FORM </p>	
						
					</div>
					<div class="witr_apartment_form">
						<form method="post" action="">
							<div class="form-row">
								<div class="form-group col-md-6">
									<span><input type="text" name="name" placeholder="Your name*"></span>
								</div>
								<div class="form-group col-md-6">
									<div class="witr_form_field2">
										<span><input type="email" name="email" placeholder="Your email*"></span>
									</div>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<div class="witr_form_field2">
										<span><input type="text" name="mobile" placeholder="Your Mobile*"></span>
									</div>
								</div>

								<div class="form-group col-md-6">
									<div class="witr_form_field2">
										<span><input type="text" name="subject" placeholder="Your subject*"></span>
									</div>
								</div>
								
							</div>
							<div class="form-row">
								<div class="form-group col-md-12">
									<div class="witr_form_field2">
										<span><input type="text" name="address" placeholder="Your Address*"></span>
									</div>
								</div>
							</div>
							<div class="form-group">
								<span><textarea name="message" placeholder="Your Comment..."></textarea></span>
							</div>
							<p><button type="submit" name="submit" class="w_btn2">Send Request</button></p>
							
						</form>
					</div>					
				</div>									
			</div>
		</div>			
	</div>			
</div>		
	


<div class="hackery_address_area"> 
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6 col-sm-12">
				<div class="em-service2 sleft all_color_service">
					<div class="em_service_content ">
						<div class="em_single_service_text">
							<div class="service_top_image"></div>
							<div class="text_box">
								<div class="service_top_text all_icon_color">
									<div class="em-service-icon">
										<i class="icofont-map-pins"></i>
									</div>			
								</div>
								<div class="em-service-inner">
									<div class="em-service-title">
										<h3>ADDRESS: </h3>		
									</div>						
									<div class="em-service-desc">
										<p>{{$sitesetting->address}}</p>		
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12">
				<div class="em-service2 sleft all_color_service">
					<div class="em_service_content ">
						<div class="em_single_service_text">
							<div class="service_top_image"></div>
							<div class="text_box">
								<div class="service_top_text all_icon_color">
									<div class="em-service-icon">
										<i class="icofont-live-support"></i>
									</div>			
								</div>
								<div class="em-service-inner">
									<div class="em-service-title">
										<h3>PHONES: </h3>		
									</div>						
									<div class="em-service-desc">
										<p>{{$sitesetting->mobile}} </p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12">
				<div class="em-service2 sleft all_color_service">
					<div class="em_service_content ">
						<div class="em_single_service_text">
							<div class="service_top_image"></div>
							<div class="text_box">
								<div class="service_top_text all_icon_color">
									<div class="em-service-icon">
										<i class="icofont-wall-clock"></i>
									</div>			
								</div>
								<div class="em-service-inner">
									<div class="em-service-title">
										<h3>WORKING TIME:</h3>		
									</div>						
									<div class="em-service-desc">
										<p>Monday–Saturday: 08:00–06:00; Sunday - Closed </p>	
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>
	</div>
</div>


<!-- hackery_map_area -->
<div class="hackery_map_area"> 
	<div class="containers">
		<div class="row">
			<div class="col-lg-12">
				<div class="map_area">
					{!! $sitesetting->map !!}
				</div>	
			</div>
		</div>
	</div>
</div>

@include('footer');

