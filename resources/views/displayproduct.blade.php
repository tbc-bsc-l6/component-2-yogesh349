@extends('layout.layout')


@section('content')


<div class="row"><div class="col-lg-5 col-md-5 col-sm-6"><div class="white-box text-center"><img src="https://via.placeholder.com/430x600/00CED1/000000" class="img-responsive"></div></div><div class="col-lg-7 col-md-7 col-sm-6"><h4 class="box-title mt-5">Product description</h4><p>Lorem Ipsum available,but the majority have suffered alteration in some form,by injected humour,or randomised words which don't look even slightly believable.but the majority have suffered alteration in some form,by injected humour</p><h2 class="mt-5"> $153<small class="text-success">(36%off)</small></h2> <button class="btn btn-dark btn-rounded mr-1" data-toggle="tooltip" title="" data-original-title="Add to cart"> <i class="fa fa-shopping-cart"></i> </button> <button class="btn btn-primary btn-rounded">Buy Now</button><h3 class="box-title mt-5">Key Highlights</h3><ul class="list-unstyled"><li><i class="fa fa-check text-success"></i>Sturdy structure</li><li><i class="fa fa-check text-success"></i>Designed to foster easy portability</li><li><i class="fa fa-check text-success"></i>Perfect furniture to flaunt your wonderful collectibles</li></ul></div></div>

        <div class="btn_p mt-3" >
            <a href="{{route('home')}}" class="btn btn-primary mt-3">Back</a>
        </div>   
@endsection

