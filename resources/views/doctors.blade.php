@extends('layouts.app')

@section('htmlheader_title')
	Doctors
@endsection

@section('main-content')
<!-- modal -->
	<div class="modal about-modal w3-agileits fade" id="myModal2" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body login-page "><!-- login-page -->
									<div class="login-top sign-top">
										<div class="agileits-login">
										<h5>Login</h5>
										<form action="#" method="post">
											<input type="email" class="email" name="Email" placeholder="Email" required=""/>
											<input type="password" class="password" name="Password" placeholder="Password" required=""/>
											<div class="wthree-text">
												<ul>
													<li>
														<label class="anim">
															<input type="checkbox" class="checkbox">
															<span> Remember me ?</span>
														</label>
													</li>
													<li> <a href="#">Forgot password?</a> </li>
												</ul>
												<div class="clearfix"> </div>
											</div>
											<div class="w3ls-submit">
												<input type="submit" value="LOGIN">
											</div>
										</form>

										</div>
									</div>
						</div>
				</div> <!-- //login-page -->
			</div>
		</div>
	<!-- //modal -->
	<!-- modal -->
	<div class="modal about-modal w3-agileits fade" id="myModal3" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body login-page "><!-- login-page -->
									<div class="login-top sign-top">
										<div class="agileits-login">
										<h5>Register</h5>
										<form action="#" method="post">
											<input type="text" name="Username" placeholder="Username" required=""/>
											<input type="email"  name="Email" placeholder="Email" required=""/>
											<input type="password" name="Password" placeholder="Password" required=""/>
											<div class="wthree-text">
												<ul>
													<li>
														<label class="anim">
															<input type="checkbox" class="checkbox">
															<span> I accept the terms of use</span>
														</label>
													</li>
												</ul>
												<div class="clearfix"> </div>
											</div>
											<div class="w3ls-submit">
												<input type="submit" value="Register">
											</div>
										</form>

										</div>
									</div>
						</div>
				</div> <!-- //login-page -->
			</div>
		</div>
	<!-- //modal -->
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

				<li>Doctors</li>
				</ul>
		</div>
	</div>
</div>
<!-- //breadcrumbs -->
<!-- Doctors -->
<div class="blog" id="blog">
	<div class="container">
	<h4 class="tittle-w3layouts">Meet our physicians</h4>
		<div class="blog-grid-w3-agileits">
			<div class="blog-img1-agileits-w3layouts">
			</div>
			<div class="blog-info-w3layouts">
				<h6>Dr. Julia Jameson</h6>
				<div class="inner-info">
					<h3>Pediatrist</h3>
					<p class="para-wthree">Aenean pulvinar diam vel felis volutpat dictum. Aenean ac tellus suscipit sapien scelerisque tempus non mollis massa.</p>
				</div>
				<a href="single.html"class="blog-more-agile" >Read More</a>

			</div>
			<div class="clearfix"></div>
		</div>
		<div class="blog-grid-w3-agileits">
			<div class="blog-img2-agileits-w3layouts">
			</div>
			<div class="blog-info-w3layouts">
				<h6>Dr. Max Turner</h6>
				<div class="inner-info">
					<h3>Cardiologist</h3>
					<p class="para-wthree">Aenean pulvinar diam vel felis volutpat dictum. Aenean ac tellus suscipit sapien scelerisque tempus non mollis massa.</p>
				</div>
				<a href="single.html"class="blog-more-agile" >Read More</a>

			</div>
			<div class="clearfix"></div>
		</div>
		<div class="blog-grid-w3-agileits">
			<div class="blog-info-w3layouts second-info">
				<h6>Dr. Amy Adams</h6>
				<div class="inner-info">
					<h3>Faculty Physician</h3>
					<p class="para-wthree">Aenean pulvinar diam vel felis volutpat dictum. Aenean ac tellus suscipit sapien scelerisque tempus non mollis massa.</p>
				</div>
				<a href="single.html"class="blog-more-agile" >Read More</a>

			</div>
			<div class="blog-img3-agileits-w3layouts">
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="blog-grid-w3-agileits">
			<div class="blog-info-w3layouts second-info">
				<h6>Dr. Lacy Smith</h6>
				<div class="inner-info">
					<h3> Anesthetist </h3>
					<p class="para-wthree">Aenean pulvinar diam vel felis volutpat dictum. Aenean ac tellus suscipit sapien scelerisque tempus non mollis massa.</p>
				</div>
				<a href="single.html"class="blog-more-agile" >Read More</a>

			</div>
			<div class="blog-img4-agileits-w3layouts">
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>

<!-- //Doctors -->

@endsection
