@extends('layouts.app')

@section('htmlheader_title')
	Home
@endsection

@section('main-content')
<!-- banner -->
<div class="inner-banner-agileits-w3layouts">
</div>
<!-- //banner -->
<!-- breadcrumbs -->
<div class="w3l_agileits_breadcrumbs">
   <div class="container">
		<div class="w3l_agileits_breadcrumbs_inner">
			<ul>
				<li><a href="main.html">Home</a><span>«</span></li>

				<li>Single</li>
				</ul>
		</div>
	</div>
</div>
<!-- //breadcrumbs -->
<!-- blog -->
	<div class="blog">
			<!-- container -->
			<div class="container">

				<div class="col-md-4 blog-top-right-grid">
					<div class="Categories stand-w3ls">
						<h3>Recent News</h3>
						<ul>
							<li><a href="#">Ultrasmall nanoparticles kill cancer cells in unusual way</a><span class="glyphicon glyphicon glyphicon-time" aria-hidden="true"> May 2017</span></li>
							<li><a href="#">Eye lens regeneration from own stem cells </a><span class="glyphicon glyphicon glyphicon-time" aria-hidden="true"> June 2017</span></li>
						</ul>
					</div>
					<div class="Categories move-w3ls">
						<h3>Clinical Care Services</h3>
						<ul class="marked-list offs1">
							<li><span class="glyphicon glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="#">General and Preventive Care</a></li>
							<li><span class="glyphicon glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="#">Cosmetic Solutions</a></li>
							<li><span class="glyphicon glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="#"> Routine Medical Care</a></li>
							<li><span class="glyphicon glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="#">Additional Treatments</a> </li>
							<li><span class="glyphicon glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="#">Orthodontics</a></li>
							<li><span class="glyphicon glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="#">Dentures & Denture Repair</a></li>
							<li><span class="glyphicon glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="#">Diagnostic & Preventive</a></li>
							<li><span class="glyphicon glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="#">Diagnostic Imaging</a> </li>
							<li><span class="glyphicon glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="#">Pediatric Dentistry</a></li>
							<li><span class="glyphicon glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="#">Gastroenterology</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-8 blog-top-left-grid">
					<div class="left-blog left-single">
						<div class="blog-left">
							<div class="single-left-left">
								<p>Posted By <a href="#">Admin</a> &nbsp;&nbsp; on Feb 28, 2017 &nbsp;&nbsp; <a href="#">Comments (10)</a></p>
								<img src="images/b1.jpg" alt="" />
							</div>
							<div class="blog-left-bottom">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Sed blandit massa vel mauris sollicitudin
									dignissim. Phasellus ultrices tellus eget ipsum ornare molestie scelerisque eros dignissim. Phasellus
									fringilla hendrerit lectus nec vehicula. ultrices tellus eget ipsum ornare consectetur adipiscing elit.Sed blandit .
								</p>
							</div>
							<div class="blog-left-bottom left-bottom">
								<p> Phasellus fringilla hendrerit lectus nec vehicula. ultrices tellus eget ipsum ornare consectetur adipiscing elit.Sed blandit .
								</p>
							</div>
						</div>
						<!---728x90--->
						<div class="response">
							<h3>Responses</h3>
							<div class="media response-info">
								<div class="media-left response-text-left">
									<a href="#">
										<img class="media-object" src="images/t1.jpg" alt="">
									</a>
									<h5><a href="#">Admin</a></h5>
								</div>
								<div class="media-body response-text-right">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available,
										sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									<ul>
										<li>Feb 28, 2017</li>
										<li><a href="single.html">Reply</a></li>
									</ul>
									<div class="media response-info">
										<div class="media-left response-text-left">
											<a href="#">
												<img class="media-object" src="images/t2.jpg" alt="">
											</a>
											<h5><a href="#">Admin</a></h5>
										</div>
										<div class="media-body response-text-right">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available,
												sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
											<ul>
												<li>Mar 21, 2017</li>
												<li><a href="single.html">Reply</a></li>
											</ul>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="media response-info">
								<div class="media-left response-text-left">
									<a href="#">
										<img class="media-object" src="images/t3.jpg" alt="">
									</a>
									<h5><a href="#">Admin</a></h5>
								</div>
								<div class="media-body response-text-right">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available,
										sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									<ul>
										<li>Mar 31, 2017</li>
										<li><a href="single.html">Reply</a></li>
									</ul>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<!---728x90--->
						<div class="opinion">
							<h3>Leave your comment</h3>
							<form action="#" method="post">
								<input type="text" name="Name" placeholder="Name" required="">
								<input type="email" name="Email" placeholder="Email" required="">
								<textarea name="Message" placeholder="Message" required=""></textarea>
								<input type="submit" value="SEND">
							</form>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<!-- //container -->
	</div>
	<!-- //blog -->

@endsection
