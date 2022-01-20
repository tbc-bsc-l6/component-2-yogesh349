@extends('layout.layout')
@section('title','Display Product')



@section('game-collection')
<div class="container f-flex home_collec">
    <div class="image-con">
        <img src="/storage/gfile/{{$game->images ?? 'cds_1641884761.jpg'}}" style="border-radius: 20px" alt="" width="400" height="450">
    </div>
    <div class="des-con">
        <div class="p_name"><strong>{{$game->name  ?? 'Yogesh'}}</strong></div>
        <div class="mt-4"><strong>{{$game->price ?? 200}}</strong></div>
        <div class="dsc-p mt-4">
            {{$game->desc  ?? 'Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Velit quasi perferendis voluptate esse quia magnam nihil vitae error animi explicabo!'}}
        
        </div>
        <div class="p_btn">
            <a href="{{route('home')}}" style="float: right" class="btn btn-primary mt-4">Back</a>
        </div>


    </div>
</div>
    
@endsection