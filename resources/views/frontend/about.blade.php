@extends('frontend.layouts.main')
@section('title', 'About')
@section('main-container')

        <!--<< Breadcrumb Section Start >>-->
        <div class="breadcrumb-wrapper bg-cover" style="background-image: url('frontend/img/banner/breadcrumb.jpg');">
            <div class="container">
                <div class="page-heading center">
                    <h1>About us</h1>
                    <ul class="breadcrumb-items">
                        <li>
                            <a href="/">
                            Home Page
                            </a>
                        </li>
                        <li>
                            <i class="far fa-chevron-right"></i>
                        </li>
                        <li>
                            about
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- About Section Start -->
        <section class="about-section fix section-padding section-bg">
            <div class="container">
                <div class="about-wrapper">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="about-image">
                                <img src="frontend/img/about/burger.png" alt="about-img">
                                <div class="burger-text">
                                    <img src="frontend/img/about/burger-text.png" alt="shape-img">
                                </div>
                                <div class="price">
                                    <h2>$<span class="count">4,99</span></h2>
                                </div>
                                <div class="since-text bg-cover" style="background-image: url('frontend/img/shape/food-shape.png');">
                                    <h3>since /1985</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 mt-5 mt-lg-0">
                            <div class="about-content">
                                <div class="section-title">
                                    <span class="wow fadeInUp">about our food</span>
                                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                        Where Quality Meet
                                        Excellent <span>Service.</span>
                                    </h2>
                                </div>
                                <p class="wow fadeInUp" data-wow-delay=".5s">
                                    It's the perfect dining experience where every dish is crafted with fresh, high-quality
                                    Experience quick and efficient service that ensures your food is servead fresh It's the
                                    dining experience where every dish is crafted with fresh, high-quality ingredients
                                </p>
                                <div class="icon-area">
                                    <div class="icon-items d-flex wow fadeInUp" data-wow-delay=".3s">
                                        <div class="icon">
                                            <i class="flaticon-quality"></i>
                                        </div>
                                        <div class="content">
                                            <h4>super quality food</h4>
                                            <p>
                                                A team of dreamers and doers build
                                                unique interactive music and art
                                            </p>
                                        </div>
                                    </div>
                                    <div class="icon-items d-flex wow fadeInUp" data-wow-delay=".5s">
                                        <div class="icon">
                                            <i class="flaticon-reputation"></i>
                                        </div>
                                        <div class="content">
                                            <h4>well reputation</h4>
                                            <p>
                                                A team of dreamers and doers build
                                                unique interactive music and art
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="info-area d-flex align-items-center">
                                    <a href="about " class="theme-btn style-line-height wow fadeInUp" data-wow-delay=".3s">more about us</a>
                                    <div class="info-content wow fadeInUp" data-wow-delay=".5s">
                                        <span>BRENDON GARREY</span>
                                        <h6>Customer’s experience is our highest priority.</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                    <a href="cart" class="theme-btn bg-white wow fadeInUp" data-wow-delay=".5s">
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

        <!-- About Food Section Start -->
        <section class="about-food-section section-bg section-padding">
            <div class="container">
                <div class="about-food-wrapper style-2">
                    <div class="section-title text-center">
                        <span class="wow fadeInUp">about our food</span>
                        <h2 class="wow fadeInUp" data-wow-delay=".3s">
                            hot delicious item
                        </h2>
                    </div>
                    <ul class="nav justify-content-center">
                        <li class="nav-item wow fadeInUp" data-wow-delay=".3s">
                            <a href="#chicken" data-bs-toggle="tab" class="nav-link active">
                            chicken fry
                            </a>
                        </li>
                        <li class="nav-item wow fadeInUp" data-wow-delay=".5s">
                            <a href="#pizza" data-bs-toggle="tab" class="nav-link">
                            pizza
                            </a>
                        </li>
                        <li class="nav-item wow fadeInUp" data-wow-delay=".7s">
                            <a href="#burger" data-bs-toggle="tab" class="nav-link">
                            burger
                            </a>
                        </li>
                        <li class="nav-item wow fadeInUp" data-wow-delay=".8s">
                            <a href="#deserts" data-bs-toggle="tab" class="nav-link">
                            deserts
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="chicken" class="tab-pane fade show active">
                            <div class="description-items">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                                        <div class="about-food-items center">
                                            <div class="food-image">
                                                <img src="frontend/img/about-food/pizza.png" alt="food-img">
                                            </div>
                                            <div class="food-content">
                                                <h3><a href="cart ">Chicago Deep Pizza.</a></h3>
                                                <p>
                                                    It's the perfect dining experience where 
                                                    Experience quick and efficient
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                                        <div class="about-food-items center">
                                            <div class="food-image">
                                                <img src="frontend/img/about-food/potato.png" alt="food-img">
                                            </div>
                                            <div class="food-content">
                                                <h3><a href="cart ">Chicago Deep Pizza.</a></h3>
                                                <p>
                                                    It's the perfect dining experience where 
                                                    Experience quick and efficient
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                                        <div class="about-food-items center">
                                            <div class="food-image">
                                                <img src="frontend/img/about-food/chicken.png" alt="food-img">
                                            </div>
                                            <div class="food-content">
                                                <h3><a href="cart ">Chicago Deep Pizza.</a></h3>
                                                <p>
                                                    It's the perfect dining experience where 
                                                    Experience quick and efficient
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".9s">
                                        <div class="about-food-items center">
                                            <div class="food-image">
                                                <img src="frontend/img/about-food/cheeseburger.png" alt="food-img">
                                            </div>
                                            <div class="food-content">
                                                <h3><a href="cart ">Chicago Deep Pizza.</a></h3>
                                                <p>
                                                    It's the perfect dining experience where 
                                                    Experience quick and efficient
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="pizza" class="tab-pane fade">
                            <div class="description-items">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-6">
                                        <div class="about-food-items center">
                                            <div class="food-image">
                                                <img src="frontend/img/about-food/pizza.png" alt="food-img">
                                            </div>
                                            <div class="food-content">
                                                <h3><a href="cart ">Chicago Deep Pizza.</a></h3>
                                                <p>
                                                    It's the perfect dining experience where 
                                                    Experience quick and efficient
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6">
                                        <div class="about-food-items center">
                                            <div class="food-image">
                                                <img src="frontend/img/about-food/potato.png" alt="food-img">
                                            </div>
                                            <div class="food-content">
                                                <h3><a href="cart ">Chicago Deep Pizza.</a></h3>
                                                <p>
                                                    It's the perfect dining experience where 
                                                    Experience quick and efficient
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6">
                                        <div class="about-food-items center">
                                            <div class="food-image">
                                                <img src="frontend/img/about-food/chicken.png" alt="food-img">
                                            </div>
                                            <div class="food-content">
                                                <h3><a href="cart ">Chicago Deep Pizza.</a></h3>
                                                <p>
                                                    It's the perfect dining experience where 
                                                    Experience quick and efficient
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6">
                                        <div class="about-food-items center">
                                            <div class="food-image">
                                                <img src="frontend/img/about-food/cheeseburger.png" alt="food-img">
                                            </div>
                                            <div class="food-content">
                                                <h3><a href="cart ">Chicago Deep Pizza.</a></h3>
                                                <p>
                                                    It's the perfect dining experience where 
                                                    Experience quick and efficient
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="burger" class="tab-pane fade">
                            <div class="description-items">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-6">
                                        <div class="about-food-items center">
                                            <div class="food-image">
                                                <img src="frontend/img/about-food/pizza.png" alt="food-img">
                                            </div>
                                            <div class="food-content">
                                                <h3><a href="cart ">Chicago Deep Pizza.</a></h3>
                                                <p>
                                                    It's the perfect dining experience where 
                                                    Experience quick and efficient
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6">
                                        <div class="about-food-items center">
                                            <div class="food-image">
                                                <img src="frontend/img/about-food/potato.png" alt="food-img">
                                            </div>
                                            <div class="food-content">
                                                <h3><a href="cart ">Chicago Deep Pizza.</a></h3>
                                                <p>
                                                    It's the perfect dining experience where 
                                                    Experience quick and efficient
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6">
                                        <div class="about-food-items center">
                                            <div class="food-image">
                                                <img src="frontend/img/about-food/chicken.png" alt="food-img">
                                            </div>
                                            <div class="food-content">
                                                <h3><a href="cart ">Chicago Deep Pizza.</a></h3>
                                                <p>
                                                    It's the perfect dining experience where 
                                                    Experience quick and efficient
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6">
                                        <div class="about-food-items center">
                                            <div class="food-image">
                                                <img src="frontend/img/about-food/cheeseburger.png" alt="food-img">
                                            </div>
                                            <div class="food-content">
                                                <h3><a href="cart ">Chicago Deep Pizza.</a></h3>
                                                <p>
                                                    It's the perfect dining experience where 
                                                    Experience quick and efficient
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="deserts" class="tab-pane fade">
                            <div class="description-items">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-6">
                                        <div class="about-food-items center">
                                            <div class="food-image">
                                                <img src="frontend/img/about-food/pizza.png" alt="food-img">
                                            </div>
                                            <div class="food-content">
                                                <h3><a href="cart ">Chicago Deep Pizza.</a></h3>
                                                <p>
                                                    It's the perfect dining experience where 
                                                    Experience quick and efficient
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6">
                                        <div class="about-food-items center">
                                            <div class="food-image">
                                                <img src="frontend/img/about-food/potato.png" alt="food-img">
                                            </div>
                                            <div class="food-content">
                                                <h3><a href="cart ">Chicago Deep Pizza.</a></h3>
                                                <p>
                                                    It's the perfect dining experience where 
                                                    Experience quick and efficient
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6">
                                        <div class="about-food-items center">
                                            <div class="food-image">
                                                <img src="frontend/img/about-food/chicken.png" alt="food-img">
                                            </div>
                                            <div class="food-content">
                                                <h3><a href="cart ">Chicago Deep Pizza.</a></h3>
                                                <p>
                                                    It's the perfect dining experience where 
                                                    Experience quick and efficient
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6">
                                        <div class="about-food-items center">
                                            <div class="food-image">
                                                <img src="frontend/img/about-food/cheeseburger.png" alt="food-img">
                                            </div>
                                            <div class="food-content">
                                                <h3><a href="cart ">Chicago Deep Pizza.</a></h3>
                                                <p>
                                                    It's the perfect dining experience where 
                                                    Experience quick and efficient
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Food Banner Section Start -->
        <section class="food-banner-section fix section-padding section-bg pt-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-9">
                        <div class="burger-banner-items bg-cover" style="background-image: url(frontend/img/banner/burger-bg.png);">
                            <div class="burger-content text-center">
                                <h3>today</h3>
                                <h2>special</h2>
                                <h4><a href="shop " class="text-white">beef <span>burger</span></a></h4>
                            </div>
                            <div class="burger-image">
                                <img src="frontend/img/food/big-burger.png" alt="food-img">
                            </div>
                            <div class="text-shape">
                                <img src="frontend/img/shape/pizza-text-2.png" alt="shape-img">
                            </div>
                            <div class="burger-text">
                                <img src="frontend/img/shape/burger-text.png" alt="shape-img">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-9 mt-5 mt-xl-0">
                        <div class="single-offer-items style-2 bg-cover" style="background-image: url('frontend/img/banner/pepsi-bg.png');">
                            <div class="offer-content">
                                <h5>crispy, every bite taste</h5>
                                <h3>
                                    FASH FOOD <br>
                                    MEAL
                                </h3>
                                <p>
                                    The mouth-watering aroma of <br>
                                    sizzling burgers
                                </p>
                                <a href="cart " class="theme-btn mt-4">order now</a>
                            </div>
                            <div class="offer-img">
                                <img src="frontend/img/offer/50percent-off-3.png" alt="shape-img">
                            </div>
                            <div class="roller-box">
                                <img src="frontend/img/food/roller-box.png" alt="food-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Marque Section Start -->
        <div class="marque-section fix section-padding pt-0 section-bg">
            <div class="marquee-wrapper text-slider mt-0">
                <div class="marquee-inner to-left">
                    <ul class="marqee-list d-flex">
                        <li class="marquee-item">
                            <span class="text-slider text-color">populer</span><span class="text-slider"></span> <span class="text-slider text-color">dishes</span>
                            <span class="text-slider"><img src="frontend/img/icon/burger.png" alt="icon-img"></span> <span class="text-slider"></span> <span class="text-slider text-color-2">delicious</span>
                            <span class="text-slider text-color-2">food</span> <img src="frontend/img/icon/pizza.png" alt="icon-img"> <span class="text-slider"></span> <span class="text-slider text-color">populer</span>
                            <span class="text-slider text-color">dishes</span> <span class="text-slider"></span><span class="text-slider"><img src="frontend/img/icon/burger.png" alt="icon-img"></span> <span class="text-slider"></span> <span class="text-slider text-color-2">delicious</span>
                            <span class="text-slider text-color">populer</span><span class="text-slider"></span> <span class="text-slider text-color">dishes</span>
                            <span class="text-slider"><img src="frontend/img/icon/burger.png" alt="icon-img"></span> <span class="text-slider"></span> <span class="text-slider text-color-2">delicious</span>
                            <span class="text-slider text-color-2">food</span> <img src="frontend/img/icon/pizza.png" alt="icon-img"> <span class="text-slider"></span> <span class="text-slider text-color">populer</span>
                            <span class="text-slider text-color">dishes</span> <span class="text-slider"></span><span class="text-slider"><img src="frontend/img/icon/burger.png" alt="icon-img"></span> <span class="text-slider"></span> <span class="text-slider text-color-2">delicious</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Today Nest Sale Banner Start -->
        <section class="today-best-sale fix">
            <div class="today-best-sale-wrapper">
                <div class="row g-0">
                    <div class="col-xl-8 col-lg-7">
                        <div class="swiper today-best-sale-image-slider">
                            <div class="array-button">
                                <button class="array-next"><i class="far fa-long-arrow-right"></i></button>
                                <button class="array-prev"><i class="far fa-long-arrow-left"></i></button>
                            </div>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="today-best-sale-image bg-cover" style="background-image: url('frontend/img/banner/best-sale-4.jpg');"></div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="today-best-sale-image bg-cover" style="background-image: url('frontend/img/banner/best-sale-4.jpg');"></div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="today-best-sale-image bg-cover" style="background-image: url('frontend/img/banner/best-sale-4.jpg');"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="best-sale-content style-2 bg-cover" style="background-image: url('frontend/img/shape.png');">
                            <div class="burger-shape">
                                <img src="frontend/img/shape/fry-shape-4.png" alt="shape-img">
                            </div>
                            <div class="fry-shape">
                                <img src="frontend/img/shape/burger-shape-4.png" alt="shape-img">
                            </div>
                            <h4 class="wow fadeInUp">Deal Of The Day</h4>
                            <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                TODAY'S the
                                hamburger' DAY
                            </h2>
                            <h3 class="wow fadeInUp" data-wow-delay=".5s">
                                <span>special price</span> $55
                            </h3>
                            <p class="wow fadeInUp" data-wow-delay=".7s">
                                Savor the perfect symphony of flavors It's the perfect
                                dining experience where Experience quick and efficient
                                with our signature hamburger, a culinary
                            </p>
                            <div class="button-area wow fadeInUp" data-wow-delay=".9s">
                                <a href="cart " class="theme-btn bg-transparent">
                                <span class="button-content-wrapper d-flex align-items-center">
                                <span class="button-icon"><i class="flaticon-delivery"></i></span>
                                <span class="button-text">order now</span>
                                </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Team Section Start -->
        <section class="team-section section-padding section-bg fix">
            <div class="container">
                <div class="section-title text-center">
                    <span class="wow fadeInUp">about our food</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">MEET OUR EXPERT CHEFS</h2>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="single-team-items">
                            <div class="team-image">
                                <img src="frontend/img/team/01.jpg" alt="team-img">
                                <div class="social-link">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                            <div class="team-content">
                                <p>head chef</p>
                                <h3>
                                    <a href="team">Leslie Alexander</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
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
                                    <a href="team ">Henry Lucas</a>
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
                                    <a href="team ">Mateo Levi</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-button text-center mt-5 wow fadeInUp" data-wow-delay=".4s">
                    <a href="team" class="theme-btn">meet our team</a>
                </div>
            </div>
        </section>

        <!-- Food Processing Section Start -->
        <section class="food-processing-section section-padding fix bg-cover" style="background-image: url('frontend/img/shape/about-food-bg.png');">
            <div class="container">
                <div class="section-title text-center">
                    <span class="wow fadeInUp">food processing</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">how we serve you?</h2>
                </div>
                <div class="food-processing-wrapper">
                    <div class="row">
                        <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="food-processing-items style-2 center">
                                <div class="food-processing-image">
                                    <img src="frontend/img/choose/01.png" alt="img">
                                    <div class="number">
                                        <span>01</span>
                                    </div>
                                </div>
                                <div class="food-processing-content">
                                    <h3>cooking with care</h3>
                                    <p>
                                        It's the perfect dining experience where 
                                        Experience quick and efficient
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                            <div class="food-processing-items style-2 center active">
                                <div class="food-processing-image">
                                    <img src="frontend/img/choose/02.png" alt="img">
                                    <div class="number">
                                        <span>02</span>
                                    </div>
                                </div>
                                <div class="food-processing-content">
                                    <h3>quickly delivery</h3>
                                    <p>
                                        It's the perfect dining experience where 
                                        Experience quick and efficient
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="food-processing-items style-2 center">
                                <div class="food-processing-image">
                                    <img src="frontend/img/choose/03.png" alt="img">
                                    <div class="number">
                                        <span>03</span>
                                    </div>
                                </div>
                                <div class="food-processing-content">
                                    <h3>choose food</h3>
                                    <p>
                                        It's the perfect dining experience where 
                                        Experience quick and efficient
                                    </p>
                                </div>
                            </div>
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