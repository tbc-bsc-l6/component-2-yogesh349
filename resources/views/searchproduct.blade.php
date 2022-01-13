@extends('layout.layout')
@section('title','Search Product')

@section('game-collection')


  
  <div class="container home_collec">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mt-5">
     @foreach ($concatenateAll as $col)
      <div class="col">
        <div class="card shadow-sm">
          <img src="storage/gfile/{{$col->images}}" class="bd-placeholder-img card-img-top" width="100%" height="225"  role="img"img>
          <p class="text-center"><strong>{{$col->name}}</strong></p>
  
          <div class="card-body">
            <p class="card-text">{{$col->desc}}</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a href="" class="btn btn-sm btn-outline-secondary">View</a>
              </div>
              <small class="text-muted">9 mins</small>
            </div>
          </div>
        </div>
      </div>    
      @endforeach
    </div>
  </div>

  {{$concatenateAll->links()}}
  

@endsection