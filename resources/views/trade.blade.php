@extends('layouts.app')

@section('htmlheader_title')
	Trade
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

				<li>Trade</li>
				</ul>
		</div>
	</div>
</div>
<!-- //breadcrumbs -->
<!-- Index diagram -->
	<div class="gallery w3-agileits">
		<div class="container">
			<h4 class="tittle-w3layouts">Trade</h4>
			<div class="trade">
				abc
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //Index diagram -->

@endsection


@section('self-script')
<script type="text/javascript" src="js/simple-lightbox.min.js"></script>
				<script>
					$(function(){
						var gallery = $('.agileinfo-gallery-row a').simpleLightbox({navText:		['&lsaquo;','&rsaquo;']});
					});
				</script>
@endsection