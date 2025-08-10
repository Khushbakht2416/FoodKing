<!DOCTYPE html>
<html lang="en">
  <!--<< Header Area >>-->

  <head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="modinatheme" />
    <meta name="description" content="Foodking - Fast Food Restaurant Html" />
    <!-- ======== Page title ============ -->
    <title>@yield('title') Fast Food Restaurant HTML Template</title>
    <!--<< Favcion >>-->
    <link rel="shortcut icon" href="{{url('frontend/img/logo/favicon.svg')}}" />
    <!--<< Bootstrap min.css >>-->
    <link rel="stylesheet" href="{{url('frontend/css/bootstrap.min.css')}}" />
    <!--<< Font Awesome.css >>-->
    <link rel="stylesheet" href="{{url('frontend/css/font-awesome.css')}}" />
    <!--<< Animate.css >>-->
    <link rel="stylesheet" href="{{url('frontend/css/animate.css')}}" />
    <!--<< Magnific Popup.css >>-->
    <link rel="stylesheet" href="{{url('frontend/css/magnific-popup.css')}}" />
    <!--<< MeanMenu.css >>-->
    <link rel="stylesheet" href="{{url('frontend/css/meanmenu.css')}}" />
    <!--<< Swiper Bundle.css >>-->
    <link rel="stylesheet" href="{{url('frontend/css/swiper-bundle.min.css')}}" />
    <!--<< Nice Select.css >>-->
    <link rel="stylesheet" href="{{url('frontend/css/nice-select.css')}}" />
    <!--<< Main.css >>-->
    <link rel="stylesheet" href="{{url('frontend/css/main.css')}}" />
    <!--<< Style.css >>-->
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!-- Proloader Start -->
    <div id="preloader" class="preloader">
      <div class="animation-preloader">
        <div class="spinner"></div>
        <div class="txt-loading">
          <span data-text-preloader="F" class="letters-loading"> F </span>
          <span data-text-preloader="O" class="letters-loading"> O </span>
          <span data-text-preloader="0" class="letters-loading"> O </span>
          <span data-text-preloader="D" class="letters-loading"> D </span>
          <span data-text-preloader="K" class="letters-loading"> K </span>
          <span data-text-preloader="I" class="letters-loading"> I </span>
          <span data-text-preloader="N" class="letters-loading"> N </span>
          <span data-text-preloader="G" class="letters-loading"> G </span>
        </div>
        <p class="text-center">Loading</p>
      </div>
      <div class="loader">
        <div class="row">
          <div class="col-3 loader-section section-left">
            <div class="bg"></div>
          </div>
          <div class="col-3 loader-section section-left">
            <div class="bg"></div>
          </div>
          <div class="col-3 loader-section section-right">
            <div class="bg"></div>
          </div>
          <div class="col-3 loader-section section-right">
            <div class="bg"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Offcanvas Area Start -->
    <div class="fix-area">
      <div class="offcanvas__info">
        <div class="offcanvas__wrapper">
          <div class="offcanvas__content">
            <div
              class="offcanvas__top mb-5 d-flex justify-content-between align-items-center"
            >
              <div class="offcanvas__logo">
                <a href="index">
                  <img src="frontend/img/logo/logo.svg" alt="logo-img" />
                </a>
              </div>
              <div class="offcanvas__close">
                <button>
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <p class="text d-none d-lg-block">
              This involves interactions between a business and its customers.
              It's about meeting customers' needs and resolving their problems.
              Effective customer service is crucial.
            </p>
            <div class="offcanvas-gallery-area d-none d-lg-block">
              <div class="offcanvas-gallery-items">
                <a
                  href="frontend/img/header/01.jpg"
                  class="offcanvas-image img-popup"
                >
                  <img src="frontend/img/header/01.jpg" alt="gallery-img" />
                </a>
                <a
                  href="frontend/img/header/02.jpg"
                  class="offcanvas-image img-popup"
                >
                  <img src="frontend/img/header/02.jpg" alt="gallery-img" />
                </a>
                <a
                  href="frontend/img/header/03.jpg"
                  class="offcanvas-image img-popup"
                >
                  <img src="frontend/img/header/03.jpg" alt="gallery-img" />
                </a>
              </div>
              <div class="offcanvas-gallery-items">
                <a
                  href="frontend/img/header/04.jpg"
                  class="offcanvas-image img-popup"
                >
                  <img src="frontend/img/header/04.jpg" alt="gallery-img" />
                </a>
                <a
                  href="frontend/img/header/05.jpg"
                  class="offcanvas-image img-popup"
                >
                  <img src="frontend/img/header/05.jpg" alt="gallery-img" />
                </a>
                <a
                  href="frontend/img/header/06.jpg"
                  class="offcanvas-image img-popup"
                >
                  <img src="frontend/img/header/06.jpg" alt="gallery-img" />
                </a>
              </div>
            </div>
            <div class="mobile-menu fix mb-3"></div>
            <div class="offcanvas__contact">
              <h4>Contact Info</h4>
              <ul>
                <li class="d-flex align-items-center">
                  <div class="offcanvas__contact-icon">
                    <i class="fal fa-map-marker-alt"></i>
                  </div>
                  <div class="offcanvas__contact-text">
                    <a target="_blank" href="#"
                      >Main Street, Farid Town, Sahiwal</a
                    >
                  </div>
                </li>
                <li class="d-flex align-items-center">
                  <div class="offcanvas__contact-icon mr-15">
                    <i class="fal fa-envelope"></i>
                  </div>
                  <div class="offcanvas__contact-text">
                    <a href="tel:+013-003-003-9993"
                      ><span class="mailto:info@enofik.com"
                        >info@teaoclock.com</span
                      ></a
                    >
                  </div>
                </li>
                <li class="d-flex align-items-center">
                  <div class="offcanvas__contact-icon mr-15">
                    <i class="fal fa-clock"></i>
                  </div>
                  <div class="offcanvas__contact-text">
                    <a target="_blank" href="#">Mod-friday, 09am -05pm</a>
                  </div>
                </li>
                <li class="d-flex align-items-center">
                  <div class="offcanvas__contact-icon mr-15">
                    <i class="far fa-phone"></i>
                  </div>
                  <div class="offcanvas__contact-text">
                    <a href="tel:+11002345909">03002345909</a>
                  </div>
                </li>
              </ul>
              <div class="header-button mt-4">
                <a href="shop" class="theme-btn">
                  <span
                    class="button-content-wrapper d-flex align-items-center justify-content-center"
                  >
                    <span class="button-icon"
                      ><i class="flaticon-delivery"></i
                    ></span>
                    <span class="button-text">order now</span>
                  </span>
                </a>
              </div>
              <div class="social-icon d-flex align-items-center">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="offcanvas__overlay"></div>

    <!-- Header Area Start -->
    <header class="section-bg">
      <div class="header-top">
        <div class="container">
          <div class="header-top-wrapper">
            <ul>
              <li>
                <span>100%</span> Secure delivery without contacting the courier
              </li>
              <li><i class="fas fa-truck"></i>Track Your Order</li>
            </ul>
            <div class="top-right">
              <div class="search-wrp">
                <button><i class="far fa-search"></i></button>
                <input placeholder="Search" aria-label="Search" />
              </div>
              <div class="social-icon d-flex align-items-center">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-vimeo-v"></i></a>
                <a href="#"><i class="fab fa-pinterest-p"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="header-sticky" class="header-1">
        <div class="container">
          <div class="mega-menu-wrapper">
            <div class="header-main">
              <div class="logo">
                <a href="index" class="header-logo">
                  <img src="frontend/img/logo/logo.svg" alt="logo-img" />
                </a>
              </div>
    
              <div class="header-left">
                <div class="mean__menu-wrapper d-none d-lg-block">
                  <div class="main-menu">
                    <nav id="mobile-menu">
                      <ul>
                        <li>
                          <a href="/">Home</a>
                        </li>
                        <li>
                          <a href="about">About Us</a>
                        </li>
                        <li>
                          <a href="food-menu">Menu</a>
                        </li>
                        <li>
                          <a href="news">Blog</a>
                        </li>
                        <li>
                          <a href="shop">Shop</a>
                        </li>
                        <li>
                          <a href="contact">Contact</a>
                        </li>
                        <li>
                          <a href="faq">Faq's</a>
                        </li>
                      </ul>
                    </nav>
                    <!-- for wp -->
                  </div>
                </div>
              </div>
              <div
                class="header-right d-flex justify-content-end align-items-center"
              >
                <div class="menu-cart">
                  <div class="cart-box">
                    <ul>
                      <li>
                        <img src="frontend/img/shop-food/s2.png" alt="image" />
                        <div class="cart-product">
                          <a href="#0">grilled chiken</a>
                          <span>168$</span>
                        </div>
                      </li>
                    </ul>
                    <ul>
                      <li class="border-none">
                        <img src="frontend/img/shop-food/s3.png" alt="image" />
                        <div class="cart-product">
                          <a href="#0">grilled chiken</a>
                          <span>168$</span>
                        </div>
                      </li>
                    </ul>
                    <div
                      class="shopping-items d-flex align-items-center justify-content-between"
                    >
                      <span>Shopping : $20.00</span>
                      <span>Total : $168.00</span>
                    </div>
                    <div class="cart-button d-flex justify-content-between mb-4">
                      <a href="cart" class="theme-btn"> View Cart </a>
                      <a href="checkout" class="theme-btn bg-red-2">
                        Checkout
                      </a>
                    </div>
                  </div>
                  <a href="cart" class="cart-icon">
                    <i class="far fa-shopping-basket"></i>
                  </a>
                </div>
                <div class="header-button">
                  <a href="testimonial" class="theme-btn bg-red-2">Testimonial</a>
                </div>
                <div class="header__hamburger d-xl-block my-auto">
                  <div class="sidebar__toggle">
                    <div class="header-bar">
                      <span></span>
                      <span></span>
                      <span></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- Header Area End -->