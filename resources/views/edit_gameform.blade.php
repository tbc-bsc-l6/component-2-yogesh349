@extends('layout.layout')
@section('title','Edit Game')
    
@section('edit-game-form')


<div class="f-flex">
<div class="game-outer">
    <h2 class="text-center" style="margin: 45px;">Edit Game Products</h2>
        <form action="{{route('update-game',$game->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
           
            <div class="form-group">
                <label for="gname">Name</label>
                <input type="text" class="form-control custom-form" id="gname"  placeholder="Enter Game Name" name="game_name" value="{{$game->name}}">
                @error('game_name')
                <span style="color: red">{{$message}}</span>
                @enderror
              </div>
              <div class="form-group  mt-4">
                <label for="gprice">Price</label>
                <input type="text" class="form-control custom-form" id="gprice" placeholder="Enter Price" name="game_price" value="{{$game->price}}" >
                @error('game_price')
                <span style="color: red">{{$message}}</span>
                @enderror
              </div>

              <div class="form-group">
                <label for="gfile">Please Choose File</label>
                <input type="file" class="form-control-file" id="gfile" name="game_file" 
                value="{{$game->images}}"  value="{{$game->images}}"><br>
                @error('game_file')
                <span style="color: red">{{$message}}</span>
                @enderror
              </div>
              <div class="form-group">
                <label for="desc">Description</label>
                <textarea class="form-control custom-form" id="desc" rows="3" value="" name="game_textarea">{{$game->desc}}</textarea>
                @error('game_textarea')
                <span style="color: red">{{$message}}</span>
                @enderror
              </div>
              <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
</div>
</div>
@endsection
