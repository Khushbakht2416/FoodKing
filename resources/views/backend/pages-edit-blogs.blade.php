@extends('backend.layouts.main2')
@section('title','Edit Blog')
@section('main-container')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Edit Blog Page</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                <li class="breadcrumb-item">Pages</li>
                <li class="breadcrumb-item active">Edit Blog</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Blog</h5>
                        <p>This is an examle page with no contrnt. You can use it as a starter for your custom pages.</p>
                        <h5 class="card-title">Details of the Blog</h5>
                        <form method="POST" action="{{ url('/admin/edit-blogs/'. $blogs->id) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="author" value="{{ $blogs->author }}" placeholder="">
                                <label for="title">Author</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" name="comments_count" value="{{ $blogs->comments_count }}" placeholder="">
                                <label for="uploadedby">Comments</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" name="publish_date" value="{{ $blogs->publish_date}}" placeholder="">
                                <label for="totalcomment">Date</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="title" value="{{ $blogs->title}}" placeholder="">
                                <label for="totalcomment">Title</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="description" value="{{ $blogs->description}}" placeholder="">
                                <label for="totalcomment">Description</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="details_url" value="{{ $blogs->details_url}}" placeholder="">
                                <label for="totalcomment">URL</label>
                            </div>
                            <div class="form-group mb-3">
                                <input type="hidden" name="image_old" value="{{ $blogs->imgurl }}">
                                @if($blogs->imgurl)
                                    <div class="m-5">
                                        <img src="{{ asset($blogs->imgurl) }}" style="width: 150px; height: 120px" alt="Current Image">
                                    </div>
                                @endif
                                <input type="file" class="form-control" name="imgurl" accept=".png, .jpg, .jpeg">
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
