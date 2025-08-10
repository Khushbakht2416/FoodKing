@extends('backend.layouts.main1')
@section('title','Add menu')
@section('main-container')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>menu Page</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
        <li class="breadcrumb-item">Pages</li>
        <li class="breadcrumb-item active">menu</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Add menu</h5>
            <p>This is an examle page with no contrnt. You can use it as a starter for your custom pages.</p>
            <h5 class="card-title">Details of the New menu</h5>
            <form method="POST" action="{{ url('/admin/add-menu') }}" enctype="multipart/form-data">
              @csrf

              <div class="form-floating mb-3">
                <input type="text" class="form-control" name="foodname" value="{{ old('foodname') }}" placeholder="">
                @if($errors->has('foodname'))
                    <span class="text-danger">
                        {{$errors->first('foodname')}}
                    </span>
                @endif
                <label for="foodname">FoodName</label>
              </div>

              <div class="form-floating mb-3">
                <input type="text" class="form-control" name="description" value="{{ old('description') }}" placeholder="">
                @if($errors->has('description'))
                    <span class="text-danger">
                        {{$errors->first('description')}}
                    </span>
                @endif
                <label for="description">Description</label>
              </div>

              <div class="form-floating mb-3">
                <input type="text" class="form-control" name="price" value="{{ old('price') }}" placeholder="">
                @if($errors->has('price'))
                    <span class="text-danger">
                        {{ $errors->first('price') }}
                    </span>
                @endif
                <label for="price">Price</label>
              </div>

              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>
@endsection
