@extends('layout.layout')
@section('title','Login')
@section('user-form')
<div class="user-login-form">

    <div class="user_login ">
        <form action="" method="">
      <div class="form-group">
        <label for="fnam">First Name</label>
        <input type="text" class="form-control custom-form" id="fname" aria-describedby="fname" placeholder="Enter first name">
      </div>
      <div class="form-group mt-4">
        <label for="fnam">Last Name</label>
        <input type="text" class="form-control custom-form" id="lname" aria-describedby="lname" placeholder="Enter last name">
      </div>
      <div class="form-group mt-4">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control custom-form" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-groupmt-4">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control custom-form" id="exampleInputPassword1" placeholder="Password">
      </div>
      <div class="form-group mt-4">
        <label for="exampleInputPassword2">Confirm Password</label>
        <input type="password" class="form-control custom-form" id="exampleInputPassword2" placeholder="Confirm Password">
      </div>
      <button type="submit" class="btn btn-primary mt-4">Submit</button>
    </form>
    </div>

</div>

    
@endsection