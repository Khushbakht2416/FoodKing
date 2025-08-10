@extends('frontend.layouts.main')
@section('title', 'Team')
@section('main-container')

        <!--<< Breadcrumb Section Start >>-->
        <div class="breadcrumb-wrapper bg-cover" style="background-image: url('frontend/img/banner/breadcrumb.jpg');">
            <div class="container">
                <div class="page-heading center">
                    <h1>Our team</h1>
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
                            team/chef
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Team Section Start -->
        <section class="team-section section-padding section-bg fix">
            <div class="container">
                <div class="section-title text-center">
                    <span class="wow fadeInUp">about our food</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">MEET OUR EXPERT CHEFS</h2>
                </div>
                <div class="row">
                    @foreach($result as $row)
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="single-team-items">
                            <div class="team-image">
                                <img src="{{ $row->imgurl}}" alt="team-img">
                                <div class="social-link">
                                    @if($row->facebook)
                                    <a href="{{ $row->facebook }}"><i class="fab fa-facebook-f"></i></a>
                                    @endif
                                    @if($row->twitter)
                                    <a href="{{ $row->twitter }}"><i class="fab fa-twitter"></i></a>
                                    @endif
                                    @if($row->linkedin)
                                    <a href="{{ $row->linkedin }}"><i class="fab fa-linkedin-in"></i></a>
                                    @endif
                                    @if($row->youtube)
                                    <a href="{{ $row->youtube }}"><i class="fab fa-youtube"></i></a>
                                    @endif
                                </div>
                            </div>
                            <div class="team-content">
                                <p>{{ $row->designation}}</p>
                                <h3>
                                    <a href="team ">{{ $row->name}}</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{-- <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="single-team-items active">
                            <div class="team-image">
                                <img src="frontend/img/team/02.jpg" alt="team-img">
                                <div class="social-link">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                            <div class="team-content">
                                <p>sr table manager</p>
                                <h3>
                                    <a href="team ">HENRY LUCAS</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="single-team-items">
                            <div class="team-image">
                                <img src="frontend/img/team/03.jpg" alt="team-img">
                                <div class="social-link">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                            <div class="team-content">
                                <p>senoir cooker</p>
                                <h3>
                                    <a href="team ">MATEO LEVI</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="single-team-items">
                            <div class="team-image">
                                <img src="frontend/img/team/04.jpg" alt="team-img">
                                <div class="social-link">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                            <div class="team-content">
                                <p>senoir cooker</p>
                                <h3>
                                    <a href="team ">Daniel Jack</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="single-team-items">
                            <div class="team-image">
                                <img src="frontend/img/team/05.jpg" alt="team-img">
                                <div class="social-link">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                            <div class="team-content">
                                <p>senoir cooker</p>
                                <h3>
                                    <a href="team ">Owen Asher</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="single-team-items">
                            <div class="team-image">
                                <img src="frontend/img/team/06.jpg" alt="team-img">
                                <div class="social-link">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                            <div class="team-content">
                                <p>senoir cooker</p>
                                <h3>
                                    <a href="team ">Leslie Michael</a>
                                </h3>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>

        <!-- Video Section Start -->
        <div class="video-section-2 style-2 fix bg-cover" style="background-image: url('frontend/img/bg-image/bg-shape.png');">
            <div class="container">
                <div class="video-wrapper bg-cover" style="background-image: url('frontend/img/banner/video-bg-3.jpg');">
                    <div class="video-btn video-pulse center">
                        <a class="video-popup" href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I"><i class="fas fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Choose Us Section Start -->
        <section class="choose-us-2 fix section-padding bg-cover theme-bg" style="background-image: url('frontend/img/bg-image/bg-shape.png');">
            <div class="container">
                <div class="food-icon-wrapper-2">
                    <div class="row g-5">
                        <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="single-food-icon">
                                <div class="icon">
                                    <img src="frontend/img/icon/01.svg" alt="icon-img">
                                </div>
                                <div class="content">
                                    <h3>Best Quality Food</h3>
                                    <p>
                                        Sed ut perspiciatis unde omnis 
                                        este natus sit voluptatem
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".5s">
                            <div class="single-food-icon">
                                <div class="icon">
                                    <img src="frontend/img/icon/02.svg" alt="icon-img">
                                </div>
                                <div class="content">
                                    <h3>fast food delivery</h3>
                                    <p>
                                        Sed ut perspiciatis unde omnis 
                                        este natus sit voluptatem
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="single-food-icon">
                                <div class="icon">
                                    <img src="frontend/img/icon/03.svg" alt="icon-img">
                                </div>
                                <div class="content">
                                    <h3>money back guarantee</h3>
                                    <p>
                                        Sed ut perspiciatis unde omnis 
                                        este natus sit voluptatem
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".9s">
                            <div class="single-food-icon">
                                <div class="icon">
                                    <img src="frontend/img/icon/04.svg" alt="icon-img">
                                </div>
                                <div class="content">
                                    <h3>100% natural food</h3>
                                    <p>
                                        Sed ut perspiciatis unde omnis 
                                        este natus sit voluptatem
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Booking Section Start -->
        <section class="booking-section mt-0 fix section-padding section-bg">
            <div class="container">
                <div class="booking-wrapper">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-6">
                            <div class="booking-content style-2">
                                <div class="section-title">
                                    <span class="wow fadeInUp">crispy, every bite taste</span>
                                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                        need <span>booking</span>? <br>
                                        reserve your table?
                                    </h2>
                                </div>
                                <div class="icon-items d-flex align-items-center wow fadeInUp" data-wow-delay=".5s">
                                    <div class="icon">
                                        <i class="flaticon-phone-call-2"></i>
                                    </div>
                                    <div class="content">
                                        <h5>24/7 Support center</h5>
                                        <h3><a href="tel:+1718-904-4450">+1718-904-4450</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 mt-5 mt-lg-0 wow fadeInUp" data-wow-delay=".4s">
                            <div class="booking-contact style-2 bg-cover" style="background-image: url('frontend/img/shape/booking-shape.png');">
                                <h4 class="text-center text-white">create an reservation</h4>
                                <div class="booking-items">
                                    <div class="form-clt">
                                        <div class="nice-select" tabindex="0">
                                            <span class="current">
                                            no of person
                                            </span>
                                            <ul class="list">
                                                <li data-value="1" class="option selected">
                                                    1 People
                                                </li>
                                                <li data-value="1" class="option">
                                                    2 People
                                                </li>
                                                <li data-value="1" class="option">
                                                    3 People
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="form-clt">
                                        <input type="text" name="number" id="number" placeholder="phone number">
                                        <div class="icon">
                                            <i class="fas fa-phone"></i>
                                        </div>
                                    </div>
                                    <div class="form-clt">
                                        <input type="date" id="calendar" name="calendar">
                                    </div>
                                    <div class="form-clt">
                                        <a href="reservation " class="theme-btn bg-yellow">
                                        booking now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Marque Section Start -->
        <div class="marque-section fix section-padding section-bg pb-5">
            <div class="marquee-wrapper style-responsive mt-0 text-slider">
                <div class="marquee-inner to-left">
                    <ul class="marqee-list d-flex">
                        <li class="marquee-item">
                            <span class="text-slider text-color">populer</span><span class="text-slider"></span> <span class="text-slider text-color">dishes</span>
                            <span class="text-slider"><img src="frontend/img/star.svg" alt="icon-img"></span> <span class="text-slider"></span> <span class="text-slider text-color">delicious</span>
                            <span class="text-slider text-color">food</span> <img src="frontend/img/star.svg" alt="icon-img"> <span class="text-slider"></span> <span class="text-slider text-color">populer</span>
                            <span class="text-slider text-color">dishes</span> <span class="text-slider"></span><span class="text-slider"><img src="frontend/img/star.svg" alt="icon-img"></span> <span class="text-slider"></span> <span class="text-slider text-color">delicious</span>
                            <span class="text-slider text-color">populer</span><span class="text-slider"></span> <span class="text-slider text-color">dishes</span>
                            <span class="text-slider"><img src="frontend/img/star.svg" alt="icon-img"></span> <span class="text-slider"></span> <span class="text-slider text-color">delicious</span>
                            <span class="text-slider text-color">food</span> <img src="frontend/img/star.svg" alt="icon-img"> <span class="text-slider"></span> <span class="text-slider text-color">populer</span>
                            <span class="text-slider text-color">dishes</span> <span class="text-slider"></span><span class="text-slider"><img src="frontend/img/star.svg" alt="icon-img"></span> <span class="text-slider"></span> <span class="text-slider text-color">delicious</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Food Banner Section Start -->
        <section class="food-banner fix">
            <div class="row g-3">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="food-banner-items-2 bg-cover" style="background-image: url(frontend/img/banner/food-bg.jpg);">
                        <div class="price bg-cover" style="background-image: url('frontend/img/vector.png');">
                            <span>$38</span>
                        </div>
                        <div class="food-content">
                            <h4>start price $25</h4>
                            <h2 class="text-white">
                                delicious <br>        
                                hamburger <br>
                                fries
                            </h2>
                            <a href="#" class="theme-btn bg-red mt-4">
                            order now
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="food-banner-items-2 bg-cover" style="background-image: url(frontend/img/banner/food-bg-2.jpg);">
                        <div class="price style-2 bg-cover" style="background-image: url('frontend/img/vector-2.png');">
                            <span>$43</span>
                        </div>
                        <div class="food-content">
                            <h4>start price $25</h4>
                            <h2 class="text-white">
                                super <br>
                                chicken <br>
                                fry
                            </h2>
                            <a href="#" class="theme-btn bg-yellow border-radius-none mt-4">
                            order now
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="food-banner-items-2 bg-cover" style="background-image: url(frontend/img/banner/food-bg-3.jpg);">
                        <div class="price bg-cover" style="background-image: url('frontend/img/vector.png');">
                            <span>$38</span>
                        </div>
                        <div class="food-content">
                            <h4>start price $25</h4>
                            <h2 class="text-white">
                                delicious <br>        
                                hamburger <br>
                                fries
                            </h2>
                            <a href="#" class="theme-btn bg-red mt-4">
                            order now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonial Section Start -->
        <section class="testimonial-section fix section-padding section-bg">
            <div class="burger-shape">
                <img src="frontend/img/shape/burger-shape-3.png" alt="burger-shape">
            </div>
            <div class="fry-shape">
                <img src="frontend/img/shape/fry-shape-2.png" alt="burger-shape">
            </div>
            <div class="pizza-shape">
                <img src="frontend/img/shape/pizzashape.png" alt="burger-shape">
            </div>
            <div class="container">
                <div class="testimonial-wrapper style-2">
                    <div class="testimonial-items text-center">
                        <div class="swiper testimonial-content-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial-content">
                                        <div class="client-info">
                                            <h4>Piter Bowman</h4>
                                            <h5>Business CEO & co founder</h5>
                                        </div>
                                        <h3>
                                            “Thank you for dinner last night. It was amazing!! I have
                                            say it’s the best meal I have had in quite some time.
                                            will definitely be seeing more eating next year.”
                                        </h3>
                                        <div class="star">
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-content">
                                        <div class="client-info">
                                            <h4>Piter Bowman</h4>
                                            <h5>Business CEO & co founder</h5>
                                        </div>
                                        <h3>
                                            “Thank you for dinner last night. It was amazing!! I have
                                            say it’s the best meal I have had in quite some time.
                                            will definitely be seeing more eating next year.”
                                        </h3>
                                        <div class="star">
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-content">
                                        <div class="client-info">
                                            <h4>Piter Bowman</h4>
                                            <h5>Business CEO & co founder</h5>
                                        </div>
                                        <h3>
                                            “Thank you for dinner last night. It was amazing!! I have
                                            say it’s the best meal I have had in quite some time.
                                            will definitely be seeing more eating next year.”
                                        </h3>
                                        <div class="star">
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper testimonial-image-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="client-image-item">
                                        <div class="client-img bg-cover" style="background-image: url('frontend/img/client/01.jpg')"></div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="client-image-item">
                                        <div class="client-img bg-cover" style="background-image: url('frontend/img/client/02.jpg')"></div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="client-image-item">
                                        <div class="client-img bg-cover" style="background-image: url('frontend/img/client/03.jpg')"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Instagram Banner Section Start -->
        <div class="instagram-banner fix">
            <div class="swiper instagram-banner-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="instagram-banner-items">
                            <div class="banner-image">
                                <img src="frontend/img/instagram-banner/01.jpg" alt="food-img">
                                <a href="frontend/img/instagram-banner/01.jpg" class="icon img-popup">
                                <i class="far fa-search"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="instagram-banner-items">
                            <div class="banner-image">
                                <img src="frontend/img/instagram-banner/02.jpg" alt="food-img">
                                <a href="frontend/img/instagram-banner/02.jpg" class="icon img-popup">
                                <i class="far fa-search"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="instagram-banner-items">
                            <div class="banner-image">
                                <img src="frontend/img/instagram-banner/03.jpg" alt="food-img">
                                <a href="frontend/img/instagram-banner/03.jpg" class="icon img-popup">
                                <i class="far fa-search"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="instagram-banner-items">
                            <div class="banner-image">
                                <img src="frontend/img/instagram-banner/04.jpg" alt="food-img">
                                <a href="frontend/img/instagram-banner/04.jpg" class="icon img-popup">
                                <i class="far fa-search"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="instagram-banner-items">
                            <div class="banner-image">
                                <img src="frontend/img/instagram-banner/05.jpg" alt="food-img">
                                <a href="frontend/img/instagram-banner/05.jpg" class="icon img-popup">
                                <i class="far fa-search"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection