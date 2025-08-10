@extends('frontend.layouts.main')
@section('title', 'Testimonial')
@section('main-container')

        <!--<< Breadcrumb Section Start >>-->
        <div class="breadcrumb-wrapper bg-cover" style="background-image: url('frontend/img/banner/breadcrumb.jpg');">
            <div class="container">
                <div class="page-heading center">
                    <h1>testimonial</h1>
                    <ul class="breadcrumb-items">
                        <li>
                            <a href="/">
                            Home 
                            </a>
                        </li>
                        <li>
                            <i class="far fa-chevron-right"></i>
                        </li>
                        <li>
                            testimonial
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!--<< Testimonial Section Start >>-->
        <section class="testimonial-section-4 fix section-bg section-padding">
            <div class="container">
                <div class="row g-4">
                    @foreach($result as $row)
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="testimonial-card-items">
                            <div class="testimonial-image bg-cover" style="background-image: url('{{ $row->imgurl}}');"></div>
                            <div class="testimonial-content">
                                <p>{{ $row->review}}</p>
                                <h4>{{ $row->name}}</h4>
                                <span>{{ $row->designation}}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                    {{-- <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="testimonial-card-items">
                            <div class="testimonial-image bg-cover" style="background-image: url('frontend/img/client/09.jpg');"></div>
                            <div class="testimonial-content">
                                <p>
                                    Bring to the table win-win strategies to ensure proactive domination. At the end of the day going forward normal that has evolved from
                                    operational X is on the 
                                </p>
                                <h4>Frank H. Houston</h4>
                                <span>Food Blogger</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="testimonial-card-items">
                            <div class="testimonial-image bg-cover" style="background-image: url('frontend/img/client/10.jpg');"></div>
                            <div class="testimonial-content">
                                <p>
                                    Bring to the table win-win strategies to ensure proactive domination. At the end of the day going forward normal that has evolved from
                                    operational X is on the 
                                </p>
                                <h4>William M. Spencer</h4>
                                <span>Designer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="testimonial-card-items">
                            <div class="testimonial-image bg-cover" style="background-image: url('frontend/img/client/11.jpg');"></div>
                            <div class="testimonial-content">
                                <p>
                                    Bring to the table win-win strategies to ensure proactive domination. At the end of the day going forward normal that has evolved from
                                    operational X is on the 
                                </p>
                                <h4>Kenneth Mix </h4>
                                <span>Food Lover</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="testimonial-card-items">
                            <div class="testimonial-image bg-cover" style="background-image: url('frontend/img/client/12.jpg');"></div>
                            <div class="testimonial-content">
                                <p>
                                    Bring to the table win-win strategies to ensure proactive domination. At the end of the day going forward normal that has evolved from
                                    operational X is on the 
                                </p>
                                <h4>Shikon Boy</h4>
                                <span>Frontend</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="testimonial-card-items">
                            <div class="testimonial-image bg-cover" style="background-image: url('frontend/img/client/13.jpg');"></div>
                            <div class="testimonial-content">
                                <p>
                                    Bring to the table win-win strategies to ensure proactive domination. At the end of the day going forward normal that has evolved from
                                    operational X is on the 
                                </p>
                                <h4>Nowrin Ahmed</h4>
                                <span>WordPress Lover</span>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>

        <!-- Main Cta Banner Section Start -->
        <section class="main-cta-banner-2 section-padding bg-cover" style="background-image: url('frontend/img/banner/main-cta-bg-2.jpg');">
            <div class="tomato-shape-left float-bob-y">
                <img src="frontend/img/tomato.png" alt="shape-img">
            </div>
            <div class="chili-shape-right float-bob-y">
                <img src="frontend/img/chilli.png" alt="shape-img">
            </div>
            <div class="container">
                <div class="main-cta-banner-wrapper-2 d-flex align-items-center justify-content-between">
                    <div class="section-title mb-0">
                        <span class="theme-color-3 wow fadeInUp">crispy, every bite taste</span>
                        <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">
                            30 minutes fast <br>
                            <span class="theme-color-3">delivery</span> challage
                        </h2>
                    </div>
                    <a href="cart " class="theme-btn bg-white wow fadeInUp" data-wow-delay=".5s">
                    <span class="button-content-wrapper d-flex align-items-center">
                    <span class="button-icon"><i class="flaticon-delivery"></i></span>
                    <span class="button-text">order now</span>
                    </span>
                    </a>
                    <div class="delivery-man">
                        <img src="frontend/img/delivery-man-2.png" alt="img">
                    </div>
                </div>
            </div>
        </section>
        @endsection