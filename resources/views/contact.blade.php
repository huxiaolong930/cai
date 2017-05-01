@extends('layouts.app')

@section('htmlheader_title')
	Contact
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

				<li>Contact</li>
				</ul>
		</div>
	</div>
</div>
<!-- //breadcrumbs -->
<!-- contact -->
	<div class="contact w3-agileits">
		<div class="container">
			<h4 class="tittle-w3layouts">Contact Us</h4>
			<div class="contact-w3lsrow">
				<div class="contact-right">
					<form action="#" method="post">
						<input type="text" name="Name" placeholder="Name" required="">
						<input type="text" name="Email" placeholder="Email" required="">
						<input type="text" name="Subject" placeholder="Subject" required="">
						<textarea name="Message" placeholder="Message" required=""></textarea>
						<input type="submit" value="SEND">
					</form>
				</div>
				<div class="contact-left wthree">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.9503398796587!2d-73.9940307!3d40.719109700000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a27e2f24131%3A0x64ffc98d24069f02!2sCANADA!5e0!3m2!1sen!2sin!4v1441710758555" allowfullscreen></iframe>
					<div class="timings-w3ls">
						<h5>Appointment Days</h5>
						<ul>
							<li>Pediatric <span>Sun-Tue</span></li>
							<li>Gynaecology<span>Wed-Fri</span></li>
							<li>Cardiac<span>Sat-Mon</span></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- Address -->
<div class="container">
			<div class="w3agile_footer_grid">
				<div class="w3agile_footer_grid_left">
					<div class="w3agile_footer_grid_left1">
						<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
					</div>
					<h4>Fort McMurray, AB Canada.</h4>
				</div>
				<div class="w3agile_footer_grid_left">
					<div class="w3agile_footer_grid_left1">
						<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
					</div>
					<a href="mailto:info@example.com">info@example.com</a>
				</div>
				<div class="w3agile_footer_grid_left">
					<div class="w3agile_footer_grid_left1">
						<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
					</div>
					<h4>+(1234) 012 132 312</h4>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
<!-- //Address -->
	</div>
	<!-- //contact -->

@endsection