@include('header');






<!-- breadcumb-area -->
<div class="breadcumb-area">
	<div class="container">				
		<div class="row">
			<div class="col-md-12 txtc  text-center ccase">
				<div class="brpt">
					<h2>{{$EDITDATA[0]->name}}</h2>
				</div>
				<div class="breadcumb-inner">
					<ul>
						<li><a href="{{url('')}}">Home</a></li>
						<li><i class="fas fa-angle-right"></i></li>
						<li>{{$EDITDATA[0]->name}}</li>
					</ul>						
				</div>
			</div>
		</div>
	</div>
</div>

	
<!-- BLOG AREA -->
<div class="witr-blog-side-area  blog_area single_blog ">
	<div class="container">		
		<div class="row">							
			<div class="col-lg-8 col-md-7 col-sm-12">
				<!-- SINGLE BLOG -->
				<div class="single_blog single_blog_grid singles">
					<div class="single_blog_thumb">
						<img src="{{'public/media/uploads/blog/'.$EDITDATA[0]->image}}" alt=""> 
					</div>
					<!-- BLOG TITLE -->
					<div class="hackery-single-blog-details-inner">	
						<div class="hackery-single-blog-title">
							<h2>{{$EDITDATA[0]->name}}</h2>	
						</div>
						
						<div class="hackery-single-blog-content">
							<div class="single-blog-content">
								<p> {!! $EDITDATA[0]->content !!} </p>
							</div>
							
						</div>
						
					</div>
				</div>
				
			</div>


			<div class="col-lg-4 col-md-5  col-sm-12 col-xs-12 sidebar-right content-widget pdsl">
				<div class="blog-left-side widget">
					
					<div class="widget widget_recent_data">
						<div class="single-widget-item">
							<h2 class="widget-title">Recent Posts</h2>	
							@php
							$engineer = DB::Table('blog')->orderBy('id','desc')->where('status',1)->get();
							@endphp
							@foreach($engineer as $data)			
							<div class="recent-post-item">
								<div class="recent-post-image">
									<a href="{{$data->slug}}">
										<img src="{{'public/media/uploads/blog/'.$data->image}}" alt="" style="height: 45px;"/>
									</a>
								</div>
								<div class="recent-post-text">
									<h4>
										<a href="{{$data->slug}}">
											{{$data->name}}
										</a>
								    </h4>					
								</div>
							</div>
							@endforeach
						</div>
					</div>
										
				</div>
			</div>
		</div>
	</div>
</div>	

@include('footer');

