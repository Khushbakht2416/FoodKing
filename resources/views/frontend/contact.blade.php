@extends('frontend.layouts.main')
@section('title', 'Contact')
@section('main-container')

        <!--<< Breadcrumb Section Start >>-->
        <div class="breadcrumb-wrapper bg-cover" style="background-image: url('frontend/img/banner/breadcrumb.jpg');">
            <div class="container">
                <div class="page-heading center">
                    <h1>Contact us</h1>
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
                            contact us
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!--<< Contact Info Section Start >>-->
        <section class="contact-info-section fix section-padding section-bg">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="contact-info-items text-center">
                            <div class="icon">
                                <img src="{{url('frontend/img/icon/location.svg')}}" alt="icon-img">
                            </div>
                            <div class="content">
                                <h3>address line</h3>
                                <p>
                                    Sahiwal, Pak Avenue, Street 37  <br>
                                    NY 10013,Pakistan 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="contact-info-items active text-center">
                            <div class="icon">
                                <img src="{{url('frontend/img/icon/phone.svg')}}" alt="icon-img">
                            </div>
                            <div class="content">
                                <h3>Phone Number</h3>
                                <p>
                                    03456789043 <br>
                                    03456789043
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="contact-info-items text-center">
                            <div class="icon">
                                <img src="{{url('frontend/img/icon/email.svg')}}" alt="icon-img">
                            </div>
                            <div class="content">
                                <h3>Mail Adress</h3>
                                <p>
                                    khushbakhtf43@gmail.com <br>
                                    Supervisor muhammadjamil@gmail.com
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--<< Contact Section Start >>-->
        <section class="contact-section section-padding pt-0 section-bg">
            <div class="container">
                <div class="contact-area">
                    <div class="row justify-content-between">
                        <div class="col-xl-6 col-lg-6">
                            <div class="map-content-area">
                                <h3 class="wow fadeInUp" data-wow-delay=".3s"> Get in touch</h3>
                                <p class="wow fadeInUp" data-wow-delay=".5s">
                                    Got questions or need assistance? We're here to help! Reach out to us via phone, email, or our contact form. We look forward to connecting with you soon!
                                </p>
                                <div class="google-map wow fadeInUp" data-wow-delay=".7s">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3431.5643704561526!2d73.08314197419007!3d30.67439328845227!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3922c95fbfd338ef%3A0x42d25b831a64fc5a!2sTea%20o%20Clock!5e0!3m2!1sen!2s!4v1718783510671!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 mt-5 mt-lg-0">
                            <div class="contact-form-items">
                                <div class="contact-title">
                                    <h3 class="wow fadeInUp" data-wow-delay=".3s">Fill Up The Form</h3>
                                    <p class="wow fadeInUp" data-wow-delay=".5s">Your email address will not be published. Required fields are marked *</p>
                                </div>
                                @if($message = Session::get('success'))
                                <div class = "alert alert-block p-4 border-left-warning" style = "background-color: green; opacity:1">
                                <strong>
                                    <h2 style = "color: black"> {{$message}}</h2>
                                </strong>
                                </div>
                                @endif
                                <form method="post" action="{{url('/contact')}}">
                                    @csrf
                                    <div class="row g-4">
                                        <div class="col-lg-12 wow fadeInUp" data-wow-delay=".3s">
                                           
                                            <div class="form-clt">
                                                <input type="text" name="name"  placeholder="Your Name*" value="{{old('name')}}">
                                                @if($errors->has('name'))
                                                <span class="text-danger">
                                                    {{$errors->first('name')}}
                                                </span>
                                                @endif
                                                <div class="icon">
                                                    <i class="fal fa-user"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 wow fadeInUp" data-wow-delay=".5s">
                                            <div class="form-clt">
                                                <input type="text" name="email" placeholder="Email Address*" value="{{old('email')}}">
                                                @if($errors->has('email'))
                                                <span class="text-danger">
                                                    {{$errors->first('email')}}
                                                </span>
                                                @endif
                                                <div class="icon">
                                                    <i class="fal fa-envelope"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 wow fadeInUp" data-wow-delay=".7s">
                                            <div class="form-clt-big form-clt">
                                                <textarea name="message" placeholder="Enter Your Messege here" value="{{old('message')}}"></textarea>
                                                @if($errors->has('message'))
                                                <span class="text-danger">
                                                    {{$errors->first('message')}}
                                                </span>
                                                @endif
                                                <div class="icon">
                                                    <i class="fal fa-edit"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".8s">
                                            <button type="submit" class="theme-btn">
                                            <span class="button-content-wrapper d-flex align-items-center">
                                            <span class="button-icon"><i class="fal fa-paper-plane"></i></span>
                                            <span class="button-text">Get In Touch</span>
                                            </span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
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
                    <a href="cart" class="theme-btn bg-white wow fadeInUp" data-wow-delay=".5s">
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