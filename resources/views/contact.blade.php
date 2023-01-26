@extends('master')
@section('contact')
	<main>
		<!--page-title-area start-->
		<section class="page-title-area title-area3" style="background-image: url(img/page-title/page-title-bg3.jpg);">
			<div class="container">
				<div class="row align-items-center pt-140 pt-xs-60">
					<div class="col-lg-6 col-md-5 text-md-end">
						<ul class="breadcrumb list-none breadcrumb-bg float-start">
							<li class="active text-heding fw-bold" aria-current="page">Contact Us</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!--page-title-area end-->
		<!--contact-area start-->
		<section class="contact-area pt-120 pb-90 pt-md-60 pb-md-60 pt-xs-60 pb-xs-60">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="section-title mb-60">
							<p class="fs-14 lh-1 mb-15">Get In Touch</p>
							<h2 class="sect-title lh-1">Let's help you!</h2>
						</div>
						<form class="row contact-form mb-30" action="#">
							<div class="col-lg-6 col-md-6">
								<div class="input-box mb-20">
									<input type="text" placeholder="Full name **">
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="input-box mail-input mb-20">
									<input type="text" placeholder="Email address **">
								</div>
							</div>
							<div class="col-lg-12 mb-20">
								<div class="input-box sub-input">
									<select name="job" class="job-select">
										<option value="Subject">Subject</option>
										<option value="">It</option>
										<option value="">Development</option>
										<option value="">Ui/Ux</option>
									</select>
								</div>
							</div>
							<div class="col-12">
								<div class="input-box text-input mb-15">
									<textarea name="message" cols="30" rows="10"
										placeholder="Enter massge **"></textarea>
								</div>
							</div>
							<div class="col-12">
								<button class="form-btn form-btn3">Get Free Consultation</button>
							</div>
						</form>
					</div>
					<div class="col-lg-6">
						<div class="contact-short-info pr-50 pr-lg-0 pr-md-0 pr-xs-0 pl-80 pl-lg-0 pl-md-0 pl-xs-0">
							<div class="section-title mb-30">
								<p class="fs-14 lh-1 mb-15">Contact Us</p>
								<h2 class="sect-title lh-1">Catch us for help</h2>
							</div>
							<div class="adress-box">
								<div class="icon-link">
									<i class="fas fa-phone"></i>
								</div>
								<div class="address-content">
									<p class="fs-14">Phone Number</p>
									<h6>01955 325537</h6>
								</div>
							</div>
							<div class="adress-box ab-2">
								<div class="icon-link">
									<i class="fas fa-envelope"></i>
								</div>
								<div class="address-content">
									<p class="fs-14">Email Address</p>
									<h6>aveenir@gmail.com</h6>
								</div>
							</div>
							<div class="adress-box">
								<div class="icon-link">
									<i class="fas fa-map-marker-alt"></i>
								</div>
								<div class="address-content">
									<p class="fs-14">Office Address</p>
									<h6>84/1, Malek Tower,
										Road-3, Shopnodhara
										Housing Ltd. Bosila Road,
										Mohammadpur.</h6>
								</div>
							</div>
							<div class="mt-15">
								<a href="contact.php" class="theme_btn theme_btn3">Get Right Direction <i
										class="fal fa-long-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--contact-area end-->

		<!--map-area start-->
		<!-- <section class="contact-map-area">
			<div class="container-fluid px-0">
				<div class="contact-map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14586.16663307975!2d90.3865062!3d23.941279099999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1641645837442!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
			</div>
		</section> -->
		<!--map-area end-->


	</main>
	@endsection