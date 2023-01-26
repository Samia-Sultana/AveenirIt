@extends('master')
@section('index')
	

	<main>
		<!--slider-area start-->
		<div id="slider-one" class="main-slider-area">
			<div class="slider-bg">
				<div class="sliders-active owl-carousel owl-theme">
					<div class="item">
						<div class="container">
							<div class="row align-items-center">
								<div class="col-xl-6 col-lg-6 order-last order-lg-first">
									<div class="slider__content">
										<p class="pretitle-p">Next level automation system</p>
										<h1 class="main-title-one">Business Automation</h1>
										<p class="aftertitle-p">We provide Website design ,Website Development , cheap
											Domain and
											hosting, reliable hosting server, Software Development</p>
										<a class="theme_btn" href="contact.php">Get Started Now</a>
									</div>
								</div>
								<div class="col-xl-6 col-lg-6 d-flex align-items-end justify-content-center">
									<div class="slider-right text-center px-5 py-3">
										<img class="d-none d-lg-block" src="{{asset('assets/img/banner1.png')}}" alt="Hero Img">
										<img class="d-md-inline-block d-lg-none" src="{{asset('assets/img/banner1.png')}}" alt="Hero Img">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="container">
							<div class="row align-items-center">
								<div class="col-xl-6 col-lg-6 order-last order-lg-first">
									<div class="slider__content">
										<p class="pretitle-p">VR Project Management Software For Teams</p>
										<h1 class="main-title-one">Ecommerce<span class="d-xxl-block fw-bold"></span>
										</h1>
										<p class="aftertitle-p">We provide Website design ,Website Development , cheap
											Domain and
											hosting, reliable hosting server, Software Development</p>
										<a class="theme_btn" href="contact.php">Get Started Now</a>
									</div>
								</div>
								<div class="col-xl-6 col-lg-6 d-flex align-items-end justify-content-center">
									<div class="slider-right text-center px-5 py-5">
										<img class="d-none d-lg-block" src="{{asset('assets/img/banner3.png')}}" alt="Hero Img">
										<img class="d-md-inline-block d-lg-none" src="{{asset('assets/img/banner3.png')}}" alt="Hero Img">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="container">
							<div class="row align-items-center">
								<div class="col-xl-6 col-lg-6 order-last order-lg-first">
									<div class="slider__content">
										<p class="pretitle-p">VR Project Management Software For Teams</p>
										<h1 class="main-title-one">Digital Marketing</h1>
										<p class="aftertitle-p">We provide Website design ,Website Development , cheap
											Domain and
											hosting, reliable hosting server, Software Development</p>
										<a class="theme_btn" href="contact.php">Get Started Now</a>
									</div>
								</div>
								<div class="col-xl-6 col-lg-6 d-flex align-items-end justify-content-center">
									<div class="slider-right text-center px-5 py-5">
										<img class="d-none d-lg-block" src="{{asset('assets/img/banner2.png')}}" alt="Hero Img">
										<img class="d-md-inline-block d-lg-none" src="{{asset('assets/img/banner2.png')}}" alt="Hero Img">
									</div>
								</div>
							</div>
						</div>
					</div>


				</div>
			</div>
		</div>
		<!--slider-area end-->
		<!--Company-Overview-area-start-->
		<section class="home-company-area about-us-area pt-50 pb-30 pt-md-30 pb-md-15 pt-xs-30 pb-xs-15">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 col-md-12">
						<div class="company-img"><img src="{{asset('assets/img/company-overview.jpg')}}" class="img-fluid" alt="company">
						</div>
					</div>
					<div class="col-lg-6 col-md-12">
						<div class="company-content about-text-wrapper mb-30">
							<h6 class="semi-title title-line">Company Overview</h6>
							<div class="company-tittle">
								<h2 style="font-size: 25px;">We are blessed with a highly-skilled, creative &
									hard-working team of IT specialists
								</h2>
								<p style="text-align: justify;">AVEENIR is a leading provider of advanced IT solutions
									and consultation services to a wide range of clients, including businesses,
									government entities, NGOs, and INGOs. Founded by a team of ambitious and talented
									young entrepreneurs, the company aims to contribute
									to the field of technology-based business in Bangladesh by offering digitalization
									and automation services.
									sector.
								</p>

							</div>
							<a class="theme_btn mt-30 " href="company-overview.php">Know More</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--Company-Overview-area-end-->

		<!--services-area start-->
		<div class="services-area pt-120 pt-md-60 pt-xs-60 pb-100 pb-xs-50 home-5">
			<div class="container">
				<div class="rts-heading">
					<div class="title-inner section-title">
						<div class="sub-text">Our Services</div>
						<div class="title">We Offer a Leading<br>
							<b>IT Solution</b>World Wide
						</div>
						<div class="bar"></div>
					</div>
				</div>
				<div class="row d-flex justify-content-center">
					<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-45">
						<div class="services-wraper Service-div">
							<div class="services-top">
								<div class="services-icon">
									<img src="{{asset('assets/img/service-logo/web-development 23-01.png')}}" alt="">
								</div>
							</div>
							<div class="services-bottom">
								<div class="services-title">
									<h2 class="title">WEB DEVELOPMENT</h2>
								</div>
								<p class="services-text" style=" text-align:center;">
									We provide an affordable, fast-loading, compatible, and highly secure website
									service
								</p>
							</div>
							<div class="services-btn-part">
								<div class="services-btn">
									<a href="web-development.php"><i class="fal fa-long-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-45">
						<div class="services-wraper Service-div">
							<div class="services-top">
								<div class="services-icon">
									<img src="{{asset('assets/img/service-logo/Software-01-01.png')}}" alt="">
								</div>
							</div>
							<div class="services-bottom">
								<div class="services-title">
									<h2 class="title">SOFTWARE DEVELOPMENT</h2>
								</div>
								<p class="services-text" style=" text-align: center;">
									We offer fully customized, user-friendly, efficient, and secure custom software to

								</p>
							</div>
							<div class="services-btn-part">
								<div class="services-btn">
									<a href="software-development.php"><i class="fal fa-long-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-45">
						<div class="services-wraper Service-div">
							<div class="services-top">
								<div class="services-icon">
									<img src="{{asset('assets/img/service-logo/Graphics-01.png')}}" alt="">
								</div>
							</div>
							<div class="services-bottom">
								<div class="services-title">
									<h2 class="title">GRAPHICAL SOLUTION</h2>
								</div>
								<p class="services-text" style=" text-align: center;">
									We offer high-quality, visually-appealing, and professional graphics design services
								</p>
							</div>
							<div class="services-btn-part">
								<div class="services-btn">
									<a href="graphical-solution.php"><i class="fal fa-long-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-45">
						<div class="services-wraper Service-div">
							<div class="services-top">
								<div class="services-icon">
									<img src="{{asset('assets/img/service-logo/digital.png')}}" alt="">
								</div>
							</div>
							<div class="services-bottom">
								<div class="services-title">
									<h2 class="title">DIGITAL MARKETING</h2>
								</div>
								<p class="services-text" style=" text-align: center;">
									We provide comprehensive digital marketing services to help you achieve your
									business goals.
								</p>
							</div>
							<div class="services-btn-part">
								<div class="services-btn">
									<a href="Digital-marketing-services.php"><i
											class="fal fa-long-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-45">
						<div class="services-wraper Service-div">
							<div class="services-top">
								<div class="services-icon">
									<img src="{{asset('assets/img/service-logo/App.png')}}" alt="">
								</div>
							</div>
							<div class="services-bottom">
								<div class="services-title">
									<h2 class="title">MOBILE APPLICATION
										DEVELOPMENT</h2>
								</div>
								<p class="services-text" style=" text-align: center;">
									We offer a variety of mobile application options, including native, cross-platform,
									and hybrid options,

								</p>
							</div>
							<div class="services-btn-part">
								<div class="services-btn">
									<a href="mobile-Application-development.php"><i
											class="fal fa-long-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-45">
						<div class="services-wraper Service-div">
							<div class="services-top">
								<div class="services-icon">
									<img style="height: 60px;width: 70px;" src="{{asset('assets/img/service-logo/videography-01.png')}}"
										alt="">
								</div>
							</div>
							<div class="services-bottom">
								<div class="services-title">
									<h2 class="title">VIDEOGRAPHY & PHOTOGRAPHY SUPPORT</h2>
								</div>
								<p class="services-text" style=" text-align: center;">
									We provide expert photography and videography services that capture stunning
								</p>
							</div>
							<div class="services-btn-part">
								<div class="services-btn">
									<a href="videography-Photography.php"><i class="fal fa-long-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-45">
						<div class="services-wraper Service-div">
							<div class="services-top">
								<div class="services-icon">
									<img src="{{asset('assets/img/service-logo/VFX-01.png')}}" alt="">
								</div>
							</div>
							<div class="services-bottom">
								<div class="services-title">
									<h2 class="title">VFX & ANIMATION</h2>
								</div>
								<p class="services-text" style=" text-align: center;">
									We offer state-of-the-art visual effects and animation services to bring your ideas
									to life.
								</p>
							</div>
							<div class="services-btn-part">
								<div class="services-btn">
									<a href="vfx-&-Animation.php"><i class="fal fa-long-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--services-area end-->
		<!--portfolio-area start-->
		<section class="portfolio-area portfolio-bg  nav-style-1 pt-120 pb-120 pt-xs-60 pt-xs-60">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<div class="portfolio-section-title">
							<h2 class="style-text">Products</h2>
							<h6 class="semi-title title-line">Products</h6>
							<h2 class="sect-title">OUR PRODUCTS</h2>
						</div>
					</div>
				</div>
			</div>
			<div class="custom-container-1">
				<div class="portfolio-slide owl-carousel">
					<div class="item">
						<div class="portfolio-wrapper">
							<img class="img-fluid product-img" src="{{asset('assets/img/erp1.jpg')}}" alt="Portfolio Img">

							<div class="single-portfolio">
								<h4 class="portfolio-title ">ERP SYSTEM</h4>
							</div>
							<a class="pf-btn" href="portfolio1.php"><i class="fal fa-long-arrow-right"></i></a>
						</div>
					</div>
					<div class="item">
						<div class="portfolio-wrapper">
							<img class="img-fluid product-img" src="{{asset('assets/img/clickto.jpg')}}" alt="Portfolio Img">

							<div class="single-portfolio">
								<h4 class="portfolio-title ">CLICK
									TO EARN</h4>
							</div>
							<a class="pf-btn" href="portfolio2.php"><i class="fal fa-long-arrow-right"></i></a>
						</div>
					</div>
					<div class="item">
						<div class="portfolio-wrapper">
							<img class="img-fluid product-img" src="{{asset('assets/img/locationbasedsharingsystem.jpg')}}" alt="Portfolio Img">

							<div class="single-portfolio">
								<h4 class="portfolio-title">LOCATION BASED
									RIDE SHARING SYSTEM</h4>
							</div>
							<a class="pf-btn" href="portfolio3.php"><i class="fal fa-long-arrow-right"></i></a>
						</div>
					</div>
					<div class="item">
						<div class="portfolio-wrapper">
							<img class="img-fluid product-img" src="{{asset('assets/img/hospital.png')}}" alt="Portfolio Img">

							<div class="single-portfolio">
								<h4 class="portfolio-title">HOSPITAL
									MANAGEMENT SYSTEM</h4>
							</div>
							<a class="pf-btn" href="portfolio4.php"><i class="fal fa-long-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--portfolio-area end-->

		<!--Client-area start-->
		<section class="brand-area">
			<div class="brand-bg1">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-6">
							<div class="brand-title text-center mb-45 section-title">
								<h6 class="semi-title " style="font-size: 20px;">OUR CLIENTS</h6>
								<div class="bar"></div>
							</div>
						</div>
					</div>
					<div class="brand-carousel brand-slide  section-padding owl-carousel">
						
						<div class="slide p-3 "><img src="{{asset('assets/img/logo/At-turath - Copy - Copy.png')}}"></div>
						<div class="slide p-3 "><img src="{{asset('assets/img/logo/bamboo - Copy.png')}}"></div>
						<div class="slide p-3 "><img src="{{asset('assets/img/logo/Budget queen - Copy.png')}}"></div>
						<div class="slide p-3 mt-5 "><img src="{{asset('assets/img/logo/dhanshiri-logo - Copy.png')}}"></div>
						<div class="slide p-3 "><img src="{{asset('assets/img/logo/Divine  - Copy.png')}}"></div>
						<div class="slide p-3 "><img src="{{asset('assets/img/logo/ezybuy.png')}}"></div>
						<div class="slide p-3 "><img src="{{asset('assets/img/logo/Unanibd (2) - Copy.png')}}"></div>
						<div class="slide p-3 "><img src="{{asset('assets/img/logo/Iqra-logo-03 (2).png')}}"></div>
						<div class="slide p-3 "><img src="{{asset('assets/img/logo/krishibari - Copy.png')}}"></div>
						<div class="slide p-3 mt-3 "><img src="{{asset('assets/img/logo/Logo-dhamakabd - Copy.png')}}"></div>
						<div class="slide p-3 "><img src="{{asset('assets/img/logo/maknoon.png')}}"></div>
						<div class="slide p-3"><img src="{{asset('assets/img/logo/client1.png')}}"></div>
						<div class="slide p-3"><img src="{{asset('assets/img/logo/client4.png')}}"></div>
						<div class="slide p-3"><img src="{{asset('assets/img/logo/client7.png')}}"></div>
						<div class="slide p-3 "><img src="{{asset('assets/img/logo/Venus-logo-Redesign-02 (1) - Copy.png')}}"></div>
						<div class="slide p-3 mt-5"><img src="{{asset('assets/img/logo/Noor-Outline - Copy.png')}}"></div>
						<div class="slide p-3 mt-5"><img src="{{asset('assets/img/logo/prime-pharma-logo.png')}}"></div>
						<div class="slide p-3 "><img src="{{asset('assets/img/logo/Rajdhani-pharma-logo - Copy.png')}}"></div>
						<div class="slide p-3 mt-3 "><img src="{{asset('assets/img/logo/Mindboost-logo-1 (1) - Copy.png')}}"></div>
						
						
					
					</div>
				</div>
			</div>
		</section>
		<!--Client-area end-->
	</main>
	

@endsection
