@extends('master')

@section('title','Home Page')

@section('content')
  <!-- Page Header -->
  <header class="masthead" style="background-image: url({{asset('frontend_assets/img/home-bg.jpg')}})">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Eger Loading Testing</h1>
            <span class="subheading">A Blog Theme by Start Bootstrap</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">

      <table class="table">
        <thead>
          <tr>
            <th>No</th>
            <th>Codeno</th>
            <th>Name</th>
            <th>Price</th>
            <th>Brand</th>
            <th>Subcategory</th>
          </tr>
        </thead>
        <tbody>
          
        </tbody>
      </table>
      {{-- @foreach($items as $item)
      <div class="col-md-3">
        <x-item-card-component :item="$item"></x-item-card-component>
      </div>
      @endforeach --}}

      {{-- <div class="col-lg-8 col-md-10 mx-auto">
        <div class="post-preview">
          <a href="post.html">
            <h2 class="post-title">
              Man must explore, and this is exploration at its greatest
            </h2>
            <h3 class="post-subtitle">
              Problems look mighty small from 150 miles up
            </h3>
          </a>
          <p class="post-meta">Posted by
            <a href="#">Start Bootstrap</a>
            on September 24, 2019</p>
        </div>
        <hr>
        <!-- Pager -->
        <div class="clearfix">
          <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
        </div>
      </div> --}}
    </div>
  </div>
@endsection

@section('script')
  <script type="text/javascript">
    $(document).ready(function () {
      // $.ajaxSetup({
      //   headers: {
      //       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      //   }
      // });

      let html="";
      $.get("{{route('getItems')}}",function (response) {
        console.log(response)
        for(row of response){
          html +=`<tr><td>1</td>
                  <td>${row.codeno}</td>
                  <td>${row.name}</td>
                  <td>${row.price}</td>
                  <td>${row.brand.name}</td>
                  <td>${row.subcategory.name}</td></tr>`;
        }
        $('tbody').html(html)
      })
    })
  </script>
@endsection