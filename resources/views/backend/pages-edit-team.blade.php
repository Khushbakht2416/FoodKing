@extends('backend.layouts.main2')
@section('title','Edit Team')
@section('main-container')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Edit team Page</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                <li class="breadcrumb-item">Pages</li>
                <li class="breadcrumb-item active">Edit Team</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Team</h5>
                        <p>This is an examle page with no contrnt. You can use it as a starter for your custom pages.</p>
                        <h5 class="card-title">Details of the Team</h5>
                        <form method="POST" action="{{ url('/admin/edit-team/'. $team->id) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="name" value="{{ $team->name }}" placeholder="">
                                <label for="title">Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="designation" value="{{ $team->designation}}" placeholder="">
                                <label for="uploadedby">Designation</label>
                            </div>
                            <div class="form-group mb-3">
                                <input type="hidden" name="imgurlprevious" value="{{ $team->imgurl }}">
                                @if($team->imgurl)
                                    <div class="m-5">
                                        <img src="{{ asset($team->imgurl) }}" style="width: 150px; height: 120px" alt="Current Image">
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
