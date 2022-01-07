@extends('layout.layout ')
@section('title','Book Form')

@section('books-form')
<div class="f-flex">
  <div class="game-outer">
      <h2 class="text-center" style="margin: 45px;">Add Book Products</h2>
      <div class="game-container-form">
          <form action="{{url('book/book-form')}}" method="post" enctype="multipart/form-data">
              @csrf
                @if($errors->any())
                {{$errors}}
                @endif
              <div class="form-group">
                  <label for="gname">Name</label>
                  <input type="text" class="form-control custom-form" id="gname"  placeholder="Enter Game Name" name="book_name">
                  @error('book_name')
                  <span style="color: red">{{$message}}</span>
                  @enderror
                </div>
                <div class="form-group  mt-4">
                  <label for="gprice">Price</label>
                  <input type="text" class="form-control custom-form" id="gprice" placeholder="Enter Price" name="book_price">
                  @error('book_price')
                  <span style="color: red">{{$message}}</span>
                  @enderror
                </div>
                <div class="form-group mt-3">
                  <label for="gfile">Please Choose File</label>
                  <input type="file" class="form-control-file" id="gfile" name="book_file"> <br>
                  @error('book_file')
                  <span style="color: red">{{$message}}</span>
                  @enderror
                </div>
                <div class="form-group mt-4">
                  <label for="desc">Description</label>
                  <textarea class="form-control custom-form" id="desc" rows="3" name="book_textarea"></textarea>
                  @error('book_textarea')
                  <span style="color: red">{{$message}}</span>
                  @enderror
                </div>
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
          </form>
      
      </div>
  
  </div>
  </div>
@endsection
