@extends('master')
@section('product_portfolio')
	<main>
		<!--page-title-area start-->
		<section class="page-title-area title-area3" style="background-image: url({{URL::asset('assets/img/page-title/page-title-bg3.jpg')}});">
			<div class="container">
				<div class="row align-items-center pt-140 pt-xs-60">
					<div class="col-lg-6 col-md-5 text-md-end">
						<ul class="breadcrumb list-none breadcrumb-bg float-start">
							<li><a href="index.php">Services</a></li>
							<li class="active text-heding fw-bold" aria-current="page">{{$portfolio[0]->productName}}</li>
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
										<img class="img-fluid  w-100" src="{{url('photos/' . $portfolio[0]->image)}}" alt="Blog Img">
									</a>
									<div class="tag">{{$portfolio[0]->productName}}</div>
								</div>
								<div class="blog-content">
                                    <?php
									echo $portfolio[0]->content
                                    ?>
								</div>
                                <div>
                                    <?php
                                    $product = App\Models\Product::find($portfolio[0]->product_id);
                                    ?>
                                    <a href="{{$product->link}}">watch demo</a>
                                </div>
								
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--services-area end-->



	</main>
	
	
@endsection