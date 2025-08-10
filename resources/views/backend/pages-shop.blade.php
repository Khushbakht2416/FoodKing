@extends('backend.layouts.main1')
@section('title', 'Shop')
@section('main-container')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Blank Page</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/admin')}}">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">Shop</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Shop</h5>
              <p>Crispy, every bite taste, 30 minutes fast delivery challenge.</p>
              <div class="text-right mb-3">
                <a href="{{ url('/admin/add-shop') }}" class="btn btn-primary" style="color: white;">Add New shop</a>
              </div>
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Foodname</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($shop as $row)
                    <tr>
                      <td>{{$row->id}}</td>
                      <td>{{$row->foodname}}</td>
                      <td>{{$row->orgprice}}</td>
                      <td>
                        <img src="../{{$row->imgurl}}" alt="Image not found" style="width: 60px; height:38px"> 
                      </td>
                      <td>
                        @if($row->status == 0)
                          <a  href="{{ url('/admin/enable-shop/' . $row->id) }}" class="btn btn-warning"> Disable </a>
                        
                        @else
                          <a  href="{{ url('/admin/disable-shop/' . $row->id) }}" class="btn btn-success"> Enable </a>
                        @endif
                      </td>
                      <td> 
                      <a  href="{{ url('/admin/edit-shop/' . $row->id) }}" class="btn btn-primary"> Edit</a>
                        <a  href="{{ url('/admin/delete-shop/' . $row->id) }}" class="btn btn-danger"> Delete </a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->
@endsection