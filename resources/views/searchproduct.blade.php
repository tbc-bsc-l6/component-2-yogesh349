@extends('layout.layout')
@section('title','Search Product')

@section('game-collection')

    <div class="container-fluid game-cont">

        <div class=" game-head-row">
            <div class="col-sm-4"><h3>Images</h3></div>
            <div class="col-sm-5"><h3>Descripion</h3></div>
            <div class="col-sm-2"><h3>Price</h3></div>
            @can('isGameAdmin')
            <div class="col-sm-1"><h3>Action</h3></div>
            @endcan
           
        </div>

        @foreach ($concatenateAll as $game)

        <div class="row game-row">
            <div class="col-sm-4"><img src="storage/gfile/{{$game->images}}" width="55%" alt=""></div>
            <div class="col-sm-5"><h5>{{$game->name}}</h5>{{$game->desc}}</div>
            <div class="col-sm-2"> <span>{{$game->price}}</span><button type="button" class="btn btn-primary mx-2">Buy</button></div>
            @can('isGameAdmin')
            <div class="col-sm-1"> <a href="{{url('game/edit-game-form',$game->id)}}"  class="btn btn-warning"><i class=" fa far fa-edit"></i></a>
                <a href="{{url('game/delete',$game->id)}}"  style="font-size: 18px"   class="btn btn-danger"><i class="fa fad fa-trash"></i></a></div> 
            @endcan
            
           
        </div>
        @endforeach
        {{-- {{$game->links()}} --}}
        
    </div>

    <div class="container">
      @can('isGameAdmin')
        <a href="{{url('game/game-form')}}" class="btn btn-primary text-center"> Add Game Product</a>
       </div>
       @endcan


@endsection