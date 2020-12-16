{{-- <div>
    Simplicity is the essence of happiness. - Cedric Bledsoe
</div> --}}

@foreach($categories as $category)
  <a href="{{route('bycategory',$category->id)}}" class="dropdown-item">{{$category->name}}</a>
@endforeach