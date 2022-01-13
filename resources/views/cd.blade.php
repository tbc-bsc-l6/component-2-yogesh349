@extends('layout.layout')
@section('title','CD')



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
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{Auth::user()->name}}</strong>{{session()->get('delete_success')}}
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
    
        <input type="submit" name="submit" value="Sort" class="btn btn-success">
    </form>
    </div>
   </div>
</div>


<div class="container home_collec">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mt-5">
   @foreach ($cds as $cd)
    <div class="col">
      <div class="card shadow-sm">
        <img src="storage/gfile/{{$cd->images}}" class="bd-placeholder-img card-img-top" width="100%" height="225"  role="img"img>
        <p class="text-center"><strong>{{$cd->name}}</strong></p>

        <div class="card-body">
          <p class="card-text">{{$cd->desc}}</p>
          <p class="text-center"><strong>${{$cd->price}}</strong></p>
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
              <a href="{{route('show_pc',$cd->id)}}" class="btn btn-sm btn-outline-primary">View</a>
              @can('isCDAdmin')
              <a href="{{url('cd/edit-cd-form',$cd->id)}}" class="btn btn-sm btn-outline-warning">Edit</a>
              @endcan
              @can('isCDAdmin')
              <a href="{{url('cd/delete',$cd->id)}}" class="btn btn-sm btn-outline-danger">Delete</a>
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
{{$cds->links()}}

<div class="container">
  @can('isCDAdmin')
    <a href="{{url('cd/cd-form')}}" class="btn btn-primary text-center"> Add CD Product</a>
  @endcan
   </div>
@endsection
    
