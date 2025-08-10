@extends('backend.layouts.main1')
@section('title', 'Menu')
@section('main-container')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Blank Page</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">Menu</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Menu</h5>
              <p>This is an examle page with no contrnt. You can use it as a starter for your custom pages.</p>
              <div class="text-right mb-3">
                <a href="{{ url('/admin/add-menu') }}" class="btn btn-primary" style="color: white;">Add New menu</a>
              </div>
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Foodname</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($menu as $row)
                    <tr>
                      <td>{{$row->id}}</td>
                      <td>{{$row->foodname}}</td>
                      <td>{{$row->description}}</td>
                      <td>{{$row->price}}</td>
                      <td>
                        @if($row->status == 0)
                          <a  href="{{ url('/admin/enable-menu/' . $row->id) }}" class="btn btn-warning"> Disable </a>
                        
                        @else
                          <a  href="{{ url('/admin/disable-menu/' . $row->id) }}" class="btn btn-success"> Enable </a>
                        @endif
                      </td>
                      <td> 
                      <a  href="{{ url('/admin/edit-menu/' . $row->id) }}" class="btn btn-primary"> Edit</a>
                        <a  href="{{ url('/admin/delete-menu/' . $row->id) }}" class="btn btn-danger"> Delete </a>
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