@extends('layout.layout')
@section('title','Books')


@section('game-collection')

    <div class="container-fluid game-cont">
        <div class="row game-head-row">
            <div class="col-sm-4"><h3>Images</h3></div>
            <div class="col-sm-5"><h3>Descripion</h3></div>
            <div class="col-sm-2"><h3>Price</h3></div>
            <div class="col-sm-1"><h3>Action</h3></div>
        </div>



        @foreach ($books as $book)

        <div class="row game-row">
            <div class="col-sm-4"><img src="storage/gfile/{{$books->bfile}}" width="55%" alt=""></div>
            <div class="col-sm-5"><h5>{{$book->name}}</h5>{{$book->desc}}</div>
            <div class="col-sm-2"> <span>{{$book->price}}</span><button type="button" class="btn btn-primary mx-2">Buy</button></div>
            <div class="col-sm-1"> <a href="{{url('book/edit-book-form',$book->id)}}"  class="btn btn-warning">Edit</a>
                <a href="{{url('book/delete',$book->id)}}"  class="btn btn-danger mt-3">Delete</a></div>
        </div>
        
            
        @endforeach
        

        

        
        
    </div>

    <div class="container">
        <a href="{{url('book/book-form')}}" class="btn btn-primary text-center"> Add Book Product</a>
       </div>

@endsection