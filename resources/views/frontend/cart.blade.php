@extends('frontend.layouts.main')
@section('title', 'Cart')
@section('main-container')

        <!--<< Breadcrumb Section Start >>-->
        <div class="breadcrumb-wrapper bg-cover" style="background-image: url('frontend/img/banner/breadcrumb.jpg');">
            <div class="container">
                <div class="page-heading center">
                    <h1>shop Cart</h1>
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
                            shop Cart
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!--<< Product Cart Section Start >>-->
        <section class="cart-section section-padding fix">
            <div class="container">
                <div class="main-cart-wrapper">
                    <div class="row">
                        <div class="col-12">
                            <div class="cart-wrapper">
                                <div class="cart-items-wrapper">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                                <th>Subtotal</th>
                                                <th>Remove</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="cart-item">
                                                <td class="cart-item-info">
                                                    <img src="frontend/img/shop-food/s1.png" alt="Image">
                                                </td>
                                                <td class="cart-item-price">
                                                    $ <span class="base-price">195.00</span>
                                                </td>
                                                <td>
                                                    <div class="cart-item-quantity">
                                                        <span class="cart-item-quantity-amount"></span>
                                                        <div class="cart-item-quantity-controller">
                                                            <a href="#0" class="cart-increment">
                                                            <i class="far fa-caret-up"></i>
                                                            </a>
                                                            <a href="#0" class="cart-decrement">
                                                            <i class="far fa-caret-down"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="cart-item-price">
                                                    $ <span class="total-price"></span>
                                                </td>
                                                <td class="cart-item-remove">
                                                    <a href="#0">
                                                    <i class="fas fa-times"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="cart-wrapper-footer">
                                    <form action="https://modinatheme.com/html/foodking-html/cart ">
                                        <input type="text" name="promo-code" id="promoCode" placeholder="Promo code">
                                        <button type="submit" class="theme-btn border-radius-none">
                                        Apply Code
                                        </button>
                                    </form>
                                    <a href="cart " class="theme-btn border-radius-none">
                                    Update Cart
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6"></div>
                        <div class="col-xl-6">
                            <div class="cart-pragh-box">
                                <div class="cart-graph">
                                    <h4>Cart Total</h4>
                                    <ul>
                                        <li>
                                            <span>Subtotal</span>
                                            <span>$320.00</span>
                                        </li>
                                        <li>
                                            <span>Shipping</span>
                                            <span>$10</span>
                                        </li>
                                        <li>
                                            <span>Total</span>
                                            <span>$320.00</span>
                                        </li>
                                    </ul>
                                    <div class="chck">
                                        <a href="checkout" class="theme-btn border-radius-none">
                                        Checkout
                                        </a>
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
                    <a href="shop-single " class="theme-btn bg-white wow fadeInUp" data-wow-delay=".5s">
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