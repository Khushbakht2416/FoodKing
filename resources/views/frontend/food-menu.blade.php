@extends('frontend.layouts.main')
@section('title', 'Food-menu')
@section('main-container')
        
        <!--<< Breadcrumb Section Start >>-->
        <div class="breadcrumb-wrapper bg-cover" style="background-image: url('frontend/img/banner/breadcrumb.jpg');">
            <div class="container">
                <div class="page-heading center">
                    <h1>food menu </h1>
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
                            food menu
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Food Menu Section Start -->
        <section class="fooder-menu-section fix section-padding">
            <div class="container">
                <div class="section-title text-center">
                    <span class="wow fadeInUp">about our food</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">trending food menu</h2>
                </div>
                <div class="fooder-menu-wrapper">
                    <div class="row">
                        @foreach($result as $row)
                        <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="food-menu-items d-flex align-items-center justify-content-between">
                                <div class="food-menu-content">
                                    <h4>{{ $row->foodname}}</h4>
                                    <p>{{ $row->description}}</p>
                                </div>
                                <h4 class="price">{{ $row->price}}</h4>
                            </div>
                        </div>
                        @endforeach
                        {{-- <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                            <div class="food-menu-items d-flex align-items-center justify-content-between">
                                <div class="food-menu-content">
                                    <h4>Chicago Deep Pizza.</h4>
                                    <p>
                                        It's the perfect dining experience where Experience quick and efficient
                                    </p>
                                </div>
                                <h4 class="price">$5.00</h4>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="food-menu-items active d-flex align-items-center justify-content-between">
                                <div class="food-menu-content">
                                    <h4>Chicago Deep Pizza.</h4>
                                    <p>
                                        It's the perfect dining experience where Experience quick and efficient
                                    </p>
                                </div>
                                <h4 class="price">$5.00</h4>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                            <div class="food-menu-items d-flex align-items-center justify-content-between">
                                <div class="food-menu-content">
                                    <h4>Chicago Deep Pizza.</h4>
                                    <p>
                                        It's the perfect dining experience where Experience quick and efficient
                                    </p>
                                </div>
                                <h4 class="price">$5.00</h4>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="food-menu-items d-flex align-items-center justify-content-between">
                                <div class="food-menu-content">
                                    <h4>Chicago Deep Pizza.</h4>
                                    <p>
                                        It's the perfect dining experience where Experience quick and efficient
                                    </p>
                                </div>
                                <h4 class="price">$5.00</h4>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                            <div class="food-menu-items d-flex align-items-center justify-content-between">
                                <div class="food-menu-content">
                                    <h4>Chicago Deep Pizza.</h4>
                                    <p>
                                        It's the perfect dining experience where Experience quick and efficient
                                    </p>
                                </div>
                                <h4 class="price">$5.00</h4>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="food-menu-items d-flex align-items-center justify-content-between">
                                <div class="food-menu-content">
                                    <h4>Chicago Deep Pizza.</h4>
                                    <p>
                                        It's the perfect dining experience where Experience quick and efficient
                                    </p>
                                </div>
                                <h4 class="price">$5.00</h4>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                            <div class="food-menu-items d-flex align-items-center justify-content-between">
                                <div class="food-menu-content">
                                    <h4>Chicago Deep Pizza.</h4>
                                    <p>
                                        It's the perfect dining experience where Experience quick and efficient
                                    </p>
                                </div>
                                <h4 class="price">$5.00</h4>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial Section Start -->
        <section class="testimonial-section fix section-padding">
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