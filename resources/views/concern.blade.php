@extends('master')
@section('concern')
	
	
	<main>
		<!--page-title-area start-->
		<section class="page-title-area title-area3" style="background-image: url(img/page-title/page-title-bg3.jpg);">
			<div class="container">
				<div class="row align-items-center pt-140 pt-xs-60">
					<div class="col-lg-6 col-md-5 text-md-end">
						<ul class="breadcrumb list-none breadcrumb-bg float-start">
							<li><a href="index.php">Services</a></li>
							<li class="active text-heding fw-bold" aria-current="page">Our Concern</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!--page-title-area end-->
		<!--portfolio-area start-->
		<section class="portfolio-area pt-110 pb-90 pt-md-60 pb-md-30 pt-xs-60 pb-xs-30">
			<div class="container">
				<div class="grid row align-items-center">
					<div class="col-lg-4 col-md-6 col-sm-6 grid-item cat2 " style="height: 400px;width: 400px;">
						<div class="portfolio-wrapper2 mb-30">
							<img class="img-fluid" src="{{asset('assets/img/mindboost.png')}}" alt="Portfolio Img">
							<div class="portfolio-content">
								<p>Sister Concern Of Aveenir IT</p>
								<h3 class="portfolio-title text-white" style="font-size: 20px;">Mental Health Care</h3>
								<a class="fs-14 fw-bold text-white" href="#">Logo Details </a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6 grid-item cat2 " style="height: 400px;width: 400px;">
						<div class="portfolio-wrapper2 mb-30">
							<img class="img-fluid" src="{{asset('assets/img/edu.png')}}" alt="Portfolio Img">
							<div class="portfolio-content">
								<p>Sister Concern Of Aveenir IT</p>
								<h3 class="portfolio-title text-white" style="font-size: 20px;">Career Consultancy</h3>
								<a class="fs-14 fw-bold text-white" href="#">Logo Details </a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6 grid-item cat2 " style="height: 400px;width: 400px;">
						<div class="portfolio-wrapper2 mb-30">
							<img class="img-fluid" src="{{asset('assets/img/monarch.png')}}" alt="Portfolio Img">
							<div class="portfolio-content">
								<p>Sister Concern Of Aveenir IT</p>
								<h3 class="portfolio-title text-white" style="font-size: 20px;">Clothing Brand</h3>
								<a class="fs-14 fw-bold text-white" href="#">Logo Details </a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6 grid-item cat2 " style="height: 400px;width: 400px;">
						<div class="portfolio-wrapper2 mb-30">
							<img class="img-fluid" src="{{asset('assets/img/axiom.png')}}" alt="Portfolio Img">
							<div class="portfolio-content">
								<p>Sister Concern Of Aveenir IT</p>
								<h3 class="portfolio-title text-white" style="font-size: 20px;">Interior Studio</h3>
								<a class="fs-14 fw-bold text-white" href="#">Logo Details </a>
							</div>
						</div>
					</div>
				</div>

			</div>
		</section>
		<!--portfolio-area end-->
	</main>
@endsection