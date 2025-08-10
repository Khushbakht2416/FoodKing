@extends('frontend.layouts.main')
@section('title', 'Shop')
@section('main-container')

        <!--<< Breadcrumb Section Start >>-->
        <div class="breadcrumb-wrapper bg-cover" style="background-image: url('frontend/img/banner/breadcrumb.jpg');">
            <div class="container">
                <div class="page-heading center">
                    <h1>shop </h1>
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
                            shop 
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Food Catagory Section Start -->
        <section class="food-category-section fix section-padding">
            <div class="container">
                <div class="woocommerce-notices-wrapper">
                    <div class="product-showing">
                        <h5><a href="shop  "><span><img src="frontend/img/filter.png" alt="img"></span> Filtering</a></h5>
                        <h5>Showing <span>1–12</span> of 27 results</h5>
                    </div>
                    <div class="form-clt">
                        <h6>Sort by: <a href="shop  "><i class="fal fa-sort-alt"></i></a></h6>
                        <div class="nice-select" tabindex="0">
                            <span class="current">
                            Price
                            </span>
                            <ul class="list">
                                <li data-value="1" class="option selected">
                                    Price
                                </li>
                                <li data-value="1" class="option">
                                    Price
                                </li>
                                <li data-value="1" class="option">
                                    Price
                                </li>
                                <li data-value="1" class="option">
                                    Price
                                </li>
                            </ul>
                        </div>
                        <div class="icon">
                            <a href="shop-right-sidebar  "><i class="fas fa-th"></i></a>
                        </div>
                        <div class="icon-2">
                            <a href="shop-list  "><i class="fas fa-list"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($result as $row)
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="catagory-product-card-2 shadow-style text-center">
                            <div class="icon">
                                <a href="cart"><i class="far fa-heart"></i></a>
                            </div>
                            <div class="catagory-product-image">
                                <img src="{{ $row->imgurl}}" alt="product-img">
                            </div>
                            <div class="catagory-product-content">
                                <div class="catagory-button">
                                    <a href="cart" class="theme-btn-2"><i class="far fa-shopping-basket"></i>{{ $row->cart_url}}</a>
                                </div>
                                <div class="info-price d-flex align-items-center justify-content-center">
                                    <p>{{ $row->dper}}</p>
                                    <h6>{{ $row->orgprice}}</h6>
                                    <span>{{ $row->disprice}}</span>
                                </div>
                                <h4>
                                    <a href=" cart">{{ $row->foodname}}</a>
                                </h4>
                                <div class="star">
                                    @for($i = 1; $i <= 5; $i++)
                                        <span class="fas fa-star {{ $i <= $row->ratings ? '' : 'text-white' }}"></span>
                                    @endfor
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                    {{-- <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="catagory-product-card-2 active shadow-style text-center">
                            <div class="icon">
                                <a href="cart"><i class="far fa-heart"></i></a>
                            </div>
                            <div class="catagory-product-image">
                                <img src="frontend/img/food/burger-2.png" alt="product-img">
                            </div>
                            <div class="catagory-product-content">
                                <div class="catagory-button">
                                    <a href="cart" class="theme-btn-2"><i class="far fa-shopping-basket"></i>Add To Cart</a>
                                </div>
                                <div class="info-price d-flex align-items-center justify-content-center">
                                    <p>-5%</p>
                                    <h6>$30.52</h6>
                                    <span>$28.52</span>
                                </div>
                                <h4>
                                    <a href=" cart">Whopper Burger King</a>
                                </h4>
                                <div class="star">
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star text-white"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="catagory-product-card-2 shadow-style text-center">
                            <div class="icon">
                                <a href="cart"><i class="far fa-heart"></i></a>
                            </div>
                            <div class="catagory-product-image">
                                <img src="frontend/img/food/pasta-2.png" alt="product-img">
                            </div>
                            <div class="catagory-product-content">
                                <div class="catagory-button">
                                    <a href="cart" class="theme-btn-2"><i class="far fa-shopping-basket"></i>Add To Cart</a>
                                </div>
                                <div class="info-price d-flex align-items-center justify-content-center">
                                    <p>-5%</p>
                                    <h6>$30.52</h6>
                                    <span>$28.52</span>
                                </div>
                                <h4>
                                    <a href=" cart">Chiness pasta</a>
                                </h4>
                                <div class="star">
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star text-white"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".9s">
                        <div class="catagory-product-card-2 shadow-style text-center">
                            <div class="icon">
                                <a href="cart"><i class="far fa-heart"></i></a>
                            </div>
                            <div class="catagory-product-image">
                                <img src="frontend/img/food/pizza-3.png" alt="product-img">
                            </div>
                            <div class="catagory-product-content">
                                <div class="catagory-button">
                                    <a href="cart  " class="theme-btn-2"><i class="far fa-shopping-basket"></i>Add To Cart</a>
                                </div>
                                <div class="info-price d-flex align-items-center justify-content-center">
                                    <p>-5%</p>
                                    <h6>$30.52</h6>
                                    <span>$28.52</span>
                                </div>
                                <h4>
                                    <a href=" cart  ">delicious burger</a>
                                </h4>
                                <div class="star">
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star text-white"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="catagory-product-card-2 shadow-style text-center">
                            <div class="icon">
                                <a href="cart  "><i class="far fa-heart"></i></a>
                            </div>
                            <div class="catagory-product-image">
                                <img src="frontend/img/food/main-food-2.png" alt="product-img">
                            </div>
                            <div class="catagory-product-content">
                                <div class="catagory-button">
                                    <a href="cart  " class="theme-btn-2"><i class="far fa-shopping-basket"></i>Add To Cart</a>
                                </div>
                                <div class="info-price d-flex align-items-center justify-content-center">
                                    <p>-5%</p>
                                    <h6>$30.52</h6>
                                    <span>$28.52</span>
                                </div>
                                <h4>
                                    <a href=" cart  ">fast food combo</a>
                                </h4>
                                <div class="star">
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star text-white"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="catagory-product-card-2 shadow-style text-center">
                            <div class="icon">
                                <a href="cart  "><i class="far fa-heart"></i></a>
                            </div>
                            <div class="catagory-product-image">
                                <img src="frontend/img/food/ruti.png" alt="product-img">
                            </div>
                            <div class="catagory-product-content">
                                <div class="catagory-button">
                                    <a href="cart  " class="theme-btn-2"><i class="far fa-shopping-basket"></i>Add To Cart</a>
                                </div>
                                <div class="info-price d-flex align-items-center justify-content-center">
                                    <p>-5%</p>
                                    <h6>$30.52</h6>
                                    <span>$28.52</span>
                                </div>
                                <h4>
                                    <a href=" cart  ">ruti with chiken</a>
                                </h4>
                                <div class="star">
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star text-white"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="catagory-product-card-2 shadow-style text-center">
                            <div class="icon">
                                <a href="cart  "><i class="far fa-heart"></i></a>
                            </div>
                            <div class="catagory-product-image">
                                <img src="frontend/img/food/grilled-2.png" alt="product-img">
                            </div>
                            <div class="catagory-product-content">
                                <div class="catagory-button">
                                    <a href="cart  " class="theme-btn-2"><i class="far fa-shopping-basket"></i>Add To Cart</a>
                                </div>
                                <div class="info-price d-flex align-items-center justify-content-center">
                                    <p>-5%</p>
                                    <h6>$30.52</h6>
                                    <span>$28.52</span>
                                </div>
                                <h4>
                                    <a href=" cart  ">grilled chiken</a>
                                </h4>
                                <div class="star">
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star text-white"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".9s">
                        <div class="catagory-product-card-2 shadow-style text-center">
                            <div class="icon">
                                <a href="cart  "><i class="far fa-heart"></i></a>
                            </div>
                            <div class="catagory-product-image">
                                <img src="frontend/img/food/delicious-burger.png" alt="product-img">
                            </div>
                            <div class="catagory-product-content">
                                <div class="catagory-button">
                                    <a href="cart  " class="theme-btn-2"><i class="far fa-shopping-basket"></i>Add To Cart</a>
                                </div>
                                <div class="info-price d-flex align-items-center justify-content-center">
                                    <p>-5%</p>
                                    <h6>$30.52</h6>
                                    <span>$28.52</span>
                                </div>
                                <h4>
                                    <a href=" cart  ">delicious burger</a>
                                </h4>
                                <div class="star">
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star text-white"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="catagory-product-card-2 shadow-style text-center">
                            <div class="icon">
                                <a href="cart  "><i class="far fa-heart"></i></a>
                            </div>
                            <div class="catagory-product-image">
                                <img src="frontend/img/food/pasta-3.png" alt="product-img">
                            </div>
                            <div class="catagory-product-content">
                                <div class="catagory-button">
                                    <a href="cart  " class="theme-btn-2"><i class="far fa-shopping-basket"></i>Add To Cart</a>
                                </div>
                                <div class="info-price d-flex align-items-center justify-content-center">
                                    <p>-5%</p>
                                    <h6>$30.52</h6>
                                    <span>$28.52</span>
                                </div>
                                <h4>
                                    <a href=" cart  ">ruti with beef slice</a>
                                </h4>
                                <div class="star">
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star text-white"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="catagory-product-card-2 shadow-style text-center">
                            <div class="icon">
                                <a href="cart  "><i class="far fa-heart"></i></a>
                            </div>
                            <div class="catagory-product-image">
                                <img src="frontend/img/food/french-fry-3.png" alt="product-img">
                            </div>
                            <div class="catagory-product-content">
                                <div class="catagory-button">
                                    <a href="cart  " class="theme-btn-2"><i class="far fa-shopping-basket"></i>Add To Cart</a>
                                </div>
                                <div class="info-price d-flex align-items-center justify-content-center">
                                    <p>-5%</p>
                                    <h6>$30.52</h6>
                                    <span>$28.52</span>
                                </div>
                                <h4>
                                    <a href=" cart  ">Whopper Burger King</a>
                                </h4>
                                <div class="star">
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star text-white"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="catagory-product-card-2 shadow-style text-center">
                            <div class="icon">
                                <a href="cart  "><i class="far fa-heart"></i></a>
                            </div>
                            <div class="catagory-product-image">
                                <img src="frontend/img/food/fried-chicken-2.png" alt="product-img">
                            </div>
                            <div class="catagory-product-content">
                                <div class="catagory-button">
                                    <a href="cart  " class="theme-btn-2"><i class="far fa-shopping-basket"></i>Add To Cart</a>
                                </div>
                                <div class="info-price d-flex align-items-center justify-content-center">
                                    <p>-5%</p>
                                    <h6>$30.52</h6>
                                    <span>$28.52</span>
                                </div>
                                <h4>
                                    <a href=" cart  ">Chiness pasta</a>
                                </h4>
                                <div class="star">
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star text-white"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".9s">
                        <div class="catagory-product-card-2 shadow-style text-center">
                            <div class="icon">
                                <a href="cart  "><i class="far fa-heart"></i></a>
                            </div>
                            <div class="catagory-product-image">
                                <img src="frontend/img/food/french-fry-4.png" alt="product-img">
                            </div>
                            <div class="catagory-product-content">
                                <div class="catagory-button">
                                    <a href="cart  " class="theme-btn-2"><i class="far fa-shopping-basket"></i>Add To Cart</a>
                                </div>
                                <div class="info-price d-flex align-items-center justify-content-center">
                                    <p>-5%</p>
                                    <h6>$30.52</h6>
                                    <span>$28.52</span>
                                </div>
                                <h4>
                                    <a href=" cart  ">delicious burger</a>
                                </h4>
                                <div class="star">
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star text-white"></span>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <div class="page-nav-wrap mt-5 text-center wow fadeInUp" data-wow-delay=".4s">
                    <ul>
                        <li><a class="page-numbers" href="#"><i class="fal fa-long-arrow-left"></i></a></li>
                        <li><a class="page-numbers" href="#">1</a></li>
                        <li><a class="page-numbers" href="#">2</a></li>
                        <li><a class="page-numbers" href="#">3</a></li>
                        <li><a class="page-numbers" href="#">4</a></li>
                        <li><a class="page-numbers" href="#"><i class="fal fa-long-arrow-right"></i></a></li>
                    </ul>
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
                    <a href=" cart  " class="theme-btn bg-white wow fadeInUp" data-wow-delay=".5s">
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