@extends('backend.layouts.main1')
@section('title', 'Contact')
@section('main-container')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Contact</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">Contact</li>
        </ol>
      </nav>
    </div>
    <center>
        @if ($message = Session::get('success'))
            <div class="alert alert-block p-4 border-left-warning">
                <strong>
                    <h1 style="color:#354cc1">{{ $message }}</h1>
                </strong>
            </div>
        @endif
    </center>
    <section class="section">
        <div class="row">
            @foreach($contacts as $contact)
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $contact->name }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $contact->email }}</h6>
                        <p class="card-text">{{ $contact->message }}</p>
                        <p class="card-text"><small class="text-muted">Received: {{ $contact->created_at->format('M d, Y H:i:s') }}</small></p>
                        <a href="{{ url('/admin/contact/' . $contact->id) }}"
                            class="btn btn-danger btn-sm float-end"><i class="bi bi-trash"></i>Delete</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

  </main>
@endsection
