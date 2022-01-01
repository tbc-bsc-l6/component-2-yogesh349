@extends('layout.layout')
@section('title','CD')


@section('game-collection')

    <div class="container-fluid game-cont">
        <div class="row game-head-row">
            <div class="col-sm-4"><h3>Images</h3></div>
            <div class="col-sm-5"><h3>Descripion</h3></div>
            <div class="col-sm-2"><h3>Price</h3></div>
            <div class="col-sm-1"><h3>Action</h3></div>
        </div>
        @foreach ($cds as $cd)
        <div class="row game-row">
            <div class="col-sm-4"><img src="storage/gfile//{{$cd->images}}" width="55%" alt=""></div>
            <div class="col-sm-5"><h5>{{$cd->name}}</h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati dicta ea error voluptate, quidem harum vero laborum dolore eius, voluptatum excepturi saepe magni repellendus voluptatibus enim veniam dolor. Maiores, inventore.</div>
            <div class="col-sm-2"> <span>$30.8</span><button type="button" class="btn btn-primary mx-2">Buy</button></div>
            <div class="col-sm-1"> <a href="{{url('cd/edit-cd-form',$cd->id)}}"  class="btn btn-warning">Edit</a>
                <a href="{{url('cd/delete',$cd->id)}}"  class="btn btn-danger mt-3">Delete</a></div>
        </div>
            
        @endforeach
    </div>

    <div class="container">
        <a href="{{url('cd/cd-form')}}" class="btn btn-primary text-center"> Add CD Product</a>
       </div>


@endsection
    
