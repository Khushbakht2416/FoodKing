@extends('backend.layouts.main')
@section('title', 'Home')
@section('main-container')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div>

    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">

                    <div class="col-xxl-4 col-md-6">
                        <a href="{{ url('/admin/blogs') }}" class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">Blogs</h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-journal-text"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $blogs->count() }}</h6>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-xxl-4 col-md-6">
                        <a href="{{ url('/admin/menu') }}" class="card info-card revenue-card">
                            <div class="card-body">
                                <h5 class="card-title">Menus</h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-list"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $menus->count() }}</h6>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-xxl-4 col-md-6">
                        <a href="{{ url('/admin/contact') }}" class="card info-card customers-card">
                            <div class="card-body">
                                <h5 class="card-title">Contact</h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-person-circle"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $contact->count() }}</h6>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-xxl-4 col-md-6">
                        <a href="{{ url('/admin/shop') }}" class="card info-card shop-card">
                            <div class="card-body">
                                <h5 class="card-title">Shops</h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-shop"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $shops->count() }}</h6>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-xxl-4 col-md-6">
                        <a href="{{ url('/admin/team') }}" class="card info-card team-card">
                            <div class="card-body">
                                <h5 class="card-title">Teams</h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $teams->count() }}</h6>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-xxl-4 col-md-6">
                        <a href="{{ url('/admin/testimonial') }}" class="card info-card testimonial-card">
                            <div class="card-body">
                                <h5 class="card-title">Testimonials</h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-chat-dots"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $testimonials->count() }}</h6>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
</main>
@endsection
