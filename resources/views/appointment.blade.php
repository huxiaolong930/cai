@extends('layouts.app')

@section('htmlheader_title')
	Appointment
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

				<li>Appointment</li>
				</ul>
		</div>
	</div>
</div>
<!-- //breadcrumbs -->
<!-- Appointment -->
<div class="appointment">
   <div class="container">
	<div class="form-agileits">
	<h3>Make an appointment</h3>
	<p>Providing Total Health Care Solution</p>
	<form action="#" method="post">
		<input  class="name" type="text" name="Patient Name" placeholder="Patient Name" required=""/>
		<input type="text" name="Number" placeholder="Number" required=""/>
		<input class="name" type="email" name="Email" placeholder="Email" required=""/>
		<input  id="datepicker1" name="Text" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" placeholder="mm/dd/yyyy" required="">
		<select class="form-control name" placeholder="department">
			<option>Department</option>
			<option>Cardiology</option>
			<option>Ophthalmology</option>
			<option>Neurology</option>
			<option>Psychology</option>
			<option>Dermatology</option>
		</select>
		<select class="form-control">
			<option>Gender</option>
			<option>Male</option>
			<option>Female</option>
		</select>
		 <input type="submit" value="Make an appointment">
	</form>
	</div>
	<div class="timings-w3ls">
							<h5>Appointment Days</h5>
							<ul>
								<li>Pediatric <span>Sun-Tue</span></li>
								<li>Gynaecology<span>Wed-Fri</span></li>
								<li>Cardiac<span>Sat-Mon</span></li>
							</ul>
	</div>
	<div class="w3ls-location">
		<a href="locations.html">Locations</a>
	</div>
	</div>

	<div class="clearfix"> </div>
</div>
	<!-- //Appointment -->

@endsection


@section('self-script')
<!-- Calendar -->
				<script src="js/jquery-ui.js"></script>
				  <script>
						  $(function() {
							$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
						  });
				  </script>
			<!-- //Calendar -->
@endsection