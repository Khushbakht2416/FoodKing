@extends('backend.layouts.main2')
@section('title','Edit Menu')
@section('main-container')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Edit menu Page</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                <li class="breadcrumb-item">Pages</li>
                <li class="breadcrumb-item active">Edit menu</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit menu</h5>
                        <p>This is an examle page with no contrnt. You can use it as a starter for your custom pages.</p>
                        <h5 class="card-title">Details of the menu</h5>
                        <form method="POST" action="{{ url('/admin/edit-menu/'. $menu->id) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="foodname" value="{{ $menu->foodname }}" placeholder="">
                                <label for="title">FoodName</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="description" value="{{ $menu->description }}" placeholder="">
                                <label for="title">Description</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" name="price" value="{{ $menu->price}}" placeholder="">
                                <label for="uploadedby">Price</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
@endsection
