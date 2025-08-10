@extends('frontend.layouts.main')
@section('title', 'Blogs')
@section('main-container')

        <!--<< Breadcrumb Section Start >>-->
        <div class="breadcrumb-wrapper bg-cover" style="background-image: url('frontend/img/banner/breadcrumb.jpg');">
            <div class="container">
                <div class="page-heading center">
                    <h1>blog page</h1>
                    <ul class="breadcrumb-items">
                        <li>
                            <a href="index">
                            Home Page
                            </a>
                        </li>
                        <li>
                            <i class="far fa-chevron-right"></i>
                        </li>
                        <li>
                            blog page
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!--<< Blog Wrapper Here >>-->
        <section class="blog-wrapper news-wrapper section-padding section-bg">
            <div class="container">
                <div class="news-area">
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <div class="blog-posts">
                                @foreach($result as $row)
                                <div class="single-blog-post">
                                    <div class="post-featured-thumb bg-cover" style="background-image: url('{{ $row->imgurl}}');"></div>
                                    <div class="post-content">
                                        <div class="post-meta">
                                            <span><i class="fal fa-user"></i>{{ $row->author}}</span>
                                            <span><i class="fal fa-comments"></i>{{ $row->comments_count}}comments</span>
                                            <span><i class="fal fa-calendar-alt"></i>{{ $row->publish_date}}</span>
                                        </div>
                                        <h2><a href="news-details ">{{ $row->title}}</a></h2>
                                         <p>{{ $row->description}}</p>
                                        <div class="d-flex justify-content-between align-items-center mt-4">
                                            <div class="post-link">
                                                <a href="news-details "><i class="fas fa-arrow-right"></i>{{ $row->details_url}}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                
                                {{-- <div class="single-blog-post">
                                    <div class="post-featured-thumb bg-cover" style="background-image: url('frontend/img/news/post-2.jpg');"></div>
                                    <div class="post-content">
                                        <div class="post-meta">
                                            <span><i class="fal fa-user"></i>Modina Theme</span>
                                            <span><i class="fal fa-comments"></i>5 Comments</span>
                                            <span><i class="fal fa-calendar-alt"></i>4th February 2024</span>
                                        </div>
                                        <h2><a href="news-details ">QUICK CRAVINGS: UNRAVELING FAST FOOD DELIGHTS</a></h2>
                                        <p>
                                            There are many variations of passages of Lorem Ipsum available, but majority have suffered Lorem haca ullamcorper donec ante habi
                                            believable. If you are going to use a passage of Lorem Ipsum cibo mundi ea duo donec imperdiet eturpis varius per a augue magna hac.
                                            dolor sit amet, teration in some form, by injected humour, or randomised words which don't look ev
                                        </p>
                                        <div class="d-flex justify-content-between align-items-center mt-4">
                                            <div class="post-link">
                                                <a href="news-details "><i class="fas fa-arrow-right"></i> Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-blog-post">
                                    <div class="post-featured-thumb bg-cover" style="background-image: url('frontend/img/news/post-3.jpg');"></div>
                                    <div class="post-content">
                                        <div class="post-meta">
                                            <span><i class="fal fa-user"></i>Shikhon .Ha</span>
                                            <span><i class="fal fa-comments"></i>35 Comments</span>
                                            <span><i class="fal fa-calendar-alt"></i>24th March 2024</span>
                                        </div>
                                        <h2><a href="news-details ">QUICK CRAVINGS: UNRAVELING FAST FOOD DELIGHTS</a></h2>
                                        <p>
                                            There are many variations of passages of Lorem Ipsum available, but majority have suffered Lorem haca ullamcorper donec ante habi
                                            believable. If you are going to use a passage of Lorem Ipsum cibo mundi ea duo donec imperdiet eturpis varius per a augue magna hac.
                                            dolor sit amet, teration in some form, by injected humour, or randomised words which don't look ev
                                        </p>
                                        <div class="d-flex justify-content-between align-items-center mt-4">
                                            <div class="post-link">
                                                <a href="news-details "><i class="fas fa-arrow-right"></i> Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}

                                <div class="single-blog-post quote-post format-quote">
                                    <div class="post-content text-white bg-cover">
                                        <div class="quote-content">
                                            <div class="icon">
                                                <i class="fas fa-quote-left"></i>
                                            </div>
                                            <div class="quote-text">
                                                <h2>Good food is the foundation of genuine happiness. Cooking is love made visible</h2>

                                                <div class="post-meta pt-40 d-inline-block">
                                                    <span><i class="fal fa-comments"></i>35 Comments</span>
                                                    <span><i class="fal fa-calendar-alt"></i>24th March 2024</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="page-nav-wrap mt-5 text-center">
                                <ul>
                                    <li><a class="page-numbers" href="#"><i class="fal fa-long-arrow-left"></i></a></li>
                                    <li><a class="page-numbers" href="#">01</a></li>
                                    <li><a class="page-numbers" href="#">02</a></li>
                                    <li><a class="page-numbers" href="#">..</a></li>
                                    <li><a class="page-numbers" href="#">10</a></li>
                                    <li><a class="page-numbers" href="#">11</a></li>
                                    <li><a class="page-numbers" href="#"><i class="fal fa-long-arrow-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="main-sidebar">
                                <div class="single-sidebar-widget">
                                    <div class="wid-title">
                                        <h4>Search</h4>
                                    </div>
                                    <div class="search_widget">
                                        <form action="#">
                                            <input type="text" placeholder="Search your keyword...">
                                            <button type="submit"><i class="fal fa-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <div class="single-sidebar-widget">
                                    <div class="wid-title">
                                        <h4>Popular Feeds</h4>
                                    </div>
                                    <div class="popular-posts">
                                        <div class="single-post-item">
                                            <div class="thumb bg-cover" style="background-image: url('frontend/img/news/pp1.jpg');"></div>
                                            <div class="post-content">
                                                <h5><a href="news-details ">Budget Issues Force The Our To Become</a></h5>
                                                <div class="post-date">
                                                    <i class="far fa-calendar-alt"></i>24th March 2024
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-post-item">
                                            <div class="thumb bg-cover" style="background-image: url('frontend/img/news/pp2.jpg');"></div>
                                            <div class="post-content">
                                                <h5><a href="news-details ">The Best Products That Shape Fashion</a></h5>
                                                <div class="post-date">
                                                    <i class="far fa-calendar-alt"></i>25th March 2024
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-post-item">
                                            <div class="thumb bg-cover" style="background-image: url('frontend/img/news/pp3.jpg');"></div>
                                            <div class="post-content">
                                                <h5><a href="news-details ">The Best Products That Shape Fashion</a></h5>
                                                <div class="post-date">
                                                    <i class="far fa-calendar-alt"></i>26th March 2024
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-sidebar-widget">
                                    <div class="wid-title">
                                        <h4>Categories</h4>
                                    </div>
                                    <div class="widget_categories">
                                        <ul>
                                            <li><a href="news "><i class="flaticon-burger"></i>burger <span>23</span></a></li>
                                            <li><a href="news "><i class="flaticon-chicken"></i>Fried Chiken <span>24</span></a></li>
                                            <li><a href="news "><i class="flaticon-french-fries"></i>French Fries <span>11</span></a></li>
                                            <li><a href="news "><i class="flaticon-pizza"></i>Hot Pizzas <span>05</span></a></li>
                                            <li><a href="news "><i class="flaticon-sandwich"></i>Sandwich <span>06</span></a></li>
                                            <li><a href="news "><i class="flaticon-bread"></i>Bread <span>10</span></a></li>
                                            <li><a href="news "><i class="flaticon-rice"></i>fried rice <span>13</span></a></li>
                                            <li><a href="news "><i class="flaticon-hotdog"></i>hot dog <span>07</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="single-sidebar-widget">
                                    <div class="wid-title">
                                        <h4>Never Miss News</h4>
                                    </div>
                                    <div class="social-link">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                    </div>
                                </div>
                                <div class="single-sidebar-widget">
                                    <div class="wid-title">
                                        <h4>Popular Tags</h4>
                                    </div>
                                    <div class="tagcloud">
                                        <a href="news ">burger</a>     
                                        <a href="news-details ">hot dog</a>
                                        <a href="news-details ">french fry</a>
                                        <a href="news-details ">chiken</a>
                                        <a href="news-details ">pasta</a>
                                        <a href="news-details ">Sandwich</a>
                                        <a href="news-details ">landing</a>
                                        <a href="news-details ">fast food</a>
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
                        <span class="theme-color-3">crispy, every bite taste</span>
                        <h2 class="text-white">
                            30 minutes fast <br>
                            <span class="theme-color-3">delivery</span> challage
                        </h2>
                    </div>
                    <a href=" cart " class="theme-btn bg-white">
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