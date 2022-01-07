@extends('layout.layout')
@section('edit-game-form')

<div class="f-flex">
<div class="game-outer">
    <h2 class="text-center" style="margin: 45px;">Edit Game Products</h2>
        <form action="{{url('game/game-form')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="gname">Name</label>
                <input type="text" class="form-control custom-form" id="gname"  placeholder="Enter Game Name" name="gname" value="{{$game->name}}">
                @error('cd_name')
                <span style="color: red">{{$message}}</span>
                @enderror
              </div>
              <div class="form-group  mt-4">
                <label for="gprice">Price</label>
                <input type="text" class="form-control custom-form" id="gprice" placeholder="Enter Price" name="gprice" value="{{$game->price}}" >
              </div>
              <div class="form-group">
                <label for="gfile">Please Choose File</label>
                <input type="file" class="form-control-file" id="gfile" name="gfile" 
                value="{{$game->images}}"  value="{{$game->images}}">
              </div>
              <div class="form-group">
                <label for="desc">Description</label>
                <textarea class="form-control custom-form" id="desc" rows="3" value="" name="gtextarea">{{$game->desc}}</textarea>
              </div>
              <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
</div>
</div>
@endsection
