@extends('layout.layout')
@section('title','Edit Form')
@section('edit-game-form')
<div class="game-outer">
    <h2 class="text-center" style="margin: 45px;">Edit Game Products</h2>
    <div class="game-container-form">
        <form action="{{url('book/book-form')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="bname">Name</label>
                <input type="text" class="form-control custom-form" id="bname"  placeholder="Enter Game Name" name="gname" value="{{$book->name}}">
              </div>
              <div class="form-group  mt-4">
                <label for="bprice">Price</label>
                <input type="text" class="form-control custom-form" id="bprice" placeholder="Enter Price" name="gprice" value="{{$book->price}}" >
              </div>
              <div class="form-group">
                <label for="gfile">Please Choose File</label>
                <input type="file" class="form-control-file" id="gfile" name="gfile" 
                value="{{$book->images}}"  value="{{$book->images}}">
              </div>
              <div class="form-group">
                <label for="desc">Description</label>
                <textarea class="form-control custom-form" id="desc" rows="3" value="" name="gtextarea">{{$book->desc}}</textarea>
              </div>
              <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    
    </div>

</div>
@endsection
