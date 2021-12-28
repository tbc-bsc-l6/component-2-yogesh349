@extends('layout.layout')
@section('title','Login')

@section('user-form')

<h3 class="text-center">Login Form</h3>

<div class="container login_form ">
    <div class="login_form">
        <form action="" method="">
            <div class="form-group mt-4">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control custom-form" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group mt-4">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control custom-form" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="register_flex">
                <div class="btnflex"> 
                  <button type="submit" class="btn btn-primary mt-4">Submit</button>
                </div>
                <div class="register_linkflex">
              <a class="register_link" href="{{url('signupform')}}"><span>Haven't yet registered</span></a> 
                </div>
            </div>
           
          </form>

    </div>
    
</div>



@endsection