@extends('master')
@section('web-development')
	<main>
		<!--page-title-area start-->
		<section class="page-title-area title-area3" style="background-image: url(img/page-title/page-title-bg3.jpg);">
			<div class="container">
				<div class="row align-items-center pt-140 pt-xs-60">
					<div class="col-lg-6 col-md-5 text-md-end">
						<ul class="breadcrumb list-none breadcrumb-bg float-start">
							<li><a href="index.php">Services</a></li>
							<li class="active text-heding fw-bold" aria-current="page">Web Development</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!--page-title-area end-->
		<!--services-area start-->
		<section class="about-us-area pt-145 pb-90 pt-md-60 pb-md-30 pt-xs-60 pb-xs-30">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="about-text-wrapper2 mb-30 pr-75">
							<h6 class="semi-title semi-title2">WEB Development</h6>
							<h2 class="sect-title text-heding2 mb-35" style="font-size: 25px;">Corrupti magni voluptas
								assum enda, vitae nec dolores mole stie numquam totam, atquep</h2>
							<p class="paragraph-title" style="text-align: justify;">We provide an affordable,
								fast-loading, compatible, and highly secure website service for e-commerce and all types
								of web applications

							</p>

						</div>
					</div>
					<div class="col-lg-6">
						<div class="about-img-wrapper mb-30">
							<img src="{{asset('assets/img/web-dev.jpg')}}" class="img-fluid" alt="icon">
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--services-area end-->

		<section class="grey-bg2 chose-us-area service-page pt-120 pb-90 pt-md-60 pt-xs-60 pb-xs-60">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title text-center mb-60">
							<h6 class="semi-title semi-title2 text-center">WHAT WE CAN DO</h6>
							<h2 class="sect-title text-heding2 mb-35 text-center" style="font-size: 25px;">Our Web
								Development Services That We Offer</h2>
							<div class="bar"></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<div class="white-bg chose-box d-sm-flex align-items-center mb-30">
							<div class="chose-content pr-30 col-10">
								<h5 class="fs-20">DYNAMIC WEBSITE DEVELOPMENT</h5>
							</div>
							<h3 class="number-text">01</h3>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="white-bg chose-box d-sm-flex align-items-center mb-30">
							<div class="chose-content pr-30 col-10">
								<h5 class="fs-20">CUSTOM WEB APPLICATION DEVELOPMENT</h5>
							</div>
							<h3 class="number-text">02</h3>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="white-bg chose-box d-sm-flex align-items-center mb-30">
							<div class="chose-content pr-30 col-10">
								<h5 class="fs-20">E-COMMERCE SOLUTION</h5>
							</div>
							<h3 class="number-text">03</h3>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="white-bg chose-box d-sm-flex align-items-center mb-30">
							<div class="chose-content pr-30 col-10">
								<h5 class="fs-20">CLOUD SOLUTION</h5>
							</div>
							<h3 class="number-text">04</h3>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="white-bg chose-box d-sm-flex align-items-center mb-30">
							<div class="chose-content pr-30 col-10">
								<h5 class="fs-20">SERVER SETUP & MAINTENANCE</h5>
							</div>
							<h3 class="number-text">05</h3>
						</div>
					</div>
				</div>
			</div>
		</section>


	</main>
	@endsection