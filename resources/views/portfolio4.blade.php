@extends('master')
@section('portfolio_4')
	<main>
		<!--page-title-area start-->
		<section class="page-title-area title-area3" style="background-image: url({{URL::asset('assets/img/page-title/page-title-bg3.jpg')}});">
		
			<div class="container">
				<div class="row align-items-center pt-140 pt-xs-60">
					<div class="col-lg-6 col-md-5 text-md-end">
						<ul class="breadcrumb list-none breadcrumb-bg float-start">
							<li><a href="index.php">Services</a></li>
							<li class="active text-heding fw-bold" aria-current="page">HOSPITAL
								MANAGEMENT SYSTEM</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!--page-title-area end-->

		<!-- Portfolio-area start-->
		<section class="news-feed-area pt-120 pb-75 pt-md-60 pb-md-15 pt-xs-50 pb-xs-10">
			<div class="container">
				<div class="row mb-15">
					<div class="col-lg-12 pe-xl-0">
						<div class="news-left">
							<div class="blogs blog-4 mb-40">
								<div class="blog__thumb mb-55 ">
									<a href="news-details.php">
										<img class="img-fluid  w-100" src="{{asset('assets/img/hospitalmanagement.jpg')}}" alt="Blog Img">
									</a>
									<div class="tag">HOSPITAL
										MANAGEMENT SYSTEM</div>
								</div>
								<div class="blog-content">
									<h3><a class="blog-title4" href="news-details.php">Both the act of teaching
											knowledge to others and
											the act of kind of design thinking.</a></h3>
									<p class="mb-20">The Product is a mobile app-based web application which will
										provide different
										medical services to the user through internet.
									</p>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<ul>
											<li><i aria-hidden="true" class="fas fa-check"
													style="color: blue;margin-right: 5px;"></i>Doctor appointment and
												e-prescription</li>
											<li><i aria-hidden="true" class="fas fa-check"
													style="color: blue;margin-right: 5px;"></i>Pathology test package
												service</li>
										</ul>
									</div>
									<div class="col-lg-6">
										<ul>
											<li><i aria-hidden="true" class="fas fa-check"
													style="color: blue;margin-right: 5px;"></i>On demand Home
												Service</li>
											<li><i aria-hidden="true" class="fas fa-check"
													style="color: blue;margin-right: 5px;"></i>Medical equipment
												renting service</li>
										</ul>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="section-title text-center mb-60">
											<h6 class="semi-title semi-title2 text-center">CORE FEATURES</h6>
											<div class="bar"></div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col col-md-12">
										<ul>
											<li><i class="fa fa-angle-double-right" aria-hidden="true"
													style="color: blue;margin-right: 5px;"></i>Login and OTP
												verification system</li>
											<li><i class="fa fa-angle-double-right" aria-hidden="true"
													style="color: blue;margin-right: 5px;"></i>Admin role management
											</li>
											<li><i class="fa fa-angle-double-right" aria-hidden="true"
													style="color: blue;margin-right: 5px;"></i>Admin panel
											</li>
											<li><i class="fa fa-angle-double-right" aria-hidden="true"
													style="color: blue;margin-right: 5px;"></i>Basic accounts and
												inventory management</li>
											<li><i class="fa fa-angle-double-right" aria-hidden="true"
													style="color: blue;margin-right: 5px;"></i>Corporate website</li>
											<li><i class="fa fa-angle-double-right" aria-hidden="true"
													style="color: blue;margin-right: 5px;"></i>Content management system
											</li>
											<li><i class="fa fa-angle-double-right" aria-hidden="true"
													style="color: blue;margin-right: 5px;"></i>Live chat support system
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Portfolio-area end-->



	</main>
@endsection