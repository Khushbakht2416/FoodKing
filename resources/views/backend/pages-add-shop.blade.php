@extends('backend.layouts.main1')
@section('title','Add shop')
@section('main-container')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>shop Page</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
        <li class="breadcrumb-item">Pages</li>
        <li class="breadcrumb-item active">shop</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Add shop</h5>
            <p>This is an examle page with no contrnt. You can use it as a starter for your custom pages.</p>
            <h5 class="card-title">Details of the New shop</h5>
            <form method="POST" action="{{ url('/admin/add-shop') }}" enctype="multipart/form-data">
              @csrf

              <div class="form-floating mb-3">
                <input type="text" class="form-control" name="foodname" value="{{ old('foodname') }}" placeholder="">
                @if($errors->has('foodname'))
                    <span class="text-danger">
                        {{$errors->first('foodname')}}
                    </span>
                @endif
                <label for="foodname">Foodname</label>
              </div>

              <div class="form-floating mb-3">
                <input type="number" class="form-control" name="orgprice" value="{{ old('orgprice') }}" placeholder="">
                @if($errors->has('orgprice'))
                    <span class="text-danger">
                        {{ $errors->first('orgprice') }}
                    </span>
                @endif
                <label for="orgprice">Price</label>
              </div>

              <div class="form-group mb-3">
                <div class="input-group">
                  <input type="file" class="form-control" name="imgurl" value="{{ old('imgurl') }}" accept=".png, .jpg, .jpeg">
                  @if($errors->has('imgurl'))
                    <span>
                        {{ $errors->first('imgurl') }}
                    </span>
                  @endif
                </div>
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
