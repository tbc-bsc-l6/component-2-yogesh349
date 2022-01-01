@extends('layout.layout')
@section('title','CD FORM')


@section('game-form')
<div class="game-outer">
    <h2 class="text-center" style="margin: 45px;">Add CD Products</h2>
    <div class="game-container-form">
        <form action="{{url('cd/cd-form')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="cname">Name</label>
                <input type="text" class="form-control custom-form" id="cname"  placeholder="Enter Game Name" name="cname">
              </div>
              <div class="form-group  mt-4">
                <label for="gprice">Price</label>
                <input type="text" class="form-control custom-form" id="cprice" placeholder="Enter Price" name="cprice">
              </div>
              <div class="form-group">
                <label for="cfile">Please Choose File</label>
                <input type="file" class="form-control-file" id="cfile" name="cfile">
              </div>
              <div class="form-group">
                <label for="desc">Description</label>
                <textarea class="form-control custom-form" id="desc" rows="3" name="ctextarea"></textarea>
              </div>
              <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    
    </div>

</div>
@endsection
