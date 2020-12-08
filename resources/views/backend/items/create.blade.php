@extends('backend_master')
@section('content')
  <main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-dashboard"></i> Categories</h1>
        <p>A free and open source Bootstrap 4 admin template</p>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Categories</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <div class="tile-body">
            <h2>Item Create Form</h2>
            <form method="post" action="{{route('items.store')}}" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="exampleInputName">Name:</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="exampleInputName" placeholder="Eg: Electronic, Fashion, ...">
                @error('name')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group">
                <label for="exampleInputPhoto">Photo:</label>
                <input type="file" class="form-control-file @error('photo') is-invalid @enderror" name="photo" id="exampleInputPhoto">
                @error('photo')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>

              <div class="form-group">
                <label for="InputDesc">Description:</label>
                <textarea class="form-control summernote @error('description') is-invalid @enderror" id="InputDesc" name="description"></textarea>
                @error('description')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
              
              <button type="submit" class="btn btn-primary">Save</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection