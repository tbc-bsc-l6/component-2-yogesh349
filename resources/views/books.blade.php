@extends('layout.layout')
@section('title','Books')


@section('books-form')
<div class="game-outer">
    <h2 class="text-center" style="margin: 45px;">Add Book Products</h2>
    <div class="game-container-form">
        <form action="" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control custom-form" id="sname"  placeholder="Enter Book Name" name="[rice">
              </div>
              <div class="form-group  mt-4">
                <label for="price">Price</label>
                <input type="text" class="form-control custom-form" id="price" placeholder="Enter Price" name="price">
              </div>
              <div class="form-group">
                <label for="exampleFormControlFile1">Example file input</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
              </div>
              <div class="form-group">
                <label for="desc">Description</label>
                <textarea class="form-control custom-form" id="desc" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    
    </div>

</div>    
@endsection
