@extends('master')
@section('portfolio_1')
	<main>
		<!--page-title-area start-->
		<section class="page-title-area title-area3" style="background-image: url({{URL::asset('assets/img/page-title/page-title-bg3.jpg')}});">
			<div class="container">
				<div class="row align-items-center pt-140 pt-xs-60">
					<div class="col-lg-6 col-md-5 text-md-end">
						<ul class="breadcrumb list-none breadcrumb-bg float-start">
							<li><a href="index.php">Services</a></li>
							<li class="active text-heding fw-bold" aria-current="page">ERP SYSTEM</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!--page-title-area end-->
		<!--services-area start-->
		<section class="news-feed-area pt-120 pb-75 pt-md-60 pb-md-15 pt-xs-50 pb-xs-10">
			<div class="container">
				<div class="row mb-15">
					<div class="col-lg-12 pe-xl-0">
						<div class="news-left">
							<div class="blogs blog-4 mb-40">
								<div class="blog__thumb mb-55 ">
									<a href="news-details.php">
										<img class="img-fluid  w-100" src="{{asset('assets/img/erp.jpg')}}" alt="Blog Img">
									</a>
									<div class="tag">ERP SYSTEM</div>
								</div>
								<div class="blog-content">
									<h3><a class="blog-title4" href="news-details.php">Both the act of teaching
											knowledge to others and
											the act of kind of design thinking.</a></h3>
									<p class="mb-20">Novia's spaciously two bedroom apartments are perfect for families
										and even business partners. Look out into the Manhattan skyline from the open
										fully equipped kitchen.
									</p>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<ul>
											<li><i aria-hidden="true" class="fas fa-check"
													style="color: blue;margin-right: 5px;"></i>Admin
											</li>
											<li><i aria-hidden="true" class="fas fa-check"
													style="color: blue;margin-right: 5px;"></i>Inventory and POS</li>
											<li><i aria-hidden="true" class="fas fa-check"
													style="color: blue;margin-right: 5px;"></i>Customer management</li>
											<li><i aria-hidden="true" class="fas fa-check"
													style="color: blue;margin-right: 5px;"></i>Supplier management
											</li>
											<li><i aria-hidden="true" class="fas fa-check"
													style="color: blue;margin-right: 5px;"></i>Discount management</li>
											<li><i aria-hidden="true" class="fas fa-check"
													style="color: blue;margin-right: 5px;"></i>Monthly Billing</li>
										</ul>
									</div>
									<div class="col-lg-6">
										<ul>
											<li><i aria-hidden="true" class="fas fa-check"
													style="color: blue;margin-right: 5px;"></i>E-commerce
											</li>
											<li><i aria-hidden="true" class="fas fa-check"
													style="color: blue;margin-right: 5px;"></i>Delivery and dispatch
												management
												Human resourc</li>
											<li><i aria-hidden="true" class="fas fa-check"
													style="color: blue;margin-right: 5px;"></i>Human resource
												management</li>
											<li><i aria-hidden="true" class="fas fa-check"
													style="color: blue;margin-right: 5px;"></i>Payroll</li>
											<li><i aria-hidden="true" class="fas fa-check"
													style="color: blue;margin-right: 5px;"></i>Project management</li>
											<li><i aria-hidden="true" class="fas fa-check"
													style="color: blue;margin-right: 5px;"></i>Factory management</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--services-area end-->



	</main>
	
	
@endsection('portfolio_1')