@extends('layout.layout')
@section('title','Books')


@section('game-collection')

    <div class="container-fluid game-cont">
        
        <div class="row game-head-row">
            <div class="col-sm-4"><h3>Images</h3></div>
            <div class="col-sm-5"><h3>Descripion</h3></div>
            <div class="col-sm-2"><h3>Price</h3></div>
            @auth
            <div class="col-sm-1"><h3>Action</h3></div>
            @endauth
        </div>

        <div class="row game-row">
            <div class="col-sm-4"><img src="images/game1.jpg" width="55%" alt=""></div>
            <div class="col-sm-5"><h5>Super Mario</h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati dicta ea error voluptate, quidem harum vero laborum dolore eius, voluptatum excepturi saepe magni repellendus voluptatibus enim veniam dolor. Maiores, inventore.</div>
            <div class="col-sm-2"> <span>$30.8</span><button type="button" class="btn btn-primary mx-2">Buy</button></div>
            @auth
            <div class="col-sm-1"> <button type="button" class="btn btn-warning">Edit</button><button type="button" class="btn btn-danger mt-3">Delete</button></div> 
            @endauth
        </div>

        <div class="row game-row">
            <div class="col-sm-4"><img src="images/mario.jpg" width="55%" alt=""></div>
            <div class="col-sm-5"><h5>Super Mario</h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati dicta ea error voluptate, quidem harum vero laborum dolore eius, voluptatum excepturi saepe magni repellendus voluptatibus enim veniam dolor. Maiores, inventore.</div>
            <div class="col-sm-2"> <span>$30.8</span><button type="button" class="btn btn-primary mx-2">Buy</button></div>
            @auth
            <div class="col-sm-1"> <button type="button" class="btn btn-warning">Edit</button><button type="button" class="btn btn-danger mt-3">Delete</button></div>
            @endauth
        </div>

        <div class="row game-row">
            <div class="col-sm-4"><img src="images/marble.jpg" width="55%" alt=""></div>
            <div class="col-sm-5"><h5>Super Mario</h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati dicta ea error voluptate, quidem harum vero laborum dolore eius, voluptatum excepturi saepe magni repellendus voluptatibus enim veniam dolor. Maiores, inventore.</div>
            <div class="col-sm-2"> <span>$30.8</span><button type="button" class="btn btn-primary mx-2">Buy</button></div>
            @auth
            <div class="col-sm-1"> <button type="button" class="btn btn-warning">Edit</button><button type="button" class="btn btn-danger mt-3">Delete</button></div>  
            @endauth
            
        </div>
        
    </div>

@endsection