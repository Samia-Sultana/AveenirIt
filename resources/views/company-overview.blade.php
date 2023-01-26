@extends('master')
@section('company-overview')
	<main>
		<!--page-title-area start-->
		<section class="page-title-area title-area3" style="background-image: url(../../public/assets/img/page-title/page-title-bg3.jpg);">
			<div class="container">
				<div class="row align-items-center pt-140 pt-xs-60">
					<div class="col-lg-6 col-md-5 text-md-end">
						<ul class="breadcrumb list-none breadcrumb-bg float-start">
							<li><a href="{{route('index')}}">About</a></li>
							<li class="active text-heding fw-bold" aria-current="page">About Us</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!--page-title-area end-->
		<!--about-us-area start-->
		<section class="about-us-area pt-145 pb-90 pt-md-60 pb-md-30 pt-xs-60 pb-xs-30">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="about-text-wrapper2 mb-30 pr-75">
							<h6 class="semi-title title-line">About Company</h6>
							<h2 class="sect-title text-heding2 mb-35" style="font-size: 25px;">We are blessed with a
								highly-skilled, creative & hard-working team of IT specialists</h2>
							<p class="paragraph-title" style="text-align: justify;">
								AVEENIR is a leading provider of advanced IT solutions and consultation services to a
								wide range of clients, including businesses,
								government entities, NGOs, and INGOs. Founded by a team of ambitious and talented young
								entrepreneurs, the company aims to contribute
								to the field of technology-based business in Bangladesh by offering digitalization and
								automation services. Our team is composed of
								highly-skilled and experienced IT professionals, who possess a wealth of knowledge in
								the field of information technology and the creative
								sector. We are proud to work with many prominent companies from all over the world as IT
								partners and digital branding agencies, providing
								360-degree solutions for business automation and digitalization</p>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="about-img-wrapper mb-30">
							<img class="img-fluid" src="{{asset('assets/img/Company_overview.jpg')}}" alt="icon">
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--about-us-area end-->


	</main>
	

@endsection