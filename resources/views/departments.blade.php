@extends('layouts.app')

@section('htmlheader_title')
	Departments
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

				<li>Departments</li>
				</ul>
		</div>
	</div>
</div>
<!-- //breadcrumbs -->
<!-- gallery -->
	<div class="gallery w3-agileits">
		<div class="container">
			<h4 class="tittle-w3layouts">Our Departments</h4>
			<div class="agileinfo-gallery-row">
				<div class="col-md-4 col-sm-4 col-xs-6 w3gallery-grids">
					<a href="images/g1.jpg" class="imghvr-hinge-right wthree">
						<img src="images/g1.jpg" class="img-response" alt="" title="Dental"/>
						<div class="agile-figcaption">
						  <h4>Dental</h4>
						  <p>Phasellus elementum ullamcorper urna, eu rhoncus.</p>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-6 w3gallery-grids">
					<a href="images/g2.jpg" class="imghvr-hinge-right wthree">
						<img src="images/g2.jpg" alt="" class="img-response" title="Pediatric"/>
						<div class="agile-figcaption">
						  <h4>Pediatric</h4>
						  <p>Phasellus elementum ullamcorper urna, eu rhoncus.</p>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-6 w3gallery-grids">
					<a href="images/g3.jpg" class="imghvr-hinge-right wthree">
						<img src="images/g3.jpg" alt="" class="img-response" title="Dental"/>
						<div class="agile-figcaption">
						  <h4>Dental</h4>
						  <p>Phasellus elementum ullamcorper urna, eu rhoncus.</p>
						</div>
					</a>
				</div>
				<!---728x90--->
				<div class="col-md-4 col-sm-4 col-xs-6 w3gallery-grids">
					<a href="images/g4.jpg" class="imghvr-hinge-right wthree">
						<img src="images/g4.jpg" alt="" class="img-response" title="ENT"/>
						<div class="agile-figcaption">
						  <h4>ENT</h4>
						  <p>Phasellus elementum ullamcorper urna, eu rhoncus.</p>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-6 w3gallery-grids">
					<a href="images/g5.jpg" class="imghvr-hinge-right wthree">
						<img src="images/g5.jpg" alt="" class="img-response" title="Gynaecology"/>
						<div class="agile-figcaption">
						  <h4>Gynaecology</h4>
						  <p>Phasellus elementum ullamcorper urna, eu rhoncus.</p>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-6 w3gallery-grids">
					<a href="images/g6.jpg" class="imghvr-hinge-right wthree">
						<img src="images/g6.jpg" alt="" class="img-response" title="Dermatology"/>
						<div class="agile-figcaption">
						  <h4>Dermatology</h4>
						  <p>Phasellus elementum ullamcorper urna, eu rhoncus.</p>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-6 w3gallery-grids">
					<a href="images/g7.jpg" class="imghvr-hinge-right wthree">
						<img src="images/g7.jpg" alt="" class="img-response" title="Orthopedic"/>
						<div class="agile-figcaption">
						  <h4>Orthopedic</h4>
						  <p>Phasellus elementum ullamcorper urna, eu rhoncus.</p>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-6 w3gallery-grids">
					<a href="images/g8.jpg" class="imghvr-hinge-right wthree">
						<img src="images/g8.jpg" alt="" class="img-response" title="Cardiac"/>
						<div class="agile-figcaption">
						  <h4>Cardiac</h4>
						  <p>Phasellus elementum ullamcorper urna, eu rhoncus.</p>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-6 w3gallery-grids">
					<a href="images/g9.jpg" class="imghvr-hinge-right wthree">
						<img src="images/g9.jpg" alt="" class="img-response" title="Pediatric"/>
						<div class="agile-figcaption">
						  <h4>Pediatric</h4>
						  <p>Phasellus elementum ullamcorper urna, eu rhoncus.</p>
						</div>
					</a>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //gallery -->

@endsection


@section('self-script')
<script type="text/javascript" src="js/simple-lightbox.min.js"></script>
				<script>
					$(function(){
						var gallery = $('.agileinfo-gallery-row a').simpleLightbox({navText:		['&lsaquo;','&rsaquo;']});
					});
				</script>
@endsection