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



    <div class="container-fluid game-cont">
      <div class="row">
        <div class="col-sm-12">
          <form action="{{URL::current()}}" method="get">
            <select name="sort">
                <option value="" disabled selected>Sort By</option>
                <option value="price_asc">Price - Low To High</option>
                <option value="price_desc">Price - High To Low</option>
                <option value="newest">Newest</option>
            </select>
        
            <input type="submit" name="submit" class="btn btn-success">
        </form>
        </div>
       </div>
        <div class="row game-head-row">
            <div class="col-sm-4"><h3>Images</h3></div>
            <div class="col-sm-5"><h3>Descripion</h3></div>
            <div class="col-sm-2"><h3>Price</h3></div>
            @can('isCDAdmin')
            <div class="col-sm-1"><h3>Action</h3></div>
            @endcan
        </div>
        @foreach ($cds as $cd)
        <div class="row game-row">
            <div class="col-sm-4"><img src="storage/gfile//{{$cd->images}}" width="55%" alt=""></div>
            <div class="col-sm-5"><h5>{{$cd->name}}</h5>{{$cd->desc}}</div>
            <div class="col-sm-2"> <span>{{$cd->price}}</span><button type="button" class="btn btn-primary mx-2">Buy</button></div>
            @can('isCDAdmin')
            <div class="col-sm-1"> <a href="{{url('cd/edit-cd-form',$cd->id)}}"  class="btn btn-warning"><i class=" fa far fa-edit"></i></a>
                <a href="{{url('cd/delete',$cd->id)}}" style="font-size: 18px"   class="btn btn-danger mt-3"><i class="fa fad fa-trash"></i></a></div>
              @endcan
        </div>  
        @endforeach
        {{$cds->links()}}
    </div>

    <div class="container">
      @can('isCDAdmin')
        <a href="{{url('cd/cd-form')}}" class="btn btn-primary text-center"> Add CD Product</a>
      @endcan
       </div>


@endsection
    
