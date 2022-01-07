@extends('layout.layout')
@section('title','Add Game')

@section('show-submit_form_message')
@if (session()->has('success'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

@endif
@endsection

@section('game-form')
<div class="f-flex">
<div class="game-outer">
    <h2 class="text-center" style="margin: 45px;">Add Game Products</h2>
    <div class="game-container-form">
        <form action="{{url('game/game-form')}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="gname">Name</label>
                <input type="text" class="form-control custom-form" id="gname"  placeholder="Enter Game Name" name="game_name">
                @error('game_name')
                <span style="color: red">{{$message}}</span>
                @enderror
              </div>
              <div class="form-group  mt-4">
                <label for="gprice">Price</label>
                <input type="text" class="form-control custom-form" id="gprice" placeholder="Enter Price" name="game_price">
                @error('game_price')
                <span style="color: red">{{$message}}</span>
                @enderror
              </div>
              <div class="form-group mt-3">
                <label for="gfile">Please Choose File</label>
                <input type="file" class="form-control-file" id="gfile" name="game_file"> <br>
                @error('game_file')
                <span style="color: red">{{$message}}</span>
                @enderror
              </div>
              <div class="form-group mt-4">
                <label for="desc">Description</label>
                <textarea class="form-control custom-form" id="desc" rows="3" name="game_textarea"></textarea>
                @error('game_textarea')
                <span style="color: red">{{$message}}</span>
                @enderror
              </div>
              <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    
    </div>

</div>
</div>
@endsection
