@extends('backend.layouts.main1')
@section('title','Add blogs')
@section('main-container')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Blog Page</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
        <li class="breadcrumb-item">Pages</li>
        <li class="breadcrumb-item active">blogs</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Add blogs</h5>
            <p>This is an examle page with no contrnt. You can use it as a starter for your custom pages.</p>
            <h5 class="card-title">Details of the New Blog</h5>
            <form method="POST" action="{{ url('/admin/add-blogs') }}" enctype="multipart/form-data">
              @csrf

              <div class="form-floating mb-3">
                <input type="text" class="form-control" name="author" value="{{ old('author') }}" placeholder="">
                @if($errors->has('author'))
                    <span class="text-danger">
                        {{$errors->first('author')}}
                    </span>
                @endif
                <label for="author">Author</label>
              </div>

              <div class="form-floating mb-3">
                <input type="number" class="form-control" name="comments_count" value="{{ old('comments_count') }}" placeholder="">
                @if($errors->has('comments_count'))
                    <span class="text-danger">
                        {{ $errors->first('comments_count') }}
                    </span>
                @endif
                <label for="comments_count">Comments</label>
              </div>

              <div class="form-floating mb-3">
                <input type="date" class="form-control" name="publish_date" value="{{ old('publish_date') }}" placeholder="">
                @if($errors->has('publish_date'))
                    <span class="text-danger">
                        {{ $errors->first('publish_date') }}
                    </span>
                @endif
                <label for="publish_date">Date</label>
              </div>

              <div class="form-floating mb-3">
                <input type="text" class="form-control" name="title" value="{{ old('title') }}" placeholder="">
                @if($errors->has('title'))
                    <span class="text-danger">
                        {{ $errors->first('title') }}
                    </span>
                @endif
                <label for="title">Title</label>
              </div>

              <div class="form-floating mb-3">
                <input type="text" class="form-control" name="description" value="{{ old('description') }}" placeholder="">
                @if($errors->has('description'))
                    <span class="text-danger">
                        {{ $errors->first('description') }}
                    </span>
                @endif
                <label for="description">Description</label>
              </div>

              <div class="form-floating mb-3">
                <input type="text" class="form-control" name="details_url" value="{{ old('details_url') }}" placeholder="">
                @if($errors->has('details_url'))
                    <span class="text-danger">
                        {{ $errors->first('details_url') }}
                    </span>
                @endif
                <label for="details_url">URL</label>
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
