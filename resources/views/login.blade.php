@extends('layout.layout')
@section('title','Login')
@section('user-form')
<div class="user-login-form">

    <div class="container">
        <form>

      <div class="form-group">
        <label for="fnam">First Name</label>
        <input type="text" class="form-control" id="fname" aria-describedby="fname" placeholder="Enter first name">
      </div>
      <div class="form-group">
        <label for="fnam">Last Name</label>
        <input type="text" class="form-control" id="lname" aria-describedby="lname" placeholder="Enter last name">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword2">Confirm Password</label>
        <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Confirm Password">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>

</div>

    
@endsection