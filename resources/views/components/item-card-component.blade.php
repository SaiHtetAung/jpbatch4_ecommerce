{{-- <div>
    Smile, breathe, and go slowly. - Thich Nhat Hanh
</div> --}}
<div class="card">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$item->name}}</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <p class="{{ Request::is('/') ? 'd-none' : '' }}">{{number_format($item->price)}} Ks</p>
    <a href="{{route('postpage',$item->id)}}" class="btn btn-primary">Go somewhere</a>
  </div>
</div>