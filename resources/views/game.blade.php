@extends('layout.layout')

@section('title','Game')

@section('delete-submit_form_message')
@if (session()->has('delete_success'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Holy guacamole!</strong> {{session()->get('delete_success')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>  
@endif
@endsection
@section('game-collection')

    <div class="container-fluid game-cont">

        <div class="row game-head-row">
            <div class="col-sm-4"><h3>Images</h3></div>
            <div class="col-sm-5"><h3>Descripion</h3></div>
            <div class="col-sm-2"><h3>Price</h3></div>
            <div class="col-sm-1"><h3>Action</h3></div>
        </div>

        @foreach ($games as $game)

        <div class="row game-row">
            <div class="col-sm-4"><img src="storage/gfile/{{$game->images}}" width="55%" alt=""></div>
            <div class="col-sm-5"><h5>{{$game->name}}</h5>{{$game->desc}}</div>
            <div class="col-sm-2"> <span>{{$game->price}}</span><button type="button" class="btn btn-primary mx-2">Buy</button></div>
            <div class="col-sm-1"> <a href="{{url('game/edit-game-form',$game->id)}}"  class="btn btn-warning">Edit</a>
                <a href="{{url('game/delete',$game->id)}}"  class="btn btn-danger mt-3">Delete</a></div> 
           
        </div>
        @endforeach
        
    </div>

    <div class="container">
        <a href="{{url('game/game-form')}}" class="btn btn-primary text-center"> Add Game Product</a>
       </div>

@endsection

