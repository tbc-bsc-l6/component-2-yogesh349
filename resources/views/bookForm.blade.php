@extends('layout.layout ')
@section('title','Book Form')

@section('books-form')
<div class="game-outer">
    <h2 class="text-center" style="margin: 45px;">Add Book Products</h2>
    <div class="game-container-form">
        <form action="{{url('book/book-form')}}" method="post">
          @csrf

            @if($errors->any())
            {{$errors}}
                
            @endif
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control custom-form" id="sname"  placeholder="Enter Book Name" name="bname">
              </div>
              <div class="form-group  mt-4">
                <label for="price">Price</label>
                <input type="text" class="form-control custom-form" id="price" placeholder="Enter Price" name="bprice">
              </div>
              <div class="form-group">
                <label for="exampleFormControlFile1">Example file input</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="bfile">
              </div>
              <div class="form-group">
                <label for="desc">Description</label>
                <textarea class="form-control custom-form" id="desc" rows="3" name="btextarea"></textarea>
              </div>
              <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    
    </div>

</div>    
@endsection
