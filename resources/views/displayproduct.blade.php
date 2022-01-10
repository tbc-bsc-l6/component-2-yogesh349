@extends('layout.layout')


@section('content')
<div class="container home_collec">
    <div class="f-flex">
        <div class="image_coll">
            <img src="images/game1.jpg" class="display_P_I" class="d-block w-100" alt="Error in showing">
        </div>
        <div class="product_desc">
        <div class="product_v"> <span> <strong>Name  :</strong>  {{$book->name}}</span></div>
        <div class="product_v"> <span> <strong>Price</strong>  : 129999</span></div>
        <div class="product_v"> 
            <span><strong>About this item:</strong></span>
            <div>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos nobis sunt alias iure molestias deserunt perferendis fuga? Non 
                officia molestias obcaecati voluptatum ullam praesentium inventore, eos voluptates, 
            </div>

        </div>
        <div class="btn_p mt-3" >
            <a href="{{route('home')}}" class="btn btn-primary mt-3">Back</a>
        </div>

        
        </div>

    </div>
</div>   
@endsection

