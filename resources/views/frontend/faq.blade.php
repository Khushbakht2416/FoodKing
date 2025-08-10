@extends('frontend.layouts.main')
@section('title', 'FAQs')
@section('main-container')

        <!--<< Breadcrumb Section Start >>-->
        <div class="breadcrumb-wrapper bg-cover" style="background-image: url('frontend/img/banner/breadcrumb.jpg');">
            <div class="container">
                <div class="page-heading center">
                    <h1>faq</h1>
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
                            faq
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!--<< Faq Section Start >>-->
        <section class="faq-section fix section-padding">
            <div class="container">
                <div class="section-title text-center">
                    <span class="wow fadeInUp">frequently ask question</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">Frequently ask question</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        @foreach($result as $row)
                        <div class="faq-content">
                            <div class="faq-accordion">
                                <div class="accordion" id="accordion">
                                    <div class="accordion-item">
                                        <h4 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true" aria-controls="faq1">
                                                {{ $row->question}}
                                            </button>
                                        </h4>
                                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                {{ $row->description}}</div>
                                        </div>
                                    </div>
                                    @endforeach
                                    {{-- <div class="accordion-item">
                                        <h4 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                                            CAN I ORDER FROM DIFFERENT RESTAURANT AT THE SAME TIME?
                                            </button>
                                        </h4>
                                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h4 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                                            Does Hub support both Elementor and WP Bakery Page Builder?
                                            </button>
                                        </h4>
                                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h4 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                                            CAN I ORDER FROM DIFFERENT RESTAURANT AT THE SAME TIME?
                                            </button>
                                        </h4>
                                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h4 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false" aria-controls="faq5">
                                            Does Hub support both Elementor and WP Bakery Page Builder?
                                            </button>
                                        </h4>
                                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h4 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6" aria-expanded="false" aria-controls="faq6">
                                            ARE YOUR MENU PRICES THE SAME AS THOSE AT THE RESTAURANT?
                                            </button>
                                        </h4>
                                        <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable.
                                            </div>
                                        </div>
                                    </div> --}}
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
                <img src="{{url('frontend/img/tomato.png')}}" alt="shape-img">
            </div>
            <div class="chili-shape-right float-bob-y">
                <img src="{{url('frontend/img/chilli.png')}}" alt="shape-img">
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
                    <a href="shop-single " class="theme-btn bg-white wow fadeInUp" data-wow-delay=".5s">
                    <span class="button-content-wrapper d-flex align-items-center">
                    <span class="button-icon"><i class="flaticon-delivery"></i></span>
                    <span class="button-text">order now</span>
                    </span>
                    </a>
                    <div class="delivery-man">
                        <img src="{{url('frontend/img/delivery-man-2.png')}}" alt="img">
                    </div>
                </div>
            </div>
        </section>
@endsection
