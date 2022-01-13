@extends('layout.layout')


@section('game-collection')
<div class="container f-flex home_collec">
    <div class="image-con">
        <img src="/storage/gfile/{{$cd->images}}" style="border-radius: 20px" alt="" width="400" height="450">
    </div>
    <div class="des-con">
        <div class="p_name"><strong>{{$cd->name}}</strong></div>
        <div class="mt-4"><strong>{{$cd->price}}</strong></div>
        <div class="dsc-p mt-4">
            {{$cd->desc}}
        </div>
        <div class="p_btn">
            <a href="{{route('home')}}" style="float: right" class="btn btn-primary mt-4">Back</a>
        </div>


    </div>
</div>
    
@endsection