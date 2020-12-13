@extends('master')

@section('title','Contact Page')

@section('content')
  <!-- Page Header -->
  <header class="masthead" style="background-image: url({{asset('frontend_assets/img/cart.jpg')}})">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1>My Shopping Cart</h1>
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
              <th scope="col">Name</th>
              <th scope="col">Price</th>
              <th scope="col">Qty</th>
              <th scope="col">Subtotal</th>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
        <a href="#" class="btn btn-info">Continue Shopping</a>
        <a href="#" class="btn btn-primary">Checkout</a>
      </div>
    </div>
  </div>
@endsection
@section('script')
  <script type="text/javascript" src="{{asset('frontend_assets/js/custom.js')}}"></script>
@endsection