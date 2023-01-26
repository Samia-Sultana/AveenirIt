@extends('master')
@section('gallery')
	<main>
		<!--page-title-area start-->
		<section class="page-title-area title-area3" style="background-image: url(img/page-title/page-title-bg3.jpg);">
			<div class="container">
				<div class="row align-items-center pt-140 pt-xs-60">
					<div class="col-lg-6 col-md-5 text-md-end">
						<ul class="breadcrumb list-none breadcrumb-bg float-start">
							<li class="active text-heding fw-bold" aria-current="page">Gallery</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!--page-title-area end-->

		<!--Gallery-area start-->
		<section class=" pt-120 pb-90 pt-md-60 pb-md-30 pt-xs-60 pb-xs-30 home-4">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title text-center mb-55">
							<h2 class="sect-title">OUR OFFICE</h2>
							<div class="bar"></div>
						</div>
					</div>
				</div>
				<div class="grid row align-items-center">
					<div class="col-lg-4 col-md-6 col-sm-6 grid-item cat3 cat4">
						<div class=" mb-30">
							<img class="img-fluid" src="{{asset('assets/img/office2.jpg')}}" alt="Portfolio Img">
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6 grid-item cat3 cat4">
						<div class=" mb-30">
							<img class="img-fluid" src="{{asset('assets/img/office3.jpg')}}" alt="Portfolio Img">
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6 grid-item cat3 cat4">
						<div class=" mb-30">
							<img class="img-fluid" src="{{asset('assets/img/office4.jpg')}}" alt="Portfolio Img">
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6 grid-item cat3 cat4">
						<div class=" mb-30">
							<img class="img-fluid" src="{{asset('assets/img/office5.jpg')}}" alt="Portfolio Img">
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6 grid-item cat3 cat4">
						<div class=" mb-30">
							<img class="img-fluid" src="{{asset('assets/img/office6.jpg')}}" alt="Portfolio Img">
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6 grid-item cat3 cat4">
						<div class=" mb-30">
							<img class="img-fluid" src="{{asset('assets/img/office7.jpg')}}" alt="Portfolio Img">
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6 grid-item cat3 cat4">
						<div class=" mb-30">
							<img class="img-fluid" src="{{asset('assets/img/office8.jpg')}}" alt="Portfolio Img">
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--Gallery-area end-->


	</main>
	@endsection