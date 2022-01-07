@extends('layout.layout')
@section('title','Edit Form')
@section('edit-game-form')
<div class="f-flex">
   <div class="game-outer">
    <h2 class="text-center" style="margin: 45px;">Edit Book Products</h2>
        <form action="{{route('update_book',$book->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="bname">Name</label>
                <input type="text" class="form-control" id="bname"  placeholder="Enter Game Name" name="book_name" value="{{$book->name}}">
            @error('book_name')
                <span style="color: red">{{$message}}</span>
            @enderror
              </div>
              <div class="form-group  mt-4">
                <label for="bprice">Price</label>
                <input type="text" class="form-control" id="bprice" placeholder="Enter Price" name="book_price" value="{{$book->price}}" >
                @error('book_price')
                <span style="color: red">{{$message}}</span>
            @enderror
              </div>
              <div class="form-group my-3">
                <label for="bfile">Please Choose File</label>
                <input type="file" class="form-control-file" id="bfile" name="book_file" 
                value="{{$book->images}}""> <br>

                @error('book_file')
                <span style="color: red">{{$message}}</span>
                @enderror
              </div>
              <div class="form-group">
                <label for="desc">Description</label>
                <textarea class="form-control" id="desc" rows="3" value="" name="book_textarea">{{$book->desc}}</textarea>
                @error('book_textarea')
                <span style="color: red">{{$message}}</span>
                @enderror
              </div>
              <button type="submit" class="btn btn-danger my-2">Submit</button>
        </form>
</div>
</div>
@endsection
