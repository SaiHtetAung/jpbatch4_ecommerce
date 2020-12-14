@extends('master')

@section('title','Order History')

@section('content')
  <!-- Page Header -->
  <header class="masthead" style="background-image: url({{asset('frontend_assets/img/cart.jpg')}})">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1>My Order History</h1>
            <span class="subheading">Have questions? I have answers.</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-md-10 mx-auto">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Codeno</th>
              <th scope="col">Order Date</th>
              <th scope="col">Total</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
            @php $i=1; @endphp
            @foreach($orders as $order)
            <tr>
              <td>{{$i++}}</td>
              <td>{{$order->codeno}}</td>
              <td>{{$order->orderdate}}</td>
              <td>{{number_format($order->total)}}</td>
              <td>
                @if($order->status == 0)
                  <a href="#" class="btn btn-info btn-sm">Pending</a>
                @else
                  <a href="#" class="btn btn-success btn-sm">Confirm</a>
                @endif
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
@section('script')
  
@endsection