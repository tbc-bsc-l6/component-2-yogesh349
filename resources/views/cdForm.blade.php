@extends('layout.layout')
@section('title','CD FORM')


@section('game-form')
<div class="f-flex">
<div class="game-outer">
    <h2 class="text-center" style="margin: 45px;">Add CD Products</h2>
        <form action="{{url('cd/cd-form')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="cname">Name</label>
                <input type="text" class="form-control custom-form" id="cname"  placeholder="Enter Game Name" name="cd_name">
                @error('cd_name')
                <span style="color: red">{{$message}}</span>
                @enderror
              </div>
              <div class="form-group  mt-4">
                <label for="gprice">Price</label>
                <input type="text" class="form-control custom-form" id="cprice" placeholder="Enter Price" name="cd_price">
                @error('cd_price')
                <span style="color: red">{{$message}}</span>
                @enderror
              </div>
              <div class="form-group mt-3">
                <label for="cfile">Please Choose File</label>
                <input type="file" class="form-control-file" id="cfile" name="cd_file"> <br>
                @error('cd_file')
                <span style="color: red">{{$message}}</span>
                @enderror
              </div>
              <div class="form-group mt-3">
                <label for="desc">Description</label>
                <textarea class="form-control custom-form" id="desc" rows="3" name="cd_textarea"></textarea>
                @error('cd_textarea')
                <span style="color: red">{{$message}}</span>
                @enderror
              </div>
              <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
</div>
</div>
@endsection
