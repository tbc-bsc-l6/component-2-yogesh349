@extends('layout.layout')
@section('title','Books')

@section('show-submit_form_message')
@if (session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{Auth::user()->name}}!</strong> {{session()->get('success')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if (session()->has('delete_success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{Auth::user()->name}}!</strong> {{session()->get('delete_success')}}
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
            @can('isBookAdmin')
            <div class="col-sm-1"><h3>Action</h3></div>
            @endcan
        </div>



        @foreach ($books as $book)

        <div class="row game-row">
            <div class="col-sm-4"><img src="storage/gfile/{{$book->images}}" width="55%" alt=""></div>
            <div class="col-sm-5"><h5>{{$book->name}}</h5>{{$book->desc}}</div>
            <div class="col-sm-2"> <span>{{$book->price}}</span><button type="button" class="btn btn-primary mx-2">Buy</button></div>
            @can('isBookAdmin')
            <div class="col-sm-1"> <a href="{{url('book/edit-book-form',$book->id)}}"  class="btn btn-warning"><i class=" fa far fa-edit"></i></a>
                <a href="{{url('book/delete',$book->id)}}" style="font-size: 18px"  class="btn btn-danger mt-3"><i class="fa fad fa-trash"></i></a></div>
            @endcan
            
        </div>    
        @endforeach
        {{$books->links()}}        
    </div>

    <div class="container">
        @can('isBookAdmin')
        <a href="{{url('book/book-form')}}" class="btn btn-primary text-center"> Add Book Product</a>
        @endcan
       </div>

@endsection