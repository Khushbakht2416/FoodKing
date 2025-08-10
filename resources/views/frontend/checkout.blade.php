@extends('frontend.layouts.main')
@section('title', 'Checkout')
@section('main-container')

        <!--<< Breadcrumb Section Start >>-->
        <div class="breadcrumb-wrapper bg-cover" style="background-image: url(' frontend/img/banner/breadcrumb.jpg');">
            <div class="container">
                <div class="page-heading center">
                    <h1>CHECKOUT</h1>
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
                            CHECKOUT
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!--<< Checkout Section Start >>-->
        <section class="checkout-section fix section-padding border-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <form action="#" method="post">
                            <div class="row g-4">
                                <div class="col-md-5 col-lg-4 col-xl-3">
                                    <div class="checkout-radio">
                                        <p class="primary-text">Select any one</p>
                                        <div class="checkout-radio-wrapper">
                                            <div class="checkout-radio-single">
                                                <input type="checkbox" class="form-check-input" id="cCard" name="pay-method" value="Credit/Debit Cards">
                                                <label for="cCard">Credit/Debit Cards</label>
                                            </div>
                                            <div class="checkout-radio-single">
                                                <input type="checkbox" class="form-check-input" id="paypal" name="pay-method" value="PayPal">
                                                <label for="paypal">PayPal</label>
                                            </div>
                                            <div class="checkout-radio-single">
                                                <input type="checkbox" class="form-check-input" id="payoneer" name="pay-method" value="Payoneer">
                                                <label for="payoneer">Payoneer</label>
                                            </div>
                                            <div class="checkout-radio-single">
                                                <input type="checkbox" class="form-check-input" id="visa" name="pay-method" value="Visa">
                                                <label for="visa">Visa</label>
                                            </div>
                                            <div class="checkout-radio-single">
                                                <input type="checkbox" class="form-check-input" id="mastercard" name="pay-method" value="Mastercard">
                                                <label for="mastercard">Mastercard</label>
                                            </div>
                                            <div class="checkout-radio-single">
                                                <input type="checkbox" class="form-check-input" id="fastPay" name="pay-method" value="Fastpay">
                                                <label for="fastPay">Fastpay</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 col-lg-8 col-xl-9">
                                    <div class="checkout-single-wrapper">
                                        <div class="checkout-single boxshado-single">
                                            <h4>Billing address</h4>
                                            <div class="checkout-single-form">
                                                <div class="row g-4">
                                                    <div class="col-lg-6">
                                                        <div class="input-single">
                                                            <input type="text" name="user-first-name" id="userFirstName" required="" placeholder="First Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="input-single">
                                                            <input type="text" name="user-last-name" id="userLastName" required="" placeholder="Last Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="input-single">
                                                            <input type="email" name="user-check-email" id="userCheckEmail" required="" placeholder="Your Email">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="input-single">
                                                            <select class="country-select" style="display: none;">
                                                                <option value="sahiwal">SAHIWAL</option>
                                                                <option value="Islamabad">ISLAMABAD</option>
                                                                <option value="karachi">KARACHI</option>
                                                                <option value="lahore">LAHORE</option>
                                                            </select>
                                                            <div class="nice-select country-select" tabindex="0">
                                                                <span class="current">SAHIWAL</span>
                                                                <ul class="list">
                                                                    <li data-value="sahiwal" class="option selected">SAHIWAL</li>
                                                                    <li data-value="islamabad" class="option">ISLAMABAD</li>
                                                                    <li data-value="karachi" class="option">KARACHI</li>
                                                                    <li data-value="lahore" class="option">LAHORE</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="input-single">
                                                            <textarea name="user-address" id="userAddress" placeholder="Address"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="checkout-single checkout-single-bg">
                                            <h4>Payment Methods</h4>
                                            <div class="checkout-single-form">
                                                <p class="payment"></p>
                                                <div class="row g-3">
                                                    <div class="col-lg-12">
                                                        <div class="input-single">
                                                            <label for="userCardNumber">Card number</label>
                                                            <input type="number" name="user-card-number" id="userCardNumber" placeholder="0000 0000 0000 0000">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="input-single">
                                                            <label for="userCardDate">Expiry date</label>
                                                            <input type="text" id="userCardDate" placeholder="DD/MM/YY">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="input-single">
                                                            <label for="userCvc">Cvc / Cvv</label>
                                                            <input type="text" maxlength="3" name="user-card-cvc" id="userCvc" required="" placeholder="3 Digits">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="input-single">
                                                            <label for="userCardName">Name on card</label>
                                                            <input type="text" name="user-card-name" id="userCardName" placeholder="Name">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="input-single input-check payment-save">
                                                <input type="checkbox" class="form-check-input" name="save-for-next" id="saveForNext">
                                                <label for="saveForNext">Save for my next payment</label>
                                            </div>
                                            <div class="mt-4">
                                                <a href="checkout " class="theme-btn border-radius-none">
                                                Payment Now
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Cta Banner Section Start -->
        <section class="main-cta-banner-2 section-padding bg-cover" style="background-image: url(' frontend/img/banner/main-cta-bg-2.jpg');">
            <div class="tomato-shape-left float-bob-y">
                <img src=" frontend/img/tomato.png" alt="shape-img">
            </div>
            <div class="chili-shape-right float-bob-y">
                <img src=" frontend/img/chilli.png" alt="shape-img">
            </div>
            <div class="container">
                <div class="main-cta-banner-wrapper-2 d-flex align-items-center justify-content-between">
                    <div class="section-title mb-0">
                        <span class="theme-color-3">crispy, every bite taste</span>
                        <h2 class="text-white">
                            30 minutes fast <br>
                            <span class="theme-color-3">delivery</span> challage
                        </h2>
                    </div>
                    <a href="#0" class="theme-btn bg-white">
                    <span class="button-content-wrapper d-flex align-items-center">
                    <span class="button-icon"><i class="flaticon-delivery"></i></span>
                    <span class="button-text">order now</span>
                    </span>
                    </a>
                    <div class="delivery-man">
                        <img src=" frontend/img/delivery-man-2.png" alt="img">
                    </div>
                </div>
            </div>
        </section>
@endsection