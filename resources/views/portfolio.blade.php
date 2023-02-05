@extends('master')
@section('portfolio')
<main>
    <!--page-title-area start-->
    <section class="page-title-area title-area3" style="background-image: url({{URL::asset('assets/img/page-title/page-title-bg3.jpg')}});">
        <div class="container">
            <div class="row align-items-center pt-140 pt-xs-60">
                <div class="col-lg-6 col-md-5 text-md-end">
                    <ul class="breadcrumb list-none breadcrumb-bg float-start">
                        <li><a href="index.php">Pages</a></li>
                        <li class="active text-heding fw-bold" aria-current="page">Portfolio</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--page-title-area end-->
    <!--portfolio-area start-->
    <section class="portfolio-area pt-110 pb-90 pt-md-60 pb-md-30 pt-xs-60 pb-xs-30">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-8 text-center">
                    <div class="portfolio-menu mb-35">
                        <!-- <button class="gf_btn active" data-filter="*">All Works</button> -->
                        <?php
                        $catagories = App\Models\Catagory::all();
                        ?>
                        @foreach($catagories as $catagory)
                        @if($catagory->catagory == 'WEBSITE')
                        <button class="gf_btn active" data-filter=".cat{{$catagory->id}}">{{$catagory->catagory}}</button>
                        @else
                        <button class="gf_btn" data-filter=".cat{{$catagory->id}}">{{$catagory->catagory}}</button>

                        @endif
                        

                        @endforeach
                    </div>
                </div>
            </div>
            <div class="grid row align-items-center">
                <?php
                $portfolios = App\Models\Portfolio::all();
                ?>
                @foreach($portfolios as $portfolio)
                <?php
                $catagoryInfo = App\Models\Catagory::find($portfolio->catagory_id);
                ?>
                <div class="{{'col-lg-' . $portfolio->columnSize}} col-md-6 col-sm-6 grid-item {{'cat' . $catagoryInfo->id }}">
                    <div class="portfolio-wrapper2 mb-30">
                        <img class="img-fluid" src="{{url('photos/' . $portfolio->image)}}" alt="Portfolio Img">
                        <div class="portfolio-content">
                            <p>{{$catagoryInfo->catagory}}</p>
                            <h3 class="portfolio-title text-white">{{$portfolio->title}}</h3>
                            <a class="fs-14 fw-bold text-white" href="#">Portfolio Details </a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <!--portfolio-area end-->

</main>


<!-- JS here -->

<script src="js/vendor/modernizr-3.5.0.min.js"></script>
<script src="js/vendor/jquery-2.2.4.min.js"></script>
<script src="js/vendor/popper.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/metisMenu.min.js"></script>
<script src="js/jquery.nice-select.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>


</body>

</html>