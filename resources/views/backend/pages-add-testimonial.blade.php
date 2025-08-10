@extends('backend.layouts.main1')
@section('title','Add testimonial')
@section('main-container')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>testimonial Page</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
        <li class="breadcrumb-item">Pages</li>
        <li class="breadcrumb-item active">testimonial</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Add testimonial</h5>
            <p>This is an examle page with no contrnt. You can use it as a starter for your custom pages.</p>
            <h5 class="card-title">Details of the New testimonial</h5>
            <form method="POST" action="{{ url('/admin/add-testimonial') }}" enctype="multipart/form-data">
              @csrf

              <div class="form-floating mb-3">
                <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="">
                @if($errors->has('name'))
                    <span class="text-danger">
                        {{$errors->first('name')}}
                    </span>
                @endif
                <label for="name">Name</label>
              </div>

              <div class="form-floating mb-3">
                <input type="text" class="form-control" name="review" value="{{ old('review') }}" placeholder="">
                @if($errors->has('review'))
                    <span class="text-danger">
                        {{$errors->first('review')}}
                    </span>
                @endif
                <label for="review">Review</label>
              </div>

              <div class="form-floating mb-3">
                <input type="text" class="form-control" name="designation" value="{{ old('designation') }}" placeholder="">
                @if($errors->has('designation'))
                    <span class="text-danger">
                        {{ $errors->first('designation') }}
                    </span>
                @endif
                <label for="designation">Designation</label>
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
