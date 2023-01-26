﻿@extends('master')
@section('portfolio')
    <main>
        <!--page-title-area start-->
        <section class="page-title-area title-area3" style="background-image: url(img/page-title/page-title-bg3.jpg);">
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
                            <button class="gf_btn active" data-filter="*">All Works</button>
                            <button class="gf_btn" data-filter=".cat1">WEBSITE</button>
                            <button class="gf_btn" data-filter=".cat2">LOGO</button>
                            <button class="gf_btn" data-filter=".cat3">SOCIAL MEDIA POST</button>
                            <button class="gf_btn" data-filter=".cat4">CARTOON BANNERS</button>
                            <button class="gf_btn" data-filter=".cat5">WEB BANNERS</button>
                            <button class="gf_btn" data-filter=".cat6">PROSPECTUS</button>
                        </div>
                    </div>
                </div>
                <div class="grid row align-items-center">
                    <div class="col-lg-4 col-md-6 col-sm-6 grid-item cat2">
                        <div class="portfolio-wrapper2 mb-30">
                            <img class="img-fluid" src="{{asset('assets/img/logo/At-turath - Copy - Copy.png')}}" alt="Portfolio Img">
                            <div class="portfolio-content">
                                <p>LOGO</p>
                                <h3 class="portfolio-title text-white">At-Turath Academy</h3>
                                <a class="fs-14 fw-bold text-white" href="#">Portfolio Details </a>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-4 col-md-6 col-sm-6 grid-item cat2">
                        <div class="portfolio-wrapper2 mb-30">
                            <img class="img-fluid" src="{{asset('assets/img/logo/bamboo - Copy.png')}}" alt="Portfolio Img">
                            <div class="portfolio-content">
                                <p>LOGO</p>
                                <h3 class="portfolio-title text-white">Bamboo Chick</h3>
                                <a class="fs-14 fw-bold text-white" href="#">Portfolio Details </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 grid-item cat2">
                        <div class="portfolio-wrapper2 mb-30">
                            <img class="img-fluid" src="{{asset('assets/img/logo/Budget queen - Copy.png')}}" alt="Portfolio Img">
                            <div class="portfolio-content">
                                <p>LOGO</p>
                                <h3 class="portfolio-title text-white">Budget Queen</h3>
                                <a class="fs-14 fw-bold text-white" href="#">Portfolio Details </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 grid-item cat2">
                        <div class="portfolio-wrapper2 mb-30">
                            <img class="img-fluid" src="{{asset('assets/img/logo/Divine  - Copy.png')}}" alt="Portfolio Img">
                            <div class="portfolio-content">
                                <p>LOGO</p>
                                <h3 class="portfolio-title text-white">Budget Queen</h3>
                                <a class="fs-14 fw-bold text-white" href="#">Portfolio Details </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 grid-item cat2">
                        <div class="portfolio-wrapper2 mb-30">
                            <img class="img-fluid" src="{{asset('assets/img/logo/ezybuy.png')}}" alt="Portfolio Img">
                            <div class="portfolio-content">
                                <p>LOGO</p>
                                <h3 class="portfolio-title text-white">Budget Queen</h3>
                                <a class="fs-14 fw-bold text-white" href="#">Portfolio Details </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 grid-item cat2">
                        <div class="portfolio-wrapper2 mb-30">
                            <img class="img-fluid" src="{{asset('assets/img/logo/Iqra-logo-03 (2).png')}}" alt="Portfolio Img">
                            <div class="portfolio-content">
                                <p>LOGO</p>
                                <h3 class="portfolio-title text-white">Budget Queen</h3>
                                <a class="fs-14 fw-bold text-white" href="#">Portfolio Details </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 grid-item cat2">
                        <div class="portfolio-wrapper2 mb-30">
                            <img class="img-fluid" src="{{asset('assets/img/logo/krishibari - Copy.png')}}" alt="Portfolio Img">
                            <div class="portfolio-content">
                                <p>LOGO</p>
                                <h3 class="portfolio-title text-white">Budget Queen</h3>
                                <a class="fs-14 fw-bold text-white" href="#">Portfolio Details </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 grid-item cat2">
                        <div class="portfolio-wrapper2 mb-30">
                            <img class="img-fluid" src="{{asset('assets/img/logo/maknoon.png')}}" alt="Portfolio Img">
                            <div class="portfolio-content">
                                <p>LOGO</p>
                                <h3 class="portfolio-title text-white">Budget Queen</h3>
                                <a class="fs-14 fw-bold text-white" href="#">Portfolio Details </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 grid-item cat2">
                        <div class="portfolio-wrapper2 mb-30">
                            <img class="img-fluid" src="{{asset('assets/img/logo/Rajdhani-pharma-logo - Copy.png')}}" alt="Portfolio Img">
                            <div class="portfolio-content">
                                <p>LOGO</p>
                                <h3 class="portfolio-title text-white">Budget Queen</h3>
                                <a class="fs-14 fw-bold text-white" href="#">Portfolio Details </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-6 col-sm-6 grid-item cat1">
                        <div class="portfolio-wrapper2 mb-30">
                            <img class="img-fluid" src="{{asset('assets/img/web1.PNG')}}" alt="Portfolio Img">
                            <div class="portfolio-content">
                                <p>WEBSITE</p>
                                <h3 class="portfolio-title text-white">Miranda Website Design</h3>
                                <a class="fs-14 fw-bold text-white" href="#">Portfolio Details </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 grid-item cat3 ">
                        <div class="portfolio-wrapper2 mb-30">
                            <img class="img-fluid" src="{{asset('assets/img/sm5.jpg')}}" alt="Portfolio Img">
                            <div class="portfolio-content">
                                <p>SOCIAL MEDIA POST</p>
                                <h3 class="portfolio-title text-white">Miranda Website Design</h3>
                                <a class="fs-14 fw-bold text-white" href="#">Portfolio Details </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 grid-item cat3 ">
                        <div class="portfolio-wrapper2 mb-30">
                            <img class="img-fluid" src="{{asset('assets/img/socialMedia2.jpg')}}" alt="Portfolio Img">
                            <div class="portfolio-content">
                                <p>SOCIAL MEDIA POST</p>
                                <h3 class="portfolio-title text-white">Miranda Website Design</h3>
                                <a class="fs-14 fw-bold text-white" href="#">Portfolio Details </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 grid-item cat3 ">
                        <div class="portfolio-wrapper2 mb-30">
                            <img class="img-fluid" src="{{asset('assets/img/sm7.jpg')}}" alt="Portfolio Img">
                            <div class="portfolio-content">
                                <p>SOCIAL MEDIA POST</p>
                                <h3 class="portfolio-title text-white">Miranda Website Design</h3>
                                <a class="fs-14 fw-bold text-white" href="#">Portfolio Details </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 grid-item cat3 ">
                        <div class="portfolio-wrapper2 mb-30">
                            <img class="img-fluid" src="{{asset('assets/img/socialMedia4.jpg')}}" alt="Portfolio Img">
                            <div class="portfolio-content">
                                <p>SOCIAL MEDIA POST</p>
                                <h3 class="portfolio-title text-white">Miranda Website Design</h3>
                                <a class="fs-14 fw-bold text-white" href="#">Portfolio Details </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 grid-item cat3 ">
                        <div class="portfolio-wrapper2 mb-30">
                            <img class="img-fluid" src="{{asset('assets/img/sm10.jpg')}}" alt="Portfolio Img">
                            <div class="portfolio-content">
                                <p>SOCIAL MEDIA POST</p>
                                <h3 class="portfolio-title text-white">Miranda Website Design</h3>
                                <a class="fs-14 fw-bold text-white" href="#">Portfolio Details </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 grid-item cat3 ">
                        <div class="portfolio-wrapper2 mb-30">
                            <img class="img-fluid" src="{{asset('assets/img/sm15.jpg')}}" alt="Portfolio Img">
                            <div class="portfolio-content">
                                <p>SOCIAL MEDIA POST</p>
                                <h3 class="portfolio-title text-white">Miranda Website Design</h3>
                                <a class="fs-14 fw-bold text-white" href="#">Portfolio Details </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 grid-item cat3 ">
                        <div class="portfolio-wrapper2 mb-30">
                            <img class="img-fluid" src="{{asset('assets/img/sm13.jpg')}}" alt="Portfolio Img">
                            <div class="portfolio-content">
                                <p>SOCIAL MEDIA POST</p>
                                <h3 class="portfolio-title text-white">Miranda Website Design</h3>
                                <a class="fs-14 fw-bold text-white" href="#">Portfolio Details </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 grid-item cat3 ">
                        <div class="portfolio-wrapper2 mb-30">
                            <img class="img-fluid" src="{{asset('assets/img/sm17.jpg')}}" alt="Portfolio Img">
                            <div class="portfolio-content">
                                <p>SOCIAL MEDIA POST</p>
                                <h3 class="portfolio-title text-white">Miranda Website Design</h3>
                                <a class="fs-14 fw-bold text-white" href="#">Portfolio Details </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 grid-item cat3 ">
                        <div class="portfolio-wrapper2 mb-30">
                            <img class="img-fluid" src="{{asset('assets/img/sm18.jpg')}}" alt="Portfolio Img">
                            <div class="portfolio-content">
                                <p>SOCIAL MEDIA POST</p>
                                <h3 class="portfolio-title text-white">Miranda Website Design</h3>
                                <a class="fs-14 fw-bold text-white" href="#">Portfolio Details </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 grid-item cat3 ">
                        <div class="portfolio-wrapper2 mb-30">
                            <img class="img-fluid" src="{{asset('assets/img/sm11.jpg')}}" alt="Portfolio Img">
                            <div class="portfolio-content">
                                <p>SOCIAL MEDIA POST</p>
                                <h3 class="portfolio-title text-white">Miranda Website Design</h3>
                                <a class="fs-14 fw-bold text-white" href="#">Portfolio Details </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 grid-item cat3 ">
                        <div class="portfolio-wrapper2 mb-30">
                            <img class="img-fluid" src="{{asset('assets/img/sm12.jpg')}}" alt="Portfolio Img">
                            <div class="portfolio-content">
                                <p>SOCIAL MEDIA POST</p>
                                <h3 class="portfolio-title text-white">Miranda Website Design</h3>
                                <a class="fs-14 fw-bold text-white" href="#">Portfolio Details </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 grid-item cat3 ">
                        <div class="portfolio-wrapper2 mb-30">
                            <img class="img-fluid" src="{{asset('assets/img/sm6.jpg')}}" alt="Portfolio Img">
                            <div class="portfolio-content">
                                <p>SOCIAL MEDIA POST</p>
                                <h3 class="portfolio-title text-white">Miranda Website Design</h3>
                                <a class="fs-14 fw-bold text-white" href="#">Portfolio Details </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 grid-item cat3 ">
                        <div class="portfolio-wrapper2 mb-30">
                            <img class="img-fluid" src="{{asset('assets/img/sm14.jpg')}}" alt="Portfolio Img">
                            <div class="portfolio-content">
                                <p>SOCIAL MEDIA POST</p>
                                <h3 class="portfolio-title text-white">Miranda Website Design</h3>
                                <a class="fs-14 fw-bold text-white" href="#">Portfolio Details </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 grid-item cat3 ">
                        <div class="portfolio-wrapper2 mb-30">
                            <img class="img-fluid" src="{{asset('assets/img/sm16.jpg')}}" alt="Portfolio Img">
                            <div class="portfolio-content">
                                <p>SOCIAL MEDIA POST</p>
                                <h3 class="portfolio-title text-white">Miranda Website Design</h3>
                                <a class="fs-14 fw-bold text-white" href="#">Portfolio Details </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 grid-item cat3 ">
                        <div class="portfolio-wrapper2 mb-30">
                            <img class="img-fluid" src="{{asset('assets/img/sm8.jpg')}}" alt="Portfolio Img">
                            <div class="portfolio-content">
                                <p>SOCIAL MEDIA POST</p>
                                <h3 class="portfolio-title text-white">Miranda Website Design</h3>
                                <a class="fs-14 fw-bold text-white" href="#">Portfolio Details </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 grid-item cat4">
                        <div class="portfolio-wrapper2 mb-30">
                            <img class="img-fluid" src="{{asset('assets/img/portfolio/pr-7.jpg')}}" alt="Portfolio Img">
                            <div class="portfolio-content">
                                <p>CARTOON BANNERS</p>
                                <h3 class="portfolio-title text-white">Miranda Website Design</h3>
                                <a class="fs-14 fw-bold text-white" href="#">Portfolio Details </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-6 col-sm-6 grid-item cat5">
                        <div class="portfolio-wrapper2 mb-30">
                            <img class="img-fluid" src="{{asset('assets/img/wb1.1.jpg')}}" alt="Portfolio Img">
                            <div class="portfolio-content">
                                <p>WEB BANNERS</p>
                                <h3 class="portfolio-title text-white">Miranda Website Design</h3>
                                <a class="fs-14 fw-bold text-white" href="#">Portfolio Details </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-6 col-sm-6 grid-item cat5">
                        <div class="portfolio-wrapper2 mb-30">
                            <img class="img-fluid" src="{{asset('assets/img/wb1.2.jpg')}}" alt="Portfolio Img">
                            <div class="portfolio-content">
                                <p>WEB BANNERS</p>
                                <h3 class="portfolio-title text-white">Miranda Website Design</h3>
                                <a class="fs-14 fw-bold text-white" href="#">Portfolio Details </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-6 col-sm-6 grid-item cat5">
                        <div class="portfolio-wrapper2 mb-30">
                            <img class="img-fluid" src="{{asset('assets/img/wb1.3.jpg')}}" alt="Portfolio Img">
                            <div class="portfolio-content">
                                <p>WEB BANNERS</p>
                                <h3 class="portfolio-title text-white">Miranda Website Design</h3>
                                <a class="fs-14 fw-bold text-white" href="#">Portfolio Details </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-6 col-sm-6 grid-item cat5">
                        <div class="portfolio-wrapper2 mb-30">
                            <img class="img-fluid" src="{{asset('assets/img/wb1.4.jpg')}}" alt="Portfolio Img">
                            <div class="portfolio-content">
                                <p>WEB BANNERS</p>
                                <h3 class="portfolio-title text-white">Miranda Website Design</h3>
                                <a class="fs-14 fw-bold text-white" href="#">Portfolio Details </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-6 col-sm-6 grid-item cat5">
                        <div class="portfolio-wrapper2 mb-30">
                            <img class="img-fluid" src="{{asset('assets/img/wb1.5.jpg')}}" alt="Portfolio Img">
                            <div class="portfolio-content">
                                <p>WEB BANNERS</p>
                                <h3 class="portfolio-title text-white">Miranda Website Design</h3>
                                <a class="fs-14 fw-bold text-white" href="#">Portfolio Details </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-6 col-sm-6 grid-item cat5">
                        <div class="portfolio-wrapper2 mb-30">
                            <img class="img-fluid" src="{{asset('assets/img/wb1.6.jpg')}}" alt="Portfolio Img">
                            <div class="portfolio-content">
                                <p>WEB BANNERS</p>
                                <h3 class="portfolio-title text-white">Miranda Website Design</h3>
                                <a class="fs-14 fw-bold text-white" href="#">Portfolio Details </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-6 col-sm-6 grid-item cat5">
                        <div class="portfolio-wrapper2 mb-30">
                            <img class="img-fluid" src="{{asset('assets/img/wb1.7.jpg')}}" alt="Portfolio Img">
                            <div class="portfolio-content">
                                <p>WEB BANNERS</p>
                                <h3 class="portfolio-title text-white">Miranda Website Design</h3>
                                <a class="fs-14 fw-bold text-white" href="#">Portfolio Details </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 grid-item cat6">
                        <div class="portfolio-wrapper2 mb-30">
                            <img class="img-fluid" src="{{asset('assets/img/pts1.jpg')}}" alt="Portfolio Img">
                            <div class="portfolio-content">
                                <p>PROSPECTUS</p>
                                <h3 class="portfolio-title text-white">Miranda Website Design</h3>
                                <a class="fs-14 fw-bold text-white" href="#">Portfolio Details </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 grid-item cat6">
                        <div class="portfolio-wrapper2 mb-30">
                            <img class="img-fluid" src="{{asset('assets/img/pts2.jpg')}}" alt="Portfolio Img">
                            <div class="portfolio-content">
                                <p>PROSPECTUS</p>
                                <h3 class="portfolio-title text-white">Miranda Website Design</h3>
                                <a class="fs-14 fw-bold text-white" href="#">Portfolio Details </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 grid-item cat6">
                        <div class="portfolio-wrapper2 mb-30">
                            <img class="img-fluid" src="{{asset('assets/img/pts3.jpg')}}" alt="Portfolio Img">
                            <div class="portfolio-content">
                                <p>PROSPECTUS</p>
                                <h3 class="portfolio-title text-white">Miranda Website Design</h3>
                                <a class="fs-14 fw-bold text-white" href="#">Portfolio Details </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 grid-item cat6">
                        <div class="portfolio-wrapper2 mb-30">
                            <img class="img-fluid" src="{{asset('assets/img/pts4.jpg')}}" alt="Portfolio Img">
                            <div class="portfolio-content">
                                <p>PROSPECTUS</p>
                                <h3 class="portfolio-title text-white">Miranda Website Design</h3>
                                <a class="fs-14 fw-bold text-white" href="#">Portfolio Details </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 grid-item cat6">
                        <div class="portfolio-wrapper2 mb-30">
                            <img class="img-fluid" src="{{asset('assets/img/pts5.jpg')}}" alt="Portfolio Img">
                            <div class="portfolio-content">
                                <p>PROSPECTUS</p>
                                <h3 class="portfolio-title text-white">Miranda Website Design</h3>
                                <a class="fs-14 fw-bold text-white" href="#">Portfolio Details </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--portfolio-area end-->

    </main>
    <!--footer-area start-->
    <footer class="black-soft-bg footer-area pt-95">
        <div class="container">
            <div class="row mb-15">
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp2 animated" data-wow-delay=".7s">
                    <div class="footer__widget mb-30 pl-55 pl-lg-0 pl-md-0 pl-xs-0">
                        <h6 class="widget-title text-white pb-15 mb-35">Our Services</h6>
                        <ul class="fot-list">
                            <li><a href="index.php">IT SERVICES</a></li>
                            <li><a href="contact.php">IT Consultancy</a></li>
                            <li><a href="index.php">CREATIVE SERVICES</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp2 animated" data-wow-delay=".3s">
                    <div class="footer__widget mb-30">
                        <h6 class="widget-title text-white pb-15 mb-35">Quick links</h6>
                        <ul class="fot-list fot-flex">
                            <li><a href="company-overview.php">Company Overview</a></li>
                            <li><a href="mission-vision.php">Mission & Vision</a></li>
                            <li><a href="team.php">Team</a></li>
                            <li><a href="concern.php">Our Concern</a></li>
                            <li><a href="web-development.php">Web Development</a></li>
                            <li><a href="software-development.php">Software Development</a></li>
                            <li><a href="mobile-Application-development.php">Mobile Application Development</a></li>
                            <li><a href="graphical-solution.php">Graphical Solution</a></li>
                            <li><a href="videography-Photography.php">Videography $ Photography Support</a></li>
                            <li><a href="vfx-&-Animation.php">VFX & Animation</a></li>
                            <li><a href="Digital-marketing-services.php">Digital Marketing Services</a></li>
                            <li><a href="one-stop-solution.php">One Stop Solution</a></li>
                            <li><a href="portfolio.php">Portfolio</a></li>
                            <li><a href="gallery.php">Gallery</a></li>
                            <li><a href="contact.php">Contact Us</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp2 animated" data-wow-delay=".1s">
                    <div class="footer__widget mb-30">
                        <h6 class="widget-title text-white pb-15 mb-35">Get In Touch</h6>
                        <address class="address-box">
                            <span>84/1, Malek Tower,
                                Road-3, Shopnodhara
                                Housing Ltd.Bosila Road,
                                Mohammadpur</span>
                        </address>
                        <address>
                            <span><b class="text-white">Open:</b> Sunday to Thursday</span>
                            <span>From 7h to 18h or talk to an expert</span>
                            <span>01955325537 – available 24/7</span>
                        </address>
                    </div>
                </div>
            </div>
        </div>
        <div class="container pt-35">
            <div class="row white-bg align-items-center gx-lg-0 pt-15">
                <div class="col-xl-6 col-lg-4 col-md-6 text-center text-md-start">
                    <div class="logo-area mb-15 pl-30 pl-md-0 pl-xs-0">
                        <a href="index.php"><img src="{{asset('assets/img/logo/Compnay-logo1.png')}}" style="height: 70px;width: 70px;"
                                alt="Footer-logo"></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-4 col-md-12 text-center text-lg-end pr-25 pr-md-15 pr-xs-15">
                    <div class="footer__social mb-10">
                        <a href="https://www.facebook.com/aveenirit/"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer-area end-->
    <!-- Fullscreen search -->
    <div class="search-wrap">
        <div class="search-inner">
            <i class="fas fa-times search-close" id="search-close"></i>
            <div class="search-cell">
                <form method="get">
                    <div class="search-field-holder">
                        <input type="search" class="main-search-input" placeholder="Search Your Keyword...">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end fullscreen search -->

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

</html>class="search-inner">
<i class="fas fa-times search-close" id="search-close"></i>
<div class="search-cell">
    <form method="get">
        <div class="search-field-holder">
            <input type="search" class="main-search-input" placeholder="Search Your Keyword...">
        </div>
    </form>
</div>
</div>
</div>
<!-- end fullscreen search -->

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