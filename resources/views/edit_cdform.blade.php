@extends('layout.layout')
@section('title','Edit Form')
@section('edit-game-form')
<div class="f-flex">
  <div class="game-outer">
    <h2 class="text-center" style="margin: 45px;">Edit CD Products</h2>
        <form action="{{route('update_cd',$cd->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="cd_name">Name</label>
                <input type="text" class="form-control" id="cd_name"  placeholder="Enter CD Name" name="cd_name" value="{{$cd->name}}">
                @error('cd_name')
                <span style="color: red">{{$message}}</span>
                @enderror
              </div>
              <div class="form-group  mt-4">
                <label for="cd_price">Price</label>
                <input type="text" class="form-control" id="cd_price" placeholder="Enter Price" name="cd_price" value="{{$cd->price}}" >
                @error('cd_price')
                <span style="color: red">{{$message}}</span>
                @enderror
              </div>
              <div class="form-group mt-3">
                <label for="cd_file">Please Choose File</label>
                <input type="file" class="form-control-file" id="cd_file" name="cd_file" 
                value="{{$cd->images}}""> <br>
                @error('cd_file')
                <span style="color: red">{{$message}}</span>
                @enderror
              </div>
              <div class="form-group mt-3">
                <label for="desc">Description</label>
                <textarea class="form-control custom-form" id="desc" rows="3" value="" name="cd_textarea">{{$cd->desc}}</textarea>
                @error('cd_textarea')
                <span style="color: red">{{$message}}</span>
                @enderror
              </div>
              <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    


</div>

</div>

@endsection
