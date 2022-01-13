@extends('layout.layout')

@section('title','Game')

@section('show-submit_form_message')
@if (session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{Auth::user()->name}}</strong> Your Product has been added
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if (session()->has('success-updated'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{Auth::user()->name}}</strong>{{session()->get('success-updated')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>  
@endif

@if (session()->has('delete_success'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>{{Auth::user()->name}}! </strong> {{session()->get('delete_success')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>  
@endif
@endsection


@section('game-collection')

<div class="sort">
  <div class="row">
    <div class="col-sm-12">
      <form action="{{URL::current()}}" method="get">
        <select name="sort">
            <option value="" disabled selected>Sort By</option>
            <option value="price_asc">Price - Low To High</option>
            <option value="price_desc">Price - High To Low</option>
            <option value="newest">Newest</option>
        </select>
    
        <input type="submit" value="Sort" name="submit" class="btn btn-primary">
    </form>
    </div>
   </div>
</div>


{{-- <div class="container home_collec"> 
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mt-5">
   @foreach ($games as $game)
    <div class="col">
      <div class="card shadow-sm">
        <img src="storage/gfile/{{$game->images}}" class="bd-placeholder-img card-img-top" width="100%" height="225"  role="img"img>
        <p class="text-center"><strong>{{$game->name}}</strong></p>

        <div class="card-body">
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, esse accusamus, illum blanditiis veniam reprehenderit temporibus non.</p>
          <p class="text-center"><strong>${{$game->price}}</strong></p>
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
              <a href="" class="btn btn-sm btn-outline-primary">View</a>
              @can('isGameAdmin')
              <a href="{{url('game/edit-game-form',$game->id)}}" class="btn btn-sm btn-outline-warning">Edit</a>
              @endcan
              @can('isGameAdmin')
              <a href="{{url('game/delete',$game->id)}}" class="btn btn-sm btn-outline-danger">Delete</a>
              @endcan
            </div>
            <small class="text-muted">9 mins</small>
          </div>
        </div>
      </div>
    </div>
        
    @endforeach

  
  </div>
</div>
{{$games->links()}}
    <div class="container">
      @can('isGameAdmin')
        <a href="{{url('game/game-form')}}" class="btn btn-primary text-center"> Add Game Product</a>
       </div>
       @endcan
--}}

<div class="container home_collec">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mt-5">
   @foreach ($games as $game)
    <div class="col">
      <div class="card shadow-sm">
        <img src="storage/gfile/{{$game->images}}" class="bd-placeholder-img card-img-top" width="100%" height="225"  role="img"img>
        <p class="text-center"><strong>{{$game->name}}</strong></p>

        <div class="card-body">
          <p class="card-text">{{$game->desc}}</p>
          <p class="text-center"><strong>${{$game->price}}</strong></p>
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
              <a href="{{route('show_pg',$game->id)}}" class="btn btn-sm btn-outline-primary">View</a>
              @can('isGameAdmin')
              <a href="{{url('game/edit-game-form',$game->id)}}" class="btn btn-sm btn-outline-warning">Edit</a>
              @endcan
              @can('isGameAdmin')
              <a href="{{url('game/delete',$game->id)}}" class="btn btn-sm btn-outline-danger">Delete</a>
              @endcan
            </div>
            <small class="text-muted">9 mins</small>
          </div>
        </div>
      </div>
    </div>    
    @endforeach
  </div>
</div>
{{$games->links()}}

<div class="container">
  @can('isGameAdmin')
      <a href="{{url('game/game-form')}}" class="btn btn-primary text-center"> Add Game Product</a>
  @endcan
   </div>

 

@endsection

